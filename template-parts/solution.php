<?php
$solution = new WP_Query(array(

    'post_type' => 'solution',
    'posts_per_page' => '3'

));
?>

<?php if ($solution->have_posts()) : ?>
    <!-- Solution
  ========================================================== -->
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
                    <?php while ($solution->have_posts()) : $solution->the_post(); ?>
                        <div class="solution-card">
                            <!-- BG -->
                            <div class="solution-card-bg" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
                            <!-- Detail -->
                            <div class="solution-card-detail">
                                <i class="fa-solid fa-layer-group"></i>
                                <h1><?php echo get_the_title(); ?></h1>
                                <p><?php echo get_the_content(); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>