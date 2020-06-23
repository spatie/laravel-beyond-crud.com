@extends('front.layouts.master', ['inversNav' => true])

@section('title', 'Building larger-than-average web applications')

@section('description', 'Building larger-than-average web applications by Brent Roose. An ebook and premium video course by Spatie.')

@section('content')


<div class="mt-16">
    <nav class="z-20 sticky top-0 overflow-hidden pb-8">
        <div class="px-8 bg-red-100">
            <div class="max-w-2xl mx-auto h-24 flex items-center justify-between">
                <span class="flex items-center uppercase text-sm font-semibold tracking-wider leading-none">
                    <i class="fab fa-laravel text-red-500 text-sm mr-2"></i> Laravel Beyond Crud
                </span>
                <button class="px-3 h-8 bg-red-300 text-gray-800 uppercase text-sm font-bold tracking-wider leading-none">
                    Buy course
                </button>
            </div>
        </div>
    </nav>

    <nav class="absolute top-0 w-full z-20 px-8 pointer-events-none">
        <div class="max-w-2xl mx-auto h-24 flex items-center justify-between">
            <span class="z-20 w-1/2 h-8 inline-flex items-center text-spatie-500 bg-red-100">
                @include('shared.partials.logo')
                <span class="px-3 uppercase text-sm tracking-wider text-spatie-500 font-semibold">Presents</span>
            </span>
        </div>
    </nav>

    <header class="pt-8 pb-16 -mt-48">
        <div class="absolute inset-0 w-full">
            <img class="absolute w-full h-full object-cover object-bottom" src="/images/painting.jpg">
            <div class="absolute inset-0" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0), rgba(0,0,0,.3))"></div>
        </div>

        <div class="px-8">
            <div class="mt-48 max-w-2xl mx-auto text-red-100">
                <h1 class="text-5xl uppercase font-bold leading-tight tracking-wider">
                    Laravel<br>
                    Beyond CRUD
                </h1>
                <p class="mt-8 font-semibold text-2xl">
                    Building larger-than-average web applications
                </p>
                <p class="text-2xl">
                    A course by Brent Roose
                </p>
            </div>
        </div> 
    </header>

    <main class="bg-white">
        <section class="px-8">
            <div class="max-w-2xl mx-auto flex">
                <div class="z-30 fix-z -mt-6 flex-grow w-1/2 shadow-2xl bg-white">
                    <div class="bg-yellow-500 h-6"></div>
                    <div class="border-l border-r border-b border-gray-200">    
                        <div class="text-center py-12 leading-none">
                            <div class="font-semibold text-2xl">
                                Videos & Ebook
                                <span class="absolute bottom-full mb-2 left-0 right-0 text-center text-green-500 uppercase text-xs tracking-widest">Complete bundle</span>
                            </div>
                            <div class="flex justify-center mt-3">
                                <div>
                                    <sup class="text-gray-500 text-3xl">$</sup><span class="font-bold text-5xl">79</span>
                                    <span class="absolute right-full mr-4 top-0 mt-2 text-green-500">
                                        <sup class="text-gray-500 text-xs">$</sup><span class="text-gray-500 line-through">129</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="text-center z-10 -mb-4">
                            <button class="px-3 h-8 bg-yellow-500 text-gray-800 uppercase text-base font-bold tracking-wider leading-none">
                                Buy bundle
                            </button>
                        </div>
                        <div class="pt-12 pb-10 px-6 flex justify-center bg-gray-100">
                            <ul class="pb-3">
                                <li><i class="fas fa-check text-xs text-green-500"></i> 4 hours of video</li>
                                <li><i class="fas fa-check text-xs text-green-500"></i> 172 pages of premium content</li>
                                <li><i class="fas fa-check text-xs text-green-500"></i> Code samples and cases</li>
                                <li><i class="fas fa-check text-xs text-green-500"></i> All beautifully designed</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="z-20 fix-z -mt-3 flex-none bg-white">
                    <div class="bg-green-500 h-3"></div>
                    <div class="border-b border-r border-b border-gray-200">    
                        <div class="text-center py-12 leading-none">
                            <div class="font-semibold text-2xl">
                            Ebook
                            </div>
                            <div class="flex justify-center mt-3">
                                <div>
                                    <sup class="text-gray-500 text-3xl">$</sup><span class="font-bold text-5xl">49</span>
                                </div>
                            </div>
                        </div>
                        <div class="text-center z-10 -mb-4">
                            <button class="px-3 h-8 bg-gray-300 text-gray-800 uppercase text-base font-bold tracking-wider leading-none">
                                Buy bundle
                            </button>
                        </div>
                        <div class="pt-12 pb-10 px-6 flex justify-center bg-gray-200">
                            <ul>
                                <li><i class="fas fa-check text-xs text-green-500"></i> 4 hours of video</li>
                                <li><i class="fas fa-check text-xs text-green-500"></i> 172 pages of premium content</li>
                                <li><i class="fas fa-check text-xs text-green-500"></i> Code samples and cases</li>
                                <li><i class="fas fa-check text-xs text-green-500"></i> All beautifully designed</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-16 py-16">
            <div class="absolute inset-0">
                <div class="w-full sm:max-w-2xl h-full absolute right-0 bg-red-200">
                </div>
            </div>
            <div class="pr-8 sm:px-8">
                <div class="max-w-2xl mx-auto pl-16 text-2xl">
                    <blockquote class="font-semibold">
                        During al these years we’ve built Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dignissim arcu. Curabitur accumsan placerat efficitur. Praesent quis semper mi. Pellentesque in mauris quis dolor molestie maximus et in purus.
                    </blockquote>
                    <p class="mt-6">
                        Brent Roose, author
                    </p>
                    <span class="absolute w-4 h-full bg-red-500 top-0 left-0"></span>
                <div>
            <div>
        </section>

        <section class="px-8 pt-16 overflow-hidden">
            <div class="max-w-2xl mx-auto flex">
                <div class="ml-auto w-1/2 pl-8">
                    <h2 class="font-bold text-4xl">What's inside?</h2>
                </div>
            </div>

            <div class="max-w-2xl mx-auto my-16 py-16 flex flex-wrap">
                <div class="w-screen h-full absolute top-0 right-0 bg-gray-200">
                </div>
                <div class="w-1/2 pr-8">
                    <div class="h-full">
                        <img src="/images/cover.jpg" class="absolute z-30 fix-z left-0 bottom-0 w-full shadow-2xl"/>
                    </div>
                </div>
                <div class="w-1/2 pl-8">
                    <h3 class="mb-6 font-semibold uppercase tracking-wider text-xl">Ebook</h3>
                    <ul class="">
                        <li><i class="fas fa-check text-xs text-green-500"></i> 4 hours of video</li>
                        <li><i class="fas fa-check text-xs text-green-500"></i> 172 pages of premium content</li>
                        <li><i class="fas fa-check text-xs text-green-500"></i> Code samples and cases</li>
                        <li><i class="fas fa-check text-xs text-green-500"></i> All beautifully designed</li>
                    </ul>
                </div>
                <div class="mt-12 w-1/2 pr-8">
                    <div class="w-full h-0 bg-gray-800" style="padding-bottom:56%">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <button class="text-white uppercase tracking-widest text-xs">
                                View example <i class="ml-2 fas fa-play"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="mt-12 w-1/2 pl-8">
                    <h3 class="mb-6 font-semibold uppercase tracking-wider text-xl">Videos</h3>
                    <ul class="">
                        <li><i class="fas fa-check text-xs text-green-500"></i> 4 hours of video</li>
                        <li><i class="fas fa-check text-xs text-green-500"></i> 172 pages of premium content</li>
                        <li><i class="fas fa-check text-xs text-green-500"></i> Code samples and cases</li>
                        <li><i class="fas fa-check text-xs text-green-500"></i> All beautifully designed</li>
                    </ul>
                </div>
            </div>
        </section>

        <div class="overflow-hidden">
            <div class="z-10 absolute top-0 bottom-0 left-0 w-full blend-multiply">
                <section class="h-full px-8">
                    <div class="h-full max-w-2xl mx-auto flex justify-start">
                        <div class="w-1/3 pr-8">
                            <img style="right:2rem" class="absolute w-screen max-w-none h-full object-cover" src="/images/painting.jpg">
                        </div>
                    <div>
                </section>
            </div>

            <section class="px-8 pb-16">
                <div class="max-w-2xl mx-auto flex justify-end">
                    <div class="w-2/3 pl-8">
                        <h2 class="font-bold text-4xl mb-16 mt-2">About the author</h2>

                        <p class="text-lg font-semibold leading-relaxed">
                            Brent is al these years we’ve built Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dignissim arcu. Curabitur accumsan placerat efficitur. Praesent quis semper mi. Pellentesque in mauris quis dolor molestie maximus et in purus. Pellentesque accumsan quam sem, eget volutpat dolor pellentesque nec. 
                        </p>
                    </div>
                </div>
            </section>

            <section class="px-8 py-16 bg-red-500 text-red-100 overflow-hidden">
                <div class="max-w-2xl mx-auto flex justify-end">
                    <div class="w-2/3 pl-8">
                        <h2 class="font-bold text-4xl mb-16 mt-2">What others say</h2>

                        <p class="text-lg font-semibold leading-relaxed">
                            Brent is al these years we’ve built Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dignissim arcu. Curabitur accumsan placerat efficitur. Praesent quis semper mi. Pellentesque in mauris quis dolor molestie maximus et in purus. Pellentesque accumsan quam sem, eget volutpat dolor pellentesque nec. 
                        </p>
                    </div>
                </div>
            </section>
        </div>

       
    </main>
</div>
@endsection
