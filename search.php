<?php
	/**
	 *	The template for displaying Search Results pages.
	 *
	 *	@author Leonard Techel
	 *	@license https://creativecommons.org/licenses/by-sa/3.0/ (cc) by-sa 3.0
	 *	@package WordPress
	 *	@subpackage JupiTheme
	 */

	get_header();

	if(have_posts()) {
		echo "<article>";
		$comments = $wp_query->found_posts;
		if($comments == 1) {
			echo "<h2 class=\"this\">Ein Suchergebnis.</h2>";
		} else {
			echo "<h2 class=\"this\">$comments Suchergebnisse.</h2>";
		}
		echo "<div style=\"height:15px;\"></div>";
		echo "</article>";

		showPosts();
	} else {
		echo "<article>";
		echo "<h2 class=\"this\">Hm, dazu gibt es noch keine Seite :(</h2>";
		echo "<p><img src=\"http://ponyfac.es/sites/pony/faces/d834a4c4.png\" alt=\"\" /></p>";
		echo "</article>";
	}

	get_sidebar();

	get_footer();
?>