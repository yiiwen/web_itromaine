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
              美国骆驼（Camel骆驼）品牌创于1913年，骆驼（中国）户外用品有限公司是美国骆驼(AMERICAN CAMEL INTERNATIONAL INVEST ENTERPRISE LTD)在亚太地区全权运营机构（亚太地区总部），负责美国骆驼（CAMEL骆驼）在亚太地区的品牌运作业务
          </p>
        </div>
        <P><img src="/storage/images/camel/01.jpg" class="" alt=""></P>
        <P><img src="/storage/images/camel/02.jpg" class="" alt=""></P>
        <P><img src="/storage/images/camel/03.jpg" class="" alt=""></P>
        <P><img src="/storage/images/camel/04.jpg" class="" alt=""></P>
        <P><img src="/storage/images/camel/05.jpg" class="" alt=""></P>
        <P><img src="/storage/images/camel/06.jpg" class="" alt=""></P>
        <P><img src="/storage/images/camel/07.jpg" class="" alt=""></P>
        <P><img src="/storage/images/camel/08.jpg" class="" alt=""></P>
        <P><img src="/storage/images/camel/09.jpg" class="" alt=""></P>
        <P><img src="/storage/images/camel/10.jpg" class="" alt=""></P>
  </div>

</div>
@include('footer')