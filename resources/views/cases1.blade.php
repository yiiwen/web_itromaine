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
            CC女神跑项目由深圳市微马城市发展有限公司发起，由深圳登云健康美业集团、汉高（中国）商业发展集团、 深圳市贺贺文化艺术有限公司联合发起的一场最高颜值的微型马拉松赛事。
          </p>
        </div>
        <P><img src="/storage/images/cc/newsinrk_20170904163206055.jpg" class="" alt=""></P>
        <P><img src="/storage/images/cc/201708241040450093.jpg" class="" alt=""></P>
        <P><img src="/storage/images/cc/201708241040451186.jpg" class="" alt=""></P>
        <P><img src="/storage/images/cc/201708241040452603.jpg" class="" alt=""></P>
        <P><img src="/storage/images/cc/201708241040453843.jpg" class="" alt=""></P>
        <P><img src="/storage/images/cc/201708241040455259.jpg" class="" alt=""></P>
        <P><img src="/storage/images/cc/201708241040456441.jpg" class="" alt=""></P>
        <P><img src="/storage/images/cc/201708241040457154.jpg" class="" alt=""></P>
        <P><img src="/storage/images/cc/201708241040458463.jpg" class="" alt=""></P>
  </div>

</div>
@include('footer')