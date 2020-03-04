<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fliplet
 * @subpackage Fliplet_Support
 * @since 1.0.0
 */
?>
    <footer class="site-footer">
      <div class="menu-column">
        <h3>Company</h3>
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'footer-menu-company',
            'menu_class' => 'footer-menu'
          )
        );
        ?>
      </div>
      <div class="menu-column">
        <h3>Product links</h3>
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'footer-menu-product',
            'menu_class' => 'footer-menu'
          )
        );
        ?>
      </div>
      <div class="menu-column">
        <h3>Resources</h3>
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'footer-menu-resources',
            'menu_class' => 'footer-menu'
          )
        );
        ?>
      </div>
      <div class="menu-column">
        <h3>Stay in touch</h3>
        <ul id="social-menu" class="footer-menu">
          <li>
            <a class="social-ico" href="https://twitter.com/flipletapp" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri() . '/images/Twitter.png'; ?>" alt="twitter" width="25" height="24"></a>
          </li>
          <li>
            <a class="social-ico" href="https://www.linkedin.com/company/flipletapps/" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri() . '/images/Linkedin.png'; ?>" alt="Linkedin-1" width="25" height="24"></a>
          </li>
          <li>
          <a class="social-ico" href="https://www.facebook.com/Fliplet" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri() . '/images/Facebook.png'; ?>" alt="FB" width="25" height="24"></a>
          </li>
        </ul>
      </div>
    </footer>

  </div>

  <?php wp_footer(); ?>

</body>
</html>
