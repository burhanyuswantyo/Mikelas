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
                        <form action="<?php echo base_url('kelas/index/') . $kelas['id']; ?>" method="post">
                            <textarea id="deskripsi" class="form-control" name="deskripsi" placeholder="Bagikan dengan kelas anda" style="resize: vertical;"></textarea>
                            <input type="file" name="file" id="file" class="margin-top-md">
                            <input type="text" id="video" name="video" class="margin-top-md" placeholder="Url Video">
                            <i class="fa fa-youtube-play"></i>
                            <div class="text-right">
                                <button class="btn btn-primary margin-top margin-top-md right">Kirim</button>
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
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- /page content -->