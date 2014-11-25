<div class="main home">
    <div class="container">
        <section class="slide">
         <!-- Modal -->
            <div id="home-slide" class="carousel slide" data-ride="carousel">
                 <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php  
                        $ty_img_list = get_option('ty_imglistzh');
                        foreach ($ty_img_list as $key => $item) :;?>
                            <div class="item <?php if( $key == 0 ) echo ' active';?>" style="background-image:url(<?php echo $item['imgurl']; ?>)">
                                <div class="carousel-caption right">
                                    <div class="carousel-title">
                                        <?php echo $item['title']; ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="year">
                                                <?php echo $item['year1']; ?>年固定
                                            </div>
                                            <div class="rate">
                                                 <?php echo $item['rate1']; ?><span>%</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="year">
                                                <?php echo $item['year2']; ?>年固定
                                            </div>
                                            <div class="rate">
                                                 <?php echo $item['rate2'] ?><span>%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="describe"><?php echo $item['describe']; ?></div>
                                </div>
                            </div><!-- /. end of item. -->'
                        <?php endforeach;
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
                            <div class="col-sm-2">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour01.png" alt="">
                                <p class="text-center">Lorem ipsum dolor.</p>
                            </div><div class="col-sm-2">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour03.png" alt="">
                                <p class="text-center">Lorem ipsum dolor.</p>
                            </div><div class="col-sm-2">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour03.png" alt="">
                                <p class="text-center">Lorem ipsum dolor.</p>
                            </div><div class="col-sm-2">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour01.png" alt="">
                                <p class="text-center">Lorem ipsum dolor.</p>
                            </div><div class="col-sm-2">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour01.png" alt="">
                                <p class="text-center">Lorem ipsum dolor.</p>
                            </div><div class="col-sm-2">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour01.png" alt="">
                                <p class="text-center">Lorem ipsum dolor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-2">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour01.png" alt="">
                                <p class="text-center">Lorem ipsum dolor.</p>
                            </div><div class="col-sm-2">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour01.png" alt="">
                                <p class="text-center">Lorem ipsum dolor.</p>
                            </div><div class="col-sm-2">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour03.png" alt="">
                                <p class="text-center">Lorem ipsum dolor.</p>
                            </div><div class="col-sm-2">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour03.png" alt="">
                                <p class="text-center">Lorem ipsum dolor.</p>
                            </div><div class="col-sm-2">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour01.png" alt="">
                                <p class="text-center">Lorem ipsum dolor.</p>
                            </div><div class="col-sm-2">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/honour01.png" alt="">
                                <p class="text-center">Lorem ipsum dolor.</p>
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
                            Hot Projects
                        </div>
                        <ul class="hot-item-list">
                            <li><a class="water-mark-doc free wow fadeInLeft" href=""><div class="link-inner">Lorem ipsum.<br><small>*Price $75</small></div></a></li>
                            <li><a class="water-mark-doc free wow fadeInLeft" href=""><div class="link-inner">Lorem ipsum dolor.</div></a></li>
                            <li><a class="water-mark-clipboard wow fadeInLeft" href=""><div class="link-inner">Lorem ipsum dolor.</div></a></li>
                        </ul>
                    </div>
                </div><!-- /. end of #1 col -->
                <div class="col-sm-4">
                    <div class="together-col">
                        <div class="col-title">Features</div>
                        <ul class="point-list">
                            <li class="icon wow fadeInUp icon-award">
                                <div class="item-title"><span>Efficiently</span></div>
                                <p>Full Approval</p>
                            </li><li class="icon wow fadeInUp icon-like">
                                <div class="item-title"><span>Satisfaction</span></div>
                                <p>Lorem ipsum dolor.</p>
                            </li><li class="icon wow fadeInUp icon-tie">
                                <div class="item-title"><span>Professional</span></div>
                                <p>Lorem ipsum dolor sit.</p>
                            </li><li class="icon wow fadeInUp icon-tea">
                                <div class="item-title"><span>Conveniency</span></div>
                                <p>Lorem ipsum.</p>
                            </li><li class="icon wow fadeInUp icon-sun">
                                <div class="item-title"><span>Enthusiasm</span></div>
                                <p>Lorem ipsum dolor sit.</p>
                            </li>
                        </ul>
                    </div>
                </div><!-- /. end of #2 col -->
                <div class="col-sm-4">
                    <div class="together-col">
                        <div class="col-title">News</div>
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
                        <a href="<?php echo get_permalink( get_page_by_title( 'News' ) ); ?>" class="more">More</a>
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
                                            <p>Nicole</p>
                                            <p>Tel: (02)9553 6610</p>
                                            <p>Mob: 0402 854 150</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-10-5">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/avatar.jpg" alt="">
                                        <div class="info">
                                            <p>Nicole</p>
                                            <p>Tel: (02)9553 6610</p>
                                            <p>Mob: 0402 854 150</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-10-5">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/avatar.jpg" alt="">
                                        <div class="info">
                                            <p>Nicole</p>
                                            <p>Tel: (02)9553 6610</p>
                                            <p>Mob: 0402 854 150</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-10-5">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/avatar.jpg" alt="">
                                        <div class="info">
                                            <p>Nicole</p>
                                            <p>Tel: (02)9553 6610</p>
                                            <p>Mob: 0402 854 150</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-10-5">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/avatar.jpg" alt="">
                                        <div class="info">
                                            <p>Nicole</p>
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
                                            <p>Nicole</p>
                                            <p>Tel: (02)9553 6610</p>
                                            <p>Mob: 0402 854 150</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-10-5">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/avatar.jpg" alt="">
                                        <div class="info">
                                            <p>Nicole</p>
                                            <p>Tel: (02)9553 6610</p>
                                            <p>Mob: 0402 854 150</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-10-5">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/avatar.jpg" alt="">
                                        <div class="info">
                                            <p>Nicole</p>
                                            <p>Tel: (02)9553 6610</p>
                                            <p>Mob: 0402 854 150</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-10-5">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/avatar.jpg" alt="">
                                        <div class="info">
                                            <p>Nicole</p>
                                            <p>Tel: (02)9553 6610</p>
                                            <p>Mob: 0402 854 150</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-10-5">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/avatar.jpg" alt="">
                                        <div class="info">
                                            <p>Nicole</p>
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
                <!-- <span>客戶感言</span> -->
                <span>Customer Feedback</span>
            </div>

            <div id="feedback-slide" class="carousel slide" data-ride="carousel" data-interval=false>
            
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="feedback-wrapper">
                            <div class="feedback-inner">
                                <p><span class="start"></span> 
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam magnam, totam explicabo dolorem eveniet!</span>
                                <span class="end"></span></p>
                                <div class="customer">
                                    Mr.Wang，Lorem ipsum.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="feedback-wrapper">
                            <div class="feedback-inner">
                                <p><span class="start"></span> 
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam magnam, totam explicabo dolorem eveniet!</span>
                                <span class="end"></span></p>
                                <div class="customer">
                                    Mr.Wang，Lorem ipsum.
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
                <span>Cooperative Partner</span>
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