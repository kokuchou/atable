{include 'common/common-header.tpl'}
{include 'common/mess.tpl'}
<p><a href='/photo/upload/'>アップロードします</a></p>
<form method='post' action='/photo/post/'>
{foreach $dirName as $value}
<p><input type='checkbox' name='checkDir[]' value='{$value}'>{$value}</p>
{/foreach}
<p><button type='submit' name='view' value='view'>選択したディレクトリを表示する</button></p>
<p><button type='submit' name='del' value='del'>選択したディレクトリを削除する</button></p>
</form>
</body>
</html>