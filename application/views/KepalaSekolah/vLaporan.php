<div class="container">
	<div class="page-inner">
		<div class="page-header">
			<h3 class="fw-bold mb-3">Informasi Siswa</h3>
			<ul class="breadcrumbs mb-3">
				<li class="nav-home">
					<a href="#">
						<i class="icon-home"></i>
					</a>
				</li>
				<li class="separator">
					<i class="icon-arrow-right"></i>
				</li>
				<li class="nav-item">
					<a href="#">Tables</a>
				</li>
				<li class="separator">
					<i class="icon-arrow-right"></i>
				</li>
				<li class="nav-item">
					<a href="#">Siswa</a>
				</li>
			</ul>
		</div>
		<?php
		if ($this->session->userdata('success')) {
		?>
			<div class="alert alert-success" role="alert">
				<?= $this->session->userdata('success') ?>
			</div>
		<?php
		}
		?>

		<div class="row">


			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4>Cetak Laporan Siswa Terbaik</h4>
					</div>
					<form action="<?= base_url('KepalaSekolah/cLaporan/cetak') ?>" method="POST">
						<div class="card-body">
							<div class="form-group">
								<label>Pilih Jumlah Hasil Siswa</label>
								<select class="form-control" name="jml_siswa">
									<option value="">---Pilih Jumlah Siswa---</option>
									<option value="all">Semua</option>
									<option value="10">10 besar</option>
									<option value="15">15 besar</option>
									<option value="20">20 besar</option>
									<option value="25">25 besar</option>
								</select>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-black">Cetak Laporan</button>
							</div>
						</div>
					</form>
				</div>
				<div class="card">
					<div class="card-header">
						<h4>Informasi Hasil Penilaian Siswa</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="multi-filter-select" class="display table table-striped table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>NIS</th>
										<th>Nama Siswa</th>
										<th>Jenis Kelamin</th>
										<th>Kelas</th>
										<th>Nilai</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>No</th>
										<th>NIS</th>
										<th>Nama Siswa</th>
										<th>Jenis Kelamin</th>
										<th>Kelas</th>
										<th>Nilai</th>
									</tr>
								</tfoot>
								<tbody>
									<?php
									$no = 1;
									foreach ($siswa as $key => $value) {
									?>
										<tr>

											<td><?= $no++ ?></td>
											<td><?= $value->nis ?></td>
											<td><?= $value->nama_siswa ?></td>
											<td><?= $value->jk ?></td>
											<td><?= $value->kelas ?></td>
											<td><?= $value->hasil ?></td>


										</tr>
									<?php
									}
									?>


								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>


		</div>
	</div>
</div>
