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
  @include('nav')
  <!-- 中部导航栏 -->
  <div class="casespage">
        <div class="caseTop">
          <h2>品牌介绍</h2>
          <p>
          心声社区是华为人的沟通家园，只要符合管理规定，所有真实的经历和想法， 都欢迎和鼓励，对于其中的优秀作品，也会给于稿费激励。
          </p>
        </div>
        <P><img src="/storage/images/huawei/newsinrk_20170904163712424.jpg" class="" alt=""></P>
        <P><img src="/storage/images/huawei/201708241018399595.jpg" class="" alt=""></P>
  </div>

</div>
@include('footer')