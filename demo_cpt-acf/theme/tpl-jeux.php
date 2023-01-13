	
<?php /* Template Name: Liste de jeux */ ?>

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
        <div class="wrapper">
            <div>
                <?php the_content(); ?>
            </div>
        
            <!-- Cards -->
            <div class="cards">
                <a href="detail.html" class="card">
                    <div class="card__media">
                        <img src="<?php bloginfo('template_url') ?>/dist/assets/images/hero.jpg" alt="Lorem" />
                    </div>
                    <div class="card__content">
                        <h3 class="card__title">Nom du jeu</h3>
                    </div>
                </a>
                <a href="detail.html" class="card">
                    <div class="card__media">
                        <img src="<?php bloginfo('template_url') ?>/dist/assets/images/hero.jpg" alt="Lorem" />
                    </div>
                    <div class="card__content">
                        <h3 class="card__title">Nom du jeu</h3>
                    </div>
                </a>
            </div>
        </div>
    </section>
    
    <?php get_footer(); ?>