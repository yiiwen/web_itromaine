@extends("admin.layout")
    @php $active = '/admin/index' @endphp
    
    @section("title","广州油麦菜信息科技有限公司-CMS")

    @section("content")
    <div class="container">
        <section class="banner">
            <h4>首页Banner: 
                <div class="btn-group" style="margin-left:20px;" role="group" aria-label="...">
                    <button type="button" id="add-banner" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-cloud-upload"></i>&nbsp;新增轮播图</button>
                    <button type="button" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-ok-sign"></i>&nbsp;保存设置</button>
                    <button type="button" id="reset-banner" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-repeat"></i>&nbsp;撤销更改</button>
                </div>
            </h4>
            
            <div class="row banner-contain">
                <div class="col-md-2">
                    <div class="banner-image">
                        <img src="/images/banner/1_ceqn.jpg" data-id="1"  alt="">
                    </div>
                    <div class="banner-action-btn">
                        <ul>
                            <li><a href="javascript:void(0)" class="toLeft" title="左移动"><i class="glyphicon glyphicon-arrow-left"></i></a></li>
                            <li><a href="javascript:void(0)" class="toRight" title="右移动"><i class="glyphicon glyphicon-arrow-right"></i></a></li>
                            <li><a href="javascript:void(0)" class="banner-delete" title="删除"><i class="glyphicon glyphicon-trash"></i></a></li>
                            <li><a href="javascript:void(0)" title="替换"><i class="glyphicon glyphicon-pencil"></i></a></li>
                            <li><a href="javascript:void(0)" class="toBig" title="查看"><i class="glyphicon glyphicon-fullscreen"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="banner-image">
                        <img src="/images/banner/2.jpg" data-id="2"  alt="">
                    </div>
                    <div class="banner-action-btn">
                        <ul>
                            <li><a href="javascript:void(0)" class="toLeft" title="左移动"><i class="glyphicon glyphicon-arrow-left"></i></a></li>
                            <li><a href="javascript:void(0)" class="toRight" title="右移动"><i class="glyphicon glyphicon-arrow-right"></i></a></li>
                            <li><a href="javascript:void(0)" class="banner-delete" title="删除"><i class="glyphicon glyphicon-trash"></i></a></li>
                            <li><a href="javascript:void(0)" title="替换"><i class="glyphicon glyphicon-pencil"></i></a></li>
                            <li><a href="javascript:void(0)" class="toBig" title="查看"><i class="glyphicon glyphicon-fullscreen"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="banner-image">
                        <img src="/images/banner/1_ceqn.jpg" data-id="3" alt="">
                    </div>
                    <div class="banner-action-btn">
                        <ul>
                            <li><a href="javascript:void(0)" class="toLeft" title="左移动"><i class="glyphicon glyphicon-arrow-left"></i></a></li>
                            <li><a href="javascript:void(0)" class="toRight" title="右移动"><i class="glyphicon glyphicon-arrow-right"></i></a></li>
                            <li><a href="javascript:void(0)" class="banner-delete" title="删除"><i class="glyphicon glyphicon-trash"></i></a></li>
                            <li><a href="javascript:void(0)" title="替换"><i class="glyphicon glyphicon-pencil"></i></a></li>
                            <li><a href="javascript:void(0)" class="toBig" title="查看"><i class="glyphicon glyphicon-fullscreen"></i></a></li>
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
                    <input type="file" style="display:none;" id="input-banner"/>
                    <button type="button" class="btn btn-primary btn-sm upload-banner">上传图片</button>
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
        <script type="text/javascript">
            let backHtml = '';

            $(".banner").on("click",".banner-delete",function(){
                $("#deleteBannerModal").modal('toggle');
                var obj = $(this);
                $(".banner-delete-cannel").click(function(){
                    $("#deleteBannerModal").modal('hide');
                });
                $(".banner-delete-confirm").click(function(){
                    $(obj).parents(".banner-action-btn").parent(".col-md-2").remove();
                    if (backHtml == '') {
                        backHtml = $(obj).parents(".banner-action-btn").parent(".col-md-2").parent(".row").html();
                    } 
                    $("#deleteBannerModal").modal('hide');
                });
            });

            $(".banner").on("click",".toLeft",function(){
                if (backHtml == '') {
                    backHtml = $(this).parents(".banner-action-btn").parent(".col-md-2").parent(".row").html();
                } 
                let currentObj = $(this).parents(".banner-action-btn").parent(".col-md-2");
                let leftIdx = currentObj.index();
                if (leftIdx > 0) {
                    let prev = currentObj.prev();
                    currentObj.after('<div class="col-md-2">' + prev.html() +"</div>");
                    prev.remove();
                }
            });

            $(".banner").on("click",".toRight",function(){
                if (backHtml == '') {
                    backHtml = $(this).parents(".banner-action-btn").parent(".col-md-2").parent(".row").html();
                } 
                let currentObj = $(this).parents(".banner-action-btn").parent(".col-md-2");
                let nextObj = currentObj.next();
                if (nextObj.index() != -1) {
                    nextObj.after('<div class="col-md-2">' + currentObj.html() +"</div>");
                    currentObj.remove();
                }
            });

            $(".banner").on("click",".toBig",function(){
                let src = $(this).parents(".banner-action-btn").prev(".banner-image").find("img").attr("src");
                $("#banner-view").attr("src",src);
                $("#toBigModal").modal("toggle");
            });

            $("#reset-banner").click(function(){
                if (backHtml) {
                    $(".banner-contain").empty();
                    $(".banner-contain").html(backHtml);
                }
            });

            $("#add-banner").click(function(){
                $("#uploadImg").modal("toggle");
            });

            $(".upload-banner").click(function(){
                $("#input-banner").click();
            });

            $("#input-banner").change(function(){
                let file = document.getElementById("input-banner").files[0];
                let fReader = new FileReader();
                fReader.onload = function(e) {
                    $("#banner-upload-view").append("<img src='"+e.target.result+"' style='width:100%'/>");
                    $("#upload-banner-success").click(function(){
                        let formData = new FormData();
                        formData.append("photo",file);
                        $.ajax({
                            url:'/admin/upload',
                            type:'POST',
                            headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr('content')},
                            dataType: 'JSON',
                            data:formData,
                            processData: false,
                            contentType: false,
                            mimeType: "multipart/form-data",
                            success: function(data) {
                                let html = `<div class="col-md-2">
                                    <div class="banner-image">
                                        <img src="${data.data[0]}"  alt="">
                                    </div>
                                    <div class="banner-action-btn">
                                        <ul>
                                            <li><a href="javascript:void(0)" class="toLeft" title="左移动"><i class="glyphicon glyphicon-arrow-left"></i></a></li>
                                            <li><a href="javascript:void(0)" class="toRight" title="右移动"><i class="glyphicon glyphicon-arrow-right"></i></a></li>
                                            <li><a href="javascript:void(0)" class="banner-delete" title="删除"><i class="glyphicon glyphicon-trash"></i></a></li>
                                            <li><a href="javascript:void(0)" title="替换"><i class="glyphicon glyphicon-pencil"></i></a></li>
                                            <li><a href="javascript:void(0)" class="toBig" title="查看"><i class="glyphicon glyphicon-fullscreen"></i></a></li>
                                        </ul>
                                    </div>
                                </div>`;
                                $(".banner-contain").append(html);
                                $("#uploadImg").modal("toggle");
                            },
                            error:function(data) {
                            }
                        });
                    });
                };
                fReader.readAsDataURL(file);
            });
        </script>
    @endsection("script")