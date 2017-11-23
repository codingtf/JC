<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>

        <?php echo get_bloginfo('name'); ?> </title>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <?php wp_head(); ?>
</head>
<body>

    <div class="header1">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <p>Jordan-Curry</p>
                </div>
                <div class="col-sm-4">
                    <p>Tel: +22 456 53 23</p>
                </div>
                <div class="col-sm-4">
                    <p>Jordan-Curry</p>
                </div>
            </div>
        </div>

    </div>

    <div class="header2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">


                        <?php wp_nav_menu([
                            'menu' => 'main',
                            'menu_class' => 'nav']); ?>

                </div>
            </div>
        </div>
    </div>


