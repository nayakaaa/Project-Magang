<?= $this->extend('atribut/template'); ?>

<?= $this->section('content'); ?>

<!-- Bootstrap Container for centering content -->
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <!-- Card to contain the signup form -->
    <div class="card p-4 shadow-sm" style="max-width: 400px; width: 100%;">
        <h2 class="text-center mb-4">Signup</h2>

        <!-- Display error messages if any -->
        <?php if (session()->getFlashdata('errors')): ?>
            <div class="alert alert-danger">
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <p class="mb-0"><?= $error ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <!-- Display success message if any -->
        <?php if (session()->getFlashdata('message')): ?>
            <div class="alert alert-success text-center">
                <?= session()->getFlashdata('message') ?>
            </div>
        <?php endif; ?>

        <!-- Signup Form -->
        <form action="<?= base_url('Signup/daftar') ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>

            <!-- Email Input -->
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>

            <!-- Username Input -->
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" required>
            </div>

            <!-- Password Input -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>

            <div class="mb-3">
                <input type="file" class="form-control" style="display: none;" name="picture" id="picture" value="Image/logo.png">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary w-100">Signup</button>

            <!-- Login Link -->
            <div class="text-center mt-3">
                <p>Sudah Punya Akun? <a href="/Login" class="text-decoration-none">Login</a></p>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>
