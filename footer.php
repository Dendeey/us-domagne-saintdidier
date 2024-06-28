    <section class="slider__sponsors">
        <section class="slider__title">
            <h1>Partenaires</h1>
        </section>
        <section class="slider__container">
            <div class="image-container">
                <div class="image-wrapper">
                    <div>
                        <img src="\usdomagne\wp-content\themes\usdomagne\assets\img\partenaires\BreizhCola_logo.webp" alt="">
                    </div>
                    <div>
                        <img src="\usdomagne\wp-content\themes\usdomagne\assets\img\partenaires\CAFPI.webp" alt="">
                    </div>
                    <div>
                        <img src="\usdomagne\wp-content\themes\usdomagne\assets\img\partenaires\CAPCLIMAT.webp" alt="">
                    </div>
                    <div>
                        <img src="\usdomagne\wp-content\themes\usdomagne\assets\img\partenaires\CLOUET.webp" alt="">
                    </div>
                    <div>
                        <img src="\usdomagne\wp-content\themes\usdomagne\assets\img\partenaires\Crit_logo.webp" alt="">
                    </div>
                    <div>
                        <img src="\usdomagne\wp-content\themes\usdomagne\assets\img\partenaires\Denual_logo.webp" alt="">
                    </div>
                    <div>
                        <img src="\usdomagne\wp-content\themes\usdomagne\assets\img\partenaires\FERRON.webp" alt="">
                    </div>
                    <div>
                        <img src="\usdomagne\wp-content\themes\usdomagne\assets\img\partenaires\Groupama_logo.webp" alt="">
                    </div>
                    <div>
                        <img src="\usdomagne\wp-content\themes\usdomagne\assets\img\partenaires\KerBtp_logo.webp" alt="">
                    </div>
                    <div>
                        <img src="\usdomagne\wp-content\themes\usdomagne\assets\img\partenaires\LaCaveDesSaveurs_logo.webp" alt="">
                    </div>
                    <div>
                        <img src="\usdomagne\wp-content\themes\usdomagne\assets\img\partenaires\LeComptoir_logo.webp" alt="">
                    </div>
                    <div>
                        <img src="\usdomagne\wp-content\themes\usdomagne\assets\img\partenaires\LMConstruction_logo.webp" alt="">
                    </div>
                    <div>
                        <img src="\usdomagne\wp-content\themes\usdomagne\assets\img\partenaires\Motorcraft_logo.png" alt="">
                    </div>
                    <div>
                        <img src="\usdomagne\wp-content\themes\usdomagne\assets\img\partenaires\PLANCHAIS.webp" alt="">
                    </div>
                    <div>
                        <img src="\usdomagne\wp-content\themes\usdomagne\assets\img\partenaires\Plombreizh_logo.webp" alt="">
                    </div>
                    <div>
                        <img src="\usdomagne\wp-content\themes\usdomagne\assets\img\partenaires\Safe_logo.webp" alt="">
                    </div>
                    <div>
                        <img src="\usdomagne\wp-content\themes\usdomagne\assets\img\partenaires\SoCooc_logo.webp" alt="">
                    </div>
                    <div>
                        <img src="\usdomagne\wp-content\themes\usdomagne\assets\img\partenaires\StephanePlaza_logo.webp" alt="">
                    </div>
                    <div>
                        <img src="\usdomagne\wp-content\themes\usdomagne\assets\img\partenaires\SuperU_logo.webp" alt="">
                    </div>
                    <div>
                        <img src="\usdomagne\wp-content\themes\usdomagne\assets\img\partenaires\T&C_logo.webp" alt="">
                    </div>
                    <div>
                        <img src="\usdomagne\wp-content\themes\usdomagne\assets\img\partenaires\Tiriault_logo.webp" alt="">
                    </div>
                    <div>
                        <img src="\usdomagne\wp-content\themes\usdomagne\assets\img\partenaires\VAND.png" alt="">
                    </div>
                    <div>
                        <img src="\usdomagne\wp-content\themes\usdomagne\assets\img\partenaires\VousFinancer_logo.webp" alt="">
                    </div>
                </div>
            </div>
        </section>
    </section>
    <footer class="site__footer">
        <a class="footer__logo" href="<?php echo home_url('/'); ?>">
            <img class="footer__logo__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_usd.png" alt="Logo footer">
        </a>
        <div class="footer__nav">
            <div class="footer__nav__item">
                <a class="footer__nav__item__title" href="#">Club</a>
                <nav>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'burger-club_dropdown',
                        'container' => 'ul', // afin d'éviter d'avoir une div autour 
                        'menu_class' => 'burger__club', // ma classe personnalisée  
                    )); ?>
                </nav>
            </div>
            <div class="footer__nav__item">
                <a class="footer__nav__item__title" href="#"><span>é</span>quipes</a>
                <nav>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'burger-equipes_dropdown',
                        'container' => 'ul', // afin d'éviter d'avoir une div autour 
                        'menu_class' => 'burger__equipes', // ma classe personnalisée  
                    )); ?>
                </nav>
            </div>
            <div class="footer__nav__item">
                <?php wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'container' => 'ul', // afin d'éviter d'avoir une div autour 
                    'menu_class' => 'footer__burger__menu', // ma classe personnalisée  
                )); ?>
            </div>
            <div class="footer__nav__item">
                <p>Nous suivre</p>
                <nav class="footer__nav__social__media">
                    <a class="footer__nav__social__media__icon" href="https://www.instagram.com/usdomagne/" target="_blank"><i class="fa-brands fa-square-instagram fa-2xl"></i></a>
                    <a class="footer__nav__social__media__icon" href="https://www.facebook.com/usdomagne?locale=fr_FR" target="_blank"><i class="fa-brands fa-square-facebook fa-2xl"></i></a>
                </nav>
            </div>
        </div>
        <div class="footer__section__gallery">
            <figure>
                <img class="footer__section__img__item" src="<?php echo get_template_directory_uri(); ?>/assets/img/slogan_usd_yellowborder.png" alt="Slogan usd">
            </figure>
        </div>
        <?php wp_nav_menu(array(
            'theme_location' => 'footer',
            'container' => 'ul', // afin d'éviter d'avoir une div autour 
            'menu_class' => 'footer__menu', // ma classe personnalisée  
        )); ?>
    </footer>

    <?php wp_footer(); ?>
    </body>

    </html>