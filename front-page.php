<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Minimalist
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<!-- front-page -->
<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
                have_posts();
                the_post();
                the_content();
			?>
		</main>
	</div>
</div>
<!-- /front-page -->
<?php 
get_sidebar();
get_footer();