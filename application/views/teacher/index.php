<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left padding-bottom-md">
        <h3><?php echo $judul; ?></h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-sm-2">
      <?php echo form_error('nama', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
      <?php echo $this->session->flashdata('message'); ?>
    </div>
    <div class="clearfix"></div>
    <div class="padding-x-sm">
      <button class="btn btn-primary" data-toggle="modal" data-target="#buatKelasModal">+ Buat Kelas</button>
    </div>

    <div class="row">
      <?php foreach ($kelas as $k) : ?>
        <div class="col-sm-3">
          <div class="thumbnail" style="height: 120px; display: block;">
            <ul class="nav navbar-right">
              <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="" data-toggle="modal" data-target="#editKelasModal">Edit</a>
                  </li>
                  <li><a href="<?php echo base_url('kelas/hapuskelas/') . $k['id']; ?>">Hapus</a>
                  </li>
                </ul>
              </li>
            </ul>
            <a href="<?php echo base_url('kelas/index/') . $k['id']; ?>">
              <h2 class="padding-left-sm padding-bottom-md"><?php echo $k['nama']; ?></h2>
            </a>
            <h5 class="padding-left-sm">Code : <?php echo $k['kode']; ?></h5>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<!-- /page content -->
<!-- Modal tambah -->
<div class="modal fade" id="buatKelasModal" tabindex="-1" role="dialog" aria-labelledby="buatKelasModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="buatKelasModalLabel">Buat Kelas</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('teacher') ?>" method="post">
          <div class="form-group">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Kelas">
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Buat</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal edit -->
<div class="modal fade" id="editKelasModal" tabindex="-1" role="dialog" aria-labelledby="editKelasModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="editKelasModalLabel">Edit Kelas</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('kelas/editkelas/') . $k['id']; ?>" method="post">
          <div class="form-group">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Kelas" value="">
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Buat</button>
      </div>
      </form>
    </div>
  </div>
</div>