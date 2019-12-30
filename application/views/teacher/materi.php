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
                <div class="col-sm-8">
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

                            <div class="clear-fix"></div>

                            <?php
                            if ($m['file'] != null) {
                            ?>
                                <div class="col-sm-2 padding-bottom-sm">
                                    <a href="<?php echo base_url('upload/file/') . $m['file']; ?>" class="btn btn-primary btn-sm margin-x-md">Lampiran : <?php echo $m['file']; ?></a>
                                </div>
                            <?php } ?>

                            <div class="clearfix"></div>

                            <?php
                            if ($m['photo'] != null) {
                            ?>
                                <div class="col-sm-4">
                                    <a href="<?php echo base_url('upload/photo/') . $m['photo']; ?>" title="Gambar Saya" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
                                        <img class="padding-top-md img-thumbnail" src="<?php echo base_url('upload/photo/') . $m['photo']; ?>" alt="">
                                    </a>
                                </div>
                            <?php } ?>

                            <?php
                            if ($m['video'] != null) {
                            ?>
                                <div class="col-sm-4">
                                    <iframe class="padding-top-md img-thumbnail" src="<?php echo $m['video'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            <?php } ?>
                        <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="x_panel">
                        <div class="x_title">
                            <h4>Assignment</h4>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <?php foreach ($assignment as $a) : ?>
                                <div class="col-sm-3">
                                    <div class="x_panel">
                                        <div class="x_content">
                                            <div class="text-center">
                                                <img width="100" height="100" src="<?php echo base_url('asset/image/profile/') . $a['image'] ?>" alt="">
                                            </div>
                                            <div class="text-center">
                                                <h2><b><?php echo $a['nama']; ?></b></h2>
                                            </div>
                                            <div class="text-center">
                                                <a href="<?php echo base_url('upload/assignment/') . $a['file']; ?>" class="btn btn-primary btn-sm">Lampiran</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <div class="x_panel">
                            <div class="x_title text-center">
                                <h4>Komentar</h4>
                            </div>
                            <div class="x_content">
                                <form action="<?php echo base_url('teacher/tambahkomentar/') . $m['id'] ?>" method="post">
                                    <div class="form-group">
                                        <textarea type="text" class="form-control" id="komentar" name="komentar" cols="30" rows="5" style="resize: none"></textarea>
                                    </div>
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-primary">Kirim</button>
                                    </div>
                                </form>
                                <hr>
                                <?php foreach ($komentar as $k) : ?>
                                    <ul class="list-unstyled msg_list">
                                        <li>
                                            <a>
                                                <span class="image">
                                                    <img src="<?php echo base_url('asset/image/profile/') . $k['image']; ?>" alt="">
                                                </span>
                                                <span>
                                                    <span><b><?php echo $k['nama'] ?></b></span>
                                                </span>
                                                <span class="message">
                                                    <?php echo $k['komentar']; ?>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>

                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<!-- /page content -->