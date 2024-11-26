<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
               
                Halo Admin - SMK Negeri 1 Soreang
            </a>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
         
            <div class="col-md-3 bg-light p-3">
                <h5 class="text-primary">HOME</h5>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                </ul>
                <h5 class="text-primary mt-3">ADMIN</h5>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Data Guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Data Absensi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Laporan Kehadiran</a>
                    </li>
                </ul>
            </div>

           
            <div class="col-md-9 p-3">
                <h3>Dashboard</h3>
                <div class="row">
                 
                    <div class="col-md-4">
                        <div class="card bg-warning text-white mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Jumlah Guru</h5>
                                <p class="card-text">50 Guru</p>
                                <a href="#" class="text-white">Data Hari Ini</a>
                            </div>
                        </div>
                    </div>
                 
                    <div class="col-md-4">
                        <div class="card bg-success text-white mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Hadir</h5>
                                <p class="card-text">30 Guru</p>
                                <a href="#" class="text-white">Data Hari Ini</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card bg-info text-white mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Terlambat</h5>
                                <p class="card-text">0 Guru</p>
                                <a href="#" class="text-white">Data Hari Ini</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary">Refresh Data</button>
            </div>
        </div>
    </div>

    
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>

</body>
</html>
