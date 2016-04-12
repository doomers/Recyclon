<!--================================================================
||
|| Latest Posts LOOP GOES HERE
||
==================================================================-->
<?php if(have_posts()) : ?>
  <?php $my_query = new WP_Query('showposts=10');

  while ($my_query->have_posts()) : $my_query->the_post();

    $do_not_duplicate = $post->ID; ?>
    <div class="post" id="post-<?php the_ID(); ?>">

      <div class="newsitem">
        <?php the_post_thumbnail( 'thumbnail' ); ?>
        <h2><?php the_title(); ?></h2>
        <a href="?p=<?php the_ID(); ?>">Read Article...</a>

      </div>
    </div>
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
|| END Latest Posts LOOP
==================================================================-->