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
              广州市广播电视台（Guangzhou Broadcasting Network），（又称：广州台，GZBN），是广州市委、市政府为配合文化事业单位改革和广电总局对电台、电视台合并的要求而建成的。
          </p>
        </div>
        <P><img src="/storage/images/huacheng/01.jpg" class="" alt=""></P>
        <P><img src="/storage/images/huacheng/02.jpg" class="" alt=""></P>
        <P><img src="/storage/images/huacheng/03.jpg" class="" alt=""></P>
        <P><img src="/storage/images/huacheng/04.jpg" class="" alt=""></P>
        <P><img src="/storage/images/huacheng/05.jpg" class="" alt=""></P>
        <P><img src="/storage/images/huacheng/06.jpg" class="" alt=""></P>
        <P><img src="/storage/images/huacheng/07.jpg" class="" alt=""></P>
        <P><img src="/storage/images/huacheng/08.jpg" class="" alt=""></P>
        <P><img src="/storage/images/huacheng/09.jpg" class="" alt=""></P>
        <P><img src="/storage/images/huacheng/10.jpg" class="" alt=""></P>
  </div>

</div>
@include('footer')