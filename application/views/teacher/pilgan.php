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
                <div class="col-sm-12">
                    <?php echo form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                    <?php echo $this->session->flashdata('menu'); ?>
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#ujianModal">+ Tambah Soal</a>
                    <div class="table-responsive">
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr>
                                    <th style="width: 1%">No</th>
                                    <th style="width: 40%">Soal</th>
                                    <th style="width: 40%">Jawaban</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($soal as $s) : ?>
                                    <tr class="even pointer">
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $s['soal']; ?></td>

                                        <td><?php echo $s['jawaban']; ?></td>

                                        <td class="text-center">
                                            <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-folder"></i> Detail</a>
                                            <a href="<?php echo base_url('teacher/hapuspilgan/') . $s['id']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach ?>
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
<div class="modal fade" id="ujianModal" tabindex="-1" role="dialog" aria-labelledby="ujianModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="ujianModalLabel">Tambah Soal</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('teacher/tambahpilgan/') . $ujian_id; ?>" method="post">
                    <input type="hidden" name="idm" id="idm">
                    <div class="form-group">
                        <textarea type="text" class="form-control" id="soal" name="soal" placeholder="Soal" cols="30" rows="5" style="resize: none"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="file" name="gambar" id="gambar">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <input type="radio" class="radio" name="jawaban" value="a">
                        </span>
                        <span class="input-group-addon" id="basic-addon1">A</span>
                        <input type="text" name="a" id="a" class="form-control">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <input type="radio" class="radio" name="jawaban" value="b">
                        </span>
                        <span class="input-group-addon" id="basic-addon1">B</span>
                        <input type="text" name="b" id="b" class="form-control">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <input type="radio" class="radio" name="jawaban" value="c">
                        </span>
                        <span class="input-group-addon" id="basic-addon1">C</span>
                        <input type="text" name="c" id="c" class="form-control">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <input type="radio" class="radio" name="jawaban" value="d">
                        </span>
                        <span class="input-group-addon" id="basic-addon1">D</span>
                        <input type="text" name="d" id="d" class="form-control">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <input type="radio" class="radio" name="jawaban" value="e">
                        </span>
                        <span class="input-group-addon" id="basic-addon1">E</span>
                        <input type="text" name="e" id="e" class="form-control">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>