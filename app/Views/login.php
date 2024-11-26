<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <title>Login</title>
</head>
<body>
<div class="bg-image" style="background-image: url('<?php echo base_url('assets/image/bg_login.jpg'); ?>'); height: 100vh; background-size: cover; background-position: center;">
    <div class="container h-100"> 
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-4 col-sm-8 col-10"> 
                <div class="bg-primary text-white rounded-4 p-4">
                    <h5 class="text-center">Login</h5>

                    <!-- Menampilkan pesan kesalahan jika ada -->
                    <?php if (session()->getFlashdata('msg')): ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session()->getFlashdata('msg') ?>
                        </div>
                    <?php endif; ?>

                    <!-- Form login -->
                    <form action="/login/auth" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required placeholder="Enter your username" value="<?= old('username') ?>">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required placeholder="Enter your password">
                        </div>
                        <div class="d-grid justify-content-center">
                            <button type="submit" class="btn btn-light btn-block">Login</button> 
                        </div>
                    </form>

                    <p class="text-center mt-3"><small><a href="/register" class="text-light">Create Account</a></small></p> 
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>