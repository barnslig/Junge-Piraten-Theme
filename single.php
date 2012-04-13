<?php
	get_header();

	showPosts();

	if(comments_open()) {
		comments_template();
	}

	get_sidebar();

	get_footer();
?>