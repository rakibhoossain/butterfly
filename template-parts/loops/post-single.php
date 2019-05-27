<div class="row">
  <div class="col-md-offset-3 col-md-9">
      <header class="single_news_header">
        <?php the_title( '<h3 class="single_news_title">', '</h3>' ); ?>
      </header>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="additional_info_container">
      <div class="author each_row">
      <?php
        $author_name = get_the_author_meta('display_name');
        $author_position = '';
        $image = '';

        $post_custom = get_post_custom(get_the_ID());
        $author_id = $post_custom["author_name"][0];

        if ($author_id != '-1' && $author_id > (int)0 ) {
          $author_b = get_post($author_id);
          $author_custom = get_post_custom($author_id);

          $author_position = $author_custom["team_position"][0];
          $author_name = $author_b->post_title;
          $image =  wp_get_attachment_image( get_post_thumbnail_id( $author_id ), 'butterfly-author', false, array( "class" => 'img-circle' ) );
        }else{
          if ($post_custom["sub_name"][0]) {
            $author_name = $post_custom["sub_name"][0];

          $image_url = $post_custom["portfolio_img"][0];
          $imageID = attachment_url_to_postid( $image_url );
          $image =  wp_get_attachment_image( $imageID, 'butterfly-author', false, array( "class" => 'img-circle' ) );
          }
        }
      ?>
        <div class="row">
          <div class="col-xs-3 col-md-12">
        <?php
          if($image){ 
            echo $image;
          }
        ?> 
          </div>
          <div class="col-xs-9 col-md-12 ">
            <div class="author_data">
            <?php 
              echo '<span class="name">'.$author_name.'</span>';
              echo '<br><span class="name">'.$author_position.'</span>';
            ?>
            </div>
          </div>
        </div>
      </div>
      <div class="time each_row">
          <div class="date_time">
            <span class="date"><?php echo get_the_date( 'Y-m-d' ); ?></span>, 
            <span class="time"><?php the_time( 'H:i:s' ); ?></span>
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
        <?php butterfly_post_thumbnail(); ?>
        <?php the_content(); ?>
      </div>
    </div>
    <div class="post-meta">
      <?php butterfly_entry_footer();?>
    </div>
  </div>
</div>