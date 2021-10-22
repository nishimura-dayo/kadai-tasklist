@extends('layouts.app')

@section('content')

    <h1 class="mb-3">No.<span class="text-danger">{{ $task->id }} </span> タスク詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>

    {{-- タスク編集ページへのリンク --}}
    {!! link_to_route('tasks.edit', 'このタスクを編集する', ['task' => $task->id], ['class' => 'btn btn-light mb-2']) !!}

    {{-- タスク削除フォーム --}}
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection