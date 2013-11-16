<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/style.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width" />
	<title><?php bloginfo('url'); ?> <?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body>
	<header class="page">
		<a href="/"><img class="me" width="150" height="150" src="<?php jc_img( 'me', 'jpg' ); ?>" alt="Just me."></a>
		<h1>Hello world.</h1>
		<nav role="navigation">
			<ul>
				<li><a href="/about/">about</a></li>
				<li class="break">//</li>
				<li><a href="/talk/">talk</a></li>
			</ul>
		</nav>
		<p>I'm Jake Cleary, a web developer and real life human from Worthing, UK. Take a look around and read about my life if you like.</p>
	</header>