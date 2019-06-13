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
 endif;?>
<!--  Ohjaajakortit-->
<div class="grid-container">
 <?php
  $args = array(
    'post_type' => 'ohjaaja',
    'posts_per_page' => 10,

  );
  $ohjaajat = new WP_Query($args);

  while($ohjaajat->have_posts()):
    $ohjaajat->the_post();?>


      <div class="card">
        <figure id='card-image'>
          <img src="https://picsum.photos/800/800?=1" alt="">
        </figure>
        <h2 id='card-title'><?php the_title(); ?></h2>
        <p id="card-text"><?php the_excerpt(); ?></p>
        <a class="card-button" href="<?php the_permalink(); ?>">Lue Lisää</a>
      </div>



<?php  endwhile;  ?>
    </div>

<?php get_footer();

 ?>
