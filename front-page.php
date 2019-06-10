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

    <?php

    $birdPosts = new WP_Query('cat=9&posts_per_page=2');

    if($birdPosts->have_posts()):
          while($birdPosts->have_posts()): $birdPosts->the_post();?>

          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <?php  endwhile;

        else:
          //fallback

      endif;
      wp_reset_postdata(); ?>
  </div> <!-- end of $birdPosts -->

  <div class="politics-posts">

  <?php $politicsPosts = new WP_Query('cat=6&posts_per_page=2');

  if($politicsPosts->have_posts()):
        while($politicsPosts->have_posts()): $politicsPosts->the_post();?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

      <?php  endwhile;

      else:
        //fallback

    endif;
    wp_reset_postdata(); ?>
  </div>

</div>

<?php get_footer();

 ?>
