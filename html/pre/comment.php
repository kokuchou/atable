<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
        <title>���R�~</title>
<script type="text/javascript" src="jkl-calendar.js" charset="Shift_JIS"></script>
</head>
<body align="center" bgcolor="#e0fffd" background="/photo/125px-Flag_of_France.svg.png" style=" background-repeat:repeat-y; background-posion:left top">
<div align="center"><font size="5" color="blue"><b>���q�l����̃R�����g</b></font></div>
<br><br><BR>
<table width="100%" height="100%">

<script><--
    var cal1 = new JKL.Calendar("calid","formid","colname");
//--></script>

<tr>
    <!-- ���̋� -->
    <td valign="top" width="130">
        <div style="height: 100%; overflow: auto ; background-repeat:repeat-y; background-posion:left top">
        </div>
    </td>
    <!-- �R���e���c�p -->
    <td valign="top" width="">
<form id="frmInput" name="frmInput" method="post" action="comment_do.php" target="_self">
<dl>
<table valign="top">
<tr>
 <td> 
  <dt>
   <label for="name">�����O</label>
  </dt>
 <dd>
  <input name="name" type="text" id="name" size="20" maxlength="256"  />
 </dd>
 </td>
 <td>
  <dt>
   <label for="month">���X��</label>
  </dt>
 <dd>
<input name="month" type="text" id="month" size="5" maxlength="256"  />
<label for="month">��</label>
<input name="day" type="text" id="day" size="5" maxlength="256"  />
<label for="day">��</label>
 </dd>
 </td>
</tr>
<tr>
 <td>
    <dt>
   <label for="money">�\�Z</label>
  </dt>
 <dd>
   <select name="money">
    <option>1,500�~�`3,000�~</option>
    <option>3,150�~�`5,000�~</option>
    <option>5,250�~�`10,000�~</option>
    <option>10,500�~�`</option>
  </select>
 </dd>
 </td>
</tr>
<tr>
 <td colspan="2">
  <dt>
   <label for="comment">�R�����g</label>
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
//�@�@if (window.confirm('�{���ɑ��M���܂����H')) {
//�@�@�@�@return true;�@//OK�{�^��
//�@�@} else {
//�@�@�@�@return false;�@//�L�����Z���{�^��
//�@�@}
//}
// -->
//</script> 

<input type="submit" value="���e" onClick="return DispKakunin();" />
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

$result = mysql_query('SELECT * FROM comment ORDER BY id DESC');
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
     <td><b><u>�����O</u></b></td>
     <td ><?php print(htmlspecialchars($row['name'])); ?> �l</td>
     <td><b><u>���X��</u></b></td>
     <td><?php print(htmlspecialchars($row['month'])); ?>��<?php print(htmlspecialchars($row['day'])); ?>��</td>
     <td><b><u>�\�Z</u></b></td>
  <td><?php print(htmlspecialchars($row['money'])); ?></td>
 </tr>
  <tr>
     <td><b><u>�R�����g</u></b></td>
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