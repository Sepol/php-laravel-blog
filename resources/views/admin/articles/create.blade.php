@extends('layout')

@section('content')

    <form action="{{route('admin.article.store')}}" class="form-horizontal" method="post">
        {{ csrf_field() }}

        {{-- Form iclude --}}
        @include('admin.articles.partials.form')
        <input type="hidden" name="created_by" value="{{Auth::id()}}">
    </form>

@endsection
