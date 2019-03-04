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
              骆驼运动小程序项目是广东骆驼服饰有限公司企业旗下的一个内容类小程序。宣导体育，运动，健康的生活理念。项目上线便保持着用户高日活量。充分体现了项目的价值意义和无限的潜力。是一款有温度的互联网产品。
          </p>
        </div>
        <P><img src="/storage/images/camel_exercises/01.jpg" class="" alt=""></P>
        <P><img src="/storage/images/camel_exercises/02.jpg" class="" alt=""></P>
        <P><img src="/storage/images/camel_exercises/03.jpg" class="" alt=""></P>
        <P><img src="/storage/images/camel_exercises/04.jpg" class="" alt=""></P>
        <P><img src="/storage/images/camel_exercises/05.jpg" class="" alt=""></P>
        <P><img src="/storage/images/camel_exercises/06.jpg" class="" alt=""></P>
        <P><img src="/storage/images/camel_exercises/07.jpg" class="" alt=""></P>
        <P><img src="/storage/images/camel_exercises/08.jpg" class="" alt=""></P>
        <P><img src="/storage/images/camel_exercises/09.jpg" class="" alt=""></P>
        <P><img src="/storage/images/camel_exercises/10.jpg" class="" alt=""></P>
  </div>

</div>
@include('footer')
