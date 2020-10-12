@extends('layouts.menuber')

@section('title', "スケジュール_編集")
@section('content')
<h1>スケジュール編集画面</h1>
<style>
label {
    display: block;
    font: 1rem 'Fira Sans', sans-serif;
}

input,
label {
    margin: .4rem 0;
}
</style>
<p>分類:<br>
<input type="text" name="name"></p>
<p>タイトル:<br>
<input type="text" name="name"></p>
<label for="start">開始日時:</label>
<input type="date" id="start" name="trip-start"
       value=""
       min="2020-10-01" max="2021-12-31">
<label for="start">終了日時:</label>
<input type="date" id="start" name="trip-start"
       value=""
       min="2020-10-01" max="2021-12-31">
<p>内容:<br>
<textarea name="comment" cols="30" rows="5"></textarea></p>
<p><input type="submit" value="登録"></p>
<p><input type="submit" value="削除"></p>
@endsection