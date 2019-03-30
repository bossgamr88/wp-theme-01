<!DOCTYPE html>
<html lang="th">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="<?php bloginfo('template_url')?>/seed.css" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' )?>/style.css" type="text/css">
	<title>เว็บทดสอบ</title>
	<?php wp_head() ?>
</head>

<body>
	<div id="page" class="site">
		<header class="site-header">
			<div class="site-branding">
				<h1 class="site-title"><a href="#"><?php bloginfo( 'name' ) ?></a></h1>
			</div>
			<nav class="site-navigation" role="navigation">
				<?php wp_nav_menu(array('theme_location' => 'primary')  )?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->
        <div class="site-content">