<?php if (get_row_layout() == 'home_1'): ?>

    <section class="section home-1">

        <div class="home-1__logo">
            <picture>
                <img srcset="wp-content/themes/wbtp/images/wbtp_home-logo.png, wp-content/themes/wbtp/images/wbtp_home-logo_hr.png 1.5x" src="wp-content/themes/wbtp/images/wbtp_home-logo_hr.png" alt="Wisconsin Books to Prisoners logo" />
            </picture>
        </div>

        <div class="home-1__content">

            <?php while ( have_rows('mission_statement') ): the_row(); ?>

                <?php
                $heading = get_sub_field('heading');
                $text = get_sub_field('text');
                ?>

                <h2><?= $heading; ?></h2>
                 />
                <?= $text; ?>

            <?php endwhile; ?>

        </div>

    </section>

<?php endif;
