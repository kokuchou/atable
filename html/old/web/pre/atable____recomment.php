<html>
<head>
       <meta charset=shift_jis" http-equiv="content-script-type" content="text/javascript">
        <title>�ԐM�y�[�W</title>
</head>
<body align="center" bgcolor="#e0fffd" bgcolor="#e0fffd" background="/photo/125px-Flag_of_France.svg.png" style=" background-repeat:repeat-y; background-posion:left top">
<div align="center"><font size="5" color="blue"><b>�ԐM�y�[�W</b></font></div>
<br><br><BR>
<table width="100%" height="100%">

<tr>
    <!-- ���̋� -->
    <td valign="top" width="130">
        <div style="height: 100%; overflow: auto ; background-repeat:repeat-y; background-posion:left top">
        </div>
    </td>
    <!-- �R���e���c�p -->
    <td valign="top" width="">
<form id="frmInput" name="frmInput" method="post" action="recomment_do.php" target="_blank">
<dl>
<table valign="top">
<tr>
 <td>
  <dt>
   <label for="comment">�Ώ�ID</label>
  </dt>
 <dd>
  <input name="id" type="text" id="id" size="4" maxlength="256"  />
 </dd>
 </td>
</tr>
<tr>
 <td>
  <dt>
   <label for="comment">�ԐM�R�����g</label>
  </dt>
 <dd>
  <textarea name="recomment" cols="50" rows="10">
</textarea>
 </dd>
 </td>
</tr>
</table>
</dl>
<input type="submit" value="���e" />
</form>
<?php
        $server = "mysql554.phy.lolipop.jp";
        $mydb = "LAA0130957-atable";
        $usr = "LAA0130957";
        $pass = "a0t8a0b1e";
        
        $link = mysql_connect($server, $usr, $pass);
        $db = mysql_select_db($mydb, $link);

//MySQL�̃N���C�A���g�̕����R�[�h��sjis�ɐݒ�
mysql_query("SET NAMES sjis")
or die("can not SET NAMES sjis");

$result = mysql_query('SELECT * FROM comment');
if (!$result) {
    die('�N�G���[�����s���܂����B'.mysql_error());
}
?>
<br><br><br>
<a href="./index.html"><img src="/photo/top.gif"></a>
    </td>
    
    <!-- �E�̋󔒗p -->
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
     <td>�����O</td>
     <td><?php print(htmlspecialchars($row['name'])); ?></td>
  </tr>
  <tr>
     <td>���X��</td>
     <td><?php print(htmlspecialchars($row['month'])); ?>��<?php print(htmlspecialchars($row['day'])); ?>��</td>
  </tr>
 <tr>
  <td>�\�Z</td>
  <td><?php print(htmlspecialchars($row['money'])); ?></td>
 </tr>
  <tr>
     <td colspan="1">�R�����g</td>
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