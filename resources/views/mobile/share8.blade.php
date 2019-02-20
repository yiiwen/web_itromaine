@include('/mobile/header')
@include('/mobile/nav')
<div class="container">
  <div id="pagePath">首页 > 建站知识</div>
  <!-- 中部导航栏 -->
  <div class="sharepage">
    <div class="shareTop">
      <h2>设计用于语音搜索的移动网站</h2>
      <span class="shareAuthor">By:itromane</span>-
      <span class="shareTime">2019-02-18 12:40:48</span>
    </div>


      <div class="shareContent">
        <p><img src="/images/share/15482375791002.jpg" alt="" /></p>
        <p>2019年网站的必备技术之一将是地理定位，地理位置不仅有助于安全性和法律遵从性，而且还改善了客户体验，这是在线盈利的关键指标之一。</p>
        <p>地理定位对企业有许多核心好处，但真正的好处是个性化的内容。将匿名访问转化为持久的客户关系是所有优秀网站的目标，这是通过围绕用户真实世界的情况精心设计的用户体验实现的。地理位置是确定用户首选货币、语言甚至法律地位的最佳方法。</p>
        <p>ipapi是使用起来最简单的地理定位服务之一，另外，它也是最便宜的服务之一，因为对于许多企业来说，它是免费的。</p>
        <p><strong>为什么使用地理定位？</strong></p>
        <p>地理定位不仅仅是关于跟踪数据，它是关于改善客户体验和提供尽可能个性化的用户体验。几乎所有先进的Web应用程序(PWAs)和网站都受益于将用户会话精确匹配到真实世界的位置。无论你是想做广告宣传，提供浮动运费，还是仅仅让人们感到宾至如归，这一切都要从认识到他们来自哪里开始。</p>
        <p>比较阿拉斯加和佛罗里达的客户，阿拉斯加人在12月购买电扇的可能性微乎其微，而佛罗里达人在7月购买电热器的可能性同样微乎其微。通过为不同的位置定制产品页面，我们可以响应用户的意图。根据地理位置定制购物体验已经被多次证明可以提高客户参与度、提高转化率并留住更多的客户。</p>
        <p>地理位置的最佳用途之一是为用户提供正确的办公时间，许多客户仍然喜欢在电话线的另一端与人交谈，尤其是在订单出现问题时。地理定位允许您调整显示的办公时间，这样东海岸的客户在您的办公室开放前不会打电话，西海岸的客户在办公室关闭后也不会打电话。</p>
        <p>对于PWAs和网站来说，能够准确地识别用户的位置越来越成为必须的要求。完全依赖任何地理定位服务都是不安全的，有各种各样的原因会导致它返回错误的数据，比如人们在海外度假，或者到不同的地区出差。地理位置应该只作为默认值使用，用户应该有手动更改位置的选项，但这是一个很好的起点。以GDPR为例，许多企业都违反了欧盟的隐私法，但ipapi允许您识别是否有人居住在欧盟，从而确保您遵守法规。</p>
        <p><strong>为什么使用ipapi？</strong></p>
        <p>在web上有许多地理位置查找服务，其中许多提供具有竞争力的价格和简单的设置。ipapi优于字段的地方在于它返回的数据的质量。任何地理位置查找服务的质量都取决于它所提供的数据，ipapi还与一些世界上最大的isp保持合作关系，这使得它的数据精确性是其他IP查找服务梦寐以求的。</p>
        <p>ipapi受到全球3万多家企业的信任，它提供了可用的最佳数据，帮助web团队根据每个用户的期望定制内容，为客户设计尽可能好的用户体验。</p>
        <p>ipapi构建在可伸缩的基础设施上，这意味着无论您每个月处理几个请求，还是每天处理数百万个请求，服务都将迅速返回您需要的数据。正因为如此，对于开发者和初创公司来说，它是一个完美的地理定位服务，他们一开始需要打几个电话，但希望很快就能处理数百万个电话。云基础设施可以快速处理任何数量的请求，因此无论您是面向12个人还是120万人，您的代码库都将按照预期工作。</p>
        <p><strong>开始学习ipapi</strong></p>
        <p>将您的PWA或网站与ipapi集成是轻而易举的事情，您可以使用许多流行的编码语言(从PHP到JS)连接到API。数据以您喜欢的XML或JSON格式返回。</p>
        <p><strong>开始使用ipapi非常简单，方法如下：</strong></p>
        <p>步骤1：使用ipapi注册一个免费帐户并获取API访问密钥(这是一长串数字和字母，告诉ipapi谁正在访问API)。</p>
        <p><strong>步骤2：从API地址开始构建一个URL：</strong></p>
        <p>http：//api.ipapi.com/</p>
        <p><strong>接下来，添加您想要查询的IP地址：</strong></p>
        <p>http：//api.ipapi.com/167.75.23.18</p>
        <p><strong>然后，添加您的访问键：</strong></p>
        <p>http：//api.ipapi.com/167.75.23.18？access_key=YOUR_ACCESS_KEY</p>
        <p>
          <div class="">
            (确保您使用实际的访问键替换了您的_access_key。)
            在浏览器中打开那个URL，你会得到这些细节：
          </div>
        </p>
        <p><img src="/images/share/1548237678561.jpg" alt="" /></p>
        <p>操作非常简单！</p>
        <p>现在就可以按照自己的选择进行积分了，最简单的方法是通过Ajax使用jQuery这样的库。</p>
        <p>除了这个简单的设置之外，ipapi还为定制请求提供了大量可选参数，例如是否接收JSON或XML格式的响应。</p>
        <p>这是一个简单的系统，可以让你在几分钟内启动并运行。</p>
        <p><strong>选择ipapi</strong></p>
        <p>ipapi对于每个月的前10,000个请求是免费的，如果你需要更多的请求，费用从10美元起。但是想想1万个请求实际上有多少，你的网站中有多少突破了这个上限？大多数小型企业不太可能需要超过10,000个请求，这意味着您可以免费使用web上最好的地理定位服务之一。</p>
        <p>唯一需要注意的是，只有高级计划支持https。如果您正在交付一个安全的站点，或者依赖SSL来提高SEO，那么一定要记住这一点。</p>
        <p>永久免费帐户也受到限制，不仅限于查找和http的数量，还包括您可以请求的支持数量和可以检索的数据的种类。一旦您进入高级选项，无限支持包括在内，以及位置数据，您可以识别货币，时区，和连接数据。</p>
        <p>从免费的地理定位开始，通过注册ipapi的免费永久试用帐户，每个月免费获得您的第一个10,000个请求。</p>
      </div>
    </div>
</div>
@include('/mobile/footer')
