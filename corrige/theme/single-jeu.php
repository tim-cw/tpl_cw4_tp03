<?php get_header(); ?>
    
    <div class="hero hero--compact">
        <div class="hero__media">
        <?php the_post_thumbnail('full', array('data-scrolly' => 'scaleDown')); ?>
        </div>
        <div class="hero__content">
            <div class="wrapper">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="wrapper game">
            <div class="game__content" data-scrolly="fromBottom">
                <?php the_content(); ?>
            </div>
            
            <div class="game__meta">
                <?php
                    $realisateurs = get_field('pw_realisator');

                    if ($realisateurs) :
                ?>
                    <h4 data-scrolly="fromBottom">Réalisateur</h4>
                    <?php foreach( $realisateurs as $realisateur ): ?>
                        <p><?php echo get_the_title($realisateur->ID); ?></p>
                    <?php endforeach; ?>
                <?php endif ?>

                <?php if (get_field('pw_release_date')): ?>
                    <h4 data-scrolly="fromBottom">Date de sortie</h4>
                    <p><?php the_field('pw_release_date'); ?></p>
                <?php endif; ?>

                <?php $categories = array(); ?>
                <?php foreach (get_the_category() as $category) : ?>
                    <?php array_push($categories, $category->name); ?>
                    <?php endforeach ?>
                <?php if ($categories): ?>
                    <h4 data-scrolly="fromBottom">Genre</h4>
                    <p><?php echo implode(', ', $categories); ?></p>
                <?php endif; ?>

                <?php if (get_field('pw_release_date')): ?>
                    <h4 data-scrolly="fromBottom">Classement</h4>
                    <p><?php the_field('pw_rating'); ?>⭐️</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="wrapper">
            <h2 class="section__title">Galerie photos</h2>

            <!-- Cards -->
            <div class="gallery">
                <?php if ( have_rows('pw_gallery') ): ?>
                    <?php while( have_rows('pw_gallery') ): the_row(); ?>
                        <div class="gallery__card"
                            data-scrolly="fromBottom" 
                            style="transition-delay: <?php echo get_row_index() * .1; ?>s">
                            <div class="gallery__media">
                                <?php $image = get_sub_field('photo'); ?>
                                    <?php if ($image) : ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                    <?php endif ?>
                            </div>
                            <p><?php the_sub_field('caption'); ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        </div>
    </section>
    
    <?php get_footer(); ?>