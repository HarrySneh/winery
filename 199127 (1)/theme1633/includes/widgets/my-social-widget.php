<?php
// =============================== My Social Networks Widget ====================================== //
class My_SocialNetworksWidget extends WP_Widget {

	function My_SocialNetworksWidget() {
		$widget_ops = array('classname' => 'social_networks_widget', 'description' => __('Link to your social networks.'));
		$this->WP_Widget('social_networks', __('My - Social Networks'), $widget_ops, $control_ops);
	}

	function widget( $args, $instance ) {
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);
		
		$networks['Twitter']['link'] = $instance['twitter'];
		$networks['Facebook']['link'] = $instance['facebook'];
		$networks['Vimeo']['link'] = $instance['vimeo'];
		$networks['Feed']['link'] = $instance['feed'];
		$networks['Linkedin']['link'] = $instance['linkedin'];
		$networks['Delicious']['link'] = $instance['delicious'];
		$networks['Youtube']['link'] = $instance['youtube'];
		
		$networks['Twitter']['label'] = $instance['twitter_label'];
		$networks['Facebook']['label'] = $instance['facebook_label'];
		$networks['Vimeo']['label'] = $instance['vimeo_label'];
		$networks['Feed']['label'] = $instance['feed_label'];
		$networks['Linkedin']['label'] = $instance['linkedin_label'];
		$networks['Delicious']['label'] = $instance['delicious_label'];
		$networks['Youtube']['label'] = $instance['youtube_label'];

		$display = $instance['display'];
		

		echo $before_widget;
		if ( $title )
    		echo $before_title . $title . $after_title;
		?>
		
			<ul class="social-networks">
				
					<?php foreach(array("Twitter", "Vimeo", "Facebook", "Feed", "Linkedin", "Delicious", "Youtube") as $network) : ?>
			    		<?php if (!empty($networks[$network]['link'])) : ?>
						<li>
							<a rel="external" title="<?php echo strtolower($network); ?>" href="<?php echo $networks[$network]['link']; ?>">
						    		<?php if (($display == "both") or ($display =="icons")) { ?>
									<img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/<?php echo strtolower($network);?>.png" alt="">
								<?php } if (($display == "labels") or ($display == "both")) { ?> 
									<?php if (($networks[$network]['label'])!=="") { echo $networks[$network]['label']; } else { echo $network; } ?>
								<?php } ?>
							</a>
						</li>
					<?php endif; ?>
					<?php endforeach; ?>
			      
      		</ul>
      
		<?php
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		
		$instance['twitter'] = $new_instance['twitter'];
		$instance['facebook'] = $new_instance['facebook'];
		$instance['vimeo'] = $new_instance['vimeo'];
		$instance['feed'] = $new_instance['feed'];
		$instance['linkedin'] = $new_instance['linkedin'];
		$instance['delicious'] = $new_instance['delicious'];
		$instance['youtube'] = $new_instance['youtube'];
		
		$instance['twitter_label'] = $new_instance['twitter_label'];
		$instance['facebook_label'] = $new_instance['facebook_label'];
		$instance['vimeo_label'] = $new_instance['vimeo_label'];
		$instance['feed_label'] = $new_instance['feed_label'];
		$instance['linkedin_label'] = $new_instance['linkedin_label'];
		$instance['delicious_label'] = $new_instance['delicious_label'];
		$instance['youtube_label'] = $new_instance['youtube_label'];

		$instance['display'] = $new_instance['display'];

		return $instance;
	}

	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'text' => '' ) );
		$title = strip_tags($instance['title']);
			
		$twitter = $instance['twitter'];		
		$facebook = $instance['facebook'];
		$vimeo = $instance['vimeo'];		
		$feed = $instance['feed'];
		$linkedin = $instance['linkedin'];	
		$delicious = $instance['delicious'];
		$youtube = $instance['youtube'];
		
		$twitter_label = $instance['twitter_label'];
		$facebook_label = $instance['facebook_label'];
		$vimeo_label = $instance['vimeo_label'];
		$feed_label = $instance['feed_label'];
		$linkedin_label = $instance['linkedin_label'];
		$delicious_label = $instance['delicious_label'];
		$youtube_label = $instance['youtube_label'];

		$display = $instance['display'];		


		$text = format_to_edit($instance['text']);
