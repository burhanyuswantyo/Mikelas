<div class="container">
	<div class="col-md-8 mx-auto mt-3 rounded-lg" style="background-color: #f6f5f5">
		<div class="row">
			<div class="col py-4 rounded-lg" style="background-color: #3bb4c1">
				<form action="">
					<h2 class="mb-4 text-center text-light">Login</h2>
					<div class="py-2 col-md-10 mx-auto">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">@</span>
							</div>
							<input type="text" class="form-control" id="username" placeholder="Username" required>
							<div class="invalid-feedback" style="width: 100%;">
								Your username is required.
							</div>
						</div>
					</div>

					<div class="py-2 col-md-10 mx-auto">
						<input type="text" class="form-control" id="email" placeholder="Password">
						<div class="invalid-feedback">
							Please enter a valid email address for shipping updates.
						</div>
					</div>

					<div class="g-recaptcha py-2 rounded-lg col"
						data-sitekey="6LcykroUAAAAAPQHSyIJngQRO6xQq1ec4jGDIlUu"></div>
					<div class="py-2 text-center">
						<button class="btn btn-outline-light col-sm-4" type="submit">Login</button>
					</div>
				</form>
			</div>
			<div class="col rounded-lg my-auto">
				<h2 class="py-2 text-center text-info">Belum Punya akun?</h2>
				<div class="py-2 text-center">
					<a href="<?php base_url(); ?>regteacher" class=""><button class="btn btn-info col-sm-8 btn-lg" type="button">Daftar Sebagai Guru</button></a>
					
				</div>
				<div class="py-2 text-center">
					<a href="<?php base_url(); ?>regstudent" class=""><button class="btn btn-info col-sm-8 btn-lg" type="button">Daftar Sebagai Siswa</button></a>
					
				</div>

			</div>

		</div>

	</div>
