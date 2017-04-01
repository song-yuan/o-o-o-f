@extends('layouts.app')

@section('title', '会员注册')
@section('styles')
@parent
@endsection

@section('content')
<!-- CONTENT BEGIN -->
<div id="content" class="">
    <div class="inner">
        <div class="general_content">
            <div class="main_content">
                <p class="general_title"><span>注册成为庄远国际会员</span></p>
                <div class="separator" style="height:39px;"></div>
                <div class="block_registration">
                    <form action="#" class="w_validation" />
                        <div class="col_1">
                            <div class="label"><p>姓名<span>*</span>:</p></div>
                            <div class="field"><input type="text" class="req" name="user[user_name]"/></div>
                            <div class="clearboth"></div>
                            <div class="separator" style="height:14px;"></div>

                            <div class="label"><p>邮箱<span>*</span>:</p></div>
                            <div class="field"><input type="text" class="req"  name="user[email]"/></div>
                            <div class="clearboth"></div>
                            <div class="separator" style="height:12px;"></div>

                            <div class="label"><p>密码<span>*</span>:</p></div>
                            <div class="field"><input type="password" class="req"  name="user[password]"/></div>
                            <div class="clearboth"></div>
                            <div class="separator" style="height:12px;"></div>

                            <div class="label"><p>验证码<span>*</span>:</p></div>
                            <div class="field" style="border:none;overflow:inherit;">
                                <input type="text" class="req" name="captcha" style="display: inline-block;width:100px;border:1px solid #e6e6e6;margin-left:0;"/>
                                <img style="float:right" src="<?php echo $captcha;?>" />
                            </div>
                            <div class="clearboth"></div>
                        </div>

                        <div class="col_2">
                            <div class="label"><p>性别:</p></div>
                            <div class="checkbox"><input class="sliding_checkbox" type="checkbox"  name="user[sex]"/></div>
                            <div class="clearboth"></div>
                            <div class="separator" style="height:12px;"></div>

                            <div class="label"><p>手机号码:</p></div>
                            <div class="field"><input type="text"  name="user[mobile]"/></div>
                            <div class="clearboth"></div>
                            <div class="separator" style="height:14px;"></div>

                            <div class="label"><p>重复密码:</p></div>
                            <div class="field"><input type="text"  name="user[password_c]"/></div>
                            <div class="clearboth"></div>
                            <div class="separator" style="height:12px;"></div>
                            
                            <!--
                            <div class="label"><p>Gender:</p></div>
                            <div class="checkbox"><input class="sliding_checkbox" type="checkbox" /></div>
                            <div class="clearboth"></div>
                            <div class="separator" style="height:12px;"></div>
                            
                            <div class="label"><p>Profession:</p></div>
                            <div class="select">
                                <select class="custom_select">
                                    <option />&nbsp;
                                    <option />Designer
                                    <option />Frontend developer
                                    <option />Manager
                                </select>
                            </div>
                            -->
                            <div class="clearboth"></div>
                        </div>

                        <div class="clearboth"></div>
                        <div class="separator" style="height:32px;"></div>

                        <p class="info_text">By clicking on the button "Register" you agree to be the terms of service (<a href="#">User Agreement</a>)</p>
                        <p class="info_text"><input type="submit" class="general_button" value="Register On Site" /></p>
                        <p class="info_text">You can register for an account through other social networks</p>
                        <div class="fb_button"><a href="#"><img src="<?php echo asset("layout/images/button_fb_login.png");?>" alt="" /></a></div>
                    </form>
                </div>

                <div class="line_3" style="margin:42px 0px 0px;"></div>

            </div>

            <div class="clearboth"></div>
        </div>
    </div>
</div>
<!-- CONTENT END -->
@section('scripts')
@parent
<script type="text/javascript">
$(function() {
    $('.sliding_checkbox').iButton({
        labelOn : '女',
        labelOff : '男',
        resizeHandle : false,
        resizeContainer : false
    });
});
</script>

@endsection
@endsection
