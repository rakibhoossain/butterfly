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
      </footer>

  	</div> <!-- Wrapper end  -->


<?php wp_footer(); ?>
</body>
</html>
