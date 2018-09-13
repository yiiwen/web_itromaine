@include('header')
<div class="content">
        @include('nav')

        <div class="about-top-image"></div>

        <!-- 中部导航栏 -->
        <div class="mid-content newspage">
            <div class="mid-nav news-mid-nav">
              <ul>
                <li><a href="#">公司新闻</a></li>
                <li><a href="#">行业资讯</a></li>
                <li><a href="#">媒体报道</a></li>
              </ul>
            </div>

            <div class="news-container">
              <ul>
                @foreach ($listNews as $news)
                  <li>
                    <div class="news-item">
                      <div class="news-date">
                        <h2>{{date('d',strtotime($news->created_at))}}</h2>
                        <p>{{date("Y-m",strtotime($news->created_at))}}</p>
                      </div>
                      <div class="news-content">
                        <div class="news-title">
                          <h3><a href="/newsitem/{{$news->id}}" target="_blank">{{$news->news_title}}</a></h3>
                        </div>
                        <div class="news-descript">
                          <p>{{$news->abstract}}</p>
                        </div>
                      </div>
                    </div>
                  </li>
                @endforeach
              </ul>
              <div style="text-align:center;margin-top:20px;">
                {{$listNews->links()}}
              </div>
            </div>
            
        </div>
        
      </div>
@include('footer')