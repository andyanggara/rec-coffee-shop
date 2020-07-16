<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->load->view('admin/head'); ?>
    <title>Login</title>
</head>

<body>
    <div id="vh" class="container d-flex justify-content-center">
        <div class="align-self-center col-md-4">
            <div class="card shadow">
                <p class="card-header text-center">LOGIN ADMIN</p>
                <form action="validation" method="POST">
                    <?php
                    if (isset($error_message)) {
                        echo "<div class='wrap-input101 '>" . $error_message . "</div>";
                    } ?>
                    <div class="card-body">
                        <div class="form-group validate-input">
                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="form-group validate-input">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url() ?>assets/admin/login/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/login/js/main.js"></script>
</body>

</html>