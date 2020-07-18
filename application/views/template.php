<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/all.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"/>
    <script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <title><?= $titlepage ?></title>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-sm navbar-light bg-light mb-4 shadow">
        <a class="navbar-brand" href="<?php echo site_url('') ?>">REKOMENDASI COFFEE SHOP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('') ?>">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('rekomendasi') ?>">REKOMENDASI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('about') ?>">ABOUT</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container" id="vh">
        <?php include $page . '.php'; ?>
    </div>
    <footer>
        <div class="bg-light text-center py-3">© 2020 Copyright</div>
    </footer>
</body>

</html>