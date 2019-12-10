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
                      <a href="<?php echo base_url('ujian/pilgan/') . $u['id'] ?>" target="_blank" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> Kerjakan</a>
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