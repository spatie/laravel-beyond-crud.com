@extends('front.layouts.master')

@section('content')

<main class="z-10 py-16 bg-white shadow-xl">    
    <section class="layout-col">
        <div class="mx-auto max-w-3xl">
            <div class="markup markup-links markup-lists-alt">
                
                @if(flash()->message)
                    <div class="mb-12 alert {{ flash()->class }}">
                        {{ flash()->message }}
                    </div>
                @endif

                @yield('article')
            </div>
        </div>
    </section>
</main>
@endsection
