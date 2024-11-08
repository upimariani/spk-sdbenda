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
		<div class="row">


			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<button type="button" class="btn btn-black" data-bs-toggle="modal" data-bs-target="#exampleModal">
							<span class="btn-label">
								<i class="fa fa-archive"></i>
							</span>
							Tambah Data Nilai Siswa
						</button>
						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<form action="<?= base_url('WaliKelas/cNilaiSiswa/hitung') ?>" method="POST">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Masukkan Data Nilai Siswa</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<div class="card">
												<div class="card-body">
													<div class="form-group">
														<label>Siswa <span class="text-danger">*</span></label>
														<select class="form-control" name="siswa" required>
															<option value="">---Pilih Siswa---</option>
															<?php
															foreach ($siswa as $key => $value) {
																if (!$value->n_pengetahuan) {
															?>
																	<option value="<?= $value->id_siswa ?>"><?= $value->nama_siswa ?></option>
															<?php
																}
															}
															?>

														</select>
													</div>
													<div class="row">
														<div class="col-lg-6">
															<div class="form-group">
																<label>Nilai Pengetahuan <span class="text-danger">*</span></label>
																<input class="form-control" name="n_pengetahuan" placeholder="Masukkan Nilai Pengetahuan" required>
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group">
																<label>Nilai Keterampilan <span class="text-danger">*</span></label>
																<input class="form-control" name="n_keterampilan" placeholder="Masukkan Nilai Keterampilan" required>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-6">
															<div class="form-group">
																<label>Presensi Kehadiran <span class="text-danger">*</span></label>
																<input class="form-control" name="n_kehadiran" placeholder="Masukkan Presensi Kehadiran" required>
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group">
																<label>Perilaku <span class="text-danger">*</span></label>
																<input class="form-control" name="n_perilaku" placeholder="Masukkan NIS" required>
															</div>
														</div>
													</div>
													<div class="form-group">
														<label>Prestasi Siswa <span class="text-danger">*</span></label>
														<select class="form-control" name="n_prestasi" required>
															<option value="">---Pilih Tingkat Prestasi---</option>
															<option value="Sekolah">Sekolah</option>
															<option value="Kecamatan">Kecamatan</option>
															<option value="Kabupaten">Kabupaten</option>
															<option value="Provinsi">Provinsi</option>
															<option value="Nasional">Nasional</option>
														</select>
													</div>


												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="multi-filter-select" class="display table table-striped table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Wali Kelas</th>
										<th>NIS</th>
										<th>Nama Siswa</th>
										<th>Jenis Kelamin</th>
										<th>Kelas</th>
										<th>Action</th>
									</tr>
								</thead>
								<tfoot>
									<th>No</th>
									<th>Nama Wali Kelas</th>
									<th>NIS</th>
									<th>Nama Siswa</th>
									<th>Jenis Kelamin</th>
									<th>Kelas</th>
									<th>Action</th>
								</tfoot>
								<tbody>
									<?php
									$no = 1;
									foreach ($siswa as $key => $value) {
									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->nama_user ?></td>
											<td><?= $value->nis ?></td>
											<td><?= $value->nama_siswa ?></td>
											<td><?= $value->jk ?></td>
											<td><?= $value->kelas ?></td>
											<td>
												<?php
												if ($value->hasil) {
												?>
													<button type="button" class="btn btn-icon btn-round btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?= $value->id_siswa ?>">
														<i class="fa fa-eye"></i>
													</button>
												<?php
												} else {
												?>
													<span class="badge badge-danger">Tidak Ada Data Nilai</span>
												<?php
												}
												?>

											</td>
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

<?php
foreach ($siswa as $key => $value) {
?>
	<div class="modal fade" id="edit<?= $value->id_siswa ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Informasi Siswa</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="card">
						<div class="card-body">
							<table class="table">
								<tr>
									<td>NIS </td>
									<td>: <?= $value->nis ?></td>
								</tr>
								<tr>
									<td>Nama Siswa </td>
									<td>: <?= $value->nama_siswa ?></td>
								</tr>
								<tr>
									<td>Jenis Kelamin </td>
									<td>: <?= $value->jk ?></td>
								</tr>
								<tr>
									<td>Nilai Pengetahuan </td>
									<td>: <?= $value->n_pengetahuan ?></td>
								</tr>
								<tr>
									<td>Nilai Keterampilan </td>
									<td>: <?= $value->n_keterampilan ?></td>
								</tr>
								<tr>
									<td>Nilai Kehadiran </td>
									<td>: <?= $value->n_kehadiran ?></td>
								</tr>
								<tr>
									<td>Nilai Perilaku </td>
									<td>: <?= $value->n_perilaku ?></td>
								</tr>
								<tr>
									<td>Prestasi </td>
									<td>: <?= $value->n_presentasi ?></td>
								</tr>
								<tr>
									<td>Hasil Perhitungan </td>
									<td>: <?= $value->hasil ?></td>
								</tr>
							</table>

						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

				</div>
			</div>
			</form>
		</div>
	</div>
<?php
}
?>
