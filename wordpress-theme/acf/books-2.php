<?php if (get_row_layout() == 'books_2'): ?>

    <?php
    $buttonText = get_sub_field('button_text');
    $text = get_sub_field('text');
    ?>

    <section class="section books-2" id="donateButton" style="padding-top: 0;">

        <div class="books-2__content">
            <div class="books-2__icon">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 184 148" style="enable-background:new 0 0 184 148; margin-bottom: 2rem;" xml:space="preserve">
                    <g>
                        <path class="list__01" d="M89.5,127.9H42c-1.5,0-2.7-1.2-2.7-2.7V12.8c0-1.5,1.2-2.7,2.7-2.7h5.2v2.7c0,1.3,1,2.3,2.3,2.3s2.3-1,2.3-2.3v-2.7h5.3
                            v2.7c0,1.3,1,2.3,2.3,2.3s2.3-1,2.3-2.3v-2.7h5.3v2.7c0,1.3,1,2.3,2.3,2.3c1.3,0,2.3-1,2.3-2.3v-2.7h5.3v2.7c0,1.3,1,2.3,2.3,2.3
                            c1.3,0,2.3-1,2.3-2.3v-2.7h5.3v2.7c0,1.3,1,2.3,2.3,2.3c1.3,0,2.3-1,2.3-2.3v-2.7h5.3v2.7c0,1.3,1,2.3,2.3,2.3c1.3,0,2.3-1,2.3-2.3
                            v-2.7h5.3v2.7c0,1.3,1,2.3,2.3,2.3s2.3-1,2.3-2.3v-2.7h5.3v2.7c0,1.3,1,2.3,2.3,2.3s2.3-1,2.3-2.3v-2.7h5.2c1.5,0,2.7,1.2,2.7,2.7
                            v74.9c0,1.3,1,2.3,2.3,2.3c1.3,0,2.3-1,2.3-2.3V12.8c0-4-3.3-7.3-7.3-7.3h-5.2V2.8c0-1.3-1-2.3-2.3-2.3c-1.3,0-2.3,1-2.3,2.3v2.7
                            h-5.3V2.8c0-1.3-1-2.3-2.3-2.3s-2.3,1-2.3,2.3v2.7h-5.3V2.8c0-1.3-1-2.3-2.3-2.3s-2.3,1-2.3,2.3v2.7h-5.3V2.8c0-1.3-1-2.3-2.3-2.3
                            c-1.3,0-2.3,1-2.3,2.3v2.7h-5.3V2.8c0-1.3-1-2.3-2.3-2.3c-1.3,0-2.3,1-2.3,2.3v2.7h-5.3V2.8c0-1.3-1-2.3-2.3-2.3
                            c-1.3,0-2.3,1-2.3,2.3v2.7h-5.3V2.8c0-1.3-1-2.3-2.3-2.3s-2.3,1-2.3,2.3v2.7h-5.3V2.8c0-1.3-1-2.3-2.3-2.3s-2.3,1-2.3,2.3v2.7H42
                            c-4,0-7.3,3.3-7.3,7.3v112.4c0,4,3.3,7.3,7.3,7.3h47.5c1.3,0,2.3-1,2.3-2.3C91.8,128.9,90.8,127.9,89.5,127.9z"/>
                        <path class="list__01" d="M122,92.9c-15.1,0-27.3,12.3-27.3,27.3c0,15.1,12.3,27.3,27.3,27.3s27.3-12.3,27.3-27.3C149.3,105.2,137,92.9,122,92.9z
                            M122,142.9c-12.5,0-22.6-10.2-22.6-22.6s10.2-22.6,22.6-22.6s22.6,10.2,22.6,22.6S134.5,142.9,122,142.9z"/>
                        <path class="list__01" d="M138.4,115.4c-0.3-0.9-1-1.5-2-1.6l-8.7-1l-3.6-7.9c-0.4-0.8-1.2-1.4-2.1-1.4c-0.9,0-1.7,0.5-2.1,1.4l-3.6,7.9l-8.6,1
                            c-0.9,0.1-1.7,0.7-2,1.6c-0.3,0.9,0,1.8,0.6,2.4l6.4,5.9l-1.7,8.5c-0.2,0.9,0.2,1.8,0.9,2.4c0.7,0.5,1.7,0.6,2.5,0.1l7.6-4.3
                            l7.6,4.3c0.4,0.2,0.8,0.3,1.1,0.3c0.5,0,1-0.2,1.4-0.4c0.7-0.5,1.1-1.5,0.9-2.4l-1.7-8.5l6.4-5.9
                            C138.4,117.2,138.6,116.2,138.4,115.4z M127.2,121.2c-0.6,0.6-0.9,1.4-0.7,2.2l1,4.8l-4.3-2.4c-0.4-0.2-0.7-0.3-1.1-0.3
                            c-0.4,0-0.8,0.1-1.1,0.3l-4.3,2.4l1-4.8c0.2-0.8-0.1-1.6-0.7-2.2l-3.6-3.4l4.9-0.6c0.8-0.1,1.5-0.6,1.9-1.3l2.1-4.5l2.1,4.5
                            c0.3,0.7,1,1.2,1.9,1.3l4.9,0.6L127.2,121.2z"/>
                        <path class="list__01" d="M124.3,22.8c0-1.3-1-2.3-2.3-2.3H47c-1.3,0-2.3,1-2.3,2.3c0,1.3,1,2.3,2.3,2.3H122C123.3,25.2,124.3,24.1,124.3,22.8z"/>
                        <path class="list__01" d="M67,45.5c-1.3,0-2.3,1-2.3,2.3c0,2.8-2.3,5.2-5.2,5.2s-5.2-2.3-5.2-5.2c0-2.8,2.3-5.2,5.2-5.2c1.3,0,2.3-1,2.3-2.3
                            s-1-2.3-2.3-2.3c-5.4,0-9.8,4.4-9.8,9.8s4.4,9.8,9.8,9.8c5.4,0,9.8-4.4,9.8-9.8C69.4,46.5,68.3,45.5,67,45.5z"/>
                        <path class="list__01" d="M67,72.9c-1.3,0-2.3,1-2.3,2.3c0,2.8-2.3,5.2-5.2,5.2s-5.2-2.3-5.2-5.2s2.3-5.2,5.2-5.2c1.3,0,2.3-1,2.3-2.3
                            c0-1.3-1-2.3-2.3-2.3c-5.4,0-9.8,4.4-9.8,9.8s4.4,9.8,9.8,9.8c5.4,0,9.8-4.4,9.8-9.8C69.4,74,68.3,72.9,67,72.9z"/>
                        <path class="list__01" d="M77,82.6h40c1.3,0,2.3-1,2.3-2.3s-1-2.3-2.3-2.3H77c-1.3,0-2.3,1-2.3,2.3S75.7,82.6,77,82.6z"/>
                        <path class="list__01" d="M77,72.6h30c1.3,0,2.3-1,2.3-2.3c0-1.3-1-2.3-2.3-2.3H77c-1.3,0-2.3,1-2.3,2.3S75.7,72.6,77,72.6z"/>
                        <path class="list__01" d="M89.5,105.4H77c-1.3,0-2.3,1-2.3,2.3c0,1.3,1,2.3,2.3,2.3h12.5c1.3,0,2.3-1,2.3-2.3C91.8,106.5,90.8,105.4,89.5,105.4z"/>
                        <path class="list__01" d="M96.8,97.8c0-1.3-1-2.3-2.3-2.3H77c-1.3,0-2.3,1-2.3,2.3s1,2.3,2.3,2.3h17.5C95.8,100.1,96.8,99.1,96.8,97.8z"/>
                        <path class="list__01" d="M117,50.5H77c-1.3,0-2.3,1-2.3,2.3s1,2.3,2.3,2.3h40c1.3,0,2.3-1,2.3-2.3S118.3,50.5,117,50.5z"/>
                        <path class="list__01" d="M77,45.1h30c1.3,0,2.3-1,2.3-2.3s-1-2.3-2.3-2.3H77c-1.3,0-2.3,1-2.3,2.3S75.7,45.1,77,45.1z"/>
                        <path class="list__01" d="M59.5,97.6c1.3,0,2.3-1,2.3-2.3s-1-2.3-2.3-2.3c-5.4,0-9.8,4.4-9.8,9.8s4.4,9.8,9.8,9.8s9.8-4.4,9.8-9.8
                            c0-1.3-1-2.3-2.3-2.3c-1.3,0-2.3,1-2.3,2.3c0,2.8-2.3,5.2-5.2,5.2c-2.8,0-5.2-2.3-5.2-5.2C54.4,99.9,56.7,97.6,59.5,97.6z"/>
                    </g>
                </svg>
            </div>
            <a href="https://www.roomofonesown.com/wishlist/186" target="_blank"><?= $buttonText; ?></a>
            <?= $text ?>
        </div>

    </section>

<?php endif;
