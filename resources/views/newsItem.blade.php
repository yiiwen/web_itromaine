@include('header')

<div class="content">
    @include('nav')
    <div class="about-top-image"></div>
    <!-- 中部导航栏 -->
    <div class="mid-content">
        <div class="news-item-content">
            <h4>{{$newsItem->news_title}}</h4>
            <p class="news-title2">来源:{{$newsItem->author_name}}&nbsp;&nbsp; 作者:{{$newsItem->author_name}}&nbsp;&nbsp;发布时间: {{$newsItem->created_at}} &nbsp;&nbsp;&nbsp; 763 次浏览</p>
            <div class="news-content-text">
                {!!$newsItem->news_content!!}
            </div>
        </div>
        <div class="news-bottom-nav">
        <p>上一篇:&nbsp;<a href="#">无</a></p>
        <p>下一篇:&nbsp;<a href="#">网络时代新行当：白天......</a></p>
        </div>
    </div>
    <br>
    <br>
    </div>
@include('footer')