
    </main>

    <footer class="footer">

        <div class="footer__content">

            <div class="footer__composition">

                    <div class="footer__logo">
                        <picture>
                            <img srcset="<?php if ( !is_front_page() ): ?>../<?php endif; ?>wp-content/themes/wbtp/images/wbtp_footer-logo.png, <?php if ( !is_front_page() ): ?>../<?php endif; ?>wp-content/themes/wbtp/images/wbtp_footer-logo_hr.png 1.5x" src="<?php if ( !is_front_page() ): ?>../<?php endif; ?>wp-content/themes/wbtp/images/wbtp_footer-logo_hr.png" alt="Wisconsin Books to Prisoners logo" />
                        </picture>
                    </div>

                    <div class="footer__logo footer__logo--mobile">
                        <picture>
                            <img srcset="<?php if ( !is_front_page() ): ?>../<?php endif; ?>wp-content/themes/wbtp/images/wbtp_footer-logo_mobile.png, <?php if ( !is_front_page() ): ?>../<?php endif; ?>wp-content/themes/wbtp/images/wbtp_footer-logo_mobile_hr.png 1.5x" src="<?php if ( !is_front_page() ): ?>../<?php endif; ?>wp-content/themes/wbtp/images/wbtp_footer-logo_mobile_hr.png" alt="Wisconsin Books to Prisoners logo" />
                        </picture>
                    </div>

                <div class="footer__contact-info">
                    <span>
                        <h3>Location:</h3>
                        <div class="footer__address">
                            The Social Justice Center
                            <br />1202 Williamson St. #1
                            <br />Madison, WI 53703
                        </div>
                        <hr />
                        <div class="footer__subtext">
                            <span>{</span> we're in the basement <span>}</span>
                        </div>
                    </span>
                    <span>
                        <h3>Email:</h3>
                        <a href="mailto:wisconsinbookstoprisoners@gmail.com">wisconsinbookstoprisoners@gmail.com</a>
                    </span>
                </div>

            </div>

            <div class="footer__network">
                <p>WBTP is a member of the Wisconsin Network for Peace and Justice, and is funded by the Racine Dominican Mission Fund, the Sinsinawa Dominican Sisters, Madison Community Cooperative, and members of our community.</p>
            </div>

            <hr />

            <div class="footer__copyright">
                <p>Website designed &amp; developed by
                    <a href="https://www.linkedin.com/in/dylan-martin-96034a150" target="_blank">Dylan Martin</a>.
                    <br />2018 <span>&copy;</span> Wisconsin Books to Prisoners</p>
            </div>

        </div>

    </footer>

    <script src="<?= get_home_url(); ?>/wp-content/themes/wbtp/js/main.js" type="text/javascript"></script>

    <?php wp_footer(); ?>

</body>

</html>
