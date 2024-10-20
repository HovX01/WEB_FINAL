<?php
$db = Core\App::resolve(Core\Database::class);
$sql = 'SELECT * FROM categories';
$stmt = $db->query($sql);
$categories = $stmt->get();
?>
<style>
    .btn-outline-blue-light {
        --bs-btn-color: #348fe2;
        --bs-btn-border-color: #348fe2;
        --bs-btn-hover-color: #FFFFFF;
        --bs-btn-hover-bg: #348fe2;
        --bs-btn-hover-border-color: #348fe2;
        --bs-btn-focus-shadow-rgb: 52, 143, 226;
        --bs-btn-active-color: #FFFFFF;
        --bs-btn-active-bg: #348fe2;
        --bs-btn-active-border-color: #348fe2;
        --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
        --bs-btn-disabled-color: #348fe2;
        --bs-btn-disabled-bg: transparent;
        --bs-btn-disabled-border-color: #348fe2;
        --bs-gradient: none
    }
</style>
<section id="menu" class="menu section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <p><span>Check Our</span> <span class="description-title">Furniture</span></p>
    </div><!-- End Section Title -->

    <div class="container">

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <?php foreach ($categories as $key => $category): ?>
                <li class="nav-item">
                    <a class="nav-link <?php if ($key == 0) echo 'active show' ?>" data-bs-toggle="tab"
                       data-bs-target="#tab_category_<?php echo str_replace(" ", '_', $key) ?>">
                        <h4><?php echo $category['title'] ?></h4>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

            <?php foreach ($categories as $key => $category): ?>
                <div class="tab-pane fade <?php if ($key == 0) echo 'active show' ?>"
                     id="tab_category_<?php echo str_replace(" ", '_', $key) ?>">
                    <div class="tab-header text-center">
                        <p>Menu</p>
                        <h3><?php echo $category['title'] ?></h3>
                    </div>
                    <?php
                    $sql = 'SELECT * FROM products WHERE category_id = :category_id';
                    $stmt = $db->query($sql, [
                        'category_id' => $category['id']
                    ]);
                    $products = $stmt->get();
                    ?>
                    <div class="row gy-5">
                        <?php foreach ($products as $product): ?>
                            <div class="col-lg-4 menu-item">
                                <a href="<?php echo $product['image'] ?>" class="glightbox">
                                    <img src="<?php echo $product['image'] ?>" class="menu-img img-fluid" alt=""
                                         style="padding: 0;">
                                </a>
                                <h2><?php echo $product['title'] ?></h2>
                                <h2 style="color: var(--accent-color);">
                                    $<?= number_format($product['price'], 2) ?>
                                </h2>
                                <button
                                        type="button"
                                        class="btn btn-blue price checkout-post"
                                        data-product-id="<?php echo $product['id'] ?>"
                                        style="
                                        font-family: var(--heading-font),serif;
                                        font-size: 1.2rem;
                                        color: rgb(37 99 235);
                                        --bs-btn-bg: rgb(219 234 254) ;
                                        --bs-btn-hover-bg: rgb(191 219 254) ;
                                        --bs-btn-active-bg: rgb(191 219 254) ;
                                        --bs-btn-border-radius: 9999px;
                                        --bs-btn-border-width: 0px;
                                        --bs-btn-padding-x: 1.5rem;
                                        "
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="lucide lucide-shopping-cart"
                                         style="height: 1.2rem; width: 1.2rem; margin-right: 0.5rem;"
                                         data-id="23">
                                        <circle cx="8" cy="21" r="1"></circle>
                                        <circle cx="19" cy="21" r="1"></circle>
                                        <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
                                    </svg>
                                    Add to Cart
                                </button>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

</section>