<?php
use function helpers\controller_path;

?>
<header style="height: 80px">
  <nav class="navbar fixed-top bg-body-tertiary">
    <div class="container-fluid">
      <!-- Brand -->
      <a class="navbar-brand" href="#">
        <b class="d-inline-block align-text-top" style="font-family: Georgia, 'Times New Roman', Times, serif">One Page
          Blog</b>
      </a>

      <div class="float-end">
        <!-- Login -->
        <?php if (!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] !== true): ?>
        <a id="login-switch" data-bs-toggle="modal" data-bs-target="#login-modal" href="#" class="btn d-inline ms-0"
          role="button">
          Login
        </a>
        <!-- Logout -->
        <?php else: ?>
        <a href="<?=controller_path('logout');?>"
          class="btn d-inline ms-0" role="button">
          Logout
        </a>
        <?php endif; ?>
        <!-- Theme toggle -->
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