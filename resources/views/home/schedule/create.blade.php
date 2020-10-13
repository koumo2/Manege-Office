@extends('layouts.menuber')

@section('title', "スケジュール_作成")
@section('content')
<h2>スケジュール新規作成画面</h2>
<style>
label {
    display: block;
    font: 1rem 'Fira Sans', sans-serif;
}

input,
label {
    margin: .4rem 0;
}
</style>
<form class="form-horizontal">
      <div class="form-group">
        <label class="col-sm-2 control-label">分類 <span class="label label-danger">※必須</span></label>
        <div class="col-sm-2">
          <input type="text" name="genre" class="form-control" placeholder="分類" required />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">タイトル<span class="label label-danger">※必須</span></label>
        <div class="col-sm-6">
          <input type="text" name="title" class="form-control" placeholder="タイトル" required />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">開始日時 <span class="label label-danger">※必須</span></label>
        <div class="col-sm-2">
          <input type="text" name="start" class="form-control" placeholder="開始日時" required />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">終了日時 <span class="label label-danger">※必須</span></label>
        <div class="col-sm-2">
          <input type="text" name="end" class="form-control" placeholder="終了日時" required />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">内容 <span class="label label-danger">※必須</span></label>
        <div class="col-sm-6">
          <textarea name="content" class="form-control" placeholder="内容" required /></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">登録</button>
        </div>
      </div>
    </form>
  </div>
<p><input type="submit" value="戻る"></p>
@endsection