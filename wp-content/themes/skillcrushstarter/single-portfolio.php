<?php
/**
 * The template for displaying individual portfolio projects
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
        $size = 'full';
        $link = get_field('site_link');
        $image_1 = get_field('image_1');
        $image_2 = get_field('image_2');
        $image_3 = get_field('image_3');
				$image_4 = get_field('image_4');
				$image_5 = get_field('image_5');
				$image_6 = get_field('image_6');
      ?>

        <article class="portfolio-archive-container">
          <aside class="portfolio-archive-sidebar">
            <h2 class="title"><?php the_title(); ?></h2>

            <?php the_content(); ?>

            <h6 class="bold"><a class="blue-text" href="<?php echo $link; ?>">Visit Live Site &rsaquo;</a></h6>
          </aside>

          <div class="portfolio-archive-images">
            <?php if($image_1) {
              echo wp_get_attachment_image( $image_1, $size );
            } ?>
            <?php if($image_2) {
              echo wp_get_attachment_image( $image_2, $size );
            } ?>
            <?php if($image_3) {
              echo wp_get_attachment_image( $image_3, $size );
            } ?>
						<?php if($image_4) {
              echo wp_get_attachment_image( $image_4, $size );
            } ?>
						<?php if($image_5) {
              echo wp_get_attachment_image( $image_5, $size );
            } ?>
						<?php if($image_6) {
              echo wp_get_attachment_image( $image_6, $size );
            } ?>
          </div>

        </article>
			<?php endwhile; ?>
		</div><!-- #content -->
	</div><!-- #primary -->

	<div class="back-to-work">
		<a href="<?php echo home_url(); ?>/case-studies"><p><span class="green-text">&#x2190;</span> Back to Work</p></a>
	</div>
<?php get_footer(); ?>
