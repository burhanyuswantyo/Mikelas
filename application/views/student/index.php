<div class="container py-3">
	<div class="row">
		<div class="col-md-6">
			<h3>Daftar Mahasiswa</h3>
			<ul class="list-group">
				<?php foreach($siswa as $Siswa) : ?>
				    <li class="list-group-item"><?= $Siswa['nama'] ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>
