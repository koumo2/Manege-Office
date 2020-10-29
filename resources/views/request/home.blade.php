<!-- メニューバーを継承-->
@extends('layouts.menuber')

@section('title', "書類申請＿ホーム")
@section('content')
<div class = "col-lg-10 mx-auto">
<div class=home_main>
<div class="row">
<div class="col-8"><h2>申請書類一覧</h2></div>
<div class="col-1">
<a href = create><input type="submit" value="新規申請"></a>
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
        <th>分類</th>
        <th>タイトル</th>
        <th>作成日</th>
        <th>作成者</th>
        <th>申請状況</th>
      </tr>
    </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>仕様書</td>
          <td>ABCの仕様書について</td>
          <td>2020年10月11日</td>
          <td>甲元和馬</td>
          <td>上下社長</td>
        </tr>
        <tr>
          <td>2</td>
          <td>サンプル</td>
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
          <td>サンプル</td>
        </tr>
        <tr>
          <td>4</td>
          <td>サンプル</td>
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
          <td>サンプル</td>
        </tr>
        <tr>
          <td>6</td>
          <td>サンプル</td>
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
</div>
</div>
@endsection