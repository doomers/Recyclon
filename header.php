<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
      <!-- Bootstrap -->
      <link href="<?php bloginfo('template_directory'); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <!-- Google Fonts -->
      <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:100,300,400,700,100italic,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
      
      <link href="<?php bloginfo('template_directory'); ?>/css/carousel.css" rel="stylesheet">
      <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body id="inside">
   <nav class="navbar navbar-fixed-top navbar-inverse" id="main-nav">
      <div class="container">
         <div class="navbar-header">
            <a href="#" class="logo"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="" style="height:50px;"></a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
         </div>
         <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
               <li><a href="#">Sample Link</a></li>
               <li><a href="#">Sample Link</a></li>
               <li><a href="#">Sample Link</a></li>
               <li><a href="#">Sample Link</a></li>
               <li><a href="#">Sample Link</a></li>
            </ul>
         </div>
      <!--/.nav-collapse -->
      </div>
   </nav>