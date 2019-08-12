<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

</div>

<div class="wrapper">
  <div class="wrapper-in">
    <div class="content">

	<?php while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
        <p><?php the_content('...'); ?></p>
	<?php endwhile; ?>

    </div>

    <?php get_sidebar(); ?>
    <?php get_footer(); ?>