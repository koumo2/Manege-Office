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
                <th width="20px">No</th>
                <th width="150px">タイトル</th>
                <th width="100px">作成日</th>
                <th width="100px">作成者</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($articles as $article)
              <tr>
              <div class="max_20px">
                <td>{{ $article -> id }}</td>
              </div>
              <div class="max_150px">
                <td>
                  <a href="/groupware/public/member/article/content/{{ $article -> id }}">{{ $article -> title }}</a>
                </td>
              </div>
              <div class="max_100px">
                <td>{{ $article -> updated_at }}</td>
                <td>{{ $article -> name }}</td>
              </div>
              </tr>
              @endforeach
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
        <!-- <div class = "text-center">
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
        </div> -->
        <canvas id="myChart"></canvas>
        <script>
          var ctx = document.getElementById('myChart').getContext('2d');
          var chart = new Chart(ctx, {
          type: 'bar',
          data: {
          labels: ['１月', '２月', '３月', '４月', '５月', '６月', '７月'],
          datasets: [{
          label: 'マイグラフ',
          data: [25, 10, 5, 2, 20, 30, 45],
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)'
          }]
          },
          options: {}
          });
        </script>
      </div>
    </div>
  </div>
</div>
<!-- 書類申請のショートカット　終わり-->
@endsection
