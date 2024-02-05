<?php get_header(); ?>

    <!-- Home -->

    <div class="home">
      <div class="breadcrumbs_container">
        <div class="image_header">
          <div class="header_info">
          <?php
               $cat = get_the_category();
               $catname = $cat[0]->cat_name;
             ?>
             <div><?php echo $catname; ?></div>
          </div>
        </div>
      </div>
    </div>

    <!-- news loop from here-->
    <div class="category-news">
        <hr />
        <?php if (have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
        <div class="category-news-list">   
            <div class="calendar_date">    
                <div class="calendar_month">
                    <?php 
                        echo get_post_time('F');
                    ?>
                </div>
                <div class="calendar_day">
                    <span>
                    <?php 
                        echo get_the_date('d');
                    ?>
                    </span>
                </div>
            </div>
            <div class="news_post_list">
                <div class="news_post_small_title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
                <div class="news_post_meta">
                    <ul>
                        <li>
                            <?php echo wp_trim_words( get_the_content() , 10, '...'); ?>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="open_btn">
                <a href="<?php the_permalink(); ?>">open</a>
            </div>
        </div>
        
        <hr />
        <?php endwhile; ?>
        <?php endif; ?>

        <div class="back_btn">
            <a href="/">back</a>
        </div>
    </div>
    
    <?php get_footer( ); ?>
