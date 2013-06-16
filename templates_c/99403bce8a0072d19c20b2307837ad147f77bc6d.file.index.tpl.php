<?php /* Smarty version Smarty-3.1.11, created on 2013-06-16 19:10:19
         compiled from "/var/www/atable/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200587469451bc329b047039-61304325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99403bce8a0072d19c20b2307837ad147f77bc6d' => 
    array (
      0 => '/var/www/atable/templates/index.tpl',
      1 => 1371377415,
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

<div style="float: left;">
    <h2 class="under_banner">ようこそ、アターブルへ</h2>
</div>
<div class="span2"></div>
<div style="float: left;">
    <table>
        <tr><th align="right">営業時間</th><td>11:30～14:30(L.O:14:00)&nbsp;17:30～21:30(L.O:21:00)</td></tr>
        <tr><th align="right">定休日</th><td>水（水曜日の営業につきましてはご相談ください。）</td></tr>
        <tr><th align="right">TEL/FAX</th><td>0749-64-5400</td></tr>
    </table>
</div>
<div style="clear: both;"></div>
<br />
<?php echo $_smarty_tpl->getSubTemplate ('slid.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<br>
<div>
    <h1 class="under_banner">お知らせ</h1>
    <dl>
        <dt><h3><p class="text-info">『ぼてじゃこ倶楽部』限定メニュー</p></h3></dt>
        <dd><small>『ぼてじゃこ倶楽部』限定メニューをご用意しております。<br />詳しくは『ぼてじゃこ倶楽部』をご覧ください。</small></dd>
    </dl>
</div>
</div>
</div>
<div class="span1"></div>
<div style="width :300px; float: left;">
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
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>