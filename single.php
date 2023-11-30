<?php get_header(); ?>

<main class="main__all__pages">
  <div class="container__behavior">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="post__single__header__content">
          <div class="post__single__header__fixed">
            <nav class="header__all__pages__nav">
              <ul>
                <li>
                  <a href="<?php echo home_url('/'); ?>">Accueil</a>
                </li>
                <li>
                  <span><i class="fa-solid fa-minus"></i></span>
                </li>
                <li>
                  <a href="http://localhost/usdomagne_website/wordpress-6.3.1/wordpress/blog/">Actualités</a>
                </li>
                <li>
                  <span><i class="fa-solid fa-minus"></i></span>
                </li>
                <li>
                  <span class="nav__item__bold"><?php the_title(); ?></span>
                </li>
              </ul>
            </nav>
            <?php the_category(); ?>
            <h1><?php the_title(); ?></h1>
            <p class="post__meta">Publié le <?php the_time(get_option('date_format')); ?></p>
          </div>
        </div>
        <article class="post__single">
          <div class="post__single__img">
            <figure>
              <?php the_post_thumbnail(); ?>
            </figure>
          </div>
          <div class="post__single__content">
            <?php the_content(); ?>
          </div>
        </article>
    <?php endwhile;
    endif; ?>
  </div>
</main>

<?php get_footer(); ?>