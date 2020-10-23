
<!DOCTYPE html>

<html lang="en">

	<head>

		<title><?php bloginfo( "name" ) ; ?><?php wp_title( "|" , true , "left" ) ; ?></title>

		<meta charset="<?php bloginfo( "charset" ) ; ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="stylesheet" href="<?php bloginfo( "stylesheet_url" ) ; ?>" />
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/shortcut-icon.png" />
		<link rel="profile" href="https://gmpg.org/xfn/11" />

		<?php wp_head() ; ?>

	</head>

	<body>

		<div class="bootstrap-inside">

			<nav class="navbar navbar-expand-md navbar-dark bg-dark">
				<a class="nav-brand" href="<?php bloginfo( "url" ) ; ?>" title="Home">
					<img src="<?php echo get_template_directory_uri(); ?>/home.svg" width="30" height="30" class="home-sign d-inline-block align-top" alt="" />
				</a>
				&nbsp;
				<a class="nav-brand" href="<?php bloginfo( "url" ) ; ?>/wp-admin/post-new.php" title="Add New">
					<img src="<?php echo get_template_directory_uri(); ?>/plus.svg" width="30" height="30" class="plus-sign d-inline-block align-top" alt="" />
				</a>
				&nbsp;
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tabulaire-navbarSupportedContent" aria-controls="tabulaire-navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="tabulaire-navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="tabulaire-navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Notes
							</a>
							<div class="dropdown-menu" aria-labelledby="tabulaire-navbarDropdown">
								<a class="dropdown-item" href="<?php echo home_url( "/" ) ; ?>">Latest</a>
								<div class="dropdown-divider"></div>
								<?php echo SDARDOURCOM_TABULAIRE_THEME_CATEGORIES_LIST() ; ?>
							</div>
						</li>
					</ul>
					<form class="form-inline my-2 my-lg-0" method="get" action="<?php echo home_url( "/" ) ; ?>">
						<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="s" id="s" value="<?php echo isset( $_GET[ "s" ] ) && !empty( $_GET[ "s" ] ) ? $_GET[ "s" ] : "" ; ?>" />
						<button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
					</form>
				</div>
			</nav>

			<div id="tabulaire">
