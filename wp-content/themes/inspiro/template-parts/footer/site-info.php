<?php
/**
 * Displays footer site info
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro 1.0.0
 * @version 1.0.0
 */

?>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	<span class="copyright">
		<span>
			<a href="<?php echo esc_url( __( '#/', 'inspiro' ) ); ?>" target="_blank">
				<?php
				/* translators: %s: WordPress trademark */
				printf( esc_html__( 'Gobierno Bolivariano',  ), '' );
				?>
			</a>
		</span>
		<span>
			<?php esc_html_e( '2022-2030 © Copyright  Todos los Derechos Reservados'  ); ?> <a href="<?php echo '#'; ?>" target="_blank" rel="nofollow"></a>
		</span>
	</span>
</div>
