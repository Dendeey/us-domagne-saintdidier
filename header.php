<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <?php wp_head(); ?>
</head>

<body id="site__home" <?php body_class(); ?>>
    <header <?php if (is_front_page()) { ?> id="homepage__header" class="homepage__header" <?php } else { ?> id="page__header" class="page__header" <?php } ?>>
        <div class="header__menu__nav">
            <button id="menu__btn" class="header__side__menu__button">
                <i class="fa-solid fa-bars-staggered fa-xl"></i>
                Menu
            </button>
            <?php wp_nav_menu(array(
                'theme_location' => 'main',
                'container' => 'ul', // afin d'éviter d'avoir une div autour 
                'menu_class' => 'header__menu', // ma classe personnalisée  
            )); ?>
        </div>
        <a id="site__header__logo" class="header__logo__link" href="<?php echo home_url('/'); ?>">
            <img class="header__logo__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_usd.png" alt="Logo">
        </a>
        <div class="header__social__media">
            <ul class="header__social__media__list">
                <li class="header__social__media__list__item"><a id="insta__icon" class="header__social__media__list__item__link" href="https://www.instagram.com/usdomagne/" target="_blank"><i class="fa-brands fa-square-instagram fa-2xl"></i></a></li>
                <li class="header__social__media__list__item"><a id="fb__icon" class="header__social__media__list__item__link" href="https://www.facebook.com/usdomagne?locale=fr_FR" target="_blank"><i class="fa-brands fa-square-facebook fa-2xl"></i></a></li>
            </ul>
        </div>
        <div id="burger__menu" class="site__header__burger">
            <div class="top__header__burger">
                <div id="top__header__burger__icon" class="top__header__burger__icon">
                    <div>
                        <i class="fa-solid fa-bars-staggered fa-xl"></i>
                        <span>Menu</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-xmark fa-xl"></i>
                    </div>
                </div>
                <nav class="top__header__burger__nav">
                    <ul>
                        <li>
                            <div id="title__arrow__top" class="title__dropdown__arrow">
                                <span>Club</span>
                                <div>
                                    <i id="arrow__top" class="fa-solid fa-angle-down"></i>
                                </div>
                            </div>
                            <div id="content__dropdown__top" class="content__dropdown content__dropdown__hidden">
                                <ul>
                                    <li><a href="http://localhost/usdomagne_website/wordpress-6.3.1/wordpress/histoire-du-club/">Histoire du club</a></li>
                                    <li><a href="http://localhost/usdomagne_website/wordpress-6.3.1/wordpress/bureau-commissions/">Bureau / Commissions</a></li>
                                    <li><a href="http://localhost/usdomagne_website/wordpress-6.3.1/wordpress/staff/">Staff</a></li>
                                    <li><a href="http://localhost/usdomagne_website/wordpress-6.3.1/wordpress/infrastructures/">Infrastructures</a></li>
                                </ul>
                            </div>

                        </li>
                        <li>
                            <div id="title__arrow__bottom" class="title__dropdown__arrow">
                                <span>équipes</span>
                                <div>
                                    <i id="arrow__bottom" class="fa-solid fa-angle-down"></i>
                                </div>
                            </div>
                            <div id="content__dropdown__bottom" class="content__dropdown content__dropdown__hidden">
                                <ul>
                                    <li><a href="http://localhost/usdomagne_website/wordpress-6.3.1/wordpress/ecole-de-foot/">école de foot</a></li>
                                    <li><a href="http://localhost/usdomagne_website/wordpress-6.3.1/wordpress/pole-jeunes/">Pôle jeunes</a></li>
                                    <li><a href="http://localhost/usdomagne_website/wordpress-6.3.1/wordpress/pole-seniors/">Pôle séniors</a></li>
                                    <li><a href="http://localhost/usdomagne_website/wordpress-6.3.1/wordpress/veterans/">Vétérans</a></li>
                                </ul>
                            </div>

                        </li>
                        <li class="title__dropdown"><a href="http://localhost/usdomagne_website/wordpress-6.3.1/wordpress/convocations/">Convocations</a></li>
                        <li class="title__dropdown"><a href="http://localhost/usdomagne_website/wordpress-6.3.1/wordpress/arbitrage/">Arbitrage</a></li>
                        <li class="title__dropdown"><a href="http://localhost/usdomagne_website/wordpress-6.3.1/wordpress/contact/">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="bottom__header__burger">
                <div class="header__burger__social__media">
                    <ul class="header__burger__social__media__list">
                        <li class="header__burger__social__media__list__item"><a id="insta__icon" class="header__burger__social__media__list__item__link" href="https://www.instagram.com/usdomagne/" target="_blank"><i class="fa-brands fa-square-instagram fa-2xl"></i></a></li>
                        <li class="header__burger__social__media__list__item"><a id="fb__icon" class="header__burger__social__media__list__item__link" href="https://www.facebook.com/usdomagne?locale=fr_FR" target="_blank"><i class="fa-brands fa-square-facebook fa-2xl"></i></a></li>
                    </ul>
                </div>
                <?php wp_nav_menu(array(
                    'theme_location' => 'main',
                    'container' => 'ul', // afin d'éviter d'avoir une div autour 
                    'menu_class' => 'header__menu', // ma classe personnalisée  
                )); ?>
            </div>
        </div>
    </header>
    <div id="overlay"></div>

    <?php wp_body_open(); ?>