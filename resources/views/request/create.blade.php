@extends('layouts.menuber')

@section('title', "書類申請_作成")
@section('content')

<div class="col-md-8 mx-auto">
  <h2>書類申請作成画面</h2>
  <div class = create_main>
          <form method="POST" action="{{ route('article_store') }}" onSubmit="return checkSubmit()">
          @csrf
          <!-- 分類の入力 -->
          <div class="form-group">
            <label class="col-sm-8 control-label">
                分類
                <span class="label label-danger">
                  <font color="red">
                    ※必須
                  </font>
                </span>
              </label>
            <div class="col-sm-12">
              <input type="text" name="title" class="form-control" placeholder="分類" value="{{ old('genru') }}" />
              @if ($errors->has('genru'))
                <div class="text-danger">
                  {{ $errors->first('genru') }}
                </div>
              @endif
            </div>
            <!-- タイトルの入力 -->
            <label class="col-sm-8 control-label">
              タイトル
              <span class="label label-danger">
                <font color="red">
                  ※必須
                </font>
              </span>
            </label>
              <div class="col-sm-12">
                <input type="text" name="title" class="form-control" placeholder="タイトル" value="{{ old('title') }}" />
                @if ($errors->has('title'))
                  <div class="text-danger">
                    {{ $errors->first('title') }}
                  </div>
                @endif
              </div>
          </div>
            <!-- 作成日を自動取得 -->
            <input type="hidden" name="date" class="form-control"
              value="
              <?php $day = date("Y-m-d H:i:s");echo $day;?>
              ">
            <!-- ログイン者名を自動取得 -->
            <input type="hidden" name="name" class="form-control" value="{{Auth::user()->name}}" />
            <!-- 内容の入力 -->
            <div class="form-group">
              <label class="col-md-6 control-label">
                内容
                <span class="label label-danger">
                  <font color="red">
                    ※必須
                  </font>
                </span>
              </label>
                <div class="col-md-12">
                  <textarea name="contents" class="form-control" rows="10" placeholder="内容" value="{{ old('contents') }}" ></textarea>
                  @if ($errors->has('contents'))
                    <div class="text-danger">
                      {{ $errors->first('contents') }}
                    </div>
                  @endif
                </div>
            </div>
            <!-- 承認者の入力 -->
            <label class="col-sm-8 control-label">
              承認者
              <span class="label label-danger">
                <font color="red">
                  ※必須
                </font>
              </span>
            </label>
              <div class="col-sm-12">
                <input type="text" name="title" class="form-control" placeholder="承認者" value="{{ old('approval') }}" />
                @if ($errors->has('approval'))
                  <div class="text-danger">
                    {{ $errors->first('approval') }}
                  </div>
                @endif
              </div>
            <!-- 申請ボタン-->
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">
                  申請
                </button>
              </div>
            </div>
            {{ csrf_field() }}
          </form>
        <div class=return>
          <a href = home><input type="submit" value="戻る">
          </a>
        </div>
  </div>
</div>

@endsection