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
						<h4 class="card-title">Informasi Nilai Siswa</h4>
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
