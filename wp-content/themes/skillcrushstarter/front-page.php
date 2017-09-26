<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
		<div class="content">
			<?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<div class="social-btns">  <!-- populate or remove as many of these as you want -->
					<a href="https://linkedin.com/in/erinconeal" class="soc-icon ln"></a>
					<a href="https://github.com/erinconeal" class="soc-icon gh"></a>
				</div>
				<a href="<?php echo site_url('/portfolio/'); ?>" class="btn">View My Portfolio</a>
			<?php endwhile; ?>
		</div>
	</div>
	<!-- Photo by Luca Zanon on Unsplash -->
</section>
