<?php get_header() ?>
<div class="main-content">
    <div class="content-wrapper">
        <div class="content">
            <h1 class="title-page">Последние новости и акции из мира туризма FRONT PAGE</h1>
            <div class="posts-list">
            <?php 
            $recent_posts_array = get_posts(); // получаем массив постов
            foreach( $recent_posts_array as $recent_post_single ) : // для каждого поста из массива
                setup_postdata($recent_post_single); // устанавливаем данные

                echo '<!-- post-mini-->
                <div class="post-wrap">
                <div class="post-thumbnail">';
                
                //get_stylesheet_directory_uri(); 
                echo get_the_post_thumbnail( $recent_post_single->ID, 'thumbnail' );
                ?>
                    
                    </div>
                    <div class="post-content">
                        <div class="post-content__post-info">
                            <div class="post-date">
                                <?php echo get_the_date( 'd.m.Y', $recent_post_single);?>
                            </div>
                        </div>
                        <div class="post-content__post-text">
                            <div class="post-title">
                                <?php echo '<a href="' . get_permalink( $recent_post_single ) . '">' . $recent_post_single->post_title . '</a>'; ?>
                            </div>
                            <p>
                                <?php echo get_the_excerpt($recent_post_single->ID); ?>
                            </p>
                        </div>
                        <div class="post-content__post-control">
                        <?php echo '<a href="' . get_permalink( $recent_post_single ) . '" class="btn-read-post">Читать далее >></a>'; ?>
                        </div>
                    </div>
                </div>
                <!-- post-mini_end-->
            <?php endforeach; // конец цикла
            ?>
                
            </div>
            <div class="pagenavi-post-wrap">
                <?php echo paginate_links(); ?>
            </div>
        </div>
        <?php get_sidebar('true-side') ?>
        <?php get_sidebar('calendar') ?>
    </div>
</div>
<?php get_footer() ?>