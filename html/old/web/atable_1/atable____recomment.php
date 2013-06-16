<html>
<head>
       <meta charset=shift_jis" http-equiv="content-script-type" content="text/javascript">
        <title>返信ページ</title>
</head>
<body align="center" bgcolor="#e0fffd" bgcolor="#e0fffd" background="/photo/125px-Flag_of_France.svg.png" style=" background-repeat:repeat-y; background-posion:left top">
<div align="center"><font size="5" color="blue"><b>返信ページ</b></font></div>
<br><br><BR>
<table width="100%" height="100%">

<tr>
    <!-- 左の空白 -->
    <td valign="top" width="130">
        <div style="height: 100%; overflow: auto ; background-repeat:repeat-y; background-posion:left top">
        </div>
    </td>
    <!-- コンテンツ用 -->
    <td valign="top" width="">
<form id="frmInput" name="frmInput" method="post" action="recomment_do.php" target="_blank">
<dl>
<table valign="top">
<tr>
 <td>
  <dt>
   <label for="comment">対象ID</label>
  </dt>
 <dd>
  <input name="id" type="text" id="id" size="4" maxlength="256"  />
 </dd>
 </td>
</tr>
<tr>
 <td>
  <dt>
   <label for="comment">返信コメント</label>
  </dt>
 <dd>
  <textarea name="recomment" cols="50" rows="10">
</textarea>
 </dd>
 </td>
</tr>
</table>
</dl>
<input type="submit" value="投稿" />
</form>
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

$result = mysql_query('SELECT * FROM comment');
if (!$result) {
    die('クエリーが失敗しました。'.mysql_error());
}
?>
<br><br><br>
<a href="./index.html"><img src="/photo/top.gif"></a>
    </td>
    
    <!-- 右の空白用 -->
    <td valign="top" width="45%">
        <div style="height: 100%; overflow: auto ; background-repeat:repeat-y; background-posion:right top">
<?php
while ($row = mysql_fetch_assoc($result)) {
?>
<table border="1" cellspacing="0" cellpadding="5" bordercolor="#99ffcc" bgcolor="#FFFFFF">
 <tr>
  <td>ID</td>
     <td><?php print(htmlspecialchars($row['id'])); ?></td>
  </tr>
  <tr>
     <td>お名前</td>
     <td><?php print(htmlspecialchars($row['name'])); ?></td>
  </tr>
  <tr>
     <td>来店日</td>
     <td><?php print(htmlspecialchars($row['month'])); ?>月<?php print(htmlspecialchars($row['day'])); ?>日</td>
  </tr>
 <tr>
  <td>予算</td>
  <td><?php print(htmlspecialchars($row['money'])); ?></td>
 </tr>
  <tr>
     <td colspan="1">コメント</td>
     <td><?php print nl2br(htmlspecialchars($row['comment'])); ?></td>
  </tr>
  <tr>
     <td colspan="2"><?php print nl2br(htmlspecialchars($row['recomment'])); ?></td>
   </tr>
</table><br>
<?php
}
?>
<?php
        mysql_close($link);
?>
        </div>

    </td>
</tr>

</table>
</body>
</html>