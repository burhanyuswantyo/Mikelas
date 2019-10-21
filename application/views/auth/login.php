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
                <a href="<?php echo base_url('auth/registration'); ?>" class="to_register"> Buat Akun </a>
            </p>

            <div class="clearfix"></div>
        </form>
    </section>
</div>