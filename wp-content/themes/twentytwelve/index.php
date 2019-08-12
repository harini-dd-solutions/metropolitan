<?php
/**
* The main template file
*/

get_header(); ?>

<div id="slides">
  <div class="slides_container" style="overflow: hidden; position: relative; display: block;">
    <?php query_posts(array('category_name' => 'slider'));?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="slide" style="position: absolute; top: 0px; left: 900px; z-index: 5; display: block;">
      <a href="#">
        <?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) {
        echo get_the_post_thumbnail($post->ID);
        } else {
        echo main_image();
        } ?>
      </a>
    </div>
    <?php endwhile; ?>
  </div>
  <a href="#" class="prev"></a>
  <a href="#" class="next"></a>

</div>
</div>

<div class="wrapper">
  <div class="wrapper-in">
    <div class="content">
      <?php query_posts(array('category_name' => 'news'));?>
      <?php while (have_posts()) : the_post(); ?>
      <div class="block-new">
        <?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) {
        echo get_the_post_thumbnail($post->ID);
        }else{
        echo main_image();
        } ?>
        <div class="block-new-info">
          <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
          <p><?php the_excerpt('...'); ?></p>
        </div>
      </div> 
      <?php endwhile; ?>
    </div>

    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
