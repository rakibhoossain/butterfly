<?php
/**
 * The template for displaying frontpage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package butterfly
 */

get_header();


// General post data
$posts = new WP_Query( array(
  'post_type' => 'post',//'page ,post',
  'ignore_sticky_posts' => true,
  'posts_per_page' => 3,
) );


?>


    <!-- =========== latest news section======= -->
      <section id="latest_news">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <div class="latest_news_summary">
                <?php $count = (int)0; ?> 
                <div class="grid-post post-grid-3">
                <?php
                  /* Start the Loop */
                  while ( $posts->have_posts() ) : $posts->the_post();
                  /**
                   * Run the loop for the search to output the results.
                   * If you want to overload this in a child theme then include a file
                   * called content-search.php and that will be used instead.
                   */
                  if ($count == 0) {
                    get_template_part( 'template-parts/loops/post-top', 'large' );
                  }else{
                    get_template_part( 'template-parts/loops/post-top', 'small' );
                  }
                  $count++; 
                  endwhile;
                  $count=0;?>
                </div>
              </div>
            </div>
            <div class="col-md-3">
            <?php
              if (is_active_sidebar("sidebar-add")) :
                dynamic_sidebar("sidebar-add");
              endif;
            ?>
            </div>
          </div>
        </div>
      </section>

      <!-- =========== News Type section======= -->
      <section id="news_type_one" class="news_type news_type_one">
        <div class="container">
          <div class="news_type_menu">
            <?php
            wp_nav_menu( array(
              'theme_location'    => 'menu-news',
              'depth'             => 1,
              'container'         => false,
              'menu_class'        => 'news_menu',
            ) );
            ?>
          </div>

          <div class="news_type_card">
            <div class="row">

            <?php
            $catlist = get_terms( 'category' );
            $count =0;
            if ( ! empty( $catlist ) ) {
              foreach ( $catlist as $key => $item ) {
                $count++;
                if ($count>=5) break;
            ?>
            <div class="col-md-3 col-sm-3 col-xs-12 post">
              <div class="card" style="width: ;">
                <div class="card_header">
                  <h3><?php echo $item->name; ?></h3>
                </div>
                <div class="news_type_overlay">
                    <?php 

                    $imageID = get_term_meta( $item->term_id, 'wpsfi_tax_image_id', true );

                    $image =  wp_get_attachment_image( $imageID, 'butterfly-medium', false, array( "class" => 'card-img-top img-responsive' ) );
                    if($image){ 
                      echo $image;
                      }else{
                        printf('<img class="card-img-top img-responsive" src="https://via.placeholder.com/320x200" alt="'.$item->name.'">');
                      }
                    ?>
                 <div class="card-body">
                    <p class="card-text"><?php echo $item->description; ?></p>
                 </div>
                 <a href="<?php echo esc_url( get_term_link($item) ); ?>" class="news_type_overlay_link"></a>
                </div>
                <div class="see_more">
                  <a href="<?php echo esc_url( get_term_link($item) ); ?>">আরও</a>
                </div>
              </div>
            </div>
            <?php

              }
            }

            ?>

            </div>
          </div>
        </div>
      </section>

       <!-- =========== News and Sidebar menu section======= -->
      <section id="news_sidebar_menu">
      	<div class="container">
      		<div class="row">
      			<div class="col-md-9 col-sm-9 col-xs-12">
      				<div class="news_side">
      					<div class="news_side_row">
      						<div class="row">
      							

                <?php
                  /* Start the Loop */
                  while ( $posts->have_posts() ) : $posts->the_post();

                      echo '<div class="col-md-4 col-sm-4 col-xs-12 post">';

                      get_template_part( 'template-parts/loops/post', 'summary' );

                    echo '</div>';
                  endwhile;
                ?>


      						</div>
      					</div>
      				</div>
      			</div>

      			<div class="col-md-3 col-sm-3 col-xs-12">
      				<div class="sidebar">
      					<div class="row">
      						<div class="col-md-12 col-sm-12 col-xs-12">
      							<div class="sidebar_content">
      								<div class="sidebar_header">
      									<h4 class="sidebar_title"><span>আরও</span></h4>
      								</div>
      								
                      <div class="sidebar_nav">
                      <?php 
                        butterfly_post_categories(true);
                      ?>
      								</div>


      							</div>
      						</div>
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>

      	<!-- =========Donation Section======== -->
      </section>
      <section id="donation">
      	<div class="container">
      		<div class="donation_collect_menu">
            <?php
            wp_nav_menu( array(
              'theme_location'    => 'menu-donation',
              'depth'             => 1,
              'container'         => false,
              'menu_class'        => 'donation_menu',
            ) );
            ?>
      		</div>
      	</div>
      </section>

