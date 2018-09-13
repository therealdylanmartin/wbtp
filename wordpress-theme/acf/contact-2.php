<?php if (get_row_layout() == 'contact_2'): ?>

    <?php
    $title = get_sub_field('title');
    $text = get_sub_field('text');
    $namePlaceholder = get_sub_field('name_placeholder');
    $emailPlaceholder = get_sub_field('email_placeholder');
    $reasonPlaceholder = get_sub_field('reason_placeholder');
    $messagePlaceholder = get_sub_field('message_placeholder');
    $buttonText = get_sub_field('button_text');
    ?>

    <section class="section contact-2" id="contactForm">

        <div class="contact-2__composition">

            <div class="contact-2__header">
                <h2><?= $title; ?></h2>
                <hr />
                <h5><?= $text; ?></h5>
            </div>

            <form name="contact_form" action="<?= get_home_url(); ?>/wp-content/themes/wbtp/form/contact-wbtp.php" enctype="multipart/form-data" method="post">

                <fieldset>

                    <legend>Contact Us</legend>

                    <input name="name" type="text" id="contactFormName" value="" placeholder="<?= $namePlaceholder; ?>" />

                    <input name="email" type="text" id="contactFormEmail" value="" placeholder="<?= $emailPlaceholder; ?>" />

                    <select name="contact_reason" id="contactFormReason">

                        <option value="No option selected" selected="selected">
                            <?= $reasonPlaceholder; ?>
                        </option>

                        <?php while ( have_rows('add_contact_reason') ): the_row(); ?>

                            <?php
                            $contactReason = get_sub_field('contact_reason');
                            ?>

                            <option value="<?= $contactReason; ?>">
                                <?= $contactReason; ?>
                            </option>

                        <?php endwhile; ?>

                    </select>

                    <textarea name="message" id="contactFormMessage" rows="7" placeholder="<?= $messagePlaceholder; ?>"></textarea>

                    <input class="contact-2__submit" name="submit" type="submit" value="<?= $buttonText; ?>" />
                    
                </fieldset>

            </form>

        </div>

        <script>
            document.querySelector('#contactFormReason').options[0].disabled = true;
        </script>

    </section>

<?php endif;
