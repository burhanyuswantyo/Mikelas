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
                    <a href="<?php echo base_url('student/materi/') . $m['id'] ?>">
                        <div class="x_panel">
                            <div class="x_title">
                                <img width="50" height="50" class="img-circle" src="<?php echo base_url('asset/image/profile/') . $m['image']; ?>" alt="">
                                <b class="padding-left-sm"><?php echo $m['nama'] ?></b>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <?php echo $m['deskripsi']; ?>
                                <div class="clear-fix"></div>
                                <?php
                                    if ($m['video'] != null) {
                                        ?>
                                    <iframe class="padding-top-md" width="560" height="315" src="<?php echo $m['video'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <?php } ?>

                            </div>
                        </div>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- /page content -->