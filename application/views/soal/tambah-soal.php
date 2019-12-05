<!-- page content -->
<div class="right_col" role="main">

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





        <div class="col-sm-12">
          <!-- Tab panes -->

          <div class="tab-content">
            <div class="tab-pane active">
              <div class="tab-pane">
                <div class="x_panel">
                  <div class="x_title">
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- start form for validation -->
                    <form action="<?php base_url('soal/tambahsoal'); ?>" method="post">
                      <label for="fullname">Soal</label>
                      <textarea id="soal" class="form-control" name="soal" cols="30" rows="5" style="resize: none"></textarea>
                      <label class="padding-top-md">Jawaban</label>
                      <div class="input-group padding-top-md">
                        <span class="input-group-addon">
                          <input type="radio" name="jawaban" value="a">
                        </span>
                        <span class="input-group-addon">A</span>
                        <input type="text" class="form-control" name="a">
                      </div>
                      <div class="input-group padding-top-md">
                        <span class="input-group-addon">
                          <input type="radio" name="jawaban" value="b">
                        </span>
                        <span class="input-group-addon">B</span>
                        <input type="text" class="form-control" name="b">
                      </div>
                      <div class="input-group padding-top-md">
                        <span class="input-group-addon">
                          <input type="radio" name="jawaban" value="c">
                        </span>
                        <span class="input-group-addon">C</span>
                        <input type="text" class="form-control" name="c">
                      </div>
                      <div class="input-group padding-top-md">
                        <span class="input-group-addon">
                          <input type="radio" name="jawaban" value="d">
                        </span>
                        <span class="input-group-addon">D</span>
                        <input type="text" class="form-control" name="d">
                      </div>
                      <div class="input-group padding-top-md">
                        <span class="input-group-addon">
                          <input type="radio" name="jawaban" value="e">
                        </span>
                        <span class="input-group-addon">E</span>
                        <input type="text" class="form-control" name="e">
                      </div>
                      <div class="text-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                    </form>
                    <input type="hidden" id="jumlah-form" value="1">
                    <!-- end form for validations -->

                  </div>
                </div>
              </div>

            </div>
            <div class="clear-fix"></div>
            <button class="btn btn-primary">-</button>
            <button class="btn btn-primary" id="add">+</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function() { // Ketika halaman sudah diload dan siap
    $("#add").click(function() { // Ketika tombol Tambah Data Form di klik
      var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
      var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya

      // Kita akan menambahkan form dengan menggunakan append
      // pada sebuah tag div yg kita beri id insert-form
      $("#insert-form").append("<b>Data ke " + nextform + " :</b>" +
        "<table>" +
        "<tr>" +
        "<td>NIS</td>" +
        "<td><input type='text' name='nis[]' required></td>" +
        "</tr>" +
        "<tr>" +
        "<td>Nama</td>" +
        "<td><input type='text' name='nama[]' required></td>" +
        "</tr>" +
        "<tr>" +
        "<td>Telepon</td>" +
        "<td><input type='text' name='telp[]' required></td>" +
        "</tr>" +
        "<tr>" +
        "<td>Alamat</td>" +
        "<td><textarea name='alamat[]' required></textarea></td>" +
        "</tr>" +
        "</table>" +
        "<br><br>");

      $("#jumlah-form").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
    });

    // Buat fungsi untuk mereset form ke semula
    $("#btn-reset-form").click(function() {
      $("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
      $("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
    });
  });
</script>

<!-- /page content -->