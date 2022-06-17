@extends('layouts.index')

@section('content')
    <admin-component>
        <form-component></form-component>
        <files-component :files-prop="{{ $files }}"></files-component>
    </admin-component>
@endsection
