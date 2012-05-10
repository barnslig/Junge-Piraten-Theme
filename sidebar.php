<?php
	/**
	 *	The Sidebar is containing the widgets and some static foo.
	 *
	 *	@author Leonard Techel
	 *	@license https://creativecommons.org/licenses/by-sa/3.0/ (cc) by-sa 3.0
	 *	@package WordPress
	 *	@subpackage JupiTheme
	 */
?>
			</section>
			<aside>
				<section class="box" style="text-align:center;">
					<a class="dotted" href="https://anmelden.junge-piraten.de/">Junger Pirat werden</a>
					<a class="dotted" href="//wiki.junge-piraten.de/wiki/Spezial:Dateipfad/Antrag_Foerdermitglied.pdf">Fördermitglied werden</a>
				</section>
				<section class="box">
					<h2>Suchen</h2>
					<form action="<?php bloginfo('url'); ?>" method="get" id="search">
						<input type="text" name="s" value="<?php the_search_query(); ?>" placeholder="Suchbegriff" />
						<input type="submit" value="Los" />
					</form>
				</section>
				<section class="box" style="padding-bottom:0px;">
					<h2>Jupis im Netz</h2>
					<ul id="socials">
						<li>
							<a href="<?php bloginfo('rss2_url'); ?>">
								<img src="<?php bloginfo('template_directory'); ?>/images/socials/rss.png" alt="RSS Feed" title="RSS Feed" />
							</a>
						</li>
						<li>
							<a href="https://twitter.com/JungePiraten">
								<img src="<?php bloginfo('template_directory'); ?>/images/socials/twitter.png" alt="Twitter" title="Twitter" />
							</a>
						</li>
						<li>
							<a href="https://secure.flickr.com/photos/jungepiraten/">
								<img src="<?php bloginfo('template_directory'); ?>/images/socials/flickr.png" alt="Flickr" title="Flickr" />
							</a>
						</li>
						<li>
							<a href="https://www.facebook.com/jungePiraten">
								<img src="<?php bloginfo('template_directory'); ?>/images/socials/facebook.png" alt="Facebook" title="Facebook" />
							</a>
						</li>
						<li>
							<a href="https://plus.google.com/111687817103191810370">
								<img src="<?php bloginfo('template_directory'); ?>/images/socials/googleplus.png" alt="Google+" title="Google+" />
							</a>
						</li>
					</ul>
				</section>
				<?php
					if(!function_exists('dynamic_sidebar') || !dynamic_sidebar()) {
					}
				?>
			</aside>