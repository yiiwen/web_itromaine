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
                <form class="navbar-form navbar-left" style="margin-left:200px;">
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
        <p><button type="button" class="btn btn-success" data-toggle="modal"
         data-target="#publishNew">添加新闻</button></p>
        
        <div class="row">
            <div class="col-xs-3">
                <label for="">新闻标题</label>
                <input type="text" class="form-control" placeholder="新闻标题">
            </div>
            <div class="col-xs-3">
                <label for="">开始时间</label>
                <input type="text" class="form-control" placeholder="开始时间" 
                value="2012-05-15 21:05" id="starttime">
            </div>
            <div class="col-xs-3">
                <label for="">结束时间</label>
                <input type="text" class="form-control" placeholder="开始时间" 
                value="2012-05-15 21:05" id="endtime">
            </div>
            <div class="col-xs-2">
                    <button type="button" style="margin-top:25px;" class="btn btn-success">搜索</button>
            </div>
        </div>
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
                <tr>
                    <td>1</td>
                    <td>这是新闻标题</td>
                    <td><a href="javascript:">http://itromaine.com/Xh32HnLm</a></td>
                    <td>2018-08-09 12:23:90</td>
                    <td>2018-08-09 12:23:90</td>
                    <td>
                        <a class="btn btn-warning" href="#" role="button">编辑</a>
                        <a class="btn btn-danger" href="#" role="button">删除</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>这是新闻标题</td>
                    <td><a href="javascript:">http://itromaine.com/Xh32HnLm</a></td>
                    <td>2018-08-09 12:23:90</td>
                    <td>2018-08-09 12:23:90</td>
                    <td>
                        <a class="btn btn-warning" href="#" role="button">编辑</a>
                        <a class="btn btn-danger" href="#" role="button">删除</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>这是新闻标题</td>
                    <td><a href="javascript:">http://itromaine.com/Xh32HnLm</a></td>
                    <td>2018-08-09 12:23:90</td>
                    <td>2018-08-09 12:23:90</td>
                    <td>
                        <a class="btn btn-warning" href="#" role="button">编辑</a>
                        <a class="btn btn-danger" href="#" role="button">删除</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>这是新闻标题</td>
                    <td><a href="javascript:">http://itromaine.com/Xh32HnLm</a></td>
                    <td>2018-08-09 12:23:90</td>
                    <td>2018-08-09 12:23:90</td>
                    <td>
                        <a class="btn btn-warning" href="#" role="button">编辑</a>
                        <a class="btn btn-danger" href="#" role="button">删除</a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>这是新闻标题</td>
                    <td><a href="javascript:">http://itromaine.com/Xh32HnLm</a></td>
                    <td>2018-08-09 12:23:90</td>
                    <td>2018-08-09 12:23:90</td>
                    <td>
                        <a class="btn btn-warning" href="#" role="button">编辑</a>
                        <a class="btn btn-danger" href="#" role="button">删除</a>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>这是新闻标题</td>
                    <td><a href="javascript:">http://itromaine.com/Xh32HnLm</a></td>
                    <td>2018-08-09 12:23:90</td>
                    <td>2018-08-09 12:23:90</td>
                    <td>
                        <a class="btn btn-warning" href="#" role="button">编辑</a>
                        <a class="btn btn-danger" href="#" role="button">删除</a>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>这是新闻标题</td>
                    <td><a href="javascript:">http://itromaine.com/Xh32HnLm</a></td>
                    <td>2018-08-09 12:23:90</td>
                    <td>2018-08-09 12:23:90</td>
                    <td>
                        <a class="btn btn-warning" href="#" role="button">编辑</a>
                        <a class="btn btn-danger" href="#" role="button">删除</a>
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>这是新闻标题</td>
                    <td><a href="javascript:">http://itromaine.com/Xh32HnLm</a></td>
                    <td>2018-08-09 12:23:90</td>
                    <td>2018-08-09 12:23:90</td>
                    <td>
                        <a class="btn btn-warning" href="#" role="button">编辑</a>
                        <a class="btn btn-danger" href="#" role="button">删除</a>
                    </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>这是新闻标题</td>
                    <td><a href="javascript:">http://itromaine.com/Xh32HnLm</a></td>
                    <td>2018-08-09 12:23:90</td>
                    <td>2018-08-09 12:23:90</td>
                    <td>
                        <a class="btn btn-warning" href="#" role="button">编辑</a>
                        <a class="btn btn-danger" href="#" role="button">删除</a>
                    </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>这是新闻标题</td>
                    <td><a href="javascript:">http://itromaine.com/Xh32HnLm</a></td>
                    <td>2018-08-09 12:23:90</td>
                    <td>2018-08-09 12:23:90</td>
                    <td>
                        <a class="btn btn-warning" href="#" role="button">编辑</a>
                        <a class="btn btn-danger" href="#" role="button">删除</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
                </li>
            </ul>
        </nav>

        <!-- Modal -->
        <div class="modal fade" id="publishNew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">发布文章</h4>
                </div>
                <div class="modal-body">
                    <div id="new-title" class="form-group">
                        <label for="new-title">文章标题</label>
                        <input type="text" id="new-title" class="form-control">
                    </div>
                    <div id="new-content" class="from-group">
                        <label for="new-content">文章内容</label>
                        <div id="new-edit"></div>
                    </div>
                    <br>
                    <div class="from-group">
                        <label>文章封面</label>
                        <div class="article-image">
                            <div class="first-image">
                                <img src="/admin/images/pic.png" alt="..." class="img-thumbnail">
                                <div id="uploadFirstImgBtn">
                                    <button>上传图片</button>
                                </div>
                            </div>
                            <div style="border:1px solid #CCC;border-radius:4px;width:560px;margin-left:210px;padding:10px;">
                                <label for="">从文章中选取</label>
                                <div>
                                    <div class="candidate-image-div">
                                        <div class="candidate-image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                        </div>
                    </div>
                    <br>
                    <div id="new-title" class="form-group">
                        <label for="new-title">推广短链 （系统自动生成）</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="sort url" disabled aria-describedby="basic-addon2">
                            <span class="input-group-addon" id="basic-addon2">复制</span>
                        </div>
                    </div>
                    <div id="new-sort" class="form-group">
                        <label for="new-content">文章排序</label>
                        <div style="clear:both;"></div>
                        <div class="checkbox">
                            <label>
                                <input type="radio" name="article-sort"> 自然排序
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="radio" name="article-sort"> 始终第一
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="radio" name="article-sort"> 始终最后
                            </label>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="close">取消</button>
                    <button type="button" class="btn btn-primary" id="save">保存至草稿箱</button>
                    <button type="button" class="btn btn-success" id="publish">发布</button>
                </div>
                </div>
            </div>
        </div>

    </div>

  </body>
  <script src="/admin/js/jquery-2.1.4.min.js"></script>
  <script src="/admin/js/wangEditor.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/admin/js/bootstrap-datetimepicker.js"></script>
  <script src="/admin/js/bootstrap-datetimepicker.zh-CN.js"></script>
  <!-- <script type="text/javascript" src="/js/app.js"></script> -->
  <script type="text/javascript">
    var E = window.wangEditor
    var editor = new E('#new-edit');
    editor.customConfig.uploadImgServer = '/admin/upload';
    editor.customConfig.uploadFileName  = 'photo';
    editor.customConfig.uploadImgHeaders  ={
        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
    };
    editor.customConfig.uploadImgHooks = {
        success: function (xhr, editor, result) {
            
        },
        fail: function (xhr, editor, result) {
        },
    } 
    editor.create();

    $(document).ready(function(){
        $("publish").click(function(){

        });

        $("#save").click(function(){
            
        });

        $("#close").click(function(){

        });
        

        var now = new Date();
        
        var datetime = now.getFullYear() + "-" + now.getMonth() + "-" + now.getDate() + " "+now.getHours()
        +":"+now.getMinutes() +":"+now.getSeconds();
        $("#starttime").val(datetime);
        $("#endtime").val(datetime);
        $("#starttime").datetimepicker({
            language:  'zh-CN'
        });
        $("#endtime").datetimepicker({
            language:  'zh-CN'
        });
        
    })

    

  </script>
</html>
