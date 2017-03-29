@extends('layouts.app')

@section('title', 'Main page')
@section('styles')
@parent
@endsection

@section('content')
<!-- CONTENT BEGIN -->
<div id="content" class="left_sidebar">
    <div class="inner">
        <div class="block_breadcrumbs">
            <ul>
                <li><a href="<?php echo url('/');?>">首页</a></li>
                <li>在线下单</li>
            </ul>
        </div>
        <div class="general_content">
            <div class="main_content">
                <div class="separator" style="height:30px;"></div>
                <h2>在线下单</h2>
                <p class="general_subtitle">请填写一下信息，核实之后，我们的快递员会上门取件。</p>
                <div class="block_contact_form">
                    <form id="contact_form" action="php/contact_form.php" />
                        <p>发货人<span>*</span></p>
                        <div class="field"><input type="text" name="Name" class="req" /></div>

                        <p>发货地址<span>*</span></p>
                        <div class="field"><input type="text" name="email" class="req" /></div>
                        
                        <p>发货人联系电话<span>*</span></p>
                        <div class="field"><input type="text" name="Name" class="req" /></div>

                        <p>收件人姓名</p>
                        <div class="field"><input type="text" name="subject" /></div>

                        <p>收件人地址</p>
                        <div class="textarea"><textarea cols="1" rows="1" name="message"></textarea></div>
                        
                        <p>收件人联系电话</p>
                        <div class="textarea"><textarea cols="1" rows="1" name="message"></textarea></div>

                        <input type="submit" class="general_button" value="确认下单" />
                    </form>
                    <script type="text/javascript">
                        $(function () {
                            $('#contact_form').ajaxForm({
                                beforeSubmit : function() {return init_validation('#contact_form');},
                                success : function() {
                                    alert('Your message has been sent!');
                                    $('#contact_form').resetForm();
                                }
                            });
                        });
                    </script>
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
