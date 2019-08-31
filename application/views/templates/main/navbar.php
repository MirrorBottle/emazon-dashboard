<nav class="navbar navbar-expand navbar-dark bg-dark static-top justify-content-between">
	<div class="col-lg-6 d-flex align-items-center">
		<a class="navbar-brand mr-1" href="<?= base_url(); ?>">Emazon</a>

		<button class="btn btn-link btn-sm text-white order-1 order-sm-0 mt-1" id="sidebarToggle" href="#">
			<i class="fas fa-bars"></i>
		</button>
	</div>

	<!-- Navbar -->
	<div class="col-lg-6 justify-content-end d-flex pr-0">
		<ul class="navbar-nav ml-md-0">
			<li class="nav-item">
				<a class="nav-link text-white" href="<?= base_url('user/profile'); ?>">M. Novil Fahlevy</a>
			</li>
			<li class="nav-item dropdown no-arrow">
				<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false">
					<img src="<?= ASSETS; ?>img/profile_img/default.png" width="30" height="30" class="rounded-pill">
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
					<a class="dropdown-item" href="#">Settings</a>
					<a class="dropdown-item" href="#">Activity Log</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
				</div>
			</li>
		</ul>
	</div>
</nav>
