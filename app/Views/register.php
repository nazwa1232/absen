<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <title>Register</title>
</head>
<body>
<div class="bg-image" style="background-image: url('<?php echo base_url('assets/image/bg_login.jpg'); ?>'); height: 100vh; background-size: cover; background-position: center;">
    <div class="container h-100"> 
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-4 col-sm-8 col-10"> 
                <div class="bg-primary text-white rounded-4 p-4">
                    <h5 class="text-center">Create Account</h5>
                    <?php if (session()->getFlashdata('errors')): ?>
                        <div class="alert alert-danger">
                            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                <li><?= esc($error) ?></li>
                            <?php endforeach ?>
                        </div>
                    <?php endif; ?>
                    <form action="/register/store" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required placeholder="Enter your username" value="<?= old('username') ?>">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required placeholder="Enter your email" value="<?= old('email') ?>">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required placeholder="Enter your password">
                        </div>
                        <div class="d-grid justify-content-center">
                            <button type="submit" class="btn btn-light btn-block">Register</button> 
                        </div>
                    </form>
                    <p class="text-center mt-3"><small><a href="/login" class="text-light">Already have an account? Login here</a></small></p> 
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>