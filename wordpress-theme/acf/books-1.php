<?php if (get_row_layout() == 'books_1'): ?>

    <?php
    $title = get_sub_field('title');
    $text = get_sub_field('text');
    ?>

    <section class="section books-1">

        <div class="books-1__content">

            <div class="books-1__composition-1">
                <h2><?= $title; ?></h2>
                <hr />
                <h5><?= $text; ?></h5>
            </div>

            <div class="books-1__composition-2">

                <?php while ( have_rows('drop_off_city') ): the_row(); ?>

                    <?php
                    $city = get_sub_field('city');
                    ?>

                    <h4><?= $city; ?></h4>
                    <div class="books-1__address-box">

                        <?php while ( have_rows('drop_site') ): the_row(); ?>

                            <?php
                            $place = get_sub_field('place');
                            $addressLine1 = get_sub_field('address_line_1');
                            $addressLine2 = get_sub_field('address_line_2');
                            ?>

                            <div class="books-1__address-item">
                                <?= $place; ?>
                                <br /><?= $addressLine1; ?>
                                <br /><?= $addressLine2; ?>
                            </div>

                        <?php endwhile; ?>

                    </div>

                <?php endwhile; ?>
                
            </div>

        </div>

    </section>

<?php endif;
