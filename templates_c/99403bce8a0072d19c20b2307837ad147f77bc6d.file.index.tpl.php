<?php /* Smarty version Smarty-3.1.11, created on 2013-06-16 01:31:19
         compiled from "/var/www/atable/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200587469451bc329b047039-61304325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99403bce8a0072d19c20b2307837ad147f77bc6d' => 
    array (
      0 => '/var/www/atable/templates/index.tpl',
      1 => 1371313877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200587469451bc329b047039-61304325',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51bc329b0c38c0_32507645',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bc329b0c38c0_32507645')) {function content_51bc329b0c38c0_32507645($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<h2>ようこそ、アターブルへ</h2>
<br>
<div id="myCarousel" class="carousel slide" style="width:500px; float: left;">

<div class="carousel-inner" align="center">
    <div class="item active">
    <img src="/photo/tandoori.png" alt="" class="img-rounded">

    </div>
    <div class="item">
    <img src="/photo/wine.png" alt="" class="img-rounded">
    </div>
</div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="icon-arrow-left"></i></a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="icon-arrow-right"></i></a>
</div>
<div class="span1"></div>
<div style="width :200px; float: left;">
<a class="twitter-timeline" href="https://twitter.com/atable2" data-widget-id="345918670486245377">@atable2 からのツイート</a>
<script>
    !function(d,s,id){
        var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
        if(!d.getElementById(id)){
            js=d.createElement(s);
            js.id=id;
            js.src=p+"://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js,fjs);
        }
    }
    (document,"script","twitter-wjs");
</script>
</div>
<div style="clear:both;">
        お知らせが入ります
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>