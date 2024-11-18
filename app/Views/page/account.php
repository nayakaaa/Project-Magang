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
        <form >         
            <?= csrf_field() ?>
            
            <!-- Email Input -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="email" class="form-control" value="<?= esc($email); ?>" disabled>
            </div>

            <!-- Password Input -->
            <div class="mb-3">
                <label for="password" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" value="<?= esc($username); ?>" disabled>
            </div>
            <br>
            <a href="/Home/changepass" type="submit" class="btn btn-success w-40 ms-2">Change Password</a>
            <a href="/Login/logout" type="submit" class="btn btn-danger w-50 d-inline">Logout</a>
            <br>
            <br>
            <form action="<?= base_url('Signup/insertGambar') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                    <input type="hidden" name="id" id="id" class="form-control" value="<?= esc($id); ?>" disabled>
                    <div class="d-flex justify-content-center">
                        <label class="form-label">Masukan Foto Profil</label>
                    </div>
                    <input type="file" class="form-control mb-3" name="picture" id="picture" accept="image/*" required>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary w-100 mb-3">Ubah Foto Profil</button>
                    </div>
            </form>
        </form>
        
    </div>
</div>

<?= $this->endSection(); ?>
