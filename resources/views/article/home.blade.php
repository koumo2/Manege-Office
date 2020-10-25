<!-- メニューバーを継承-->
@extends('layouts.menuber')

@section('title', "回覧板")
@section('content')

<div class=home_main>
@if (session('err_msg'))
<p class="text-danger">
  {{ session('err_msg')}}
</p>
<span>{{ session('message') }}</span>
@endif
<!-- 新規ボタン-->
  <div class="row">
    <div class="col-8"><h2>回覧板一覧</h2></div>
    <div class="col-1">
      <a href = create><input type="submit" value="新規作成"></a>
    </div>
    <!-- 検索ボタン-->
      <div class="col-3">
        <form method="get" action="#" class="search_container">
          <input type="text" size="25" placeholder="キーワード検索">
          <input type="submit" value="検索">
        </form>
      </div>
  </div>

  <div class="text-center">
    <div class="container-fluid">
        <table class="table table-bordered">
          <thead class="thead-light">
            <tr>
              <th width="30">No</th>
              <th width="70">タイトル</th>
              <th width="70">内容</th>
              <th width="50">添付</th>
              <th width="50">日付</th>
              <th width="50">作成者</th>
              <th></th>
              <!-- <th width="20"></th>
              <th width="20"></th> -->
            </tr>
          </thead>
          <tbody>
            @foreach($articles as $article)
              <tr>
                <td><div class="max_30px">{{ $article -> id }}</td>
                <td><div class="max_300px">{{ $article -> title }}</td></div>
                <td><div class="max_300px">{{ $article -> contents }}</td></div>
                <td><div class="max_200px">{{ $article -> image_path }} </td></div>
                <td><div class="max_200px">{{ $article -> updated_at }}</td></div>
                <td><div class="max_200px">{{ $article -> name }}</td></div>
                <td>
                <div class="max_150px">
                  <div class="btn-group" role="group">
                    <button type="button" class="btn btn-primary btn-sm" onclick="location.href='/groupware/public/member/article/content/{{ $article -> id }}'">確認</button>
                    <button type="button" class="btn btn-success btn-sm" onclick="location.href='/groupware/public/member/article/edit/{{ $article -> id }}'">編集</button>
                    <form method="POST" action="{{ route('article_delete',$article->id) }}" onSubmit="return checkDelete()">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm" onclick=>削除</button>

                  </div>
                </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
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