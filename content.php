<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
<h1><?php
if( is_singular() ){
  the_title(); 
} else{
  the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url(get_permalink()) ),'</a></h1>');
}
?></h1>
<small>Posted on: <?php the_time('F j,Y');?>, in <?php the_category(' '); ?> || <?php the_tags(); ?> || <?php edit_post_link(); ?></small>
</header>

<?php if( has_post_thumbnail() ): ?>

<div class="col-xs-12 col-sm-4">
<?php the_post_thumbnail(); ?>
</div>
<div class="col-xs-12 col-sm-8">
<p><?php the_content(); ?></p>
<hr>


<?php
    if( comments_open() ) {
        comments_template();
      } else {
        echo '<h5 class="text-center">Sorry, Comments are closed!</h5';
      }
 ?>

</div>
<?php else: ?>

  <div class="col-xs-12">
  <p><?php the_content(); ?></p>
  <hr>




  <?php
      if( comments_open() ) {
          comments_template();
        } else {
          echo '<h5 class="text-center">Sorry, Comments are closed!</h5';
        }
   ?>
  </div>

<?php endif; ?>


</article>
