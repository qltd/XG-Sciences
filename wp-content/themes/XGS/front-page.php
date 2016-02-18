<?php get_header(); ?>

	<div id="masthead">
		<div id="carousel-screenshots" class="carousel slide">
		  <div class="carousel-inner">
		        <?php $c = 0; while(has_sub_field('slideshow')) : ?>
		        <div class="item <?php echo ($c == 0) ? 'active' : ''; $c++; ?>">
		        	<a href="<?php echo get_sub_field('page'); ?>"><img src="<?php echo get_sub_field('image'); ?>" /></a>
		        	<div class="carousel-caption">
		        		<h2><?php the_sub_field('title'); ?></h2>
		        			<?php the_sub_field('text'); ?>
		        	</div>
		        </div>
		    	<?php endwhile; ?>
		  </div>
		</div>
		<div class="carousel-nav">
			<?php for ($i=0;$i<=($c-1);$i++) : ?>
				<a href="#" class="<?php echo ($i == 0) ? 'active' : ''; ?>" data-to="<?php echo ($i); ?>"><?php echo ($i); ?></a>
			<?php endfor;?>
		</div>
	</div>



	<div id="home-content">
		<div class="left">
			<?php the_field('headlines'); ?>

			<div id="product-search">
				<h2>Advanced Product Search</h2>
				<select id="product-select">
					<option></option>
				<?php $pages = get_pages(array('child_of' => '112'));
					$c = 0; $return = false;
					foreach ($pages as $page) {
						if ($page->post_parent == '112'){
							if ($c > 0) { $return .= '</optgroup>'; } else { $c++; }
							$return .= '<optgroup label="' . $page->post_title . '">';
						} else {
							$return .= '<option value="' . get_permalink($page->ID) . ' ">' . $page->post_title . '</option>';
						}
					}
					echo $return; ?>
				</select>
			</div>
		</div>

		<div class="middle">
			<div class="body-text">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			</div>
		</div>

		<div class="right">
			<?php the_field('sidebar'); ?>

			<div id="post-list">
				<h2 class="cat-title"><a href="<?php echo get_category_link(1); ?>">Events</a></h2>

				<ul>
					<?php query_posts("showposts=1&cat=1"); // show one latest post only ?>
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?> <i class="icon-caret-right"></i></a></li>
					<?php endwhile; ?>
					<?php wp_reset_query(); ?>
				</ul>

				<h2 class="cat-title"><a href="<?php echo get_category_link(5); ?>">Releases</a></h2>
				<ul>
					<?php query_posts("showposts=2&cat=5"); // show one latest post only ?>
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?> <i class="icon-caret-right"></i></a></li>
					<?php endwhile; ?>
					<?php wp_reset_query(); ?>
				</ul>
			</div>
		</div>
	</div>

<?php get_footer(); ?>