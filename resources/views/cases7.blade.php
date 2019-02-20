@include('header')
<style>
  .bottom-info{
    margin-top:0px;
  }
  .casespage p{
    margin:0;
  }
  .casespage p img{
    width:100%;
  }
  .caseTop{
    width:1000px;
    margin:30px auto;
  }
  .caseTop h2,.caseTop p{
    text-align:center;
  }
  .caseTop h2{
    margin-top:50px;
    font-size:2.5em;
    margin-bottom:1em;
  }

  .caseTop p{
    font-size:1.4em;
    line-height:2em;
    color:#7b7b7b;
  }
</style>
<div class="content">
  @include('nav2')
  <!-- 中部导航栏 -->
  <div class="casespage">
        <div class="caseTop">
          <h2>品牌介绍</h2>
          <p>
              勤天熹乐谷位于中国·广东·清远·佛冈·汤塘，由勤天集团开发，集度假酒店、温泉及水上乐园、亲子乡野旅游、民俗文化体验村、婚庆及会议、养生旅居养老、休闲度假地产等七大业态于一体的南中国温泉度假综合体。
          </p>
        </div>
        <P><img src="/storage/images/xilegu/01.jpg" class="" alt=""></P>
        <P><img src="/storage/images/xilegu/02.jpg" class="" alt=""></P>
        <P><img src="/storage/images/xilegu/03.jpg" class="" alt=""></P>
        <P><img src="/storage/images/xilegu/04.jpg" class="" alt=""></P>
        <P><img src="/storage/images/xilegu/05.jpg" class="" alt=""></P>
        <P><img src="/storage/images/xilegu/06.jpg" class="" alt=""></P>
        <P><img src="/storage/images/xilegu/07.jpg" class="" alt=""></P>
        <P><img src="/storage/images/xilegu/08.jpg" class="" alt=""></P>
        <P><img src="/storage/images/xilegu/09.jpg" class="" alt=""></P>
        <P><img src="/storage/images/xilegu/10.jpg" class="" alt=""></P>
  </div>

</div>
@include('footer')