<!DOCTYPE html>
<html lang="en">

<?php get_header(); ?>

<body>
  <!-- Navbar
    ===================================================== -->
  <nav id="navbar">
    <div class="container">
      <!-- Navigation -->
      <div class="navbar-navigation clearfix">
        <!-- Brand -->
        <div class="navbar-brand">

          <?php echo get_custom_logo(); ?>

        </div>
        <div class="navbar-navigation-elements">
          <div class="container">
            <!-- Social -->
            <div class="navbar-navigation-social">
              <ul>
                <li class="navbar-divider">
                  <span></span>
                </li>
                <li>
                  <a href="#">
                    <i class="fa-brands fa-github"></i>
                    <span>GitHub</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa-brands fa-twitter"></i>
                    <span>Twitter</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa-brands fa-instagram"></i>
                    <span>Instagram</span>
                  </a>
                </li>
              </ul>
            </div>
            <!-- Links -->
            <div class="navbar-navigation-links">
              <?php

              wp_nav_menu(array(
                'theme_location'  => 'primary',
                'depth'           => 3, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => '',
                'menu'            => '',
                'menu_class'      => '',
              ));

              ?>
            </div>
          </div>
        </div>
        <!-- Navigation Links Mobile -->
        <div class="navbar-links-mobile">
          <div class="navbar-menu-mobile">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <?php
  $showcase_posts = new WP_Query(array(

    'post_type' => 'showcase',
    'posts_per_page' => '3'

  ));
  ?>

  <?php if ($showcase_posts->have_posts()) : ?>
    <!-- Show-case
    ====================================================== -->
    <section id="showcase">
      <!-- Content -->
      <div class="showcase-content">
        <!-- Sliders -->
        <div class="showcase-content-sliders">
          <!-- Slide-Changer -->
          <div class="showcase-content-slide-changer">
            <!-- Left Side -->
            <div class="showcase-slide-changer-left">
              <a href=""><i class="fa-thin fa-chevron-left"></i></a>
            </div>
            <!-- Right Side -->
            <div class="showcase-slide-changer-right">
              <a href=""><i class="fa-thin fa-chevron-right"></i></a>
            </div>
          </div>

          <?php while ($showcase_posts->have_posts()) : $showcase_posts->the_post(); ?>
            <!-- Slide -->
            <div class="showcase-slide">
              <div class="showcase-slide-bg" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
              <div class="showcase-slide-detail">
                <!-- Pre-heading -->
                <div class="showcase-slide-preheading">
                  <span>BY <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo get_the_author(); ?></a></span>
                </div>
                <!-- Heading -->
                <div class="showcase-slide-heading">
                  <h1><?php echo get_the_title(); ?></h1>
                </div>
                <!-- Sub-heading -->
                <div class="showcase-slide-subheading">
                  <p><?php echo get_the_content(); ?></p>
                </div>
                <!-- Button -->
                <div class="showcase-slide-button">
                  <a href="<?php echo get_the_permalink(); ?>">Read more</a>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <!-- Product
    =============================================================== -->
  <section id="product">
    <div class="container">
      <div class="product-heading">
        <h1>Landing page variants</h1>
        <p>
          Incline comes with several professionally designed landing pages
          that can be easily adapted for any project.
        </p>
      </div>
      <div class="product-products">
        <!-- Product -->
        <div class="the-product">
          <a href="">
            <img src="/img/45.png" alt="" />
            <h1>App landing</h1>
            <p>
              You can use this page to promote your web or mobile application.
            </p>
          </a>
        </div>
        <!-- Product -->
        <div class="the-product">
          <a href="">
            <img src="/img/90.png" alt="" />
            <h1>Company landing</h1>
            <p>You can use this page to promote your company.</p>
          </a>
        </div>
        <!-- Product -->
        <div class="the-product">
          <a href="">
            <img src="/img/57.png" alt="" />
            <h1>Fullpage scrolling</h1>
            <p>A landing page created with fullscreen scrolling sections.</p>
          </a>
        </div>
        <!-- Product -->
        <div class="the-product">
          <a href="">
            <img src="/img/44.png" alt="" />
            <h1>Product landing</h1>
            <p>You can use this page to promote your product or a store.</p>
          </a>
        </div>
        <!-- Product -->
        <div class="the-product">
          <a href="">
            <img src="/img/46.png" alt="" />
            <h1>Real estate landing</h1>
            <p>You can use this page to promote your real estate.</p>
          </a>
        </div>
        <!-- Product -->
        <div class="the-product">
          <a href="">
            <img src="/img/91.png" alt="" />
            <h1>Restaurant landing</h1>
            <p>You can use this page to promote your restaurant.</p>
          </a>
        </div>
        <!-- Product -->
        <div class="the-product">
          <a href="">
            <img src="/img/43.png" alt="" />
            <h1>Service landing</h1>
            <p>
              You can use this page to promote your business or a service.
            </p>
          </a>
        </div>
        <!-- Product -->
        <div class="the-product">
          <a href="">
            <img src="" alt="" />
            <h1>Coming soon</h1>
            <p>
              Feel free to contact us with your ideas about new pages and
              components.
            </p>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="special-products">
    <div class="container">
      <!-- Heading -->
      <div class="special-products-top-line"></div>
      <!-- Title -->
      <div class="special-products-heading">
        <h1>Header variants</h1>
        <p>
          Polish your landing page with one of the header options below to
          impress your visitors at first glance.
        </p>
      </div>
      <!-- Products -->
      <div class="special-products-posts">
        <!-- Post -->
        <div class="special-products-post">
          <a href="">
            <img src="/img/51.png" alt="" />
            <h1>Carousel header</h1>
            <p>
              Switch between multiple slides with full cover background
              images.
            </p>
          </a>
        </div>
        <!-- Post -->
        <div class="special-products-post">
          <a href="">
            <img src="/img/52.png" alt="" />
            <h1>Parallax header</h1>
            <p>
              Good old parallax effect to add even more visual interest to
              your page.
            </p>
          </a>
        </div>
        <!-- Post -->
        <div class="special-products-post">
          <a href="">
            <img src="/img/53.png" alt="" />
            <h1>Video header</h1>
            <p>Local video background you can optionally loop if needed.</p>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Quote Section -->
  <section id="quote">
    <div class="container">
      <div class="quote-icon">
        <i class="fa-solid fa-quote-left"></i>
      </div>
      <div class="quote-title">
        <h5>
          This theme is a Swiss Army knife of Bootstrap themes. Built with
          components in mind, it can be easily adjusted to create layouts of
          any complexity within a few minutes.
        </h5>
        <p>Yuri Gamin, Moscow</p>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section id="features">
    <div class="container">
      <!-- Heading -->
      <div class="features-heading">
        <h1>Key theme features</h1>
        <p>
          Incline can be used to create anything from a small marketing page
          to a sophisticated website.
        </p>
      </div>
      <!-- Posts -->
      <div class="features-posts">
        <!-- Post -->
        <div class="features-post">
          <i class="fa-solid fa-mobile-screen-button"></i>
          <h1>Fully responsive</h1>
          <p>
            Looks great on all major browsers, tablets and mobile devices.
          </p>
        </div>
        <!-- Post -->
        <div class="features-post">
          <i class="fa-solid fa-shield-halved"></i>
          <h1>Built with SASS</h1>
          <p>Easily adjustable with tons of SASS variables included.</p>
        </div>
        <!-- Post -->
        <div class="features-post">
          <i class="fa-solid fa-headset"></i>
          <h1>Free support</h1>
          <p>
            Feel free to contact us with any feature requests or bug reports.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Documentation -->
  <section id="document">
    <div class="container">
      <!-- image -->
      <div class="document-image">
        <img src="/img/47.jpg" alt="" />
      </div>
      <!-- Details -->
      <div class="document-details">
        <div class="document-details-heading">
          <h1>Intuitive workflow</h1>
        </div>
        <!-- Detail -->
        <div class="document-detail">
          <i class="fa-solid fa-chevron-right"></i>
          <p>
            Speed up your development process with Gulp and BrowserSync live
            browser reload
          </p>
        </div>
        <!-- Detail -->
        <div class="document-detail">
          <i class="fa-solid fa-chevron-right"></i>
          <p>
            Speed up your development process with Gulp and BrowserSync live
            browser reload
          </p>
        </div>
        <!-- Detail -->
        <div class="document-detail">
          <i class="fa-solid fa-chevron-right"></i>
          <p>
            Speed up your development process with Gulp and BrowserSync live
            browser reload
          </p>
        </div>
        <div class="document-button">
          <a href="">Documentation</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Solution -->
  <section id="solution">
    <div class="container">
      <!-- Heading -->
      <div class="solution-heading">
        <h1>Ultimate solution</h1>
        <p>
          Easily create a website of any complexity with dozens of pages and
          independent components for any purpose.
        </p>
      </div>
      <!-- Content -->
      <div class="solution-content">
        <!-- Cards -->
        <div class="solution-cards">
          <!-- Card -->
          <div class="solution-card">
            <!-- BG -->
            <div class="solution-card-bg" style="background-image: url(/img/24.jpg)"></div>
            <!-- Detail -->
            <div class="solution-card-detail">
              <i class="fa-solid fa-layer-group"></i>
              <h1>Support pages</h1>
              <p>
                Finish off your website with multiple support pages included
                into the package.
              </p>
            </div>
          </div>

          <!-- Card -->
          <div class="solution-card">
            <!-- BG -->
            <div class="solution-card-bg" style="background-image: url(/img/22.jpg)"></div>
            <!-- Detail -->
            <div class="solution-card-detail">
              <i class="fa-solid fa-check-double"></i>
              <h1>Landing pages</h1>
              <p>
                Beautiful marketing pages to help you promote your product or
                a service.
              </p>
            </div>
          </div>

          <!-- Card -->
          <div class="solution-card">
            <!-- BG -->
            <div class="solution-card-bg" style="background-image: url(/img/15.jpg)"></div>
            <!-- Detail -->
            <div class="solution-card-detail">
              <i class="fa-solid fa-puzzle-piece"></i>
              <h1>Custom components</h1>
              <p>Combine dozens of components to create unique layouts.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Pricing -->
  <section id="pricing">
    <div class="container">
      <!-- Heading -->
      <div class="pricing-heading">
        <h1>Pricing options</h1>
        <p>Secure payment via Stripe or Paypal. 100% money back guarantee.</p>
      </div>
      <!-- Planes -->
      <div class="pricing-planes">
        <!-- Plane -->
        <div class="pricing-plane">
          <!-- plane heading -->
          <div class="pricing-plane-heading">
            <h1>Standard license</h1>
            <h2>$49.00</h2>
          </div>
          <!-- plane details -->
          <div class="pricing-plane-detail">
            <i class="fa-solid fa-chevron-right"></i>
            <p>Use for a single product</p>
          </div>
          <div class="pricing-plane-detail">
            <i class="fa-solid fa-chevron-right"></i>
            <p>Non-paying users only</p>
          </div>
          <div class="pricing-plane-detail">
            <i class="fa-solid fa-chevron-right"></i>
            <p>Read <a href="">full description</a></p>
          </div>
          <!-- plane button -->
          <div class="pricing-plane-button">
            <a href="">Purchase Now</a>
          </div>
        </div>

        <!-- Plane -->
        <div class="pricing-plane">
          <!-- plane heading -->
          <div class="pricing-plane-heading">
            <h1>Extended license</h1>
            <h2>$490.00</h2>
          </div>
          <!-- plane details -->
          <div class="pricing-plane-detail">
            <i class="fa-solid fa-chevron-right"></i>
            <p>Use for a single product</p>
          </div>
          <div class="pricing-plane-detail">
            <i class="fa-solid fa-chevron-right"></i>
            <p>Paying users allowed</p>
          </div>
          <div class="pricing-plane-detail">
            <i class="fa-solid fa-chevron-right"></i>
            <p>Read <a href="">full description</a></p>
          </div>
          <!-- plane button -->
          <div class="pricing-plane-button">
            <a href="">Purchase Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Download -->
  <section id="download">
    <div class="container">
      <div class="download-details">
        <h1>Download it from the Bootstrap marketplace</h1>
        <p>
          Each theme featured at the Bootstrap marketplace has been reviewed
          by Bootstrap's creators. Six month technical support by the theme
          author is provided.
        </p>
      </div>
      <div class="download-button">
        <a href="">Purchase Now</a>
      </div>
    </div>
  </section>

  <!-- Footer
==================================================================== -->
  <footer id="footer">
    <div class="container">
      <!-- Left Side -->
      <div class="footer-left-side">
        <div class="footer-logo">
          <a href="">Logo</a>
        </div>
        <div class="footer-copyright">
          <p>© Copyright 2023 Simpleqode. All rights reserved.</p>
        </div>
      </div>
      <!-- Right Side -->
      <div class="footer-right-side">
        <!-- Links -->
        <div class="footer-links">
          <ul>
            <li><a href="">Terms and conditions</a></li>
            <li><a href="">Privacy policy</a></li>
            <li><a href="">Contact us</a></li>
          </ul>
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