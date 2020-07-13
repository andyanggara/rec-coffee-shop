<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->load->view('admin/head'); ?>
    <title><?= $titlepage ?></title>
</head>

<body>
    <!-- Wrapper -->
    <div class="wrapper">
        <!-- Sidebar  -->
        <?php include 'sidebar.php'; ?>
        <!-- /Sidebar  -->

        <!-- Page Content  -->
        <div id="content" class="">
            <!-- Navbar -->
            <?php include 'navbar.php'; ?>
            <!-- /Navbar -->

            <!-- Content -->
            <?php include $page.'.php'; ?>
            <!-- /Content -->
        </div>
        <!-- /Page Content  -->
    </div>
    <!-- /Wrapper -->
</body>

</html>

<script type="text/javascript">
    $(document).ready(function() {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar, #content').toggleClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
</script>