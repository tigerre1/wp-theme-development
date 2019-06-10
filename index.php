<?php

get_header();?>
  <div class= 'content-total'>
    <div class='main-content'>

    <?php if(have_posts()):
      while(have_posts()):the_post();

      get_template_part('content',get_post_format());

      endwhile;

    else:
     echo '<p>No content found<p>';
   endif; ?>

    </div>

    <div class="sidebar">

      <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

  		<?php dynamic_sidebar( 'sidebar-1' ); ?>

      <?php endif; ?>
    </div>

<?php get_footer(); ?>
