<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if (have_posts()) : ?>
			<header class="page-header">
				<h1 class="page-title"><?php printf(esc_html__('Search Results for: %s', 'pleiades17'), '<span>' . get_search_query() . '</span>'); ?></h1>
			</header><!-- class="page-header" -->

			<!-- CONTENT -->
			<?php
			while (have_posts()) : the_post();
				get_template_part('template-parts/content', 'search');
			endwhile;
			the_posts_navigation();
		else :
			get_template_part('template-parts/content', 'none');
		endif; ?>

		</main><!-- id="main" class="site-main" -->
	</div><!-- id="primary" class="content-area" -->

		<!-- SIDEBAR -->
		<div id="sidebar-primary" class="sidebar-primary col">
			<?php get_sidebar(); ?>
		</div><!-- class="sidebar-main" -->

<?php get_footer(); ?>
