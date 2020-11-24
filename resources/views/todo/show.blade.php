@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-10">
        <h2 class="text-muted py-3">{{ $todo->title }}</h2>
        <table class="table">
            <thead>
            <tr>
                <th>タイトル</th>
                <th>状態</th>
                <th>期限</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $todo->title }}</td>
                <td>{{ \App\Todo::STATUS[$todo->status] }}</td>
                <td>{{ $todo->due_date }}</td>
            </tr>
            </tbody>
        </table>
        @include('parts.button.back')
    </div>
@endsection