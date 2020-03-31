<?php get_header('new'); ?>
  <section id="main" class="wrapper">
      <div class="container">
        <?php
        if(have_posts()):
          while(have_posts()):
            the_post();
            the_title('<h1>','</h1>');
            the_content();
          endwhile;
        endif;
        ?>
      </div>
  </section>
<?php get_footer(); ?>