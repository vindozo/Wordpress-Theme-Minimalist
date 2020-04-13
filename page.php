<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Minimalist
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<!-- page -->
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
<!-- /page -->
<?php 
get_sidebar();    
get_footer();
