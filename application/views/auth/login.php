<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $judul; ?></title>

    <!-- Bootstrap -->
    <link href="asset/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/vendors/bootstrap/dist/css/spacing.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="asset/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="asset/vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="asset/build/css/custom.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
</head>

<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form well">
                <section class="login_content">
                    <img src="asset/image/logo2.png" alt="" width="120">
                    <form>
                        <h1>Masuk</h1>
                        <div>
                            <input type="text" class="form-control" id="username" name="username" id="" name="" placeholder="Username" />
                        </div>
                        <div>
                            <input type="password" class="form-control" id="password" name="password" id="" name="" placeholder="Password" />
                        </div>
                        <div>
                            <button class="btn btn-primary" type="submit">Masuk</button>
                        </div>

                        <div class="clearfix"></div>
                        <div class="separator"></div>
                        <a class="reset_pass" href="#">Lupa password?</a>
                        <p class="change_link">Belum punya akun?
                            <a href="#signup" class="to_register"> Buat Akun </a>
                        </p>

                        <div class="clearfix"></div>
                    </form>
                </section>
            </div>

            <div id="register" class="animate form registration_form well">
                <section class="login_content">
                    <img src="asset/image/logo2.png" alt="" width="120">
                    <form>
                        <h1>Buat Akun</h1>
                        <label class="padding-md"><input type="radio" name="toggle"><span>Teacher</span></label>
                        <label class="padding-md"><input type="radio" name="toggle"><span>Student</span></label>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="namadepan" name="namadepan" placeholder="Nama Depan" />
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="namabelakang" name="namabelakang" placeholder="Nama Belakang" />
                            </div>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" />
                            </div>
                            <div class="col-sm-12">
                                <input type="password" class="form-control" id="password" name="password" placeholder="password" />
                            </div>
                            <div class="col-sm-12">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" />
                            </div>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="nohp" name="nohp" placeholder="No Handphone" />
                            </div>
                            <div class="col-sm-12 margin-bottom-lg">
                                <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" cols="30" rows="5" style="resize: none"></textarea>
                            </div>
                            <div class="col-xs-3">
                                <input type="text" class="form-control" id="tgl" name="tgl" placeholder="Tgl" />
                            </div>
                            <div class="col-xs-5">
                                <select class="form-control">
                                    <option>Januari</option>
                                    <option>Februari</option>
                                    <option>Maret</option>
                                    <option>April</option>
                                    <option>Mei</option>
                                    <option>Juni</option>
                                    <option>Juli</option>
                                    <option>Agustus</option>
                                    <option>September</option>
                                    <option>Oktober</option>
                                    <option>November</option>
                                    <option>Desember</option>
                                </select>
                            </div>
                            <div class="col-xs-4">
                                <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Tahun" />
                            </div>
                            <div>
                                <button class="btn btn-primary" type="submit">Daftar</button>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Sudah punya akun?
                                <a href="#signin" class="to_register"> Masuk </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>

</html>