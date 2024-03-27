<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="header">

        <div class="header-menu">
            <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
        </div>

        <div class="header-cover">
            <div class="cover-content ">
                <h1>Olivier DAL FERRO</h1>
            </div>
        </div>

    </header>
    
<?php wp_body_open(); ?>

