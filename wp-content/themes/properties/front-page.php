<?php
get_header(); ?>

<?php
$qry = new WP_Query([
        'post_type' => 'property',
        'posts_per_page' => 3,
        'orderby' => 'title',
        'order' => 'ASC'
]); ?>

<?php if ( $qry->have_posts() ) :
while ( $qry->have_posts() ) : $qry->the_post();
//template tags ?>
<h2><?php the_title(); ?>

    <?php   the_excerpt(); ?>

    <?php
    $fotos = get_field('fotos');
    //śvar_dump($fotos);

    foreach($fotos as $foto)
    {
        //echo <pre>', var_dump($foto), '</pre>';
        echo '<img src="' . $foto['url'] . '" alt"" />';
    }
    ?>


    <?php endwhile; ?>
      <!-- post navigation -->
    <?php else: ?>
      <!-- no posts found -->
    <?php endif; ?>

<?php get_footer(); ?>