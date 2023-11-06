    <footer class="site__footer">
        <a class="footer__logo" href="<?php echo home_url('/'); ?>">
            <img class="footer__logo__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_usd.png" alt="Logo footer">
        </a>
        <div class="footer__nav">
            <div class="footer__nav__item">
                <a class="footer__nav__item__title" href="#">Club</a>
                <nav>
                    <a href="#">Histoire du club</a>
                    <a href="#">Bureau & Commissions</a>
                    <a href="#">Staff</a>
                    <a href="#">Infrastructures</a>
                </nav>
            </div>
            <div class="footer__nav__item">
                <a class="footer__nav__item__title" href="#"><span>é</span>quipes</a>
                <nav>
                    <a href="#"><span>é</span>cole de foot</a>
                    <a href="#">Pôle jeunes</a>
                    <a href="#">Pôle séniors</a>
                    <a href="#">Vétérans</a>
                </nav>
            </div>
            <div class="footer__nav__item">
                <a class="footer__nav__item__title" href="#">Arbitrage</a>
                <a class="footer__nav__item__title" href="#">Contact</a>
            </div>
            <div class="footer__nav__item">
                <h4>Nous suivre</h4>
                <nav class="footer__nav__social__media">
                    <a class="footer__nav__social__media__icon" href="https://www.instagram.com/usdomagne/" target="_blank"><i class="fa-brands fa-square-instagram fa-2xl"></i></a>
                    <a class="footer__nav__social__media__icon" href="https://www.facebook.com/usdomagne?locale=fr_FR" target="_blank"><i class="fa-brands fa-square-facebook fa-2xl"></i></a>
                </nav>
            </div>
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