@extends('layouts.menuber')

@section('title', "書類申請_作成")
@section('content')
<h1>書類申請作成画面</h1>
<p>分類:<br>
<input type="text" name="name"></p>
<p>タイトル:<br>
<input type="text" name="name"></p>
<p>作成日:<br>
<input type="text" name="name"></p>
<p>作成者:<br>
<input type="text" name="name"></p>
<p>内容:<br>
<textarea name="comment" cols="30" rows="5"></textarea></p>
<p><input type="submit" value="画像添付"></p>
<p>申請ルート:<br>
<input type="text" name="name"></p>
<p><input type="submit" value="申請"></p>
<a href = home><input type="submit" value="戻る"></a>
@endsection