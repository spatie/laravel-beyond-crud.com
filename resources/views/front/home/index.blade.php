@extends('front.layouts.master', ['inversNav' => true])

@section('title', 'Learn to create Laravel packages')

@section('description', 'The Laravel Package training video course is the best way to learn how to create PHP and Laravel packages. A premium video course by Spatie.')

@section('content')
    @include('front.partials.background')

    <img alt="dripping paint" loading="lazy" style="top:50rem; width:75%; opacity: 0.1" class="absolute right-0 h-auto" src="/images/paint-purple.jpg">

    <main class="z-20 shadow-xl">
            <section class="layout-col">
                @include('front.home.partials.intro')

                <div class="mx-auto grid w-full max-w-lg z-10 shadow-2xl rounded | md:max-w-none">
                    @include('front.home.partials.priceCard')
                </div>
            </section>

        <div id="toc" class="py-24">
            <section class="layout-col">
                @include('front.home.partials.toc')
            </section>
        </div>

        @include('front.home.partials.cta')


        <div class="pb-24 bg-blue-50">
            <div id="testimonials" class="mb-24">
                <img alt="background pattern" loading="lazy" style="opacity: 0.075" class="absolute inset-0 w-full h-full" src="/images/instructor.png">           

                @include('front.home.partials.testimonials')
            </div>

            <section class="layout-col">
                @include('front.home.partials.instructor')
            </section>
        </div>


    </main>

@endsection
