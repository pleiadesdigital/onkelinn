<?php 
	/*Template Name: Servicios template*/

?>

<?php get_header(); ?>

	<div id="primary" class="content-area">

		<!-- CONTENT -->
		<main id="main" class="site-main" role="main">
			<h1>Custom Post Type: SERVICIOS</h1>
			<?php 
				$args = array(
					'post_type'			=> 'servicios',
				);
				$query = new WP_Query($args);
			?>
			
			<ul>
				<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
				<li>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<div><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
					<p><?php the_excerpt(); ?></p>

				</li>
			<?php endwhile; endif; wp_reset_postdata(); ?>
			</ul>		

		</main><!-- class="site-main" -->

	</div><!-- class="content-area" -->

<?php get_footer(); ?>
