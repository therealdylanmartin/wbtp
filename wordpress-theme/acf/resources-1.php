<?php if (get_row_layout() == 'resources_1'): ?>

    <?php
    $title = get_sub_field('title');
    ?>

    <section class="section resources-1">

        <div class="resources-1__content">

            <h2><?= $title; ?></h2>

            <div class="resources-1__composition">

                <?php
                query_posts( array( 
                    'post_type' => 'wi_resources',
                    'orderby' => 'title',
                    'order'   => 'ASC' 
                ) );
                ?>

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <?php
                    $organization = get_field('organization');
                    $addressLine1 = get_field('address_line_1');
                    $addressLine2 = get_field('address_line_2');
                    $mission = get_field('mission');
                    ?>

                    <div class="resources-1__item">

                        <h4><?= $organization; ?></h4>
                        <div class="resources-1__location">
                            <?= $addressLine1; ?>
                            <br /><?= $addressLine2; ?>
                        </div>
                        <?= $mission; ?>

                        <?php while ( have_rows('add_contact_button') ): the_row(); ?>

                            <?php
                            $button = get_sub_field('button');
                            ?>

                            <a href="<?= $button['url']; ?>" target="_blank"><?= $button['title']; ?></a>

                        <?php endwhile; ?>

                    </div>

                <?php endwhile; endif; ?>

            </div>

        </div>

    </section>

<?php endif;
