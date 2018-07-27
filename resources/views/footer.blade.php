        <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
        <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
        <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/swiper.min.js"></script>
        <script>
        var mySwiper = new Swiper('.swiper-container', {
            autoplay: true,
            pagination: {
            el: '.swiper-pagination',
            },
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            },
        })
        </script>
    </body>
</html>