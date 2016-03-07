<?php
/*
Template Name: Login To View Template
*/
get_header();
  $parent3 = get_post_ancestors($post->ID);
  $count3 = count($parent3);
  $level3 = ($count3 > 0) ? $parent3[$count3-1] : 0;
  $level3 = ($level3 == '') ? $level3 = $post->ID : $level3;
  $slug = basename(get_permalink($level3));
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

        <div class="body-text clearfix">

        <?php if(is_user_logged_in()): ?>



        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <div class="body-pad"><?php the_content(); ?></div>
        <?php endwhile; ?>

        <ul id="overview-callouts">
            <?php while(has_sub_field('overview_callout')) : ?>
                <li>
                    <?php if (get_sub_field('image')) : ?><img src="<?php the_sub_field('image'); ?>" /><?php endif; ?>
                    <a href="<?php the_sub_field('page'); ?>"><h2><?php the_sub_field('title'); ?></h2></a>
                    <?php the_sub_field('text'); ?>
                </li>
            <?php endwhile; ?>

        </ul>


        <ul id="trio-callouts">
            <?php while(has_sub_field('trio_callouts')) : ?>
                <li>
                    <?php if (get_sub_field('image')) : ?><img src="<?php the_sub_field('image'); ?>" /><?php endif; ?>
                    <div class="text"><?php the_sub_field('text'); ?></div>
                </li>
            <?php endwhile; ?>

        </ul>

        <?php else: ?>
            <h3>Sorry, you must first log in to view this page.</h3>
            <p>For more information, or to request a login, please contact us at <a href="mailto:info@xgsciences.com">info@xgsciences.com</a>.</p><br /><br />

            <?php $args = array(
                    'echo' => true,
                    'redirect' => site_url( $_SERVER['REQUEST_URI'] ),
                    'form_id' => 'user-login-form',
                    'label_username' => __( 'Username' ),
                    'label_password' => __( 'Password' ),
                    'label_remember' => __( 'Remember Me' ),
                    'label_log_in' => __( 'Log In' ),
                    'id_username' => 'user_login',
                    'id_password' => 'user_pass',
                    'id_remember' => 'rememberme',
                    'id_submit' => 'wp-submit',
                    'remember' => false,
                    'value_username' => NULL,
                    'value_remember' => false );

                wp_login_form( $args ); ?>
        <?php endif; ?>


        </div>
    </div>

    <div id="sidebar">
        <?php get_sidebar(); ?>
    </div>

</div>

<?php get_footer(); ?>