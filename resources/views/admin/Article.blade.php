@extends("admin.layout")
@php $active = '/admin/cases/index' @endphp

@section("title","广州油麦菜信息科技有限公司-CMS")

@section("content")
<div class="container article">
  <div class="navPanel">
    <ul class="article-type">
      <li class="news">
        <div class="bg">新闻</div>
        <div class="radio"><input type="radio" checked="true" name="article-type" value="news" hecked="true" /></div>
      </li>
      <li class="cases">
        <div class="bg">案例</div>
        <div class="radio"><input type="radio" name="article-type" value="case" /></div>
      </li>
      <li class="solution">
        <div class="bg">解决方案</div>
        <div class="radio"><input type="radio" name="article-type" value="solution"/></div>
      </li>
    </ul>
  </div>
  <div class="contentPanel">
    <div id="id" class="form-group">
      <input type="hidden" id="article-id" @isset($article) value="{{$article->id}}" @endisset>
    </div>
    <div class="form-group article-input">
      <input type="text" id="title" data-toggle="tooltip" title="请输入文章标题" placeholder="请输入文章标题"
             @isset($article) value="{{$article->title}}" @endisset class="form-control">
    </div>
    <div id="cases-content" class="from-group">
      <div id="contBox" data-toggle="tooltip" title="请输入文章内容">
          @isset($article) {!! $article->content !!} @endisset
      </div>
    </div>
    <div class="article-image">
      <div class="first-image">
        <input type="file" style="display:none;" id="first-image-input" name="first-image" />
        <img @if(isset($article)) src="{{$article->firstImage}}" @else src="/admin/images/pic.png" @endif id="first-image" alt="..." class="img-thumbnail" />
        <div id="uploadFirstImgBtn">
          <button onclick="document.getElementById('first-image-input').click()">设置封面</button>
        </div>
      </div>
      <div style="border-radius:4px;width:780px;margin-left:210px;padding:0px 10px;">
        <div>
          <div class="candidate-image-div">
            <div class="candidate-image" id="candidate-image">
            </div>
          </div>
        </div>
      </div>
      <div style="clear:both;"></div>
    </div>
    <div style="clear:both;"></div>
    <div class="input-group article-input">
      <input type="text" class="form-control" placeholder="推广短链,自动生成" id="shortUrl" @isset($article)
      value="{{$article->shortUrl}}"  @endisset disabled aria-describedby="basic-addon2">
      <span class="input-group-addon" id="basic-addon2">复制</span>
    </div>
    <div id="article-sort" class="form-group">
      <div style="clear:both;"></div>
      <div class="checkbox">
        <label>
          <input type="radio" class="sort" value="1" name="article-sort" checked> 自然排序
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="radio" class="sort" value="2" name="article-sort"> 始终第一
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="radio" class="sort" value="3" name="article-sort"> 始终最后
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="radio" class="sort" value="4" name="article-sort"> 置顶
        </label>
      </div>
      <div style="clear:both;"></div>
    </div>
    <div class="bottom-button">
      <button type="button" class="btn btn-success" id="publish">发表</button>
      <button type="button" class="btn btn-default" id="preview">预览</button>
      <button type="button" class="btn btn-default" data-dismiss="modal" id="close">取消</button>
      <button type="button" class="btn btn-default" id="save">存为草稿</button>
    </div>
  </div>
</div>
@endsection

@section("script")
<script src="/admin/js/wangEditor.min.js"></script>
<script type="text/javascript">
  function render() {
    $(".article-type input[type=radio]").parents("li").find(".bg").css("background-color", "#FFF").css("color", "rgb(169,169,169)")
    $(".article-type input[type=radio]:checked").parents("li").find(".bg").css("background-color", "#5cb85c").css("color", "#FFF")
  }

  window.onload = function() {
    render();
    let contentBox = $('#contBox').html();
    if (contentBox.length > 0) {
        let reg = /<img[A-Za-z0-9\*\s"'=]*src="[\S]+"/g
        let srcReg = /src="[\S]+"/g;
        let matchResult = contentBox.match(reg)
        $("#candidate-image").empty()
        if (matchResult != null) {
            for (let i=0; i<matchResult.length; i++) {
                let src = matchResult[i].match(srcReg)
                let img = src[0].substring(5,src[0].length-1)
                let image = `<div class="outer"><img src="${img}" class="img-thumbnail"></div>`
                $("#candidate-image").append(image)
            }
        }
    }
  }

  $(".article-type .bg").click(function() {
    $(this).parent().find(".radio").find("input").click()
    render()
    return false
  });
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
  // 获取表单数据
  function collectingData() {
    const submitData = new FormData()
    let id = $("#article-id").val().trim() // id
    let articleTitle = $("#title").val().trim() // 标题
    let content = editor.txt.html().trim() // 内容
    let type = $('input[name="article-type"]:checked').val();
    if (articleTitle.length <= 0) {
      $("#title").focus()
      $("#title").tooltip('show')
      return false
    }
    if (content.length <= 0) {
      return false
    }
    let firstImage = $('#first-image').attr('src');
    if (!firstImage) {
      alert("未设置文章封面！！！")
      return false
    }
    $("input[name='article-sort']").each(function() {
      if ($(this).prop('checked')) submitData.append('sort', $(this).val())
    })
    submitData.append('id', id)
    submitData.append('title', articleTitle)
    submitData.append('type',type)
    submitData.append('articleContent', content)
    submitData.append('firstImg', firstImage)
    return submitData
  }

  $("#publish").click(function() {
    let data = collectingData()
    if (data != false) {
      $.ajax({
        url: '/admin/article/publish',
        data: data,
        headers: {
          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
        },
        processData: false,
        contentType: false,
        method: 'POST',
        dataType: 'JSON',
        success: function(data, status) {},
        error: function(data) {}
      })
    } 
  })
</script>
@endsection("script")
