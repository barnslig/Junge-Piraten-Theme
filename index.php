<?php
	get_header();

	if(!is_paged()) {
?>

<article id="slides-container">
	<ul id="slides">
		<li style="background:url('<?php bloginfo("template_directory"); ?>/images/slides/0.png') no-repeat;"><span>Unser Leitbild</span></li>
		<li style="background:url('<?php bloginfo("template_directory"); ?>/images/slides/1.png') no-repeat;"><span>BMV 2012.1</span></li>
		<li style="background:url('<?php bloginfo("template_directory"); ?>/images/slides/2.png') no-repeat;"><span>Jupi-Camp 2011</span></li>
		<li style="background:url('<?php bloginfo("template_directory"); ?>/images/slides/3.png') no-repeat;"><span>Neuer Stammtisch in Thüringen</span></li>
	</ul>
</article>
<?php
	}

	showPosts();

	echo "<section id=\"paged-nav\">";
		posts_nav_link();
	echo "</section>";

	get_sidebar();

	get_footer();
?>