<div class="row">
  <div class="col-md-3">
    <div class="additional_info_container">
      <div class="author each_row">
      <?php
        $post_custom = get_post_custom(get_the_ID());
        $author_name = $post_custom["sub_name"][0];
        $image_url = $post_custom["portfolio_img"][0];

        $imageID = attachment_url_to_postid( $image_url );
        $image =  wp_get_attachment_image( $imageID, 'butterfly-medium', false, array( "class" => 'img-responsive' ) );
        if($image){ 
          echo $image;
        }
      ?>
        <span class="name"><?php echo $author_name; ?></span>
      </div>
      <div class="time each_row">
          <div class="date_time">
            <p>
              <span class="date"><?php echo get_the_date( 'Y-m-d' ); ?></span>, 
              <span class="time"><?php the_time( 'H:i:s' ); ?></span>
            </p>
          </div>
          <div class="updated_date_time">
            <?php butterfly_post_update_on(); ?>
          </div>
      </div>
    </div>
  </div>
  <div class="col-md-9">
    <div id="news_details">
      <div class="single_news_header">
        <?php the_title( '<h3 class="single_news_title">', '</h3>' );?>
      </div>
      <div class="news_content">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</div>