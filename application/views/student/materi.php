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
                            <?php echo $m['deskripsi']; ?>
                            <div class="clear-fix"></div>
                            <?php
                            if ($m['video'] != null) {
                            ?>
                                <iframe class="padding-top-md" width="560" height="315" src="<?php echo $m['video'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <?php } ?>

                        </div>
                    </div>

                <?php endforeach; ?>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <div class="x_panel">
                            <div class="x_title text-center">
                                <h4>Your work</h4>
                            </div>
                            <div class="x_content">
                                <?php if ($cek == null) { ?>
                                    <?php echo form_open_multipart('student/tambahassignment/' . $m['id']); ?>
                                    <div class="form-group">
                                        <input type="file" name="file" id="file">
                                    </div>
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-primary">Upload</button>
                                    </div>
                                    </form>
                                <?php } else { ?>
                                    <a href="<?php echo base_url('student/hapusassignment/') . $cek['id'] . '/' . $m['id']; ?>" class="fa fa-close"></a>
                                    <a href="<?php echo base_url('upload/assignment/') . $cek['file']; ?>" class="btn btn-info margin-left-md"><?php echo $cek['file']; ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="x_panel">
                            <div class="x_title text-center">
                                <h4>Komentar</h4>
                            </div>
                            <div class="x_content">
                                <form action="<?php echo base_url('student/tambahkomentar/') . $m['id'] ?>" method="post">
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