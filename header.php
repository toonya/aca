<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title(); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/animate.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css">

        <?php wp_head()?>
    </head>
    <body class="
        <?php 
            if(wp_is_mobile()) echo ' mobile';
            echo pll_current_language();
        ?>
    ">
        <header>
            <div class="container">
                <div class="col-xs-12 text-right top-bar">
                     <div class="language">
                         <!-- <a href="">中文</a>
                          / 
                         <a href="">English</a> -->
                 
                         <?php if(get_language_list()) echo get_language_list(); ?>
                     </div> <!-- /. end of language -->
                     <div class="contact">
                         <a href="" title="期待您的来电">
                             <span class="glyphicon glyphicon-earphone"></span> 1300 222 667
                         </a>
                     </div> 
                     <!-- /. end of phone call -->
                 </div> <!-- /. end of right header -->
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" class="logo">
                    </div> <!-- /. end of left header -->
                    <div class="col-xs-7 nav-wrapper">
                        <nav class="navbar" role="navigation">
                            <?php 
                                $locatioin = '';
                                if(wp_is_mobile()) $locatioin = 'mobile-menu';
                                else $locatioin = 'header-menu';
                                
                                $head_navigation = array(
                                    'theme_location'  => $locatioin,
                                    'menu'            => '',
                                    'container'       => false,
                                    'container_class' => '',
                                    'container_id'    => '',
                                    'menu_class'      => 'menu-list',
                                    'menu_id'         => '',
                                    'echo'            => true,
                                    'fallback_cb'     => false,
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                    'depth'           => 0,
                                    'walker'          => new Bootsrap_basic(),
                                );
                                            
                                wp_nav_menu( $head_navigation );
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </header> <!-- /.header -->

