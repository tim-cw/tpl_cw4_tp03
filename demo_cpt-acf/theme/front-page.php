<?php get_header(); ?>
    
    <div class="hero">
        <div class="hero__media">
        <?php the_post_thumbnail('full'); ?>
        </div>
        <div class="hero__content">
            <div class="wrapper">
                <h1><?php the_title(); ?></h1>
                <a href="#" class="btn">Voir nos jeux</a>
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

    <section class="section section--callout">
        <div class="wrapper">
            <h2 class="section__title">Les <em>perks</em> d'être membre</h2>
            <ul class="perks">
                <li class="perk">
                    <span>01</span>
                    <p>Lorem un perks amet bla bla bla ipsum sit dolor amet</p>
                </li>
                <li class="perk">
                    <span>02</span>
                    <p>Lorem un perks amet bla bla bla ipsum sit dolor amet</p>
                </li>
                <li class="perk">
                    <span>03</span>
                    <p>Lorem un perks amet bla bla bla ipsum sit dolor amet</p>
                </li>
                <li class="perk">
                    <span>04</span>
                    <p>Lorem un perks amet bla bla bla ipsum sit dolor amet</p>
                </li>
                <li class="perk">
                    <span>05</span>
                    <p>Lorem un perks amet bla bla bla ipsum sit dolor amet</p>
                </li>
            </ul> 
        </div>
    </section>
    
    <?php get_footer(); ?>