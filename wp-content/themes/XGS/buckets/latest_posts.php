<div class="latest-posts bucket body-text">
	<?php
		$category = get_sub_field('category');
		echo '<h2 class="cat-title"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></h2>';
	?>
	<?php query_posts('cat=' . $category->term_id .'&showposts='. get_sub_field('latest_posts'));
	while (have_posts()) : the_post(); ?>
		<div class="post">
			<h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
			<p><?php echo wp_trim_words(get_the_excerpt(), '20', '... <a href="' . get_permalink() . '">Read More <i class="icon-caret-right"></i>'); ?></p>
		</div>
	<?php endwhile; ?>
</div>
<?php wp_reset_query(); ?>