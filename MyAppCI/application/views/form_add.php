<?php $this->load->view('partial/header.php') ?>

<!-- Page Header-->
<header class="masthead">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                <!-- mx-auto buat center -->
                <div class="site-heading">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-primary text-white text-center">
                            <h4 class="mb-0">Tambah Artikel</h4>
                        </div>
                        <div class="alert alert-danger">
                            <?php echo validation_errors();  ?>
                        </div>
                        <div class="card-body bg-light">
                            <?php //form_open(); ?>
                            <!-- ketambahan enctype  -->
                            <?php echo form_open_multipart(); ?>
                            <div class="mb-3">
                                <label for="title" class="form-label text-dark text-start d-block">Judul</label>
                                <?php echo form_input('title', '', 'id="title" class="form-control" '); ?>
                            </div>

                            <div class="mb-3">
                                <label for="content" class="form-label text-dark text-start d-block">Konten</label>
                                <?php echo form_textarea('content', '', 'id="content" class="form-control" '); ?>
                            </div>

                            <div class="mb-3">
                                <label for="cover" class="form-label text-dark text-start d-block">Cover</label>
                                <?php echo form_upload('cover', '','id="cover" class="form-control"');?>
                            </div>

                            <div class="d-flex justify-content-end gap-2">
                                <button type="reset" class="btn btn-outline-secondary px-4">Reset</button>
                                <button type="submit" class="btn btn-primary px-4">Simpan</button>
                            </div>
                            <?= form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<?php $this->load->view('partial/footer.php') ?>