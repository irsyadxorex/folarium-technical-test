<div class="app-menu navbar-menu">
	<!-- LOGO -->
	<div class="navbar-brand-box">
		<!-- Dark Logo-->
		<a href="<?= base_url('dashboard'); ?>" class="logo logo-dark">
			<span class="logo-sm">
				<img src="<?= base_url('assets'); ?>/images/logo-sm.png" alt="" height="22">
			</span>
			<span class="logo-lg">
				<img src="<?= base_url('assets'); ?>/images/logo-dark.png" alt="" height="17">
			</span>
		</a>
		<!-- Light Logo-->
		<a href="<?= base_url('dashboard'); ?>" class="logo logo-light">
			<span class="logo-sm">
				<img src="<?= base_url('assets'); ?>/images/logo-sm.png" alt="" height="22">
			</span>
			<span class="logo-lg">
				<img src="<?= base_url('assets'); ?>/images/logo-light.png" alt="" height="17">
			</span>
		</a>
		<button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
			<i class="ri-record-circle-line"></i>
		</button>
	</div>

	<div id="scrollbar">
		<div class="container-fluid">

			<div id="two-column-menu">
			</div>
			<ul class="navbar-nav" id="navbar-nav">
				<li class="menu-title"><span data-key="t-menu">Menu</span></li>

				<li class="nav-item">
					<a class="nav-link menu-link <?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'active' : ''; ?>" href="<?= base_url('dashboard'); ?>">
						<i class="ri-honour-line"></i> <span data-key="t-dahshboard">Dahshboard</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link menu-link <?= $this->uri->segment(1) == 'kontrak' ? 'active' : ''; ?>" href="<?= base_url('kontrak'); ?>" href="<?= base_url('kontrak'); ?>">
						<i class="ri-file-line"></i> <span data-key="t-kontrak">Kontrak</span>
					</a>
				</li>





			</ul>
		</div>
		<!-- Sidebar -->
	</div>

	<div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
