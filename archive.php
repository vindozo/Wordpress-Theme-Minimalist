<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Minimalist
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<!-- archive -->
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
<!-- /archive -->
<?php 
get_sidebar();
get_footer();
