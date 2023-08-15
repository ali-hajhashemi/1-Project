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
                  <p>&copy; Copyright <?php echo Date('Y'); ?> <strong><?php bloginfo('name'); ?></strong> All rights reserved.</p>
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


  <?php wp_footer(); ?>

  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script src="/main.js"></script>
  </body>

  </html>