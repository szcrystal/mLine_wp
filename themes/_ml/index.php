<?php
/* Template Name: Top

*/

get_header(); ?>

	

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
        
        <div class="news">
        	<a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>安全管理に関するガイドライン</a>
        	<section>
                <h2>新着情報<span>NEWS</span></h2>
                <div>
                <?php
                    $wp_query = new WP_Query(
                        array(
                            'post_type'=>'post',
                            'posts_per_page' => 5,
                            'orderby'=>'date ID',
                            'order'=>'DESC',
                        )
                    );           
                    
                    while($wp_query->have_posts()) {
                        $wp_query->the_post();

                        $date = isAgent('sp') ? get_the_date('Y/n/j') : get_the_date();
                        
                        $output = '<article>'."\n";
                        $output .= '<i class="fa fa-angle-right" aria-hidden="true"></i>'."\n";
                        $output .= "<span>". $date."</span>"."\n";
                        $output .= '<h3><a href="'. get_permalink() .'">' . get_the_title() . "</a></h3>"."\n";
                        $output .= "</article>"."\n";
                        
                        echo $output;
                    } 
                    
                    wp_reset_query();
                ?>
            
        		</div>
            </section>
        </div>
        

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();

