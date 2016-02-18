<?php 
/*
* Template Name: Product
*/
get_header(); 
$parent = get_post_ancestors($post->ID); 
  $count = count($parent);
  $level = $parent[$count-1];
  $level = ($level == '') ? $level = $post->ID : $level;
  $slug = basename(get_permalink($level)); 
?>

<div id="content">
	<div id="main">

		<div id="header-image">
			<?php if(get_field('image')): ?>
				<img src="<?php the_field('image'); ?>" id="masthead-image" />
			<?php elseif($slug == 'products') : ?>
				<img src="<?php bloginfo('template_directory'); ?>/img/product-header1.jpg" id="masthead-image" />
			<?php elseif($slug == 'company') : ?>
				<img src="<?php bloginfo('template_directory'); ?>/img/masthead1.jpg" id="masthead-image" />
			<?php else : ?>
				<img src="<?php bloginfo('template_directory'); ?>/img/library-header.jpg" id="masthead-image" />
			<?php endif; ?>
		</div>

		<div class="body-text left-body">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
		</div>
		
		<div id="product-info">
			<?php if (get_field('featured_image')) : ?>
				<img src="<?php the_field('featured_image'); ?>" />
			<?php endif; ?>
			<?php if (get_field('specs_download')) : ?>
				<a href="<?php the_field('specs_download'); ?>" class="download-summary" target="_blank">Download Data Sheet</a>
			<?php endif; ?>
			<a href="<?php bloginfo('url'); ?>/wp-content/uploads/2012/10/XG SCIENCES QUOTE REQUEST.PDF" target="_blank" class="request-quote">Request a Quote</a>
		</div>


			<div id="carousel-tables" class="carousel slide">
			  	<div class="carousel-inner">
			        <?php $c = 0; while(has_sub_field('specs_tables')) : ?>
			        <div class="item <?php echo ($c == 0) ? 'active' : ''; $c++; ?>">			        	
			        	<h2><?php the_sub_field('title'); ?></h2>
			        	<?php the_sub_field('data'); ?>
			        </div>
			    	<?php endwhile; ?>
			  	</div>
			  	<?php if ($c > 1): ?>
			  		<a class="carousel-control left" href="#carousel-tables" data-slide="prev">Prev</a>
					<a class="carousel-control right" href="#carousel-tables" data-slide="next">Next</a>
				<?php endif; ?>
			</div>
				


	</div>

	<div id="sidebar">
		<?php get_sidebar(); ?>
	</div>

</div>


<?php get_footer(); ?>