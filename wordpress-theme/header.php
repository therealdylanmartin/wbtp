<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head>
    
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php if ( !is_page('Thank You') ): ?><meta name="keywords" content="wisconsin books to prisoners, madison, wi, wisconsin, madison wi, donate books, donate books in madison, madison non-profit, nonprofit, madison charity, wbtp madison, abolitionist, wisconsin abolitionist, wi abolitionist resources, abolitionist resources, books for prisoners, prisoner support, wisconsin inmate support, inmate support, prisoner resources, wi prisoner resources" /><?php endif; ?>
    <?php if ( !is_page('Thank You') ): ?><meta name="description" content="<?php if ( is_front_page() ): ?>Wisconsin Books to Prisoners, based in Madison, sends requested books to inmates throughout the state of Wisconsin. In addition, WBTP offers additional resources for prisoners, abolitionists, activists, and the general public alike.<?php endif; ?><?php if( is_page('Resources') ): ?>In order to assist like-minded individuals that support the rights of the incarcerated, Wisconsin Books to Prisoners offers this extensive page of local and national resources.<?php endif; ?><?php if( is_page('Donate') ): ?>Donate books for Wisconsin inmates or help support Wisconsin Books to Prisoners by making a charitable donation.<?php endif; ?><?php if( is_page('Donate Books') ): ?>Donate your books to Wisconsin Books to Prisoners to help support local inmates by bringing your donation to local drop-sites in Madison or Milwaukee.<?php endif; ?><?php if( is_page('Contact Us') ): ?>Wisconsin Books to Prisoners is located in Madison, WI and meets every Wednesday from 3pm - 6pm. We invite you to reach out to WBTP using the online contact form.<?php endif; ?>" /><?php endif; ?>
    <?php if ( is_page('Thank You') ): ?><meta name="robots" content="noindex" /><?php endif; ?>

    <link rel="shortcut icon" type="image/png" href="wp-content/themes/wbtp/images/favicon.ico" />
    <link rel="icon" type="image/png" href="wp-content/themes/wbtp/images/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="wp-content/themes/wbtp/images/favicon-16x16.png" sizes="16x16" />

    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400i,500,500i,700|Lusitana:700" rel="stylesheet" />
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css" />

    <title>Wisconsin Books to Prisoners : <?php the_title(); ?></title>

</head>

<body <?php body_class(); ?>>

    <header class="header">

        <h1>Wisconsin Books to Prisoners : <?php the_title(); ?></h1>

        <div class="header__content">

            <div class="header__logo">
                <a <?php if( is_front_page() ) : echo 'class="nav-disabled" '; endif; ?><?php if( !is_front_page() ) : echo 'href="' . get_home_url() . '"'; endif; ?>>
                    <picture>
                        <img srcset="<?php if ( !is_front_page() ): ?>../<?php endif; ?>wp-content/themes/wbtp/images/wbtp_header-logo.png, <?php if ( !is_front_page() ): ?>../<?php endif; ?>wp-content/themes/wbtp/images/wbtp_header-logo_hr.png 1.5x" src="<?php if ( !is_front_page() ): ?>../<?php endif; ?>wp-content/themes/wbtp/images/wbtp_header-logo_hr.png" alt="Wisconsin Books to Prisoners" title="Wisconsin Books to Prisoners" />
                    </picture>
                </a>
            </div>

            <div class="header__logo header__logo--tablet">
                <a <?php if( is_front_page() ) : echo 'class="nav-disabled" '; endif; ?><?php if( !is_front_page() ) : echo 'href="' . get_home_url() . '"'; endif; ?>>
                    <picture>
                        <img srcset="<?php if ( !is_front_page() ): ?>../<?php endif; ?>wp-content/themes/wbtp/images/wbtp_footer-logo_mobile.png, <?php if ( !is_front_page() ): ?>../<?php endif; ?>wp-content/themes/wbtp/images/wbtp_footer-logo_mobile_hr.png 1.5x" src="<?php if ( !is_front_page() ): ?>../<?php endif; ?>wp-content/themes/wbtp/images/wbtp_footer-logo_mobile.png" alt="Wisconsin Books to Prisoners" title="Wisconsin Books to Prisoners" />
                    </picture>
                </a>
            </div>

            <div class="header__logo header__logo--mobile">
                <a <?php if( is_front_page() ) : echo 'class="nav-disabled" '; endif; ?><?php if( !is_front_page() ) : echo 'href="' . get_home_url() . '"'; endif; ?>>
                    <picture>
                        <img srcset="<?php if ( !is_front_page() ): ?>../<?php endif; ?>wp-content/themes/wbtp/images/wbtp_header-logo_mobile.png, <?php if ( !is_front_page() ): ?>../<?php endif; ?>wp-content/themes/wbtp/images/wbtp_header-logo_mobile_hr.png 1.5x" src="<?php if ( !is_front_page() ): ?>../<?php endif; ?>wp-content/themes/wbtp/images/wbtp_header-logo_mobile.png" alt="Wisconsin Books to Prisoners" title="Wisconsin Books to Prisoners" />
                    </picture>
                </a>
            </div>

            <nav>
                <ul>
                    <li>
                        <a <?php if( is_page('Resources') ) : echo 'class="nav-disabled" '; endif; ?><?php if( !is_page('Resources') ) : echo 'href="' . get_home_url() . '/resources"'; endif; ?>>Resources</a>
                        <div class="header__mask"></div>
                        <div class="header__divider"></div>
                    </li>
                    <li>
                        <a <?php if( is_page('Contribute') ) : echo 'class="nav-disabled" '; endif; ?><?php if( !is_page('Contribute') ) : echo 'href="' . get_home_url() . '/contribute"'; endif; ?>>Contribute</a>
                        <div class="header__mask"></div>
                        <div class="header__divider"></div>
                    </li>
                    <li>
                        <a <?php if( is_page('Donate Books') ) : echo 'class="nav-disabled" '; endif; ?><?php if( !is_page('Donate Books') ) : echo 'href="' . get_home_url() . '/donate-books"'; endif; ?>>Donate Books</a>
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
