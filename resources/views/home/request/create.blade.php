@extends('layouts.menuber')

@section('title', "書類申請_作成")
@section('content')
<h1>書類申請作成画面</h1>

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
        <label class="col-sm-2 control-label">作成日 <span class="label label-danger">※必須</span></label>
        <div class="col-sm-2">
          <input type="text" name="date" class="form-control" placeholder="作成日" required />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">作成者 <span class="label label-danger">※必須</span></label>
        <div class="col-sm-2">
          <input type="text" name="name" class="form-control" placeholder="作成者" required />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">内容 <span class="label label-danger">※必須</span></label>
        <div class="col-sm-6">
          <textarea name="content" class="content" placeholder="内容" required /></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">申請ルート <span class="label label-danger">※必須</span></label>
        <div class="col-sm-6">
          <textarea name="content" class="request" placeholder="申請ルート" required /></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">登録</button>
        </div>
      </div>
    </form>




<a href = home><input type="submit" value="戻る"></a>
@endsection