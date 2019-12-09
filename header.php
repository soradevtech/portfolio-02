<!DOCTYPE html>

<html lang="en">
<head>
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">

	<meta name="viewport" content="width=device-width">

	<?php wp_head(); ?>

	<?php the_field('header_scripts', 'option'); ?>

	<style>
		
		<?php the_field('custom_css', 'option'); ?>

	</style>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	
</head>

<body <?php body_class(); ?>>

<?php the_field('body_scripts', 'option'); ?>

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
		<a href="https://twitter.com/soradev" target="_blank">
          <i class="fab fa-twitter"></i>
		</a>
		<a href="https://www.linkedin.com/in/tracy-marshall-349b2417/" target="_blank">
          <i class="fab fa-linkedin"></i>
		</a>
		<a href="https://www.instagram.com/sora_dev/" target="_blank">
          <i class="fab fa-instagram"></i>
		</a>
		<a href="https://github.com/soraphoenix" target="_blank">
          <i class="fab fa-github"></i>
        </a>
	</div>

</header><!-- end header -->