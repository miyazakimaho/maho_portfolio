<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>WALNUT</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="<?php echo get_template_directory_uri(); ?>https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/ress.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" media="all" rel="stylesheet" type="text/css" />
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri(); ?>https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LdCZFQpAAAAAJqhXfF3zO692IpOCx8wyGSzsfFn"></script>
    <?php wp_head(); ?>
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
                    <li><a href="<?php echo home_url(); ?>/category/news/">news</a></li>
                    <li><a href="/">about</a></li>
                    <li><a href="/">design</a></li>
                    <li><a href="/">skill</a></li>
                    <li><a href="/">service</a></li>
                    <li><a href="/">work</a></li>
                    <li>
                        <a href="/">
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