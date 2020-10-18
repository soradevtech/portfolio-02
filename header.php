<!DOCTYPE html>

<html lang="en">
<head>
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">

	<meta name="viewport" content="width=device-width">

	<?php wp_head(); ?>

	

	<style>
		
		

	</style>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!-- Meta tags for sites like LinkedIn to scrub for link details -->
	<meta name="image" property="og:image" content="https://images.tre-marshall.com/portfolio/portfolio-screenshot.png">
	
	<meta name="title" property="og:title" content="Tracy Marshall | Developer">
	
    <meta name="author" content="Tracy Marshall">
	
</head>

<body <?php body_class(); ?>>



<header class="header clearfic">

	<!-- <div class="logo"><a href="<?php bloginfo('url'); ?>" class="name">Tracy Marshall</a></div> -->
	
	<a class="menu-link right" href="#nav">&#9776; Menu</a>

	<?php

		$defaults = array(
			'menu'            => 'Main Menu',
			'container'       => 'nav',
			'container_class' => 'nav right',
			'container_id'    => 'nav',
			'menu_class'      => ''
		);

		wp_nav_menu( $defaults );

	?>

	<!-- <div class="menu-btn">
        <i class="fas fa-bars"></i>
	</div> -->

	<div class="header-icons">
		<?php
			// Setting query parameters to pull all entries in
			// the nav_icon pod 
			$params = array(
				'limit' => 0
			);
			$nav_icons = pods('nav_icon', $params);

			// Loop through the items returned
			while ( $nav_icons->fetch() ) { ?>
				<!-- The img tag sometimes has to be echoed with the pod field. Sometimes the image
					address won't print otherwise. -->
				<?php echo '<a href="' . $nav_icons->display('icon_link') . '" target="_blank">'; ?>
					<?php echo $nav_icons->display('icon'); ?>
				</a>
		<?php }; ?>
	</div>

</header><!-- end header -->
