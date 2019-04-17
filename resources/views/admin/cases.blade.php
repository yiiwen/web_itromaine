@extends("admin.layout")
@php $active = '/admin/cases/index' @endphp

@section("title","广州油麦菜信息科技有限公司-CMS")

@section("content")
<div class="container">
    <br>
    <a class="btn btn-success" style="margin-right:20px;display:block;float:left;color: #FFF !important;"
        href="/admin/article/create?type=case&ref={{urlencode(env('APP_URL') . '/admin/cases/index')}}"><i class="glyphicon glyphicon-plus"></i> 发布案例
    </a>
    @includeIf('admin.components.casesMenu')
    <div style="clear:both;"></div>
    <br>
    <br>
    <div class="row">
        <form action="/admin/cases/index" method="get">
            @include('admin.components.caseSearchForm')
        </form>
    </div>
    <br>
    <br>

    <table class="table news-table">
        <thead>
            <tr>
                <th style="width:55px;">#</th>
                <th style="width:420px;">新闻标题</th>
                <th>短链</th>
                <th>更新时间</th>
                <th>发布时间</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $news)
            <tr>
                <td>{{$news->id}}</td>
                <td>{{$news->cases_title}}</td>
                <td><a href="{{$news->short_url}}" target="_blank">{{$news->short_url}}</a></td>
                <td>{{$news->updated_at}}</td>
                <td>{{$news->created_at}}</td>
                <td>
                    <button class="btn btn-warning edit" data-id="{{$news->id}}">编辑</button>
                    <button class="btn btn-danger delete" data-id="{{$news->id}}">删除</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$list->links()}}

    <!-- 列表删除对话框start -->
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" id="deleteModal" aria-labelledby="deleteModal">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    删除确认，可从回收站中恢复
                </div>
                <div class="modal-body">
                    <button type="button" style="margin-left:170px !important;" class="btn btn-danger btn-sm delete-confirm">确认</button>
                    <button type="button" class="btn btn-default btn-sm delete-cannel">取消</button>
                </div>
            </div>
        </div>
    </div>
    <!-- 列表删除对话框end -->
</div>
@endsection

