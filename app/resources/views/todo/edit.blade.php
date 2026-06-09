@extends('layouts.app')

@section('content')
  <div class="container">
    <h2 class="my-5 text-center header-green">タスク編集</h2>

    <div class="row">
      <div class="col-12 col-md-8 mx-auto">
        {{-- バリデーションエラー部分テンプレート --}}
        @include('layouts.errors')

        {!! html()->form('PUT', route('todo.update', $todo->id))->open() !!}

        <div class="my-3">
          {!! html()->label('title', 'Title:') !!}
          {!! html()->text('title', $todo->title)
              ->class('form-control')
              ->placeholder('例）牛乳を買う') !!}
        </div>

        <div>
          {!! html()->submit('更新する')->class('btn btn-green px-4') !!}
        </div>

        {!! html()->form()->close() !!}

        {!! html()->form('DELETE', route('todo.destroy', $todo->id))->class('mt-3')->open() !!}
        {!! html()->submit('削除する')->class('btn btn-blue px-4') !!}
        {!! html()->form()->close() !!}
      </div>
    </div>
  </div>
@endsection