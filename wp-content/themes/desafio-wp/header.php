<!DOCTYPE html>
<html lang="<?php bloginfo( 'language' ); ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>

<section class="container section-menu">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand linkwhite" href="<?php echo get_option( 'home' ); ?>" title="<?php bloginfo( 'title-site' ); ?>">
            <?php
            $custom_logo = get_theme_mod( 'custom_logo' );
            $logo  = wp_get_attachment_image_src( $custom_logo, 'full' );
            if(has_custom_logo( )):
            ?>
                <img class="img_custom-logo img-fluid" src="<?php echo esc_url( $logo[0] ); ?>" alt="<?php bloginfo( 'title-site' ); ?>">
            <?php
            else:
            ?>
                <h4><?php echo bloginfo( 'name' ); ?></h4>
            <?php
            endif;
            ?>
        </a>

        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse navbar-dark" id="conteudoNavbarSuportado">
                <?php 
                    wp_nav_menu( array(
                        'theme_location'  => 'primary',
                        'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
                        'container'       => 'ul',
                        'container_class' => 'collapse navbar-collapse align-items-center w-100',
                        'container_id'    => 'bs-example-navbar-collapse-1',
                        'menu_class'      => 'navbar-nav ml-auto',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                    ) );
                ?>
        </div>
    </nav>
</section>