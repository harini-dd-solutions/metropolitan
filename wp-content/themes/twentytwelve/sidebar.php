<?php
/**
 * The sidebar containing the main widget area
 */
?>
   <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
      <div class="sidebar">
          <?php dynamic_sidebar( 'sidebar-1' ); ?>
      </div>
   <?php endif; ?>



	
