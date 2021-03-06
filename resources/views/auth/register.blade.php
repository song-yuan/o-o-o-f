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
                    <form action="<?php echo url('auth/register/create');?>" method="POST" />
                        <input type="hidden" name="_token" value="<?php echo csrf_token();?>"/>
                        
                        <div class="col_3">
                            <h4>带 * 选项必须填写</h4>
                            <?php if (count($errors) > 0):?>
                            <ul>
                                <?php foreach ($errors->all() as $error):?>
                                <li><?php echo $error;?></li>
                                <?php endforeach;?>
                            </ul>
                            <div class="line_3" style="margin:15px 0px 15px;"></div>
                            <?php endif;?>
                        </div>
                        
                        <div class="col_1">
                            <div class="label"><p>姓名<span>*</span>:</p></div>
                            <div class="field"><input type="text" class="req" name="user[user_name]" value="<?php echo old('user_name');?>"/></div>
                            <div class="clearboth"></div>
                            <div class="separator" style="height:14px;"></div>

                            <div class="label"><p>邮箱<span>*</span>:</p></div>
                            <div class="field"><input type="text" class="req"  name="user[email]" value="<?php echo old('email');?>"/></div>
                            <div class="clearboth"></div>
                            <div class="separator" style="height:12px;"></div>

                            <div class="label"><p>密码<span>*</span>:</p></div>
                            <div class="field"><input type="password" class="req"  name="user[password]"/></div>
                            <div class="clearboth"></div>
                            <div class="separator" style="height:12px;"></div>

                            <div class="label"><p>验证码<span>*</span>:</p></div>
                            <div class="field" style="border:none;overflow:inherit;">
                                <input type="text" class="req" name="user[captcha]" id="captcha" value="<?php echo old('captcha');?>"/>
                                <img style="float:right" src="{{ url('/captcha') }}" onclick="this.src='{{ url('/captcha') }}?r='+Math.random();"/>
                            </div>
                            <div class="clearboth"></div>
                        </div>

                        <div class="col_2">
                            <div class="label"><p>性别:</p></div>
                            <div class="checkbox"><input class="sliding_checkbox" type="radio"  name="user[sex]"/></div>
                            <div class="clearboth"></div>
                            <div class="separator" style="height:12px;"></div>

                            <div class="label"><p>手机号码:</p></div>
                            <div class="field"><input type="text" class="req"  name="user[mobile]" value="<?php echo old('mobile');?>"/></div>
                            <div class="clearboth"></div>
                            <div class="separator" style="height:14px;"></div>

                            <div class="label"><p>重复密码:</p></div>
                            <div class="field"><input type="password" class="req"  name="user[password_confirmation]"/></div>
                            <div class="clearboth"></div>
                        </div>

                        <div class="clearboth"></div>
                        <div class="separator" style="height:32px;"></div>

                        <p class="info_text">点击注册按钮，成为庄远会员，享受更好服务。</p>
                        <p class="info_text"><input type="submit" class="general_button" value="注册会员" /></p>
                        <!--
                        <p class="info_text">You can register for an account through other social networks</p>
                        <div class="fb_button">
                            <a href="#"><img src="<?php echo asset("layout/images/button_fb_login.png");?>" alt="" /></a>
                        </div>
                        -->
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
