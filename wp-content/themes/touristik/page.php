<?php get_header(); ?>
      <div class="main-content">
        <div class="content-wrapper">
          <div class="content">
          <div class="article-title title-page">
              <?php the_title() ?>
              PAGE
          </div>
          <?php 
            $args = array(
              'sort_order' => 'asc',
              'sort_column' => 'post_title',
              'hierarchical' => 0,
              'exclude' => '',
              'include' => '',
              'meta_key' => '',
              'meta_value' => '',
              'authors' => '',
              'child_of' => 0,
              'parent' => 5,
              'exclude_tree' => '',
              'number' => '',
              'offset' => 0,
              'post_type' => 'page',
              'post_status' => 'publish'
            );
            $recent_pages_array = get_pages($args); // получаем массив постов
            if ( $recent_pages_array ) :  
              foreach( $recent_pages_array as $page ){
                $post = get_post($page->ID);
                
                echo '<div class="article-info">';
                echo '<a href="' . get_page_link( $page->ID ) . '">'. esc_html($page->post_title) .'</a>';
                echo '<div class="post-date">';
                echo get_the_date( 'd.m.Y', $page);
                echo the_excerpt("Читать...", $page->ID);
                echo get_the_post_thumbnail( $page->ID, 'thumbnail' );
                echo '</div>
                    </div>';
              }
            ?>
            
            <?php  
              //echo '<a href="' . get_permalink( ) . '">' . the_title(). '</a>'; // выводим ссылку
              else : ?>
              <p>Записей нет.</p>
            <?php endif; ?>
            
          <div class="article-text">
          </div>
            <div class="page-navigation">
              <div class="page-navigation-wrap">
                <a href="#" class="page-navigation__prev-page">
                  <i class="icon icon-angle-double-left">
                  </i>
                    Предыдущая статья
                </a>
              </div>
              <div class="page-navigation-wrap">
                <a href="#" class="page-navigation__next-page">
                  Следующая статья
                  <i class="icon icon-angle-double-right"></i>
                </a>
              </div>
            </div>
          </div>
          
          <?php get_sidebar('true-side') ?>
        </div>
      </div>
<?php get_footer() ?>