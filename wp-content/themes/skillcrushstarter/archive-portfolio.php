<?php
/**
 * The template for displaying portfolio
 *
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
      <?php query_posts('posts_per_page=10&post_type=portfolio&orderby=date&order=ASC'); ?>
			<?php while ( have_posts() ) : the_post();
			$technologies = get_field('technologies');
			$date = get_field('date');
      $explanation = get_field('explanation');
      $image_1 = get_field("image_1");
      $size = "medium";
      ?>

      <article class="portfolio-archive-container">
        <aside class="portfolio-archive-sidebar">
          <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p class="bold"><?php echo $date; ?></p>
					<p class="lighter gray">Technologies: <?php echo $technologies; ?></p>
          <p class="lighter"><?php echo $explanation; ?></p>

          <h6 class="bold"><a class="blue-text" href="<?php the_permalink(); ?>">View Project &rsaquo;</a></h6>
        </aside>

        <div class="portfolio-archive-images">
          <a href="<?php the_permalink(); ?>">
          <?php if($image_1) {
            echo wp_get_attachment_image( $image_1, $size );
          } ?>
          </a>
        </div>
      </article>

			<?php endwhile; // end of the loop. ?>
      <?php wp_reset_query(); ?>
		</div><!-- #content -->
	</div><!-- #primary -->

	<div class="content">
		<a href="<?php echo site_url('/contact/'); ?>" class="btn" id="nf-field-4">Contact Me</a>
	</div>

<?php get_footer(); ?>
