<div class="block_sidebar_menu">
    <img src="<?php echo asset('images/ny_03.png');?>" >
    <ul>
        <li class="<?php echo $id == 1?'active':''?>"><a href="<?php echo url('article/view/1');?>">公司简介</a></li>
        <li class="<?php echo $id == 2?'active':''?>"><a href="<?php echo url('article/view/2');?>">经营范围</a></li>
        <li class="<?php echo $id == 3?'active':''?>"><a href="<?php echo url('article/view/3');?>">客服中心</a></li>
        <li class="<?php echo $id == 4?'active':''?>"><a href="<?php echo url('article/view/4');?>">合作方式</a></li>
        <li class="<?php echo $active == 'article'?'active':''?>"><a href="<?php echo url('article/view/1');?>">新闻中心</a></li>
    </ul>
    <div class="line_2"></div>
</div>

