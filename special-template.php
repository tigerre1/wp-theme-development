<?php
/*
Template Name: Special Template
*/
get_header();

  if(have_posts()):
    while(have_posts()):the_post(); ?>
    <?php if(is_page(7)){
      echo '<h1>Special template</h1>';
    } ?>

    <article class="post">

        <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
    </article>
  <?php  endwhile;

  else:
   echo '<p>No content found<p>';
 endif;




get_footer();

 ?>
