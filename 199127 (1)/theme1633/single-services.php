<?php get_header(); ?>
<div id="content" class="grid_8 <?php if (of_get_option('blog_sidebar_pos') == "right" ) {echo "alpha";} else {echo "omega";} ?> <?php echo of_get_option('blog_sidebar_pos') ?>">
	<div class="<?php if (of_get_option('blog_sidebar_pos') == "right" ) {echo "right-indent";} else {echo "left-indent";} ?>">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
      <article class="single-post">
        <header>
          <h1><?php the_title(); ?></h1>
        </header>
        <div class="post-content extra-wrap">
        <?php if(has_post_thumbnail()) {
					echo '<div class="featured-thumbnail no-hover"><div class="img-wrap">'; the_post_thumbnail(); echo '</div></div>';
					}
				?>
          <?php the_content(); ?>
        </div><!--.post-content-->
      </article>

    </div><!-- #post-## -->

  <?php endwhile; /* end loop */ ?>
  
   </div>
</div><!--#content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>