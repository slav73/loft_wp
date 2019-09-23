<?php get_header(); ?>
<div class="main-content">
    <div class="content-wrapper">
        <div class="content">
            <h1>Поиск по: "<?php echo $_GET['s'];?>"</h1>
            <?php if (have_posts()) : 
                while (have_posts()) : the_post(); ?>
                <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                <?php the_excerpt(); ?>
                <?php endwhile; else: ?>
                <p>Поиск не дал результатов.</p>
            <?php endif;?>
        </div>
        <?php get_sidebar('true-side') ?>
        <?php get_sidebar('calendar') ?>
    </div>
</div>
        
 <?php get_footer(); ?>