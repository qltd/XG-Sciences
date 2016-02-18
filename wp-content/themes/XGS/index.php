<?php get_header(); ?>

<div id="content">
	<div id="main">

		<div id="header-image">
			<img src="<?php bloginfo('template_directory'); ?>/img/masthead1.jpg" id="masthead-image" />
		</div>

		<div class="body-text">
			<h1><?php echo single_cat_title(); ?></h1>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<div class="post-wrap">
						<h2><a href="<?php echo get_permalink($p->ID); ?>"><?php the_title(); ?></a></h2>
						<div class="text"><?php the_excerpt(); ?></div>
						<div class="entry-meta">
							
						</div><!-- .entry-meta -->
					</div>
				<?php endwhile; ?>
				<?php if(function_exists('wp_paginate')) { wp_paginate(); } ?>
		</div>
	</div>

	<div id="sidebar">
		<?php get_sidebar('blog'); ?>
	</div>

</div>


<?php get_footer(); ?>