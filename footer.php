<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package butterfly
 */

?>
      <footer id="footer">
          <div class="container">
            <div class="row">
              
            <?php
              for($i=1;$i<=3;$i++) {
                if (is_active_sidebar("footer-".($i))) :
                  dynamic_sidebar("footer-".($i));
                endif;
              }
            ?>

            </div>
          </div>

          <p class="footer-text col-md-12 mt-5 text-center">
      <?php
        /* translators: 1: Theme name, 2: Theme author. */
        $theme_author = 'Rakib Hossain' ;
        $theme_author_url = 'https://facebook.com/prof.rakib';
        printf( esc_html__( 'Theme: %1$s by %2$s', 'butterfly' ), 'butterfly', '<a href="'. esc_url($theme_author_url).'">'.esc_html($theme_author).'</a>' );
      ?>
        </p>
      </footer>

  	</div> <!-- Wrapper end  -->


<?php wp_footer(); ?>
</body>
</html>
