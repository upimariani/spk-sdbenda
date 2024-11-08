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
						<button type="button" class="btn btn-black" data-bs-toggle="modal" data-bs-target="#exampleModal">
							<span class="btn-label">
								<i class="fa fa-archive"></i>
							</span>
							Tambah Data Siswa
						</button>
						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<form action="<?= base_url('Operator/cSiswa/create') ?>" method="POST">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Masukkan Data Siswa</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<div class="card">
												<div class="card-body">
													<div class="form-group">
														<label>Wali Kelas <span class="text-danger">*</span></label>
														<select class="form-control" name="wali_kelas" required>
															<option value="">---Pilih Wali Kelas---</option>
															<?php
															foreach ($wali_kelas as $key => $value) {
															?>
																<option value="<?= $value->id_user ?>"><?= $value->nama_user ?></option>
															<?php
															}
															?>

														</select>
													</div>
													<div class="row">
														<div class="col-lg-6">
															<div class="form-group">
																<label>Nama Siswa <span class="text-danger">*</span></label>
																<input class="form-control" name="nama" placeholder="Masukkan Nama Siswa" required>
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group">
																<label>NIS <span class="text-danger">*</span></label>
																<input class="form-control" name="nis" placeholder="Masukkan NIS" required>
															</div>
														</div>
													</div>

													<div class="row">
														<div class="col-lg-6">
															<div class="form-group">
																<label>Jenis Kelamin <span class="text-danger">*</span></label>
																<select class="form-control" name="jk" required>
																	<option value="">---Pilih Jenis Kelamin---</option>
																	<option value="Perempuan">Perempuan</option>
																	<option value="Laki - Laki">Laki - Laki</option>
																</select>
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group">
																<label>Kelas <span class="text-danger">*</span></label>
																<select class="form-control" name="kelas" required>
																	<option value="">---Pilih Kelas---</option>
																	<option value="I">I</option>
																	<option value="II">II</option>
																	<option value="III">III</option>
																	<option value="IV">IV</option>
																	<option value="V">V</option>
																	<option value="VI">VI</option>
																</select>
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

											<td><a href="<?= base_url('Operator/cSiswa/delete/' . $value->id_siswa) ?>" class="btn btn-icon btn-round btn-danger">
													<i class="fa fa-trash"></i>
												</a>
												<button type="button" class="btn btn-icon btn-round btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?= $value->id_siswa ?>">

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
foreach ($siswa as $key => $value) {
?>
	<div class="modal fade" id="edit<?= $value->id_siswa ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form action="<?= base_url('Operator/cSiswa/update/' . $value->id_siswa) ?>" method="POST">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Perbaharui Data Siswa</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="card">
							<div class="card-body">
								<div class="form-group">
									<label>Wali Kelas <span class="text-danger">*</span></label>
									<select class="form-control" name="wali_kelas" required>
										<option value="">---Pilih Wali Kelas---</option>
										<?php
										foreach ($wali_kelas as $key => $item) {
										?>
											<option value="<?= $item->id_user ?>" <?php if ($value->id_user == $item->id_user) {
																						echo 'selected';
																					} ?>><?= $item->nama_user ?></option>
										<?php
										}
										?>

									</select>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label>Nama Siswa <span class="text-danger">*</span></label>
											<input class="form-control" value="<?= $value->nama_siswa ?>" name="nama" placeholder="Masukkan Nama Siswa" required>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>NIS <span class="text-danger">*</span></label>
											<input class="form-control" value="<?= $value->nis ?>" name="nis" placeholder="Masukkan NIS" required>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label>Jenis Kelamin <span class="text-danger">*</span></label>
											<select class="form-control" name="jk" required>
												<option value="">---Pilih Jenis Kelamin---</option>
												<option value="Perempuan" <?php if ($value->jk == 'Perempuan') {
																				echo 'selected';
																			} ?>>Perempuan</option>
												<option value="Laki - Laki" <?php if ($value->jk == 'Laki - Laki') {
																				echo 'selected';
																			} ?>>Laki - Laki</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Kelas <span class="text-danger">*</span></label>
											<select class="form-control" name="kelas" required>
												<option value="">---Pilih Kelas---</option>
												<option value="I" <?php if ($value->kelas == 'I') {
																		echo 'selected';
																	} ?>>I</option>
												<option value="II" <?php if ($value->kelas == 'II') {
																		echo 'selected';
																	} ?>>II</option>
												<option value="III" <?php if ($value->kelas == 'III') {
																		echo 'selected';
																	} ?>>III</option>
												<option value="IV" <?php if ($value->kelas == 'IV') {
																		echo 'selected';
																	} ?>>IV</option>
												<option value="V" <?php if ($value->kelas == 'V') {
																		echo 'selected';
																	} ?>>V</option>
												<option value="VI" <?php if ($value->kelas == 'VI') {
																		echo 'selected';
																	} ?>>VI</option>
											</select>
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
