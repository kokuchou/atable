<?php /* Smarty version Smarty-3.1.11, created on 2013-06-16 11:37:30
         compiled from "/var/www/atable/templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66063891451bc329b0c9775-61862167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bea847632523dc6fdb1defe850b4ea7c3c8c0c0' => 
    array (
      0 => '/var/www/atable/templates/common/header.tpl',
      1 => 1371350248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66063891451bc329b0c9775-61862167',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51bc329b12bea8_76331910',
  'variables' => 
  array (
    'title' => 0,
    'css' => 0,
    'cur' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bc329b12bea8_76331910')) {function content_51bc329b12bea8_76331910($_smarty_tpl) {?><!DOCTYPE  HTML>
<HEAD>
<TITLE>
<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

</TITLE>
<link rel="shortcut icon" href="/img/favicon.ico" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script type="text/javascript" src="/js/bootstrap.js"></script>                                   <!-- PRETTIFY -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
" type="text/css">
<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" media="all" />
<link rel="stylesheet" href="/css/bootstrap-responsive.css">
<link rel="stylesheet" href="/css/font-awesome.css">
<!--[if IE 7]>
<link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css">
<![endif]-->
<Style Type="text/css">
<!--
body {
background-image: url("/photo/125px-Flag_of_France.svg.png");
background-repeat: repeat-y;
background-attachment: fixed;
background-position: left bottom
}
-->
<meta content="ア・ターブルは創作フランスレストランです。お手頃な価格で本格的なフランス料理を楽しむことができます。滋賀県長浜" name="description" />
<meta content="滋賀,長浜,フランス料理,創作,レストラン" name="keywords" />
<meta content="index,follow" name="robots" />
<meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
</Style>
</HEAD>
<BODY bgcolor="#e0fffd">
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <ul class="nav">
    <li><a class="brand" href="/">&nbsp;&nbsp;&Agrave;&nbsp;table</a></li>
      <li<?php if ($_smarty_tpl->tpl_vars['cur']->value==='about'){?> class="active"<?php }?>><a href="/about/"><i class="icon-home"></i>About</a></li>
      <li<?php if ($_smarty_tpl->tpl_vars['cur']->value==='access'){?> class="active"<?php }?>><a href="/access/"><i class="icon-map-marker"></i>Access</a></li>
      <li class="dropdown<?php if ($_smarty_tpl->tpl_vars['cur']->value==='menu'){?> active<?php }?>">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-list-alt"></i>Menu<b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a tabindex="-1" href="/menu/#lunch">Lunch Menu</a></li>
            <li><a tabindex="-1" href="/menu/#dinner">Dinner Menu</a></li>
        </ul>
      </li>
      <li class="dropdown<?php if ($_smarty_tpl->tpl_vars['cur']->value==='course'){?> active<?php }?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-gift"></i>Special course<b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="/group/"><i class="icon-group"></i>Group Course</a></li>
            <li><a href="/seasons/"><i class="icon-calendar"></i>Seasons Course</a></li>
        </ul>
      </li>
      <li<?php if ($_smarty_tpl->tpl_vars['cur']->value==='info'){?> class="active"<?php }?>><a href="/info/"><i class="icon-envelope"></i>Contact</a></li>
      <li><a href="#"> 掲示板(工事中)</a></li>
      <li style="padding-top: 10px;">
        <a href="https://twitter.com/atable2" class="twitter-follow-button" data-show-count="true">Follow @atable2</a>
        <script>
            !function(d,s,id){
            var js,fjs=d.getElementsByTagName(s)[0];
                if(!d.getElementById(id)){
                    js=d.createElement(s);
                    js.id=id;
                    js.src="//platform.twitter.com/widgets.js";
                    fjs.parentNode.insertBefore(js,fjs);
                }
            }
            (document,"script","twitter-wjs");
        </script>
      </li>
    </ul>
  </div>
</div>

<div class="main"><?php }} ?>