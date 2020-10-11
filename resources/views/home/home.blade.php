@extends('layouts.menuber')

@section('title', "ホーム画面")
@section('content')
　　　<style>
     .article{
        padding: 0.5em 1em;
        margin: 2em 0;
        font-weight: bold;
        border: solid 3px #000000;
      }
      .request{
        padding: 0.5em 1em;
        margin: 2em 0;
        font-weight: bold;
        border: solid 3px #000000;
      }
    </style>
    
    <!-- スケジュールのショートカット　始まり-->
    <h2>・スケジュール</h2>
    <div class = article>
    <h2>・回覧板</h2>
    <table border="3">
            <tr>
                <th>No</th>
                <th>タイトル</th>
                <th>添付有無</th>
                <th>作成日</th>
                <th>作成者</th>
    　　　  </tr>
            <tr>
                <td>テキストA</td>
                <td>テキストB</td>
            </tr>
    </table>
    </div>
    <!-- スケジュールのショートカット　終わり-->

    <!-- 書類申請のショートカット　始まり-->
    <div class = request>
    <h2>・書類申請状況</h2>
    <table border="3">
            <tr>
                <th>No</th>
                <th>タイトル</th>
                <th>作成日</th>
                <th>作成者</th>
                <th>申請状況</th>
    　　　  </tr>
            <tr>
                <td>テキストA</td>
                <td>テキストB</td>
            </tr>
    </table>
    </div>
    <!-- 書類申請のショートカット　終わり-->
    @endsection
