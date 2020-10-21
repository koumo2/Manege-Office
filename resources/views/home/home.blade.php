@extends('layouts.menuber')

@section('title', "ホーム画面")
@section('content')
<div class = home_main>
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
          <tr style='height:100px',class="align-middle">
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
</div>

    <!-- スケジュールのショートカット　始まり-->
<div class="container-fluid">
  <div class ="row">
    <div class="col-sm-6">
      <div class = home_main>
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
            </tbody>
          </table>
        </div>
      </div>
    </div>
      <!-- スケジュールのショートカット　終わり-->

      <!-- 書類申請のショートカット　始まり-->
    <div class="col-sm-6">
      <div class = home_main>
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
                @foreach ($request1 as $data)
                  @if($data == "×")
                  <td><span style="color:#FF0000;">{{{ $data }}}</span></td>
                  @elseif($data == "○")
                  <td><span style="color:#0000FF;">{{{ $data }}}</span></td>
                  @else<td>{{{ $data }}}</td>
                  @endif
                @endforeach
              </tr>
              <tr>
                @foreach ($request2 as $data)
                  @if($data == "×")
                  <td><span style="color:#FF0000;">{{{ $data }}}</span></td>
                  @elseif($data == "○")
                  <td><span style="color:#0000FF;">{{{ $data }}}</span></td>
                  @else<td>{{{ $data }}}</td>
                  @endif
                @endforeach
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- 書類申請のショートカット　終わり-->
@endsection
