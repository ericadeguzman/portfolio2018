<?php
/**
Hello, It's me Erica De Guzman. Erica this is the header section of your portfolio. Just in case you forget.
 * @package edg Portfolio
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.ico" />
	
<!-- Style sheets to make my site look pretty -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/fonts.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/back-to-top.css" rel="stylesheet">
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome.min.css" rel="stylesheet">

<?php wp_head(); ?>
<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
	
</head>
	
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'edg_portfolio' ); ?></a>
	


<!-- START NAVBAR -->
   <div class="navbar-wrapper">
		<div class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button> <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="http://ericadeguzman.com/assets/logo.svg" style="width:70px;"></a>
				</div><?php
				                        wp_nav_menu( array(
				                            
				                            'theme_location'    => 'primary',
				                            'container'         => 'nav',
				                            
				                            'container_class'   => 'navbar-collapse collapse',
				                            'menu_class'        => 'nav navbar-nav navbar-right',
				                             //Process nav menu using our custom nav walker
				                             'walker' => new wp_bootstrap_navwalker())
				                            
				                        );
				                    ?>
			</div><!--/container-->
		</div><!--/navbar-->
	</div>
  
</div>   <!--/wrapper--> 
<!-- END NAVBAR -->

	