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