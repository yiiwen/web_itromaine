<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="WEIKI 网络科技 WEIKI网络科技 网站建设">
    <meta name="keyword" content="WEIKI 网络科技 WEIKI网络科技 网站建设">
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/admin/css/backend.css">
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
        <p><button type="button" class="btn btn-success">添加新闻</button></p>
        
        <div class="row">
            <div class="col-xs-3">
                <input type="text" class="form-control" placeholder="新闻标题">
            </div>
        </div>
        <br>

        <table class="table table-bordered news-action-btn">
            <tr>
                <th>#</th>
                <th>新闻标题</th>
                <th>更新时间</th>
                <th>发布时间</th>
                <th>操作</th>
            </tr>
            <tr>
                <td>1</td>
                <td>这是新闻标题</td>
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
                <td>2018-08-09 12:23:90</td>
                <td>2018-08-09 12:23:90</td>
                <td>
                    <a class="btn btn-warning" href="#" role="button">编辑</a>
                    <a class="btn btn-danger" href="#" role="button">删除</a>
                </td>
            </tr>
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
    </div>

  </body>
  <script src="/admin/js/jquery-2.1.4.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/js/app.js"></script>
</html>
