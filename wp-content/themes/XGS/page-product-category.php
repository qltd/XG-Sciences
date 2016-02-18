<?php 
/*
* Template Name: Product Category
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
				<?php if (get_field('tab')): ?>
				<ul id="ter-nav">
					<li class="active"><a href="#overview">Overview</a></li>
					<?php while(has_sub_field('tab')) : ?>
						<li><a href="#<?php echo strtolower(str_replace(' ' , '_', get_sub_field('title'))); ?>"><?php the_sub_field('title'); ?></a></li>
					<?php endwhile; ?>
				</ul>
				<?php endif; ?>

				
		</div>

		<div class="body-text">

			<div class="tab-content">
				<div class="tab-pane active" id="overview">
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
				</div>
				<?php while(has_sub_field('tab')) : ?>
				<div class="tab-pane" id="<?php echo strtolower(str_replace(' ' , '_', get_sub_field('title'))); ?>">
					<?php the_sub_field('content'); ?>
				</div>
				<?php endwhile; ?>
			</div>

		<?php if (get_field('product_image')) : ?>
		<div id="featured-product">
			<a href="<?php the_field('page'); ?>" class="pull-left"><img src="<?php the_field('product_image'); ?>" /></a>
			<div class="text pull-left">
				<?php the_field('text'); ?>
			</div>
		</div>
		<?php endif; ?>

		<ul id="overview-callouts">
			<?php while(has_sub_field('overview_callout')) : ?>
				<li>
					<?php if (get_sub_field('image')) : ?><img src="<?php the_sub_field('image'); ?>" /><?php endif; ?>
					<a href="<?php the_sub_field('page'); ?>"><h2><?php the_sub_field('title'); ?></h2></a>
					<?php the_sub_field('text'); ?>
				</li>
			<?php endwhile; ?>
		</ul>

		</div>
	
	</div>

	<div id="sidebar">
		<?php get_sidebar(); ?>
	</div>

</div>


<?php get_footer(); ?>