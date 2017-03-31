@extends('layouts.app')

@section('title', 'Main page')
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
                        <li>快递单查询</li>
                    </ul>
                </div>
                <div class="separator" style="height:30px;"></div>
                <?php foreach($results as $orderSn => $result):?>
                <h5>单号：<?php echo $orderSn;?></h5>
                <table cellpadding="0" cellspacing="0" class="table_2">
                    <tr>
                        <th width="30%">地点</th>
                        <th width="20%">日期</th>
                        <th width="15%">时间</th>
                        <th width="40%">备注</th>
                    </tr>
                    <?php if(empty($result)):?>
                    <tr>
                        <td colspan="4">暂时没有记录！</td>
                    </tr>
                    <?php else:?>
                    <?php foreach($result as $log):?>
                    <tr>
                        <td><?php echo $log['location'];?></td>
                        <td><?php echo $log['date'];?></td>
                        <td><?php echo $log['time'];?></td>
                        <td><?php echo $log['description'];?></td>
                    </tr>
                    <?php endforeach;?>
                    <?php endif;?>
                </table>
                <div class="line_2" style="margin:22px 0px 0px;"></div>
                <?php endforeach;?>


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

