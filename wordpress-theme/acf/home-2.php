<?php header('Content-type: application/xml'); ?>

<?php if (get_row_layout() == 'home_2'): ?>

    <?php
    $button1 = get_sub_field('button_1');
    $button2 = get_sub_field('button_2');
    $button3 = get_sub_field('button_3');
    $button4 = get_sub_field('button_4');
    ?>

    <section class="section home-2">

        <div class="home-2__content">

            
            <a href="<?= $button1['url']; ?>">
                <div class="home-2__icon">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 184 148" style="enable-background:new 0 0 184 148;" xml:space="preserve">
                    <g>
                        <g>
                            <g>
                                <path class="money__01" d="M130.4,65c0-4.8-3.9-8.7-8.6-8.7c-4.8,0-8.6,3.9-8.6,8.7c0,4.8,3.9,8.7,8.6,8.7
                                    C126.5,73.7,130.4,69.8,130.4,65z M118.5,65c0-1.8,1.5-3.3,3.3-3.3c1.8,0,3.3,1.5,3.3,3.3c0,1.8-1.5,3.3-3.3,3.3
                                    C120,68.3,118.5,66.8,118.5,65z"/>
                                <path class="money__01" d="M151.5,44.4c-5.1,0-9.2-4.1-9.2-9.2c0-0.7-0.3-1.4-0.8-1.9c-0.5-0.5-1.2-0.8-1.9-0.8l-79.8,0
                                    c-1.5,0-2.7,1.2-2.7,2.7c0,1.5,1.2,2.7,2.7,2.7l77.3,0c1.1,5.9,5.8,10.6,11.7,11.7v30.9c-5.9,1.1-10.6,5.8-11.7,11.7L29,92.2
                                    c-1.1-5.9-5.8-10.6-11.7-11.7V49.6c5.9-1.1,10.6-5.8,11.7-11.7h20.1c1.5,0,2.7-1.2,2.7-2.7c0-1.5-1.2-2.7-2.7-2.7H26.5
                                    c-1.5,0-2.7,1.2-2.7,2.7c0,5.1-4.1,9.2-9.2,9.2c-1.5,0-2.7,1.2-2.7,2.7V83c0,1.5,1.2,2.7,2.7,2.7c5.1,0,9.2,4.1,9.2,9.2
                                    c0,0.7,0.3,1.4,0.8,1.9c0.5,0.5,1.2,0.8,1.9,0.8l113.1,0c1.5,0,2.7-1.2,2.7-2.7c0-5.1,4.1-9.2,9.2-9.2c1.5,0,2.7-1.2,2.7-2.7
                                    V47.1C154.2,45.6,153,44.4,151.5,44.4z"/>
                                <path class="money__01" d="M183.2,45.2c-0.5-0.5-1.2-0.8-1.9-0.8l-15.2,0V23.2c0-0.7-0.3-1.4-0.8-1.9c-0.5-0.5-1.2-0.8-1.9-0.8
                                    l-160.7,0c-1.5,0-2.7,1.2-2.7,2.7v83.7c0,0.7,0.3,1.4,0.8,1.9c0.5,0.5,1.2,0.8,1.9,0.8h15.2v15.2c0,0.7,0.3,1.4,0.8,1.9
                                    c0.5,0.5,1.2,0.8,1.9,0.8l160.7,0c1.5,0,2.7-1.2,2.7-2.7V47.1C184,46.4,183.7,45.7,183.2,45.2z M5.4,104.2V25.9l155.4,0v78.3
                                    L5.4,104.2z M178.6,122.1l-155.4,0v-12.5l140.2,0c1.5,0,2.7-1.2,2.7-2.7V49.8l12.5,0V122.1z"/>
                                <path class="money__01" d="M44.4,56.4c-4.8,0-8.6,3.9-8.6,8.7c0,4.8,3.9,8.7,8.6,8.7S53,69.8,53,65C53,60.3,49.1,56.4,44.4,56.4z
                                    M44.4,68.3c-1.8,0-3.3-1.5-3.3-3.3c0-1.8,1.5-3.3,3.3-3.3c1.8,0,3.3,1.5,3.3,3.3C47.6,66.8,46.2,68.3,44.4,68.3z"/>
                                <path class="money__01" d="M103.6,65c0-11.4-9.2-20.6-20.6-20.6S62.5,53.7,62.5,65s9.2,20.6,20.6,20.6C94.4,85.7,103.6,76.4,103.6,65z
                                    M67.9,65c0-8.4,6.8-15.2,15.2-15.2S98.2,56.6,98.2,65c0,8.4-6.8,15.2-15.2,15.2C74.7,80.3,67.9,73.4,67.9,65z"/>
                            </g>
                        </g>
                    </g>
                    </svg>
                </div>
                <h2><?= $button1['title']; ?></h2>
            </a>
            <a href="<?= $button2['url']; ?>">
                <div class="home-2__icon">
                        <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 184 148" style="enable-background:new 0 0 184 148;" xml:space="preserve">
                        <g>
                            <g>
                                <g>
                                    <path class="book__01" d="M149,23.6h-27.2c-1.4,0-2.5,1.1-2.5,2.5s1.1,2.5,2.5,2.5H149c1.4,0,2.5-1.1,2.5-2.5S150.4,23.6,149,23.6z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="book__01" d="M149,37.1h-27.2c-1.4,0-2.5,1.1-2.5,2.5c0,1.4,1.1,2.5,2.5,2.5H149c1.4,0,2.5-1.1,2.5-2.5
                                        C151.5,38.2,150.4,37.1,149,37.1z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="book__01" d="M149,50.6h-27.2c-1.4,0-2.5,1.1-2.5,2.5s1.1,2.5,2.5,2.5H149c1.4,0,2.5-1.1,2.5-2.5S150.4,50.6,149,50.6z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="book__01" d="M149,64.1h-27.2c-1.4,0-2.5,1.1-2.5,2.5s1.1,2.5,2.5,2.5H149c1.4,0,2.5-1.1,2.5-2.5S150.4,64.1,149,64.1z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="book__01" d="M149,77.6h-27.2c-1.4,0-2.5,1.1-2.5,2.5s1.1,2.5,2.5,2.5H149c1.4,0,2.5-1.1,2.5-2.5
                                        C151.5,78.7,150.4,77.6,149,77.6z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="book__01" d="M149,91.1h-27.2c-1.4,0-2.5,1.1-2.5,2.5s1.1,2.5,2.5,2.5H149c1.4,0,2.5-1.1,2.5-2.5S150.4,91.1,149,91.1z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="book__01" d="M110.5,23.6h-1.9c-1.4,0-2.5,1.1-2.5,2.5s1.1,2.5,2.5,2.5h1.9c1.4,0,2.5-1.1,2.5-2.5S111.9,23.6,110.5,23.6z
                                        "/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="book__01" d="M110.5,37.1h-1.9c-1.4,0-2.5,1.1-2.5,2.5c0,1.4,1.1,2.5,2.5,2.5h1.9c1.4,0,2.5-1.1,2.5-2.5
                                        C113.1,38.2,111.9,37.1,110.5,37.1z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="book__01" d="M110.5,50.6h-1.9c-1.4,0-2.5,1.1-2.5,2.5s1.1,2.5,2.5,2.5h1.9c1.4,0,2.5-1.1,2.5-2.5S111.9,50.6,110.5,50.6z
                                        "/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="book__01" d="M110.5,64.1h-1.9c-1.4,0-2.5,1.1-2.5,2.5s1.1,2.5,2.5,2.5h1.9c1.4,0,2.5-1.1,2.5-2.5S111.9,64.1,110.5,64.1z
                                        "/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="book__01" d="M110.5,77.6h-1.9c-1.4,0-2.5,1.1-2.5,2.5s1.1,2.5,2.5,2.5h1.9c1.4,0,2.5-1.1,2.5-2.5
                                        C113.1,78.7,111.9,77.6,110.5,77.6z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="book__01" d="M110.5,91.1h-1.9c-1.4,0-2.5,1.1-2.5,2.5s1.1,2.5,2.5,2.5h1.9c1.4,0,2.5-1.1,2.5-2.5S111.9,91.1,110.5,91.1z
                                        "/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="book__01" d="M75.4,23.6H48.2c-1.4,0-2.5,1.1-2.5,2.5s1.1,2.5,2.5,2.5h27.2c1.4,0,2.5-1.1,2.5-2.5S76.8,23.6,75.4,23.6z"
                                        />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="book__01" d="M75.4,37.1H48.2c-1.4,0-2.5,1.1-2.5,2.5c0,1.4,1.1,2.5,2.5,2.5h27.2c1.4,0,2.5-1.1,2.5-2.5
                                        C78,38.2,76.8,37.1,75.4,37.1z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="book__01" d="M75.4,50.6H48.2c-1.4,0-2.5,1.1-2.5,2.5s1.1,2.5,2.5,2.5h27.2c1.4,0,2.5-1.1,2.5-2.5S76.8,50.6,75.4,50.6z"
                                        />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="book__01" d="M75.4,64.1H48.2c-1.4,0-2.5,1.1-2.5,2.5s1.1,2.5,2.5,2.5h27.2c1.4,0,2.5-1.1,2.5-2.5S76.8,64.1,75.4,64.1z"
                                        />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="book__01" d="M75.4,77.6H48.2c-1.4,0-2.5,1.1-2.5,2.5s1.1,2.5,2.5,2.5h27.2c1.4,0,2.5-1.1,2.5-2.5
                                        C78,78.7,76.8,77.6,75.4,77.6z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="book__01" d="M75.4,91.1H48.2c-1.4,0-2.5,1.1-2.5,2.5s1.1,2.5,2.5,2.5h27.2c1.4,0,2.5-1.1,2.5-2.5S76.8,91.1,75.4,91.1z"
                                        />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="book__01" d="M37,23.6h-1.9c-1.4,0-2.5,1.1-2.5,2.5s1.1,2.5,2.5,2.5H37c1.4,0,2.5-1.1,2.5-2.5S38.4,23.6,37,23.6z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="book__01" d="M37,37.1h-1.9c-1.4,0-2.5,1.1-2.5,2.5c0,1.4,1.1,2.5,2.5,2.5H37c1.4,0,2.5-1.1,2.5-2.5
                                        C39.5,38.2,38.4,37.1,37,37.1z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="book__01" d="M37,50.6h-1.9c-1.4,0-2.5,1.1-2.5,2.5s1.1,2.5,2.5,2.5H37c1.4,0,2.5-1.1,2.5-2.5S38.4,50.6,37,50.6z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="book__01" d="M37,64.1h-1.9c-1.4,0-2.5,1.1-2.5,2.5s1.1,2.5,2.5,2.5H37c1.4,0,2.5-1.1,2.5-2.5S38.4,64.1,37,64.1z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="book__01" d="M37,77.6h-1.9c-1.4,0-2.5,1.1-2.5,2.5s1.1,2.5,2.5,2.5H37c1.4,0,2.5-1.1,2.5-2.5
                                        C39.5,78.7,38.4,77.6,37,77.6z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="book__01" d="M37,91.1h-1.9c-1.4,0-2.5,1.1-2.5,2.5s1.1,2.5,2.5,2.5H37c1.4,0,2.5-1.1,2.5-2.5S38.4,91.1,37,91.1z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="book__01" d="M176.3,78.4c-1.4,0-2.5,1.1-2.5,2.5v48c0,1.3-1,2.3-2.3,2.3h-67.1c-2.5,0-4.7,1.6-5.5,3.9
                                        c-0.5,1.4-1.4,2.6-2.6,3.5c-1.1,0.8-1.4,2.4-0.5,3.6c0.8,1.1,2.4,1.4,3.6,0.5c2-1.5,3.5-3.6,4.3-5.9c0.1-0.2,0.3-0.4,0.6-0.4
                                        h67.1c4.1,0,7.4-3.3,7.4-7.4v-48C178.9,79.5,177.7,78.4,176.3,78.4z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="book__01" d="M171.5,14.6h-3.2v-4c0-3.2-2.6-5.8-5.8-5.8h-56.5c-7.9,0-12,3.6-14.1,7c-2.1-3.4-6.2-7-14.1-7H21.4
                                        c-3.2,0-5.8,2.6-5.8,5.8v4h-3.2c-4.1,0-7.4,3.3-7.4,7.4v107c0,4.1,3.3,7.4,7.4,7.4h67.1c0.3,0,0.6,0.2,0.7,0.5
                                        c0.8,2.3,2.3,4.3,4.2,5.8c1.1,0.9,2.7,0.6,3.6-0.5s0.6-2.7-0.5-3.6c-1.2-0.9-2-2.1-2.5-3.4c-0.8-2.3-3-3.9-5.5-3.9H12.5
                                        c-1.3,0-2.3-1-2.3-2.3V22c0-1.3,1-2.3,2.3-2.3h3.2v99c0,3.7,3,6.7,6.7,6.7h139.2c3.7,0,6.7-3,6.7-6.7v-99h3.2
                                        c1.3,0,2.3,1,2.3,2.3V69c0,1.4,1.1,2.5,2.5,2.5s2.5-1.1,2.5-2.5V22C178.9,17.9,175.6,14.6,171.5,14.6z M22.4,120.3L22.4,120.3
                                        c-0.9,0-1.7-0.7-1.7-1.7V113c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0c0.2,0,0.4,0,0.5,0h0h56.4c6.1,0,9.6,2.9,11,7.2L22.4,120.3
                                        L22.4,120.3z M89.5,111.9L89.5,111.9c-3.2-2.8-7.3-3.9-11.5-3.9H21.5c-0.3,0-0.6-0.2-0.7-0.5c0-0.1-0.1-0.2-0.1-0.3
                                        c0-4,0-93.2,0-96.6c0-0.4,0.3-0.7,0.7-0.7h56.5c11.1,0,11.5,9.4,11.5,10.4V111.9z M94.5,20.3c0-1.1,0.4-10.4,11.5-10.4h56.5
                                        c0.4,0,0.7,0.3,0.7,0.7v96.6h0c0,0.4-0.4,0.8-0.8,0.8h-56.4c-4.2,0-8.4,1.1-11.5,3.9V20.3z M163.3,118.6L163.3,118.6
                                        c0,0.9-0.7,1.7-1.7,1.7H95.1c0,0,0,0,0,0c1.5-4.7,5.1-6.9,9.9-7.2c0.3,0,0.7,0,1,0h56.4c0.2,0,0.4,0,0.5,0c0,0,0.1,0,0.1,0
                                        c0,0,0.1,0,0.1,0V118.6z"/>
                                </g>
                            </g>
                        </g>
                        </svg>
                        
                </div>
                <h2><?= $button2['title']; ?></h2>
            </a>
            <a href="<?= $button3['url']; ?>">
                <div class="home-2__icon">
                        <svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 184 148" style="enable-background:new 0 0 184 148;" xml:space="preserve">
                        <g>
                            <path class="contact__01" d="M36.5,48.3h61.9c1.6,0,2.9-1.3,2.9-2.9s-1.3-2.9-2.9-2.9H36.5c-1.6,0-2.9,1.3-2.9,2.9S34.9,48.3,36.5,48.3z"/>
                            <path class="contact__01" d="M36.5,65.6h61.9c1.6,0,2.9-1.3,2.9-2.9c0-1.6-1.3-2.9-2.9-2.9H36.5c-1.6,0-2.9,1.3-2.9,2.9
                                S34.9,65.6,36.5,65.6z"/>
                            <path class="contact__01" d="M36.5,83h61.9c1.6,0,2.9-1.3,2.9-2.9s-1.3-2.9-2.9-2.9H36.5c-1.6,0-2.9,1.3-2.9,2.9S34.9,83,36.5,83z"/>
                            <path class="contact__01" d="M98.4,94.5h-15c-1.6,0-2.9,1.3-2.9,2.9s1.3,2.9,2.9,2.9h15c1.6,0,2.9-1.3,2.9-2.9S100,94.5,98.4,94.5z"/>
                            <path class="contact__01" d="M73.2,94.5c-1.6,0-2.9,1.3-2.9,2.9s1.3,2.9,2.9,2.9h0c1.6,0,2.9-1.3,2.9-2.9S74.9,94.5,73.2,94.5L73.2,94.5z"
                                />
                            <path class="contact__01" d="M160.5,27.6c-0.4-0.4-0.9-0.6-1.4-0.7l5.7-9.9c1.2-2,1.5-4.3,0.9-6.6c-0.6-2.2-2-4.1-4-5.3l-7-4
                                c-2-1.2-4.3-1.5-6.6-0.9c-2.2,0.6-4.1,2-5.3,4L132,23.2H34.8C25.5,23.2,18,30.7,18,40v64.7c0,9.2,7.5,16.8,16.8,16.8h6.6
                                c1.6,0,2.9-1.3,2.9-2.9s-1.3-2.9-2.9-2.9h-6.6c-6.1,0-11-4.9-11-11V40c0-6.1,4.9-11,11-11h93.9l-21.9,38c-0.2,0.4-0.4,0.8-0.4,1.3
                                l-1.2,21.5c-0.1,1.1,0.5,2.1,1.4,2.7c0.5,0.3,1,0.4,1.5,0.4c0.5,0,1.1-0.2,1.6-0.5l18.2-11.7c0.4-0.2,0.7-0.6,0.9-1l27.7-48
                                c0.1,0.1,0.1,0.2,0.2,0.2c2.3,2.1,3.6,5,3.6,8.1v64.7c0,6.1-4.9,11-11,11h-30.6c-0.8,0-1.5,0.3-2,0.8l-21.7,21.6v-19.6
                                c0-1.6-1.3-2.9-2.9-2.9H67.4c-1.6,0-2.9,1.3-2.9,2.9s1.3,2.9,2.9,2.9h21.7v23.7c0,1.2,0.7,2.2,1.8,2.7c0.4,0.1,0.7,0.2,1.1,0.2
                                c0.8,0,1.5-0.3,2-0.8l25.7-25.7h29.4c9.2,0,16.8-7.5,16.8-16.8V40C166,35.3,164,30.7,160.5,27.6z M147.9,7.2c0.4-0.7,1-1.1,1.7-1.3
                                c0.7-0.2,1.5-0.1,2.2,0.3l7,4c0.7,0.4,1.1,1,1.3,1.7c0.2,0.7,0.1,1.5-0.3,2.2l-5,8.7l-12-6.9L147.9,7.2z M125.1,74.2l-12-6.9
                                L140,20.9l12,6.9L125.1,74.2z M111.8,73.2l8.8,5.1l-9.4,6.1L111.8,73.2z"/>
                            <path class="contact__01" d="M54.7,114.7c-0.8,0-1.5,0.3-2,0.8c-0.5,0.5-0.8,1.3-0.8,2s0.3,1.5,0.8,2c0.5,0.5,1.3,0.8,2,0.8
                                c0.8,0,1.5-0.3,2-0.8c0.5-0.5,0.8-1.3,0.8-2c0-0.8-0.3-1.5-0.8-2C56.2,115.1,55.5,114.7,54.7,114.7z"/>
                        </g>
                        </svg>
                </div>
                <h2><?= $button3['title']; ?></h2>
            </a>
            <a href="<?= $button4['url']; ?>">
                <div class="home-2__icon">
                        <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 184 148" style="enable-background:new 0 0 184 148;" xml:space="preserve">
                        <g>
                            <g>
                                <g>
                                    <path class="laptop__01" d="M155.8,19.1c-2.7,0-123.5,0-127.6,0c-1.9,0-3.4,1.5-3.4,3.4c0,1.3,0,83.2,0,85.6c0,1.9,1.5,3.4,3.4,3.4
                                        h127.6c1.9,0,3.4-1.5,3.4-3.4c0-2.4,0-84.2,0-85.6C159.2,20.6,157.7,19.1,155.8,19.1z M44,24.3h110.1v6.6H44V24.3z M29.9,24.3
                                        h8.9v6.6h-8.9V24.3z M154.1,106.4H29.9V36c2.4,0,122.6,0,124.1,0L154.1,106.4L154.1,106.4z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="laptop__01" d="M139.2,58.8h-42c-1.4,0-2.6,1.2-2.6,2.6c0,1.4,1.2,2.6,2.6,2.6h42c1.4,0,2.6-1.2,2.6-2.6
                                        C141.8,60,140.6,58.8,139.2,58.8z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="laptop__01" d="M112.1,43.9H83.4c-1.4,0-2.6,1.2-2.6,2.6c0,1.4,1.2,2.6,2.6,2.6h28.7c1.4,0,2.6-1.2,2.6-2.6
                                        C114.7,45.1,113.6,43.9,112.1,43.9z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="laptop__01" d="M139.2,69.9h-42c-1.4,0-2.6,1.2-2.6,2.6s1.2,2.6,2.6,2.6h42c1.4,0,2.6-1.2,2.6-2.6S140.6,69.9,139.2,69.9z"
                                        />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="laptop__01" d="M139.2,81h-42c-1.4,0-2.6,1.2-2.6,2.6s1.2,2.6,2.6,2.6h42c1.4,0,2.6-1.2,2.6-2.6S140.6,81,139.2,81z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="laptop__01" d="M139.2,92.1h-42c-1.4,0-2.6,1.2-2.6,2.6s1.2,2.6,2.6,2.6h42c1.4,0,2.6-1.2,2.6-2.6S140.6,92.1,139.2,92.1z"
                                        />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="laptop__01" d="M86.8,58.8h-42c-1.4,0-2.6,1.2-2.6,2.6c0,1.4,1.2,2.6,2.6,2.6h42c1.4,0,2.6-1.2,2.6-2.6
                                        C89.3,60,88.2,58.8,86.8,58.8z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="laptop__01" d="M86.8,69.9h-42c-1.4,0-2.6,1.2-2.6,2.6s1.2,2.6,2.6,2.6h42c1.4,0,2.6-1.2,2.6-2.6S88.2,69.9,86.8,69.9z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="laptop__01" d="M86.8,81h-42c-1.4,0-2.6,1.2-2.6,2.6s1.2,2.6,2.6,2.6h42c1.4,0,2.6-1.2,2.6-2.6S88.2,81,86.8,81z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="laptop__01" d="M86.8,92.1h-42c-1.4,0-2.6,1.2-2.6,2.6s1.2,2.6,2.6,2.6h42c1.4,0,2.6-1.2,2.6-2.6S88.2,92.1,86.8,92.1z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="laptop__01" d="M73.6,43.9h-3.8c-1.4,0-2.6,1.2-2.6,2.6c0,1.4,1.2,2.6,2.6,2.6h3.8c1.4,0,2.6-1.2,2.6-2.6
                                        C76.1,45.1,75,43.9,73.6,43.9z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="laptop__01" d="M171.1,116.8h-4.6c1.9-2.4,3.1-5.4,3.1-8.7V78.5c0-1.4-1.2-2.6-2.6-2.6c-1.4,0-2.6,1.2-2.6,2.6v29.6
                                        c0,4.8-3.9,8.7-8.7,8.7c-3.4,0-124.3,0-127.6,0c-4.8,0-8.7-3.9-8.7-8.7V22.5c0-4.8,3.9-8.7,8.7-8.7h127.6c4.8,0,8.7,3.9,8.7,8.7
                                        v43.9c0,1.4,1.2,2.6,2.6,2.6c1.4,0,2.6-1.2,2.6-2.6V22.5c0-7.6-6.2-13.8-13.8-13.8H28.2c-7.6,0-13.8,6.2-13.8,13.8v85.6
                                        c0,3.3,1.2,6.3,3.1,8.7h-4.6c-4.8,0-8.7,3.9-8.7,8.7v5c0,4.8,3.9,8.7,8.7,8.7H86c1.4,0,2.6-1.2,2.6-2.6c0-1.4-1.2-2.6-2.6-2.6
                                        H12.9c-2,0-3.6-1.6-3.6-3.6v-5c0-2,1.6-3.6,3.6-3.6c1.5,0,47.9,0,51.7,0v2.8c0,4.2,3.4,7.5,7.5,7.5h39.6c4.2,0,7.5-3.4,7.5-7.5
                                        v-2.8c3.8,0,50.3,0,51.7,0c2,0,3.6,1.6,3.6,3.6v5c0,2-1.6,3.6-3.6,3.6H98c-1.4,0-2.6,1.2-2.6,2.6c0,1.4,1.2,2.6,2.6,2.6h73.1
                                        c4.8,0,8.7-3.9,8.7-8.7v-5C179.8,120.7,175.9,116.8,171.1,116.8z M114.2,124.8L114.2,124.8c0,1.3-1.1,2.4-2.4,2.4H72.2
                                        c-1.3,0-2.4-1.1-2.4-2.4v-2.8h44.4L114.2,124.8L114.2,124.8z"/>
                                </g>
                            </g>
                        </g>
                        </svg>
                        
                </div>
                <h2><?= $button4['title']; ?></h2>
            </a>

        </div>

    </section>

<?php endif;
