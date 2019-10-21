<div id="register" class="animate form registration_form well">
    <section class="login_content">
        <img src="asset/image/logo2.png" alt="" width="120">
        <form method="<?php echo base_url('auth'); ?>">
            <h1>Buat Akun</h1>
            <label class="padding-md"><input type="radio" name="toggle"><span> Teacher</span></label>
            <label class="padding-md"><input type="radio" name="toggle"><span> Student</span></label>
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" />
                </div>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" />
                </div>
                <div class="col-sm-6">
                    <input type="password" class="form-control" id="password1" name="password1" placeholder="Password" />
                </div>
                <div class="col-sm-6">
                    <input type="password" class="form-control" id="password2" name="password2" placeholder="Ulangi Password" />
                </div>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" />
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