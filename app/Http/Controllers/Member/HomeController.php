<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller

{
  //ホーム画面
  public function add()
  {
   return view('home.home');
  }
  //回覧板画面
  public function article_home()
  {
   return view('home.article.home');
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