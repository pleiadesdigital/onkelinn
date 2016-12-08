<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			if (have_posts()) { 
				if (is_home() && ! is_front_page()) { ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
				<?php } //(is_home() && ! is_front_page())
				// THE CONTENT
				while (have_posts()) : the_post();
					get_template_part('template-parts/content', get_post_format());
				endwhile;
					the_posts_navigation();
				} else {
					get_template_part('template-parts/content', 'none');
				} //if (have_posts())
			?>

		</main><!-- class="site-main" -->

	</div><!-- class="content-area" -->

	<!-- SIDEBAR -->
	<div id="sidebar-primary" class="sidebar-primary col">
		<?php get_sidebar(); ?>
	</div><!-- class="sidebar-main" -->

<?php get_footer(); ?>
