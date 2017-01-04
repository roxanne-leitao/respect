<?php
/**
 * Template Name: Single Text Page
 */

get_header(); ?>
<?php get_template_part( 'custom-sidebar', 'page' ); ?>

<div class="wrap text single-page <?php echo "hello world!"; ?>">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="breadcrumb"><?php custom_breadcrumbs(); ?></div>
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			<div class="call-out-box">
				<?php $box = get_field('contact_box'); if ($box){ echo $box; }?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->


<?php get_footer();
