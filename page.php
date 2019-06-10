<?php

get_header();

  if(have_posts()):
    while(have_posts()):the_post(); ?>
    <?php //if(is_page(7)){
      //echo '<h1>This is conditional content for the page with</h1>';
    //} ?>

    <article class = "post">

      <!--  The following block is for children-->

      <?php if(has_children() OR $post->post_parent>0){ ?>

      <nav class='child-nav'>

        <span class='parent-link'><a href='<?php echo get_the_permalink(get_top_ancestor_id()); ?>'><?php echo get_the_title(get_top_ancestor_id()); ?></a></span>

          <?php $args = array(
            'child_of' => get_top_ancestor_id(),
            'title_li' => null
          ); ?>
        <ul class='children'>
          <?php wp_list_pages($args); ?>
        </ul>

      </nav>
      <?php } ?>
        <h1 class='page-title'><?php the_title(); ?></h1>
              <?php the_content(); ?>
    </article>
  <?php  endwhile;

  else:
   echo '<p>No content found<p>';
 endif;




get_footer();

 ?>
