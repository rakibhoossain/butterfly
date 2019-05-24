<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package butterfly
 */

get_header();
?>
<div class="container breadcrumb-container">
	<?php magazil_breadcrumbs(); ?>
</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section id="single_news">
        		<div class="container">
        			<div class="row">
        				<div class="col-md-9">
							<?php
							while ( have_posts() ) : the_post();
								get_template_part( 'template-parts/content', get_post_type() );

								the_posts_pagination( array(
									'prev_text' => '<i class="fa fa-arrow-left"></i><span class="screen-reader-text">' . __( 'Previous Page', 'butterfly' ) . '</span>',
									'next_text' => '<span class="screen-reader-text">' . __( 'Next Page', 'butterfly' ) . '</span><i class="fa fa-arrow-right"></i>' ,
									'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'butterfly' ) . ' </span>',
								) );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
							endwhile; // End of the loop.
							?>
        				</div>
        				<div class="col-md-3">
        					<?php get_sidebar();?>
        				</div>
        			</div>

        		</div>
      		</section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();