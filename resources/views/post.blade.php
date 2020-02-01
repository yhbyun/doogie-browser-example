@extends('layouts.default')

@section('content')
    <header class="lg:absolute left-0 top-32 text-center w-full flex items-center justify-center">
        <h1 class="uppercase text-lg bg-aqua px-2 shadow lg:h-10 leading-relaxed">
            @if ($prev)
                <a href="/posts/{{ $prev->id }}" class="hover:text-blue"><<<</a>
                <keyboard-link url="/posts/{{ $prev->id }}" :code="37"></keyboard-link>
            @else
                <a href="javascript:void(0)" class="opacity-25 cursor-text"><<<</a>
            @endif
                {{ $post->title }}
            @if ($next)
                <a href="/posts/{{ $next->id }}" class="hover:text-blue">>>></a>
                <keyboard-link url="/posts/{{ $next->id }}" :code="39"></keyboard-link>
            @else
                <a href="javascript:void(0)" class="opacity-25 cursor-text">>>></a>
            @endif
        </h1>
    </header>

    <div class="content pt-8">
        {{ $post->created_at }}...{{ $post->content }}
    </div>
@endsection
