<?php
	/**
	 *	Here are the function used by the theme and some options for wordpress.
	 *
	 *	@author Leonard Techel
	 *	@license https://creativecommons.org/licenses/by-sa/3.0/ (cc) by-sa 3.0
	 *	@package WordPress
	 *	@subpackage JupiTheme
	 */

	register_sidebar(array(
		'before_widget'	=> '<section class="box">',
		'after_widget'	=> '</section>',
		'before_title'	=> '<h2>',
		'after_title'	=> '</h2>'
	));

	register_nav_menus(
		array(
			'main_nav' => 'The Main Menu',
		)
	);

	function showPosts() {
		if(have_posts()) {
			while(have_posts()) {
				the_post();

				echo "<article>";
				if(is_single() || is_page()) {
					echo "<h2 class=\"this\">";
				} else {
					echo "<h2>";
				}
					echo "<a href=\"";
						the_permalink();
					echo "\">";
							the_title();
					echo "</a>";
				echo "</h2>";
				$subtitle = get_post_custom_values('subtitle');
				if(count($subtitle) != 0) {
					echo "<h3>{$subtitle[0]}</h3>";
				}
				echo "<small>";
						the_time('d.m.y');
						echo " — ";
						echo get_the_author();
						if(comments_open()) {
							echo " — ";
							echo "<a href=\"";
								comments_link();
							echo "\">";
								comments_number('keine Kommentare', 'ein Kommentar', '% Kommentare');
							echo "</a>";
						}
				echo "</small>";
						the_content();
				echo "</article>";
			}
		}
	}
?>