<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
<h1><?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url(get_permalink()) ),'</a></h1>'); ?></h1>
<small>Posted on: <?php the_time('F j,Y');?>, in <?php the_category(' '); ?> || <?php the_tags(); ?> || <?php edit_post_link(); ?></small>
</header>

<?php if( has_post_thumbnail() ): ?>

<div class="col-xs-12 col-sm-4">
<?php the_post_thumbnail(); ?>
</div>
<div class="col-xs-12 col-sm-8">
<p><?php the_excerpt(); ?></p>
<hr>

</div>
<?php else: ?>

  <div class="col-xs-12">
  <p><?php the_excerpt(); ?></p>
  <hr>
  </div>

<?php endif; ?>


</article>
