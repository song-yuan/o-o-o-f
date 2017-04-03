@extends('layouts.app')

@section('title', '在线下单')
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
                        <li>在线下单</li>
                    </ul>
                </div>
                <div class="separator" style="height:30px;"></div>
                <h2>在线下单</h2>
                <p class="general_subtitle">请填写一下信息，核实之后，我们的快递员会上门取件。</p>
                <div class="block_contact_form">
                    <form id="order_form" action="<?php echo url('order/success');?>" />
                        <p>发货人<span>*</span></p>
                        <div class="field">
                            <input type="text" name="order[sender_name]" class="req" />
                        </div>

                        <p>发货地址<span>*</span></p>
                        <div class="field">
                            <input type="text" name="order[sender_address]" class="req" />
                        </div>
                        
                        <p>发货人联系电话<span>*</span></p>
                        <div class="field">
                            <input type="text" name="order[sender_mobile]" class="req" />
                        </div>

                        <p>收件人姓名</p>
                        <div class="field">
                            <input type="text" name="order[receiver_name]" />
                        </div>

                        <p>收件人地址</p>
                        <div class="field">
                            <input type="text" name="order[receiver_address]" />
                        </div>
                        
                        <p>收件人联系电话</p>
                        <div class="field">
                            <input type="text" name="order[receiver_mobile]" />
                        </div>
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
