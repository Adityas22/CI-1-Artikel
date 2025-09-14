<style>
.pagination {
    display: flex;
    justify-content: center;
    gap: 5px;
    margin-top: 20px;
    list-style: none;
    padding: 0;
}

.pagination a,
.pagination strong {
    display: inline-block;
    padding: 8px 12px;
    border: 1px solid #007bff;
    border-radius: 5px;
    text-decoration: none;
    color: #007bff;
    transition: all 0.2s;
}

.pagination a:hover {
    background-color: #007bff;
    color: white;
}

.pagination strong {
    background-color: #007bff;
    color: white;
    font-weight: bold;
}
</style>

<?php $this->load->view('partial/header.php') ?>

<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Selamat Datang</h1>
                    <span class="subheading">Belajar framework CI dasar</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <?php echo$this->session->flashdata('message') ?>
            <form method="get" action="<?php echo site_url('blog/search'); ?>">
                <input type="text" name="find" placeholder="Cari judul...">
                <button type="submit">Cari</button>
            </form>
            <?php foreach ($blogs as $blog): ?>
            <!-- Post preview-->
            <div class="post-preview">
                <a href="<?php echo site_url('blog/detail/'.$blog['id']); ?>">
                    <h2 class="post-title"><?php echo $blog['title']; ?></h2>
                </a>
                Posted by <?php echo $blog['date']; ?>
                <?php if(isset($_SESSION['username'])){ ?>
                <p class="post-meta">

                    <a href="<?php echo site_url('blog/updateForm/'.$blog['id']);?>"
                        class="btn btn-sm btn-warning me-2">
                        Edit
                    </a>

                    <a href="<?php echo site_url('blog/delete/'.$blog['id']);?>" class="btn btn-sm btn-danger"
                        onclick="return confirm('Yakin mau hapus artikel ini?');">
                        Delete
                    </a>
                </p>
                <?php } ?>
            </div>
            <h4 class="post-subtitle" style="text-align: justify;"> <?php echo $blog['content']; ?></h4>

            <hr>
            <?php endforeach; ?>

            <!-- buat style css sendiri  -->
            <div class="pagination">
                <?= $pagination ?>
            </div>

        </div>
    </div>
</div>

<?php $this->load->view('partial/footer.php') ?>