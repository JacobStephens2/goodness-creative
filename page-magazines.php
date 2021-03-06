<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();
?>

<div class="bar">
	<div class="sample-frame" style="padding-left: 0px;">
		<div class="image-position">
			<a href="/wheaton-academy"><img src="/wp-content/uploads/2020/11/wheaton-academy-cover.png" height="211" /></a>
			<a href="/chester-county-life"><img src="/wp-content/uploads/2020/12/ccl-so20-cover-910x1024.png" height="211" /></a>
		</div>
	</div>
</div>


<main id="primary" class="site-main">
	<div class="container">
		<?php
		while ( have_posts() ) {
			the_post();
			get_template_part( 'template-parts/content/entry', get_post_type() );
		}
		?>
	</div>
</main>
