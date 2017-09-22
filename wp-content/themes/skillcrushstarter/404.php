<?php
/**
 * The template for displaying the 404 page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>

<div class="services flex-box">
  <div class="map-img"></div>
  <div class="whoops">
    <h1 class="blue-text">Whoops, took a wrong turn...</h1>
    <p>Sorry, this page no longer exists, never existed or has been moved.
      <br>
      <br>
    Feel free to take a look at my <a class="blue-text" href="<?php echo home_url(); ?>/blog">blog</a> or some of my featured <a class="blue-text" href="<?php echo home_url(); ?>/portfolio">work.</a></p>
  </div>
</div>


<?php get_footer(); ?>
