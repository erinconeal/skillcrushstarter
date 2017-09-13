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
        $services = get_field('services');
        $client = get_field('client');
        $link = get_field('site_link');
        $image_1 = get_field('image_1');
        $image_2 = get_field('image_2');
        $image_3 = get_field('image_3');
      ?>

        <article class="case-study">
          <aside class="case-study-sidebar">
            <p class="title"><?php the_title(); ?></p>
            <p class="lighter gray"><?php echo $services; ?></p>
            <p class="lighter">Client: <?php echo $client; ?></p>

            <?php the_content(); ?>

            <p class="bold green-text"><a href="<?php echo $link; ?>">Visit Live Site &rsaquo;</a></p>
          </aside>

          <div class="case-study-images">
            <?php if($image_1) {
              echo wp_get_attachment_image( $image_1, $size );
            } ?>
            <?php if($image_2) {
              echo wp_get_attachment_image( $image_2, $size );
            } ?>
            <?php if($image_3) {
              echo wp_get_attachment_image( $image_3, $size );
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
