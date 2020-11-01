@extends('layouts.menuber')
@section('title', "回覧板_編集")
@section('content')

<div class="col-md-8 mx-auto">
  <h2>回覧板編集</h2>
    <div class= create_main >
      <form method="POST" action="{{ route('article_update') }}" onSubmit="return checkSubmit()">
        @csrf
        <input type="hidden" name="id" value="{{$article->id}}">
          <div class="form-group">
            <label class="col-sm-8 control-label">
              タイトル
            </label>
              <div class="col-sm-12">
                <input type="text" name="title" class="form-control" placeholder="タイトル" value="{{ $article -> title }}" />
                @if ($errors->has('title'))
                    <div class="text-danger">
                        {{ $errors->first('title') }}
                    </div>
                @endif
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-6 control-label">
              内容
            </label>
              <div class="col-md-12">
                <textarea name="contents" class="form-control" rows="10" placeholder="内容" >
                  {{ $article -> contents }}
                </textarea>
                @if ($errors->has('contents'))
                  <div class="text-danger">
                    {{ $errors->first('contents') }}
                  </div>
                @endif
              </div>
          </div>
          <!-- <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <buttun type="submit" class="btn btn-secondary">画像添付</button>
            </div>
          </div> -->
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">
                更新
              </button>
            </div>
          </div>
          {{ csrf_field() }}
    </form>
    <div class=return>
      <a href = home>
        <input type="submit" value="戻る">
      </a>
    </div>
  </div>
</div>
<script>
  function checkSubmit(){
  if(window.confirm('更新してよろしいですか？')){
      return true;
  } else {
      return false;
  }
  }
</script>
@endsection