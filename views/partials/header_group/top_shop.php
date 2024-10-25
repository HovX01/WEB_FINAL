<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0 mb-5">
        <a href="/" class="navbar-brand ms-lg-5">
            <h1 class="m-0 text-uppercase text-dark"><i class="bi bi-shop fs-1 text-primary me-3"></i>Pet Shop</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/" class="nav-item nav-link">Home</a>
                <a href="/about" class="nav-item nav-link">About</a>
                <a href="/service" class="nav-item nav-link">Service</a>
                <a href="/product" class="nav-item nav-link">Product</a>
                <?php if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'admin'): ?>
                    <a href="/admin" class="nav-item nav-link">Admin</a>
                <?php endif; ?>
                <?php if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'admin'): ?>
                    <a href="/login" class="nav-item nav-link active nav-contact bg-primary text-dark px-5 ms-lg-5">Login<i class="bi bi-arrow-right"></i></a>
                <?php elseif (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'user'): ?>
                    <a href="/logout" class="nav-item nav-link active nav-contact bg-primary text-dark px-5 ms-lg-5">Logout<i class="bi bi-arrow-right"></i></a>
                <?php else: ?>
                    <a href="/login" class="nav-item nav-link active nav-contact bg-primary text-dark px-5 ms-lg-5">Login<i class="bi bi-arrow-right"></i></a>
                <?php endif; ?>
            </div>
        </div>
    </nav>