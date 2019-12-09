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
                                <div class="form-group">
                                    <input type="file">
                                </div>
                                <div class="form-group text-right">
                                    <button class="btn btn-primary">Upload</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="x_panel">
                            <div class="x_title text-center">
                                <h4>Komentar</h4>
                            </div>
                            <div class="x_content">
                                <div class="form-group">
                                    <textarea type="text" class="form-control" id="alamat" name="alamat" cols="30" rows="5" style="resize: none"></textarea>
                                </div>
                                <div class="form-group text-right">
                                    <button class="btn btn-primary">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
</div>
<!-- /page content -->