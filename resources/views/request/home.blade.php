<!-- メニューバーを継承-->
@extends('layouts.menuber')

@section('title', "書類申請＿ホーム")
@section('content')
<div class = "col-lg-12 mx-auto">
<div class=home_main>
  @if (session('err_msg'))
    <p class="text-danger">
      {{ session('err_msg')}}
    </p>
    <span>
      {{ session('message') }}
    </span>
  @endif
<!-- 新規ボタン-->
  <div class="row">
    <div class="col-7">
      <h2>
        書類申請一覧
      </h2>
    </div>
    <div class="col-1">
      <a href = create>
        <input type="submit" value="新規申請">
      </a>
    </div>
    <!-- 検索ボタン-->
      <div class="col-4">
        <form method="get" action="#" class="search_container">
          <input type="text" size="25" placeholder="キーワード検索">
          <input type="submit" value="検索">
        </form>
      </div>
  </div>
    <div class="text-center">
      <div class="container-fluid">
        <table class="table table-bordered">
          <thead class="thead-light">
            <tr>
              <th class="col-xs-2">申請日</th>
              <th class="col-xs-2">作成者</th>
              <th class="col-xs-2">分類</th>
              <th class="col-xs-2">タイトル</th>
              <!-- <th "col-xs-2">添付</th> -->
              <th class="col-xs-2">内容</th>
              <th class="col-xs-2">申請状況</th>
            </tr>
          </thead>
          <tbody>
              <tr>
                @foreach ($request1 as $data)
                <td>
                  <div class="compression">
                    {{ $data }}
                  </div>
                </td>
                @endforeach
              </tr>
              <tr>
                @foreach ($request2 as $data)
                <td>
                  <div class="compression">
                    {{ $data }}
                  </div>
                </td>
                @endforeach
              </tr>
              <tr>
                @foreach ($request3 as $data)
                <td>
                  <div class="compression">
                    {{ $data }}
                  </div>
                </td>
                @endforeach
              </tr>
              <tr>
                @foreach ($request4 as $data)
                <td>
                  <div class="compression">
                    {{ $data }}
                  </div>
                </td>
                @endforeach
                <tr>
                @foreach ($request5 as $data)
                <td>
                  <div class="compression">
                    {{ $data }}
                  </div>
                </td>
                @endforeach
              </tr>
              <tr>
                @foreach ($request6 as $data)
                <td>
                  <div class="compression">
                    {{ $data }}
                  </div>
                </td>
                @endforeach
              </tr>
              </tr>
              <tr>
                @foreach ($request7 as $data)
                <td>
                  <div class="compression">
                    {{ $data }}
                  </div>
                </td>
                @endforeach
              </tr>
              <tr>
                @foreach ($request8 as $data)
                <td>
                  <div class="compression">
                    {{ $data }}
                  </div>
                </td>
                @endforeach
              </tr>
              <tr>
                @foreach ($request9 as $data)
                <td>
                  <div class="compression">
                    {{ $data }}
                  </div>
                </td>
                @endforeach
              </tr>
              <tr>
                @foreach ($request10 as $data)
                <td>
                  <div class="compression">
                    {{ $data }}
                  </div>
                </td>
                @endforeach
              </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<script>
  function checkDelete(){
  if(window.confirm('削除してよろしいですか？')){
      return true;
  } else {
      return false;
  }
  }
</script>

@endsection