<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package butterfly
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  	<div id="wrapper">

  		<!-- =============navbar section========== -->
  		<div id="top_nav">
  			<div class="container">
  				<div class="row">
  					<div class="col-md-6">
  						<div id="logo">
  							<img src="images/logo.png" class="">
  						</div>
  					</div>
  					<div class="col-md-6">
  						<div id="title">
  							<h1>ছোটদের রঙিন দুনিয়া</h1>
  							<h4>www.projapotee.com</h4>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  		<div id="main_menu">
  			<div class="container">
          <nav id="navbar" class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="nav-item"><a class="nav-link active" href="#">সন্দেশ <span class="sr-only">(current)</span></a></li>
                  <li class="nav-item"><a class="nav-link" href="#">গল্প</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">ছড়া</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">আনন্দ</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">আলাপন</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">ফিচার</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">নোটবুক</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">ইশকুল</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">আরও</a></li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
  			</div>
  		</div>
