<?php 
get_header();
?>

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

               <h1><?php the_title();?></h1>

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