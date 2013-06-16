<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
        <title>口コミ</title>
<script type="text/javascript" src="jkl-calendar.js" charset="Shift_JIS"></script>
</head>
<body align="center" bgcolor="#e0fffd" background="/photo/125px-Flag_of_France.svg.png" style=" background-repeat:repeat-y; background-posion:left top">
<div align="center"><font size="5" color="blue"><b>お客様からのコメント</b></font></div>
<br><br><BR>
<table width="100%" height="100%">

<script><--
    var cal1 = new JKL.Calendar("calid","formid","colname");
//--></script>

<tr>
    <!-- 左の空白 -->
    <td valign="top" width="130">
        <div style="height: 100%; overflow: auto ; background-repeat:repeat-y; background-posion:left top">
        </div>
    </td>
    <!-- コンテンツ用 -->
    <td valign="top" width="">
<form id="frmInput" name="frmInput" method="post" action="comment_do.php" target="_self">
<dl>
<table valign="top">
<tr>
 <td> 
  <dt>
   <label for="name">お名前</label>
  </dt>
 <dd>
  <input name="name" type="text" id="name" size="20" maxlength="256"  />
 </dd>
 </td>
 <td>
  <dt>
   <label for="month">来店日</label>
  </dt>
 <dd>
<input name="month" type="text" id="month" size="5" maxlength="256"  />
<label for="month">月</label>
<input name="day" type="text" id="day" size="5" maxlength="256"  />
<label for="day">日</label>
 </dd>
 </td>
</tr>
<tr>
 <td>
    <dt>
   <label for="money">予算</label>
  </dt>
 <dd>
   <select name="money">
    <option>1,500円～3,000円</option>
    <option>3,150円～5,000円</option>
    <option>5,250円～10,000円</option>
    <option>10,500円～</option>
  </select>
 </dd>
 </td>
</tr>
<tr>
 <td colspan="2">
  <dt>
   <label for="comment">コメント</label>
  </dt>
 <dd>
  <textarea name="comment" cols="50" rows="10">
</textarea>
 </dd>
 </td>
</tr>
</table>
</dl>
//<script type="text/javascript">

//function DispKakunin(){
//　　if (window.confirm('本当に送信しますか？')) {
//　　　　return true;　//OKボタン
//　　} else {
//　　　　return false;　//キャンセルボタン
//　　}
//}
// -->
//</script> 

<input type="submit" value="投稿" onClick="return DispKakunin();" />
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

$result = mysql_query('SELECT * FROM comment ORDER BY id DESC');
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
     <td><b><u>お名前</u></b></td>
     <td ><?php print(htmlspecialchars($row['name'])); ?> 様</td>
     <td><b><u>来店日</u></b></td>
     <td><?php print(htmlspecialchars($row['month'])); ?>月<?php print(htmlspecialchars($row['day'])); ?>日</td>
     <td><b><u>予算</u></b></td>
  <td><?php print(htmlspecialchars($row['money'])); ?></td>
 </tr>
  <tr>
     <td><b><u>コメント</u></b></td>
     <td colspan="5" width="85%"><?php print nl2br(htmlspecialchars($row['comment'])); ?></td>
  </tr>
  <tr>
     <td colspan="6"><?php print nl2br(htmlspecialchars($row['recomment'])); ?></td>
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