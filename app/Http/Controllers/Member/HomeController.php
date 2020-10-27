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
  /**
   *メインホーム画面を表示
   *
   *
  */
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
      'data1' => '1',
      'data2' => 'ABCの仕様書について',
      'data3' => '2020/10/17',
      'data4' => '甲元和馬',
      'data5' => '○'
    ];
    $request2 = [
      'data1' => '2',
      'data2' => '出張伺書',
      'data3' => '2020/10/17',
      'data4' => '甲元和馬',
      'data5' => '×'
    ];
    $request3 = [
      'data1' => '3',
      'data2' => 'ABCの仕様書について',
      'data3' => '2020/10/17',
      'data4' => '甲元和馬',
      'data5' => '○'
    ];
    $request4 = [
      'data1' => '4',
      'data2' => '出張伺書',
      'data3' => '2020/10/17',
      'data4' => '甲元和馬',
      'data5' => '×'
    ];
    $request5 = [
      'data1' => '5',
      'data2' => '出張伺書',
      'data3' => '2020/10/17',
      'data4' => '甲元和馬',
      'data5' => '×'
    ];
    return view('home.home',['articles' => $articles],compact('dates','contents','$articles','request1','request2','request3','request4','request5'));
  }

  /**
   *回覧板ホーム画面を表示
   *
   *
  */
  public function article_home()
  {
    $articles = Article::all();
    return view('article.home',['articles' => $articles]);
  }

  /**
   *回覧板作成画面を表示
   *
   *
  */
  public function article_create()
  {
    return view('article.create');
  }
  /**
   *回覧板登録
   *
   *
  */
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
  /**
   *回覧板内容確認
   *
   *
  */
  public function article_content($id)
  {
    $article = Article::find($id);
    if(is_null($article)){
      Session::flash('err_msg', 'データがありません。');
      return redirect(route('article_home'));
    }
    return view('article.content',['article' => $article]);
  }

/**
   *回覧板編集画面を表示
   *
   *
  */
  public function article_edit($id)
  {
    $article = Article::find($id);
    if(is_null($article)){
      Session::flash('err_msg', 'データがありません。');
      return redirect(route('article_home'));
    }
    return view('article.edit',['article' => $article]);
  }
/**
  *回覧板更新
  *
  *
 */
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
  /**
  *回覧板削除
  *
  *
 */
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
  
// ログアウトしログイン画面へ移動
  public function logout()
  {
  Auth::logout();
  return redirect('login');
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
  public function request_content()
  {
  return view('request.content');
  }

}
?>