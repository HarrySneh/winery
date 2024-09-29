<?php get_header(); ?>
<div id="content" class="grid_8 <?php if (of_get_option('blog_sidebar_pos') == "right" ) {echo "alpha";} else {echo "omega";} ?> <?php echo of_get_option('blog_sidebar_pos') ?>">
	<div class="<?php if (of_get_option('blog_sidebar_pos') == "right" ) {echo "right-indent";} else {echo "left-indent";} ?>">

  <h1>Search for: "<?php the_search_query(); ?>"</h1>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('post-holder'); ?>>
      
			<div class="post-header">
            <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            <?php $post_meta = of_get_option('post_meta'); ?>
            <?php if ($post_meta=='true' || $post_meta=='') { ?>
               <div class="post-meta">
						<?php _e('Posted on', 'theme1633'); ?> <time datetime="<?php the_time('Y-m-d\TH:i'); ?>"><?php the_time('F j, Y'); ?></time> <?php _e('by', 'theme1633'); ?> <?php the_author_posts_link() ?>
               </div><!--.post-meta-->
            <?php } ?>		
         </div>
      
        <div class="post-content">
          <?php $post_excerpt = of_get_option('post_excerpt'); ?>
      		<?php if ($post_excerpt=='true' || $post_excerpt=='') { ?>
            <div class="excerpt"><?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,75);?></div>
          <?php } ?>
        </div>
        
         <div class="post-footer">
            <a href="<?php the_permalink() ?>" class="button"><?php _e('Read more', 'theme1633'); ?></a>
            <strong><?php comments_popup_link('No comments', '1 comment', '% comments', 'comments-link', 'Comments are closed'); ?></strong>
         </div>
        
    </article>

  <?php endwhile; else: ?>
    <div class="no-results">
    	<?php echo '<h2>' . __('No Results', 'theme1633') . '</h2>'; ?>
      <?php echo '<p>' . __('Please feel free try again!', 'theme1633') . '</p>'; ?>
      <?php get_search_form(); ?> <!-- outputs the default Wordpress search form-->
    </div><!--noResults-->
  <?php endif; ?>

    <?php if(function_exists('wp_pagenavi')) : ?>
			<?php wp_pagenavi(); ?>
    <?php else : ?>
      <?php if ( $wp_query->max_num_pages > 1 ) : ?>
        <nav class="oldernewer">
          <div class="older">
            <?php next_posts_link( __('&laquo; Older Entries', 'theme1633')) ?>
          </div><!--.older-->
          <div class="newer">
            <?php previous_posts_link(__('Newer Entries &raquo;', 'theme1633')) ?>
          </div><!--.newer-->
        </nav><!--.oldernewer-->
      <?php endif; ?>
    <?php endif; ?>
    <!-- Page navigation -->

	</div>
</div><!-- #content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>