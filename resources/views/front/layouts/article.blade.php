@extends('front.layouts.master')

@section('content')

<div class="mt-16 mx-auto max-w-4xl">
    <header class="z-20 sticky top-0 overflow-hidden pb-8">
        <div class="px-8 bg-red-100 shadow-nav">
            <div class="max-w-2xl mx-auto h-24 flex items-center justify-between">
                <a href="/" class="flex items-center uppercase text-sm font-display font-semibold tracking-wider leading-none">
                    <img class="h-auto w-4 mr-3" src="/images/logo.svg" alt="logo">
                    Laravel Beyond Crud
                </a>
                <button class="px-3 h-8 bg-gray-300 hover:bg-gray-400 text-gray-800 uppercase text-sm font-display font-bold tracking-wider leading-none">
                    Buy course
                </button>
            </div>
        </div>
    </header>

    <main class="bg-white">
        <div class="pt-8 pb-16 -mt-48">
            <div class="absolute inset-0 w-full">
                <img class="absolute w-full h-full object-cover object-bottom bg-green-600" srcset="/images/painting-2400.jpg 2400w,
                        /images/painting-1600.jpg 1600w,
                        /images/painting-800.jpg 800w" sizes="100vw" alt="Abstract painting" src="/images/painting-2400.jpg">
                <div class="absolute inset-0" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0), rgba(0,0,0,.5))"></div>
            </div>
        </div>

        <section class="pt-32 px-8 flex justify-center">
            <div class="max-w-2xl mx-auto w-full markup markup-lists-alt markup-links markup-code markup-tables">
                @yield('article')
            </div>
        </section>


        <div class="mt-24">
            <div class="overflow-hidden z-10 absolute top-0 bottom-0 left-0 w-full blend-multiply pointer-events-none">
                <section class="h-full px-8">
                    <div class="h-full max-w-2xl mx-auto flex justify-start">
                        <div class="w-1/3 pr-8">
                            <img style="right:2rem; width:33vw" class="absolute max-w-none h-full object-cover object-right-top" srcset="/images/fragment-800.jpg 800w,
                                    /images/fragment-600.jpg 600w,
                                    /images/fragment-400.jpg 400w" sizes="33vw" alt="Abstract painting" src="/images/fragment-800.jpg">
                        </div>
                        <div>
                </section>
            </div>

            <aside class=" px-8 pt-16 pb-24 text-red-100 bg-red-500 overflow-hidden">
                <div class="z-10 max-w-2xl mx-auto py-16 xs:flex xs:flex-wrap">
                    <div class="z-20 w-screen h-full absolute top-0 left-0 bg-gray-900 opacity-50">
                    </div>
                    <div class="z-30 w-screen h-4 absolute top-0 left-0 bg-gray-900 opacity-25"></div>
                    <div class="z-30 w-full px-8">

                        <h2 class="font-display font-bold text-4xl leading-tight mb-2">Never stop learning!</h2>

                        <p class="text-lg font-display font-semibold text-red-300 leading-relaxed mb-16 ">
                           Other related courses and videos from Spatie
                        </p>

                        <div class="mt-16 flex items-center text-lg">
                            <div class="flex-none mr-8 flex items-center justify-center w-20 h-20 rounded-full bg-red-500 overflow-hidden">
                                <a class="" href="https://laravelpackage.training" target="_blank">
                                    <img src="/images/laravel-package-training.svg" class="z-10 w-10 h-10" alt="Laravel Package Training">
                                </a>
                            </div>
                            <div>
                                <h3 class="uppercase text-lg font-display font-semibold tracking-wider">
                                    Laravel Package Training
                                </h3>
                                <p class="text-sm">
                                    Learn how to create a Laravel package in this 4 hour video course.
                                </p>
                                <p class="text-xs">
                                    <a class="underline text-red-300" href="https://laravelpackage.training" target="_blank">laravelpackge.training</a>
                                </p>
                            </div>
                        </div>

                        <div class="mt-8 flex items-center text-lg">
                            <div class="flex-none mr-8 flex items-center justify-center w-20 h-20 rounded-full bg-green-500 overflow-hidden">
                                <a href="https://mailcoach.app/videos" target="_blank">
                                    <img src="/images/mailcoach.svg" class="z-10 w-10 h-10" alt="Laravel Package Training">
                                </a>
                            </div>
                            <div>
                                <h3 class="uppercase text-lg font-display font-semibold tracking-wider">
                                    Mailcoach
                                </h3>
                                <p class="text-sm">
                                    Mailcoach is –besides a great email marketing tool– also a video course with Laravel insights.
                                </p>
                                <p class="text-xs">
                                    <a class="underline text-red-300" href="https://mailcoach.app/videos" target="_blank">mailcoach.app/videos</a>
                                </p>
                            </div>
                        </div>

                        <div class="mt-8 flex items-center text-lg">
                            <div class="flex-none mr-8 flex items-center justify-center w-20 h-20 rounded-full bg-gray-900 overflow-hidden">
                                <a href="https://spatie.be/videos" target="_blank">
                                    <img src="/images/github.svg" class="z-10 w-10 h-10" alt="Laravel Package Training">
                                </a>
                            </div>
                            <div>
                                <h3 class="uppercase text-lg font-display font-semibold tracking-wider">
                                    Sponsor us on GitHub
                                </h3>
                                <p class="text-sm">
                                    Get early access to our video insights to improve your web development skills.
                                </p>
                                <p class="text-xs">
                                    <a class="underline text-red-300" href="https://spatie.be/videos" target="_blank">spatie.be/videos</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

             <section class="z-30 xs:sticky xs:top-0 xs:fix-z overflow-hidden">
                <div class="px-8 bg-red-100 shadow-lg">
                    <div class="max-w-2xl mx-auto xs:flex items-center justify-between">
                        <ul class="xs:w-1/3 xs:pr-8 py-8 font-display font-semibold text-green-500 text-lg">
                            <li><a href="#" class="underline hover:text-green-600"><i class="mr-2 fas fa-envelope opacity-75"></i>Email us</a></li>
                            <li class="mt-2"><a href="#" class="underline hover:text-green-600"><i class="mr-2 fab fa-twitter opacity-75"></i>Follow us</a></li>
                        </ul>
                        <form class="py-8 xs:w-2/3 xs:pl-8">
                            <p class="text-green-500 font-display font-semibold leading-tight">We'll notify you on updates of this course! </p>
                            <div class="flex mt-2">
                                <input type=email name=email id=email class="px-2 flex-grow bg-gray-200 focus:bg-blue-300 focus:outline-none" type="text">
                                <button class="flex-none px-3 h-8 bg-green-500 hover:bg-green-600 text-white uppercase text-sm font-display font-bold tracking-wider leading-none">
                                    Subscribe
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <small class="block px-8 pt-8 pb-8 bg-red-500 text-red-100 overflow-hidden">
                <div class="max-w-2xl mx-auto flex items-center">
                    <a href="http://spatie.be" class="z-10 h-6 xs:h-8 text-red-600 hover:opacity-75">
                        @include('shared.partials.logo')
                    </a>
                    <a href="{{route('termsOfUse')}}" class="underline ml-auto hover:opacity-75">Terms of Use</a>
                    <a href="{{route('privacy')}}" class="underline ml-4 xs:ml-12 hover:opacity-75">Privacy &amp; Cookie Policy</a>
                </div>
            </small>
        </div>
    </main>
</div>
@endsection
