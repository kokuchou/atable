{include file='common/header.tpl'}
<h1 class="under_banner">お客様からのコメント</h1>
{include file='common/mess.tpl'}
<div class="span5">
    <form action="/comment/check/" method="POST">
        <table>
            <tr nowrap><th>お名前</th><td>{$data.name}</td></tr>
            <tr nowrap><th>ご来店日</th><td>{$data.date}</td></tr>
            <tr nowrap><th>コメント</th><td>{$data.comment}</td></tr>
            <tr><td colspan="2"><button class="btn btn-small btn-primary" type="submit">確認</button></td></tr>
        </table>
    </form>
</div>
{include file='common/footer.tpl'}