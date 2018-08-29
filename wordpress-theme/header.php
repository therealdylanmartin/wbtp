<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head>
    
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" type="image/png" href="wp-content/themes/wbtp/images/favicon.ico" />
    <link rel="icon" type="image/png" href="wp-content/themes/wbtp/images/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="wp-content/themes/wbtp/images/favicon-16x16.png" sizes="16x16" />

    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400i,500,500i,700|Lusitana:700" rel="stylesheet" />
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css" />

    <title>Wisconsin Books to Prisoners : <?php the_title(); ?></title>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <header class="header">

        <h1>Wisconsin Books to Prisoners</h1>

        <div class="header__content">

            <div class="header__logo">
                <picture>
                    <img srcset="<?php if ( !is_front_page() ): ?>../<?php endif; ?>wp-content/themes/wbtp/images/wbtp_header-logo.png, <?php if ( !is_front_page() ): ?>../<?php endif; ?>wp-content/themes/wbtp/images/wbtp_header-logo_hr.png 1.5x" src="<?php if ( !is_front_page() ): ?>../<?php endif; ?>wp-content/themes/wbtp/images/wbtp_header-logo_hr.png" alt="Wisconsin Books to Prisoners" title="Wisconsin Books to Prisoners" />
                </picture>
            </div>

            <div class="header__logo header__logo--tablet">
                <picture>
                    <img srcset="<?php if ( !is_front_page() ): ?>../<?php endif; ?>wp-content/themes/wbtp/images/wbtp_footer-logo_mobile.png, <?php if ( !is_front_page() ): ?>../<?php endif; ?>wp-content/themes/wbtp/images/wbtp_footer-logo_mobile_hr.png 1.5x" src="<?php if ( !is_front_page() ): ?>../<?php endif; ?>wp-content/themes/wbtp/images/wbtp_footer-logo_mobile.png" alt="Wisconsin Books to Prisoners" title="Wisconsin Books to Prisoners" />
                </picture>
            </div>

            <div class="header__logo header__logo--mobile">
                <picture>
                    <img srcset="<?php if ( !is_front_page() ): ?>../<?php endif; ?>wp-content/themes/wbtp/images/wbtp_header-logo_mobile.png, <?php if ( !is_front_page() ): ?>../<?php endif; ?>wp-content/themes/wbtp/images/wbtp_header-logo_mobile_hr.png 1.5x" src="<?php if ( !is_front_page() ): ?>../<?php endif; ?>wp-content/themes/wbtp/images/wbtp_header-logo_mobile.png" alt="Wisconsin Books to Prisoners" title="Wisconsin Books to Prisoners" />
                </picture>
            </div>

            <nav>
                <ul>
                    <li>
                        <a <?php if( is_front_page() ) : echo 'class="nav-disabled" '; endif; ?><?php if( !is_front_page() ) : echo 'href="' . get_home_url() . '"'; endif; ?>>Home</a>
                        <div class="header__mask"></div>
                        <div class="header__divider"></div>
                    </li>
                    <li>
                        <a <?php if( is_page('Resources') ) : echo 'class="nav-disabled" '; endif; ?><?php if( !is_page('resources') ) : echo 'href="' . get_home_url() . '/resources"'; endif; ?>>Resources</a>
                        <div class="header__mask"></div>
                        <div class="header__divider"></div>
                    </li>
                    <li>
                        <a <?php if( is_page('Donate') ) : echo 'class="nav-disabled" '; endif; ?><?php if( !is_page('donate') ) : echo 'href="' . get_home_url() . '/donate"'; endif; ?>>Donate</a>
                        <div class="header__mask"></div>
                        <div class="header__divider"></div>
                    </li>
                    <li>
                        <a <?php if( is_page('Contact Us') ) : echo 'class="nav-disabled" '; endif; ?><?php if( !is_page('Contact Us') ) : echo 'href="' . get_home_url() . '/contact-us"'; endif; ?>>Contact Us</a>
                        <div class="header__mask"></div>
                    </li>
                </ul>
            </nav>

        </div>

    </header>

    <main class="main">
