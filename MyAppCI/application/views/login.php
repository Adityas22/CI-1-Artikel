<?php //$this->load->view('partial/header.php');  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <!-- Wrapper full height -->
    <div class="d-flex align-items-center justify-content-center min-vh-100">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow p-4 rounded-3">
                <h2 class="text-center mb-4">Login</h2>
                <?php echo $this->session->flashdata('message') ?>
                <!-- Form Login -->
                <?php echo form_open();?>
                <div class="form-group mb-3">
                    <label>Username</label>
                    <?php echo form_input('username', set_value('username'), 'class="form-control"'); ?>
                </div>
                <div class="form-group mb-3">
                    <label>Password</label>
                    <?php echo form_password('password', set_value('password'), 'class="form-control"'); ?>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>


<?php //$this->load->view('partial/footer.php') ?>