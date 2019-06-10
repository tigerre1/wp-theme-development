<article class="post aside">


      <h2> <a href='<?php the_permalink(); ?>'> <?php the_title(); ?> </a></h2>



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
        }
     ?>

    </p>
    <!--  Tähän päättyy post metadata-->

      <?php the_content();?>



</article>
