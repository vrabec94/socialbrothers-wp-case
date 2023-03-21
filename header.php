<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <?php

  do_action('after_body');

  get_template_part('partials/header');
