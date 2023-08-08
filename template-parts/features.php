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
                        <p>
                            <?php echo get_the_content(); ?>
                        </p>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>