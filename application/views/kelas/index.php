<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><?php echo $judul; ?></h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <a class="collapse-link">
                            <h2>Buat Tugas</h2>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <?php echo form_open_multipart('kelas/index/' . $kelas['id']); ?>
                        <textarea id="deskripsi" class="form-control" name="deskripsi" placeholder="Bagikan dengan kelas anda" style="resize: vertical;"></textarea>
                        <?php echo form_error('deskripsi', '<small class="text-danger ml-2">', '</small>'); ?>
                        <div class="x_content">
                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                <ul id="myTab" class="nav nav-tabs" role="tablist">
                                    <li role="presentation"><a href="#photo" class="fa fa-photo" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"></a>
                                    </li>
                                    <li role="presentation"><a href="#file" class="fa fa-file-o" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false"></a>
                                    </li>
                                    <li role="presentation"><a href="#video" class="fa fa-youtube-play" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false"></a>
                                    </li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade" id="photo" aria-labelledby="home-tab">
                                        <div class="margin-top-md">
                                            <?php echo form_upload('photo'); ?>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="file" aria-labelledby="profile-tab">
                                        <div class="margin-top-md">
                                            <?php echo form_upload('file'); ?>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="video" aria-labelledby="profile-tab">
                                        <input type="text" id="video" name="video" class="margin-top-md" placeholder="Url Video">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary margin-top margin-top-md right">Kirim</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php foreach ($materi as $m) : ?>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <img width="50" height="50" class="img-circle" src="<?php echo base_url('asset/image/profile/') . $user['image']; ?>" alt="">
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
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- /page content -->