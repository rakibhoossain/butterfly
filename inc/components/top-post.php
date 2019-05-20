<?php


	$type 				= get_theme_mod( 'butterfly_top_post_type', 'post' );

	$page 				= get_theme_mod( 'butterfly_top_page', 0 );
	$post 				= get_theme_mod( 'butterfly_top_post', 0 );


			if( $type == 'page' ){

				$args = array('post_type' => 'page', 'post__in' => $page, 'no_found_rows' => 1, 'ignore_sticky_posts' => true, );

			}else if( $type == 'post' ){

				$args = array('post_type' => 'post', 'post__in' => $post, 'no_found_rows' => 1, 'ignore_sticky_posts' => true, );

			}

			$top_post_query = new wp_query( $args  );
			$count = (int)0;

			while ( $top_post_query->have_posts() ) : $top_post_query->the_post();
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
            wp_reset_postdata();
			wp_reset_query();
            $count=0;