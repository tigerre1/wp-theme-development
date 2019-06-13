<?php wp_footer();

if(!is_singular('post') and !is_singular('ohjaaja') and !is_singular('page') and !is_archive()){
  echo '</div>'; //End of content total
}?>



  <footer class='site-footer'>
    <p><?php bloginfo('name'); ?> - &copy <?php echo the_date('Y'); ?> </p>

  </footer>
  <nav class='footer-nav'>
    <?php
    wp_nav_menu(array(
      'theme_location'=> 'footer_menu'
    ));
     ?>
  </nav>
</div> <!-- End of Container  -->

</body>
</html>
