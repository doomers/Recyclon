<?php get_header(); ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
   <!-- Indicators -->
   <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1" class=""></li>
      <li data-target="#myCarousel" data-slide-to="2" class=""></li>
      <li data-target="#myCarousel" data-slide-to="3" class=""></li>
   </ol>
   <div class="carousel-inner" role="listbox">
      <div class="item active">
         <img class="first-slide" src="<?php bloginfo('template_directory'); ?>/images/banner_1.jpg">
         <div class="container">
         </div>
      </div>
      <div class="item">
         <img class="" src="<?php bloginfo('template_directory'); ?>/images/banner_2.jpg">
         <div class="container">
         </div>
      </div>
      <div class="item">
         <img class="" src="<?php bloginfo('template_directory'); ?>/images/banner_3.jpg">
         <div class="container">
         </div>
      </div>
      <div class="item">
         <img class="last-slide" src="<?php bloginfo('template_directory'); ?>/images/banner_4.jpg">
         <div class="container">
         </div>
      </div>
   </div>
   <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
   <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
   <span class="sr-only">Previous</span>
   </a>
   <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
   <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
   <span class="sr-only">Next</span>
   </a>
</div>




<!--================================================================
||
|| MAIN CONTENT LOOP GOES HERE
||
==================================================================-->
<?php if(have_posts()) : ?>
   <?php while(have_posts()) : the_post(); ?>

      <div class="container">
         <div class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1 article">
            
               <h1 class="jumbo-title"><?php the_title();?></h1>

               <!-- main content -->
               <?php the_content();?>

            </div><!-- /col-xs-12 col-md-10 col-md-offset-1 article -->
         </div><!-- /.row -->
      </div><!-- /.container -->
      
   <?php endwhile; ?>


   <div class="navigation">
      <!--navigation links-->
      <?php posts_nav_link(); ?>
   </div>
   <?php else : ?>
   <div class="post">
   <!--no content found message-->
      <h2>
         <?php _e('Not Found'); ?>
      </h2>
   </div>
<?php endif; ?>
<!--================================================================
|| END MAIN CONTENT LOOP
==================================================================-->







<?php get_footer(); ?>