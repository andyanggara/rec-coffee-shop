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

    <link rel="stylesheet" type="text/css" href='<?php echo base_url(); ?>assets/css/dataTables.bootstrap4.min.css'>

    <style>
        .row {
            margin-right: 0 !important;
            margin-left: 0 !important;
        }
    </style>
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
            <?php include $page . '.php'; ?>
            <!-- /Content -->
        </div>
        <!-- /Page Content  -->
    </div>
    <!-- /Wrapper -->
</body>

</html>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap4.min.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').DataTable();

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