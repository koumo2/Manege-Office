@extends('layouts.menuber')

@section('title', "回覧板_新規作成")
@section('content')
<h1>回覧板新規作成画面</h1>

<form medhod="post" action = "content.blade.php">
<p>タイトル:<br>
<input type="text" name="title"></p>
<p>作成日:<br>
<input type="text" name="date"></p>
<p>作成者:<br>
<input type="text" name="datea"></p>
<p>内容:<br>
<textarea name="comment" cols="30" rows="5"></textarea></p>
<p><input type="submit" value="画像添付"></p>
<p><input type="submit" value="投稿"></p>
</form>
<a href = home><input type="submit" value="戻る"></a>
@endsection