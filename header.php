<!doctype html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo('charset'); ?>" >
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name ="description" content="<?php bloginfo('description'); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(array('basic-class', 'my-class')); ?> >
  <div class="container">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php wp_nav_menu(array(
      'theme_location' => 'primary',
      'container' => false,
      'menu_class' => 'navbar-nav',
    )); ?>
  </div>
</nav>



<div class="row">
  <div class="col-xs-12">
<header class="py-3">
  <div class="row flex-nowrap justify-content-between align-items-center">

  <?php  if( has_header_image() ): ?>

<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" class="img-fluid" alt="" />

<?php else: ?>

<h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>

<?php endif; ?>

</div>
</header>
</div> <!--.col-xs-12-->
</div> <!--.row-->
