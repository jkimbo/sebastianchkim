<?php
/**
 * The template for displaying the footer
 *
 */
?>	

	<?php if ( is_active_sidebar( 'footer-widget-1' ) or is_active_sidebar( 'footer-widget-2' ) or is_active_sidebar( 'footer-widget-3' ) ) : 
		echo '<div class="footer-widgets-wrapper">'; ?>
			<div class="footer-widget-one">
				<?php if ( is_active_sidebar( 'footer-widget-1' ) ) : ?>
					
						<div class="widget-area" role="complementary">
							<?php dynamic_sidebar( 'footer-widget-1' ); ?>
						</div><!-- .widget-area -->
				
				<?php endif; ?>
			</div>	
			
			<div class="footer-widget-two">
			<?php if ( is_active_sidebar( 'footer-widget-2' ) ) : ?>
				
					<div class="widget-area" role="complementary">
						<?php dynamic_sidebar( 'footer-widget-2' ); ?>
					</div><!-- .widget-area -->
				
			<?php endif; ?>
			</div>
			
			<div class="footer-widget-three">
			<?php if ( is_active_sidebar( 'footer-widget-3' ) ) : ?>
				
					<div class="widget-area" role="complementary">
						<?php dynamic_sidebar( 'footer-widget-3' ); ?>
					</div><!-- .widget-area -->
				
			<?php endif; ?>
			</div>
		<?php echo '</div>'; ?>
		<?php endif; ?>
	</div><!-- .site-content -->
		
	<footer id="colophon" class="site-footer" role="contentinfo">
		
	<?php quidus_footer_social(); ?>
		<p class="site-info">
			<?php
			
				do_action( 'quidus_credits' );
			?>
				<a ><?php printf( __( 'Quidus 2015. All rights reserved. Theme by ', 'quidus' ) ); ?></a >
				<a class="footer-link"  href="<?php echo esc_url( __( '//qerrapress.com', 'quidus' ) ); ?>"><?php printf( __( '%s', 'quidus' ), 'qerrapress. ' ); ?></a>
				<a ><?php printf( __( ' Powered by ', 'quidus' ) ); ?></a>
				<a class="footer-link"  href="<?php echo esc_url( __( '//wordpress.org/', 'quidus' ) ); ?>"><?php printf( __( '%s', 'quidus' ), 'WordPress.' ); ?></a>
				
		</p><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
