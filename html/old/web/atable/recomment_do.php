<HTML>
<HEAD>
<TITLE>�����z���肪�Ƃ��������܂����B</TITLE>
</HEAD>
<body align="center" background="/photo/125px-Flag_of_France.svg.png" style=" background-repeat:repeat-y; background-posion:left top">
<!-- �e�[�u���\���̊J�n -->
<table width="100%" height="100%">
<tr>
    <!-- ���̋� -->
    <td valign="top" width="130">
        <div style="height: 100%; overflow: auto ; background-repeat:repeat-y; background-posion:left top">
        </div>
    </td>
    �@
    <!-- �R���e���c�p -->
    <td valign="top">
    <p align="center"><font size="6" color="blue">�A�E�^�[�u��</font></p>
        <div style="height: 100%;">
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

$sql = sprintf('UPDATE comment SET recomment="%s" WHERE id=%d',
  mysql_real_escape_string($_POST['recomment']),
  mysql_real_escape_string($_POST['id'])
);
mysql_query($sql) or die(mysql_error());
?>

�C�����������܂����B
<br><br>
<a href="./index.html"><img src="/photo/top.gif"></a>
        </div>
    </td>
    
    <!-- �E�̋󔒗p -->
    <td valign="top" width="8%">
        <div style="height: 100%; overflow: auto ; background-repeat:repeat-y; background-posion:right top">

        </div>
    </td>
</tr>

</table>
</body>
</html>