<div class="container">
	<div class="page-inner">
		<div class="page-header">
			<h3 class="fw-bold mb-3">Informasi User</h3>
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
					<a href="#">User</a>
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
							Tambah Data User
						</button>
						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<form action="<?= base_url('Operator/cUser/create') ?>" method="POST">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Masukkan Data User</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col-lg-6">
															<div class="form-group">
																<label>Nama User <span class="text-danger">*</span></label>
																<input class="form-control" name="nama" placeholder="Masukkan Nama User" required>
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group">
																<label>Nomor Telepon <span class="text-danger">*</span></label>
																<input class="form-control" name="no_hp" placeholder="Masukkan No Telepon" required>
															</div>
														</div>
													</div>

													<div class="form-group">
														<label>Alamat <span class="text-danger">*</span></label>
														<input class="form-control" name="alamat" placeholder="Masukkan Alamat" required>
													</div>
													<div class="row">
														<div class="col-lg-6">
															<div class="form-group">
																<label>Username <span class="text-danger">*</span></label>
																<input class="form-control" name="username" placeholder="Masukkan Username" required>
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group">
																<label>Password <span class="text-danger">*</span></label>
																<input class="form-control" name="password" placeholder="Masukkan Password" required>
															</div>
														</div>
													</div>
													<div class="form-group">
														<label>Level User <span class="text-danger">*</span></label>
														<select class="form-control" name="level" required>
															<option value="">---Pilih Level User---</option>
															<option value="1">Operator</option>
															<option value="2">Wali Kelas</option>
															<option value="3">Kepala Sekolah</option>
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
										<th>Nama User</th>
										<th>Alamat</th>
										<th>Nomor Telepon</th>
										<th>Akun</th>
										<th>Action</th>
									</tr>
								</thead>
								<tfoot>
									<th>No</th>
									<th>Nama User</th>
									<th>Alamat</th>
									<th>Nomor Telepon</th>
									<th>Akun</th>
									<th>Action</th>
								</tfoot>
								<tbody>
									<?php
									$no = 1;
									foreach ($user as $key => $value) {
									?>
										<tr>

											<td><?= $no++ ?></td>
											<td><?= $value->nama_user ?> <br> <span class="badge badge-danger"><?php if ($value->level_user == '1') {
																													echo 'Operator';
																												} else if ($value->level_user == '2') {
																													echo 'Wali Kelas';
																												} else {
																													echo 'Kepala Sekolah';
																												} ?></span></td>
											<td><?= $value->alamat ?></td>
											<td><?= $value->no_hp ?></td>
											<td><span class="badge badge-warning"><?= $value->username ?></span> <span class="badge badge-info"><?= $value->password ?></span></td>

											<td><a href="<?= base_url('Operator/cUser/delete/' . $value->id_user) ?>" class="btn btn-icon btn-round btn-danger">
													<i class="fa fa-trash"></i>
												</a>
												<button type="button" class="btn btn-icon btn-round btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?= $value->id_user ?>">

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
foreach ($user as $key => $value) {
?>
	<!-- Modal -->
	<div class="modal fade" id="edit<?= $value->id_user ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form action="<?= base_url('Operator/cUser/update/' . $value->id_user) ?>" method="POST">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Perbaharui Data User</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label>Nama User <span class="text-danger">*</span></label>
											<input class="form-control" value="<?= $value->nama_user ?>" name="nama" placeholder="Masukkan Nama User" required>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Nomor Telepon <span class="text-danger">*</span></label>
											<input class="form-control" name="no_hp" value="<?= $value->no_hp ?>" placeholder="Masukkan No Telepon" required>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label>Alamat <span class="text-danger">*</span></label>
									<input class="form-control" name="alamat" value="<?= $value->alamat ?>" placeholder="Masukkan Alamat" required>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label>Username <span class="text-danger">*</span></label>
											<input class="form-control" name="username" value="<?= $value->username ?>" placeholder="Masukkan Username" required>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Password <span class="text-danger">*</span></label>
											<input class="form-control" value="<?= $value->password ?>" name="password" placeholder="Masukkan Password" required>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label>Level User <span class="text-danger">*</span></label>
									<select class="form-control" name="level" required>
										<option value="">---Pilih Level User---</option>
										<option value="1" <?php if ($value->level_user == '1') {
																echo 'selected';
															} ?>>Operator</option>
										<option value="2" <?php if ($value->level_user == '2') {
																echo 'selected';
															} ?>>Wali Kelas</option>
										<option value="3" <?php if ($value->level_user == '3') {
																echo 'selected';
															} ?>>Kepala Sekolah</option>
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
<?php
}
?>