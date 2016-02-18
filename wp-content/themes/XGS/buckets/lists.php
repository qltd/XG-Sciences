<div class="bucket lists-bucket">
	<?php foreach (get_sub_field('list') as $list) : ?>
		<div class="list">
			<h2><?php echo $list['title']; ?></h2>
			<ul>
			<?php foreach($list['list_items'] as $item): ?>
				<li><i class="icon-caret-right"></i><?php echo $item['item']; ?></li>
			<?php endforeach; ?>
			</ul>
		</div>
	<?php endforeach; ?>
	
	<?php /* while(get_sub_field('list')): ?>
		<div class="list">
			<h2><?php the_sub_field('title'); ?></h2>
			<ul>
			<?php while(get_sub_field('list_items')): ?>
				<li><i class="icon-caret-right"></i><?php the_sub_field('item'); ?></li>
			<?php endwhile; ?>
			</ul>
		</div>
	<?php endwhile; */ ?>
</div>