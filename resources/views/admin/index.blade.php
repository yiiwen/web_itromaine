@extends("admin.layout")
    @php $active = '/admin/index' @endphp
    
    @section("title","广州油麦菜信息科技有限公司-CMS")

    @section("content")
    <div class="container">
        <section class="banner">
            <h4>首页Banner: 
                <div class="btn-group" style="margin-left:20px;" role="group" aria-label="...">
                    <button type="button" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-cloud-upload"></i>&nbsp;新增轮播图</button>
                    <button type="button" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-ok-sign"></i>&nbsp;保存设置</button>
                    <button type="button" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-repeat"></i>&nbsp;撤销更改</button>
                </div>
            </h4>
            
            <div class="row">
                <div class="col-md-2">
                    <div class="banner-image">
                        <img src="/images/banner/1_ceqn.jpg" data-sort="1" data-id="1"  alt="">
                    </div>
                    <div class="banner-action-btn">
                        <ul>
                            <li><a href="javascript:void(0)" title="左移动"><i class="glyphicon glyphicon-arrow-left"></i></a></li>
                            <li><a href="javascript:void(0)" title="右移动"><i class="glyphicon glyphicon-arrow-right"></i></a></li>
                            <li><a href="javascript:void(0)" class="banner-delete" title="删除"><i class="glyphicon glyphicon-trash"></i></a></li>
                            <li><a href="javascript:void(0)" title="替换"><i class="glyphicon glyphicon-pencil"></i></a></li>
                            <li><a href="javascript:void(0)" title="查看"><i class="glyphicon glyphicon-fullscreen"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="banner-image">
                        <img src="/images/banner/1_ceqn.jpg" data-sort="2" data-id="2"  alt="">
                    </div>
                    <div class="banner-action-btn">
                        <ul>
                            <li><a href="javascript:void(0)" title="左移动"><i class="glyphicon glyphicon-arrow-left"></i></a></li>
                            <li><a href="javascript:void(0)" title="右移动"><i class="glyphicon glyphicon-arrow-right"></i></a></li>
                            <li><a href="javascript:void(0)" class="banner-delete" title="删除"><i class="glyphicon glyphicon-trash"></i></a></li>
                            <li><a href="javascript:void(0)" title="替换"><i class="glyphicon glyphicon-pencil"></i></a></li>
                            <li><a href="javascript:void(0)" title="查看"><i class="glyphicon glyphicon-fullscreen"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="banner-image">
                        <img src="/images/banner/1_ceqn.jpg" data-sort="3" data-id="3" alt="">
                    </div>
                    <div class="banner-action-btn">
                        <ul>
                            <li><a href="javascript:void(0)" title="左移动"><i class="glyphicon glyphicon-arrow-left"></i></a></li>
                            <li><a href="javascript:void(0)" title="右移动"><i class="glyphicon glyphicon-arrow-right"></i></a></li>
                            <li><a href="javascript:void(0)" class="banner-delete" title="删除"><i class="glyphicon glyphicon-trash"></i></a></li>
                            <li><a href="javascript:void(0)" title="替换"><i class="glyphicon glyphicon-pencil"></i></a></li>
                            <li><a href="javascript:void(0)" title="查看"><i class="glyphicon glyphicon-fullscreen"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="banner">
            <h4>网站SEO:</h4>
        </section>
    </div>

    <!-- banner删除确认modal -->
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" id="deleteBannerModal" aria-labelledby="deleteBannerModal">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                删除确认？
            </div>
        </div>
    </div>
    @endsection

    @section("script")
        <script type="text/javascript" src="/js/app.js"></script>
        <script type="text/javascript">
            $(".banner-delete").click(function(){
                $("#deleteBannerModal").modal('toggle');    
                //$(this).parents(".banner-action-btn").parent(".col-md-2").remove();
            });
        </script>
    @endsection("script")