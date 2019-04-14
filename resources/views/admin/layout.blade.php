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
    <title>@yield('title')</title>
  </head>
  <body class="backend">
    @include('admin.header')

    @yield('content')

  </body>
  <script src="/admin/js/jquery-2.1.4.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/admin/js/bootstrap-datetimepicker.js"></script>
  <script src="/admin/js/bootstrap-datetimepicker.zh-CN.js" charset="utf-8"></script>
  @yield('script')
</html>
