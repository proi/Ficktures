<?php

	function restrict_admin()
	{
		if ( ! current_user_can( 'manage_options' ) ) {
	                wp_redirect( site_url() );
		}
	}
	add_action( 'admin_init', 'restrict_admin', 1 );
?>