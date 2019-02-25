@include('header')
<div class="content">
    @include('nav')
    <div class="banner">
        <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach ($bannerList as $banner)
            <div class="swiper-slide">
                <img src="{{$banner->path}}" alt="{{$banner->alt_info}}">
                <!-- <div class="slide-content">
                    <h2>广州油麦菜信息科技有限公司</h2>
                    <p>More than 10 years of technical precipitation, more than 3,000 well-known customers' choice, consistent service attitude, depth and breadth of industry experience</p>
                    <h3>有态度 · 有速度 · 有深度</h3>
                    <a href="/service" class="slide-btn">
                    服务范围
                    </a>
                    <a href="/cases" class="slide-btn slide-btn-active">
                    案例展示
                    </a>
                </div> -->
            </div>
            @endforeach

        </div>
        <div class="swiper-pagination"></div>
        <!-- <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div> -->
        </div>
    </div>

    <div class="section services">
        <div class="english-title">Our service</div>
        <div class="chinese-title">我们的服务</div>
        <div class="section-seperator"></div>
        <div class="section-content relative">
            <div class="row">
                <div class="service-item  absolute" style="left:10px;">
                    <img src="images/ws.png" alt="">
                    <div class="service-item-title">
                    个性网站建设
                    </div>
                    <div class="service-item-text">
                    针对品牌提供定制化网站建设解决方案
                    </div>
                </div>
                <div class="service-item absolute" style="left:310px;">
                    <img src="images/phone.png" style="width:96px;" alt="">
                    <div class="service-item-title">
                    程序开发
                    </div>
                    <div class="service-item-text">
                    以安全快的代码展示实力
                    </div>
                </div>
                <div class="service-item absolute" style="left:610px;">
                    <img src="images/kaifa.png" alt="">
                    <div class="service-item-title">
                    小程序开发
                    </div>
                    <div class="service-item-text">
                    为您定制专属与您的小程序
                    </div>
                </div>
                <div class="service-item absolute" style="left:910px;">
                    <img src="images/hlw.png" alt="">
                    <div class="service-item-title">
                    互联网需求服务
                    </div>
                    <div class="service-item-text">
                    满足各互联网创新项目需求
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content about-us">
        <div class="section">
        <div class="english-title">
            About us
        </div>
        <div class="chinese-title">
            关于我们
        </div>
        <div class="section-seperator"></div>
            <div class="section-content relative">
                <div class="about-us-left absolute">
                    <div class="about-us-text">
                        我们是一家专注用户体验与互联网品牌建设的高端设计机构，
                        我们在互联网行业兼具宽阔而前瞻的视野，苛求设计中的每一个环节，每一个细节。为客户提供策略性的思考，
                        辅助客户在互联网产品开发中实现精准定位。我们的宗旨是竭尽所能为客户提供高品质的解决方案，用设计提升价值。
                    </div>
                    <a href="/about" class="know-more" target="_blank">查看更多</a>
                </div>
                <div class="about-us-right absolute">
                    <img src="images/computer.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="section case-show">
        <div class="english-title">Case show</div>
        <div class="chinese-title">案例展示</div>
        <div class="section-seperator"></div>
        <div class="section-content">
        <div class="relative">
            <div class="case-item" style="left:0;">
                <a href="/cases/1" target="_blank">
                    <div class="case-img-container">
                        <div class="case-img-show">
                            <img src="images/cases/newsico_20170905170429868.jpg" alt="">
                        </div>
                        <div class="case-img-hidden">
                            <img src="images/cases/ico_20170824120347978.png" alt="">
                        </div>
                    </div>
                    <div class="case-text">
                        <h4>CC女神</h4>
                        <p>深圳网站建设案例-CC女神跑项目由深圳市微马城市发展有限公司发起，由深圳登云健康美业集团、汉高（中国）商业发展集团、 深圳市贺贺文化艺术有限公司联合发起的一场最高颜值的微型马拉松赛事。</p>
                    </div>
                </a>
            </div>
            <div class="case-item" style="left:400px;">
                <a href="/cases/2" target="_blank">
                    <div class="case-img-container">
                        <div class="case-img-show">
                            <img src="images/cases/newsico_20170905170933273.jpg" alt="">
                        </div>
                        <div class="case-img-hidden">
                            <img src="images/cases/ico_20170824101806073.png" alt="">
                        </div>
                    </div>
                    <div class="case-text">
                        <h4>华为心声社区</h4>
                        <p>深圳网站建设案例-华为心声社区是华为人的沟通家园，只要符合管理规定，所有真实的经历和想法， 都欢迎和鼓励，对于其中的优秀作品，也会给于稿费激励。</p>
                    </div>
                </a>
            </div>
            <div class="case-item" style="left:800px;">
                <a href="/cases/3" target="_blank">
                    <div class="case-img-container">
                        <div class="case-img-show">
                            <img src="images/cases/newsico_20170905170953943.jpg" alt="">
                        </div>
                        <div class="case-img-hidden">
                            <img src="images/cases/ico_20170824120524597.png" alt="">
                        </div>
                    </div>
                    <div class="case-text">
                        <h4>蜈支洲岛</h4>
                        <p>深圳网站建设案例-蜈支洲岛旅游官网开发，蜈支洲岛集热带海岛旅游资源的丰富性和独特性于一体， 岛上绮丽的自然风光，富有特色的各类度假别墅、木屋及酒吧、游泳池、海鲜餐厅等配套设施</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="relative">
            <div class="case-item" style="left:0;">
                <a href="/cases/4" target="_blank">
                    <div class="case-img-container">
                        <div class="case-img-show">
                            <img src="images/cases/newsico_20170905171132083.jpg" alt="">
                        </div>
                        <div class="case-img-hidden">
                            <img src="images/cases/ico_20170824142710065.png" alt="">
                        </div>
                    </div>
                    <div class="case-text">
                        <h4>大家创库</h4>
                        <p>深圳网站建设案例-大家创库UNIDEA BANK是由张晓明先生与陈粤先生合伙经营， 是一家以“策略为先导、视觉表达为手段、产品落地为目的”的品牌设计公司。</p>
                    </div>
                </a>
            </div>
            <div class="case-item" style="left:400px;">
                <a href="/cases/10" target="_blank">
                    <div class="case-img-container">
                        <div class="case-img-show">
                            <img src="images/cases/huacheng.png" alt="">
                        </div>
                        <div class="case-img-hidden">
                            <img src="images/cases/ico_huacheng.png" alt="">
                        </div>
                    </div>
                    <div class="case-text">
                        <h4>花城+</h4>
                        <p>广州市广播电视台（Guangzhou Broadcasting Network），（又称：广州台，GZBN），是广州市委、市政府为配合文化事业单位改革和广电总局对电台、电视台合并的要求而建成的。</p>
                    </div>
                </a>
            </div>
            <div class="case-item" style="left:800px;">
                <a href="/cases/6" target="_blank">
                    <div class="case-img-container">
                        <div class="case-img-show">
                            <img src="images/cases/newsico_20170905171425383.jpg" alt="">
                        </div>
                        <div class="case-img-hidden">
                            <img src="images/cases/ico_20170905174228985.png" alt="">
                        </div>
                    </div>
                    <div class="case-text">
                        <h4>Deep3d</h4>
                        <p>深圳网站建设案例-DEEP3D创客拥有全球领先的3D扫描、建模技术和顶级专家， 是中国第一个以3D数据采集（扫描）、3D数据处理、3D打印全产业为依托的行业垂直化创客平台。</p>
                    </div>
                </a>
            </div>
        </div>
            <div class="relative">
                <div class="case-item" style="left:0;">
                    <a href="/cases/7" target="_blank">
                        <div class="case-img-container">
                            <div class="case-img-show">
                                <img src="images/cases/xilegu.png" alt="">
                            </div>
                            <div class="case-img-hidden">
                                <img src="images/cases/ico_xilegu.png" alt="">
                            </div>
                        </div>
                        <div class="case-text">
                            <h4>熹乐谷</h4>
                            <p>勤天熹乐谷位于中国·广东·清远·佛冈·汤塘，由勤天集团开发，集度假酒店、温泉及水上乐园、亲子乡野旅游、民俗文化体验村、婚庆及会议、养生旅居养老、休闲度假地产等七大业态于一体的南中国温泉度假综合体。</p>
                        </div>
                    </a>
                </div>
                <div class="case-item" style="left:400px;">
                    <a href="/cases/8" target="_blank">
                        <div class="case-img-container">
                            <div class="case-img-show">
                                <img src="images/cases/camel.png" alt="">
                            </div>
                            <div class="case-img-hidden">
                                <img src="images/cases/ico_camel.png" alt="">
                            </div>
                        </div>
                        <div class="case-text">
                            <h4>Camel骆驼</h4>
                            <p>美国骆驼（Camel骆驼）品牌创于1913年，骆驼（中国）户外用品有限公司是美国骆驼(AMERICAN CAMEL INTERNATIONAL INVEST ENTERPRISE LTD)在亚太地区全权运营机构（亚太地区总部），负责美国骆驼（CAMEL骆驼）在亚太地区的品牌运作业务。</p>
                        </div>
                    </a>
                </div>
                <div class="case-item" style="left:800px;">
                    <a href="/cases/9" target="_blank">
                        <div class="case-img-container">
                            <div class="case-img-show">
                                <img src="images/cases/yundong.png" alt="">
                            </div>
                            <div class="case-img-hidden">
                                <img src="images/cases/ico_camel.png" alt="">
                            </div>
                        </div>
                        <div class="case-text">
                            <h4>骆驼运动</h4>
                            <p>美国骆驼（Camel骆驼）品牌创于1913年，骆驼（中国）户外用品有限公司是美国骆驼(AMERICAN CAMEL INTERNATIONAL INVEST ENTERPRISE LTD)在亚太地区全权运营机构（亚太地区总部），负责美国骆驼（CAMEL骆驼）在亚太地区的品牌运作业务。</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="call-me">
        <div class="container">
        <h3>心动了吗？心动的话就立即联系我们吧！</h3>
        <a href="/link">联系我们</a>
        </div>
    </div>

    <div class="advantage-bg">
        <div class="our-advantage">
        <br>
        <div class="english-title">
            Our advantage
        </div>
        <div class="chinese-title">
            我们的优势
        </div>
        <div class="section-seperator"></div>
        <div class="section-content">
            <div class="relative">
                <div class="absolute advancetage" style="width:700px;left:0;">
                    <img src="/images/P14_8gis.png" class="advantage-img" alt="">
                </div>
                <div class="absolute" style="width:450px;left:750px;">
                    <ul class="advantage-item">
                        <li>
                            <img src="images/01_399n.png" class="advantage-item-img" alt="">
                            <span class="advantage-item-title">10年建站经验</span>
                            <div class="advantage-item-text">
                            丰富的网站建设经验，一对一网页设计及售后对接，为您的网站创造商业价值。
                            </div>
                        </li>
                        <li>
                            <img src="images/01_399n.png" class="advantage-item-img" alt="">
                            <span class="advantage-item-title">300+客户选择</span>
                            <div class="advantage-item-text">
                            300+客户选择与我们合作，告诉您选择我们是一个正确的选择。
                            </div>
                        </li>
                        <li>
                            <img src="images/01_399n.png" class="advantage-item-img" alt="">
                            <span class="advantage-item-title">24小时售后支持</span>
                            <div class="advantage-item-text">
                            提供24小时售后支持，为您保驾护航，不用担心出现问题无法解决。
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class="section container">
        <div class="english-title">
        News information
        </div>
        <div class="chinese-title">
        新闻动态
        </div>
        <div class="section-seperator"></div>
        <div class="section-content">
            <div>
                @foreach($newsList as $item)
                <div class="news-list">
                    <div class="new-date">
                        <div class="new-date-day">
                        {{date("d",strtotime($item->created_at))}}
                        </div>
                        <div class="new-date-year">
                        {{date("Y-m",strtotime($item->created_at))}}
                        </div>
                    </div>
                    <div class="new-item">
                        <div class="new-title">
                        <h4><a href="/newsitem/{{$item->id}}" target="_blank">{{$item->news_title}}</a></h4>
                        </div>
                        <div class="new-content">
                        <p>{{$item->abstract}}</p>
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="logos">
        <div class="container">
            <ul>
                <li>
                    <img src="images/icons/20170829172854549.jpg" alt="">
                </li>
                <li>
                    <img src="images/icons/20170829173137928.jpg" alt="">
                </li>
                <li>
                    <img src="images/icons/20170829173137928.jpg" alt="">
                </li>
                <li>
                    <img src="images/icons/20170829173130082.jpg" alt="">
                </li>
                <li>
                    <img src="images/icons/20170829172842506.jpg" alt="">
                </li>
                <li>
                    <img src="images/icons/20170829172912037.jpg" alt="">
                </li>
                <li>
                    <img src="images/icons/20170829173100317.jpg" alt="">
                </li>
                <li>
                    <img src="images/icons/20170829173112079.jpg" alt="">
                </li>
                <li>
                    <img src="images/icons/20170829173121767.jpg" alt="">
                </li>
                <li>
                    <img src="images/icons/20170829173145104.jpg" alt="">
                </li>
                <li>
                    <img src="images/icons/20170829173159269.jpg" alt="">
                </li>
                <li>
                    <img src="images/icons/20170829173211547.jpg" alt="">
                </li>
                <li>
                    <img src="images/icons/20170829173220392.jpg" alt="">
                </li>
                <li>
                    <img src="images/icons/20170829173659726.jpg" alt="">
                </li>
                <li>
                    <img src="images/icons/20170829173832312.jpg" alt="">
                </li>
                <li>
                    <img src="images/icons/20170829173220392.jpg" alt="">
                </li>
                <li>
                    <img src="images/icons/20170829174243660.jpg" alt="">
                </li>
                <li>
                    <img src="images/icons/20170829174304220.jpg" alt="">
                </li>
                <li>
                    <img src="images/icons/20170829174049904.jpg" alt="">
                </li>
                <li>
                    <img src="images/icons/20170829174420692.jpg" alt="">
                </li>
            </ul>
        </div>
    </div>
   

@include('footer')
