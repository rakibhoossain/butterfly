<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package butterfly
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				butterfly_posted_on();
				butterfly_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php butterfly_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'butterfly' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'butterfly' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php butterfly_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->




      <section id="single_news">
        <div class="container">
          <div id="publish_info">
            <div class="date_time">
              <p>
                <span class="date">১৫ মে ২০১৯</span>, 
                <span class="time">১৭:০০</span>
              </p>
            </div>
            <div class="updated_date_time">
              <p>
                <span class="update">আপডেট:</span> 
                <span class="updated_date">১৫ মে ২০১৯</span>, <span class="updated_time">১৭:৪৮</span>
              </p>
            </div>
          </div>
          <div id="news_details">
            <div class="single_news_header">
              <h3 class="single_news_title">স্মৃতিতে হৃদয়</h3>
            </div>
            <div class="news_content">
              <div class="single_news_img">
                <img src="https://via.placeholder.com/600x360" class="img-responsive">
              </div>
              <div class="news_text">
                <p class="ntext">খুলনা কিশোর আলো বুক ক্লাবের বিভাগীয় সমন্বয়ক মাহমুদুল হাসান পড়তো খুলনা পাবলিক কলেজে। সবাই ওকে হৃদয় নামেই ডাকতো। বই পড়তে খুব ভালোবাসতো। হুমায়ূন আহমেদ ছিলেন তার প্রিয় লেখক। বুক ক্লাবে সবার কাছে জনপ্রিয় ছিল সে। একাদশ শ্রেণির বিজ্ঞান বিভাগের শিক্ষার্থী হৃদয় জাতীয় পর্যায়ে বিতর্কে চ্যাম্পিয়নও হয়ে ছিল। গত ১৯ এপ্রিল শুক্রবার দুপুরে বিদ্যুৎস্পৃষ্ট হয়ে মৃত্যুবরণ করে এই মেধাবী কিশোর। তার অকাল মৃত্যুতে স্মৃতিচারণ করেছে খুলনা কিআ বুক ক্লাবের সদস্যরা ও সহকর্মীরা।</p>
              </div>
              <div class="single_news_img">
                <img src="https://via.placeholder.com/600x360" class="img-responsive">
              </div>
              <div class="news_text">
                <h4 class="news_highlight_text">পিচ্চি বলে আর কেউ ডাকবে না </h4>
                <p class="ntext">
                খুলনা কিশোর আলো বুক ক্লাবের বিভাগীয় সমন্বয়ক মাহমুদুল হাসান পড়তো খুলনা পাবলিক কলেজে। সবাই ওকে হৃদয় নামেই ডাকতো। বই পড়তে খুব ভালোবাসতো। হুমায়ূন আহমেদ ছিলেন তার প্রিয় লেখক। বুক ক্লাবে সবার কাছে জনপ্রিয় ছিল সে। একাদশ শ্রেণির বিজ্ঞান বিভাগের শিক্ষার্থী হৃদয় জাতীয় পর্যায়ে বিতর্কে চ্যাম্পিয়নও হয়ে ছিল। গত ১৯ এপ্রিল শুক্রবার দুপুরে বিদ্যুৎস্পৃষ্ট হয়ে মৃত্যুবরণ করে এই মেধাবী কিশোর। তার অকাল মৃত্যুতে স্মৃতিচারণ করেছে খুলনা কিআ বুক ক্লাবের সদস্যরা ও সহকর্মীরা।

                পিচ্চি বলে আর কেউ ডাকবে না

                মাহমুদুল হাসান হৃদয়। আমার কাছে সে হৃদু ভাই। প্রথম যেদিন বুক ক্লাবে গেলাম, পরিচিতি পর্বে চিকন সুরে একজন বলে উঠল মাহমুদুল হাসান হৃদয়, এসএসসি পরীক্ষার্থী, খুলনা পাবলিক কলেজ।

                কে যেন বলেছিল কাল তো ভাইয়ের পরীক্ষা শেষ, দেখেন তো ভাইয়ের পেছনে পাখা গজাল না তো? বুক ক্লাবের মে মাসের সভায়, ভাই আবার তোরা কিপটে হ বইটি রিভিউ করেন। ভাইয়ার বুক রিভিউ সত্যি অসাধারণ ছিল। যে বইটা ভাইয়া রিভিউ করতেন সেই বইটা পড়ার প্রতি নেশা ধরে যেত। খুলনা কিআ বুক ক্লাবের এক বছর পূর্তি উৎসবে একসঙ্গে কাজ করা, হাসি-তামাশা মজা সবই এখন স্মৃতি। আমাকে ভাইয়া পিচ্চি পৃথাপু বলে ডাকতেন। আমি তাঁর কাছে প্রেরণা পাই অ্যাম্বিগ্রাম করার। প্রথমবার তাঁর কাছে সাহায্য চাই। সব সময় ভাইয়া হাসি মুখ নিয়ে থাকতেন। জীবনটাকে নতুনভাবে ভালোবাসতে শিখিয়েছিলেন ভাইয়া। ভাইয়াকে খুব জ্বালাতন করতাম। ভাইয়া এটা দেখিয়ে দেন, পারি না। ভাই, আপনি আজ আমাদের বোঝালেন, মানুষ বাঁচে তার কর্মের মাধ্যমে, বয়সের মাধ্যমে নয়। ভাইয়া আমার জন্মদিনের চকলেটটা তো আপনাকে আর দেওয়া হলো না। ছবি তোলা হলো না। ইচ্ছে ছিল পত্রিকায় আপনার সাফল্যের ছবি দেখিয়ে বলব, দেখো, এই যে আমাদের হৃদু ভাই। ভাইয়া অনেক কিছু শিখেছিলাম আপনার কাছে। আরও যে বাকি ছিল! আমাদের এবারের দ্বিতীয় বর্ষপূর্তি উৎসবে একসঙ্গে কাজও করা হলো না। পিচ্চি বলে আর কেউ ডাকবে না। ওপারে ভালো থেকো ভাইয়া!</p>
              </div>
            </div>
          </div>
          <div id="news_sidebar">
              <ul class="news_sidebar_menu">
                <li>
                  <div class="sidebar_content">
                    <img src="https://via.placeholder.com/120x80" class="sidebar_img">
                      <h4 class="sidebar_title">আমার সোনার বাংলা</h4>
                  </div>
                  <a href="#" class="sidebar_menu_overlay"></a>
                </li>
                <li>
                  <div class="sidebar_content">
                    <img src="https://via.placeholder.com/120x80" class="sidebar_img">
                      <h4 class="sidebar_title">আমার সোনার বাংলা</h4>
                  </div>
                  <a href="#" class="sidebar_menu_overlay"></a>
                </li>
                <li>
                  <div class="sidebar_content">
                    <img src="https://via.placeholder.com/120x80" class="sidebar_img">
                      <h4 class="sidebar_title">আমার সোনার বাংলা</h4>
                  </div>
                  <a href="#" class="sidebar_menu_overlay"></a>
                </li>
                <li>
                  <div class="sidebar_content">
                    <img src="https://via.placeholder.com/120x80" class="sidebar_img">
                      <h4 class="sidebar_title">আমার সোনার বাংলা</h4>
                  </div>
                  <a href="#" class="sidebar_menu_overlay"></a>
                </li>
                <li>
                  <div class="sidebar_content">
                    <img src="https://via.placeholder.com/120x80" class="sidebar_img">
                      <h4 class="sidebar_title">আমার সোনার বাংলা</h4>
                  </div>
                  <a href="#" class="sidebar_menu_overlay"></a>
                </li>
                <li>
                  <div class="sidebar_content">
                    <img src="https://via.placeholder.com/120x80" class="sidebar_img">
                      <h4 class="sidebar_title">আমার সোনার বাংলা</h4>
                  </div>
                  <a href="#" class="sidebar_menu_overlay"></a>
                </li>
              </ul>
            </div>
        </div>
      </section>