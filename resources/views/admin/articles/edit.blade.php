@extends('layout')

@section('content')

    <form action="{{route('admin.article.update', $article)}}" class="form-horizontal" method="post">
        <input type="hidden" name="_method" value="put">
        {{ csrf_field() }}

        {{-- Form iclude --}}
        @include('admin.articles.partials.form')
        <input type="hidden" name="modified_by" value="{{Auth::id()}}">
    </form>

@endsection
