<body>
	<div class="wrapper">
		<!-- Sidebar -->
		<div class="sidebar" data-background-color="dark">
			<div class="sidebar-logo">
				<!-- Logo Header -->
				<div class="logo-header" data-background-color="dark">
					<a href="index.html" class="logo">
						<img src="<?= base_url('asset/template/') ?>assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" />
					</a>
					<div class="nav-toggle">
						<button class="btn btn-toggle toggle-sidebar">
							<i class="gg-menu-right"></i>
						</button>

					</div>

				</div>
				<!-- End Logo Header -->
			</div>
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav nav-secondary">
						<li class="nav-item <?php if ($this->uri->segment(1) == 'Operator' && $this->uri->segment(2) == 'cDashboard') {
												echo 'active';
											}  ?>">
							<a href="<?= base_url('Operator/cDashboard') ?>" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>

							</a>

						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Data</h4>
						</li>

						<li class="nav-item <?php if ($this->uri->segment(1) == 'Operator' && $this->uri->segment(2) == 'cUser') {
												echo 'active';
											}  ?>">
							<a href="<?= base_url('Operator/cUser') ?>">
								<i class="fas fa-user"></i>
								<p>User</p>
							</a>
						</li>
						<li class="nav-item <?php if ($this->uri->segment(1) == 'Operator' && $this->uri->segment(2) == 'cSiswa') {
												echo 'active';
											}  ?>">
							<a href="<?= base_url('Operator/cSiswa') ?>">
								<i class="fas fa-user-tie"></i>
								<p>Siswa</p>
							</a>
						</li>
						<li class="nav-item  <?php if ($this->uri->segment(1) == 'Operator' && $this->uri->segment(2) == 'cKriteria') {
													echo 'active';
												}  ?>">
							<a href="<?= base_url('Operator/cKriteria') ?>">
								<i class="fas fa-align-justify"></i>
								<p>Kriteria Penilaian</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Analisis</h4>
						</li>
						<li class="nav-item  <?php if ($this->uri->segment(1) == 'Operator' && $this->uri->segment(2) == 'cAnalisis') {
													echo 'active';
												}  ?>">
							<a href="<?= base_url('Operator/cAnalisis') ?>">
								<i class="fas fa-chess-queen"></i>
								<p>Siswa Terbaik</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->
		<div class="main-panel">
			<div class="main-header">

				<!-- Navbar Header -->
				<nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
					<div class="container-fluid">

						<ul class="navbar-nav topbar-nav ms-md-auto align-items-center">

							<li class="nav-item topbar-user dropdown hidden-caret">
								<a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#" aria-expanded="false">
									<div class="avatar-sm">
										<img src="<?= base_url('asset/template/') ?>assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle" />
									</div>
									<span class="profile-username">
										<span class="op-7">Hi,</span>
										<span class="fw-bold">Operator</span>
									</span>
								</a>
								<ul class="dropdown-menu dropdown-user animated fadeIn">
									<div class="dropdown-user-scroll scrollbar-outer">

										<li>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="<?= base_url('cLogin/logout') ?>">Logout</a>
											<div class="dropdown-divider"></div>

										</li>
									</div>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
				<!-- End Navbar -->
			</div>
