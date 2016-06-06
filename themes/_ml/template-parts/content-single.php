<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
    	<?php
    		$slug = get_page_slug(get_the_ID());
            if(strpos($slug, 'privacy') !== false) {
            	$slug = $slug . ' policy';
            }
            elseif(strpos($slug, 'main') !== false || strpos($slug, 'access') !== false || strpos($slug, 'mini') !== false) {
            	$slug = '';
            }
            elseif(strpos($slug, 'contact') !== false ) {
            	$slug = 'contact';
            }
            
    	?>
		<h1 class="entry-title"><?php the_title(); ?><span><?php echo $slug; ?></span></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
    <?php
        if(has_post_thumbnail()) { ?>
            <div class="wrap-thumb">
        		<?php the_post_thumbnail(); ?>
            </div>
        
        <?php } 
        
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
