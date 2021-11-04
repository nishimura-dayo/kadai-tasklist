@extends('layouts.app')

@section('content')
    @if (Auth::check())
        {{ Auth::user()->name }}
    @else
    <div class="text-center">
        <h1 class="mt-5 mb-3">タスク管理アプリ</h1>
        <img src="image/task-list.png" alt="" class="d-block mx-auto mb-4">
        {{-- ユーザ登録ページへのリンク --}}
        {!! link_to_route('signup.get', 'ユーザ登録する', [], ['class' => 'btn btn-lg btn-primary']) !!}
    </div>
    @endif
@endsection