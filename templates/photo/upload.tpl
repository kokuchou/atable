{include 'common/common-header.tpl'}
{include 'common/mess.tpl'}
<form action="/photo/post/" method="post" enctype="multipart/form-data">
{if isset($directory)}
  アップディレクトリ名：<input type='text' name='dirName' value='{$directory}' readonly='readonly'></br>
{else}
  アップディレクトリ名：<input type='text' name='dirName' value='{$smarty.now|date_format:'%Y%m%d_%H%M%S'}'></br>
{/if}
  写真を指定してください。：<input type="file" name="upfile[]" size="30" multiple="multiple"/><br />
  <br />
{if isset($directory)}
<input type="submit" name='dirFilesUpload' value="アップロード" />
{else}
<input type="submit" name='filesUpload' value="アップロード" />
{/if}
</form>
</body>
</html>