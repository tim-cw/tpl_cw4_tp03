	
<?php /* Template Name: Liste de jeux */ ?>

<?php get_header(); ?>
    
    <div class="hero hero--compact">
        <div class="hero__media">
        <?php the_post_thumbnail('full', array('data-scrolly' => 'scaleDown')); ?>
        </div>
        <div class="hero__content">
            <div class="wrapper">
                <h1 data-scrolly="fromBottom"><?php the_title(); ?></h1>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="wrapper">
            <div data-scrolly="fromBottom">
                <?php the_content(); ?>
            </div>
        
            <!-- Cards -->
            <div class="cards">
                <?php
                    $args = array(
                        'post_type' => 'jeu',
                        'post_status' => 'publish',
                        'orderby' => 'pw_release_date',
                        'order' => 'desc',
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
    
    <?php get_footer(); ?>