@extends('layouts.app')

@section('content')
    @foreach ($articles as $article)
        <h2>{{ $article->name }}</h2>
        <div>{{ $article->body }}</div>
    @endforeach
    <h1>Рейтинг</h1>
    <div>
        <table>
            <thead>
            <tr>
                <td>Название</td>
                <td>Текст</td>
            </tr>
            </thead>
            <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{$article->name}}</td>
                    <td>{{$article->body}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
@endsection
