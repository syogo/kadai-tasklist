@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>
    
     {!! link_to_route('tasks.create', 'タスクを作成') !!}
    
    @if (count($tasks) > 0)
    <ul>
        @foreach ($tasks as $task)
        <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->status }} > {{ $task->content }}</li>
        @endforeach
    </ul>
    @endif

@endsection
