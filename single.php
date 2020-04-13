<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Minimalist
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<!-- single -->
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
<!-- /single -->
<?php 
get_sidebar();
get_footer();
