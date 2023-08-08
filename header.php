<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Fonts -->
    <link rel="stylesheet" href="/fonts/Web/css/all.min.css" />
    <!-- Css -->
    <link rel="stylesheet" href="/reset.css" />
    <link rel="stylesheet" href="/style.css" />

    <!-- Website Title -->
    <title><?php bloginfo('title'); ?></title>

    <?php wp_head(); ?>
</head>

<body>
    <!-- Navbar
    ===================================================== -->
    <nav id="navbar">
        <div class="container">
            <!-- Navigation -->
            <div class="navbar-navigation clearfix">
                <!-- Brand -->
                <div class="navbar-brand">

                    <?php echo get_custom_logo(); ?>

                </div>
                <div class="navbar-navigation-elements">
                    <div class="container">
                        <!-- Social -->
                        <div class="navbar-navigation-social">
                            <ul>
                                <li class="navbar-divider">
                                    <span></span>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-github"></i>
                                        <span>GitHub</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-twitter"></i>
                                        <span>Twitter</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-instagram"></i>
                                        <span>Instagram</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Links -->
                        <div class="navbar-navigation-links">
                            <?php

                            wp_nav_menu(array(
                                'theme_location'  => 'primary',
                                'depth'           => 3, // 1 = no dropdowns, 2 = with dropdowns.
                                'container'       => '',
                                'menu'            => '',
                                'menu_class'      => '',
                            ));

                            ?>
                        </div>
                    </div>
                </div>
                <!-- Navigation Links Mobile -->
                <div class="navbar-links-mobile">
                    <div class="navbar-menu-mobile">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </nav>