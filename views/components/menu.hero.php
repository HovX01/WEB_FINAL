<section id="menu" class="menu section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <p><span>Check Our</span> <span class="description-title">Furniture</span></p>
  </div><!-- End Section Title -->

  <div class="container">

    <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <li class="nav-item">
            <a class="nav-link '.$add.'" data-bs-toggle="tab" data-bs-target="#nice">
            <h4>nice</h4>
            </a>
        </li>
    </ul>

    <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
        <div class="tab-pane fade '.$add.'" id="'.str_replace(" ", '_', $key).'">
        <div class="tab-header text-center">
            <p>Menu</p>
            <h3>'.$key.'</h3>
        </div>
        <div class="row gy-5">
            <div class="col-lg-4 menu-item">
                <a href="assets/img/furniture/items/'.$key.'/'.$it.'" class="glightbox"><img src="assets/img/furniture/items/'.$key.'/'.$it.'" class="menu-img img-fluid" alt=""></a>
                <h4>'.explode('.', $it)[0].'</h4>
                <p class="price">
                    $'.mt_rand(10, 500).'.00
                </p>
            </div>
        </div>
    </div>
    </div>

    </div>

  </div>

</section>