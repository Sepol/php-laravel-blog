@extends('layout')

@section('content')

    <div class="container">
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">I present to you a blog written on Laravel</h1>
                <p class="lead my-3">Представляю вам блог написанный на Laravel</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="container text-center"><p>Общее кол-во новостей: {{$count_articles}}</p></div>
        <div class="row mb-2">

            @foreach($articles as $article)

                <div class="col-md-6">
                    <div class="card flex-md-row mb-4 box-shadow h-md-150">
                        <div class="card-body d-flex flex-column align-items-start">
                            <h3 class="mb-0">
                                <a class="text-dark"
                                   href="{{route('admin.article.edit', $article)}}">{{$article->title}}</a>
                            </h3>
                            <p class="card-text mb-auto">{{$article->description_short}}...</p>
                            <a href="{{route('admin.article.edit', $article)}}">Читать продолжение...</a>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>


    <div class="container">
        <table class="table">
            <tfoot>
            <td>
                <ul class="float-right">
                    {{$articles->links()}}
                </ul>
            </td>
            </tfoot>
        </table>
    </div>

@endsection

