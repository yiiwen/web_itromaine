@extends('admin.layout')
@php $active = '/admin/cases/trash' @endphp
@section('title','广州油麦菜信息科技有限公司-CMS')
    @section('content')
    <div class="container">
        <br>
            @includeIf('admin.components.casesMenu')
            <button type="button" class="btn btn-danger" id="clear" style="margin-left:20px;display:block;float:left;">
            <i class="glyphicon glyphicon-flash"></i> 清空回收站</button>
            <div style="clear:both;"></div>
        <br>
        <br>
        <div class="row">
            <form action="/admin/cases/trash" method="get">
                @include('admin.components.caseSearchForm')
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
                @foreach ($casesList as $case)
                <tr>
                    <td>{{$case->id}}</td>
                    <td>{{$case->cases_title}}</td>
                    <td><a href="{{$case->short_url}}" target="_blank">{{$case->short_url}}</a></td>
                    <td>{{$case->updated_at}}</td>
                    <td>{{$case->created_at}}</td>
                    <td>
                        <button class="btn btn-success recovery" data-id="{{$case->id}}">恢复</button>
                        <button class="btn btn-danger delete" data-id="{{$case->id}}">删除</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$casesList->links()}}
    </div>
    <!-- 列表恢复对话框start -->
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" id="recoveryModal" aria-labelledby="recoveryModal">
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
    <!-- 列表恢复对话框end -->
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
    <!-- 彻底清除item start -->
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" id="deleteModal" aria-labelledby="deleteModal">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    确定删除？
                </div>
                <div class="modal-body">
                    <button type="button" style="margin-left:170px !important;" class="btn btn-danger btn-sm delete-confirm">确认</button>
                    <button type="button" class="btn btn-default btn-sm delete-cannel">取消</button>
                </div>
            </div>
        </div>
    </div>
    @endsection

  @section('script')
  <script type="text/javascript">
      //时间空间初始化
      var now = new Date();
      var datetime = now.getFullYear() + "-" + now.getMonth() + "-" + now.getDate() + " "+now.getHours()
      +":"+now.getMinutes() +":"+now.getSeconds();
      $("#starttime").datetimepicker({
          language:  'zh-CN'
      });
      $("#endtime").datetimepicker({
          language:  'zh-CN'
      });
    $(document).ready(function(){
        $(".recovery").click(function(){
            $("#recoveryModal").modal('toggle');
            let casesId = $(this).attr("data-id");
            $(".recovery-confirm").click(function(){
                $.ajax({
                    url: "/admin/cases/recovery",
                    dataType:'JSON',
                    method:'GET',
                    data:{
                        id:casesId
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

        $(".delete").click(function(){
            $("#deleteModal").modal('toggle');
            let casesId = $(this).attr("data-id");
            $(".delete-confirm").click(function(){
                $.ajax({
                    url: "/admin/cases/dropItem",
                    dataType:'JSON',
                    method:'GET',
                    data:{
                        id:casesId
                    },
                    success:function(data,status){
                        window.location.reload();
                    },
                    error:function(){}
                });
            });
            $(".delete-cannel").click(function(){
                $("#deleteModal").modal("hide");
            });
        });

        $("#clear").click(function(){
            $("#clearModal").modal('show');
            $(".clear-confirm").click(function(){
                $.ajax({
                    url: "/admin/cases/clear",
                    dataType:'JSON',
                    method:'GET',
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
  @endsection
