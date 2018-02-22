<!-- BEGIN: Topbar -->
<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
	<div class="m-stack__item m-topbar__nav-wrapper">
		<ul class="m-topbar__nav m-nav m-nav--inline">
			<!-- start::SEARCH -->
				<?php //$this->load->view('partials/_topbar-search-dropdown'); ?>
			<!-- end::SEARCH -->
			<!-- start::NOTIFICATIONS -->
				<?php //$this->load->view('partials/_topbar-notifications'); ?>
			<!-- end::NOTIFICATIONS -->
			<!-- start::QUICK ACTIONS -->
				<?php //$this->load->view('partials/_topbar-quick-actions'); ?>
			<!-- end::QUICK ACTIONS -->
			<!-- end::USER PROFILE -->
				<?php $this->load->view('partials/_topbar-user-profile'); ?>
			<!-- end::USER PROFILE -->
		<!-- 	<li id="m_quick_sidebar_toggle" class="m-nav__item" data-toggle="tooltip" title="Quick Sidebar">
				<a href="#" class="m-nav__link m-dropdown__toggle">
					<span class="m-nav__link-icon">
						<i class="flaticon-grid-menu"></i>
					</span>
				</a>
			</li> -->
		</ul>
	</div>
</div>
<!-- END: Topbar -->
