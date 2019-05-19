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
                <span class="date"><?php echo get_the_date( 'Y-m-d' ); ?></span>, 
                <span class="time"><?php the_time( 'H:i:s' ); ?></span>
              </p>
            </div>
            <div class="updated_date_time">
              <?php butterfly_post_update_on(); ?>
            </div>
          </div>
          <div id="news_details">

            <div class="single_news_header">
              <?php the_title( '<h3 class="single_news_title">', '</h3>' );?>
            </div>
            <div class="news_content">

              <?php if(has_post_thumbnail()){ 
                  $image_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'butterfly-large' );
                  $image = esc_url($image_url[0]);
                  $title = get_the_title();
                  printf('div class="single_news_img"><img class="card-img-top img-responsive" src="'.esc_url($image).'" alt="'.$title.'"></div>');
                }
              ?>

              <div class="news_text">
                <?php the_content(); ?>
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