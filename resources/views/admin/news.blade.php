@extends('admin.layout')
    @section('title','广州油麦菜信息科技有限公司-新闻管理')
    @section("content")
    <div class="container">
        <br>
            <button type="button" class="btn btn-success" id="addNew" style="margin-right:20px;display:block;float:left;" data-toggle="modal" data-target="#publishNew">
            <i class="glyphicon glyphicon-plus"></i> 添加新闻</button>
            <div class="btn-group" role="group" style="float:left;">
                <a href="/admin/news/index" style="color:#FFF !important;" class="btn btn-primary"><i class="glyphicon glyphicon-th-list"></i> 新闻列表</a>
                <a href="/admin/news/draftsList" style="color:#FFF !important;" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> 草稿箱</a>
                <a href="/admin/news/trash" style="color:#FFF !important;" class="btn btn-primary"><i class="glyphicon glyphicon-trash"></i> 回收站</a>
            </div>
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
                        <button class="btn btn-warning edit" data-id="{{$news->id}}">编辑</button>
                        <button class="btn btn-danger delete" data-id="{{$news->id}}">删除</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$newsList->links()}}

        <!-- 添加Modal start -->
        <div class="modal fade" id="publishNew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">发布文章</h4>
                </div>
                <div class="modal-body">
                    <div id="new-id" class="form-group">
                        <input type="hidden" id="news-id">
                    </div>
                    <div id="new-title" class="form-group">
                        <label for="new-title">文章标题</label>
                        <input type="text" id="news-title" data-toggle="tooltip" title="请输入文章标题" class="form-control">
                    </div>
                    <div id="news-content" class="from-group">
                        <label for="news-content">文章内容</label>
                        <div id="new-edit" data-toggle="tooltip" title="请输入文章内容"></div>
                    </div>
                    <br>
                    <div class="from-group">
                        <label>文章封面</label>
                        <div class="article-image">
                            <div class="first-image">
                                <input type="file" style="display:none;" id="first-image-input" name="first-image" />
                                <img src="/admin/images/pic.png" id="first-image" alt="..." class="img-thumbnail" />
                                <div id="uploadFirstImgBtn">
                                    <button onclick="document.getElementById('first-image-input').click()">上传图片</button>
                                </div>
                            </div>
                            <div style="border:1px solid #CCC;border-radius:4px;width:560px;margin-left:210px;padding:10px;">
                                <label for="">从文章中选取</label>
                                <div>
                                    <div class="candidate-image-div">
                                        <div class="candidate-image" id="candidate-image">
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
                            <input type="text" class="form-control" placeholder="推广短链" id="shortUrl" disabled
                            aria-describedby="basic-addon2">
                            <span class="input-group-addon" id="basic-addon2">复制</span>
                        </div>
                    </div>
                    <div id="new-sort" class="form-group">
                        <label for="news-content">文章排序</label>
                        <div style="clear:both;"></div>
                        <div class="checkbox">
                            <label>
                                <input type="radio" value="1" name="article-sort" checked> 自然排序
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="radio" value="2" name="article-sort"> 始终第一
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="radio" value="3" name="article-sort"> 始终最后
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="radio" value="4" name="article-sort"> 置顶
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
        <!-- 添加Modal end -->

        <!-- 图片查看模态框start -->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="imageViewer" aria-labelledby="imageViewer">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content"></div>
            </div>
        </div>
        <!-- 图片查看模态框end -->
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

    @section('script')
        <script src="/admin/js/wangEditor.min.js"></script>
        <script type="text/javascript">
          var E = window.wangEditor
          var editor = new E('#new-edit');
          let firstImg =  '';
          const candidateImage = new Array();
          editor.customConfig.uploadImgServer = '/admin/upload';
          editor.customConfig.uploadFileName  = 'photo';
          editor.customConfig.uploadImgHeaders  ={
              'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
          };
          editor.customConfig.uploadImgHooks = {
              success: function (xhr, editor, result) {
                  image = result.data[0];
                  candidateImage.push(image);
                  image = `<div class="outer"><img src="${image}" class="img-thumbnail"></div>`;
                  $("#candidate-image").append(image);
              },
              fail: function (xhr, editor, result) {
              },
          }
          editor.create();

          $("#candidate-image").on("click","img",function(){
              let html = `<img src='${this.src}' style='width:100%;'/>`;
              $("#imageViewer").find(".modal-content").empty();
              $("#imageViewer").find(".modal-content").append(html);
              $("#imageViewer").modal('toggle');
          });

          $("#candidate-image").on("mouseenter",".outer",function(){
              let html = `<div class="set-first-btn"><button class="btn btn-success btn-xs set-first">设为封面</button></div>`;
              $(this).append(html);
          });

          $("#candidate-image").on("mouseleave",".outer",function(){
              $(this).find(".set-first-btn").remove();
          });


          $("#candidate-image").on("click", ".set-first", function(){
              let firstImageSrc = $(this).parents(".outer").find("img").attr("src");
              firstImg = firstImageSrc;
              $("#first-image").attr("src",firstImageSrc);
          });

          $("#first-image-input").change(function(e){
              var file = e.target.files[0] || e.dataTransfer.files[0];
              if (file) {
                  var reader = new FileReader();
                  reader.onload = function(){
                      $("#first-image").attr("src",this.result);
                  }
                  reader.readAsDataURL(file);
                  let formData = new FormData();
                  formData.append("photo",file);
                  $.ajax({
                      url : "/admin/upload",
                      type: "post",
                      headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr('content')},
                      data: formData,
                      processData: false,
                      contentType: false,
                      dataType: 'JSON',
                      mimeType: "multipart/form-data",
                      success: function(data) {
                          firstImg = data.data[0];
                      },
                      error:function(data) {
                      }
                  });
              }
          });

          function send()
          {
              const submitData = new FormData();
              let newsTitle = $("#news-title").val().trim();
              let newsContent = editor.txt.html().trim();
              let newsId = $("#news-id").val().trim();
              if (newsTitle.length <= 0) {
                  $("#news-title").focus();
                  $("#news-title").tooltip('show');
                  return false;
              }
              if (newsContent.length <=0) {
                  return false;
              }
              if (!firstImg) {
                  alert("未设置文章封面！！！");
                  return false;
              }
              $("input[name='article-sort']").each(function(){
                  if ($(this).prop('checked')) submitData.append('sort',$(this).val());
              });
              submitData.append('news_id',newsId);
              submitData.append('news_title',newsTitle);
              submitData.append('news_content',newsContent);
              submitData.append('first_image',firstImg);
              return submitData;
          }

          $(document).ready(function(){
              $("#addNew").click(function(){
                  //清空所有控件
                  $("#news-title").val('');
                  editor.txt.html('');
                  firstImg = '';
                  $("#candidate-image").empty();
                  $("#first-image").attr("src",'/admin/images/pic.png');
                  $("#shortUrl").val('');
              });

              //发布新闻
              $("#publish").click(function(){
                  var data = send();
                  $.ajax({
                      url : '/admin/news/publish',
                      data: data,
                      headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr('content')},
                      processData: false,
                      contentType: false,
                      method: 'POST',
                      dataType: 'JSON',
                      success:function(data,status) {
                          $("#close").click();
                      },
                      error: function(data) {}
                  })
              });
              //保存至草稿箱
              $("#save").click(function(){
                  var data = send();
                  $.ajax({
                      url : '/admin/news/drafts',
                      data: data,
                      headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr('content')},
                      processData: false,
                      contentType: false,
                      method: 'POST',
                      dataType: 'JSON',
                      success:function(data,status) {
                          $("#close").click();
                      },
                      error: function(data) {}
                  })
              });

              $("#close").click(function(){
                  //清空所有控件
                  $("#news-title").val('');
                  editor.txt.html('');
                  firstImg = '';
                  $("#candidate-image").empty();
                  $("#first-image").attr("src",'/admin/images/pic.png');
                  $("#publishNew").modal('hide');
              });

              $(".edit").click(function(){
                  let newsId = $(this).attr("data-id");
                  $.ajax({
                      url: "/admin/news/getOne",
                      dataType:'JSON',
                      method:'GET',
                      data:{
                          id:newsId
                      },
                      success:function(data,status){
                          $("#news-title").val(data.news_title);
                          $("#news-id").val(data.id);
                          editor.txt.html(data.news_content);
                          $("#first-image").attr("src",data.first_image);
                          firstImg = data.first_image;
                          $("#publishNew").modal('show');
                          $("#shortUrl").val(data.short_url);
                          $("input[name='article-sort']").each(function(){
                              if ($(this).val() == data.sort) {
                                  $(this).prop("checked",true);
                              }
                          });
                      },
                      error:function(){}
                  });
              });

              $(".delete").click(function(){
                  $("#deleteModal").modal('toggle');
                  let newsId = $(this).attr("data-id");
                  $(".delete-confirm").click(function(){
                      $.ajax({
                          url: "/admin/news/delete",
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
                  $(".delete-cannel").click(function(){
                      $("#deleteModal").modal("hide");
                  });

              });
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
          })
        </script>
    @endsection
