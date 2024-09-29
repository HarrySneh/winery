<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>
	
   <div class="wrapper">
   
      <div class="grid_4 alpha">
         <div class="indent-right">
            <?php if ( ! dynamic_sidebar( 'Content Area 1' ) ) : ?>
               <!-- Wigitized Header -->
            <?php endif ?>
         </div>
      </div>
      
      <div class="grid_4">
         <div class="indent-right">
            <?php if ( ! dynamic_sidebar( 'Content Area 2' ) ) : ?>
               <!-- Wigitized Header -->
            <?php endif ?>
         </div>
      </div>
      
      <div class="grid_4 omega">
         <div class="indent-right">
            <?php if ( ! dynamic_sidebar( 'Content Area 3' ) ) : ?>
               <!-- Wigitized Header -->
            <?php endif ?>
         </div>
      </div>
   
   </div>
   
   <div class="line-hor"></div>
   
   <div class="wrapper">
   
      <div class="grid_4 alpha">
			<?php if ( ! dynamic_sidebar( 'Content Area 4' ) ) : ?>
            <!-- Wigitized Header -->
         <?php endif ?>
      </div>
      
      <div class="grid_4">
			<?php if ( ! dynamic_sidebar( 'Content Area 5' ) ) : ?>
            <!-- Wigitized Header -->
         <?php endif ?>
      </div>
      
      <div class="grid_4 omega">
			<?php if ( ! dynamic_sidebar( 'Content Area 6' ) ) : ?>
            <!-- Wigitized Header -->
         <?php endif ?>
      </div>
   
   </div>

<?php get_footer(); ?>