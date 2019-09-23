<?php get_header(); the_post(); ?>
<div class="main-content">
        <div class="content-wrapper">
          <div class="content">
            <div class="article-title title-page">
              О СЕРВИСЕ HOME
            </div>
            <img src="<?= get_stylesheet_directory_uri(); ?>/img/post_thumb/thumb_1.jpg" alt="Image поста" class="post-thumbnail__image">
            <div class="article-info">
              <div class="post-date"><?php the_date() ?></div>
            </div>
            <div class="article-text">
              <?php the_content() ?>
              
            </div>
            
          </div>
          <!-- sidebar-->
          <?php get_sidebar('true-side') ?>
          <?php get_sidebar('calendar') ?>

        </div>
      </div>
<?php get_footer() ?>