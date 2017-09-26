<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */
?>


		</div><!-- #main -->

		<footer id="colophon" class="site-footer clearfix" role="contentinfo">
			<div class="site-info">
				<div class="site-description">
					<p><?php bloginfo('description'); ?></p>
					<p><?php bloginfo('title'); ?></p>
				</div>

				<div class="social-btns">
					<a href="https://linkedin.com/in/erinconeal" class="soc-icon ln"></a>
					<a href="https://github.com/erinconeal" class="soc-icon gh"></a>
				</div>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>

</body>
</html>
