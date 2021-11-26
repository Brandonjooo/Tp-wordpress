<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="<?php bloginfo('charset'); ?>" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open();?>

    <header>
        <nav>
            <div>
                <div class="flex flex-col" >
                    <a href="#"><?php bloginfo('name'); ?> </a>
                    <p class="text-base"><?php bloginfo('description'); ?></p>
                </div>
                <div>

                    <?php wp_nav_menu(array(
                        'container' => '',
                        'theme_location' => 'primary',
                        'menu_class' => "navigation-main hidden md:flex flex-row text-white items-center justify-center  text-base ",
                        'menu_id' => 'main-menu',
                    )); ?>
                </div>
            </div>
        </nav>
    </header>