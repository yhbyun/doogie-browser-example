@extends('layouts.default')

@section('content')
    <header class="lg:absolute left-0 top-32 text-center w-full flex items-center justify-center">
        <h1 class="uppercase text-lg bg-aqua px-2 shadow lg:h-10 leading-relaxed">
            {{ config('app.name') }}
        <h1>
    </header>
    <div class="content pt-8">
        @foreach ($posts as $post)
            <div class="my-8 lg:my-2 text-lg">
                {{ $post->created_at }}<span class="hidden lg:inline">...</span><a href="posts/{{ $post->id }}" class="block lg:inline">{{ $post->title }}</a>
            </div>
        @endforeach
    </div>
@endsection
