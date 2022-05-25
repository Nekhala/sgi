<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Richard. - Easy Onepage Personal Template">
    <meta name="author" content="Paul">
    
    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>

    <title>SGI Paraply hjemmeside</title>
  </head>
<body>
   
   <!-- Loader -->
   <div class="loader">
    <div class="spinner"><div class="double-bounce1"></div><div class="double-bounce2"></div></div>
   </div>
  
    <!-- Click capture -->
   <div class="click-capture d-lg-none"></div>

    <!-- Navbar -->  
    <nav id="scrollspy" class="navbar navbar-desctop">
        
      <div class="d-flex position-relative w-100">

        <!-- Brand-->
        <a class="navbar-brand" href="#">SGI</a>
          <ul class="navbar-nav-desctop mr-auto d-none d-lg-block">
            <?php $sportLoop = new WP_Query(array("post_type" => "sport", "posts_per_page" => -1)) ?>
            <?php while($sportLoop->have_posts()): $sportLoop->the_post() ?>
              <li><a class="nav-link" href="#<?php the_field("id") ?>"><?php the_title() ?></a></li>
              <?php endwhile ?>
          </ul>

        <!-- Toggler -->
        <button class="toggler d-lg-none ml-auto">
          <span class="toggler-icon"></span>
          <span class="toggler-icon"></span>
          <span class="toggler-icon"></span>
        </button>
      </div>
    </nav>


    <!-- Navbar Mobile -->  
    <nav id="navbar-mobile" class="navbar navbar-mobile d-lg-none">
      <ion-icon class="close" name="close-outline"></ion-icon>

      <ul class="navbar-nav navbar-nav-mobile">

        <?php $sportLoop = new WP_Query(array("post_type" => "sport", "posts_per_page" => -1)) ?>
        <?php while($sportLoop->have_posts()): $sportLoop->the_post() ?>
          <li><a class="nav-link" href="#<?php the_field("id") ?>"><?php the_title() ?></a></li>
        <?php endwhile ?>
       </ul>
       <div class="navbar-mobile-footer">
        <p>© 2022 Hussein Nekhala. All Rights Reserved.</p>
       </div>
    </nav>
