<div class="row">
  <div class="col-md-offset-3 col-md-9">
      <div class="single_news_header">
        <?php the_title( '<h3 class="single_news_title">', '</h3>' );?>
      </div>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="additional_info_container">
      <div class="author each_row">
      <?php
        $post_custom = get_post_custom(get_the_ID());
        $author_name = get_the_author_meta('display_name');

        $author_id = $post_custom["author_name"][0];

        if ($author_id != '-1' && $author_id > (int)0 ) {
          $author_b = get_post($author_id);
          $author_custom = get_post_custom($author_id);
          $author_position = $author_custom["team_position"][0];

          $author_name = $author_b->post_title;
          

          $image =  wp_get_attachment_image( get_post_thumbnail_id( $author_id ), 'butterfly-medium', false, array( "class" => 'img-responsive' ) );
          if($image){ 
            echo $image;
          }
          echo '<span class="name">'.$author_name.'</span>';
          echo '<br><span class="name">'.$author_position.'</span>';

        }else{
          if ($post_custom["sub_name"][0]) {
            $author_name = $post_custom["sub_name"][0];
          }
          $image_url = $post_custom["portfolio_img"][0];

          $imageID = attachment_url_to_postid( $image_url );
          $image =  wp_get_attachment_image( $imageID, 'butterfly-medium', false, array( "class" => 'img-responsive' ) );
          if($image){ 
            echo $image;
          }
          echo '<span class="name">'.$author_name.'</span>';
        }
      ?>
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
      <div class="news_content">
        <?php the_content(); ?>
      </div>
    </div>
    <div class="post-meta">
      <?php butterfly_entry_footer();?>
    </div>
  </div>
</div>