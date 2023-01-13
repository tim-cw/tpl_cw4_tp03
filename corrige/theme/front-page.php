<?php get_header(); ?>
    
    <div class="hero">
        <div class="hero__media">
        <?php the_post_thumbnail('full', array('data-scrolly' => 'scaleDown')); ?>
        </div>
        <div class="hero__content">
            <div class="wrapper">
                <h1 data-scrolly="fromBottom"><?php the_title(); ?></h1>
                <a  data-scrolly="fromBottom" href="<?php get_permalink( get_page_by_path( 'jeux' ) ) ?>" class="btn">Voir nos jeux</a>
            </div>
        </div>
    </div>

    <!-- Cards : Jeux du plus récent au plus ancien (basé sur un champs ACF) -->
    <section class="section">
        <div class="wrapper">
            <div data-scrolly="fromBottom">
                <?php the_content(); ?>
            </div>
        
            
            <div class="cards">
                <?php
                    $args = array(
                        'post_type' => 'jeu',
                        'post_status' => 'publish',
                        'orderby' => 'pw_release_date',
                        'order' => 'asc',
                        'posts_per_page' => '2',
                        'meta_key' => 'pw_release_date',
                        'meta_type' => 'DATE',
                    );
                    
                    $query = new WP_Query($args);
                ?>

                <?php if ($query->have_posts()) : ?>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="card" 
                            data-scrolly="fromBottom" 
                            style="transition-delay: <?php echo $query->current_post * .1; ?>s">
                            <div class="card__media">
                                <?php $image = get_field('pw_thumbnail'); ?>
                                <?php if ($image) : ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                <?php endif ?>
                            </div>
                            <div class="card__content">
                                <h3 class="card__title"><?php the_title(); ?></h3>
                            </div>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </section>

    <!-- Cards : Jeux de la catégorie "action" -->
    <section class="section">
        <div class="wrapper">
            <div data-scrolly="fromBottom">
                Nos jeux de plates-formes
            </div>
        
            
            <div class="cards">
                <?php
                    $args = array(
                        'post_type' => 'jeu',
                        'post_status' => 'publish',
                        'category_name' => 'plates-formes',
                        'posts_per_page' => -1,
                    );
                    
                    $query = new WP_Query($args);
                ?>

                <?php if ($query->have_posts()) : ?>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="card" 
                            data-scrolly="fromBottom" 
                            style="transition-delay: <?php echo $query->current_post * .1; ?>s">
                            <div class="card__media">
                                <?php $image = get_field('pw_thumbnail'); ?>
                                <?php if ($image) : ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                <?php endif ?>
                            </div>
                            <div class="card__content">
                                <h3 class="card__title"><?php the_title(); ?></h3>
                            </div>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </section>

    <!-- Cards : Jeux de la catégorie "action" -->
    <section class="section">
        <div class="wrapper">
            <div data-scrolly="fromBottom">
                Nos jeux d'action OU de simulation qui ont une note de 4 et moins
            </div>
        
            
            <div class="cards">
                <?php
                    $args = array(
                        'post_type' => 'jeu',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'cat' => '5, 7',
                        'meta_key' => 'pw_rating',
                        'meta_value' => '4',
                        'meta_compare' => '<=',
                        'meta_type' => 'NUMERIC',
                    );
                    
                    $query = new WP_Query($args);
                ?>

                <?php if ($query->have_posts()) : ?>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="card" 
                            data-scrolly="fromBottom" 
                            style="transition-delay: <?php echo $query->current_post * .1; ?>s">
                            <div class="card__media">
                                <?php $image = get_field('pw_thumbnail'); ?>
                                <?php if ($image) : ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                <?php endif ?>
                            </div>
                            <div class="card__content">
                                <h3 class="card__title"><?php the_title(); ?></h3>
                            </div>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </section>

    <section class="section section--callout">
        <div class="wrapper">
            <h2 class="section__title">Les <em>perks</em> d'être membre</h2>
            <ul class="perks">
                <?php if ( have_rows('pw_perks') ): ?>
                    <?php while( have_rows('pw_perks') ): the_row(); ?>
                        <li class="perk"
                            data-scrolly="fromBottom" 
                            style="transition-delay: <?php echo get_row_index() * .1; ?>s">
                            <span><?php echo get_row_index(); ?></span>
                            <p><?php the_sub_field('perk'); ?></p>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
    </section>
    
    <?php get_footer(); ?>