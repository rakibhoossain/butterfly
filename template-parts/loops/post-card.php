<div class="card" style="width: ;">
  <div class="card_header">
    <h3><?php butterfly_post_categories(); ?></h3>
  </div>
  <div class="news_type_overlay">

      <?php if(has_post_thumbnail()){ 
        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'butterfly-small' );
        $image = esc_url($image_url[0]);
        $title = get_the_title();
        printf('<img class="card-img-top img-responsive" src="'.esc_url($image).'" alt="'.$title.'">');
        }else{
          printf('<img class="card-img-top img-responsive" src="https://via.placeholder.com/320x200" alt="'.$title.'">');
        }
      ?>


   <div class="card-body">
     <?php the_title( '<h4 class="card-title">', '</h4>' );?>
      <p class="card-text"><?php echo wp_strip_all_tags( get_the_excerpt(), true ); ?></p>
   </div>
   <a href="<?php echo esc_url( get_the_permalink() ); ?>" class="news_type_overlay_link"></a>
  </div>
  <div class="see_more">
    <a href="<?php echo esc_url( get_the_permalink() ); ?>">আরও</a>
  </div>
</div>