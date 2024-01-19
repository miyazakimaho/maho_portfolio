<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>WALNUT</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="css/ress.css" media="all" rel="stylesheet" type="text/css" />
    <link href="css/style.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script src="js/jquery.inview.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <!-- header -->
    <header>
        <div id="container">
            <h1 id="header-logo">
                MAHO<br>
                <span>Web Designer</span>
            </h1>

            <nav id="nav">
                <ul class="nav-list">
                    <li><a href="#about">about</a></li>
                    <li><a href="#skill1">design</a></li>
                    <li><a href="#skill2">skill</a></li>
                    <li><a href="#service">service</a></li>
                    <li><a href="#works">work</a></li>
                    <li>
                        <a href="#contact">
                            <p id="nav-item-contact">contact</p>
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="hamburger">
                <span></span>
                <span></span>
            </div>
        </div>
    </header>
    <!-- /header -->

    <main class="content">
        <!-- mainvisual -->
        <section id="mv">
            <div id="mv-img">
                <div class="mv-carousel">
                    <div><img src="img/mv1.jpg" alt=""></div>
                    <div><img src="img/mv2.jpg" alt=""></div>
                    <div><img src="img/mv3.jpg" alt=""></div>
                    <div><img src="img/mv4.jpg" alt=""></div>
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
                    
                    <ul id="mv-news-content">
                        <li class="mv-news-item">
                            <p class="mv-news-date">2023.08.29</p>
                            <p class="mv-news-point">|</p>
                            <p class="mv-news-text">2023年8月末現在：ご依頼受付状況</p>
                        </li>
    
                        <li class="mv-news-item">
                            <p class="mv-news-date">2023.03.25</p>
                            <p class="mv-news-point">|</p>
                            <p class="mv-news-text">2023年3月末現在：ご依頼受付状況</p>
                        </li>
                    </ul>
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
                <img src="img/about.jpg" alt="">
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
                    <div><img src="img/skill_html.jpg" alt=""></div>
                    <div><img src="img/skill_css.jpg" alt=""></div>
                    <div><img src="img/service_all.jpg" alt=""></div>
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
                    <div><img src="img/skills/html.png" alt=""></div>
                    <div><img src="img/skills/css.png" alt=""></div>
                    <div><img src="img/skills/js.png" alt=""></div>
                    <div><img src="img/skills/jquery.png" alt=""></div>
                    <div><img src="img/skills/wordpress.png" alt=""></div>
                    <div><img src="img/skills/photoshop.png" alt=""></div>
                    <div><img src="img/skills/xd.png" alt=""></div>
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
                        <img src="img/works/01.png" alt="">
                        
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
                        <img src="img/service/01.jpg" alt="">
                    </li>

                    <li class="col-lg-3">
                        <p>HTMLコーディング</p>
                        <img src="img/service/02.jpg" alt="">
                    </li>

                    <li class="col-lg-3">
                        <p>CSSコーディング</p>
                        <img src="img/service/03.jpg" alt="">
                    </li>

                    <li class="col-lg-3">
                        <p>JavaScriptコーディング</p>
                        <img src="img/service/04.jpg" alt="">
                    </li>

                    <li class="col-4">
                        <p>WEBサイト修正</p>
                        <img src="img/service/05.jpg" alt="">
                    </li>

                    <li class="col-4">
                        <p>Wordpressカスタマイズ</p>
                        <img src="img/service/06.jpg" alt="">
                    </li>

                    <li class="col-4">
                        <p>LP作成</p>
                        <img src="img/service/07.jpg" alt="">
                    </li>

                    <li class="col-4">
                        <p>WEB予約サイト</p>
                        <img src="img/service/08.jpg" alt="">
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

    <!-- footer -->
    <footer id="footer">
        <div id="footer-upper">

            <nav id="footer-nav">
                <ul id="footer-nav-list">
                    <li><a href="#about">about</a></li>
                    <li><a href="#skill1">design</a></li>
                    <li><a href="#skill2">skill</a></li>
                    <li><a href="#service">service</a></li>
                    <li><a href="#works">work</a></li>
                    <li>
                        <a href="#contact">
                            <p id="nav-item-contact">contact</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <div id="footer-lower">
            <div class="copyright">
                Icons by <a target="_blank" href="https://icons8.com">Icons8</a><br>
            </div>
        </div>
    </footer>
    <!-- /footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type='text/javascript' src="js/script.js"></script>
</body>
</html>