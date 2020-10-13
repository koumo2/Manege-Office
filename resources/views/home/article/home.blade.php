<!-- メニューバーを継承-->
@extends('layouts.menuber')

@section('title', "回覧板")
@section('content')
 <h1>回覧板ホーム画面</h1>


<!-- 新規ボタン-->
<a href = create><input type="submit" value="新規作成"></a>

<!-- 検索ボタン-->
<form method="get" action="#" class="search_container">
  <input type="text" size="25" placeholder="　キーワード検索">
  <input type="submit" value="検索">
</form>
<h2>回覧板一覧</h2>
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
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>ポートフォリオの作成について</td>
        <td>無</td>
        <td>2020年10月11日</td>
        <td>甲元和馬</td>
      </tr>
      <tr>
      <td>2</td>
        <td>サンプル</td>
        <td>サンプル</td>
        <td>サンプル</td>
        <td>サンプル</td>
      </tr>
      <tr>
      <td>3</td>
        <td>サンプル</td>
        <td>サンプル</td>
        <td>サンプル</td>
        <td>サンプル</td>
      </tr>
      <tr>
      <td>4</td>
        <td>サンプル</td>
        <td>サンプル</td>
        <td>サンプル</td>
        <td>サンプル</td>
      </tr>
      <tr>
        <td>5</td>
        <td>サンプル</td>
        <td>サンプル</td>
        <td>サンプル</td>
        <td>サンプル</td>
      </tr>
      <tr>
        <td>6</td>
        <td>サンプル</td>
        <td>サンプル</td>
        <td>サンプル</td>
        <td>サンプル</td>
      </tr>
    </tbody>
  </table>
  </div>
 </div>
</div>
@endsection