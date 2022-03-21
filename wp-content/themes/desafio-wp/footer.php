<section class="section-footer container-fluid">
    <div class="container">

        <?php
        $custom_logo = get_theme_mod( 'custom_logo' );
        $logo  = wp_get_attachment_image_src( $custom_logo, 'full' );
        if(has_custom_logo( )):
        ?>
            <a class="linkwhite" href="<?php echo get_option( 'home' ); ?>" title="<?php bloginfo( 'title-site' ); ?>">
                <img class="img_custom-logo img-fluid" src="<?php echo esc_url( $logo[0] ); ?>" alt="<?php bloginfo( 'title-site' ); ?>">
            </a>
        <?php
        else:
        ?>
            <a class="linkwhite" href="<?php echo get_option( 'home' ); ?>" title="<?php bloginfo( 'title-site' ); ?>">
                <h4><?php echo bloginfo( 'name' ); ?></h4>
            </a>
        <?php
        endif;
        ?>
        <div class="div-copy">© <?php echo date("Y") ?> — <?php echo bloginfo( 'name' ); ?> — Todos os direitos reservados.</div>
    </div>
</section>

<?php wp_footer(); ?>

</body>
</html>