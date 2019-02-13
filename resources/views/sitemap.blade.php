@include('header')
<div class="content sitemap-content">
        @include('nav')

        <div class="sitemap-top-image">
          <h1>“十年磨一剑”专注提升品牌价值</h1>
          <p>Brand value</p>
        </div>

        <!-- 中部导航栏 -->
        <div class="container sitemap">
          <div class="row">
            <div class="col-md-12">
              <h3><a href="/index">首页</a></h3>
              <ul>
                <li><a href="/about">关于我们</a></li>
                <li><a href="/service">服务范围</a></li>
                <li><a href="/cases">案例展示</a></li>
                <li><a href="/news">新闻动态</a></li>
                <li><a href="/link">联系我们</a></li>
              </ul>
            </div>
            <div class="col-md-12">
              <h3><a href="">服务内容</a></h3>
              <ul>
                <li><a href="">高端网站建设</a></li>
                <li><a href="">小程序定制开发</a></li>
                <li><a href="">软件设计与开发</a></li>
                <li><a href="">移动应用与开发</a></li>
              </ul>
            </div>
          </div> 
        </div>
      </div>
<script>
    window.onload = function(){
      document.querySelector("body").style.background = "#f7f7f7";
    }
</script>
@include('footer')