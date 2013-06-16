{if isset($mess)}
{if isest($errFlg)}
<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>This is an Error Notice<a href="#close" class="icon-remove"></a></div>
{else if($warnFlg)}

<div class="alert alert-block"><button type="button" class="close" data-dismiss="alert">&times;</button>This is a Warning Notice<a href="#close" class="icon-remove"></a></div>
{else if ($okFlg)}
<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button> This is a Success Notice<a href="#close" class="icon-remove"></a></div>
{else}
<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert">&times;</button> This is a Information<a href="#close" class="icon-remove"></a></div>
{/if}
{/if}