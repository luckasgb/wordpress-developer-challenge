<?php
get_header();
if(have_posts()){
    ?>
    <section class="container-fluid section_thumb_destaq" style="background-image: url(<?php echo the_field('thumb') ?>" >
        <div class="container">
            <div class="row">
                <div class="div-single-cat m-1 rounded text-center px-2"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></div>
                <div class="div-time-video m-1 rounded text-center px-2"><?php the_field('time_video'); ?></div>
            </div>
            <div class="div-home-title row">
                <?php the_title( ); ?>
            </div>
            <div class="row div-link-home">
                <a href="<?php echo get_permalink(); ?>">Mais informações</a>
            </div>
        </div>
    </section>
<?php
}
?>



<?php
$cat_args=array(
  'orderby' => 'name',
  'order' => 'ASC'
   );
$categories=get_categories($cat_args);
  foreach($categories as $category) { 
    $args=array(
      'showposts' => 25,
      'category__in' => array($category->term_id),
      'caller_get_posts'=>1
    );
    $posts=get_posts($args);
    if ($posts) {
        ?>
        <section class="container section-cat-thumbs-home pt-5">
            <div class="div-cat-title-home">
                <a href="<?php get_category_link( $category->term_id ) ?>" title="<?php sprintf( __( "View all posts in %s" ), $category->name ) ?>" ><?php echo $category->name ?></a>
            </div>
            <div class="carousel-thumbs-home dragscroll">
            <?php
            foreach($posts as $post) {
                setup_postdata($post); 
                ?>
                    <div class="div_quadro_video d-inline-block align-top">
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
            } // foreach($posts
            ?>
            </div>
        </section>
        <?php
      } // if ($posts
    } // foreach($categories
?>

<?php
get_footer();