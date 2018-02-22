<footer>
	<!-- if the script is for specific page only, use if statement -->
	<?php //if( $page_title == 'Sample Page' ): ?>
		<!-- <script src="sample_script.js"></script> -->
	<?php //endif;?>
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>	
	<script src="<?php echo base_url('assets/metronic/assets/vendors/base/vendors.bundle.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/metronic/assets/demo/default/base/scripts.bundle.js');?>" type="text/javascript"></script>
    <!--begin::Page Vendors -->
	<script src="<?php echo base_url('assets/metronic/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js'); ?>" type="text/javascript"></script>
	<!--end::Page Vendors -->  
    <!--begin::Page Snippets -->
	<script src="<?php echo base_url('assets/metronic/assets/app/js/dashboard.js'); ?>" type="text/javascript"></script>
	<!--end::Page Snippets -->
	<script>
		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip(); 
		});
	</script>
</footer>