<?php

// Add Header Section
get_header();

?>

<?php while (have_posts()) : the_post(); ?>

  <!-- Where
    ===================================================================== -->
  <div id="where">
    <div class="container">
      <!-- Content -->
      <div class="where-content">
        <!-- Navigation -->
        <div class="where-navigation">
          <!-- Left side -->
          <div class="where-navigation-left-side">
            <h1>Blog post</h1>
          </div>
          <!-- Right side -->
          <div class="where-navigation-right-side">
            <ul>
              <li>
                <a href="">Home</a>
              </li>
              <li>
                <i class="fa-solid fa-chevron-right"></i>
              </li>
              <li>
                <h1><?php echo get_the_title(); ?></h1>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Blog Post -->
  <section id="blog-post">
    <div class="container">
      <div class="blog-post-content">
        <!-- Heading -->
        <div class="blog-post-heading">
          <div class="blog-post-heading-writer">
            <div class="blog-post-heading-writer-avatar">
              <?php echo get_avatar(get_the_author_meta('ID')); ?>
            </div>

            <p>by <strong><?php the_author(); ?></strong> at <?php echo get_the_date('Y  M  d | H:m '); ?></p>
          </div>
          <div class="blog-post-heading-title">
            <h1><?php echo get_the_title(); ?></h1>
          </div>
        </div>
        <!-- Detail -->
        <div class="blog-post-detail">
          <div class="blog-post-detail-photo">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
            <p>
              <?php echo get_the_excerpt(); ?>
            </p>
          </div>
          <div class="blog-post-detail-sub">
            <?php the_content(); ?>
          </div>
        </div>
        <!-- Share -->
        <div class="blog-post-share">
          <h1>Share the post:</h1>
          <ul>
            <li>
              <a href=""><i class="fa-brands fa-twitter"></i></a>
            </li>
            <li>
              <a href=""><i class="fa-brands fa-facebook"></i></a>
            </li>
            <li>
              <a href=""><i class="fa-brands fa-instagram"></i></a>
            </li>
          </ul>
        </div>
        <!-- Comment -->
        <div class="blog-post-comment">
          <div class="blog-post-comment-heading">
            <h1>Reader's comments:</h1>
            <p>2 comments founded</p>
          </div>
          <!-- Add Comment -->
          <?php comments_template(); ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Hot comments -->
  <div class="blog-post-comments-hot-comments">
    <div class="container">
      <!-- Hot comment -->
      <div class="blog-post-comments-hot-comment">
        <div class="blog-post-comments-hot-comment-heading">
          <div class="blog-post-comments-hot-comment-heading-avatar">
            <img src="/img/16.jpg" alt="" srcset="" />
          </div>
          <div class="blog-post-comments-hot-comment-heading-detail">
            <p>by <strong>John Doe</strong> 5 hours ago</p>
          </div>
        </div>
        <div class="blog-post-comments-hot-comment-detail">
          <h1>Enhance your brand potential with giant advertising</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
      </div>

      <!-- Hot comment -->
      <div class="blog-post-comments-hot-comment">
        <div class="blog-post-comments-hot-comment-heading">
          <div class="blog-post-comments-hot-comment-heading-avatar">
            <img src="/img/18.jpg" alt="" srcset="" />
          </div>
          <div class="blog-post-comments-hot-comment-heading-detail">
            <p>by <strong>Jane Roe</strong> 5 hours ago</p>
          </div>
        </div>
        <div class="blog-post-comments-hot-comment-detail">
          <h1>Enhance your brand potential with giant advertising</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
      </div>

      <!-- Hot comment -->
      <div class="blog-post-comments-hot-comment">
        <div class="blog-post-comments-hot-comment-heading">
          <div class="blog-post-comments-hot-comment-heading-avatar">
            <img src="/img/17.jpg" alt="" srcset="" />
          </div>
          <div class="blog-post-comments-hot-comment-heading-detail">
            <p>by <strong>Judy Doe</strong> 5 hours ago</p>
          </div>
        </div>
        <div class="blog-post-comments-hot-comment-detail">
          <h1>Enhance your brand potential with giant advertising</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
      </div>
    </div>
  </div>

<?php endwhile; ?>

<?php

// Add Footer Section
get_footer();

?>