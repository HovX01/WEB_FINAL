<?php
    $db = Core\App::resolve(Core\Database::class);
    $sql = 'SELECT * FROM categories';
    $stmt = $db->query($sql);
    $categories = $stmt->get();
?>
<section id="menu" class="menu section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <p><span>Check Our</span> <span class="description-title">Furniture</span></p>
  </div><!-- End Section Title -->

  <div class="container">

    <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <?php foreach ($categories as $key => $category): ?>
        <li class="nav-item">
            <a class="nav-link <?php if($key == 0) echo 'active show' ?>" data-bs-toggle="tab" data-bs-target="#tab_category_<?php echo str_replace(" ", '_', $key) ?>">
                <h4><?php echo $category['title'] ?></h4>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>

    <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

        <?php foreach ($categories as $key => $category): ?>
        <div class="tab-pane fade <?php if($key == 0) echo 'active show' ?>" id="tab_category_<?php echo str_replace(" ", '_', $key) ?>">
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
                        <img src="<?php echo $product['image'] ?>" class="menu-img img-fluid" alt="">
                    </a>
                    <h4><?php echo $product['title'] ?></h4>
                    <button type="button" class="btn btn-outline-primary price checkout-post" data-product-id="<?php echo $product['id'] ?>">
                        <?php echo $product['price'] ?>$
                    </button>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

  </div>

</section>