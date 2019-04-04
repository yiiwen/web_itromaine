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