<div class="individual_video_summary">
	<div class="card" style="">
			<?php if(has_post_thumbnail()){ 
				$image_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'butterfly-small' );
				$image = esc_url($image_url[0]);
				$title = get_the_title();
				printf('<img class="card-img-top img-responsive" src="'.esc_url($image).'" alt="'.$title.'">');
				}else{
					printf('<img class="card-img-top img-responsive" src="https://via.placeholder.com/280x175" alt="'.$title.'">');
				}
			?>
	  <div class="card-body">
	    <?php the_title( '<h4 class="card-title">', '</h4>' );?>
	  </div>
	  <a href="<?php echo esc_url( get_the_permalink() ); ?>" class="video_overlay"></a>
	</div>
</div>