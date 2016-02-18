<div class="latest-posts bucket body-text">
	<?php
		$category = get_the_category(get_sub_field('category')); 
		echo '<h2 class="cat-title"><a href="' . get_category_link(get_sub_field('category')) . '">' . $category[0]->cat_name . '</a></h2>';
	?>
	<?php query_posts('cat=' . get_sub_field('category') .'&showposts='. get_sub_field('latest_posts'));
	while (have_posts()) : the_post(); ?>
		<div class="post">
			<h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
			<p><?php echo wp_trim_words(get_the_excerpt(), '20', '... <a href="' . get_permalink() . '">Read More <i class="icon-caret-right"></i>'); ?></p>
		</div>
	<?php endwhile; ?>
</div>
<?php wp_reset_query(); ?>