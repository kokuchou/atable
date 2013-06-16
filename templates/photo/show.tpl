{include 'common/common-header.tpl'}
{include 'common/mess.tpl'}
{if $key != 0}
<a href='/photo/show/?photo={$photo[0]}/{$previous}&key={$key-1}'><img src='/thum/{$photo[0]}/{$previous}'></a>
{else}
<a href='/photo/show/?photo={$photo[0]}/{$previous}&key={$max}'><img src='/thum/{$photo[0]}/{$previous}'></a>
{/if}
<a href='/photo/viewer/?photo={$photo[0]}/{$photo[1]}'><img src='/show/{$photo[0]}/{$photo[1]}'></a>
{if $key != $max}
<a href='/photo/show/?photo={$photo[0]}/{$next}&key={$key+1}'><img src='/thum/{$photo[0]}/{$next}'></a>
{else}
<a href='/photo/show/?photo={$photo[0]}/{$next}&key=0'><img src='/thum/{$photo[0]}/{$next}'></a>
{/if}
</body>
</html>