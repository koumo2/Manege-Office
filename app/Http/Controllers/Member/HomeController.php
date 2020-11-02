<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

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
    $articles = Article::orderBy('updated_at','desc')->paginate(3);
    $request1 = [
      'data1' => '1',
      'data2' => '新規製品の仕様書について',
      'data3' => '2020/10/17',
      'data4' => '甲元　和馬',
      'data5' => '○'
    ];
    $request2 = [
      'data1' => '2',
      'data2' => '11月13日の大阪出張の件',
      'data3' => '2020/10/20',
      'data4' => '甲元　和馬',
      'data5' => '×'
    ];
    $request3 = [
      'data1' => '3',
      'data2' => '有給休暇の申請をします。',
      'data3' => '2020/10/24',
      'data4' => '甲元　和馬',
      'data5' => '×'
    ];
    $time = rand(0,45);
    $total_time = [35,10,40,10,30,50,25,20,45,20];

    return view('home.main',['articles' => $articles],compact('dates','contents','$articles','request1','request2','request3','time','total_time'));
  }

  /**
   *回覧板ホーム画面を表示
   *
   *
  */
  public function article_home()
  {
    $articles = Article::orderBy('updated_at','desc')->paginate(10);
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

      // if (isset($inputs['image'])) {
      //   $path = $request->file('image')->store('public/image');
      //   $article->image_path = basename($path);
      // } else {
      //   $article->image_path = null;
      // }
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
    $request1 = [
      'data1' => '1',
      'data2' => '仕様書',
      'data3' => '新規製品の仕様書について',
      'data4' => '2020/10/17',
      'data5' => '2020年12月立ち上げとなる新規案件の仕様書を作成しました。ご確認をお願い致します。',
      'data6' => '甲元　和馬',
      'data7' => '○'
    ];
    $request2 = [
      'data1' => '2',
      'data2' => '出張申請書',
      'data3' => '11月13日の大阪出張の件',
      'data4' => '2020/10/20',
      'data5' => '11月13日の大阪出張に関し、出張の申請をします。',
      'data6' => '甲元　和馬',
      'data7' => '×'
    ];
    $request3 = [
      'data1' => '3',
      'data2' => '有給申請書',
      'data3' => '有給休暇の申請をします。',
      'data4' => '2020/10/24',
      'data5' => '11月15日ですが、家事都合に有給休暇を申請します。よろしくお願い致します。',
      'data6' => '甲元　和馬',
      'data7' => '×'
    ];
    $request4 = [
      'data1' => '4',
      'data2' => '経費支出稟議申請',
      'data3' => '新規PCの導入について',
      'data4' => '2020/10/29',
      'data5' => '新規PCの購入費用として稟議を申請します。',
      'data6' => '甲元　和馬',
      'data7' => '○'
    ];
    $request5 = [
      'data1' => '5',
      'data2' => '仕様書',
      'data3' => '新規製品の仕様書について',
      'data4' => '2020/10/31',
      'data5' => '2021年2月立ち上げとなる新規案件の仕様書を作成しました。ご確認をお願い致します。',
      'data6' => '甲元　和馬',
      'data7' => '×'
    ];
    $request6 = [
      'data1' => '6',
      'data2' => '出張申請書',
      'data3' => '12月20日の東京出張の件',
      'data4' => '2020/11/02',
      'data5' => '12月20日の大阪出張に関し、出張の申請をします。',
      'data6' => '甲元　和馬',
      'data7' => '×'
    ];
    $request7 = [
      'data1' => '7',
      'data2' => '有給申請書',
      'data3' => '有給休暇の申請をします。',
      'data4' => '2020/11/5',
      'data5' => '12月20日ですが、家事都合に有給休暇を申請します。よろしくお願い致します。',
      'data6' => '甲元　和馬',
      'data7' => '×'
    ];
    $request8 = [
      'data1' => '8',
      'data2' => '経費支出稟議申請',
      'data3' => 'モニターの購入費について',
      'data4' => '2020/11/10',
      'data5' => 'モニターの購入費用として稟議を申請します。',
      'data6' => '甲元　和馬',
      'data7' => '○'
    ];
    $request9 = [
      'data1' => '9',
      'data2' => '仕様書',
      'data3' => '新規製品の仕様書について',
      'data4' => '2020/11/15',
      'data5' => '2021年5月立ち上げとなる新規案件の仕様書を作成しました。ご確認をお願い致します。',
      'data6' => '甲元　和馬',
      'data7' => '○'
    ];
    $request10 = [
      'data1' => '10',
      'data2' => '出張申請書',
      'data3' => '12月30日の中国への出張の件',
      'data4' => '2020/11/20',
      'data5' => '12月30日の中国への出張に関し、出張の申請をします。',
      'data6' => '甲元　和馬',
      'data7' => '×'
    ];
  return view('request.home',compact('request1','request2','request3','request4','request5','request6','request7','request8','request9','request10'));
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