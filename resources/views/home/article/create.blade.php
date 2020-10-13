@extends('layouts.menuber')

@section('title', "回覧板_新規作成")
@section('content')
<h2>回覧板新規作成画面</h2>
<div class=main>
<form class="form-horizontal">
      <div class="form-group">
        <label class="col-sm-2 control-label">タイトル <span class="label label-danger">※必須</span></label>
        <div class="col-sm-6">
          <input type="text" name="title" class="form-control" placeholder="タイトル" required />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">作成日 <span class="label label-danger">※必須</span></label>
        <div class="col-sm-2">
          <input type="text" name="date" class="form-control" placeholder="○○○○年△△月××日" required />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">作成者 <span class="label label-danger">※必須</span></label>
        <div class="col-sm-2">
          <input type="text" name="name" class="form-control" placeholder="氏名" required />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">内容 <span class="label label-danger">※必須</span></label>
        <div class="col-sm-6">
          <textarea name="content" class="form-control" placeholder="内容" required /></textarea>
        </div>
      </div>
      <p><input type="submit" value="画像添付"></p>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">投稿</button>
        </div>
      </div>
    </form>
  </div>
<a href = home><input type="submit" value="戻る"></a>
</div>
@endsection