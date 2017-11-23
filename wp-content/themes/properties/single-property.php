<?php
get_header(); ?>


<?php
if ( have_posts() ) : while ( have_posts() ) :    the_post();
?>
  <!-- post -->



        <div class="slider">
        <?php

                $fotos = get_field('fotos');

                $cntr = 0;

                foreach($fotos as $foto)
                {
                    $cntr ++;
                    echo '<div class="sl" style="background-image:  url('. $foto['url'] .'); ?>">

<h1>ghgyguyguyguyguyguyguygyuguy</h1>


</div>';
                   // echo '<img src="' . $foto['url'] . '" alt"" />';
                } ?>
        </div>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <h1><?php the_field('content-header');?></h1>
                <h2><?php the_content();?></h2>
            </div>
        </div>
    </div>

</div>


<?php endwhile; ?>
  <!-- post navigation -->
<?php else: ?>
  <!-- no posts found -->
<?php endif; ?>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <<?php get_sidebar(); ?>
                </div>
            </div>
        </div>

    </div>





<?php get_footer(); ?>