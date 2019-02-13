@extends("admin.layout")
    @php $active = '/admin/index' @endphp
    
    @section("title","广州油麦菜信息科技有限公司-CMS")

    @section("content")
    <div class="container">
        <section class="banner sec">
            <h4>首页Banner: 
                <div class="btn-group" style="margin-left:20px;" role="group" aria-label="...">
                    <button type="button" id="add-banner" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-cloud-upload"></i>&nbsp;新增轮播图</button>
                    <button type="button" id="save-banner" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-ok-sign"></i>&nbsp;保存设置</button>
                    <button type="button" id="reset-banner" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-repeat"></i>&nbsp;撤销更改</button>
                </div>
            </h4>
            
            <div class="row banner-contain">

                @foreach ($bannserList as $banner)

                <div class="col-md-2">
                    <div class="banner-image">
                        <img src="{{$banner->path}}" data-id="{{$banner->id}}" data-url="{{$banner->url}}" data-alt="{{$banner->alt_info}}"  alt="">
                    </div>
                    <div class="banner-action-btn">
                        <ul>
                            <li><a href="javascript:void(0)" class="toLeft" title="左移动"><i class="glyphicon glyphicon-arrow-left"></i></a></li>
                            <li><a href="javascript:void(0)" class="toRight" title="右移动"><i class="glyphicon glyphicon-arrow-right"></i></a></li>
                            <li><a href="javascript:void(0)" class="banner-delete" title="删除"><i class="glyphicon glyphicon-trash"></i></a></li>
                            <li><a href="javascript:void(0)" class="edit" title="替换"><i class="glyphicon glyphicon-pencil"></i></a></li>
                            <li><a href="javascript:void(0)" class="toBig" title="查看"><i class="glyphicon glyphicon-fullscreen"></i></a></li>
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <section>
            <h4>网站SEO:</h4>
            <div class="form-group">
                <label for="site_domain">网站域名</label>
                <input type="text" class="form-control site-options" data-param="domain" id="site_domain"
                 value="{{$siteOptions->domain}}" placeholder="网站域名">
            </div>
            <div class="form-group">
                <label for="site_title">网站标题</label>
                <input type="text" class="form-control site-options" data-param="title" id="site_title"
                 value="{{$siteOptions->title}}" placeholder="网站标题">
            </div>
            <div class="form-group">
                <label for="site_keys">网站关键词</label>
                <input type="text" class="form-control site-options" data-param="keywords" id="site_keys"
                 value="{{$siteOptions->keywords}}" placeholder="网站关键词">
            </div>
            <div class="form-group">
                <label for="description">网站简洁</label>
                <textarea name="" rows="4" class="form-control site-options" data-param="description">{{$siteOptions->description}}</textarea>
            </div>
        </section>
    </div>

    <!-- banner删除确认modal -->
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" id="deleteBannerModal" aria-labelledby="deleteBannerModal">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    油麦菜删除提醒！！！
                </div>
                <div class="modal-body">
                    <p>你将删除Banner图?</p>
                    <button type="button" style="margin-left:170px !important;" class="btn btn-danger btn-sm banner-delete-confirm">确认</button>
                    <button type="button" class="btn btn-default btn-sm banner-delete-cannel">取消</button>
                </div>
            </div>
        </div>
    </div>

    <!-- banner保存提示modal -->
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" id="saveBanner" aria-labelledby="saveBanner">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    油麦菜操作提示
                </div>
                <div class="modal-body">
                    <p></p>
                </div>
            </div>
        </div>
    </div>

    <!-- banner大图查看modal -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="toBigModal" aria-labelledby="toBigModal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    轮播图
                </div>
                <div class="modal-body">
                    <img src="" alt="" id="banner-view" style="width:100%;">
                </div>
            </div>
        </div>
    </div>

    <!-- banner大图查看modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="uploadImg" aria-labelledby="uploadImg">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    上传轮播图
                </div>
                <div class="modal-body">
                    <div id="banner-upload-view"></div>
                    <br>
                    <input type="text" class="form-control" id="banner-url" placeholder="跳转链接">
                    <br>
                    <input type="text" class="form-control" id="banner-alt" placeholder="alt信息">
                    <br>
                    <input type="file" style="display:none;" id="input-banner"/>
                    <button type="button" class="btn btn-primary btn-sm upload-banner">选择图片</button>
                    <button type="button" id="upload-banner-success" class="btn btn-success btn-sm">确认</button>
                    <button type="button" class="btn btn-warning btn-sm banner-delete-cannel">取消</button>
                </div>
            </div>
        </div>
    </div>

    @endsection

    @section("script")
        <script type="text/javascript" src="/js/app.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/admin/js/index.js"></script>
    @endsection("script")