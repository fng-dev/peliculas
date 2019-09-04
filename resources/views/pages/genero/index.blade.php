@extends('template.index')


@section('content')


<movie-list url="{{$url}}" genero="{{ucfirst($genero)}}"></movie-list>
@endsection
