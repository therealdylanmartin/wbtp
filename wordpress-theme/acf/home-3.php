<?php if (get_row_layout() == 'home_3'): ?>

    <?php
    $title = get_sub_field('title');
    ?>

    <?php if ( have_rows('event_info') ): ?>

        <section class="section home-3">

            <h2><?= $title; ?></h2>
            <hr>

            <?php while ( have_rows('event_info') ): the_row(); ?>

                <?php
                $image = get_sub_field('image');
                $imageHiDef = get_sub_field('image_hi_def');
                $event = get_sub_field('event');
                $date = get_sub_field('date');
                $startTime = get_sub_field('start_time');
                $endTime = get_sub_field('end_time');
                $place = get_sub_field('place');
                $streetAddress = get_sub_field('street_address');
                $city = get_sub_field('city');
                $state = get_sub_field('state');
                $zip = get_sub_field('zip');
                $description = get_sub_field('description');
                ?>

                <div class="home-3__item">
                    <picture>
                        <img srcset="<?= $image['url']; ?><?php if ( $imageHiDef ): ?>, <?= $imageHiDef['url']; ?> 1.5x<?php endif; ?>" src="<?php if ( $imageHiDef ): echo $imageHiDef['url']; else: echo $image['url']; endif; ?>" alt="<?= $image['alt']; ?>" />
                    </picture>
                    <div class="home-3__headings">
                        <h4><?= $event ?></h4>
                        <h5><?= $date; ?> <span>|</span> <span><?= $startTime; ?></span><?php if ($endTime): ?> - <span><?= $endTime; ?></span><?php endif; ?></h5>
                    </div>
                    <div class="home-3__location">
                        <?= $place; ?>
                        <br /><?= $streetAddress; ?>
                        <br /><?= $city; ?>, <?= $state; ?> <?= $zip; ?>
                    </div>
                    <?= $description; ?>
                </div>

            <?php endwhile; ?>

        </section>

    <?php endif; ?>

<?php endif;