<!-- ===========News Type Two Section========= -->
      <section id="news_type_two" class="news_type news_type_two">
      	<div class="container">
      		<div class="news_type_card">
            <div class="row">

                <?php
                  /* Start the Loop */
                  while ( $posts->have_posts() ) : $posts->the_post();

                      echo '<div class="col-md-4 col-sm-4 col-xs-12 post">';

                      get_template_part( 'template-parts/loops/post', 'card' );

                    echo '</div>';
                  endwhile;
                ?>

            </div>
          </div>
      	</div>
      </section>

<!-- ==================Video Section================ -->
      <section id="video">
      	<div class="container">
      		<div class="video_header">
      			<h1 class="video_heading">ভিডিও</h1>
      		</div>
      		<div class="row">
      			<div class="col-md-4 col-sm-4 col-xs-12">
      				<div class="individual_video_summary">
      					<div class="card" style="">
                  <img class="card-img-top img-responsive" src="https://via.placeholder.com/320x200" alt="Video Image">
      					  <div class="card-body">
      					    <h4 class="card-title">আমার সোনার বাংলা</h4>
      					  </div>
      					  <a href="#" class="video_overlay"></a>
      					</div>
      				</div>
      			</div>
      			<div class="col-md-4 col-sm-4 col-xs-12">

      				<div class="individual_video_summary">
      					<div class="card" style="">
      					   <img class="card-img-top img-responsive" src="https://via.placeholder.com/320x200" alt="Video Image">
      					  <div class="card-body">
      					    <h4 class="card-title">আমার সোনার বাংলা</h4>
      					  </div>
      					  <a href="#" class="video_overlay"></a>
      					</div>
      				</div>

      			</div>
      			<div class="col-md-4 col-sm-4 col-xs-12">
      				<div class="individual_video_summary">
      					<div class="card" style="">
      					   <img class="card-img-top img-responsive" src="https://via.placeholder.com/320x200" alt="Video Image">
      					  <div class="card-body">
      					    <h4 class="card-title">আমার সোনার বাংলা</h4>
      					  </div>
      					  <a href="#" class="video_overlay"></a>
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>
      </section>

<!-- ==========News Type Three Section============== -->
      <section id="news_type_three" class="news_type news_type_three">
      	<div class="container">
      		<div class="news_type_card">
            <div class="row">
              
                <?php
                  /* Start the Loop */
                  while ( $posts->have_posts() ) : $posts->the_post();
                      echo '<div class="col-md-4 col-sm-4 col-xs-12 post">';

                      get_template_part( 'template-parts/loops/post', 'card' );

                    echo '</div>';
                  endwhile;
                ?>

            </div>
          </div>
      	</div>
      </section>

      <!-- =========Social media Section============= -->
      <section id="social_media">
      	<div class="container">
      		<div class="row">
      			<div class="col-md-6 col-sm-6 col-xs-12">
      				<div class="fb">
      					<a href="<?php echo get_theme_mod( 'butterfly_facebook' ); ?>">
      						<span class="fa-stack fa-lg">
      						  <i class="fa fa-circle fa-stack-2x"></i>
      						  <i class="fa fa-facebook-f fa-stack-1x fa-inverse"></i>
      						</span>
      						<span class="social_media_title">ফেসবুকে প্রজাপতি</span>
      					</a>
      				</div>
      			</div>
      			<div class="col-md-6 col-sm-6 col-xs-12">
      				<div class="youtube">
      					<a href="<?php echo get_theme_mod( 'butterfly_youtube' ); ?>">
      						 <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
                  </span>
      						<span class="social_media_title">ইউটিউবে প্রজাপতি</span>
      					</a>
      				</div>
      			</div>
      		</div>
      	</div>
      </section>

<?php
get_footer();