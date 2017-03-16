<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<title>Linke Chemical Solutions</title>
	<?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>
	<?php wp_head(); ?>
</head>
<body>

<div class="header-container">
	<span id="main-menu-wrap">
		<a href="../wordpress/o-firmie/"><div id='logo'></div></a>
		<?php wp_nav_menu(array('theme_location' => 'main_menu' ));?>
		<?php get_search_form(); ?>
	</span>
	
</div>

<div id="banner">
    <div class='name'></div>
</div>
	

