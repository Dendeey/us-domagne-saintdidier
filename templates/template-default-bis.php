<?php
/*
  Template Name: Templage Default Bis
*/
get_header();
?>

<?php

$dataBis = getTemplateDefaultBisData();

?>

<main class="main__all__pages">
    <section class="header__template__bis">
        <?php if ($dataBis['bis']['mainPicture']) { ?>
            <section class="header__bis__main__image">
                <figure>
                    <img src="<?php echo $dataBis['bis']['mainPicture']['url'] ?>" alt="<?php echo $dataBis['bis']['mainPicture']['title'] ?>">
                </figure>
            </section>
        <?php } ?>
        <div class="header__template__bis__container container__behavior">
            <nav class="header__template__bis__nav">
                <ul>
                    <li>
                        <a href="<?php echo home_url('/'); ?>">Accueil</a>
                    </li>
                    <li>
                        <span><i class="fa-solid fa-minus"></i></span>
                    </li>
                    <li>
                        <span class="nav__item__bold"><?php echo the_title(); ?></span>
                    </li>
                </ul>
            </nav>
            <div class="header__template__bis__title">
                <h1><?php echo the_title(); ?></h1>
                <span class="style__border__bottom"></span>
            </div>
        </div>
    </section>
    <div class="container__behavior">

        <section class="template__bis__first__gallery">
            <?php if ($dataBis['bis']['title1']) { ?>
                <h2><?php echo $dataBis['bis']['title1'] ?>
                    <span class="style__border__bottom"></span>
                </h2>

            <?php } ?>
            <?php if ($dataBis['bis']['gallery1']) { ?>
                <section>
                    <?php echo $dataBis['bis']['gallery1'] ?>
                </section>
            <?php } ?>
        </section>

        <section class="template__bis__second__gallery">
            <?php if ($dataBis['bis']['title2']) { ?>
                <h3><?php echo $dataBis['bis']['title2'] ?>
                    <span class="style__border__bottom"></span>
                </h3>
            <?php } ?>
            <?php if ($dataBis['bis']['gallery2']) { ?>
                <section>
                    <?php echo $dataBis['bis']['gallery2'] ?>
                </section>
            <?php } ?>
        </section>

        <?php if ($dataBis['bis']['commonContent']) { ?>
            <section class="template__bis__common__content">
                <section class="template__bis__common__content__item">
                    <?php echo $dataBis['bis']['commonContent'] ?>
                </section>
            </section>
        <?php } ?>

    </div>
</main>
<?php
get_footer();
?>