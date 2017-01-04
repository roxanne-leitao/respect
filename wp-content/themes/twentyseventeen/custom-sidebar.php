<div id="side-bar">
	<?php 
		/* ********* BUTTONS ********* */
		?>
		<div class="buttons">
			<a class="membership button sidebar" alt="membership page" href="<?php echo bloginfo('url'); ?>/membership"><img alt="padlock" src="<?php echo bloginfo('template_directory'); ?>/assets/images/padlock.svg" />Become a member</a>
			<a class="donation button sidebar" alt="donation page" href="<?php echo bloginfo('url'); ?>/donations"><img alt="padlock" src="<?php echo bloginfo('template_directory'); ?>/assets/images/donate.svg" />Donate</a>
		</div>
		<h3>Training & Events</h3>
		<?php
		/* ********* EVENTS ********* */
		// Retrieve the next 5 upcoming events
		$events = tribe_get_events( array(
		'posts_per_page' => 3, 
		) );
	
		// Loop through the events, displaying the title
		// and content for each
		foreach ( $events as $event ) {
			$cat = tribe_get_event_cat_slugs($event);
			$venue = tribe_get_venue($event);
			$day = 	tribe_get_start_date( $event, false, $format = 'd ' );
			$month = 	tribe_get_start_date( $event, false, $format = 'F ' );
			$year = 	tribe_get_start_date( $event, false, $format = 'Y' );
			$url = tribe_get_event_link($event);		
			echo "<div class=\"event sidebar " . $cat[0] . "\"><a href=\"" . $url . "\" alt=\"full event\"><date class=\"" . $cat[0] . "\"><span class=\"day\">" . $day .  "</span><span class=\"month\">" . $month . "</span><span class=\"year\">" . $year . "</span></date><h4>" . $event->post_title . "</h4><address>". $venue . "</address></a></div>";		
					
		}
		
	?>
</div>