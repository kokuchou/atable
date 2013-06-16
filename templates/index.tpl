{include file='common/header.tpl'}
<h2>ようこそ、アターブルへ</h2>
<br>
<div id="myCarousel" class="carousel slide" style="width:500px; float: left;">
{*
<ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
</ol>
*}
<div class="carousel-inner" align="center">
    <div class="item active">
    <img src="/photo/tandoori.png" alt="" class="img-rounded">
{*    
    <div class="carousel-caption">
        <h4>First Thumbnail label</h4>
        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
    </div>
*}
    </div>
    <div class="item">
    <img src="/photo/wine.png" alt="" class="img-rounded">
    </div>
</div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="icon-arrow-left"></i></a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="icon-arrow-right"></i></a>
</div>
<div class="span1"></div>
<div style="width :200px; float: left;">
<a class="twitter-timeline" href="https://twitter.com/atable2" data-widget-id="345918670486245377">@atable2 からのツイート</a>
<script>
    !function(d,s,id){
        var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
        if(!d.getElementById(id)){
            js=d.createElement(s);
            js.id=id;
            js.src=p+"://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js,fjs);
        }
    }
    (document,"script","twitter-wjs");
</script>
</div>
<div style="clear:both;">
        お知らせが入ります
</div>
{include file='common/footer.tpl'}