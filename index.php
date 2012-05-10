<?php
	/**
	 *	The main template file.
	 *
	 *	@author Leonard Techel
	 *	@license https://creativecommons.org/licenses/by-sa/3.0/ (cc) by-sa 3.0
	 *	@package WordPress
	 *	@subpackage JupiTheme
	 */
	
	get_header();

	if(!is_paged()) {
?>

<article id="slides-container">
	<ul id="slides">
		<li style="background:url('<?php bloginfo("template_directory"); ?>/images/slides/0.png') no-repeat;"><a href=""><span>Unser Leitbild</span></a></li>
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
