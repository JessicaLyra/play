<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jessica Lyra">
    <title><?php bloginfo('name'); ?></title>
    <!--bootstrap-->
    <link href="<?php bloginfo('template_directory');?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- font -->
    <link href="//db.onlinewebfonts.com/c/01173b246d9d9ea808ea75a26b3b61bb?family=Circular+Spotify+Tx+T+Black" rel="stylesheet" type="text/css"/> 
    <!-- owl caroulsel-->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/owl.carousel.min">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

        <!--HEADER MOBILE-->
              
            <nav class=" d-md-none d-lg-none navbar navbar-expand menu">
                <a class="navbar-brand" href="<?php bloginfo('template_url');?>">
                    <?php  
                    if ( has_custom_logo() ) {
                        the_custom_logo();
                    } else {?>
                       <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png">
                    <?php
                    }
                    ?>
                </a>
                
                    <?php /*  MENU DESATIVADO POR ENQUANTO NO MOBILE
                    wp_nav_menu (
                        array(
                            'theme_location' => 'primary',
                            'container' => 'div',
                            'container_id' => 'conteudoNavbarSuportado',
                            'container_class' => 'collapse navbar-collapse',
                            'menu_id' => 'false',
                            'menu_class' => 'navbar-nav ml-auto',
                            'depth' => 0,
                            'fallback_cb' => 'bs4navwalker::fallback',
                            'walker' => new bs4navwalker()           
                        )
                        );
                    FIM DO MENU MOBILE*/?> 
            </nav>
            <nav class="d-none d-md-block d-lg-block navbar navbar-expand-lg menu">
                <div class="container-fluid alinhamento-menu">    
                    <a class="navbar-brand" href="<?php bloginfo('url');?>">
                        <?php  
                        if ( has_custom_logo() ) {
                            the_custom_logo();
                        } else {?>
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png">
                        <?php
                        }
                        ?>
                    </a>
                
                    <?php wp_nav_menu (
                        array(
                            'theme_location' => 'primary',
                            'container' => 'div',
                            'container_id' => 'conteudoNavbarSuportado',
                            'container_class' => ' itens ',
                            'menu_id' => 'false',
                            'menu_class' => 'navbar-nav ',
                            'depth' => 0,
                            'fallback_cb' => 'bs4navwalker::fallback',
                            'walker' => new bs4navwalker()           
                        )
                        );
                    ?> 
                </div>
            </nav>
            
