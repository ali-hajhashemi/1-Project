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



  <?php
  $services_posts = new WP_Query(array(

    'post_type' => 'services',
    'posts_per_page' => '-1'

  ));
  ?>

  <?php if ($services_posts->have_posts()) : ?>
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
          <?php while ($services_posts->have_posts()) : $services_posts->the_post(); ?>
            <div class="the-product">
              <a href="">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                <h1><?php echo get_the_title(); ?></h1>
                <p>
                  <?php echo get_the_content(); ?>
                </p>
              </a>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>




  <?php
  $special_posts = new WP_Query(array(

    'post_type' => 'special-services',
    'posts_per_page' => '-1'

  ));
  ?>

  <?php if ($special_posts->have_posts()) : ?>
    <!-- Special Products
  ============================================================================ -->

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
          <?php while ($special_posts->have_posts()) : $special_posts->the_post(); ?>
            <!-- Post -->
            <div class="special-products-post">
              <a href="">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                <h1><?php echo get_the_title(); ?></h1>
                <p>
                  <?php echo get_the_content(); ?>
                </p>
              </a>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>


  <?php
  $quote_post = new WP_Query(array(

    'post_type' => 'quote',
    'posts_per_page' => '1'

  ));
  ?>

  <?php if ($quote_post->have_posts()) : ?>
    <!-- Quote Section 
  ===================================================================-->
    <section id="quote">
      <div class="container">
        <div class="quote-icon">
          <i class="fa-solid fa-quote-left"></i>
        </div>
        <?php while ($quote_post->have_posts()) : $quote_post->the_post(); ?>
          <div class="quote-title">
            <h5>
              <?php echo get_the_content(); ?>
            </h5>
            <p><?php echo get_the_author(); ?></p>
          </div>
        <?php endwhile; ?>
      </div>
    </section>
  <?php endif; ?>


  <?php
  $features = new WP_Query(array(

    'post_type' => 'features',
    'posts_per_page' => '-1'

  ));
  ?>


  <?php if ($features->have_posts()) : ?>
    <!-- Features 
  ====================================================================-->
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
          <?php while ($features->have_posts()) : $features->the_post(); ?>
            <div class="features-post">
              <!-- Icone -->
              <i class="fa-solid fa-mobile-screen-button"></i>
              <!-- Title -->
              <h1><?php echo get_the_title(); ?></h1>
              <!-- Content -->
              <p><?php echo get_the_content(); ?></p>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

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