<a href="" class="section-title"><?php echo single_cat_title(); ?></a>

<div id="buckets">
	<?php the_field('sidebar'); ?>
</div>

<?php dynamic_sidebar( 'Blog' ); ?>