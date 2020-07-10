<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->load->view('admin/head'); ?>
    <title>Admin Panel</title>
</head>
<body>
    <div id="vh" class="container d-flex justify-content-center">
        <div class="align-self-center col-md-4">
            <div class="card shadow">
                <p class="card-header text-center">LOGIN ADMIN</p>
                <!-- <form action="<?php echo base_url().'index.php/admin/dashboard'; ?>" method="post"> -->
                    <div class="card-body">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="password">
                        </div>
                        <a class="btn btn-primary btn-block" href="<?php echo base_url().'index.php/admin/controller/dashboard'; ?>">LOGIN</a>
                        <!-- <button class="btn btn-primary btn-block" type="submit">LOGIN</button> -->
                    </div>
                <!-- </form> -->
            </div>
        </div>
    </div>
</body>
</html>