@extends('layouts.menuber')

@section('title', "回覧板_内容確認")
@section('content')

<div class="col-md-9 mx-auto">
@if(session('err_msg'))
<p class="text-danger">{{ session('err_mag') }}</p>
@endif
<div class="col-md-8 mx-auto">
<h2>{{ $article->title}}</h2>
    <div class= create_main >
        <div class="form-row">
            <div class="form-group col-6">
                <label class="col-sm-8 control-label">作成日</label>
                <div class="col-sm-11">
                    <input type="text" name="date" class="form-control" value="{{ $article->date }}" readonly/>
                </div>
            </div>
            <div class="form-group col-6">
                <label class="col-sm-8 control-label">作成者</label>
                <div class="col-sm-11">
                    <input type="text" name="name" class="form-control" value="{{ $article->name }}" readonly/>
                </div>
            </div>
        </div>
        <label class="col-md-6 control-label">内容</label>
        <div class="col-md-12">
            <textarea name="contents" class="form-control" rows="10" readonly>{{ $article->contents }}</textarea>
        </div>
        <div class="image">
            @if ($article->image_path)
                <img src="{{ $article->image_path }}">
            @endif
        </div>
        <div class=return><a href = home><input type="submit" value="戻る"></a></div>
    </div>
</div>
</div>
@endsection