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
    <body <?php if(wp_is_mobile()) echo 'class="mobile"' ?>>
       <header>
            <div class="container .row">
                <div class="col-xs-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" class="logo">
                </div> <!-- /. end of left header -->
                <div class="col-xs-6 text-right">
                    <div class="language">
                        <a href="">中文</a>
                         / 
                        <a href="">English</a>
                    </div> <!-- /. end of language -->
                    <!-- <div class="contact">
                        <a href="" title="期待您的来电">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/telephone.png" alt=""> 1300 222 667
                        </a>
                    </div> --> 
                    <!-- /. end of phone call -->
                </div> <!-- /. end of right header -->
            </div>
        </header> <!-- /.header -->

        <nav class="navbar" role="navigation">
            <div class="container">
                <div class="col-sm-8">
                    <ul class="menu-list">
                        <li><a href="#">首  頁</a></li>
                        <li><a href="#">關  于</a></li>
                        <li><a href="#">業務範圍</a></li>
                        <li><a href="#">新  聞</a></li>
                        <li><a href="#">聯繫我們</a></li>
                        <li><a href="#">表  格</a></li>
                    </ul>

                </div>
                <div class="search col-sm-4">
                    <div class="contact">
                        <a href="" title="期待您的来电">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/telephone.png" alt=""> 1300 222 667
                        </a>
                    </div>
                    <!-- <form action="">
                        <input type="text" placeholder="全站搜索">
                        <button type="submit"></button>
                    </form> -->
                </div>
            </div>
        </nav>

