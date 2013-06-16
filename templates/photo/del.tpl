{include 'common/common-header.tpl'}
{include 'common/mess.tpl'}
<form method='post' action='/photo/post/'>
<p>削除の確認</p>
<p>下記のディレクトリを削除します。
<ul>
{foreach $delDir as $value}
<input type='hidden' name='delList[]' value={$value}>
<li>{$value}</li>
{/foreach}
</ul>
</p>
<p><button type='submit' value='delRun' name='delRun'>削除を実行</button></p>
<p><button type='submit' value='cancel' name='cancel'>キャンセル</button></p>
</form>
</body>
</html>