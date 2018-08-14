<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="WEIKI 网络科技 WEIKI网络科技 网站建设">
    <meta name="keyword" content="WEIKI 网络科技 WEIKI网络科技 网站建设">
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/bravana144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ico/bravana114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ico/bravana72.png">
    <link rel="apple-touch-icon-precomposed" href="/ico/bravana57.png">
    <link rel="shortcut icon" href="/ico/favicon.ico">
    <link rel="stylesheet" href="/admin/css/backend.css">
    <title>广州油麦菜信息科技有限公司-CMS</title>
  </head>
  <body class="login-page">
    <div class="container">
      <img src="/admin/images/logo.png" class="logo">
      <div class="row">
        <div class="login-form col-md-4 col-md-offset-4">
          <form action="/handle.php" id="login-form" method="post" class="form-horizontal">
            <div class="form-group"><div class="col-sm-10 col-sm-offset-1">
              <input id="username" type="text" placeholder="用户名" class="form-control">
            </div>
          </div>
          <div class="form-group">
              <div class="col-sm-10 col-sm-offset-1">
                <input id="password" type="password" placeholder="密码" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-10 col-sm-offset-1">
                <button type="submit" class="btn btn-success login-btn">登陆</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div id="login-form-alert" tabindex="-1" role="dialog" class="modal fade">
      <div role="document" class="modal-dialog modal-sm">
        <div class="modal-content">
          <div style="background:#ff7171;color:#FFF;border-top-left-radius:4px;border-top-right-radius:4px" 
          class="modal-header">
            <button type="button" data-dismiss="modal" aria-label="Close" class="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title">请填写正确的用户信息</h4>
          </div>
          <div class="modal-body">
            <p id="alert-content"></p>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="/js/jquery-2.1.4.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/admin/js/app.js"></script>
</html>
