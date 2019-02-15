        <div class="bottom-info">
                <div class="container">
                    <div class="row bottom-nav">
                        <div class="col-md-4">
                            <img src="/images/logo2.png" style="width:300px;" alt="">
                            <h4 style="color:#FFF;margin-top:0;margin-left:104px;">您身边的高端定制专家</h4>
                        </div>
                        <div class="col-md-2">
                            <dl>
                                <dt>服务内容</dt>
                                <dd><a href="/site/company">高端网站建设</a></dd>
                                <dd><a href="">小程序定制开发</a></dd>
                                <dd><a href="">软件设计与开发</a></dd>
                                <dd><a href="">移动应用与开发</a></dd>
                            </dl>
                        </div>
                        <div class="col-md-2">
                            <dl>
                                <dt>案例展示</dt>
                                <dd><a href="">广州电视台</a></dd>
                                <dd><a href="/cases/2">心声社区</a></dd>
                                <dd><a href="cases/1">cc女神</a></dd>
                                <dd><a href="/cases">更多展示</a></dd>
                            </dl>
                        </div>
                        <div class="col-md-2">
                            <dl>
                                <dt>关于</dt>
                                <dd><a href="/about">关于我们</a></dd>
                                <dd><a href="/news">公司动态</a></dd>
                                <dd><a href="/link">留言板</a></dd>
                                <dd><a href="/sitemap">网站地图</a></dd>
                            </dl>
                        </div>
                        <div class="col-md-2">
                            <img src="/images/qrcode.jpg" class="qr_code" alt="">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-10">
                            <p>联系电话：15818848247&nbsp;&nbsp;&nbsp;&nbsp;13668984401&nbsp;&nbsp;&nbsp;&nbsp;联系邮箱：youmaicai@163.com</p>
                            <p>联系地址：广东省广州市南沙区丰泽东路106号&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;备案号：粤ICP备18091280号</p>
                            <p>Copyright © 2018-2030,www.itromaine.com,All rights reserved  版权所有 © 广州油麦菜信息科技有限公司</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-nav">
            <ul>
                <li>
                    <img src="/images/right/search.png" alt="">
                </li>
                <li>
                    <img src="/images/right/message.png" alt="">
                </li>
                <li>
                    <img src="/images/right/service.png" alt="">
                </li>
                <li>
                    <img src="/images/right/top.png" alt="">
                </li>
            </ul>
            <div class="qrcode">
                <img src="/images/qrcode.jpg" alt="">
            </div>
            <div class="search">
                <input type="text" >
            </div>
        </div>
        <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
        <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
        <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
        <script src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/swiper.min.js"></script>
        <script>
        var mySwiper = new Swiper('.swiper-container', {
            autoplay: true,
            pagination: {
            el: '.swiper-pagination',
            },
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            },
        });
        window.onscroll = function(){
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                $(".right-nav li:last-child").show(10);
            } else {
                $(".right-nav li:last-child").hide(10);
            }
        };
        $(".right-nav li:last-child").click(function(){
            $('body,html').animate({scrollTop:0},200);
        });
        $(".right-nav li:nth-child(2)").hover(function(){
            $(".qrcode").show(100);
        });
        $(".right-nav li:nth-child(2)").mouseleave(function(){
            $(".qrcode").hide(100);
        });
        $(".right-nav li:nth-child(1)").hover(function(){
            $(".search").show(100);
        });
        $(".search").hover(function(){
            $(".search").show(100);
        });
        $(".right-nav li:nth-child(1)").mouseleave(function(){
            $(".search").hide(100);
        });
        </script>
    </body>
</html>
