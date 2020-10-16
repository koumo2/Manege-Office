@extends('layouts.menuber')

@section('title', "回覧板_新規作成")
@section('content')
<div class="col-md-8 mx-auto">
<h2>回覧板新規作成</h2>
<div class= main >
      <div class="form-group">
        <label class="col-sm-8 control-label">タイトル <span class="label label-danger"><font color="red"> ※必須</font></span></label>
        <div class="col-sm-8">
          <input type="text" name="title" class="form-control" placeholder="タイトル" required />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-4 control-label">作成日 <span class="label label-danger"><font color="red"> ※必須</font></span></label>
        <div class="col-sm-4">
          <input type="text" name="date" class="form-control" placeholder="○○○○年△△月××日" required />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-4 control-label">作成者 <span class="label label-danger"><font color="red"> ※必須</font></span></label>
        <div class="col-sm-4">
          <input type="text" name="name" class="form-control" placeholder="氏名" required />
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-6 control-label">内容<span class="label label-danger"><font color="red"> ※必須</font></span></label>
        <div class="col-md-12">
            <textarea class="form-control" name="body" rows="10" placeholder="内容"></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <buttun type="submit" class="btn btn-secondary">画像添付</button>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary">投稿</button>
        </div>
      </div>
  <div class=return><a href = home><input type="submit" value="戻る"></a></div>
  </div>
</div>
@endsection