@section("script")
<script src="/admin/js/wangEditor.min.js"></script>
<script type="text/javascript">
    // 内容框
    var E = window.wangEditor
    var editor = new E('#contBox')
    let firstImg = ''
    const candidateImage = new Array()
    editor.customConfig.uploadImgServer = '/admin/upload'
    editor.customConfig.uploadFileName = 'photo'
    editor.customConfig.uploadImgHeaders = {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    editor.customConfig.uploadImgHooks = {
        success: function(xhr, editor, result) {
            image = result.data[0]
            candidateImage.push(image)
            image = `<div class="outer"><img src="${image}" class="img-thumbnail"></div>`
            $("#candidate-image").append(image)
        },
        fail: function(xhr, editor, result) {},
    }
    editor.create()

    $("#candidate-image").on("click", "img", function() {
        let html = `<img src='${this.src}' style='width:100%'/>`
        $("#imageViewer").find(".modal-content").empty()
        $("#imageViewer").find(".modal-content").append(html)
        $("#imageViewer").modal('toggle')
    })

    $("#candidate-image").on("mouseenter", ".outer", function() {
        let html = `<div class="set-first-btn"><button class="btn btn-success btn-xs set-first">设为封面</button></div>`
        $(this).append(html)
    })

    $("#candidate-image").on("mouseleave", ".outer", function() {
        $(this).find(".set-first-btn").remove()
    })


    $("#candidate-image").on("click", ".set-first", function() {
        let firstImageSrc = $(this).parents(".outer").find("img").attr("src")
        firstImg = firstImageSrc
        $("#first-image").attr("src", firstImageSrc)
    })

    $("#first-image-input").change(function(e) {
        var file = e.target.files[0] || e.dataTransfer.files[0]
        if (file) {
            var reader = new FileReader()
            reader.onload = function() {
                $("#first-image").attr("src", this.result)
            }
            reader.readAsDataURL(file)
            let formData = new FormData()
            formData.append("photo", file)
            $.ajax({
                url: "/admin/upload",
                type: "post",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
                },
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'JSON',
                mimeType: "multipart/form-data",
                success: function(data) {
                    firstImg = data.data[0]
                },
                error: function(data) {}
            })
        }
    })

    // 获取数据
    function send() {
        const submitData = new FormData()
        let id = $("#cases-id").val().trim() // id
        // 标题
        let cases_title = $("#cases-title")
        let title = cases_title.val().trim()
        let content = editor.txt.html().trim() // 内容

        if (title.length <= 0) {
            cases_title.focus()
            cases_title.tooltip('show')
            return false
        }
        if (content.length <= 0) {
            return false
        }
        if (!firstImg) {
            alert("未设置文章封面！！！")
            return false
        }
        $("input[name='article-sort']").each(function() {
            if ($(this).prop('checked')) submitData.append('sort', $(this).val())
        })
        submitData.append('id', id)
        submitData.append('title', title)
        submitData.append('content', content)
        submitData.append('first_image', firstImg)
        console.log(firstImg)
        return submitData
    }

    //发布案例
    $("#publish").click(function() {
        var data = send()
        $.ajax({
            url: '/admin/cases/publish',
            data: data,
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
            },
            processData: false,
            contentType: false,
            method: 'POST',
            dataType: 'JSON',
            success: function(data, status) {
                $("#close").click()
            },
            error: function(data) {}
        })
    })

    $(".edit").click(function() {
        let caseId = $(this).attr("data-id")
        $.ajax({
            url: "/admin/cases/getOne",
            dataType: 'JSON',
            method: 'GET',
            data: {
                id: caseId
            },
            success: function(data, status) {
                $("#cases-title").val(data.cases_title)
                $("#cases-id").val(data.id)
                editor.txt.html(data.cases_content)
                let reg = /<img[A-Za-z0-9\*\s"'=]*src="[\S]+"/g
                let srcReg = /src="[\S]+"/g;
                let matchResult = data.cases_content.match(reg)
                $("#candidate-image").empty()
                if (matchResult != null) {
                    for (let i=0; i<matchResult.length; i++) {
                        let src = matchResult[i].match(srcReg)
                        let img = src[0].substring(5,src[0].length-1)
                        let image = `<div class="outer"><img src="${img}" class="img-thumbnail"></div>`
                        $("#candidate-image").append(image)
                    }
                }
                $("#first-image").attr("src", data.first_image)
                firstImg = data.first_image
                $("#publishCase").modal('show')
                $("#shortUrl").val(data.short_url)
                $("input[name='article-sort']").each(function() {
                    if ($(this).val() == data.sort) {
                        $(this).prop("checked", true)
                    }
                })
            },
            error: function() {}
        })
    })

    //保存至草稿箱
    $("#save").click(function() {
        var data = send()
        $.ajax({
            url: '/admin/cases/drafts',
            data: data,
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
            },
            processData: false,
            contentType: false,
            method: 'POST',
            dataType: 'JSON',
            success: function(data, status) {
                $("#close").click()
            },
            error: function(data) {}
        })
    })

    $(".delete").click(function() {
        $("#deleteModal").modal('toggle')
        let caseId = $(this).attr("data-id")
        $(".delete-confirm").click(function() {
            $.ajax({
                url: "/admin/cases/delete",
                dataType: 'JSON',
                method: 'GET',
                data: {
                    id: caseId
                },
                success: function(data, status) {
                    window.location.reload()
                },
                error: function() {}
            })
        })
        $(".delete-cannel").click(function() {
            $("#deleteModal").modal("hide")
        })
    })
    
    //时间空间初始化
    var now = new Date()
    var datetime = now.getFullYear() + "-" + now.getMonth() + "-" + now.getDate() + " " + now.getHours() +
        ":" + now.getMinutes() + ":" + now.getSeconds()
    $("#starttime").datetimepicker({
        language: 'zh-CN'
    })
    $("#endtime").datetimepicker({
        language: 'zh-CN'
    })
</script>
@endsection("script") 