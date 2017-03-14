<!doctype html>
	<head>
		<meta charset="utf-8">
		<title><?php print_title(); ?></title>
		<link rel="shortcut icon" href="<?php echo THEMEPATH; ?>images/favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="cleartype" content="on">
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<?php wp_head(); ?>
	</head>

	<body>
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		<div class="container">
		
			<div class="wrap_980">
				<header id="mainHeader" class="daheader">
					<h1><a href="<?php echo site_url(); ?>" id="mainLogo" class="logo">Olallo Rubio</a></h1>
					<nav class="menu">
						<ul style="list-style: none; margin: 0; padding: 0;">
							<li><a href="<?php echo site_url("video"); ?>">Video</a></li>
							<li><a href="<?php echo site_url("podcasts"); ?>">Podcasts</a></li>
							<li><a href="<?php echo site_url("about"); ?>">Bio</a></li>
							<li><a href="<?php echo site_url("links"); ?>">Links</a></li>
							<li><a href="<?php echo site_url("contact"); ?>">Contacto</a></li>
						</ul>
					</nav>
					<div class="clearfix"></div>
				</header>