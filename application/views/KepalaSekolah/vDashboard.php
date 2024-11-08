<div class="container">
	<div class="page-inner">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
			<div>
				<h3 class="fw-bold mb-3">Dashboard</h3>
			</div>

		</div>
		<?php
		$user = $this->db->query("SELECT COUNT(id_user) as jml FROM `user`")->row();
		$jml_siswa = $this->db->query("SELECT COUNT(id_siswa) as jml FROM `siswa`")->row();
		$siswa_terbaik = $this->db->query("SELECT * FROM `analisis` JOIN siswa ON analisis.id_siswa=siswa.id_siswa ORDER BY hasil DESC LIMIT 1")->row();
		?>
		<div class="row">
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<div class="col-icon">
								<div class="icon-big text-center icon-primary bubble-shadow-small">
									<i class="fas fa-users"></i>
								</div>
							</div>
							<div class="col col-stats ms-3 ms-sm-0">
								<div class="numbers">
									<p class="card-category">User</p>
									<h4 class="card-title"><?= $user->jml ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<div class="col-icon">
								<div class="icon-big text-center icon-info bubble-shadow-small">
									<i class="fas fa-user-check"></i>
								</div>
							</div>
							<div class="col col-stats ms-3 ms-sm-0">
								<div class="numbers">
									<p class="card-category">Siswa</p>
									<h4 class="card-title"><?= $jml_siswa->jml ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<div class="col-icon">
								<div class="icon-big text-center icon-success bubble-shadow-small">
									<i class="fas fa-luggage-cart"></i>
								</div>
							</div>
							<div class="col col-stats ms-3 ms-sm-0">
								<div class="numbers">
									<p class="card-category">Kriteria</p>
									<h4 class="card-title">5</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<div class="col-icon">
								<div class="icon-big text-center icon-secondary bubble-shadow-small">
									<i class="far fa-check-circle"></i>
								</div>
							</div>
							<div class="col col-stats ms-3 ms-sm-0">
								<div class="numbers">
									<p class="card-category">Siswa Terbaik</p>
									<h6><?= $siswa_terbaik->nama_siswa ?></h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="row">
			<div class="card">
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
