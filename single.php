<?php get_header(); ?>
 
 <?php if(have_posts()) :?>
   <?php while (have_posts()) : the_post() ; ?>

    <!-- Home -->

    <div class="home">
        <?php
             $cat = get_the_category();
             $catname = $cat[0]->cat_name;
        ?>
        <div><?php echo $catname; ?></div>
    </div>

    <!-- Post 部分 -->
    <div class="course">
      <!-- Description -->
      <div class="calendar_month">
        <?php echo get_post_time('F'); ?>
      </div>
      <div class="calendar_day">
        <span><?php echo get_the_date('d'); ?></span>
      </div>

      <div class="calendar_hour">
        <?php echo post_custom('time'); ?>
      </div>

      <div class="news_detail_title">
        <?php the_title(); ?>
      </div>
                  
      <div class="news_post_meta">
        <?php the_content(); ?>
      </div>

      <div class="back_btn">
            <a href="<?php echo home_url(); ?>/category/news/">back</a>
      </div>
    </div>
    
    <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>
