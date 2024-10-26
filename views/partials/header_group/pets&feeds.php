<div class="container-fluid py-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase">Products</h6>
            <h1 class="display-5 text-uppercase mb-0">Pets for you</h1>
        </div>
        <div class="owl-carousel product-carousel">
            <?php foreach ($pets as $pet): ?>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="<?= htmlspecialchars($pet['image']); ?>"
                             alt="<?= htmlspecialchars($pet['name']); ?>">
                        <h6 class="text-uppercase"><?= htmlspecialchars($pet['name']); ?></h6>
                        <h5 class="text-primary mb-0">$<?= number_format($pet['price'], 2); ?></h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-primary py-2 px-3" href=""><i class="bi bi-cart"></i></a>
                            <a class="btn btn-primary py-2 px-3" href=""><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase">Products</h6>
            <h1 class="display-5 text-uppercase mb-0">Feeds for your pets</h1>
        </div>
        <div class="owl-carousel product-carousel">
            <?php foreach ($foods as $food): ?>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="<?= htmlspecialchars($food['image']); ?>"
                             alt="<?= htmlspecialchars($food['name']); ?>">
                        <h6 class="text-uppercase"><?= htmlspecialchars($food['name']); ?></h6>
                        <h5 class="text-primary mb-0">$<?= number_format($food['price'], 2); ?></h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-primary py-2 px-3" href=""><i class="bi bi-cart"></i></a>
                            <a class="btn btn-primary py-2 px-3" href=""><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>