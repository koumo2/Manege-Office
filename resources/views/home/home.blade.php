@extends('layouts.menuber')

@section('title', "ホーム画面")
@section('content')
  <h1>メインホーム画面</h1>
  <h2>・スケジュール</h2>
  <div class = "text-center">
  <div class="container-fluid">
    <div class = article>
    <table class="table table-bordered">
      <thead class="thead-light">
        <tr>
          <th>11月1日(日)</th>
          <th>11月2日(月)</th>
          <th>11月3日(火)</th>
          <th>11月4日(水)</th>
          <th>11月5日(木)</th>
          <th>11月6日(金)</th>
          <th>11月7日(土)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>サンプル</td>
          <td>サンプル</td>
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

    <!-- スケジュールのショートカット　始まり-->
<div class="container-fluid">
<div class ="row">
    <div class="col-6">
    <div class = article>
    <h2>・回覧板</h2>
    <div class = "text-center">
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
          <td>サンプル</td>
          <td>サンプル</td>
          <td>サンプル</td>
          <td>サンプル</td>
          <td>サンプル</td>
        </tr>
        <tr>
          <td>サンプル</td>
          <td>サンプル</td>
          <td>サンプル</td>
          <td>サンプル</td>
          <td>サンプル</td>
        </tr>
        <tr>
          <td>サンプル</td>
          <td>サンプル</td>
          <td>サンプル</td>
          <td>サンプル</td>
          <td>サンプル</td>
        </tr>
        <tr>
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
    <!-- スケジュールのショートカット　終わり-->

    <!-- 書類申請のショートカット　始まり-->
    <div class="col-6">
    <div class = article>
    <h2>・書類申請状況</h2>
    <div class = "text-center">
      <table class="table table-bordered">
        <thead class="thead-light">
          <tr>
          <th>No</th>
          <th>タイトル</th>
          <th>作成日</th>
          <th>作成者</th>
          <th>申請状況</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>サンプル</td>
            <td>サンプル</td>
            <td>サンプル</td>
            <td>サンプル</td>
            <td>サンプル</td>
          </tr>
          <tr>
            <td>サンプル</td>
            <td>サンプル</td>
            <td>サンプル</td>
            <td>サンプル</td>
            <td>サンプル</td>
          </tr>
          <tr>
            <td>サンプル</td>
            <td>サンプル</td>
            <td>サンプル</td>
            <td>サンプル</td>
            <td>サンプル</td>
          </tr>
          <tr>
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
</div>

    <!-- 書類申請のショートカット　終わり-->
@endsection
