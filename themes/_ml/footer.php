<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="main-navigation" role="navigation">
                <?php 
                	if(isAgent('sp')) 
                    	wp_nav_menu( array( 'menu' => 'Foot Menu', 'menu_id' => 'foot-menu', 'link_before'=>'<i class="fa fa-angle-right" aria-hidden="true"></i>' ) );
                    else
                		wp_nav_menu( array( 'menu' => 'Foot Menu', 'menu_id' => 'foot-menu' ) ); 
                ?>
            </div>
            
			<p>Copyright <i class="fa fa-copyright" aria-hidden="true"></i> mline service. All Rights Reserved.</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
