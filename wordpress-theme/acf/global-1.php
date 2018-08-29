<?php if (get_row_layout() == 'global_1'): ?>

    <?php
    $title = get_sub_field('title');
    $text = get_sub_field('text');
    $largeText = get_sub_field('large_text');
    $additionalInfo = get_sub_field('additional_info');
    $addendumText = get_sub_field('addendum_text');
    $addendumTitle = get_sub_field('addendum_title');
    ?>

    <section class="section section-copy<?php if ( $largeText ): ?> section-copy--large<?php endif; ?>">

        <h2><?= $title; ?></h2>
        <hr>
        <?= $text; ?>        

        <?php if ($additionalInfo === 'subtext'): ?>

            <div class="subtext">
                <span>{</span> <?= $addendumText; ?> <span>}</span>
            </div>

        <?php elseif ($additionalInfo === 'more-info'): ?>

            <div class="more-info">
                <h4><?= $addendumTitle ?></h4>
                <h5><?= $addendumText ?></h5>
            </div>

        <?php endif; ?>

    </section> 

<?php endif;
