				</div>
				</div>
				
         </div>
      </div>
   </div>
   
	<footer id="footer">
		<div class="container_12 clearfix">
         <div class="grid_12">
         
         	<div class="wrapper">
            
               <div id="widget-footer">
                  <?php if ( ! dynamic_sidebar( 'Footer' ) ) : ?>
                     <!--Widgetized Footer-->
                  <?php endif ?>
               </div>
               
               <div id="footer-text">
						<?php $myfooter_text = of_get_option('footer_text'); ?>
                  <?php if($myfooter_text){?>
							<?php echo of_get_option('footer_text'); ?>
                  <?php } else { ?>
                     <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>" class="site-name"><?php bloginfo('name'); ?></a> &copy; <?php echo date ('Y'); ?> &bull; <a href="<?php bloginfo('url'); ?>/privacy-policy/" title="Privacy Policy"><?php _e('Privacy Policy', 'theme1633'); ?></a> <?php if( is_front_page() ) { ?><!-- {%FOOTER_LINK} --><?php } ?>
                  <?php } ?>
               </div>
               
				</div>
      
					<?php if ( of_get_option('footer_menu') == 'true') { ?>  
						<nav class="footer">
							<?php wp_nav_menu( array(
								'container'       => 'ul', 
								'menu_class'      => 'footer-nav', 
								'depth'           => 0,
								'theme_location' => 'footer_menu' 
								)); 
							?>
						</nav>
					<?php } ?>
					
			</div>
		</div>
	</footer>
   
</div><!--#main-->
<?php wp_footer(); ?> <!-- this is used by many Wordpress features and for plugins to work properly -->
<?php if(of_get_option('ga_code')) { ?>
	<script type="text/javascript">
		<?php echo stripslashes(of_get_option('ga_code')); ?>
	</script>
  <!-- Show Google Analytics -->	
<?php } ?>
</body>
</html>