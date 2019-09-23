<!-- sidebar-->
<div class="sidebar">
<div class="sidebar__sidebar-item">
        
    <div class="sidebar-item__content">
    <?php if ( is_active_sidebar( 'true-side' ) ) : ?>
 
        <div id="true-side" class="sidebar">

            <?php dynamic_sidebar( 'true-side' ); ?>
            <?php dynamic_sidebar( 'calendar' ); ?>

        </div>
    </div>  
    <?php endif; ?>
</div>
<div class="sidebar__sidebar-item">
    <div class="sidebar-item__title">Категории</div>
    <div class="sidebar-item__content">
        <?php 
            $categories = get_terms( array(
                'taxonomy' => 'category',
                'hide_empty' => 'false',
                'parent' => 0
            ));
            if($categories) :
        ?>
        <ul class="category-list">
            <?php
                foreach( $categories as $category) : ?>
                    <li class="category-list__item"><a href="<?php echo get_term_link( $category ) ?>" class="category-list__item__link">
                        <?php echo $category->name ?></a>
                        <?php 
                            $categories2 = get_terms( array(
                                'taxonomy' => 'category',
                                'hide_empty' => 'false',
                                'parent' => $category->term_id
                            ));
                            if($categories2) :
                        ?>
                        <ul class="category-list__inner">
                            <?php
                                foreach( $categories2 as $category2) : ?>
                                    <li class="category-list__item"><a href="<?php echo get_term_link( $category2 ) ?>" class="category-list__item__link">
                                        <?php echo $category2->name ?></a>
                                        
                                    </li>
                                <?php endforeach ?>
                        </ul>
                        <?php endif ?>
                    </li>
                <?php endforeach ?>
        </ul>
        <?php endif ?>
    </div>
</div>

</div>