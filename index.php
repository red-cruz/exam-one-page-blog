<?php
session_start();
require_once './helpers.php';
// Head
include './views/layouts/header.html';
?>

<body data-bs-theme="dark">
  <?php include './views/layouts/nav.php' ?>

  <hr />
  <!-- Comment section -->
  <div class="container">
    <form id="add-comment" class="needs-validation mb-2" novalidate>
      <div class="input-group mb-3">
        <div class="form-floating">
          <input type="text" class="form-control" id="comment" placeholder="Comment" autocomplete="off" />
          <label for="comment">Comment</label>
        </div>
        <button id="addCourseBtn" type="submit" class="btn btn-lg bg-body-tertiary text-white" data-bs-theme="dark">
          <i class="fa-regular fa-paper-plane"></i>
        </button>
      </div>
    </form>
  </div>

  <?php include "./views/partials/login-modal.php" ?>
</body>

</html>