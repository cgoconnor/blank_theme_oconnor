<?php
  /* Template name: Search Page */
?>

<?php get_header(); ?>

<div class="wrapper">
  <?php if(have_posts()); ?>
  <div id="search-header">
    <h2><?php print(_('Search results for: %s'), '<span>' . get_search_query() . '</span>'); ?></h2>
      <?php
      while(have_posts()) : the_post(); ?>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <h4><?php the_time('F j, Y'); ?></h4>
        <?php the_excerpt();
      endwhile;
      else: ?>
      <h2>Nothing found</h2>
      <p>Sorry, but nothing matched your search criteria. Please try again with a different search term.</p>
  </div>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
