@extends('layouts.menuber')

@section('title', "ホーム画面")
@section('content')
  <h1>メインホーム画面</h1>
  <p>・スケジュール</p>
    <!-- スケジュールのショートカット　始まり-->
  <div class="container-fluid">
    <div class="row">
    <div class="col-6">
    <div class = article>
    <p>・回覧板</p>
    <table class="table">
      <thead class="thead-dark">
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
    <div class = row>
    <div class="col-6">
    <div class = article>
    <p>・書類申請状況</p>
      <table class="table">
        <thead class="thead-dark">
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
      </div>
      </table>
    </div>
    </div>
    </div>
</div>
    <!-- 書類申請のショートカット　終わり-->
    @endsection
