<?php
	/**
	 *	The Template for displaying all single posts.
	 *
	 *	@author Leonard Techel
	 *	@license https://creativecommons.org/licenses/by-sa/3.0/ (cc) by-sa 3.0
	 *	@package WordPress
	 *	@subpackage JupiTheme
	 */

	get_header();

	showPosts();

	if(comments_open()) {
		comments_template();
	}

	get_sidebar();

	get_footer();
?>