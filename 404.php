<?php get_header(); ?>

<div class="row">

  <div class="col-xs-12 col-sm-8">

<header class="page-header">
<h1 class="display-4">404</h1>
<p class="lead">Sorry, page not found!</p>
</header>

<p>It looks like nothing was found at this location. Maybe try one of the links below or a search?</p>
<?php get_search_form(); ?>

<?php the_widget('WP_Widget_Recent_Posts'); ?>

</div>

<div class="col-xs-12 col-sm-4">

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
