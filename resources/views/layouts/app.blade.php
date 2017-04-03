<!DOCTYPE html>
<html>

<head>
<title>庄远国际物流 - @yield('title')</title>

<meta name="keywords" content="" />
<meta name="description" content="" />

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />

@section('styles')
<link rel="stylesheet" href="{!! asset('layout/style.css') !!}" type="text/css" />

<!-- PrettyPhoto start -->
<link rel="stylesheet" href="{!! asset('layout/plugins/prettyPhoto/css/prettyPhoto.css') !!}" type="text/css" />
<!-- PrettyPhoto end -->

<!-- Calendar start -->
<link rel="stylesheet" href="{!! asset('layout/plugins/calendar/calendar.css') !!}" type="text/css" />
<!-- Calendar end -->

<!-- MediaElements start -->
<link rel="stylesheet" href="{!! asset('layout/plugins/video-audio/mediaelementplayer.css') !!}" type="text/css" />
<!-- MediaElements end -->

<!-- FlexSlider start -->
<link rel="stylesheet" href="{!! asset('layout/plugins/flexslider/flexslider.css') !!}" type="text/css" />
<!-- FlexSlider end -->

<!-- iButtons start -->
<link rel="stylesheet" href="{!! asset('layout/plugins/ibuttons/css/jquery.ibutton.css') !!}" type="text/css" />
<!-- iButtons end -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="{!! asset('css/customer.css') !!}" type="text/css" />
@show
</head>

<body>
	<div class="wrapper sticky_footer">
    	<!-- HEADER BEGIN -->
        @include('layouts.header')
    	<!-- HEADER END -->
        
        <!-- CONTENT BEGIN -->
        @yield('content')
    	<!-- CONTENT END -->
        
        <!-- FOOTER BEGIN -->
        @include('layouts.footer')
        <!-- FOOTER END -->
    </div>
    
    <!-- POPUP BEGIN -->
    <div id="overlay"></div>
    <div id="login" class="block_popup">
    	<div class="popup">
        	<a href="#" class="close">Close</a>
            
            <div class="content">
            	<div class="title"><p>Enter the site</p></div>
                
                <div class="form">
                	<form action="#" />
                            <div class="column">
                                <p class="label">用户名</p>
                                <div class="field"><input type="text" /></div>
                            </div>

                            <div class="column">
                                <p class="label">密 码</p>
                                <div class="field"><input type="password" /></div>
                            </div>
                        
                        <div class="column_2">
                            <div class="remember">
                                <div class="checkbox"><input type="checkbox" /></div>
                                <div class="remember_label"><p>记住我</p></div>
                            </div>
                        </div>
                        
                        <div class="column_2">
                            <p class="forgot_pass"><a href="#">忘记密码?</a></p>
                        </div>
                        
                        <div class="column button">
                            <a href="#" class="enter"><span>登 录</span></a>
                        </div>
                        
                        <div class="clearboth"></div>
                    </form>
                </div>
                <div class="subtitle"><p>注册新会员</p></div>
                <div class="fb_button" style="padding:0;">
                    <a href="#"><img src="<?php echo asset('layout/images/button_fb_login.png');?>" alt="" /></a>
                </div>
                <div class="text"><p>您可以使用社交账号直接登陆</p></div>
            </div>
        </div>
    </div>
    <!-- POPUP END -->
@section('scripts')
<!--[if lt IE 9]>
<script src="{!! asset('layout/plugins/html5.js') !!}" type="text/javascript"></script>
<![endif]-->

<script src="{!! asset('layout/js/jquery.js') !!}" type="text/javascript"></script>

<!-- PrettyPhoto start -->
<script src="{!! asset('layout/plugins/prettyphoto/jquery.prettyPhoto.js') !!}" type="text/javascript"></script>
<!-- PrettyPhoto end -->

<!-- jQuery tools start -->
<script src="{!! asset('layout/plugins/tools/jquery.tools.min.js') !!}" type="text/javascript"></script>
<!-- jQuery tools end -->

<!-- Calendar start -->
<script src="{!! asset('layout/plugins/calendar/calendar.js') !!}" type="text/javascript"></script>
<!-- Calendar end -->

<!-- ScrollTo start -->
<script src="{!! asset('layout/plugins/scrollto/jquery.scroll.to.min.js') !!}" type="text/javascript"></script>
<!-- ScrollTo end -->

<!-- MediaElements start -->
<script src="{!! asset('layout/plugins/video-audio/mediaelement-and-player.js') !!}" type="text/javascript"></script>
<!-- MediaElements end -->

<!-- FlexSlider start -->
<script src="{!! asset('layout/plugins/flexslider/jquery.flexslider-min.js') !!}" type="text/javascript"></script>
<!-- FlexSlider end -->

<!-- iButtons start -->
<script src="{!! asset('layout/plugins/ibuttons/lib/jquery.ibutton.min.js') !!}" type="text/javascript"></script>
<!-- iButtons end -->

<!-- jQuery Form Plugin start -->
<script src="{!! asset('layout/plugins/ajaxform/jquery.form.js') !!}" type="text/javascript"></script>
<!-- jQuery Form Plugin end -->

<script src="{!! asset('layout/js/main.js') !!}" type="text/javascript"></script>


@show    
</body>

</html>