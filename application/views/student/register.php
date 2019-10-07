<div class="form-container">
	<div class="col-sm-3 mx-auto mt-3 rounded-lg" style="background-color: #e3e3e3">
		<div class="py-4">
			<h2 class="mb-3 text-center">Daftar Siswa</h2>
			<hr>
				<?php if (validation_errors()) : ?>
			<div class="card-body">
				<div class="alert alert-danger" role="alert">
					<?php echo validation_errors(); ?>
				</div>
			</div>
				<?php endif; ?>
			<form action="" method="post">

				<div class="form-row py-2">
					<div class="col">
						<label for="">Nama Depan</label>
						<input type="text" name="namadepan" class="form-control" id="namnamadepan" placeholder="">
					</div>
					<div class="col">
						<label for="">Nama Belakang</label>
						<input type="text" name="namabelakang" class="form-control" id="namabelakang" placeholder="">
					</div>
				</div>

				<div class="py-2">
					<label for="">Username</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">@</span>
						</div>
						<input type="text" name="username" class="form-control" id="username" placeholder="">
					</div>
				</div>

				<div class="form-row py-2">
					<div class="col">
						<label for="">Password</label>
						<input type="text" name="password" class="form-control" id="password" placeholder="">
					</div>
					<div class="col">
						<label for="">Konfirmasi Password</label>
						<input type="text" class="form-control" id="password" placeholder="">
					</div>
				</div>

				<div class="py-2">
					<label for="">Email</label>
					<input type="email" name="email" class="form-control" id="email" placeholder="">
				</div>

				<div class="py-2">
					<label for="">No Handphone</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">+62</span>
						</div>
						<input type="text" name="nohp" class="form-control" id="nohp" placeholder="">
					</div>
				</div>

				<div class="py-2">
					<label for="">Alamat</label>
					<textarea name="alamat" class="form-control" id="alamat" cols="30" rows="5" placeholder=""></textarea>
				</div>
				<label for="">Tanggal Lahir</label>
				<div class="form-row">

					<div class="col-md-3 mb-3">
						<select class="custom-select d-block w-100" name="tgl" id="tgl">
							<option value="">Tgl</option>
							<?php for ($i=1; $i <= 31; $i++) { 
								echo "<option>$i</option>";
							} ?>
						</select>
					</div>
					<div class="col-md-6 mb-3">
						<select class="custom-select d-block w-100" name="bulan" id="bulan">
							<option value="">Bulan</option>
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
					<div class="col-md-3 mb-3">
						<input type="text" name="tahun" class="form-control" id="tahun" placeholder="">
					</div>
				</div>
				<hr class="mb-4">
				<div class="custom-control custom-checkbox mb-3">
					<input type="checkbox" class="custom-control-input" id="same-address">
					<label class="custom-control-label" for="same-address">Saya telah membaca dan menerima semua ketentuan
						Mikelas</label>
				</div>
				<button class="btn btn-primary btn-lg btn-block" type="submit">Daftar</button>
			</form>
		</div>
	</div>

</div>
