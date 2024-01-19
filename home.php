
<?php get_header();?>

    <main class="content">
        <!-- mainvisual -->
        <section id="mv">
            <div id="mv-img">
                <div class="mv-carousel">
                    <div><img src="<?php echo get_template_directory_uri(); ?>/img/mv1.jpg" alt=""></div>
                    <div><img src="<?php echo get_template_directory_uri(); ?>/img/mv2.jpg" alt=""></div>
                    <div><img src="<?php echo get_template_directory_uri(); ?>/img/mv3.jpg" alt=""></div>
                    <div><img src="<?php echo get_template_directory_uri(); ?>/img/mv4.jpg" alt=""></div>
                </div>
            </div>

            <div id="mv-container">
                <div id="mv-text">
                    <p>web design, graphic design, travel, coding and more..</p>
                </div>
    
                <div id="mv-news">
                    <div id="mv-news-top">
                        <h1>what's new</h1>
                        <a href="#">all view</a>
                    </div>
                    
                    <?php
                        //取得したい投稿記事などの条件を引数として渡す
                        $args = array(
                            // 投稿タイプ
                            'post_type'      => 'post',
                            // カテゴリー名
                            'category_name' => 'news',
                            // 1ページに表示する投稿数
                            'posts_per_page' => 2,
                        );
                        // データの取得
                        $posts = get_posts($args);
                    ?>

                    <?php foreach($posts as $post): ?>
                    <?php setup_postdata($post); ?>
                    
                    <div>
                        <ul id="mv-news-content">
                            <a href="<?php echo get_permalink(); ?>">
                                <li class="mv-news-item">
                            
                                        <p class="mv-news-date">
                                        
                                                <?php echo get_the_date(); ?>
                                            
                                        </p>
                                    
                                        <p class="mv-news-point">|</p>
                                    
                                        <p class="mv-news-text">
                                            <?php the_title(); ?>
                                        </p>
                                    
                                </li>
                            </a>
                        </ul>  
                    </div>                                                             
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </section>
        <!-- /mainvisual -->

        <!-- about -->
        <section id="about">
            <div class="about-content">
                <h1 class="sec-title">
                    .<br>
                    わたしの<br>
                    こと
                </h1>

                <p class="sub-title">about</p>

                <p class="text">
                    MAHO / Web Designer<br>
                    大学卒業後、新卒で旅行会社に就職。<br>
                    商品企画からカタログの紙面作成まで一連の業務を担当。<br>
                    丸4年で退職し、IT企業のソフトウェアエンジニアに転職。<br>
                    <br>
                    その後、プログラミングスクールにて、<br>
                    コーディングとWebデザインの技術を学び、<br>
                    現在はフリーランスのWebデザイナーとして活動中。<br>
                    <br>
                    単なるデザイナーではなく、<br>
                    一緒に課題を解決していくパートナーを目指します。<br>
                    新しい出会いを楽しみにしております。
                </p>

                <div class="link">
                    <a href="#">my profile</a>
                </div>
            </div>

            <div class="about-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/about.jpg" alt="">
            </div>
        </section>
        <!-- /about -->

        <!-- skill -->
        <section id="skill">
            <div id="skill1">
                <h1 class="sec-title">
                    Webデザイナーです
                </h1> 
    
                <div class="design-img">
                    <div><img src="<?php echo get_template_directory_uri(); ?>/img/skill_html.jpg" alt=""></div>
                    <div><img src="<?php echo get_template_directory_uri(); ?>/img/skill_css.jpg" alt=""></div>
                    <div><img src="<?php echo get_template_directory_uri(); ?>/img/service_all.jpg" alt=""></div>
                </div>
                
                <div class="link">
                    <a href="#">view more</a>
                </div>
    
                <div class="text">
                    <p>
                        色彩豊かなデザインから、モードでシンプルなデザインまで。<br>
                        デザインから構築までワンストップで担当できるWEBサイト制作を目指し、<br>
                        コーディングやLP作成などのお仕事を承っております。   
                    </p>
                </div>    
            </div>
    
            <div id="skill2">
                <h1 class="sec-title">
                    skill
                </h1> 
    
                <div class="skill-img">
                    <div><img src="<?php echo get_template_directory_uri(); ?>/img/skills/html.png" alt=""></div>
                    <div><img src="<?php echo get_template_directory_uri(); ?>/img/skills/css.png" alt=""></div>
                    <div><img src="<?php echo get_template_directory_uri(); ?>/img/skills/js.png" alt=""></div>
                    <div><img src="<?php echo get_template_directory_uri(); ?>/img/skills/jquery.png" alt=""></div>
                    <div><img src="<?php echo get_template_directory_uri(); ?>/img/skills/wordpress.png" alt=""></div>
                    <div><img src="<?php echo get_template_directory_uri(); ?>/img/skills/photoshop.png" alt=""></div>
                    <div><img src="<?php echo get_template_directory_uri(); ?>/img/skills/xd.png" alt=""></div>
                    <div></div>
                </div>
    
                <div class="link">
                    <a href="#">view more</a>
                </div>
            </div>
        </section>
        <!-- /skill -->

        <!-- works -->
        <section id="works">
            <div id="works-title">
                <h1 class="sec-title">
                    my works
                </h1>

                <p>pick up</p>
            </div>
            
            <div id="works-content">
                <div id="works-list" class="works-carousel">
                    <li class="works-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/works/01.png" alt="">
                        
                        <h1 class="works-list-number">
                            01
                        </h1>
                        
                        <div class="works-list-title">
                            <h1>HAIR SALON</h1>
                            <p>web | 2023</p>
                        </div>

                        <p class="text">
                            美容室のデモサイトを作成しました。
                        </p>
                    </li>
                </div>
            </div>

            <div class="link">
                <a href="#">all view</a>
            </div>
        </section>
        <!-- /works -->

        <!-- service -->
        <section id="service">
            <div id="service-title">
                <h1 class="sec-title">
                    service
                </h1>

                <p>私にできること</p>
            </div>

            <div class="service-container">
                <div id="service-list" class="row col-12">
                    <li class="col-lg-3">
                        <p>ホームページ作成</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/service/01.jpg" alt="">
                    </li>

                    <li class="col-lg-3">
                        <p>HTMLコーディング</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/service/02.jpg" alt="">
                    </li>

                    <li class="col-lg-3">
                        <p>CSSコーディング</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/service/03.jpg" alt="">
                    </li>

                    <li class="col-lg-3">
                        <p>JavaScriptコーディング</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/service/04.jpg" alt="">
                    </li>

                    <li class="col-4">
                        <p>WEBサイト修正</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/service/05.jpg" alt="">
                    </li>

                    <li class="col-4">
                        <p>Wordpressカスタマイズ</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/service/06.jpg" alt="">
                    </li>

                    <li class="col-4">
                        <p>LP作成</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/service/07.jpg" alt="">
                    </li>

                    <li class="col-4">
                        <p>WEB予約サイト</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/service/08.jpg" alt="">
                    </li>
                </div>
            </div>
        </section>
        <!-- /service -->

        <!-- contact -->
        <section id="contact">
            <h1 class="sec-title">
                contact
            </h1>

            <div id="contact-bg">
                <div id="contact-btn">
                    <a href="#">
                        <p>クラウドソーシングから<br>
                            ご連絡お願いいたします</p>
                    </a>
                </div>
    
                <p class="text">
                    まずはお気軽にお問い合わせください。<br>
                    お仕事のご依頼、ご相談など<br>
                    お問合わせお待ちしております。
                </p>
            </div>
        </section>
        <!-- /contact -->
    </main>

<?php get_footer(); ?>