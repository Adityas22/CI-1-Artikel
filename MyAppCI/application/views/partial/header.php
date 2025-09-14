<style>
#mainNav .nav-link {
    color: #fff;
    /* teks putih */
    border-radius: .25rem;
    /* biar rapi */
}

#mainNav .nav-link:hover,
#mainNav .nav-link:focus {
    background-color: #495057;
    /* abu gelap */
    color: #fff;
}

#mainNav .nav-item.active .nav-link {
    background-color: #0d6efd;
    /* biru bootstrap */
    color: #fff;
}
</style>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CRUD Artikel Sederhana</title>
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/assets/icon_gmail2.png'); ?>" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
        rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#">Adits</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link px-3 py-3" href="<?php echo site_url('blog/') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 py-3" href="<?php echo site_url('blog/profile') ?>">About Me</a>
                    </li>
                    <?php if(isset($_SESSION['username'])){ ?>
                    <li class="nav-item">
                        <a class="nav-link px-3 py-3" href="<?php echo site_url('blog/addForm') ?>">Tambah Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 py-3" href="<?php echo site_url('blog/logout') ?>">Logout</a>
                    </li>
                    <?php } else {?>
                    <li class="nav-item">
                        <a class="nav-link px-3 py-3" href="<?php echo site_url('blog/login') ?>">Login</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>