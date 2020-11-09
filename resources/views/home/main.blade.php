@extends('layouts.menuber')

@section('title', "Manege Office")
@section('content')
<div class="col-md-12 mx-auto">
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

<!-- スケジュールのショートカット　始まり-->
<div class="container-fluid">
   <div class="row">
    <div class="col-sm-7">
      <h2>・回覧板</h2>
        <div class = "text-center">
          <table class="table table-bordered">
            <thead class="thead-light">
              <tr>
                <th width="100px">更新日</th>
                <th width="100px">作成者</th>
                <th width="150px">タイトル</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($articles as $article)
              <tr>
                <td>
                  <div class="compression">
                    {{ $article -> updated_at }}
                  </div>
                </td>
                <td>
                  <div class="compression">
                    {{ $article -> name }}
                  </div>
                </td>
                <td>
                  <div class="compression">
                    <a href="/ManegeOffice/public/member/article/content/{{ $article -> id }}">
                      {{ $article -> title }}
                    </a>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
<!-- スケジュールのショートカット　終わり-->

<!-- 書類申請のショートカット　始まり-->
      <h2>・書類申請状況</h2>
        <div class = "text-center">
          <table class="table table-bordered">
            <thead class="thead-light">
              <tr>
              <th>申請日</th>
              <th>申請者</th>
              <th>タイトル</th>
              <th>申請状況</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                @foreach ($request1 as $data)
                <td><div class="compression">{{ $data }}</td></div>
                @endforeach
              </tr>
              <tr>
                @foreach ($request2 as $data)
                <td><div class="compression">{{ $data }}</td></div>                @endforeach
              </tr>
              <tr>
                @foreach ($request3 as $data)
                <td><div class="compression">{{ $data }}</td></div>
                @endforeach
              </tr>
            </tbody>
          </table>
        </div>
        </div>
<!-- 書類申請のショートカット　終わり-->

<!-- 残業時間進捗　始まり-->
  <div class="col-sm-5">
    <h2>・残業時間実績推移</h2>
    <h3>
      <?php $day = date("m月d日");echo $day;?>時点 
      <font size="4">
        進捗率：<?php echo $Progress_rate;?>%
      </font>
    </h3>
    <canvas id="myPieChart"></canvas>
      <script>
        var ctx = document.getElementById("myPieChart");
        var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["残業時間"],
            datasets: [{
                label: '# of Votes',
                // data: [12, 33],
                data : [@json($Overtime),45- @json($Overtime)],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(238,238,238,1)',
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(238,238,238,1)',
                ],
                borderWidth: 3
            }]
    },
    options: {
        rotation: 1 * Math.PI,
        circumference: 1 * Math.PI
    }
  });
        </script>
        <h3><?php $day = date("Y年");echo $day;?>月別実績</h3>
        <canvas id="myChart"></canvas>
          <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var chart = new Chart(ctx, {
            type: 'bar',
            data: {
            labels: ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'],
            datasets: [{
            label: '残業時間',
            data : @json($total_time),
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)'
            }]
            },
            options: {}
            });
          </script>
      </div>
<!-- 残業時間進捗　始まり-->
    </div>
  　</div>
　</div>
</div>
@endsection
