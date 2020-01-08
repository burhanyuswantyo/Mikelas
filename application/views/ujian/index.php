<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $judul['judul']; ?></title>

  <!-- Bootstrap -->
  <link href="<?php echo base_url(); ?>asset/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>asset/vendors/bootstrap/dist/css/spacing.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="<?php echo base_url(); ?>asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?php echo base_url(); ?>asset/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- bootstrap-daterangepicker -->
  <link href="<?php echo base_url(); ?>asset/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
</head>

<body style="background-color: #3282b8">
  <div class="text-center">
    <h1 class="well"><?php echo $judul['nama'] . ' - ' . $judul['judul']; ?></h1>
  </div>
  <div class="container">
    <?php $i = 1; ?>
    <?php
    //List Jawaban
    foreach ($hasil as $h) {
      $id = $h['id'];
      $soal = $h['soal'];
      $a = $h['a'];
      $b = $h['b'];
      $c = $h['c'];
      $d = $h['d'];
      $e = $h['e'];
    ?>
      <form action="<?php echo base_url('ujian/jawab/' . $ujian['id']) ?>" method="POST">
        <input type="hidden" name="id[]" value="<?php echo $id; ?>">
        <input type="hidden" name="jumlah" value="<?php echo $jumlah; ?>">
        <input type="hidden" name="score_min" value="<?php echo $ujian['score_min']; ?>">
        <div class="margin-sm well">
          <table width="100%">
            <tr>
              <td>
                <h4><?php echo $i . '. ' . $h['soal'] ?></h4>
              </td>
            </tr>
            <tr>
              <td class="padding-sm"><input type="radio" name="pilihan[<?php echo $id; ?>]" value="a"> <?php echo $h['a']; ?></td>
            </tr>
            <tr>
              <td class="padding-sm"><input type="radio" name="pilihan[<?php echo $id; ?>]" value="b"> <?php echo $h['b']; ?></td>
            </tr>
            <tr>
              <td class="padding-sm"><input type="radio" name="pilihan[<?php echo $id; ?>]" value="c"> <?php echo $h['c']; ?></td>
            </tr>
            <tr>
              <td class="padding-sm"><input type="radio" name="pilihan[<?php echo $id; ?>]" value="d"> <?php echo $h['d']; ?></td>
            </tr>
            <tr>
              <td class="padding-sm"><input type="radio" name="pilihan[<?php echo $id; ?>]" value="e"> <?php echo $h['e']; ?></td>
            </tr>
          </table>
        </div>
        <?php $i++; ?>
      <?php } ?>
      <div class="text-right margin-sm">
        <a href="<?php echo base_url('student/ujian'); ?>" class="btn btn-danger"><i class="fa fa-close"></i> Batal</a>
        <button type="submit" class="btn btn-success" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')"><i class="fa fa-check"></i> Selesai</button>
      </div>
      </form>
      <!-- jQuery -->
      <script src="<?php echo base_url(); ?>asset/vendors/jquery/dist/jquery.min.js"></script>
      <!-- Bootstrap -->
      <script src="<?php echo base_url(); ?>asset/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
      <!-- FastClick -->
      <script src="<?php echo base_url(); ?>asset/vendors/fastclick/lib/fastclick.js"></script>
      <!-- NProgress -->
      <script src="<?php echo base_url(); ?>asset/vendors/nprogress/nprogress.js"></script>
      <!-- Chart.js -->
      <script src="<?php echo base_url(); ?>asset/vendors/Chart.js/dist/Chart.min.js"></script>
      <!-- jQuery Sparklines -->
      <script src="<?php echo base_url(); ?>asset/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
      <!-- Flot -->
      <script src="<?php echo base_url(); ?>asset/vendors/Flot/jquery.flot.js"></script>
      <script src="<?php echo base_url(); ?>asset/vendors/Flot/jquery.flot.pie.js"></script>
      <script src="<?php echo base_url(); ?>asset/vendors/Flot/jquery.flot.time.js"></script>
      <script src="<?php echo base_url(); ?>asset/vendors/Flot/jquery.flot.stack.js"></script>
      <script src="<?php echo base_url(); ?>asset/vendors/Flot/jquery.flot.resize.js"></script>
      <!-- Flot plugins -->
      <script src="<?php echo base_url(); ?>asset/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
      <script src="<?php echo base_url(); ?>asset/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
      <script src="<?php echo base_url(); ?>asset/vendors/flot.curvedlines/curvedLines.js"></script>
      <!-- DateJS -->
      <script src="<?php echo base_url(); ?>asset/vendors/DateJS/build/date.js"></script>
      <!-- bootstrap-daterangepicker -->
      <script src="<?php echo base_url(); ?>asset/vendors/moment/min/moment.min.js"></script>
      <script src="<?php echo base_url(); ?>asset/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

      <!-- Custom Theme Scripts -->
      <script src="<?php echo base_url(); ?>asset/build/js/custom.min.js"></script>
      <script src="<?php echo base_url(); ?>asset/js/script.js"></script>
</body>

</html>