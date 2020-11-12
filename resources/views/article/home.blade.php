<!-- メニューバーを継承-->
@extends('layouts.menuber')

@section('title', "回覧板＿ホーム")
@section('content')

<div class="col-lg-12 mx-auto">
  <div class=home_main>
  @if (session('err_msg'))
    <p class="text-danger">
      {{ session('err_msg')}}
    </p>
    <span>
      {{ session('message') }}
    </span>
  @endif
<!-- 新規ボタン-->
  <div class="row">
    <div class="col-7">
      <h2>
        回覧板一覧
      </h2>
    </div>
    <div class="col-1">
      <a href = create>
        <input type="submit" value="新規作成">
      </a>
    </div>
    <!-- 検索ボタン-->
      <div class="col-4">
        <form method="get" action="#" class="search_container">
          <input type="text" size="25" placeholder="キーワード検索">
          <input type="submit" value="検索">
        </form>
      </div>
  </div>
  <!-- 回覧板一覧表示-->
    <div class="text-center">
      <div class="container-fluid">
        <table class="table table-bordered">
          <thead class="thead-light">
            <tr>
              <th class="col-xs-2">更新日</th>
              <th class="col-xs-2">作成者</th>
              <th class="col-xs-2">タイトル</th>
              <th class="col-xs-2">内容</th>
              <!-- <th "col-xs-2">添付</th> -->
              <th class="col-xs-2"></th>
            </tr>
          </thead>
          <tbody>
            @foreach($articles as $article)
            <tr>
                <td><div class="compression">{{ $article -> updated_at }}</td></div>
                <td><div class="compression">{{ $article -> name }}</td></div>
                <td><div class="compression">{{ $article -> title }}</td></div>
                <td><div class="compression">{{ $article -> contents }}</td></div>
                <td>
                  <div class="btn-group" role="group">
                    <button type="button" class="btn btn-primary btn-sm" onclick="location.href='/ManegeOffice/public/member/article/content/{{ $article -> id }}'">
                      確認
                    </button>
                    <button type="button" class="btn btn-success btn-sm" onclick="location.href='/ManegeOffice/public/member/article/edit/{{ $article -> id }}'">
                      編集
                    </button>
                    <form method="POST" action="{{ route('article_delete',$article->id) }}" onSubmit="return checkDelete()">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm" onclick=>
                      削除
                    </button>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  <!-- 回覧板一覧表示　終わり-->
  </div>
</div>
<script>
  function checkDelete(){
  if(window.confirm('削除してよろしいですか？')){
      return true;
  } else {
      return false;
  }
  }
</script>
@endsection