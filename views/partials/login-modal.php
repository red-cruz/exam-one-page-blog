<?php
use function helpers\controller_path;

?>
<div class="modal fade" id="login-modal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Admin Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="login-form"
        action="<?=controller_path('login');?>"
        method="POST" novalidate>
        <div class="modal-body">
          <div class="form-floating mb-3">
            <input name="email" type="email" class="form-control" id="email" placeholder="email" autocomplete="email"
              required />
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input name="password" type="password" class="form-control" id="password" placeholder="Password"
              autocomplete="current-password" required />
            <label for="password">Password</label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>