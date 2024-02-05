<?php get_header(); ?>

    <!-- Home -->

    <div class="home">
        <!-- titleを出力します -->
        <div><?php the_title(); ?></div>
    </div>

    <!-- Course -->

    <?php if (have_posts()) : //ループを実装する ?>
       <?php while (have_posts()) : the_post(); ?>
            <div class="page_contactform">
                <div class="row content-body">
                    <!-- Course Tabs -->
                    <div class="course_tabs_container">
                        <!-- Description -->
                        <div class="tab_panel">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>

    <?php endwhile; ?>
    <?php endif; ?>

    <?php get_footer(); ?>