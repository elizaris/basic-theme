<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Basic Theme</title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(array('basic-class', 'my-class')); ?> >

  <?php wp_nav_menu(array('theme_location'=='primary')); ?>
