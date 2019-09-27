<div class="col-sm-3 mx-auto mt-3 rounded-lg" style="background-color: #e3e3e3">
	<div class="py-4">
		<h2 class="mb-3 text-center">Daftar Siswa</h2>

		<div class="form-row py-2">
			<div class="col">
                <label for="">Nama Depan</label>
				<input type="text" class="form-control" id="firstName" placeholder="Burhan" value="" required>
				<div class="invalid-feedback">
					Valid first name is required.
				</div>
			</div>
			<div class="col">
                <label for="">Nama Belakang</label>
				<input type="text" class="form-control" id="lastName" placeholder="Yuswantyo" value="" required>
				<div class="invalid-feedback">
					Valid last name is required.
				</div>
			</div>
		</div>

		<div class="py-2">
            <label for="">Username</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">@</span>
				</div>
				<input type="text" class="form-control" id="username" placeholder="burhanyuswantyo" required>
				<div class="invalid-feedback" style="width: 100%;">
					Your username is required.
				</div>
			</div>
		</div>

		<div class="py-2">
            <label for="">Email</label>
			<input type="email" class="form-control" id="email" placeholder="burhanyuswantyo@example.com">
			<div class="invalid-feedback">
				Please enter a valid email address for shipping updates.
			</div>
		</div>

        <div class="py-2">
            <label for="">No Handphone</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">+62</span>
				</div>
				<input type="text" class="form-control" id="nohp" placeholder="89620756656" required>
				<div class="invalid-feedback" style="width: 100%;">
					Your username is required.
				</div>
			</div>
		</div>

		<div class="py-2">
        <label for="">Alamat</label>
            <textarea class="form-control" id="alamat" cols="30" rows="5" placeholder="Jalan" required></textarea>
			<div class="invalid-feedback">
				Please enter your shipping address.
			</div>
		</div>
        <label for="">Tanggal Lahir</label>
		<div class="form-row">
            
			<div class="col-md-3 mb-3">
				<select class="custom-select d-block w-100" id="country" required>
                    <option value="">Tgl</option>
                    <?php for ($i=1; $i <= 31; $i++) { 
                            echo "<option>$i</option>";
                        }
                    ?>
				</select>
				<div class="invalid-feedback">
					Please select a valid country.
				</div>
			</div>
			<div class="col-md-6 mb-3">
				<select class="custom-select d-block w-100" id="state" required>
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
				<div class="invalid-feedback">
					Please provide a valid state.
				</div>
			</div>
			<div class="col-md-3 mb-3">
				<input type="text" class="form-control" id="zip" placeholder="Tahun" required>
				<div class="invalid-feedback">
					Zip code required.
				</div>
			</div>
		</div>
		<hr class="mb-4">
		<div class="custom-control custom-checkbox mb-3">
			<input type="checkbox" class="custom-control-input" id="same-address">
			<label class="custom-control-label" for="same-address">Saya telah membaca dan menerima semua ketentuan Mikelas</label>
		</div>
		<button class="btn btn-primary btn-lg btn-block" type="submit">Daftar</button>
		</form>
	</div>
</div>
