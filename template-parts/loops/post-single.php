<div class="row">
  <div class="col-md-3">
    <div class="additional_info_container">
      <div class="author each_row">

<?php
//Assuming $post is in scope
if (function_exists ( 'mt_profile_img' ) ) {
    $author_id=$post->post_author;
    mt_profile_img( $author_id, array(
        'size' => 'butterfly-medium',
        'attr' => array( 'alt' => 'Alternative Text' ),
        'echo' => true )
    );
}
?>



        <span class="name"><?php echo get_the_author_meta('display_name');?></span></div>
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