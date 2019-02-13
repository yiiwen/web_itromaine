let backHtml = '';

$(".banner").on("click",".banner-delete",function(){
    $("#deleteBannerModal").modal('toggle');
    var obj = $(this);
    $(".banner-delete-cannel").click(function(){
        $("#deleteBannerModal").modal('hide');
    });
    $(".banner-delete-confirm").click(function(){
        if (backHtml == '') {
            backHtml = $(obj).parents(".banner-action-btn").parent(".col-md-2").parent(".row").html();
        } 
        $(obj).parents(".banner-action-btn").parent(".col-md-2").attr("data-delete","1").hide();
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

$(".banner").on("click",".edit",function(){
    if (backHtml == '') {
        backHtml = $(this).parents(".banner-action-btn").parent(".col-md-2").parent(".row").html();
    } 
    let obj = $(this);
    let src = $(this).parents(".banner-action-btn").prev(".banner-image").find("img").attr("src");
    let url = $(this).parents(".banner-action-btn").prev(".banner-image").find("img").attr("data-url");
    let alt = $(this).parents(".banner-action-btn").prev(".banner-image").find("img").attr("data-alt");
    $("#banner-upload-view").empty();
    $("#banner-upload-view").append(`<img src="${src}" style="width:100%;" />`);
    $("#banner-url").val(url);
    $("#banner-alt").val(alt);
    $("#uploadImg").modal("toggle");
    let file = null;
    $(".upload-banner").click(function(){
        $("#input-banner").click();
        $("#input-banner").change(function(){
            file = document.getElementById("input-banner").files[0];
            let fReader = new FileReader();
            fReader.onload = function(e) {
                $("#banner-upload-view").empty();
                $("#banner-upload-view").append("<img src='"+e.target.result+"' style='width:100%'/>");
                
            };
            fReader.readAsDataURL(file);
        });
    });

    let state = 1;
    if (state == 1) {
        $("#upload-banner-success").click(function(){
            if (state ==1) {
                if (file) {
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
                            $(obj).parents(".banner-action-btn").prev(".banner-image").find("img").attr("src",data.data[0]);
                        },
                        error:function(data) {}
                    });
                }
                $(obj).parents(".col-md-2").find(".banner-image").find("img").attr("data-url",$("#banner-url").val());
                $(obj).parents(".col-md-2").find(".banner-image").find("img").attr("data-alt",$("#banner-alt").val());
                $("#uploadImg").modal("hide");
                return ++state;
            }
        });
    }
    
});
$("#reset-banner").click(function(){
    if (backHtml) {
        $(".banner-contain").empty();
        $(".banner-contain").html(backHtml);
    }
});
//遍历页面信息，保存到banner中
$("#save-banner").click(function(){
    let items = new Array();
    let i = 0;
    $(".banner-image").each(function(){
        let item = {};
        item['id'] = $(this).find("img").attr("data-id");
        item['image'] = $(this).find("img").attr("src");
        item['url'] = $(this).find("img").attr("data-url");
        item['alt'] = $(this).find("img").attr("data-alt");
        item['delete'] = $(this).parent(".col-md-2").attr("data-delete");
        item['sort']  = ++i;
        items[i-1] = item;
    });
    let bannerInfo = {items};
    let formData = new FormData();
    formData.append('bannerInfo',JSON.stringify(bannerInfo));
    $.ajax({
        url:'/admin/index/banner',
        type:'POST',
        headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr('content')},
        dataType:'JSON',
        data:formData,
        processData: false,
        contentType: false,
        success:function(data,status) {
            let text = '总共：'+data.total +',成功：'+data.success+",失败："+data.fail;
            $("#saveBanner").find(".modal-body").find("p").text(text);
            $("#saveBanner").modal("toggle");
        },
        error:function(){}
    });
});

$("#add-banner").click(function(){
    $("#uploadImg").modal("toggle");
    $(".upload-banner").click(function(){
        $("#input-banner").click();
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
                            let bannerUrl = $("#banner-url").val();
                            let bannerAlt = $("#banner-alt").val();
                            let html = `<div class="col-md-2">
                                <div class="banner-image">
                                    <img src="${data.data[0]}"  alt="" data-url="${bannerUrl}" data-alt="${bannerAlt}">
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
    });
});


//配置网站选项
$(".site-options").blur(function(){
    let option = $(this).attr("data-param");
    let value = $(this).val().trim(); //获取值并且过滤空格
    $.ajax({
        url:"/admin/config",
        method:"POST",
        dataType:"JSON",
        data:{
            option: option,
            value : value
        },
        headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr('content')},
        success:function(data,status) {
            if (data.code != 200)
                alert("配置失败");
        },
        error:function(){}
    });
});