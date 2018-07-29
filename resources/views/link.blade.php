@include('header')
<style type="text/css">
    .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
    .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
</style>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
<div class="content">
        @include('nav')

        <div class="about-top-image"></div>

        <!-- 中部导航栏 -->
        <div class="mid-content callmepage">
          <div class="call-me-content">
            <div class="call-me-top">
                <div class="call-me-top-left">
                  <div style="width:900px;height:350px;" id="dituContent">
                </div>
                <div class="call-me-top-right">
                  <h3>联系我们</h3>
                  <h3>CONTACT US</h3>
                  <img src="images/jiantou.png" class="jiantou" alt="">
                </div>
            </div>
            <div class="call-me-bottom">
              <div class="call-me-bottom-left">
                <img src="images/qr_layer56C31F7A71D5AAAEDFEA496968438651.png" alt="">
              </div>
              <div class="call-me-bottom-right">
                <h4>联系地址：广东省某某xxxxxxxxxxxxxxxxxxxxxxxxxx</h4>
                <h4>联系电话：400-000-0000</h4>
                <h4>联系邮箱：xxxxx@qq.com</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
      //创建和初始化地图函数：
      function initMap(){
          createMap();//创建地图
          setMapEvent();//设置地图事件
          addMapControl();//向地图添加控件
      }

      //创建地图函数：
      function createMap(){
          var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
          var point = new BMap.Point(116.395645,39.929986);//定义一个中心点坐标
          map.centerAndZoom(point,12);//设定地图的中心点和坐标并将地图显示在地图容器中
          window.map = map;//将map变量存储在全局
      }

      //地图事件设置函数：
      function setMapEvent(){
          map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
          map.enableScrollWheelZoom();//启用地图滚轮放大缩小
          map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
          map.enableKeyboard();//启用键盘上下左右键移动地图
      }

      //地图控件添加函数：
      function addMapControl(){
          //向地图中添加缩放控件
  	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
  	map.addControl(ctrl_nav);
          //向地图中添加缩略图控件
  	var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
  	map.addControl(ctrl_ove);
          //向地图中添加比例尺控件
  	var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
  	map.addControl(ctrl_sca);
      }


      initMap();//创建和初始化地图
  </script>
@include('footer')