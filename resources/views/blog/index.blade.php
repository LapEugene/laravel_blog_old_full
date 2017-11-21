@extends('main')

@section('content')

    @foreach($articles as $article)
        <article>
            <h2>{{$article->content}}</h2>
        </article>
    @endforeach

