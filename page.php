<?php get_header(); ?>

<!--Beginning of the wrapper-->
<div class="wrapper">

<!--Beginning of the section-->
  <section>
    <!--Begin Loop-->
    <?php
      if(have_posts()){
        while(have_posts()){
          the_post();?>

          <h2><?php the_title(); ?></h2>

          <?php the_post_thumbnail();?>

          <?php the_content(); ?>

          <?php
        }//end of the while loop
      }//end of the if statement
    ?>
    <!-- end loop -->
  </section>

  <?php get_sidebar(); ?>

</div><!--End wrapper-->

<?php get_footer();?>
