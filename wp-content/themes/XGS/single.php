<?php get_header(); ?>

<div id="content">
	<div id="main">

		<div id="header-image">
			<img src="<?php bloginfo('template_directory'); ?>/img/masthead1.jpg" id="masthead-image" />
		</div>

		<div class="body-text">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		<?php endwhile; ?>

		</div>

	</div>

	<div id="sidebar">
		<?php get_sidebar('blog'); ?>
	</div>

</div>


<?php get_footer(); ?>