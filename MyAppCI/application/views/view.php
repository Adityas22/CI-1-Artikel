<?php $this->load->view('partial/header.php') ?>

<!-- Page Header-->
<header class="masthead" style="background-image: url(<?php echo base_url(); ?>uploads/<?php echo$blog['cover']?>)">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1><?php echo $blog['title']?></h1>
                    <h2 class="subheading"><?php echo $blog['content']?></h2>
                    <span class="meta">
                        Posted by <?php echo $blog['date']; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Footer-->
<?php $this->load->view('partial/footer.php') ?>