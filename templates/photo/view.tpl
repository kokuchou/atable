{include 'common/common-header.tpl'}
{include 'common/mess.tpl'}
{foreach $fileName as $dir => $file}
<p><a href='/photo/upload/?directory={$dir}'>{$dir}</a></p>
<table>
{foreach $file as $key => $value}
{if 0 == ($key % 5)}
<tr>
{/if}
<td><a href='/photo/show/?photo={$dir}/{$value}&key={$key}'><img src='/thum/{$dir}/{$value}'></a></td>
{if 4 == ($key % 5)}
</tr>
{/if}
{/foreach}
</table>
{/foreach}
</form>
</body>
</html>