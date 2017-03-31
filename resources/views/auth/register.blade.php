@extends('layouts.app')

@section('title', '会员注册')
@section('styles')
@parent
@endsection

@section('content')
<!-- CONTENT BEGIN -->
<div id="content" class="right_sidebar">
    <div class="inner">
        <div class="general_content">
            <div class="main_content">
                <div class="block_breadcrumbs">
                    <ul>
                        <li><a href="<?php echo url('/');?>">首页</a></li>
                        <li>注册会员</li>
                    </ul>
                </div>
                <div class="separator" style="height:30px;"></div>
                <p class="general_subtitle">请填写以下信息，经核实之后，您就可以成为我们尊贵的会员，享受更优质的服务！</p>
                <div class="block_contact_form">
                    <form id="order_form" action="<?php echo url('order/success');?>" />
                        <p>昵 称<span>*</span></p>
                        <div class="field">
                            <input type="text" name="order[sender_name]" class="req" />
                        </div>
                        
                        <p>邮 箱<span>*</span></p>
                        <div class="field">
                            <input type="text" name="order[sender_name]" class="req" />
                        </div>

                        <p>密 码<span>*</span></p>
                        <div class="field">
                            <input type="text" name="order[sender_address]" class="req" />
                        </div>

                        <p>再次输入密码<span>*</span></p>
                        <div class="field">
                            <input type="text" name="order[sender_address]" class="req" />
                        </div>
                        <input type="submit" class="general_button" value="注 册" />
                    </form>
                </div>
            </div>
            <div class="sidebar">
            @include('layouts.sidebar_menu')
            @include('layouts.contact')
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

});
</script>

@endsection
@endsection
