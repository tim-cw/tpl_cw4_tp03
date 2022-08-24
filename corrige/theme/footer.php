        <footer class="footer">
            <div class="wrapper">

                <a href="index.html" class="brand">
                    <svg class="icon icon--md">
                        <use xlink:href="#icon-power"></use>
                    </svg>
                    e.tim
                </a>

                <!-- separator -->
                <hr>

                <!-- social -->
                <nav class="nav-social">
                    <ul>
                        <?php if ( have_rows('social', 'options') ): ?>
                            <?php while( have_rows('social', 'options') ): the_row(); ?>
                                <li>
                                    <a href="<?php the_sub_field('link'); ?>" class="nav__link <?php the_sub_field('title'); ?>">
                                        <svg class="icon icon--md">
                                            <use xlink:href="#icon-<?php the_sub_field('title'); ?>"></use>
                                        </svg>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </nav>
                <p>Tous droits réservés © <?php echo Date('Y');?> <?php bloginfo('name'); ?></p>

            </div>
        </footer>
    <?php wp_footer(); ?>
    </body>
</html>