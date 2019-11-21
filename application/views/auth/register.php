<!-- Pre-loader start -->
<div class="theme-loader">
	<div class="ball-scale">
		<div class='contain'>
			<div class="ring">
				<div class="frame"></div>
			</div>
			<div class="ring">
				<div class="frame"></div>
			</div>
			<div class="ring">
				<div class="frame"></div>
			</div>
			<div class="ring">
				<div class="frame"></div>
			</div>
			<div class="ring">
				<div class="frame"></div>
			</div>
			<div class="ring">
				<div class="frame"></div>
			</div>
			<div class="ring">
				<div class="frame"></div>
			</div>
			<div class="ring">
				<div class="frame"></div>
			</div>
			<div class="ring">
				<div class="frame"></div>
			</div>
			<div class="ring">
				<div class="frame"></div>
			</div>
		</div>
	</div>
</div>
<!-- Pre-loader end -->
<section class="login-block">
	<!-- Container-fluid starts -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<form class="md-float-material form-material" action="<?php echo base_url('auth/register'); ?>" method="post">
					<div class="text-center">
						<img src="<?php echo base_url('asset/image/logo2.png'); ?>" alt="logo.png" width="120">
					</div>
					<div class="auth-box card">
						<div class="card-block">
							<div class="row m-b-20">
								<div class="col-md-12">
									<h3 class="text-center txt-primary">Buat Akun</h3>
								</div>
							</div>

							<div class="form-group form-primary">
								<div class="col-sm-12 mx-auto text-center">
									<label>Daftar sebagai :</label>
									<div class="form-radio ml-3">

										<div class="radio radio-inline">
											<label>
												<input type="radio" name="role" value="1">
												<i class="helper"></i>Guru
											</label>
										</div>
										<div class="radio radio-inline">
											<label>
												<input type="radio" name="role" value="2">
												<i class="helper"></i>Siswa
											</label>
										</div>

									</div>
								</div>
								<?php echo form_error('jenis', '<small class="text-danger ml-2">', '</small>'); ?>
								<span class="form-bar"></span>
							</div>

							<div class="col-sm-12">

							</div>

							<div class="form-group form-primary">
								<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap " value="<?php echo set_value('nama'); ?>" />
								<?php echo form_error('nama', '<small class="text-danger ml-2">', '</small>'); ?>
								<span class="form-bar"></span>
							</div>
							<div class="form-group form-primary">
								<input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo set_value('username'); ?>" />
								<?php echo form_error('username', '<small class="text-danger ml-2">', '</small>'); ?>
								<span class="form-bar"></span>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group form-primary">
										<input type="password" class="form-control" id="password1" name="password1" placeholder="Password" />
										<?php echo form_error('password1', '<small class="text-danger ml-2">', '</small>'); ?>
										<span class="form-bar"></span>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group form-primary">
										<input type="password" class="form-control" id="password2" name="password2" placeholder="Ulangi Password" />
										<span class="form-bar"></span>
									</div>
								</div>
							</div>
							<div class="form-group form-primary">
								<input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>" />
								<?php echo form_error('email', '<small class="text-danger ml-2">', '</small>'); ?>
								<span class="form-bar"></span>
							</div>
							<div class="form-group form-primary">
								<input type="text" class="form-control" id="nohp" name="nohp" placeholder="No Handphone" value="<?php echo set_value('nohp'); ?>" />
								<span class="form-bar"></span>
							</div>
							<div class="form-group form-primary">
								<textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" cols="30" rows="5" style="resize: none" value="<?php echo set_value('alamat'); ?>"></textarea>
								<span class="form-bar"></span>
							</div>
							<div class="form-group form-primary">
								<input type="date" class="form-control" id="tgllahir" name="tgllahir" placeholder="tgllahir" value="<?php echo set_value('alamat'); ?>">
								<span class="form-bar"></span>
							</div>
							<div class="row m-t-25 text-left">
								<div class="col-md-12">
									<div class="checkbox-fade fade-in-primary">
										<label>
											<input type="checkbox" value="">
											<span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
											<span class="text-inverse">I read and accept <a href="#">Terms &amp;
													Conditions.</a></span>
										</label>
									</div>
								</div>
							</div>
							<div class="row m-t-30">
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign up
										now</button>
								</div>
							</div>
							<hr>
							<div>
								<p class="text-inverse text-center m-b-0">Sudah punya akun? <a href="<?php echo base_url('auth'); ?>"><b class="f-w-600">Masuk</b></a></p>
							</div>
						</div>
					</div>
				</form>
			</div>
			<!-- end of col-sm-12 -->
		</div>
		<!-- end of row -->
	</div>
	<!-- end of container-fluid -->
</section>