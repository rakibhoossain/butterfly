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
?>

 		<!-- =========== latest news section======= -->
  		<section id="latest_news">
  			<div class="container">
  				<div class="latest_news_summary">
  					<div class="row">
  						<div class="col-md-6 col-sm-6 col-xs-12">
  							<div class="summary_bimg">
  								<img src="https://via.placeholder.com/540x360" class="img-responsive">
  								<a href="#" class="summary_img_overlay"></a>
  								<div class="summary_info">
  									<div class="info_title">
  										<h4><span>আমার সোনার বাংলা</span></h4>
  									</div>
  								</div>
  							</div>
  						</div>
	  					<div class="col-md-6 col-sm-6 col-xs-12">
	  						<div class="row">
	  							<div class="col-md-8 col-sm-12 col-xs-12">
	  								<div class="summary_simg">
	  									<img src="https://via.placeholder.com/280x175" class="img-responsive">
	  									<a href="#" class="summary_img_overlay"></a>
	  									<div class="summary_info">
	  										<div class="info_title">
	  											<h4><span>আমার সোনার বাংলা</span></h4>
	  										</div>
	  									</div>
	  								</div>
	  							</div>
	  							<div class="col-md-8 col-sm-12 col-xs-12">
	  								<div class="summary_simg" style="margin-top: 10px;">
		  								<img src="https://via.placeholder.com/280x175" class="img-responsive">
		  								<a href="#" class="summary_img_overlay"></a>
		  								<div class="summary_info">
		  									<div class="info_title">
		  										<h4><span>আমার সোনার বাংলা</span></h4>
		  									</div>
		  								</div>
	  								</div>
	  							</div>
	  						</div>
	  					</div>
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
              'theme_location'    => 'menu-1',
              'depth'             => 1,
              'container'         => false,
              'menu_class'        => 'news_menu',
            ) );
            ?>
          </div>

          <div class="news_type_card">
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="card" style="width: ;">
                  <div class="card_header">
                    <h3 style="background-color: #0BB14D"><span>জোকস</span></h3>
                  </div>
                  <div class="news_type_overlay">
	                <img class="card-img-top img-responsive" src="https://via.placeholder.com/280x175" alt="News Image">
	                 <div class="card-body">
	                   <h4 class="card-title" style="color: #0BB14D">আমার সোনার বাংলা</h4>
	                    <p class="card-text">আমার সোনার বাংলা, আমি তোমায় ভালোবাসি..</p>
	                 </div>
	                 <a href="#" class="news_type_overlay_link"></a>
                  </div>
                  <div class="see_more">
                    <a href="#" class="" style="border-top: 2px solid #0BB14D;">আরও</a>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="card" style="width: ;">
                  <div class="card_header">
                    <h3 style="background-color: #E6E600;color: #000;"><span>গল্প</span></h3>
                  </div>
                  <div class="news_type_overlay">
	                <img class="card-img-top img-responsive" src="https://via.placeholder.com/280x175" alt="News Image">
	                 <div class="card-body">
	                   <h4 class="card-title" style="color: #0BB14D">আমার সোনার বাংলা</h4>
	                    <p class="card-text">আমার সোনার বাংলা, আমি তোমায় ভালোবাসি..</p>
	                 </div>
	                 <a href="#" class="news_type_overlay_link"></a>
                  </div>
                  <div class="see_more">
                    <a href="#" class="" style="border-top: 2px solid #E6E600;">আরও</a>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="card" style="width: ;">
                  <div class="card_header">
                    <h3 style="background-color: #F7921C"><span>ছড়া</span></h3>
                  </div>
                  <div class="news_type_overlay">
	                <img class="card-img-top img-responsive" src="https://via.placeholder.com/280x175" alt="News Image">
	                 <div class="card-body">
	                   <h4 class="card-title" style="color: #0BB14D">আমার সোনার বাংলা</h4>
	                    <p class="card-text">আমার সোনার বাংলা, আমি তোমায় ভালোবাসি..</p>
	                 </div>
	                 <a href="#" class="news_type_overlay_link"></a>
                  </div>
                  <div class="see_more">
                    <a href="#" class="" style="border-top: 2px solid #F7921C;">আরও</a>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="card" style="width: ;">
                  <div class="card_header">
                    <h3 style="background-color: #00B6EF"><span>ফিচার</span></h3>
                  </div>
                  <div class="news_type_overlay">
	                <img class="card-img-top img-responsive" src="https://via.placeholder.com/280x175" alt="News Image">
	                 <div class="card-body">
	                   <h4 class="card-title" style="color: #0BB14D">আমার সোনার বাংলা</h4>
	                    <p class="card-text">আমার সোনার বাংলা, আমি তোমায় ভালোবাসি..</p>
	                 </div>
	                 <a href="#" class="news_type_overlay_link"></a>
                  </div>
                  <div class="see_more">
                    <a href="#" class="" style="border-top: 2px solid #00B6EF;">আরও</a>
                  </div>
                </div>
              </div>
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
                  while ( have_posts() ) :
                    the_post();
                      echo '<div class="col-md-4 col-sm-4 col-xs-12">';

                      get_template_part( 'template-parts/loops/post', 'card' );

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
              'theme_location'    => 'menu-1',
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
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="card" style="width: ;">
                  <div class="card_header">
                    <h3 style="background-color: #EA1C24"><span>নোটবুক</span></h3>
                  </div>
                  <div class="news_type_overlay">
	                <img class="card-img-top img-responsive" src="https://via.placeholder.com/320x200" alt="News Image">
	                 <div class="card-body">
	                   <h4 class="card-title" style="color: #0BB14D">আমার সোনার বাংলা</h4>
	                    <p class="card-text">আমার সোনার বাংলা, আমি তোমায় ভালোবাসি..</p>
	                 </div>
	                 <a href="#" class="news_type_overlay_link"></a>
                  </div>
                  <div class="see_more">
                    <a href="#" class="" style="border-top: 2px solid #EA1C24;">আরও</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="card" style="width: ;">
                  <div class="card_header">
                    <h3 style="background-color: #E6E600;color: #000;"><span>আলাপন</span></h3>
                  </div>
                  <div class="news_type_overlay">
	                <img class="card-img-top img-responsive" src="https://via.placeholder.com/320x200" alt="News Image">
	                 <div class="card-body">
	                   <h4 class="card-title" style="color: #0BB14D">আমার সোনার বাংলা</h4>
	                    <p class="card-text">আমার সোনার বাংলা, আমি তোমায় ভালোবাসি..</p>
	                 </div>
	                 <a href="#" class="news_type_overlay_link"></a>
                  </div>
                  <div class="see_more">
                    <a href="#" class="" style="border-top: 2px solid #E6E600;">আরও</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="card" style="width: ;">
                  <div class="card_header">
                    <h3 style="background-color: #F8921A;"><span>সন্দেশ</span></h3>
                  </div>
                  <div class="news_type_overlay">
	                <img class="card-img-top img-responsive" src="https://via.placeholder.com/320x200" alt="News Image">
	                 <div class="card-body">
	                   <h4 class="card-title" style="color: #0BB14D">আমার সোনার বাংলা</h4>
	                    <p class="card-text">আমার সোনার বাংলা, আমি তোমায় ভালোবাসি..</p>
	                 </div>
	                 <a href="#" class="news_type_overlay_link"></a>
                  </div>
                  <div class="see_more">
                    <a href="#" class="" style="border-top: 2px solid #F8921A;">আরও</a>
                  </div>
                </div>
              </div>
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
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="card" style="width: ;">
                  <div class="card_header">
                    <h3 style="background-color: #A8A9AB"><span>ঊনিশকুড়ি</span></h3>
                  </div>
                  <div class="news_type_overlay">
	                 <img class="card-img-top img-responsive" src="https://via.placeholder.com/320x200" alt="News Image">
	                 <div class="card-body">
	                   <h4 class="card-title" style="color: #0BB14D">আমার সোনার বাংলা</h4>
	                    <p class="card-text">আমার সোনার বাংলা, আমি তোমায় ভালোবাসি..</p>
	                 </div>
	                 <a href="#" class="news_type_overlay_link"></a>
                  </div>
                  <div class="see_more">
                    <a href="#" class="" style="border-top: 2px solid #EA1C24;">আরও</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="card" style="width: ;">
                  <div class="card_header">
                    <h3 style="background-color: #09B14B;"><span>স্টেডিয়াম</span></h3>
                  </div>
                  <div class="news_type_overlay">
	                <img class="card-img-top img-responsive" src="https://via.placeholder.com/320x200" alt="News Image">
	                 <div class="card-body">
	                   <h4 class="card-title" style="color: #0BB14D">আমার সোনার বাংলা</h4>
	                    <p class="card-text">আমার সোনার বাংলা, আমি তোমায় ভালোবাসি..</p>
	                 </div>
	                 <a href="#" class="news_type_overlay_link"></a>
                  </div>
                  <div class="see_more">
                    <a href="#" class="" style="border-top: 2px solid #E6E600;">আরও</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                

                <div class="card">
                  <div class="card_header">
                    <h3 style="background-color: #00B9F2;"><span>ইশকুল</span></h3>
                  </div>
                  <div class="news_type_overlay">
	                <img class="card-img-top img-responsive" src="https://via.placeholder.com/320x200" alt="News Image">
	                 <div class="card-body">
	                   <h4 class="card-title" style="color: #0BB14D">আমার সোনার বাংলা</h4>
	                    <p class="card-text">আমার সোনার বাংলা, আমি তোমায় ভালোবাসি..</p>
	                 </div>
	                 <a href="#" class="news_type_overlay_link"></a>
                  </div>
                  <div class="see_more">
                    <a href="#" class="" style="border-top: 2px solid #F8921A;">আরও</a>
                  </div>
                </div>


              </div>
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
      					<a href="#">
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
      					<a href="#">
      						<img src="images/youtube.png">
      						<span class="social_media_title">ইউটিউবে প্রজাপতি</span>
      					</a>
      				</div>
      			</div>
      		</div>
      	</div>
      </section>


<?php
get_footer();