<html>
<head>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="container">
		<div id="header">
			<h1 id="header-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			<div id="header-description"><?php bloginfo( 'description' ); ?></div>
		</div><!-- #header -->
		<div id="main-content">
