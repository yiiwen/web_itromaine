@extends('admin.layout')
@php $active = '/admin/news/index' @endphp
@section('title','广州油麦菜信息科技有限公司-新闻管理')
@section("content")
    <div class="container">
        <br>
        <a class="btn btn-success" style="margin-right:20px;display:block;float:left;color: #FFF !important;"
           href="/admin/article/create?type=news"><i class="glyphicon glyphicon-plus"></i> 发布新闻
        </a>
        @includeIf('admin.components.newMenu')
        <div style="clear:both;"></div>
        <br>
        <br>
        <div class="row">
            <form action="/admin/news/index" method="get">
                @includeIf('admin.components.searchForm')
            </form>
        </div>
        <br>
        <br>

        <table class="table table-bordered news-action-btn news-table">
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
            @foreach ($newsList as $news)
                <tr>
                    <td>{{$news->id}}</td>
                    <td>
                        <div class="news_title">{{$news->news_title}}</div>
                    </td>
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
    {{$newsList->links()}}

    <!-- 图片查看模态框start -->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="imageViewer"
             aria-labelledby="imageViewer">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content"></div>
            </div>
        </div>
        <!-- 图片查看模态框end -->
        <!-- 列表删除对话框start -->
        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" id="deleteModal"
             aria-labelledby="deleteModal">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        删除确认，可从回收站中恢复
                    </div>
                    <div class="modal-body">
                        <button type="button" style="margin-left:170px !important;"
                                class="btn btn-danger btn-sm delete-confirm">确认
                        </button>
                        <button type="button" class="btn btn-default btn-sm delete-cannel">取消</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- 列表删除对话框end -->
    </div>
@endsection

@section('script')
    <script type="text/javascript">

        $("#candidate-image").on("click", "img", function () {
            let html = `<img src='${this.src}' style='width:100%'/>`
            $("#imageViewer").find(".modal-content").empty()
            $("#imageViewer").find(".modal-content").append(html)
            $("#imageViewer").modal('toggle')
        })

        $(document).ready(function () {
            $("#addNew").click(function () {
                //清空所有控件
                $("#news-title").val('')
                $("#news-abstract-input").val('')
                editor.txt.html('')
                firstImg = ''
                $("#candidate-image").empty()
                $("#first-image").attr("src", '/admin/images/pic.png')
                $("#shortUrl").val('')
            })

            //发布新闻
            $("#publish").click(function () {
                var data = send()
                $.ajax({
                    url: '/admin/news/publish',
                    data: data,
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
                    },
                    processData: false,
                    contentType: false,
                    method: 'POST',
                    dataType: 'JSON',
                    success: function (data, status) {
                        $("#close").click()
                    },
                    error: function (data) {
                    }
                })
            })
            //保存至草稿箱
            $("#save").click(function () {
                var data = send()
                $.ajax({
                    url: '/admin/news/drafts',
                    data: data,
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
                    },
                    processData: false,
                    contentType: false,
                    method: 'POST',
                    dataType: 'JSON',
                    success: function (data, status) {
                        $("#close").click()
                    },
                    error: function (data) {
                    }
                })
            })

            $("#close").click(function () {
                //清空所有控件
                $("#news-title").val('')
                $("#news-abstract-input").val('')
                editor.txt.html('')
                firstImg = ''
                $("#candidate-image").empty()
                $("#first-image").attr("src", '/admin/images/pic.png')
                $("#publishNew").modal('hide')
            })

            $(".edit").click(function () {
                let newsId = $(this).attr("data-id")
                $.ajax({
                    url: "/admin/news/getOne",
                    dataType: 'JSON',
                    method: 'GET',
                    data: {
                        id: newsId
                    },
                    success: function (data, status) {
                        $("#news-title").val(data.news_title)
                        $("#news-id").val(data.id)
                        $("#news-abstract-input").val(data.abstract)
                        editor.txt.html(data.news_content)
                        let reg = /<img[A-Za-z0-9\*\s"'=]*src="[\S]+"/g
                        let srcReg = /src="[\S]+"/g;
                        let matchResult = data.news_content.match(reg)
                        $("#candidate-image").empty()
                        if (matchResult != null) {
                            for (let i = 0; i < matchResult.length; i++) {
                                let src = matchResult[i].match(srcReg)
                                let img = src[0].substring(5, src[0].length - 1)
                                let image = `<div class="outer"><img src="${img}" class="img-thumbnail"></div>`
                                $("#candidate-image").append(image)
                            }
                        }
                        $("#first-image").attr("src", data.first_image)
                        firstImg = data.first_image
                        $("#publishNew").modal('show')
                        $("#shortUrl").val(data.short_url)
                        $("input[name='article-sort']").each(function () {
                            if ($(this).val() == data.sort) {
                                $(this).prop("checked", true)
                            }
                        })
                    },
                    error: function () {
                    }
                })
            })

            $(".delete").click(function () {
                $("#deleteModal").modal('toggle')
                let newsId = $(this).attr("data-id")
                $(".delete-confirm").click(function () {
                    $.ajax({
                        url: "/admin/news/delete",
                        dataType: 'JSON',
                        method: 'GET',
                        data: {
                            id: newsId
                        },
                        success: function (data, status) {
                            window.location.reload()
                        },
                        error: function () {
                        }
                    })
                })
                $(".delete-cannel").click(function () {
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
        })
    </script>
@endsection 
