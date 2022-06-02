<?php 

/**
 *
 * Plugin Name: Gravity Forms Export Semicolon
 * Description: Plugin para alterar o caractere separador da exportação registros para ponto e vírgula.
 * Author: JP Tibério
 *
 */

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

if ( is_plugin_active('gravityforms/gravityforms.php') ) {
	add_filter( 'gform_export_separator', 'change_separator', 10, 2 );
	function change_separator( $separator, $form_id ) {
		return ';';
	}
} else {
	function pls_activate_gforms() {
	    ?>
	    <div class="error notice">
	        <p><?php _e( 'Por favor, instale ou ative o Gravity Forms!', '' ); ?></p>
	    </div>
	    <?php
	}
	add_action( 'admin_notices', 'pls_activate_gforms' );
}
?>