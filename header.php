<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Basic Theme</title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(array('basic-class', 'my-class')); ?> >
<div class='container'>
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
