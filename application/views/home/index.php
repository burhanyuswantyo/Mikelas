<!-- Container atas -->
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center rounded-lg" style="background-color: #3bb4c1">
	<div class="col-md-5 mx-auto my-4">
		<img src="asset/image/Logo.png" alt="" width="200">
	</div>
	<div class="col-md-5 mx-auto my-4 text-white">
		<h1 class="display-5 font-weight-normal">Apa itu?</h1>
		<p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with
			this example based on Apple’s marketing pages.</p>
	</div>
	<div class="col-md-5 mx-auto my-1">
		<a class="btn btn-outline-light" href="<?php echo base_url('auth/register'); ?>">Daftar</a>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Daftar Siswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
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
								<?php for ($i = 1; $i <= 31; $i++) {
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
						<label class="custom-control-label" for="same-address">Saya telah membaca dan menerima semua
							ketentuan
							Mikelas</label>
					</div>
					<button class="btn btn-primary btn-lg btn-block" type="submit">Daftar</button>
				</form>
			</div>
		</div>
	</div>
</div>