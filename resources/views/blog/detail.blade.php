@extends('main')

@section('content')

    {{--{{dd($article)}}--}}
    <div class="row">
        <div class="box">
            <div class="col-lg-12">

                <hr>
                <h2 class="text-center">{{$article->name}}
                    <br>
                    <small>{{$article->created_at}}</small>
                </h2>
                <hr>

                <button id="search" class="btn btn-default btn-lg pull-left" data-string="{{$article->name}}">
                    Search image
                </button>
                <div id="searchingImg" class="pull-left">
                    <img src="" alt="" width="100" id="searchedImg">
                </div>
                <button id="insert" class="btn btn-default btn-lg">Insert image</button>
                <br>
                <hr>
                <img alt="" src="" id="imgInArticle" class="pull-left">
                <p>{!! $article->content !!}</p>
                <hr>
            </div>
        </div>
    </div>

@endsection
