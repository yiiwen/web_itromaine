@include('header')
<style type="text/css">
    .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
    .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
</style>
<script type="text/javascript" src="https://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
<div class="content">
        @include('nav')

        <div class="link-top-image">
          <h1>赶快与我们取得联系吧!!!</h1>
          <p style="text-align:center;">
            <img src="images/qrcode.jpg" alt="" style="width:130px;">&nbsp;&nbsp;&nbsp;
            <img src="images/8e1e1bbe59654b9277878241923c33f.jpg" style="width:130px;" alt="">
            &nbsp;&nbsp;&nbsp;
            <img src="images/d3c890f3d2fb7e91e32abfe8b81660e.jpg" style="width:130px;" alt="">
          </p>
        </div>



        <div class="mid-content callmepage">

          <div class="need">
            <h3>快速提交您的需求</h3>

            <form action="/demand/save" method="post" onsubmit=@php if(isset($_GET['message'])) {echo "'return false'";} else {echo "'return sendDemand()'";} @endphp>
              @csrf
              <p>
                <input type="text" placeholder="公司名称" name="companyName" id="companyName" />
                <input type="text" placeholder="您的名称" name="name" id="name" />
                <input type="text" placeholder="电话" name="phone" id="phone" />
                <input type="text" placeholder="邮箱" name="email" id="email"/>
              </p>
              <br>
              <h4>您需要的服务</h4>
                <p>
                  <span><input type="checkbox" name="service[]" value="1" id="">&nbsp;网站建设与改版</span>
                  <span><input type="checkbox" name="service[]" value="2" id="">&nbsp;移动应用设计与开发</span>
                </p>
                <p>
                  <span><input type="checkbox" name="service[]" value="3" id="">&nbsp;软件/系统设计与开发</span>
                  <span><input type="checkbox" name="service[]" value="4" id="">&nbsp;其他</span>
                </p>
                <br>
              <h4>您最关注的地方</h4>
                <p>
                  <span><input type="checkbox" name="follow[]" value="1" id="">&nbsp;功能要求比较高</span>
                  <span><input type="checkbox" name="follow[]" value="2" id="">&nbsp;需要与移动端适配</span>
                </p>
                <p>
                  <span><input type="checkbox" name="follow[]" value="3" id="">&nbsp;设计创意要求比较高</span>
                  <span><input type="checkbox" name="follow[]" value="4" id="">&nbsp;搜索引擎优化</span>
                </p>
                <br>
                <h4>预算</h4>
                <p>
                  <span><input type="radio" name="budget" id="" value="1">&nbsp;2万以内</span>
                  <span><input type="radio" name="budget" id="" value="2">&nbsp;2-4万</span>
                  <span><input type="radio" name="budget" id="" value="3">&nbsp;4-8万</span>
                  <span><input type="radio" name="budget" id="" value="4">&nbsp;8万以上</span>
                </p>
                <br>
                <h4>您的需求描述</h4>
                <p>
                  <textarea name="" id="" cols="80" rows="6" name="description" style="resize:none;outline:none;padding:5px;"></textarea>
                </p>
                <p>
                  <input type="submit" value="发送您的需求">
                  或将需求文档发送邮箱：<a href="mailto:youmaicai@163.com" style="text-decoration:none;">youmaicai@163.com</a>
                </p>
            </form>

          </div>

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
                <img src="images/qrcode.jpg" alt="">
              </div>
              <div class="call-me-bottom-right">
                <h4>联系地址：广东省广州市南沙区丰泽东路106号</h4>
                <h4>联系电话：15818848247 13668984401</h4>
                <h4>联系邮箱：youmaicai168@163.com</h4>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">操作提示</h4>
            </div>
            <div class="modal-body">
              {{$message}}
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-green" data-dismiss="modal">关闭</button>
            </div>
          </div>
        </div>
      </div>

      <script type="text/javascript">


      @if ($message)
        $('#myModal').modal('toggle');
      @endif
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
          // 创建地址解析器实例
          var myGeo = new BMap.Geocoder();
          // 将地址解析结果显示在地图上,并调整地图视野
          myGeo.getPoint("广东省广州市南沙区丰泽东路106号", function(point){
            if (point) {
              map.centerAndZoom(point, 16);
              map.addOverlay(new BMap.Marker(point));
            }else{
              alert("您选择地址没有解析到结果!");
            }
          }, "广东省");
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

    // 发送表单
    function sendDemand() {
      const companyName =  document.getElementById("companyName").value;
      const name = document.getElementById("name").value;
      const phone = document.getElementById("phone").value;
      if (!companyName) {
        document.getElementById("companyName").style.border = "1px solid red";
        return false;
      }
      if (!name) {
        document.getElementById("name").style.border = "1px solid red";
        return false;
      }
      if (!phone) {
        document.getElementById("phone").style.border = "1px solid red";
        return false;
      }
      let pattern1 = /^1[0-9]{10}$/;
      let pattern2 = /^0[0-9]{2,3}(-)?[0-9]{7,8}/;
      if (!pattern1.test(phone) && !pattern2.test(phone)) {
        document.getElementById("phone").style.border = "1px solid red";
        return false;
      }

    }

  </script>
@include('footer')
