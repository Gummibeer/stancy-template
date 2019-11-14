@extends('master')

@section('title', sprintf('Fehler 404 | %s', config('app.name')))

@section('content')
    {!! $contents !!}
@endsection
