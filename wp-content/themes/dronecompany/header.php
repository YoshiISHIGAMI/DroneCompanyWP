<?php ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <meta name="keywords" content="">
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">

  <meta property="og:title" content="<?php bloginfo('name'); ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
  <meta property="og:description" content="<?php bloginfo( 'description' ); ?>">
  <meta property="fb:app_id" content="">

  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">

  <!-- CSS -->
  <link rel="stylesheet" href="/_library/bootstrap3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="/_asset/css/structure.css">
  <link rel="stylesheet" href="/_asset/css/module.css">
  <!-- JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="/_library/bootstrap3.3.5/js/bootstrap.min.js"></script>
   <script src="/_library/jquery.smooth-scroll.min.js"></script>
  <script src="/_asset/js/index.js" type="text/javascript"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if (is_front_page()): ?>  <header id="header"><?php endif; ?>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header collapsed">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#gnavi" aria-expanded="false" id="btn-toggle-gnavi">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="#">Brand</a> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div  class="collapse navbar-collapse" id="gnavi">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#service">SERVICE</a></li>
        <li><a href="#works">WORKS</a></li>
        <li><a href="#news">NEWS</a></li>
        <li><a href="#company">COMPANY</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



<?php if (is_front_page()): ?>    <div id="mainVisual" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active" id="mainVisualImag01"></div>
      <div class="item" id="mainVisualImag02"></div>
      <div class="item" id="mainVisualImag03"></div>
    </div>

  </div>

    <div class="container">
      <div class="row">
        <h1 id="logo"><img src="_asset/img/logo.png" alt="DRONE SOLUTIONS"></h1>
        <p class="copy"><?php bloginfo( 'description' ); ?></p>
        <p class="btn_contact-main"><a href="#contact" class="btn btn-lg btn_contact anchor">お問い合せ</a></p>
      </div>
    </div>
  </header><?php else : ?>ほげ<?php endif; ?>
