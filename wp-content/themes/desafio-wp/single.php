<?php
get_header(); 
?>

<section class="container section-single">
    <div class="row d-flex justify-content-center">
        <div class="row col-9 m-2">
            <div class="div-single-cat m-1 rounded text-center px-2"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></div>
            <div class="div-time-video m-1 rounded text-center px-2"><?php the_field('time_video'); ?></div>
        </div>
        <div class="div-single-title col-9 m-1 mb-5">
            <?php the_title( ); ?>
        </div>
        <div class="div-frame-video">
            <iframe class="iframe-video" src="<?php convertUrl(get_field('url_video')); ?>" title="Youtube Video - <?php the_title( ); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="div-single-descrp col-9 mt-5 mb-5">
            <?php the_field('text'); ?>
        </div>
    </div>
</section>

<?php
get_footer();