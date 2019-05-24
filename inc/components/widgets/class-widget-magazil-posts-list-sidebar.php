<?php
if(!class_exists('Widget_Magazil_Posts_List_Sidebar')){
 class Widget_Magazil_Posts_List_Sidebar extends WP_Widget {
    
	public function __construct() {
		add_action( 'admin_init', array( $this, 'enqueue' ) );
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue' ) );
		add_action( 'customize_preview_init', array( $this, 'enqueue' ) );
		
		parent::__construct(
			'magazil_recent_posts', // Base ID
			__( 'Magazil: Recent Posts', 'butterfly' ), // Name
			array( 'description' => __( 'Sidebar area Recent Posts.', 'butterfly' ), ) // Args
		);
		
	}

	public function enqueue() {
			wp_enqueue_script( 'jquery-ui' );
			wp_enqueue_script( 'jquery-ui-slider' );
			wp_enqueue_style( 'magazil-widget-range' );
			wp_enqueue_script( 'magazil-widget-range' );
	}	
	
 	function form( $instance ) {
 	    $defaults = array('list_num' => 4, 'title' => __( 'Recent Posts', 'butterfly' ));
 		$instance = wp_parse_args( (array) $instance, $defaults );
 	
	?>
<p>
  <label for="<?php echo esc_attr( $this->get_field_id( 'title' )); ?>">
    <?php _e('Title', 'butterfly'); ?>
    :</label>
  <br />
  <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' )); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
</p>
<p>
	<label class="block" for="input_<?php echo esc_attr( $this->get_field_id( 'list_num' ) ); ?>">
	    <span class="customize-control-title">
	       <?php _e( 'Posts to Show', 'butterfly' ); ?> :
	    </span>
	</label>
	<div class="slider-container">
	    <input type="text" name="<?php echo esc_attr( $this->get_field_name( 'list_num' ) ); ?>" class="rl-slider"
	           id="input_<?php echo esc_attr( $this->get_field_id( 'list_num' ) ); ?>"
	           value="<?php echo esc_attr( $instance['list_num'] ); ?>"/>
	    <div id="slider_<?php echo esc_attr( $this->get_field_id( 'list_num' ) ) ?>" data-attr-min="4"
	         data-attr-max="12" data-attr-step="1" class="ss-slider"></div>
	</div>
</p>
<?php

	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		
			$instance['list_num']  = absint($new_instance['list_num']);
			$instance['title']     = esc_attr($new_instance['title']);

		return $instance;
	}

	function widget( $args, $instance ) {
 		extract( $args );
 	    $title    = apply_filters(__('Recent Posts', 'butterfly'), esc_attr($instance['title']) );
		$list_num = absint($instance['list_num']);
		
		echo wp_specialchars_decode($before_widget);
		if($title)
			$widget_title = $before_title . $title . $after_title;
		echo wp_specialchars_decode($widget_title);
		
		$my_query = new WP_Query( 'showposts='.absint($list_num).'&ignore_sticky_posts=1');
		?>

<ul class="news_sidebar_menu">
    <?php while ($my_query->have_posts() ) : $my_query->the_post(); ?>
            <li>
              <div class="sidebar_content">
			    <?php 
			    	if (has_post_thumbnail() ){
			         $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'butterfly-tiny');
					 $source = get_site_url();
					 	if($featured_image[0] !=""){
							$thumb = $featured_image[0];
							echo '<img src="'.esc_url($thumb).'" class="sidebar_img" alt="'.esc_attr(get_the_title()).'" />';
						}	
					}
				?>
				<?php the_title('<h4 class="sidebar_title">','</h4>');?>
              </div>
              <a href="<?php the_permalink();?>" class="sidebar_menu_overlay"></a>
            </li>
	<?php endwhile; wp_reset_postdata(); ?>
</ul>
<?php 
	echo wp_specialchars_decode($after_widget);
 	}
 }
}