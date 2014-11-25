<div class="main home">
    <div class="container">
        <section class="slide">
         <!-- Modal -->
            <div id="home-slide" class="carousel slide" data-ride="carousel">
                 <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php  
                        $img_list = get_option('ty_imglisten');
                        foreach ($img_list as $key => $item) {
                            printf( '<div class="item%s" style="background-image:url(%s)"></div> <!-- /. end of item. -->',
                                ( $key == 0 ) ? ' active' : '',
                                $item['imgurl']
                            );
                        }
                    ?>
                 </div>
             
                 <!-- Controls -->
                <a class="left carousel-control" href="#home-slide" role="button" data-slide="prev">
                </a>
                <a class="right carousel-control" href="#home-slide" role="button" data-slide="next">
                </a>
            </div>
        </section>
    </div> <!-- /. end of slide -->

    <section class="honour">
        <div class="container">
            <div class="title">
                <span><strong>Honors</strong></span>
            </div>
            <!-- Modal -->
            <div id="honour-slide" class="carousel slide" data-ride="carousel" data-interval=false>
            
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-2"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour01.png" alt=""></div>
                            <div class="col-sm-2"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour01.png" alt=""></div>
                            <div class="col-sm-2"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour02.png" alt=""></div>
                            <div class="col-sm-2"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour03.png" alt=""></div>
                            <div class="col-sm-2"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour01.png" alt=""></div>
                            <div class="col-sm-2"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour01.png" alt=""></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-2"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour01.png" alt=""></div>
                            <div class="col-sm-2"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour01.png" alt=""></div>
                            <div class="col-sm-2"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour02.png" alt=""></div>
                            <div class="col-sm-2"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour03.png" alt=""></div>
                            <div class="col-sm-2"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour01.png" alt=""></div>
                            <div class="col-sm-2"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour01.png" alt=""></div>
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
                            Hot Projects
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
                        <div class="col-title">Features</div>
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
                        <div class="col-title">News</div>
                        <ul class="news-list">
                            <li><a href="">
                                <div class="news-title">· ACA獲得“全澳十佳信貸公司”稱號</div>
                                <div class="content">
                                    <div class="left wow fadeInRight">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/news01.png" alt="">
                                    </div>
                                    <div class="right wow fadeInRight">
                                        10月31日，全澳金融大賞在墨爾本會議中心舉行。本次大賞云集了全澳金融公司、投行、知名信貸公司。ACA获颁……
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </a></li><li><a href="">
                                <div class="news-title">· 2015年春节放假通知</div>
                                <div class="content">
                                    <div class="left wow fadeInRight">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/news02.png" alt="">
                                    </div>
                                    <div class="right wow fadeInRight">2015年2月8日是中国传统的春节，我们ACA全体上下放假三天，2月11日起恢复营业。如给您造成不便，特此致歉……</div>
                                    <div class="clearfix"></div>
                                </div>
                            </a></li><li><a href="">
                                <div class="news-title">· 2015年春节放假通知</div>
                                <div class="content">
                                    <div class="left wow fadeInRight">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/news02.png" alt="">
                                    </div>
                                    <div class="right wow fadeInRight">2015年2月8日是中国传统的春节，我们ACA全体上下放假三天，2月11日起恢复营业。如给您造成不便，特此致歉……</div>
                                    <div class="clearfix"></div>
                                </div>
                            </a></li>
                        </ul>
                        <a href="" class="more">更多>></a>
                    </div>
                </div><!-- /. end of #3 col -->
            </div>
        </div>
    </section> <!-- /. end of together -->
    <section class="team">
        <div class="container">
            <div class="title">
                <span><strong>Our Team</strong></span>
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