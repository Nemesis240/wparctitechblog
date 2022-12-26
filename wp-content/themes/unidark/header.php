<!DOCTYPE html>
<html lang="en-US">
<head>
    <!-- Basic -->
    <meta charset="UTF-8">
    <title>UniDark</title>
    <meta name="keywords" content="HTML5 News Magazine Template"/>
    <meta name="description" content="Unidark - Ultimate News and Magazine Template">
    <meta name="author" content="designuptodate.com">
    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.png" sizes="32x32"/>
    <link rel="icon" href="assets/img/favicon.png" sizes="192x192"/>
    <link rel="apple-touch-icon-precomposed" href="assets/img/favicon.png"/>
    <meta name="msapplication-TileImage" content="assets/img/favicon.png"/>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <?php bloginfo( 'name' ); ?>
    <!-- Theme CSS -->
    <!-- <link href="assets/css/import-style.css" rel="stylesheet"> -->
    <?php wp_head(); ?>

    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> -->
</head>
<body class="home home-1 has-block-heading-line">

<!-- .site-wrapper -->
<div class="site-wrapper" >
    <!-- Site header -->
    <header class="site-header">
        <!-- Mobile header -->
        <div id="atbs-mobile-header" class="mobile-header visible-xs visible-sm">
            <div class="mobile-header__inner mobile-header__inner--flex">
                <div class="header-branding header-branding--mobile mobile-header__section text-left">
                    <div class="header-logo header-logo--mobile flexbox__item text-left">
                        <a href="index.html">
                            <img src="<?php echo get_template_directory_uri().'/assets/images/logo.png'; ?>" alt="logo" />
                        </a>
                    </div>
                </div>
                <div class="mobile-header__section text-right inverse-text">
                    <button type="submit" class="mobile-header-btn js-search-dropdown-toggle">
                        <i class="mdicon mdicon-search hidden-xs"></i>
                        <i class="mdicon mdicon-search visible-xs-inline-block"></i>
                    </button>
                    <a href="#atbs-offcanvas-primary" class="offcanvas-menu-toggle mobile-header-btn js-atbs-offcanvas-toggle">
                        <i class="mdicon mdicon-menu hidden-xs"></i>
                        <i class="mdicon mdicon-menu visible-xs-inline-block"></i>
                    </a>
                </div>
            </div>
        </div><!-- Mobile header -->

        <div class="header-main hidden-xs hidden-sm">
            <a href="#atbs-offcanvas-primary" class="offcanvas-menu-toggle navigation-bar-btn js-atbs-offcanvas-toggle btn-menu-bar-icon flex-box align-item-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="20.75" viewBox="0 0 27 20.75">
                    <path id="Path_1521" data-name="Path 1521" d="M4,6H29M4,15.375H29M4,24.75H14.938" transform="translate(-3 -5)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                </svg>
            </a>

            <div class="header-social header-social-vertical">
                <ul class="social-list social-list--sm list-horizontal social-list--inverse">
                    <li><a href="#" target="_blank"><i class="mdicon mdicon-facebook"></i></a></li>
                    <li><a href="#" target="_blank"><i class="mdicon mdicon-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="mdicon mdicon-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- Navigation bar -->
        <nav class="navigation-bar hidden-xs hidden-sm js-sticky-header-holder">
            <div class="navigation-bar__inner flexbox-wrap flexbox-center-y">
                <div class="navigation-bar__section flex-box align-item-center">
                    <div class="header-logo">
                        <a href="index.html">
                            <!-- <img src="./assets/img/logo.png" alt="File not found" width="130"> -->
                            <img src="<?php echo get_template_directory_uri().'/assets/images/logo.png'; ?>" alt="logo" />

                        </a>
                    </div>
                </div>
                <div class="navigation-bar__section navigation-menu-section js-priority-nav">
                    <!-- <ul id="menu-main-menu" class="navigation navigation--main navigation--inline">
                        <li class="menu-item-has-children">
                            <a href="#">Home Pages</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home 1</a></li>
                                <li><a href="home-2.html">Home 2</a></li>
                                <li><a href="home-3.html">Home 3</a></li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="./single-1.html">Single</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Archive</a>
                            <ul class="sub-menu">
                                <li><a href="category.html">Category</a></li>
                                <li><a href="tags.html">Tags</a></li>
                                <li><a href="author.html">Author</a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children">
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="search.html">Search</a></li>
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="404.html">404</a></li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul> -->
                    <?php wp_nav_menu( array( 'menu_class' => 'navigation navigation--main navigation--inline', 'container' => 'ul', )); ?>
                </div>
                <div class="navigation-bar__section">
                    <button type="submit" class="navigation-bar-search navigation-bar-btn js-search-dropdown-toggle"><i class="mdicon mdicon-search"></i> Search</button>
                </div>
            </div><!-- .navigation-bar__inner -->
            <div id="header-search-dropdown" class="header-search-dropdown ajax-search is-in-navbar js-ajax-search">
                <div class="container container--narrow">
                    <form class="search-form search-form--horizontal" method="get" action="#">
                        <div class="search-form__input-wrap">
                            <input type="text" name="s" class="search-form__input" placeholder="Search" value="">
                        </div>
                        <div class="search-form__submit-wrap">
                            <button type="submit" class="search-form__submit btn btn-primary">Search</button>
                        </div>
                    </form>

                    <div class="search-results">
                        <div class="typing-loader"></div>
                        <div class="search-results__inner"></div>
                    </div>
                </div>
            </div><!-- .header-search-dropdown -->
        </nav><!-- Navigation-bar -->
    </header><!-- Site header -->