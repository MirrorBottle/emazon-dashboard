<div id="wrapper">

	<?php $menus = $this->menu->get_all_menu(); ?>
	<?php $current_menu = ucfirst($this->uri->segment(1)); ?>

	<!-- Sidebar -->
	<ul class="sidebar navbar-nav">
		<?php foreach( $menus as $menu ) : ?>
			<?php $menu_active = $current_menu == $menu['name'] ? 'active' : '';  ?>
			
			<?php if( $this->menu->is_dropdown($menu['id']) ) : ?>
				<li class="nav-item dropdown <?= $menu_active; ?>">
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
				<li class="nav-item <?= $menu_active; ?>">
					<a class="nav-link" href="<?= base_url($menu['url']); ?>">
						<i class="<?= $menu['icon']; ?>"></i>
						<span><?= $menu['name']; ?></span>
					</a>
				</li>
			<?php endif; ?>
		<?php endforeach; ?>

		<li class="nav-item">
			<a class="nav-link" href="<?= base_url('logout'); ?>">
				<i class="fas fa-fw fa-sign-out-alt"></i>
				<span>Logout</span>
			</a>
		</li>
	</ul>
	<div class="container pl-2 pt-2">
