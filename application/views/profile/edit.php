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
                        <div class="col-sm-4">
                            <img class="img-responsive avatar-view margin-bottom-md" src="<?php echo base_url('asset/image/') . $user['image']; ?>" alt="Avatar" title="Change the avatar">
                            <div class="text-center">
                                <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#uploadFotoModal">Ubah Foto</button>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <?php echo form_open_multipart('profile/edit') ?>
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" id="username" name="username" required="required" class="form-control" readonly="readonly">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="nama">Nama Lengkap</label>
                                <input type="text" id="nama" name="nama" required="required" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="nama">Email</label>
                                <input type="email" id="email" name="email" required="required" class="form-control">
                            </div>
                        </div>
                    </div>
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
                <form action="<?php echo base_url('admin/role') ?>" method="post">
                    <div class="form-group">
                        <input type="file" id="exampleInputFile">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
            </form>
        </div>
    </div>
</div>