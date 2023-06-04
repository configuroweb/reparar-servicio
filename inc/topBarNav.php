<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
  <div class="container-lg d-flex justify-content-between px-4">
    <div class="d-flex align-items-center justify-content-between">
      <a href="https://www.configuroweb.com/tag/premium/" class="logo d-flex align-items-center">
        <img src="<?= validate_image($_settings->info('logo')) ?>" alt="System Logo">
        <span class="d-none d-lg-block"><?= $_settings->info('short_name') ?></span>
      </a>
    </div><!-- End Logo -->
    <nav class="header-nav me-auto">
      <ul class="d-flex align-items-center h-100">
        <li class="nav-item pe-3">
          <a href="<?= base_url ?>" class="nav-link">Inicio</a>
        </li>
        <li class="nav-item pe-3">
          <a href="<?= base_url . '?page=services' ?>" class="nav-link">Nuestros Servicios</a>
        </li>
        <li class="nav-item pe-3">
          <a href="<?= base_url . '?page=booking' ?>" class="nav-link">Reservar</a>
        </li>
        <li class="nav-item pe-3">
          <a href="<?= base_url . "?page=about" ?>" class="nav-link">Nosotros</a>
        </li>
        <li class="nav-item pe-3">
          <a href="<?= base_url . '?page=contact' ?>" class="nav-link">Contáctanos</a>
        </li>
      </ul>
    </nav><!-- End Icons Navigation -->
    <div class="d-flex align-items-center justify-content-between">
      <a href="<?= base_url . 'admin/login.php' ?>" class="btn btn-primary">Acceder</a>
    </div>
  </div>
</header><!-- End Header -->