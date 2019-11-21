<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left padding-bottom-md">
                <h3>Menu Management</h3>

            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row top_tiles">
            <div class="">
                <!-- Menu -->
                <div class="col-sm-4">
                    <?php echo form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                    <?php echo $this->session->flashdata('menu'); ?>
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#tambahMenuModal">+ Tambah Menu</a>
                    <div class="table-responsive">
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th class="column-title" width="20">No</th>
                                    <th class="column-title">Menu</th>
                                    <th class="column-title text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($menu as $m) : ?>
                                    <tr class="even pointer">
                                        <td class="text-center"><?php echo $i; ?></td>
                                        <td class=""><?php echo $m['menu']; ?></td>
                                        <td class="last text-center">
                                            <a href="" class="label label-success" data-toggle="modal" data-target="#ubahMenuModal">Ubah</a>
                                            <a href="<?php echo base_url('menu/') ?>hapusMenu/<?php echo $m['id']; ?>" class="label label-danger" onclick="return confirm('Yakin hapus?');">Hapus</a>
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

        <!-- Sub Menu -->
        <div class="page-title">
            <div class="title_left padding-bottom-md">
                <h3>Sub Menu Management</h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row top_tiles">
            <div class="">
                <div class="col-sm-8">
                    <?php echo form_error('url', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                    <?php echo $this->session->flashdata('sub_menu'); ?>
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#tambahSubMenuModal">+ Tambah Sub Menu</a>
                    <div class="table-responsive">
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th class="column-title" width="20">No</th>
                                    <th class="column-title">Sub Menu</th>
                                    <th class="column-title">Menu</th>
                                    <th class="column-title">Url</th>
                                    <th class="column-title">Icon</th>
                                    <th class="column-title text-center">Active</th>
                                    <th class="column-title text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($subMenu as $sm) : ?>
                                    <tr class="even pointer">
                                        <td class="text-center"><?php echo $i; ?></td>
                                        <td class=""><?php echo $sm['sub_menu']; ?></td>
                                        <td class=""><?php echo $sm['menu']; ?></td>
                                        <td class=""><?php echo $sm['url']; ?></td>
                                        <td class=""><?php echo $sm['icon']; ?></td>
                                        <td class="text-center"><?php echo $sm['is_active']; ?></td>
                                        <td class="last text-center">
                                            <a href="" class="label label-success" data-toggle="modal" data-target="#ubahMenuModal">Ubah</a>
                                            <a href="<?php echo base_url('menu/') ?>hapusSubMenu/<?php echo $sm['id']; ?>" class="label label-danger" onclick="return confirm('Yakin hapus?');">Hapus</a>
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
<div class="modal fade" id="tambahMenuModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Tambah Menu</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('menu') ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="menu" name="menu" placeholder="Nama Menu">

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
<div class="modal fade" id="ubahMenuModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Tambah Menu</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('menu/') ?>ubah/<?php echo $m['id']; ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="menu" name="menu" placeholder="Nama Menu">

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

<!-- Modal Tambah Sub Menu -->
<div class="modal fade" id="tambahSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Tambah Sub Menu</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('menu/submenu') ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="sub_menu" name="sub_menu" placeholder="Nama Sub Menu">
                    </div>
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option value="">Pilih Menu</option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?php echo $m['id']; ?>"><?php echo $m['menu']; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="Url">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Icon">
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="1" class="flat" name="is_active" id="is_active" checked> Active
                            </label>
                        </div>
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