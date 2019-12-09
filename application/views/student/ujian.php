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
            <table class="table table-striped jambo_table bulk_action">
              <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th style="width: 50%">Nama Ujian</th>
                  <th>Kelas</th>
                  <th class="text-center">Status</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($ujian as $u) : ?>
                  <tr class="even pointer">
                    <td><?php echo $i; ?></td>
                    <td>
                      <a><?php echo $u['judul']; ?></a>
                    </td>
                    <td class="project_progress">
                      <a><?php echo $u['nama']; ?></a>
                    </td>
                    <td></td>
                    <td class="text-center">
                      <a href="<?php echo base_url('ujian/') . $u['id'] ?>" target="_blank" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> Kerjakan</a>
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
<div class="modal fade" id="ujianModal" tabindex="-1" role="dialog" aria-labelledby="ujianModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="ujianModalLabel">Buat Ujian</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('teacher/buatujian') ?>" method="post">
          <input type="hidden" name="idm" id="idm">
          <div class="form-group">
            <input type="text" class="form-control" id="judul" name="judul" placeholder="Nama Ujian">
          </div>
          <div class="form-group">
            <select name="tipe_id" id="tipe_id" class="form-control">
              <option value="">Pilih Tipe</option>
              <?php foreach ($tipe as $t) : ?>
                <option id="selectTipe" value="<?php echo $t['id']; ?>"><?php echo $t['tipe']; ?></option>
              <?php endforeach ?>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="skor" name="skor" placeholder="Skor Minimal">
          </div>
          <div class="form-group">
            <select name="kelas_id" id="kelas_id" class="form-control">
              <option value="">Pilih Kelas</option>
              <?php foreach ($kelas as $k) : ?>
                <option id="selectKelas" value="<?php echo $k['id']; ?>"><?php echo $k['nama']; ?></option>
              <?php endforeach ?>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>