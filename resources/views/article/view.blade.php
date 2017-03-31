@extends('layouts.app')

@section('title', '新闻')
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
                        <li><?php echo $article->category->name;?></li>
                        <li><?php echo $article->title;?></li>
                    </ul>
                </div>
                <div class="separator" style="height:30px;"></div>

                <h2><?php echo $article->title;?></h2>

                <p class="general_subtitle">
                    <?php echo $article->sub_head;?>
                </p>
                <?php echo $article->content;?>
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
