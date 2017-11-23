@extends('main')

@section('content')

    {{--{{dd($article)}}--}}
    <div class="row">
        <div class="box">
            <div class="col-lg-12">

                <hr>
                <h2 class="text-center">{{$article->content}}
                    <br>
                    <small>{{$article->created_at}}</small>
                </h2>
                <hr>
                <img alt="" src="" id="imgInArticle">
                {{$article->content}}
                <hr>

            </div>
        </div>
    </div>

@endsection
