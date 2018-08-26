<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="WEIKI 网络科技 WEIKI网络科技 网站建设">
    <meta name="keyword" content="WEIKI 网络科技 WEIKI网络科技 网站建设">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/admin/css/backend.css">
    <link rel="stylesheet" href="/admin/css/bootstrap-datetimepicker.min.css">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/bravana144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ico/bravana114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ico/bravana72.png">
    <link rel="apple-touch-icon-precomposed" href="/ico/bravana57.png">
    <link rel="shortcut icon" href="/ico/favicon.ico">
    <title>广州油麦菜信息科技有限公司-CMS</title>
  </head>
  <body class="backend">
    <header id="header">
        <nav class="navbar navbar-default" id="top-nav">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">itRomaine</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#">网站概况 <span class="sr-only">(current)</span></a></li>
                    <li class="active"><a href="#">新闻管理</a></li>
                    <li><a href="#">案例管理</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">权限管理 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">常用功能 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left" style="margin-left:130px;">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                    </li>
                </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
            </nav>
    </header>

    <div class="container">
        <br>
            <div class="btn-group" role="group" style="float:left;">
                <a href="/admin/news/index" style="color:#FFF !important;" class="btn btn-info"><i class="glyphicon glyphicon-th-list"></i> 新闻列表</a>
                <a href="/admin/news/draftsList" style="color:#FFF !important;" class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i> 草稿箱</a>
                <a style="color:#FFF !important;" class="btn btn-info"><i class="glyphicon glyphicon-trash"></i> 回收站</a>
            </div>

            <button type="button" class="btn btn-danger" id="clear" style="margin-left:20px;display:block;float:left;">
            <i class="glyphicon glyphicon-flash"></i> 清空回收站</button>
            <div style="clear:both;"></div>
        <br>
        <br>
        <div class="row">
            <form action="/admin/news/index" method="get">
                <div class="col-xs-3">
                    <label for="">新闻标题</label>
                    <input type="text" name="news_title" value="{{$keywords['news_title']}}" class="form-control" placeholder="新闻标题">
                </div>
                <div class="col-xs-3">
                    <label for="">开始时间</label>
                    <input type="text" name="start_time" value="{{$keywords['start_time']}}" class="form-control" placeholder="开始时间"  id="starttime">
                </div>
                <div class="col-xs-3">
                    <label for="">结束时间</label>
                    <input type="text" name="end_time" value="{{$keywords['end_time']}}" class="form-control" placeholder="结束时间"  id="endtime">
                </div>
                <div class="col-xs-2">
                        <button type="submit" style="margin-top:25px;" class="btn btn-success">搜索</button>
                </div>
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
                    <td>{{$news->news_title}}</td>
                    <td><a href="{{$news->short_url}}" target="_blank">{{$news->short_url}}</a></td>
                    <td>{{$news->updated_at}}</td>
                    <td>{{$news->created_at}}</td>
                    <td>
                        <button class="btn btn-danger recovery" data-id="{{$news->id}}">恢复</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$newsList->links()}}
    </div>
    <!-- 列表删除对话框start -->
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" id="recoveryModal" aria-labelledby="deleteModal">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    内容恢复！
                </div>
                <div class="modal-body">
                    <button type="button" style="margin-left:170px !important;" class="btn btn-danger btn-sm recovery-confirm">确认</button>
                    <button type="button" class="btn btn-default btn-sm recovery-cannel">取消</button>
                </div>
            </div>
        </div>
    </div>
    <!-- 列表删除对话框end -->
    <!-- 清空回收站start -->
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" id="clearModal" aria-labelledby="clearModal">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    清空回收站！
                </div>
                <div class="modal-body">
                    <button type="button" style="margin-left:170px !important;" class="btn btn-danger btn-sm clear-confirm">确认</button>
                    <button type="button" class="btn btn-default btn-sm clear-cannel">取消</button>
                </div>
            </div>
        </div>
    </div>
    <!-- 清空回收站end -->
  </body>
  <script src="/admin/js/jquery-2.1.4.min.js"></script>
  <script src="/admin/js/wangEditor.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/admin/js/bootstrap-datetimepicker.js"></script>
  <script src="/admin/js/bootstrap-datetimepicker.zh-CN.js"></script>
  <!-- <script type="text/javascript" src="/js/app.js"></script> -->
  <script type="text/javascript">
    $(document).ready(function(){
        $(".recovery").click(function(){
            $("#recoveryModal").modal('toggle');
            let newsId = $(this).attr("data-id");
            $(".recovery-confirm").click(function(){
                $.ajax({
                    url: "/admin/news/recovery",
                    dataType:'JSON',
                    method:'GET',
                    data:{
                        id:newsId
                    },
                    success:function(data,status){
                        window.location.reload();
                    },
                    error:function(){}
                });
            });
            $(".recovery-cannel").click(function(){
                $("#recoveryModal").modal("hide");
            });
        });

        $("#clear").click(function(){
            $("#clearModal").modal('show');
            let newsId = $(this).attr("data-id");
            $(".clear-confirm").click(function(){
                $.ajax({
                    url: "/admin/news/clear",
                    dataType:'JSON',
                    method:'GET',
                    data:{
                        id:newsId
                    },
                    success:function(data,status){
                        window.location.reload();
                    },
                    error:function(){}
                });
            });
            $(".clear-cannel").click(function(){
                $("#clearModal").modal("hide");
            });
        });
    })
  </script>
</html>
