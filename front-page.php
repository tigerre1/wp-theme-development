<?php

get_header();

  if(have_posts()):
    while(have_posts()):the_post(); ?>


    <article class = "post">

        <h1 class='page-title'><?php the_title(); ?></h1>
                               <?php the_content(); ?>
    </article>
  <?php  endwhile;

  else:
   echo '<p>No content found<p>';
 endif; ?>

<!--New WP_Query loop begins -->
<div class="featured-posts">

<div class="bird-posts">


<div class="grid-container">
  <?php  $birdPosts = new WP_Query('cat=197&posts_per_page=-1');

    if($birdPosts->have_posts()):
          while($birdPosts->have_posts()): $birdPosts->the_post();?>






        <?php  endwhile;?>



<?php
else: ?>
          <h1>Nothing to Declare</h1>

    <?php  endif; ?>
      </div>
    <?php   wp_reset_postdata(); ?>
  </div> <!-- end of $birdPosts -->



</div>

<?php get_footer();

 ?>
