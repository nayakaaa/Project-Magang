<?= $this->extend('atribut/template'); ?>

<?= $this->section('content'); ?>

<!-- Bootstrap Container for centering content -->
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <!-- Card to contain the login form -->
    <div class="card p-4 shadow-sm" style="max-width: 400px; width: 100%;">
        <h2 class="text-center mb-4">Akun</h2>

        <!-- Display error message if any -->
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger text-center">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <!-- Login Form -->
        <form action="<?= base_url('Home/gantipassword') ?>" method="post">
            <?= csrf_field() ?>

            <!-- Email Input -->
            <div class="mb-3">
                <input type="hidden" name="id" id="id" class="form-control" value="<?= esc($id); ?>">
                <input type="hidden" name="email" id="email" class="form-control" value="<?= esc($email); ?>">
            </div>

            <!-- Password Input -->
            <div class="mb-3">
                <label for="password" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" value="<?= esc($username); ?>" disabled>
            </div>
            <!-- <div class="mb-3">
                <label for="password" class="form-label">Password Lama</label>
                <input type="password" name="oldpassword" id="oldpassword" class="form-control" placeholder="Masukkan Password Lama Disini">
            </div> -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password Baru Disini">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Confirm Password</label>
                <input type="password" name="re-password" id="re-password" class="form-control" placeholder="Masukkan Password Baru Sekali Lagi">
            </div>
            <br>
            <button type="submit" class="btn btn-success w-100">Change Password</button>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>
