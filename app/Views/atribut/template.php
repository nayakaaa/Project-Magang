<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title; ?></title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .navbar-img {
  width: 40px;
  height: 40px;
  object-fit: cover; /* Ensures the image scales properly */
  border-radius: 50%; /* Makes the image circular */
}

.navbar-nav .nav-link.bold {
  font-weight: bold; /* Makes the "USER" text bold */
}

.nav-item .user-options {
  display: none; /* Initially hidden */
  position: absolute;
  top: 100%; /* Positions below the "USER" link */
  left: 0;
  background-color: #f8f9fa; /* Background color to match the navbar */
  border: 1px solid #dee2e6; /* Border to match the dropdown menu style */
  border-radius: 0.25rem; /* Rounded corners */
  padding: 0.5rem;
  width: 200px; /* Adjust width as needed */
}

.nav-item:hover .user-options {
  display: block; /* Show options when hovering over the nav item */
}

</style>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <img src="<?= base_url('Image/logo3.png'); ?>" alt="logo" class="navbar-img ms-4" href="/">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ms-4" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/About">About</a>
        </li><li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
        </li>
      </ul>
      
            <ul class="navbar-nav me-3 d-flex align-items-center">
                <li class="nav-item d-flex align-items-center position-relative">
                    <?php if (!empty($data['picture']) && file_exists(FCPATH . $data['picture'])): ?>
                        <img src="<?= base_url($data['picture']) ?>" alt="Profile Picture" class="navbar-img rounded-circle">
                    <?php else: ?>
                        <img src="<?= base_url('Image/user.png') ?>" alt="Default Logo" class="navbar-img rounded-circle">
                    <?php endif; ?>
                    <!-- <img src="<?= base_url('Image/user.png'); ?>" alt="user-profile" class="navbar-img"> -->
                    <a class="nav-link bold ms-2" aria-current="page" href="/Home/akun"><?= esc($username); ?></a>
                </li>
            </ul>


    </div>
  </div>
</nav>

<?= $this->renderSection('content'); ?>


<footer class="bg-light text-center text-lg-start mt-auto">
    <div class="container p-4">
        <div class="text-center">
            <p class="mb-0">&copy; <?= date('Y') ?> Nayaka Adyatma. All rights reserved.</p>
        </div>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>