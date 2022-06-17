@extends('layouts.index')

@section('content')
    <home :files="{{ $files }}"></home>  
@endsection