@extends('layouts.app')

@section('content')
  <div class="container">
    <h2 class="my-5 text-center header-green">タスク登録</h2>

    <div class="row">
      <div class="col-12 col-md-8 mx-auto">
        {{-- バリデーションエラー部分テンプレート --}}
        @include('layouts.errors')

        {!! html()->form('POST', route('todo.store'))->open() !!}

        <div class="my-3">
          {!! html()->text('title')
              ->class('form-control form-control-lg')
              ->placeholder('例）再配達を頼む') !!}
        </div>

        <div class="text-center">
          {!! html()->submit('登録する')->class('btn btn-green px-4') !!}
        </div>

        {!! html()->form()->close() !!}
      </div>
    </div>
  </div>
@endsection