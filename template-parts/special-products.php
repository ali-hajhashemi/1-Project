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