<?php $parent2 = get_post_ancestors($post->ID); 
	$count2 = count($parent2);
	$level2 = $parent2[$count2-2];
	$level2 = ($level2 == '') ? $level2 = $post->ID : $level2;
?>
<nav id="ter-nav">
	<ul>
	<?php $children2 = wp_list_pages('title_li=&child_of='.$level2.'&echo=0&depth=1');
	echo $children2; ?>
	</ul>
</nav>