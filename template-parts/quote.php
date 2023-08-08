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