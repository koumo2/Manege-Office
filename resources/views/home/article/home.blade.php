<!-- メニューバーを継承-->
@extends('layouts.menuber')

@section('title', "回覧板")
@section('content')

<div class=home_main>
<!-- 新規ボタン-->
<div class="row">
<div class="col-8"><h2>回覧板一覧</h2></div>
<div class="col-1">
<a href = create><input type="submit" value="新規作成"></a>
</div>
<!-- 検索ボタン-->
<div class="col-3">
<form method="get" action="#" class="search_container">
  <input type="text" size="25" placeholder="　キーワード検索">
  <input type="submit" value="検索">
</form>
</div>
</div>

<div class = "text-center">
<div class="container-fluid">
  <div class = article>
  <table class="table table-bordered">
    <thead class="thead-light">
      <tr>
        <th>No</th>
        <th>タイトル</th>
        <th>添付有無</th>
        <th>作成日</th>
        <th>作成者</th>
        <th>内容</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($datas as $data)
        <tr>
          <td>{{{ $data -> id }}}</td>
          <td>{{{ $data -> title }}}</td>
          <td>有</td>
          <td>{{{ $data -> date }}}</td>
          <td>{{{ $data -> name }}}</td>
          <td>{{{ $data -> contents }}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
  </div>
</div>
</div>
</div>
@endsection