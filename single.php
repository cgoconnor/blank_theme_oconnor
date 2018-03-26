<?php get_header(); ?>

<!--Beginning of the section-->
<section>

  <!--Beginning of the wrapper-->
  <div class="wrapper">

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

  </div><!--End wrapper-->

</section><!--End section-->

<?php get_footer();?>
