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
                <p class="general_title"><span>会员 登录</span></p>
                <div class="separator" style="height:39px;"></div>
                <div class="block_registration">
                    <form action="<?php echo url('auth');?>" method="POST" />
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
                            <div class="label"><p>手机号码<span>*</span>:</p></div>
                            <div class="field"><input type="text" class="req" name="user[mobile]" value="<?php echo old('mobile');?>"/></div>
                            <div class="clearboth"></div>
                            <div class="separator" style="height:14px;"></div>

                            <div class="label"><p>验证码<span>*</span>:</p></div>
                            <div class="field" style="border:none;overflow:inherit;">
                                <input type="text" class="req" name="user[captcha]" id="captcha" value="<?php echo old('captcha');?>"/>
                                <img style="float:right" src="{{ url('/captcha') }}" onclick="this.src='{{ url('/captcha') }}?r='+Math.random();"/>
                            </div>
                            <div class="clearboth"></div>
                        </div>

                        <div class="col_2">
                            <div class="label"><p>密 码<span>*</span>:</p></div>
                            <div class="field"><input type="password" class="req" name="user[password]"/></div>
                            <div class="clearboth"></div>
                            <div class="separator" style="height:14px;"></div>
                            
                            <div class="checkbox">
                                <label for="remember">
                                    <input type="checkbox" id="remember"  name="user[remember]"/>
                                    记住我
                                </label>
                            </div>
                            <div class="clearboth"></div>
                            <div class="separator" style="height:12px;"></div>
                        </div>

                        <div class="clearboth"></div>
                        <div class="separator" style="height:32px;"></div>
                        
                        <p class="info_text"><input type="submit" class="general_button" value="会员登录" /></p>
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
@endsection
@endsection
