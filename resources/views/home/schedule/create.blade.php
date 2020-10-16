@extends('layouts.menuber')

@section('title', "スケジュール_作成")
@section('content')
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
<div class="col-md-8 mx-auto">
<h2>スケジュール新規作成</h2>
     <div class=main>
      <div class="form-group">
        <label class="col-sm-4 control-label">分類 <span class="label label-danger"><font color="red">    ※必須</font></span></label>
        <div class="col-sm-4">
          <input type="text" name="genre" class="form-control" placeholder="分類" required />
        </div>
      </>
      <div class="form-group">
        <label class="col-sm-8 control-label">タイトル<span class="label label-danger"><font color="red">    ※必須</font></span></label>
        <div class="col-sm-8">
          <input type="text" name="title" class="form-control" placeholder="タイトル" required />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-4 control-label">開始日時 <span class="label label-danger"><font color="red">    ※必須</font></span></label>
        <div class="col-sm-4">
          <input type="text" name="start" class="form-control" placeholder="開始日時" required />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-4 control-label">終了日時 <span class="label label-danger"><font color="red">    ※必須</font></span></label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="end" class="form-control" placeholder="終了日時" required />
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-6 control-label">内容<span class="label label-danger"><font color="red">    ※必須</font></span></label>
        <div class="col-md-12">
            <textarea class="form-control" name="body" rows="10" placeholder="内容"></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary">登録</button>
        </div>
      </div>
      <div class=return><a href = home><input type="submit" value="戻る"></a></div>
  </div>
</div>
@endsection