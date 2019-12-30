<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><?php echo $judul; ?></h3>
            </div>
        </div>

        <div class="clearfix"></div>
        <?php foreach ($materi as $m) : ?>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="x_panel">
                        <div class="x_title">
                            <img width="50" height="50" class="img-circle" src="<?php echo base_url('asset/image/profile/') . $m['image']; ?>" alt="">
                            <b class="padding-left-sm"><?php echo $m['nama'] ?></b>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="col-sm-12">
                                <?php echo $m['deskripsi']; ?>
                            </div>
                            <div class="clearfix" />

                            <?php
                            if ($m['file'] != null) {
                            ?>
                                <div class="col-sm-2 margin-x-xs">
                                    <a href="<?php echo base_url('upload/file/') . $m['file']; ?>" class="btn btn-success btn-sm margin-x-md">Lampiran : <?php echo $m['file']; ?></a>
                                </div>
                            <?php } ?>

                            <div class="clearfix"></div>

                            <?php
                            if ($m['photo'] != null) {
                            ?>
                                <div class="col-sm-2">
                                    <a href="<?php echo base_url('upload/photo/') . $m['photo']; ?>" title="Gambar Saya" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
                                        <img class="padding-top-md img-thumbnail" src="<?php echo base_url('upload/photo/') . $m['photo']; ?>" alt="">
                                    </a>
                                </div>
                            <?php } ?>

                            <?php
                            if ($m['video'] != null) {
                            ?>
                                <div class="col-sm-2">
                                    <iframe class="padding-top-md img-thumbnail" src="<?php echo $m['video'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            <?php } ?>

                        </div>
                        <div class="text-right">

                            <a href="<?php echo base_url('student/materi/') . $m['id'] ?>" class="btn btn-info">Tampilkan</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
    </div>
    <!-- /page content -->