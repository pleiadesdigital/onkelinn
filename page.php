<?php get_header(); ?>

	<div id="primary" class="content-area">

		<!-- CONTENT -->
		<main id="main" class="site-main" role="main">
			<?php
			while (have_posts()) : the_post();
				get_template_part('template-parts/content', 'page');
				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;
			endwhile;
			?>
		</main><!-- class="site-main" -->

	</div><!-- class="content-area" -->

	<!-- SIDEBAR -->
	<div id="sidebar-primary" class="sidebar-primary col">
		<?php get_sidebar(); ?>
	</div><!-- class="sidebar-main" -->

<?php get_footer(); ?>
