@extends('layouts.menuber')

@section('title', "回覧板_内容確認")
@section('content')
<?php
 $name = $_POST['name'];
 echo $name;
?>
<h1>回覧板内容確認画面</h1>
<p>タイトル:<br>
　<input type="text" name="name"></p>
<p>作成日:<br>
　<input type="text" name="name"></p>
<p>作成者:<br>
　<input type="text" name="name"></p>
<p>内容:<br>
　<textarea name="comment" cols="30" rows="5"></textarea></p>
<p>画像添付</p>
<p><input type="submit" value="削除"></p>
<p><input type="submit" value="戻る"></p>

@endsection