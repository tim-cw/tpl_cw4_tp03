<?php get_header(); ?>
    
    <div class="hero hero--compact">
        <div class="hero__media">
        <?php the_post_thumbnail('full'); ?>
        </div>
        <div class="hero__content">
            <div class="wrapper">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="wrapper game">
            <div class="game__content">
                <?php the_content(); ?>
            </div>
            
            <div class="game__meta">
                <h4>Développeur</h4>
                <p>Nintendo</p>

                <h4>Date de sortie</h4>
                <p>1 janvier 1970</p>

                <h4>Genre</h4>
                <p>Action, Sandbox</p>

                <h4>Classement</h4>
                <p>4⭐️</p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="wrapper">
            <h2>Galerie photos</h2>

            <!-- Cards -->
            <div class="gallery">
                <div class="gallery__card">
                    <div class="gallery__media">
                        <img src="<?php bloginfo('template_url') ?>/dist/assets/images/hero.jpg" alt="Lorem" />
                    </div>
                    <p>Légende photo 1</p>
                </div>
                <div class="gallery__card">
                    <div class="gallery__media">
                        <img src="<?php bloginfo('template_url') ?>/dist/assets/images/hero.jpg" alt="Lorem" />
                    </div>
                    <p>Légende photo 2</p>
                </div>
                <div class="gallery__card">
                    <div class="gallery__media">
                        <img src="<?php bloginfo('template_url') ?>/dist/assets/images/hero.jpg" alt="Lorem" />
                    </div>
                    <p>Légende photo 3</p>
                </div>
            </div>
        </div>
    </section>
    
    <?php get_footer(); ?>