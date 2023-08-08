  <!-- Footer
==================================================================== -->
  <footer id="footer">
      <div class="container">
          <!-- Left Side -->
          <div class="footer-left-side">
              <div class="footer-logo">
                  <a href=""><?php echo get_custom_logo(); ?></a>
              </div>
              <div class="footer-copyright">
                  <p>&copy; Copyright <?php echo Date('Y'); ?> <?php bloginfo('name'); ?> All rights reserved.</p>
              </div>
          </div>
          <!-- Right Side -->
          <div class="footer-right-side">
              <!-- Links -->
              <div class="footer-links">
                  <?php

                    wp_nav_menu(array(
                        'theme_location'  => 'footer',
                        'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
                        'container'       => '',
                        'menu'            => '',
                        'menu_class'      => '',
                    ));

                    ?>
              </div>
              <!-- Social -->
              <div class="footer-social">
                  <ul>
                      <li>
                          <a href=""><i class="fa-brands fa-github"></i></a>
                      </li>
                      <li>
                          <a href=""><i class="fa-brands fa-twitter"></i></a>
                      </li>
                      <li>
                          <a href=""><i class="fa-brands fa-instagram"></i></a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </footer>