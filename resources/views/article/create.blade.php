@extends('layouts.menuber')
@section('title', "回覧板_新規作成")
@section('content')

<div class="col-md-6 mx-auto">
  <h2>回覧板新規作成</h2>
    <div class= create_main >
      <form method="POST" action="{{ route('article_store') }}" onSubmit="return checkSubmit()">
        @csrf
        <!-- タイトルの入力 -->
        <div class="form-group">
          <label class="col-sm-8 control-label">タイトル <span class="label label-danger"><font color="red"> ※必須</font></span></label>
            <div class="col-sm-12">
              <input type="text" name="title" class="form-control" placeholder="タイトル" value="{{ old('title') }}" />
              @if ($errors->has('title'))
                  <div class="text-danger">
                      {{ $errors->first('title') }}
                  </div>
              @endif
            </div>
          </div>
          <!-- 作成日を自動取得 -->
          <input type="hidden" name="date" class="form-control"
              value="<?php $day = date("Y-m-d H:i:s");echo $day;?>">
          <!-- ログイン者名を自動取得 -->
          <input type="hidden" name="name" class="form-control" value="{{Auth::user()->name}}" />
          <!-- 内容の入力 -->
          <div class="form-group">
            <label class="col-md-6 control-label">内容<span class="label label-danger"><font color="red"> ※必須</font></span></label>
              <div class="col-md-12">
                <textarea name="contents" class="form-control" rows="10" placeholder="内容" value="{{ old('contents') }}" ></textarea>
                @if ($errors->has('contents'))
                        <div class="text-danger">
                            {{ $errors->first('contents') }}
                        </div>
                @endif
              </div>
          </div>
          <!-- <div class="form-group">
            <label class="col-md-6 control-label" for="image_path">画像</label>
            <div class="col-sm-10">
              <input type="file" class="form-control-file" name="image">
            </div>
          </div> -->
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">投稿</button>
            </div>
          </div>
          {{ csrf_field() }}
    </form>
    <div class=return><a href = home><input type="submit" value="戻る"></a></div>
  </div>
</div>
<script>
function checkSubmit(){
if(window.confirm('送信してよろしいですか？')){
    return true;
} else {
    return false;
}
}
</script>
@endsection