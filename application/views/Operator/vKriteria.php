<div class="container">
	<div class="page-inner">
		<div class="page-header">
			<h3 class="fw-bold mb-3">Informasi Kriteria Penilaian</h3>
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
					<a href="#">Kriteria Penilaian</a>
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
							Tambah Data Sub Kriteria
						</button>
						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<form action="<?= base_url('Operator/cKriteria/create') ?>" method="POST">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Masukkan Data Sub Kriteria</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<div class="card">
												<div class="card-body">
													<div class="form-group">
														<label>Nama Kriteria <span class="text-danger">*</span></label>
														<select class="form-control" name="kriteria" required>
															<option value="">---Pilih Kriteria Penilaian---</option>
															<option value="Nilai Pengetahuan">Nilai Pengetahuan</option>
															<option value="Nilai Keterampilan">Nilai Keterampilan</option>
															<option value="Prestasi Kehadiran">Prestasi Kehadiran</option>
															<option value="Perilaku">Perilaku</option>
															<option value="Nilai Prestasi">Nilai Prestasi</option>
														</select>
													</div>
													<div class="row">
														<div class="col-lg-6">
															<div class="form-group">
																<label>Nama Sub Kriteria <span class="text-danger">*</span></label>
																<input class="form-control" name="nama" placeholder="Masukkan Nama Sub Kriteria" required>
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group">
																<label>Bobot <span class="text-danger">*</span></label>
																<input class="form-control" name="bobot" placeholder="Masukkan Bobot" required>
															</div>
														</div>
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
										<th>Nama Kriteria</th>
										<th>Sub kriteria</th>
										<th>Bobot</th>
										<th>Action</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Nama Kriteria</th>
										<th>Sub kriteria</th>
										<th>Bobot</th>
										<th>Action</th>
									</tr>
								</tfoot>
								<tbody>
									<?php
									$no = 1;
									foreach ($kriteria as $key => $value) {
									?>
										<tr>

											<td><?= $no++ ?>.</td>
											<td><?= $value->nama_kriteria ?></td>
											<td><?= $value->sub_kriteria ?></td>
											<td><?= $value->bobot ?></td>
											<td><a href="<?= base_url('Operator/cKriteria/delete/' . $value->id_kriteria) ?>" class="btn btn-icon btn-round btn-danger">
													<i class="fa fa-trash"></i>
												</a>
												<button type="button" class="btn btn-icon btn-round btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?= $value->id_kriteria ?>">

													<i class="fa fa-edit"></i>


												</button>
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
foreach ($kriteria as $key => $value) {
?>
	<div class="modal fade" id="edit<?= $value->id_kriteria ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form action="<?= base_url('Operator/cKriteria/update/' . $value->id_kriteria) ?>" method="POST">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Perbaharui Data Sub Kriteria</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="card">
							<div class="card-body">
								<div class="form-group">
									<label>Nama Kriteria <span class="text-danger">*</span></label>
									<select class="form-control" name="kriteria" required>
										<option value="">---Pilih Kriteria Penilaian---</option>
										<option value="Nilai Pengetahuan" <?php if ($value->nama_kriteria == 'Nilai Pengetahuan') {
																				echo 'selected';
																			} ?>>Nilai Pengetahuan</option>
										<option value="Nilai Keterampilan" <?php if ($value->nama_kriteria == 'Nilai Keterampilan') {
																				echo 'selected';
																			} ?>>Nilai Keterampilan</option>
										<option value="Prestasi Kehadiran" <?php if ($value->nama_kriteria == 'Prestasi Kehadiran') {
																				echo 'selected';
																			} ?>>Prestasi Kehadiran</option>
										<option value="Perilaku" <?php if ($value->nama_kriteria == 'Perilaku') {
																		echo 'selected';
																	} ?>>Perilaku</option>
										<option value="Nilai Prestasi" <?php if ($value->nama_kriteria == 'Nilai Prestasi') {
																			echo 'selected';
																		} ?>>Nilai Prestasi</option>
									</select>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label>Nama Sub Kriteria <span class="text-danger">*</span></label>
											<input class="form-control" value="<?= $value->sub_kriteria ?>" name="nama" placeholder="Masukkan Nama Sub Kriteria" required>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Bobot <span class="text-danger">*</span></label>
											<input class="form-control" value="<?= $value->bobot ?>" name="bobot" placeholder="Masukkan Bobot" required>
										</div>
									</div>
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
<?php
}
?>