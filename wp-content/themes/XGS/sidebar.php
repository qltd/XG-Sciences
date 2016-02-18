<?php $parent = get_post_ancestors($post->ID); 
	$count = count($parent);
	$level = $parent[$count-1];
	$level = ($level == '') ? $level = $post->ID : $level;
?>
<a href="<?php echo get_permalink($level); ?>" class="section-title <?php echo (is_page($level)) ? 'active' : ''; ?>"><?php echo get_the_title($level); ?></a>
<nav>
	<ul id="sub-nav">
	<?php $children = wp_list_pages('title_li=&child_of='.$level.'&echo=0&depth=1');
	echo $children; ?>
	</ul>
</nav>

<div id="buckets">
	<?php the_field('sidebar'); ?>
</div>