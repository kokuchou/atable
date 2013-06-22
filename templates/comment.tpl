{include file='common/header.tpl'}
<h1 class="under_banner">お客様からのコメント</h1>
{include file='common/mess.tpl'}
<div class="span5">
    <form action="/comment/check/" method="POST">
        <table>
            <tr nowrap><th>お名前</th><td><input type="text" name="name" value="{$data.name}"/></td></tr>
            <tr nowrap><th>ご来店日</th><td class="date">{html_select_date time="{$data.date}" class="date{if isset($err.date)} control-group error{/if}" month_format="%m"}{if isset($err.date)}<br /><p class="text-error">{$err.date}</p>{/if}</td></tr>
            <tr nowrap><th>コメント</th><td><textarea name="comment"{if isset($err.comment)} class="control-group error"{/if}>{$data.comment}</textarea>{if isset($err.comment)}<br /><p class="text-error">{$err.comment}</p>{/if}</td></tr>
            <tr><td colspan="2"><button class="btn btn-small btn-primary" type="submit">確認</button></td></tr>
        </table>
    </form>
</div>
{include file='common/footer.tpl'}