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
          <a href="" class="btn btn-primary" data-toggle="modal" data-target="#tambahMenuModal">+ Tambah Soal</a>
          <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
              <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th style="width: 20%">Nama Soal</th>
                  <th>Skor Minimal</th>
                  <th>Kelas</th>
                  <th class="text-center">Status</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr class="even pointer">
                  <td>1</td>
                  <td>
                    <a>Responsi UTS</a>
                  </td>
                  <td>
                    <a>75</a>
                  </td>
                  <td class="project_progress">
                    <a>Bahasa Pemrograman II</a>
                  </td>
                  <td class="text-center">
                    <button type="button" class="btn btn-success btn-xs">Active</button>
                  </td>
                  <td class="text-center">
                    <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-folder"></i>View</a>
                    <a href="#" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i>Edit</a>
                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Delete</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->