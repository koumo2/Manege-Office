@extends('layouts.menuber')

@section('title', "ホーム画面")
@section('content')

  <h2>・スケジュール</h2>
  <div class = "text-center">
  <div class="container-fluid">
    <table class="table table-bordered">
      <thead class="thead-light">
        <tr>
        @foreach ($dates as $date)
        <td>{{{ $date }}}</td>
        @endforeach
        </tr>
      </thead>
      <tbody>
        <tr>
        @foreach ($contents as $content)
        @if($content == "休み")
        <td><span style="color:#FF0000;">{{{ $content }}}</span></td>
        @else<td>{{{ $content }}}</td>
        @endif
        @endforeach
        </tr>
      </tbody>
  </table>
  </div>
  </div>

    <!-- スケジュールのショートカット　始まり-->
<div class="container-fluid">
<div class ="row">
    <div class="col-6">
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
        @foreach ($articles as $article)
        <td>{{{ $article }}}</td>
        @endforeach
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
    <!-- スケジュールのショートカット　終わり-->

    <!-- 書類申請のショートカット　始まり-->
    <div class="col-6">
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
          @foreach ($request as $data)
          <td>{{{ $data }}}</td>
          @endforeach
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
<!-- 書類申請のショートカット　終わり-->
@endsection
