<?php
$pricing = new WP_Query(array(

    'post_type' => 'pricing',
    'posts_per_page' => '3'

));
?>


<?php if ($pricing->have_posts()) : ?>
    <!-- Pricing 
  ========================================================================================-->
    <section id="pricing">
        <div class="container">
            <!-- Heading -->
            <div class="pricing-heading">
                <h1>Pricing options</h1>
                <p>Secure payment via Stripe or Paypal. 100% money back guarantee.</p>
            </div>
            <!-- Planes -->
            <div class="pricing-planes">
                <?php while ($pricing->have_posts()) : $pricing->the_post(); ?>
                    <!-- Plane -->
                    <div class="pricing-plane">
                        <!-- plane heading -->
                        <div class="pricing-plane-heading">
                            <h1><?php echo get_the_title(); ?></h1>
                            <h2><?php echo get_the_content(); ?></h2>
                        </div>
                        <!-- plane details -->
                        <div class="pricing-plane-detail">
                            <i class="fa-solid fa-chevron-right"></i>
                            <p><?php echo get_the_excerpt(); ?></p>
                        </div>
                        <div class="pricing-plane-detail">
                            <i class="fa-solid fa-chevron-right"></i>
                            <p><?php echo get_the_excerpt(); ?></p>
                        </div>
                        <div class="pricing-plane-detail">
                            <i class="fa-solid fa-chevron-right"></i>
                            <p><?php echo get_the_excerpt(); ?></p>
                        </div>
                        <!-- plane button -->
                        <div class="pricing-plane-button">
                            <a href="<?php echo get_the_permalink(); ?>">Purchase Now</a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>