<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left padding-bottom-md">
                <h3><?php echo $judul; ?></h3>

            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row top_tiles">
            <div class="">
                <!-- Menu -->
                <div class="col-sm-4">
                    <?php echo form_error('role', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                    <?php echo $this->session->flashdata('role'); ?>
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#tambahRoleModal">+ Tambah Role</a>
                    <div class="table-responsive">
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th class="column-title" width="20">No</th>
                                    <th class="column-title">Role</th>
                                    <th class="column-title text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($role as $r) : ?>
                                    <tr class="even pointer">
                                        <td class="text-center"><?php echo $i; ?></td>
                                        <td class=""><?php echo $r['role']; ?></td>
                                        <td class="last text-center">
                                            <a href="<?php echo base_url('admin/roleaccess/') . $r['id']; ?>" class="label label-warning">Access</a>
                                            <a href="" class="label label-success" data-toggle="modal" data-target="#ubahRoleModal">Ubah</a>
                                            <a href="<?php echo base_url('admin/') ?>hapusrole/<?php echo $r['id']; ?>" class="label label-danger" onclick="return confirm('Yakin hapus?');">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<!-- Modal tambah -->
<div class="modal fade" id="tambahRoleModal" tabindex="-1" role="dialog" aria-labelledby="tambahRoleModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="tambahRoleModalLabel">Tambah Role</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('admin/role') ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role" placeholder="Nama Role">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal edit -->
<div class="modal fade" id="ubahRoleModal" tabindex="-1" role="dialog" aria-labelledby="ubahRoleModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="ubahRoleModalLabel">Ubah Role</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('admin/') ?>ubahRole/<?php echo $r['id']; ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role" placeholder="Nama Role">

                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>