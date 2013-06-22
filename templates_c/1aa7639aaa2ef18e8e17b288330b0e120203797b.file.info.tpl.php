<?php /* Smarty version Smarty-3.1.11, created on 2013-06-19 20:56:17
         compiled from "/var/www/atable/templates/info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107625580851bc33433dc7c9-10810901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1aa7639aaa2ef18e8e17b288330b0e120203797b' => 
    array (
      0 => '/var/www/atable/templates/info.tpl',
      1 => 1371642976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107625580851bc33433dc7c9-10810901',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51bc33434355f6_79507839',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bc33434355f6_79507839')) {function content_51bc33434355f6_79507839($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<h1 class="under_banner">お問い合わせ</h1>
<div class="span9">
<div>ご予約などにつきましては下記にお問い合わせください。<br>ご不明点などございましたら、お気軽にお問い合わせください。</div>
<br><br>
<table class="table table-striped">
    <tr>
        <td>TEL/FAX</td>
        <td>0749-64-5400</td>
    </tr>
    <tr>
        <td>所在地</td>
        <td>滋賀県長浜市大戌亥町1277</td>
    </tr>
    <tr>
        <td>当店へのアクセス</td>
        <td>名神高速道米原ICから車で15分　長浜駅から車で10分　田村駅から車で8分</td>
    </tr>
</table>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>