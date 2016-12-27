<?php
/**
 * Template Name: Single Text Page
 */

get_header(); ?>
<div id="side-bar">
	<?php 
		/* ********* BUTTONS ********* */
		?>
		<div class="buttons">
			<a alt="membership page" href="<?php echo bloginfo('url'); ?>/membership"><img alt="padlock" src="<?php echo bloginfo('url'); ?>/assets/images/padlock.svg" />Become a member</a>
		</div>
		<?php
		/* ********* EVENTS ********* */
		// Retrieve the next 5 upcoming events
		$events = tribe_get_events( array(
		'posts_per_page' => 3,
		) );
 
		// Loop through the events, displaying the title
		// and content for each
		foreach ( $events as $event ) {
			echo "<date>" . tribe_get_start_date( $post ) . "</date><h4>$event->post_title</h4>";				
		}
	?>
</div>

<div class="wrap text single-page <?php echo "hello world!"; ?>">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->


<?php get_footer();
