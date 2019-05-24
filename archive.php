<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
							while ( have_posts() ) :
								the_post();
								get_template_part( 'template-parts/content', get_post_type() );
							endwhile; // End of the loop.
								the_posts_pagination( array(
									'prev_text' => '<i class="fa fa-arrow-left"></i><span class="screen-reader-text">' . __( 'Previous Page', 'magazil' ) . '</span>',
									'next_text' => '<span class="screen-reader-text">' . __( 'Next Page', 'magazil' ) . '</span><i class="fa fa-arrow-right"></i>' ,
									'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'magazil' ) . ' </span>',
								) );
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