?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>
    
		<fieldset style="border:1px solid #dfdfdf; padding:10px 10px 0; margin-bottom:1em;">
			<legend style="padding:0 5px;"><?php _e('Facebook'); ?>:</legend>
			
			<p><label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook URL:'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo esc_attr($facebook); ?>" /></p>
			
			<p><label for="<?php echo $this->get_field_id('facebook_label'); ?>"><?php _e('Facebook label:'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('facebook_label'); ?>" name="<?php echo $this->get_field_name('facebook_label'); ?>" type="text" value="<?php echo esc_attr($facebook_label); ?>" /></p>
		</fieldset>	
		
        <fieldset style="border:1px solid #dfdfdf; padding:10px 10px 0; margin-bottom:1em;">
			<legend style="padding:0 5px;"><?php _e('Twitter'); ?>:</legend>	
		<p><label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Twitter URL:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo esc_attr($twitter); ?>" /></p>
        <p><label for="<?php echo $this->get_field_id('twitter_label'); ?>"><?php _e('Twitter label:'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('twitter_label'); ?>" name="<?php echo $this->get_field_name('twitter_label'); ?>" type="text" value="<?php echo esc_attr($twitter_label); ?>" /></p>
        </fieldset>	
		
        <fieldset style="border:1px solid #dfdfdf; padding:10px 10px 0; margin-bottom:1em;">
			<legend style="padding:0 5px;"><?php _e('Vimeo'); ?>:</legend>
		<p><label for="<?php echo $this->get_field_id('vimeo'); ?>"><?php _e('Vimeo URL:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('vimeo'); ?>" name="<?php echo $this->get_field_name('vimeo'); ?>" type="text" value="<?php echo esc_attr($vimeo); ?>" /></p>
        <p><label for="<?php echo $this->get_field_id('vimeo_label'); ?>"><?php _e('Vimeo label:'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('vimeo_label'); ?>" name="<?php echo $this->get_field_name('vimeo_label'); ?>" type="text" value="<?php echo esc_attr($vimeo_label); ?>" /></p>
        </fieldset>	
		
        <fieldset style="border:1px solid #dfdfdf; padding:10px 10px 0; margin-bottom:1em;">
			<legend style="padding:0 5px;"><?php _e('RSS feed'); ?>:</legend>
		<p><label for="<?php echo $this->get_field_id('feed'); ?>"><?php _e('RSS feed:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('feed'); ?>" name="<?php echo $this->get_field_name('feed'); ?>" type="text" value="<?php echo esc_attr($feed); ?>" /></p>
        <p><label for="<?php echo $this->get_field_id('feed_label'); ?>"><?php _e('RSS label:'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('feed_label'); ?>" name="<?php echo $this->get_field_name('feed_label'); ?>" type="text" value="<?php echo esc_attr($feed_label); ?>" /></p>
        </fieldset>	
    
    <fieldset style="border:1px solid #dfdfdf; padding:10px 10px 0; margin-bottom:1em;">
			<legend style="padding:0 5px;"><?php _e('Linkedin'); ?>:</legend>
    <p><label for="<?php echo $this->get_field_id('linkedin'); ?>"><?php _e('Linkedin URL:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('linkedin'); ?>" name="<?php echo $this->get_field_name('linkedin'); ?>" type="text" value="<?php echo esc_attr($linkedin); ?>" /></p>
        <p><label for="<?php echo $this->get_field_id('linkedin_label'); ?>"><?php _e('Linkedin label:'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('linkedin_label'); ?>" name="<?php echo $this->get_field_name('linkedin_label'); ?>" type="text" value="<?php echo esc_attr($linkedin_label); ?>" /></p>
        </fieldset>	
    
    <fieldset style="border:1px solid #dfdfdf; padding:10px 10px 0; margin-bottom:1em;">
			<legend style="padding:0 5px;"><?php _e('Delicious'); ?>:</legend>
    <p><label for="<?php echo $this->get_field_id('delicious'); ?>"><?php _e('Delicious URL:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('delicious'); ?>" name="<?php echo $this->get_field_name('delicious'); ?>" type="text" value="<?php echo esc_attr($delicious); ?>" /></p>
        <p><label for="<?php echo $this->get_field_id('delicious_label'); ?>"><?php _e('Delicious label:'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('delicious_label'); ?>" name="<?php echo $this->get_field_name('delicious_label'); ?>" type="text" value="<?php echo esc_attr($delicious_label); ?>" /></p>
        </fieldset>	
    
    <fieldset style="border:1px solid #dfdfdf; padding:10px 10px 0; margin-bottom:1em;">
			<legend style="padding:0 5px;"><?php _e('Youtube'); ?>:</legend>
    <p><label for="<?php echo $this->get_field_id('youtube'); ?>"><?php _e('Youtube URL:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('youtube'); ?>" name="<?php echo $this->get_field_name('youtube'); ?>" type="text" value="<?php echo esc_attr($youtube); ?>" /></p>
        <p><label for="<?php echo $this->get_field_id('youtube_label'); ?>"><?php _e('Youtube label:'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('youtube_label'); ?>" name="<?php echo $this->get_field_name('youtube_label'); ?>" type="text" value="<?php echo esc_attr($youtube_label); ?>" /></p>
        </fieldset>	


		<p>Display:</p>
		<label for="<?php echo $this->get_field_id('icons'); ?>"><input type="radio" name="<?php echo $this->get_field_name('display'); ?>" value="icons" id="<?php echo $this->get_field_id('icons'); ?>" <?php checked($display, "icons"); ?>></input>  Icons</label>
		<label for="<?php echo $this->get_field_id('labels'); ?>"><input type="radio" name="<?php echo $this->get_field_name('display'); ?>" value="labels" id="<?php echo $this->get_field_id('labels'); ?>" <?php checked($display, "labels"); ?>></input> Labels</label>
		<label for="<?php echo $this->get_field_id('both'); ?>"><input type="radio" name="<?php echo $this->get_field_name('display'); ?>" value="both" id="<?php echo $this->get_field_id('both'); ?>" <?php checked($display, "both"); ?>></input> Both</label>

    
<?php
	}
}

add_action('widgets_init', create_function('', 'return register_widget("My_SocialNetworksWidget");'));


?>