<nav class="navbar navbar-expand-lg py-2">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Caka Architect Studio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link mx-2 fs-5 <?php if ($title == "Caka Architect Studio") echo "active"; ?>" aria-current="page" href="<?= base_url('/'); ?>">Home</a>
                <a class="nav-link mx-2 fs-5 <?php if ($title == "Projects") echo "active"; ?>" href="<?= base_url('/projects'); ?>">Projects</a>
                <a class="nav-link mx-2 fs-5 <?php if ($title == "Pricing & Procedure") echo "active"; ?>" href="<?= base_url('/pricing-and-procedure'); ?>">Pricing & Procedure</a>
                <a class="nav-link mx-2 fs-5 <?php if ($title == "Contact") echo "active"; ?>" href="<?= base_url('/contact'); ?>">Contact</a>
                <a class="nav-link mx-2 me-2 fs-5 <?php if ($title == "About") echo "active"; ?>" href="<?= base_url('/about'); ?>">About</a>
            </div>
        </div>
    </div>
</nav>