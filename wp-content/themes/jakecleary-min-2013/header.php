<!doctype html>
<html lang="en">
<head>
	<!-- CSS here -->
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/style.css">

	<!-- Fonts here -->
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	
	<!-- Meta here -->
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
			<a href="/about-me/">
				<i class="about fa fa-user">
					<span>about me</span>
				</i>
			</a>
			<a href="https://twitter.com/jakecleary">
				<i class="twitter fa fa-twitter">
					<span>twitter</span>
				</i>
			</a>
		</nav>
		<p>I'm Jake Cleary, a web developer and real life human from Worthing, UK. Take a look around and read about my life if you like.</p>
	</header>