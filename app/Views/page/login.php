<?= $this->extend('atribut/template'); ?>

<?= $this->section('content'); ?>

<!-- Bootstrap Container for centering content -->
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <!-- Card to contain the login form -->
    <div class="card p-4 shadow-sm" style="max-width: 400px; width: 100%;">
        <h2 class="text-center mb-4">Login</h2>

        <!-- Display error message if any -->
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger text-center">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <!-- Login Form -->
        <form action="<?= base_url('login/masuk') ?>" method="post">
            <?= csrf_field() ?>

            <!-- Email Input -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <!-- Password Input -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary w-100">Login</button>

            <!-- Signup Link -->
            <div class="text-center mt-3">
                <p>Belum Punya Akun? <a href="/Signup" class="text-decoration-none">Signup</a></p>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>
