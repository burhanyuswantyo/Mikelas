<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-sm-6">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><?php echo $judul; ?></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <?php echo $this->session->flashdata('message'); ?>
                        <div class="col-sm-4">
                            <img class="img-responsive avatar-view margin-bottom-md" src="<?php echo base_url('asset/image/profile/') . $user['image']; ?>" alt="Avatar" title="Change the avatar">
                            <div class="text-center">
                                <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#uploadFotoModal">Ubah Foto</button>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <form action="<?php echo base_url('profile/edit') ?>" method="post">
                                <div class="form-group">
                                    <label class="control-label" for="username">Username</label>
                                    <input type="text" id="username" name="username" class="form-control" readonly value="<?php echo $user['username']; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="nama">Nama Lengkap</label>
                                    <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $user['nama']; ?>">
                                    <?php echo form_error('nama', '<small class="text-danger ml-2">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="nama">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" value="<?php echo $user['email']; ?>">
                                    <?php echo form_error('email', '<small class="text-danger ml-2">', '</small>'); ?>
                                </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6 text-left padding-x-md">

                            <a href="<?php echo base_url('profile') ?>"><button class="btn btn-danger" type="button">Kembali</button></a>
                        </div>
                        <div class="col-sm-6 text-right padding-x-md">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<!-- Modal Upload -->
<div class="modal fade" id="uploadFotoModal" tabindex="-1" role="dialog" aria-labelledby="uploadFotoModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="uploadFotoModalLabel">Upload Foto</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('profile/upload') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="file" id="image" class="custom-file-input" name="image">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
            </form>
        </div>
    </div>
</div>