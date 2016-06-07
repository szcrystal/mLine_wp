<?php
/**
 * The header for _ml theme.
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" <?php addMainClass(); ?>>
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_s' ); ?></a> -->

	<header id="masthead" class="site-header clear" role="banner">
		<div class="site-branding">
			<?php
			// if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php thisUrl('images/logo.png'); ?>" alt="株式会社エムラインサービス" /></a></h1>
		</div><!-- .site-branding -->
        
        <?php if(isAgent('sp')) { ?>
            <div class="tgl-bar">
            	<i class="fa fa-bars" aria-hidden="true"></i>
            	<span>MENU</span>
            </div>
        <?php } ?>
        
		<nav id="site-navigation" class="main-navigation" role="navigation">
        	<?php
            	if(isAgent('all')) {
                	$before = isAgent('sp') ? '<i class="fa fa-angle-right" aria-hidden="true"></i>' : '';
                	wp_nav_menu( array( 'menu' => 'Mobile Menu', 'menu_id' => 'mobile-menu', 'link_before'=>$before ) );
                } else {
                	wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); 
                }
            ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
    
    <?php if(is_front_page()) { ?>
    <div class="wrap-cal">
    	<div class="cal">

        	<?php
                if(isLocal())
                    $slideID = (isset($_SERVER['THIS_S']) && $_SERVER['THIS_S'] == 'mba') ? 8 : 8;
                else
                    $slideID = 8;
                
                echo do_shortcode("[metaslider id={$slideID}]");
                //echo do_shortcode("[metaslider id=466]");
            ?>

    </div>
</div>
<?php } ?>

	<div id="content" class="site-content">
    
    
