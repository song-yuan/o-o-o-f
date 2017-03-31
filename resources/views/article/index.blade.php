@extends('layouts.app')

@section('title', '新闻')
@section('styles')
@parent
@endsection

@section('content')
<div id="content" class="right_sidebar">
    <div class="inner">
        <div class="general_content">
            <div class="main_content">
                <div class="block_breadcrumbs">
                    <ul>
                        <li><a href="<?php echo url('/');?>">首页</a></li>
                        <li>新闻</li>
                    </ul>
                </div>
                <div class="block_blog_1">
                    <?php foreach($newsLists as $news):?>
                    <article class="blog_post">
                        <div class="tail"></div>
                        <h4 class="title"><a href="<?php echo url('article/view', array($news->article_id));?>"><?php echo $news->title;?></a></h4>
                        <div class="info">
                            <div class="date"><p><?php echo $news->created_at;?></p></div>
                            <div class="r_part">
                                <div class="category">
                                    <p class="text">分类:</p>
                                    <ul>
                                        <li><a href="<?php echo url('article').'?cat='.$news->category_id;?>"><?php echo $news->category->name;?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <p><?php echo $news->sub_head;?></p>
                        </div>
                    </article>
                    <?php endforeach;?>
                </div>
                <div class="line_2" style="margin:24px 0px 25px;"></div>
                @include('layouts.pager', ['paginator' => $newsLists->appends($conditions)])
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