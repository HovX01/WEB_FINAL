<?php

use Illuminate\Support\Carbon;

$db = app(\Core\Database::class);
$lastWeek = Carbon::now()->subWeek()->format('Y-m-d');
$last2Weeks = Carbon::now()->subWeeks(2)->format('Y-m-d');

$products = $db->query('SELECT * FROM products')->get() ?? [];
$productCount = count($products);

$orders = $db->query('SELECT * FROM orders')->get() ?? [];
$ordersCount = count($orders);
//$lastWeekOrders = $db->query("SELECT * FROM orders WHERE created_at BETWEEN '$lastWeek' AND '$last2Weeks'")->get() ?? [];
//$lastWeekOrdersCount = count($lastWeekOrders);
//$comparePercentOrders = $lastWeekOrders ? number_format($ordersCount / $lastWeekOrdersCount * 100, 2) : null;

$pendingOrders = array_filter($orders, function ($order) {
    return $order['status'] == 'pending';
});
$pendingOrdersCount = count($pendingOrders);

$paidOrders = array_filter($orders, function ($order) {
    return $order['status'] == 'paid';
});
$paidOrdersCount = count($paidOrders);

$cancelledOrders = array_filter($orders, function ($order) {
    return $order['status'] == 'cancelled';
});
$cancelledOrdersCount = count($cancelledOrders);

$totalRevenue = array_reduce($orders, function ($carry, $order) {
    return $carry + $order['total'];
}, 0);

$topCategoriesByRevenue = $db->query(
    "
        SELECT 
            categories.*,
            SUM(orders.total) AS revenue
        FROM categories
        JOIN products ON categories.id = products.category_id
        JOIN product_orders ON products.id = product_orders.product_id
        JOIN orders ON product_orders.order_id = orders.id
        GROUP BY categories.id
        ORDER BY revenue DESC
        LIMIT 6
    "
)->get() ?? [];

$topProductsByUnitsSold = $db->query(
    "
        SELECT 
            products.*,
            SUM(product_orders.quantity) AS units_sold
        FROM products
        JOIN product_orders ON products.id = product_orders.product_id
        JOIN orders ON product_orders.order_id = orders.id
        GROUP BY products.id
        ORDER BY units_sold DESC
        LIMIT 5;
    "
)->get() ?? [];

view('admin/index.view.php', [
    'totalRevenue' => $totalRevenue,
    'productCount' => $productCount,
    'ordersCount' => $ordersCount,
    'pendingOrdersCount' => $pendingOrdersCount,
    'paidOrdersCount' => $paidOrdersCount,
    'cancelledOrdersCount' => $cancelledOrdersCount,
    'topCategoriesByRevenue' => $topCategoriesByRevenue,
    'topProductsByUnitsSold' => $topProductsByUnitsSold,
]);