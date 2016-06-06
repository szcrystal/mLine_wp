<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package _s
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'お探しのページが見つかりませんでした', '_s' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p>お探しのページが見つかりませんでした。<br>各リンクよりお入り直すか、TOPページへお戻り下さい。</p>
                    
                    <div class="nr-btn">
                    	<a href="<?php echo home_url(); ?>">TOPへ</a>
                    </div>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
