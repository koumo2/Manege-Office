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

<!-- メインテーブル画面-->
<table border="3">
  <tr>
    <th>No</th>
    <th>タイトル</th>
    <th>添付有無</th>
    <th>作成日</th>
    <th>作成者</th>

  </tr>
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
</table>
@endsection