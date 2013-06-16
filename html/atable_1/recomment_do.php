<HTML>
<HEAD>
<TITLE>ご感想ありがとうございました。</TITLE>
</HEAD>
<body align="center" background="/photo/125px-Flag_of_France.svg.png" style=" background-repeat:repeat-y; background-posion:left top">
<!-- テーブル構成の開始 -->
<table width="100%" height="100%">
<tr>
    <!-- 左の空白 -->
    <td valign="top" width="130">
        <div style="height: 100%; overflow: auto ; background-repeat:repeat-y; background-posion:left top">
        </div>
    </td>
    　
    <!-- コンテンツ用 -->
    <td valign="top">
    <p align="center"><font size="6" color="blue">ア・ターブル</font></p>
        <div style="height: 100%;">
<?php
        $server = "mysql554.phy.lolipop.jp";
        $mydb = "LAA0130957-atable";
        $usr = "LAA0130957";
        $pass = "a0t8a0b1e";
        
        $link = mysql_connect($server, $usr, $pass);
        $db = mysql_select_db($mydb, $link);

//MySQLのクライアントの文字コードをsjisに設定
mysql_query("SET NAMES sjis")
or die("can not SET NAMES sjis");

$sql = sprintf('UPDATE comment SET recomment="%s" WHERE id=%d',
  mysql_real_escape_string($_POST['recomment']),
  mysql_real_escape_string($_POST['id'])
);
mysql_query($sql) or die(mysql_error());
?>

修正が完了しました。
<br><br>
<a href="./index.html"><img src="/photo/top.gif"></a>
        </div>
    </td>
    
    <!-- 右の空白用 -->
    <td valign="top" width="8%">
        <div style="height: 100%; overflow: auto ; background-repeat:repeat-y; background-posion:right top">

        </div>
    </td>
</tr>

</table>
</body>
</html>