@extends('layouts.app')

@section('title', '欢迎来到庄远')
@section('styles')
@parent
@endsection

@section('content')
<!-- CONTENT BEGIN -->
<div id="content" class="right_sidebar">
    <div class="inner" style="padding-bottom:20px;">
        <div class="general_content">
            <div class="main_content">
                <div class="block_special_topic">
                    <div class="type"><p>欢迎来到庄远物流</p></div>
                    <div class="title"><p><a href="#">我们将以热诚的态度竭诚为您服务</a></p></div>
                </div>
                <div class="separator" style="height:17px;"></div>

                <div class="block_home_slider" style="border:none;">
                    <div id="home_slider" class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="slide">
                                    <img src="<?php echo asset('images/quanqiu.jpg');?>" alt="" />
                                    <div class="caption">
                                        <p class="title">简便的操作，全球的网络</p>
                                        <p>助力您的国际业务成功运转</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="slide">
                                    <img src="images/timg.jpg" alt="" />
                                    <div class="caption">
                                        <p class="title">快速送达!</p>
                                        <p>国际快递专家确保您的快递全程无忧</p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="slide">
                                    <img src="images/hangkong.jpg" alt="" />
                                    <div class="caption">
                                        <p class="title">更好的货物追踪可视性</p>
                                        <p>管理您复杂的全球供应链</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="slide">
                                    <img src="images/qiche.jpg" alt="" />
                                    <div class="caption">
                                        <p class="title">更好的货物追踪可视性</p>
                                        <p>管理您复杂的全球供应链</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="sidebar">
                <h1 style="color:#000">货物跟踪查询</h1>

                <p class="general_subtitle" style="color:#000 !important;">
                    如果您要一次跟踪多达10个运单号码，请用逗号（，）或者回车键（Enter）分隔各个运单号码。
                </p>

                <div class="block_contact_form">
                    <form id="order_form" method="POST" action="<?php echo url('order/search');?>" />
                        <input type="hidden" name="_token" value="<?php echo csrf_token();?>" >
                        <div class="textarea" style="width:auto;height:auto;border:2px dotted">
                            <textarea rows="4" cols="40" name="order_sns" style="width:auto;height:auto;" ></textarea>
                        </div>
                        <input type="submit" id="search_btn" class="general_button" value="跟 踪" />
                    </form>
                    <img src="<?php echo asset('images/contact_us.jpg');?>" alt="联系我们"/>
                </div>
            </div>
            <div class="clearboth"></div>
        </div>

    <style>
    </style>
    <div class="inner">
        <div class="line_3" style="margin:34px 0px 28px;"></div>
        <div class="block_topic_news" style="margin-left:20px;margin-bottom:20px;width:100%;">
            <div class="my_article" style="width:50%;">
                <div class="my_article_list">
                    <div class="title"><p>最新公告</p></div>
                    <ul>
                        <?php foreach($news1 as $n1):?>
                        <li>
                            <a href="<?php echo url('article/view', array($n1->article_id));?>">
                                <span class="article-title"><?php echo $n1->title;?></span>
                                <span><?php echo $n1->created_at;?></span>
                            </a>
                        </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
                <div class="my_article_list">
                    <div class="title"><p>行业动态</p></div>
                    <ul>
                        <?php foreach($news2 as $n2):?>
                        <li>
                            <a href="<?php echo url('article/view', array($n2->article_id));?>">
                                <span class="article-title"><?php echo $n2->title;?></span>
                                <span><?php echo $n2->created_at;?></span>
                            </a>
                        </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
        </div>


        <h3 style="font-size:16px;">合作伙伴</h3>
        <div class="line_3" style="margin:-4px 0px 18px;"></div>

        <div class="block_best_materials" style="width:100%;">
            <div class="slider" style="width:100%;">
                <div id="best_materials_slider" class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="block_best_material_post">
                                <div class="f_pic"><a href="http://www.cn.dhl.com/zh/logistics/freight_transportation/ocean_freight.html" class="w_hover"><img src="<?php echo asset('images/partners/dhl.jpg');?>" alt="" /><span></span></a></div>
                            </div>
                        </li>

                        <li>
                            <div class="block_best_material_post">
                                <div class="f_pic"><a href="http://www.fedex.com/cn/" class="w_hover"><img src="<?php echo asset('images/partners/fedex.jpg');?>" alt="" /><span></span></a></div>
                            </div>
                        </li>
                        <li>
                            <div class="block_best_material_post">
                                <div class="f_pic"><a href="https://www.ups.com/cn" class="w_hover"><img src="<?php echo asset('images/partners/ups.jpg');?>" alt="" /><span></span></a></div>
                            </div>
                        </li>

                        <li>
                            <div class="block_best_material_post">
                                <div class="f_pic"><a href="https://www.tnt.com/express/zh_cn/site/home.html" class="w_hover"><img src="<?php echo asset('images/partners/tnt.jpg');?>" alt="" /><span></span></a></div>
                            </div>
                        </li>
                        <li>
                            <div class="block_best_material_post">
                                <div class="f_pic"><a href="http://www.ems.com.cn" class="w_hover"><img src="<?php echo asset('images/partners/ems.jpg');?>" alt="" /><span></span></a></div>
                            </div>
                        </li>

                        <li>
                            <div class="block_best_material_post">
                                <div class="f_pic"><a href="http://www.sf-express.com/cn/sc/" class="w_hover"><img src="<?php echo asset('images/partners/sf.jpg');?>" alt="" /><span></span></a></div>
                            </div>
                        </li>
                        <li>
                            <div class="block_best_material_post">
                                <div class="f_pic"><a href="http://www.sto.cn/" class="w_hover"><img src="<?php echo asset('images/partners/sto.jpg');?>" alt="" /><span></span></a></div>
                            </div>
                        </li>

                        <li>
                            <div class="block_best_material_post">
                                <div class="f_pic"><a href="http://www.yto.net.cn/gw/index/index.html" class="w_hover"><img src="<?php echo asset('images/partners/yto.jpg');?>" alt="" /><span></span></a></div>
                            </div>
                        </li>
                        <li>
                            <div class="block_best_material_post">
                                <div class="f_pic"><a href="http://www.zjs.com.cn/" class="w_hover"><img src="<?php echo asset('images/partners/zjs.jpg');?>" alt="" /><span></span></a></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CONTENT END -->
@section('scripts')
@parent
<script type="text/javascript">
$(function() {
    $('#contact_form').ajaxForm({
        beforeSubmit : function() {return init_validation('#contact_form');},
        success : function() {
            alert('Your message has been sent!');
            $('#contact_form').resetForm();
        }
    });
    $('#home_slider').flexslider({
        animation : 'slide',
        controlNav : true,
        directionNav : true,
        animationLoop : true,
        slideshowSpeed: 3000,
        slideshow : true,
        move: 1,
        useCSS : false
    });
    $('#best_materials_slider').flexslider({
        animation : 'slide',
        controlNav : false,
        directionNav : true,
        animationLoop : true,
        slideshow : true,
         slideshowSpeed: 2000,
        itemWidth: 213,
        itemMargin: 0,
        minItems: 1,
        maxItems: 5,
        move: 2,
        useCSS : false
    });
});
</script>

@endsection
@endsection
