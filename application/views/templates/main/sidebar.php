<div id="wrapper">

	<?php $menus = $this->menu->get_all_menu(); ?>

	<!-- Sidebar -->
	<ul class="sidebar navbar-nav">

		<?php foreach( $menus as $menu ) : ?>
			<?php if( $this->menu->is_dropdown($menu['id']) ) : ?>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-fw fa-folder"></i>
						<span><?= $menu['name']; ?></span>
					</a>
					<div class="dropdown-menu" aria-labelledby="pagesDropdown">
						<?php foreach( $this->menu->get_dropdown_menu_by_menu_id($menu['id']) as $d_menu ) : ?>
							<a class="dropdown-item" href="<?= base_url($d_menu['url']); ?>"><?= $d_menu['name']; ?></a>
						<?php endforeach; ?>
					</div>
				</li>
			<?php else : ?>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url($menu['url']); ?>">
						<i class="<?= $menu['icon']; ?>"></i>
						<span><?= $menu['name']; ?></span>
					</a>
				</li>
			<?php endif; ?>
		<?php endforeach; ?>
		
		<!-- <li class="nav-item active">
			<a class="nav-link" href="index.html">
				<i class="fas fa-fw fa-tachometer-alt"></i>
				<span>Dashboard</span>
			</a>
		</li> -->
		<!-- <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
				aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-fw fa-folder"></i>
				<span>Pages</span>
			</a>
			<div class="dropdown-menu" aria-labelledby="pagesDropdown">
				<a class="dropdown-item" href="login.html">Login</a>
				<a class="dropdown-item" href="register.html">Register</a>
				<a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
			</div>
		</li> -->
		<li class="nav-item">
			<a class="nav-link" href="<?= base_url('logout'); ?>">
				<i class="fas fa-fw fa-sign-out-alt"></i>
				<span>Logout</span>
			</a>
		</li>
	</ul>
	<div class="container pl-2 pt-2">
