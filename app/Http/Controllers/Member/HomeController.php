<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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
    $articles = Article::all();
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
    return view('home.home',['articles' => $articles],compact('dates','contents','$articles','request1','request2'));
  }
  //回覧板画面
  public function article_home()
  {
    $articles = Article::all();
    return view('article.home',['articles' => $articles]);
  }
  public function article_create()
  {
    return view('article.create');
  }
  public function article_store(ArticleRequest $request)
  {
      $article = new Article;
      $inputs = $request->all();
      // dd($inputs);
      // $inputs['image_path']="aaa";

      if (isset($inputs['image'])) {
        $path = $request->file('sample_image')->store('public/image');
        $article->image_path = basename($path);
      } else {
        $article->image_path = null;
      }
      DB::beginTransaction();
          try {
              Article::create($inputs);
              DB::commit();
          } catch (\Throwable $e) {
              DB::rollback();
              abort(500);
          }
      Session::flash('err_msg', '回覧板を投稿しました');
    return redirect(route('article_home'));
  }
  public function article_content($id)
  {
    $article = Article::find($id);
    if(is_null($article)){
      Session::flash('err_msg', 'データがありません。');
      return redirect(route('article_home'));
    }
    return view('article.content',['article' => $article]);
  }


  public function article_edit($id)
  {
    $article = Article::find($id);
    if(is_null($article)){
      Session::flash('err_msg', 'データがありません。');
      return redirect(route('article_home'));
    }
    return view('article.edit',['article' => $article]);
  }
  public function article_update(ArticleRequest $request)
  {
      $inputs = $request->all();
      $inputs['image_path']="aaa";
      // $inputs['date']="2014-08-06 21:15:49";

      DB::beginTransaction();
          try {
              $article = Article::find($inputs['id']);
              $article->fill([
                'title' => $inputs['title'],
                'contents' => $inputs['contents'],
              ]);
              $article->save();
              DB::commit();
          } catch (\Throwable $e) {
              DB::rollback();
              abort(500);
          }
      Session::flash('err_msg', '回覧板を更新しました');
    return redirect(route('article_home'));
  }
  public function article_delete($id)
  {
      if (empty($id)) {
          Session::flash('err_msg', 'データがありません。');
          return redirect(route('article_home'));
      }
      try {
        Article::destroy($id);
      } catch (\Throwable $e) {
        abort(500);
      }
      Session::flash('err_msg', '回覧板を削除しました');
      return redirect(route('article_home'));
  }

  //スケジュール画面
  public function schedule_home()
  {
  return view('schedule.home');
  }
  public function schedule_create()
  {
  return view('schedule.create');
  }
  public function schedule_content()
  {
  return view('schedule.content');
  }
  //書類申請画面
  public function request_home()
  {
  return view('request.home');
  }
  public function request_create()
  {
  return view('request.create');
  }
  public function equest_content()
  {
  return view('request.content');
  }

// ログアウトしログイン画面へ移動
  public function logout()
  {
  Auth::logout();
	return redirect('login');
  }
}
?>