@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>
    
    @if (count($tasks) > 0)
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>ステータス</th>
                <th>タスク</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <th>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</th>
                <th>{{ $task->status }}</th>
                <th>{{ $task->content }}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
    
     {!! link_to_route('tasks.create', '新規タスクの作成', null, ['class' => 'btn btn-primary']) !!}

@endsection
