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
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <td class="padding-y-md">
                                    <h5>Nama Kelas</h5>
                                </td>
                                <td class="padding-y-md">
                                    <h5>:</h5>
                                </td>
                                <td class="padding-y-md">
                                    <h5><?php echo $ujian['nama']; ?></h5>
                                </td>
                            </tr>
                            <tr>
                                <td class="padding-y-md">
                                    <h5>Nama Ujian</h5>
                                </td>
                                <td class="padding-y-md">
                                    <h5>:</h5>
                                </td>
                                <td class="padding-y-md">
                                    <h5><?php echo $ujian['judul']; ?></h5>
                                </td>
                            </tr>
                            <tr>
                                <td class="padding-y-md">
                                    <h5>Nilai Minimal</h5>
                                </td>
                                <td class="padding-y-md">
                                    <h5>:</h5>
                                </td>
                                <td class="padding-y-md">
                                    <h5><?php echo $ujian['score_min']; ?></h5>
                                </td>
                            </tr>
                            <tr>
                                <td class="padding-y-md">
                                    <h5>Waktu Mengerjakan</h5>
                                </td>
                                <td class="padding-y-md">
                                    <h5>:</h5>
                                </td>
                                <td class="padding-y-md">
                                    <h5><?php echo date('l, d F Y | H:i:s', $ujian['tanggal']); ?></h5>
                                </td>
                            </tr>
                        </table>
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr>
                                    <th class="text-center">Jumlah Soal</th>
                                    <th class="text-center">Jumlah Benar</th>
                                    <th class="text-center">Jumlah Salah</th>
                                    <th class="text-center">Jumlah Kosong</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="even pointer">
                                    <td class="text-center"><?php echo $jumlah; ?></td>
                                    <td class="text-center"><?php echo $ujian['benar']; ?></td>
                                    <td class="text-center"><?php echo $ujian['salah']; ?></td>
                                    <td class="text-center"><?php echo $ujian['kosong']; ?></td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th colspan="4" class="text-center">
                                        Nilai
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="even pointer">
                                    <td class="text-center" colspan="4">
                                        <h5><b><?php echo $ujian['score']; ?></b></h5>
                                    </td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th colspan="4" class="text-center">
                                        Keterangan
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="even pointer">
                                    <td class="text-center" colspan="4">
                                        <?php if ($ujian['keterangan'] == 'Lulus') { ?>
                                            <span class="badge bg-green"><?php echo $ujian['keterangan']; ?></span>
                                        <?php } else { ?>
                                            <span class="badge bg-red"><?php echo $ujian['keterangan']; ?></span>
                                        <?php } ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="<?php echo base_url('student/ujian') ?>" class="btn btn-success">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->