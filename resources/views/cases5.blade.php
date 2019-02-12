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
          港瑞大生珠宝源于优雅浪漫的东方时尚之都香港，是一家大型的综合性珠宝企业， 公司集珠宝生产加工、批发、零售、品牌连锁加盟于一体，在业界享有极高声誉。
          </p>
        </div>
        <P><img src="/storage/images/zhubao/newsinrk_20170904174731498.jpg" class="" alt=""></P>
        <P><img src="/storage/images/zhubao/201708241112375957.jpg" class="" alt=""></P>
        <P><img src="/storage/images/zhubao/201708241112377246.jpg" class="" alt=""></P>
        <P><img src="/storage/images/zhubao/201708241112378379.jpg" class="" alt=""></P>
  </div>

</div>
@include('footer')