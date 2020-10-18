<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;

class HomeController extends Controller

{
  //ホーム画面
  public function add()
  {
    $dates = [
      'date1' => '11月1日(日)',
      'date2' => '11月2日(月)',
      'date3' => '11月3日(火)',
      'date4' => '11月4日(水)',
      'date5' => '11月5日(木)',
      'date6' => '11月6日(金)',
      'date7' => '11月7日(土)'
    ];
    $contents = [
      'content1' => '休み',
      'content2' => '会議',
      'content3' => '出張',
      'content4' => '予定無し',
      'content5' => '予定無し',
      'content6' => '会議',
      'content7' => '休み'
    ];
    $articles = [
      'date1' => '1',
      'date2' => 'ポートフォリオの作成',
      'date3' => '無',
      'date4' => '2020/10/17',
      'date5' => '甲元和馬'
    ];
    $request1 = [
      'date1' => '1',
      'date2' => 'ABCの仕様書について',
      'date3' => '2020/10/17',
      'date4' => '甲元和馬',
      'date5' => '○'
    ];
    $request2 = [
      'date1' => '2',
      'date2' => '出張伺書',
      'date3' => '2020/10/17',
      'date4' => '甲元和馬',
      'date5' => '×'
    ];
    return view('home.home',compact('dates','contents','articles','request1','request2'));
  }
  //回覧板画面
  public function article_home()
  {
    $datas = Article::all();

  return view('home.article.home',['datas' => $datas]);
  }
  public function article_create()
  {
  return view('home.article.create');
  }
  public function article_content()
  {
    return view('home.article.content');
  }
  //スケジュール画面
  public function schedule_home()
  {
  return view('home.schedule.home');
  }
  public function schedule_create()
  {
  return view('home.schedule.create');
  }
  public function schedule_content()
  {
  return view('home.schedule.content');
  }
  //書類申請画面
  public function request_home()
  {
  return view('home.request.home');
  }
  public function request_create()
  {
  return view('home.request.create');
  }
  public function request_content()
  {
  return view('home.request.content');
  }
}
?>