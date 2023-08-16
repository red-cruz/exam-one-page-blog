<header style="height: 80px">
  <nav class="navbar fixed-top bg-body-tertiary">
    <div class="container-fluid">
      <!-- Brand -->
      <a class="navbar-brand" href="#">
        <b class="d-inline-block align-text-top" style="font-family: Georgia, 'Times New Roman', Times, serif">One Page
          Blog</b>
      </a>
      <!-- Login / Logout -->
      <div class="float-end">
        <a id="login-switch" data-bs-toggle="modal" data-bs-target="#login-modal" href="#"
          class="btn d-inline rounded-circle ms-0" role="button">
          <!-- Login -->
          <?php if (!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] !== true): ?>
          <i class="fa-solid fa-right-to-bracket"></i>
          <!-- Logout -->
          <?php else: ?>
          <i class="fa-solid fa-arrow-right-from-bracket"></i>
          <?php endif; ?>
        </a>
        <div class="d-inline">
          <input type="checkbox" class="d-none" id="theme-switch-toggle" />
          <label for="theme-switch-toggle" class="btn btn-dark rounded-circle">
            <i class="fa-regular fa-moon"></i>
          </label>
        </div>
      </div>
    </div>
  </nav>
</header>