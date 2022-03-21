<?php

get_header(); 

?>
<section class="container section-category">
    <div class="row">
        <div class="div-coluna-nomecategoria">
            <?php 
                add_filter( 'get_the_archive_title', function ($title) {    
                    if ( is_category() ) {    
                            $title = single_cat_title( '', false );    
                        }
                    return $title;    
                });
                ?>
                <h2 class="h2-titulo_categoria">
                    <?php the_archive_title( '', '' ); ?>
                </h2>
                <p>
                    <?php the_archive_description( ); ?>
                </p>
        </div>
        
        <div class="row div-coluna-videoscategoria">
            <?php
            if (have_posts()) :
                while (have_posts()) : 
                    the_post();  
                ?>  
                    <div class="div_quadro_video">
                        <a href="<?php echo get_permalink(); ?>">
                            <div class="div-thumb-video rounded" title="<?php the_title( ); ?>" style="background-image: url(<?php echo the_field('thumb') ?>)">
                                
                            </div>
                            <div class="div-time-video m-1 rounded text-center px-1">
                                <?php the_field('time_video'); ?>
                            </div>
                            <div class="div-title-video m-1">
                                <?php the_title( ); ?>
                            </div>
                        </a>
                    </div>
                <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>


<?php
get_footer();