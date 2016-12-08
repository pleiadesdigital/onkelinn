<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<h1>SINGLE Custom Post Type for Services</h1>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php the_post_thumbnail('large'); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>

			<?php endwhile; endif; ?>
			<hr>
			
			<?php previous_post_link(); ?><br>
			<a href="<?php bloginfo('url') ?>/servicios">Volver a Servicios</a><br>
			<?php next_post_link(); ?><br>


		</main><!-- class="site-main" -->

	</div><!-- class="content-area" -->

	<!-- SIDEBAR -->
	<div id="sidebar-primary" class="sidebar-primary col">
		<?php get_sidebar(); ?>
	</div><!-- class="sidebar-main" -->

<?php get_footer(); ?>
