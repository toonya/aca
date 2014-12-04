<div class="main home">
    <section class="slide">
         <?php
            $slideId = get_option('slideshow-cn');
            
            if($slideId) layerslider($slideId, 'homepage');
        ?>
    </section> <!-- /. end of slide -->

    <section class="honour">
        <div class="container">
            <div class="title">
                <span>榮譽見證</span>
            </div>
            <!-- Modal -->
            <div id="honour-slide" class="carousel slide" data-ride="carousel" data-interval=false>
            
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-2">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour01.png" alt="">
                                <p class="text-center">内容内容内容</p>
                            </div><div class="col-sm-2">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour03.png" alt="">
                                <p class="text-center">内容内容内容</p>
                            </div><div class="col-sm-2">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour03.png" alt="">
                                <p class="text-center">内容内容内容</p>
                            </div><div class="col-sm-2">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour01.png" alt="">
                                <p class="text-center">内容内容内容</p>
                            </div><div class="col-sm-2">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour01.png" alt="">
                                <p class="text-center">内容内容内容</p>
                            </div><div class="col-sm-2">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour01.png" alt="">
                                <p class="text-center">内容内容内容</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-2">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour01.png" alt="">
                                <p class="text-center">内容内容内容</p>
                            </div><div class="col-sm-2">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour01.png" alt="">
                                <p class="text-center">内容内容内容</p>
                            </div><div class="col-sm-2">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour03.png" alt="">
                                <p class="text-center">内容内容内容</p>
                            </div><div class="col-sm-2">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour03.png" alt="">
                                <p class="text-center">内容内容内容</p>
                            </div><div class="col-sm-2">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour01.png" alt="">
                                <p class="text-center">内容内容内容</p>
                            </div><div class="col-sm-2">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour01.png" alt="">
                                <p class="text-center">内容内容内容</p>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Controls -->
                <a class="left carousel-control" href="#honour-slide" role="button" data-slide="prev"></a>
                <a class="right carousel-control" href="#honour-slide" role="button" data-slide="next"></a>
            </div>
        </div>
    </section> <!-- /. end of honour -->
    <section class="together">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="together-col">
                        <div class="col-title">
                            熱點項目
                        </div>
                        <ul class="hot-item-list">
                            <li><a class="water-mark-doc free wow fadeInLeft" href=""><div class="link-inner">提供RP Data房屋估價報告<br><small>*價格$75</small></div></a></li>
                            <li><a class="water-mark-doc free wow fadeInLeft" href=""><div class="link-inner">提供個人VEDA信用報告</div></a></li>
                            <li><a class="water-mark-clipboard wow fadeInLeft" href=""><div class="link-inner">專業解決信用不良記錄</div></a></li>
                        </ul>
                    </div>
                </div><!-- /. end of #1 col -->
                <div class="col-sm-4">
                    <div class="together-col">
                        <div class="col-title">服務特點</div>
                        <ul class="point-list">
                            <li class="icon wow fadeInUp icon-award">
                                <div class="item-title">快速<span>efficiently</span></div>
                                <p>三天Full Approval</p>
                            </li><li class="icon wow fadeInUp icon-like">
                                <div class="item-title">放心<span>satisfaction</span></div>
                                <p>兩周成交具有競爭力的利息</p>
                            </li><li class="icon wow fadeInUp icon-tie">
                                <div class="item-title">專業<span>professional</span></div>
                                <p>量身定制的貸款計畫</p>
                            </li><li class="icon wow fadeInUp icon-tea">
                                <div class="item-title">方便<span>conveniency</span></div>
                                <p>簡單便捷的手續</p>
                            </li><li class="icon wow fadeInUp icon-sun">
                                <div class="item-title">熱情<span>enthusiasm</span></div>
                                <p>客戶至上的服務</p>
                            </li>
                        </ul>
                    </div>
                </div><!-- /. end of #2 col -->
                <div class="col-sm-4">
                    <div class="together-col">
                        <div class="col-title">新 聞</div>
                        <ul class="news-list">
                            <?php  
                                $news_args = array(
                                    'post_type' => 'post',
                                    'lang' => pll_current_language(), // query German and French posts
                                    'showposts' => 3,
                                );
                            
                                $news_posts = new WP_Query($news_args);
                            
                                while ($news_posts->have_posts()) {         
                                    $news_posts->the_post();
                                    ?>

                                    <li><a href="<?php the_permalink(); ?>">
                                        <div class="news-title">· <?php the_title(); ?></div>
                                        <div class="content">
                                            <?php  
                                                $post_thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'large')[0];
                                                
                                                if(!(empty($post_thumb_url))):;?>
                                                    <div class="left wow fadeInRight">
                                                        <img class="img-responsive" src="<?php echo $post_thumb_url; ?>" alt="">
                                                    </div>
                                                    <div class="right wow fadeInRight">
                                                        <?php echo wp_trim_words(get_the_content(), 50); ?>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                <?php

                                                else:; ?>
                                                    <div class="wow fadeInRight">
                                                        <?php echo wp_trim_words(get_the_content(), 50); ?>
                                                    </div>
                                            <?php endif; ?>
                                        </div>
                                    </a></li>
                            
                                    <?php
                                }
                            
                                wp_reset_postdata();
                            ?>
                        </ul>
                        <a href="<?php echo get_permalink( get_page_by_title( '新 闻' ) ); ?>" class="more">更多>></a>
                    </div>
                </div><!-- /. end of #3 col -->
            </div>
        </div>
    </section> <!-- /. end of together -->
    <section class="team">
        <div class="container">
            <div class="title">
                <span>精英團隊</span>
            </div>

            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div id="team-slide" class="carousel slide" data-ride="carousel" data-interval=false>
                    
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-sm-3 col-10-5">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/avatar.jpg" alt="">
                                        <div class="info">
                                            <p>Nicole 張小姐</p>
                                            <p>Tel: (02)9553 6610</p>
                                            <p>Mob: 0402 854 150</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-10-5">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/avatar.jpg" alt="">
                                        <div class="info">
                                            <p>Nicole 張小姐</p>
                                            <p>Tel: (02)9553 6610</p>
                                            <p>Mob: 0402 854 150</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-10-5">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/avatar.jpg" alt="">
                                        <div class="info">
                                            <p>Nicole 張小姐</p>
                                            <p>Tel: (02)9553 6610</p>
                                            <p>Mob: 0402 854 150</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-10-5">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/avatar.jpg" alt="">
                                        <div class="info">
                                            <p>Nicole 張小姐</p>
                                            <p>Tel: (02)9553 6610</p>
                                            <p>Mob: 0402 854 150</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-10-5">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/avatar.jpg" alt="">
                                        <div class="info">
                                            <p>Nicole 張小姐</p>
                                            <p>Tel: (02)9553 6610</p>
                                            <p>Mob: 0402 854 150</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-3 col-10-5">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/avatar.jpg" alt="">
                                        <div class="info">
                                            <p>Nicole 張小姐</p>
                                            <p>Tel: (02)9553 6610</p>
                                            <p>Mob: 0402 854 150</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-10-5">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/avatar.jpg" alt="">
                                        <div class="info">
                                            <p>Nicole 張小姐</p>
                                            <p>Tel: (02)9553 6610</p>
                                            <p>Mob: 0402 854 150</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-10-5">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/avatar.jpg" alt="">
                                        <div class="info">
                                            <p>Nicole 張小姐</p>
                                            <p>Tel: (02)9553 6610</p>
                                            <p>Mob: 0402 854 150</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-10-5">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/avatar.jpg" alt="">
                                        <div class="info">
                                            <p>Nicole 張小姐</p>
                                            <p>Tel: (02)9553 6610</p>
                                            <p>Mob: 0402 854 150</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-10-5">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/avatar.jpg" alt="">
                                        <div class="info">
                                            <p>Nicole 張小姐</p>
                                            <p>Tel: (02)9553 6610</p>
                                            <p>Mob: 0402 854 150</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Controls -->
                        <a class="left carousel-control" href="#team-slide" role="button" data-slide="prev"></a>
                        <a class="right carousel-control" href="#team-slide" role="button" data-slide="next"></a>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- /. end of team -->
    <section class="feedback">
        <div class="container">
            <div class="title">
                <span>客戶感言</span>
            </div>

            <div id="feedback-slide" class="carousel slide" data-ride="carousel" data-interval=false>
            
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="feedback-wrapper">
                            <div class="feedback-inner">
                                <p><span class="start"></span> 
                                那年春天，在我們蝸居的第3個年頭即將過去時，我們決定貸款買房。如今我們已經住在了明亮的新家，感謝ACA，想客戶所想，急客戶所急，幫助我們規劃出成功的貸款方案！
                                <span class="end"></span></p>
                                <div class="customer">
                                    王先生，中餐馆店主
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="feedback-wrapper">
                            <div class="feedback-inner">
                                <p><span class="start"></span> 
                                那年春天，在我們蝸居的第3個年頭即將過去時，我們決定貸款買房。如今我們已經住在了明亮的新家，感謝ACA，想客戶所想，急客戶所急，幫助我們規劃出成功的貸款方案！
                                <span class="end"></span></p>
                                <div class="customer">
                                    王先生，中餐馆店主
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            
                <!-- Controls -->
                <a class="left carousel-control" href="#feedback-slide" role="button" data-slide="prev"></a>
                <a class="right carousel-control" href="#feedback-slide" role="button" data-slide="next"></a>
            </div>
        </div>
    </section> <!-- /. end of feedback -->
    <section class="co-op">
        <div class="container">
            <div class="title">
                <span>合作伙伴</span>
            </div>

            <div id="co-op-slide" class="carousel slide" data-ride="carousel">
            
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="item-inner">
                                    <div class="img-wrapper">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/co-op01.png" alt="">
                                    </div><div class="img-wrapper">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/co-op02.png" alt="">
                                    </div><div class="img-wrapper">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/co-op03.png" alt="">
                                    </div><div class="img-wrapper">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/co-op04.png" alt="">
                                    </div><div class="img-wrapper">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/co-op05.png" alt="">
                                    </div><div class="img-wrapper">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/co-op06.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="item-inner">
                                    <div class="img-wrapper">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/co-op01.png" alt="">
                                    </div><div class="img-wrapper">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/co-op02.png" alt="">
                                    </div><div class="img-wrapper">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/co-op03.png" alt="">
                                    </div><div class="img-wrapper">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/co-op04.png" alt="">
                                    </div><div class="img-wrapper">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/co-op05.png" alt="">
                                    </div><div class="img-wrapper">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/co-op06.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Controls -->
                <a class="left carousel-control" href="#co-op-slide" role="button" data-slide="prev"></a>
                <a class="right carousel-control" href="#co-op-slide" role="button" data-slide="next"></a>
            </div>
        </div>
    </section> <!-- /. end of co-op -->
</div>