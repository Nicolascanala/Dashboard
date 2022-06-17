@extends('layouts.index')

@section('content')
    <div
        class="
            mx-auto 
            md:ml-16
            md:mr-0
            p-6
            mb-4
            md:mb-0
            max-w-sm
            rounded-lg
            shadow-md
            bg-gray-800
            dark:border-gray-700
            ">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">
            {{ $file->title }}
        </h5>
    </div>
@endsection
