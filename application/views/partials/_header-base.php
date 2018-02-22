<!-- BEGIN: Header -->
<header class="m-grid__item m-header"  data-minimize-offset="200" data-minimize-mobile-offset="200" >
	<div class="m-container m-container--fluid m-container--full-height">
		<div class="m-stack m-stack--ver m-stack--desktop">
			<!-- BEGIN: Brand -->
			<?php $this->load->view('partials/_header-brand'); ?>
			<!-- END: Brand -->
			<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
				<!-- BEGIN: Horizontal Menu -->
				<?php //$this->load->view('partials/_header-hor-menu'); ?>
				<!-- END: Horizontal Menu -->
				<!-- BEGIN: Topbar -->
				<?php $this->load->view('partials/_header-topbar'); ?>
				<!-- END: Topbar -->
			</div>
		</div>
	</div>
</header>
<!-- END: Header -->	