<?php get_header(); ?>

<?php  
	// if ( wp_is_mobile() )
	// 	get_template_part( 'mobile', 'home' );
	// else 
	// 	get_template_part( 'desktop', 'home' );
?>

<div class="main">
    <div class="container">
        <section class="slide">
         <!-- Modal -->
            <div id="home-slide" class="carousel slide" data-ride="carousel">
                 <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/slide.jpg)">
                        <div class="carousel-caption right">
                            <div class="carousel-title">如此低的利率，<br />你還在等什麽！</div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="year">
                                        2年固定
                                    </div>
                                    <div class="rate">
                                         4.69<span>%</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="year">
                                        5年固定
                                    </div>
                                    <div class="rate">
                                         4.99<span>%</span>
                                    </div>
                                </div>
                            </div> <!-- /. end of row -->

                            <div class="describe">貸款可達<span>90%</span>，無需貸款保險</div>
                        </div>
                    </div> <!-- /. end of item. -->
                    <div class="item" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/slide03.jpg)"></div> <!-- /. end of item -->
                    <div class="item" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/slide04.jpg)"></div> <!-- /. end of item -->
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
                <span>榮譽見證</span>
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
                            熱點項目
                        </div>
                        <ul class="hot-item-list">
                            <li><a  class="water-mark-doc free" href=""><div class="link-inner">提供RP Data房屋估價報告<br><small>*價格$75</small></div></a></li>
                            <li><a class="water-mark-doc free" href=""><div class="link-inner">提供個人VEDA信用報告</div></a></li>
                            <li><a class="water-mark-clipboard" href=""><div class="link-inner">專業解決信用不良記錄</div></a></li>
                        </ul>
                    </div>
                </div><!-- /. end of #1 col -->
                <div class="col-sm-4">
                    <div class="together-col">
                        <div class="col-title">服務特點</div>
                        <ul class="point-list">
                            <li class="icon icon-award ">
                                <div class="item-title">快速<span>efficiently</span></div>
                                <p>三天Full Approval</p>
                            </li><li class="icon icon-like ">
                                <div class="item-title">放心<span>satisfaction</span></div>
                                <p>兩周成交具有競爭力的利息</p>
                            </li><li class="icon icon-tie ">
                                <div class="item-title">專業<span>professional</span></div>
                                <p>量身定制的貸款計畫</p>
                            </li><li class="icon icon-tea ">
                                <div class="item-title">方便<span>conveniency</span></div>
                                <p>簡單便捷的手續</p>
                            </li><li class="icon icon-sun ">
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
                            <li><a href="">
                                <div class="news-title">· ACA獲得“全澳十佳信貸公司”稱號</div>
                                <div class="content">
                                    <div class="left">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/news01.png" alt="">
                                    </div>
                                    <div class="right">
                                        10月31日，全澳金融大賞在墨爾本會議中心舉行。本次大賞云集了全澳金融公司、投行、知名信貸公司。ACA获颁……
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </a></li><li><a href="">
                                <div class="news-title">· 2015年春节放假通知</div>
                                <div class="content">
                                    <div class="left">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/news02.png" alt="">
                                    </div>
                                    <div class="right">2015年2月8日是中国传统的春节，我们ACA全体上下放假三天，2月11日起恢复营业。如给您造成不便，特此致歉……</div>
                                    <div class="clearfix"></div>
                                </div>
                            </a></li><li><a href="">
                                <div class="news-title">· 2015年春节放假通知</div>
                                <div class="content">
                                    <div class="left">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/news02.png" alt="">
                                    </div>
                                    <div class="right">2015年2月8日是中国传统的春节，我们ACA全体上下放假三天，2月11日起恢复营业。如给您造成不便，特此致歉……</div>
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

<?php get_footer()?>