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
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#ujianModal">+ Buat Ujian</a>
                    <div class="table-responsive">
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr>
                                    <th width="1%">No</th>
                                    <th width="30%">Waktu Mengerjakan</th>
                                    <th>Nama</th>
                                    <th class="text-center">Nilai</th>
                                    <th class="text-center">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($hasil as $h) : ?>
                                    <tr class="even pointer">
                                        <td><?php echo $i; ?></td>
                                        <td>
                                            <?php echo date('l, d F Y | H:i:s', $h['tanggal']); ?>
                                        </td>
                                        <td>
                                            <?php echo $h['nama']; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $h['score']; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php if ($h['keterangan'] == 'Lulus') { ?>
                                                <span class="badge bg-green">Lulus</span>
                                            <?php } else { ?>
                                                <span class="badge bg-red">Tidak Lulus</span>
                                            <?php } ?>
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