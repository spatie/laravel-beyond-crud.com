@extends('front.layouts.master', ['inversNav' => true])

@section('title', 'Building larger-than-average web applications')

@section('description', 'Building larger-than-average web applications by Brent Roose. An ebook and premium video course by Spatie.')

@section('content')


    <header class="py-16">
        <div class="absolute inset-0 w-full">
            <img class="absolute w-full h-full object-cover object-bottom" src="/images/painting.jpg">
            <div class="absolute inset-0" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0), rgba(0,0,0,.3))"></div>
        </div>

        <div class="z-10 px-8 py-8 bg-red-100">
            <div class="max-w-2xl mx-auto flex items-center justify-between">
                <span class="inline-flex items-center  h-8 text-spatie-500">
                    @include('shared.partials.logo')
                    <span class="px-3 uppercase text-sm tracking-wider text-spatie-500 font-semibold">Presents</span>
                </span>
                <button class="px-3 h-8 bg-red-300 text-gray-800 uppercase text-sm font-bold tracking-wider leading-none">
                    Buy course
                </button>
            </div>
        </div>
        
        <div class="mt-32 max-w-2xl mx-auto text-red-100">
            <h1 class="text-5xl uppercase font-bold leading-tight tracking-wider">
                Laravel<br>
                Beyond CRUD
            </h1>
            <p class="mt-8 font-semibold text-xl">
                Building larger-than-average web applications
            </p>
            <p class="text-xl">
                A course by Brent Roose
            </p>
        </div>
    </header>

    <main class="mt-32">
    </main>

@endsection
