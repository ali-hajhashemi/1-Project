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