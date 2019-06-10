<article class="post <?php if(has_post_thumbnail()){echo 'has-post-thumbnail';} ?>">
  <!--  This section contains the post title-->
  <section class='post-title-meta'>
          <?php if(is_singular('post')){ ?>
          <h2><?php the_title(); ?></h2> <?php }else{ ?>
          <h2> <a href='<?php the_permalink(); ?>'> <?php the_title(); ?> </a></h2><?php } ?>


  <!--  Tästä alkaa post metadata-->


    <p class='bloginfo'><?php the_time('d F Y'); ?> | by <a href='<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>'><?php the_author(); ?></a> | Posted in  <?php
        $categories = get_the_category();
        $separator = ', ';
        $output = '';

        if($categories){
          foreach($categories as $category){
            $output .= "<a href='" . get_category_link($category) ."'>" . $category->cat_name . "</a>" . $separator;
          }
          echo trim($output, $separator);
        } ?>
    </p>

  </section><!--  Tähän päättyy post metadata-->
  <!-- Section for featured image -->
  <section class='featured-image'>
    <?php the_post_thumbnail('thumbnail'); ?>
  </section>
  <!--  Section for content or excerpt-->
  <section class='post-content'>
    <!--  Search results show only excerpts-->
    <?php if(is_search() OR is_archive()){
        echo get_the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>">Read More &raquo</a>
    <?php }elseif($post->post_excerpt OR !is_singular('post')){ ?>
        <p>
              <?php  echo get_the_excerpt(); ?>
              <a href="<?php the_permalink(); ?>">Read More &raquo</a>
        </p>

      <?php }else{
        the_content();
      }
    ?>

  </section>



</article>
