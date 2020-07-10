@extends('front.layouts.master', ['inversNav' => true])

@section('title', 'Building larger-than-average web applications')

@section('description', 'Building larger-than-average web applications by Brent Roose. An ebook and premium video course by Spatie.')

@section('content')


<div class="mt-16 mx-auto max-w-4xl">

    @include('partials.newsletter-feedback')

    <header class="z-20 sticky top-0 overflow-hidden pb-8">
        <div class="px-8 bg-red-100 shadow-nav">
            <div class="max-w-2xl mx-auto h-24 flex items-center justify-between">
                <span class="flex items-center uppercase text-sm font-display font-semibold tracking-wider leading-none">
                    <img class="h-auto w-4 mr-3" src="/images/logo.svg" alt="logo">
                    Laravel Beyond CRUD
                </span>
                {{--
                <button class="px-3 h-8 bg-gray-300 hover:bg-gray-400 text-gray-800 uppercase text-sm font-display font-bold tracking-wider leading-none">
                    Buy course
                </button>
                --}}
            </div>
        </div>
    </header>

    <nav class="absolute top-0 w-full fix-z z-20 px-8 pointer-events-none">
        <div class="max-w-2xl mx-auto h-24 flex items-center justify-between">
            <span class="z-20 w-full h-8 inline-flex items-center text-spatie-500 bg-red-100">
                @include('partials.logo')
                <span class="px-3 uppercase text-sm tracking-wider text-gray-500 font-display font-semibold">Presents…</span>
            </span>
        </div>
    </nav>

    <main class="bg-white">
        <div class="pt-8 pb-16 -mt-48">
            <div class="absolute inset-0 w-full">
                <img class="absolute w-full h-full object-cover object-bottom bg-green-600" srcset="/images/painting-2400.jpg 2400w,
                        /images/painting-1600.jpg 1600w,
                        /images/painting-800.jpg 800w" sizes="100vw" alt="Abstract painting" src="/images/painting-2400.jpg">
                <div class="absolute inset-0" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0), rgba(0,0,0,.5))"></div>
            </div>

            <div class="px-8">
                <div class="mt-48 md:mt-64 max-w-2xl mx-auto text-red-100 pointer-events-none">
                    <h1 class="text-5xl uppercase font-display font-bold leading-tight tracking-wider">
                        Laravel<br>
                        Beyond CRUD
                    </h1>
                    <p class="mt-2 mb-8 font-display font-semibold text-2xl leading-snug max-w-md">
                        Learn how to build larger-than-average Laravel applications
                        and maintain them for years to come.
                    </p>
                </div>

                <div class="xs:absolute bottom-0 right-0 mx-auto mb-4 w-2/3 sm:-mr-4 md:-mr-8 lg:-mr-12 xl:-mr-16 xs:w-1/2" x-data="{ open: false }">
                    <div class="w-full bg-gray-800 group">
                        <img class="w-full opacity-75 group-hover:opacity-100 transition-opacity duration-300" srcset="/images/intro-2400.jpg 2400w,
                        /images/intro-1600.jpg 1600w,
                        /images/intro-800.jpg 800w" sizes="33vw" alt="Video still" src="/images/intro-2400.jpg">
                        <button class="absolute inset-0 w-full flex items-center justify-center" @click="open = true">
                            <div class="py-2 px-3 font-display text-gray-900 bg-yellow-500 uppercase tracking-widest text-xs font-bold">
                                Watch intro <i class="ml-2 fas fa-play"></i>
                            </div>
                        </button>
                        <span class="absolute w-full h-4 bg-gray-900 bottom-0 right-0 opacity-50"></span>
                    </div>

                    <template x-if="open">
                        <div style="background-color:rgba(0,0,0,0.75)" class="fixed inset-0 p-8 lg:p-16 z-50 fix-z flex items-center justify-center" @keydown.window.escape="open = false">
                            <button class="absolute top-0 right-0 m-6 leading-none text-yellow-500 text-3xl">&times;</button>
                            <iframe src="https://player.vimeo.com/video/434969839?autoplay=1" class="w-full h-full" frameborder="0" allow="autoplay; fullscreen" allowfullscreen @click.away="open = false">
                            </iframe>
                        </div>
                    </template>
                </div>
            </div>
        </div>

        <section class="z-30 fix-z px-8 flex justify-center">
            <div class="max-w-md mx-auto xs:flex xs:w-full">
                <div class="-mt-6 -mx-4 flex-grow shadow-2xl">
                    <div class="bg-yellow-500 h-6"></div>
                    <div class="border-l border-r border-b border-gray-200 bg-white">
                        <div class="text-center py-12 px-12">
                            <h1 class="mb-12 font-bold font-display text-3xl text-center leading-tight">
                                Sit in the front row when we launch this course!
                                <div class="text-center">
                                    <span class="px-3 py-2 bg-red-100 text-gray-900 text-xs uppercase tracking-wider">Coming&nbsp;September</span>
                                </div>
                            </h1>
                            @include('partials.newsletter', ['intro' => ''])
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
            <div class="pr-8 xs:px-8">
                <div class="max-w-2xl mx-auto pl-16 text-2xl">
                    <blockquote class="font-display font-semibold">
                        You'll face a unique set of problems while building larger-than-average applications. In this course, I'll share our thought process and solutions. This way, you'll be able to solve the problems unique to your team and project.
                        <p class="mt-4">
                            Join me as I start building a Laravel project from scratch. I'm sure you can pick up some new techniques, regardless of the size of projects you're working on.
                        </p>
                    </blockquote>
                    <p class="font-display mt-6">
                        Brent Roose, author
                    </p>
                    <span class="absolute w-4 h-full bg-red-500 top-0 left-0"></span>
                </div>
            </div>
        </section>

        <section class="px-8 pt-16 overflow-hidden">
            <div class="max-w-2xl mx-auto flex">
                <div class="xs:ml-auto xs:w-1/2 xs:pl-8">
                    <h2 class="mb-2 font-display font-bold text-4xl">What's inside?</h2>
                    <p class="font-display text-lg">
                        The knowledge in this course is built from the years of experience our team has building large, robust applications.
                    </p>
                </div>
            </div>

            <div class="max-w-2xl mx-auto my-16 py-16 xs:flex xs:flex-wrap">
                <div class="w-screen h-full absolute top-0 right-0 -mr-8 bg-gray-200">
                </div>
                <div class="mb-12 xs:mb-0 w-2/3 xs:w-1/2 xs:pr-8" x-data="{ spread: false }">
                    <div class="group h-full xs:-ml-4">
                        <div class="bg-gray-900 xs:z-30 xs:fix-z xs:absolute left-0 bottom-0 w-full shadow-2xl">
                            <img srcset="/images/cover-2000.jpg 2000w,
                                    /images/cover-1000.jpg 1000w,
                                    /images/cover-500.jpg 500w" sizes="(max-width: 420px) 75vw,
                                    33vw" alt="Ebook cover" src="/images/cover-2000.jpg" 
                                    class="w-full opacity-100 group-hover:opacity-75 transition-opacity duration-300">
                            <span class="absolute w-4 h-full bg-green-600 top-0 left-0"></span>
                            <div class="absolute inset-0 w-full flex items-end justify-end cursor-pointer" @click="spread = true">
                                <button class="-mb-4 -mr-4 py-2 px-3 font-display text-gray-900 bg-yellow-500 uppercase tracking-widest text-xs font-bold">
                                    View sample page
                                </button>
                            </div>
                        </div>
                    </div>

                    <template x-if="spread">
                        <div style="background-color:rgba(0,0,0,0.75)" class="fixed inset-0 p-8 lg:p-16 z-50 fix-z flex items-center justify-center" @keydown.window.escape="spread = false">
                            <button class="absolute top-0 right-0 m-6 leading-none text-yellow-500 text-3xl">&times;</button>
                            <div class="w-full h-full flex items-center justify-center">
                                <img src="/images/book-spread.jpg" class="max-h-full max-w-full object-contain" @click.away="spread = false">
                            </div>
                        </div>
                    </template>
                </div>
                <div class="xs:w-1/2 xs:pl-8">
                    <h3 class="mb-4 font-display font-semibold uppercase tracking-wider text-xl">Ebook</h3>
                    <p class="sm:text-sm">The ebook is <strong class="font-semibold">your guide for building large maintainable Laravel applications</strong>. Along the way, you'll be introduced to concepts like DDD and hexagonal design, all while still embracing Laravel's focus on elegant code. The book is beautifully designed by Sebastian De Deyne.
                    </p>
                </div>
                <div class="group mt-12 w-2/3 xs:w-1/2 xs:pr-8" x-data="{ video: false }">
                    <div class="w-full bg-gray-900">
                        <img class="w-full opacity-100 group-hover:opacity-75 transition-opacity duration-300" src="/images/example-video.jpg" alt="Video still"/>
                        <span class="absolute w-full h-4 bg-gray-900 bottom-0 left-0 opacity-25"></span>
                        <div class="absolute inset-0 w-full flex items-end justify-end cursor-pointer" @click="video = true">
                            <button class="-mb-4 -mr-4  py-2 px-3 font-display text-gray-900 bg-yellow-500 uppercase tracking-widest text-xs font-bold">
                                Watch clip <i class="ml-1 fas fa-play"></i>
                            </button>
                        </div>
                    </div>

                    <template x-if="video">
                        <div style="background-color:rgba(0,0,0,0.75)" class="fixed inset-0 p-8 lg:p-16 z-50 fix-z flex items-center justify-center" @keydown.window.escape="video = false">
                            <button class="absolute top-0 right-0 m-6 leading-none text-yellow-500 text-3xl">&times;</button>
                            <iframe src="https://player.vimeo.com/video/436401700?autoplay=1" class="w-full h-full" frameborder="0" allow="autoplay; fullscreen" allowfullscreen @click.away="video = false"></iframe>
                        </div>
                    </template>
                </div>
                <div class="mt-12 xs:w-1/2 xs:pl-8 markup-lists-alt">
                    <h3 class="mb-4 font-display font-semibold uppercase tracking-wider text-xl">Videos</h3>
                    <p class="sm:text-sm">
                        During <strong class="font-semibold">2 hours of video</strong> Brent talks you through the content of the book with lots of practical examples and live coding. Serious content, brought in Brent's enthusiastic manner!
                    </p>
                </div>
                <div class="mt-12 w-full markup-lists-alt">
                    <div class="mt-12 pb-12 pl-8 xs:pl-16 xs:pr-8">
                        <span class="absolute w-4 h-full bg-blue-300 top-0 left-0"></span>
                        <h3 class="mb-4 font-display font-semibold uppercase tracking-wider text-xl">We'll cover…</h3>
                        <h4 class="font-display font-semibold text-xl">Domain oriented Laravel</h4>

                        <p class="sm:text-sm mb-4">
                            Most principles in this course are based on best practices in domain driven design, and hexagonal architectures.
                            These proven principles will be our guide throughout building large Laravel applications.
                            Some of the theoretical topics we'll cover include:
                        </p>

                        <ul class="sm:text-sm">
                            <li>The basic idea of domain groups explained</li>
                            <li>Practically applying DDD and hexagonal architecture principles in Laravel projects</li>
                            <li>When to use domains, and when to stick to Laravel's default structure</li>
                            <li>Thinking of "data" and "functionality" as two first-class citizens of your codebase</li>
                            <li>The state pattern to model complex, state-specific, flows</li>
                            <li>The difference between application- and domain code</li>
                            <li>Writing robust code by using the types and static analysis</li>
                        </ul>
                    </div>

                    <div class="pb-12 pl-8 xs:pl-16 xs:pr-8">
                        <span class="absolute w-4 h-full bg-blue-400 top-0 left-0"></span>
                        <h4 class="font-display font-semibold text-xl">In practice</h4>

                        <p class="sm:text-sm mb-4">
                            We're nothing with theory if we can't apply it in practice. This course highly focuses on combining the two:
                            in each episode we'll do live coding, and build a project from the ground up:
                        </p>

                        <ul class="sm:text-sm">
                            <li>Keeping model classes small and clean</li>
                            <li>Structuring complex queries</li>
                            <li>Passing data around in a structured way using Data Transfer Objects</li>
                            <li>How to make code reusable by using actions</li>
                            <li>Improving code clarity by using meaningful names</li>
                            <li>Keep controllers light by using view models</li>
                            <li>Adding behaviour to collections</li>
                            <li>Testing actions, DTOs and model-related classes</li>
                            <li>Using enhanced test factories to seed data for every scenario</li>
                            <li>Using PhpStorm's refactoring tools to manage classes and namespaces</li>
                            <li>Scaffold different types of classes using PhpStorm templates</li>
                        </ul>
                    </div>

                    <div class="pl-8 xs:pl-16 xs:pr-8">
                        <span class="absolute w-4 h-full bg-blue-500 top-0 left-0"></span>
                        <h4 class="font-display font-semibold text-xl">For everyone</h4>

                        <p class="sm:text-sm mb-4">
                            While the main focus of this course lies on larger projects,
                            there are many principles in it that you can apply today, in your own projects;
                            even when they aren't large at all.
                            We've used many of these principles ourselves, also in our smaller projects:
                        </p>

                        <ul class="sm:text-sm">
                            <li>Data transfer objects always have a significant impact, regardless of project size</li>
                            <li>Whatever type of project, you will be dealing with controllers, so view models will improve your workflow</li>
                            <li>Actions are a structured solution for code that would otherwise end up spread across the project</li>
                            <li>Even the smallest MVC app also deals with querying models, understanding Laravel's query builders will be an asset</li>
                            <li>Most principles in this course can be cherry-picked by you to solve your problems. Nothing is set in stone: there are no hard rules, only guidelines</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="">
            <div class="opacity-25 xs:opacity-100 overflow-hidden z-10 absolute top-0 bottom-0 left-0 w-full blend-multiply pointer-events-none">
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

            <section class="px-8 pb-24">
                <div class="max-w-2xl mx-auto flex justify-end">
                    <div class="xs:w-2/3 xs:pl-8">
                        <h2 class="font-display font-bold text-4xl leading-tight  mb-16 mt-2">About the author</h2>

                        <p class="text-lg leading-relaxed">
                            Brent has been working almost exclusivly on large web applications for the past years now. He did lots of self education on topics like DDD and event sourcing.
                        </p>
                        <p class="mt-4 text-lg leading-relaxed">
                            Doing so, he applied many of the theoretical knowledge to modern day Laravel projects; a method that has paid of: most modern-day Spatie projects follow these practices.
                        </p>
                        <p class="mt-4 text-lg leading-relaxed">
                            Besides his work at Spatie, Brent is also very active in the PHP community, most notably with <a class="text-red-600 hover:text-red-500 underline" href="https://stitcher.io/">his blog</a> where he writes about programming, PHP and the web in general.
                        </p>

                        <div class="mt-6 flex items-center text-lg">
                            <div class="mr-6">
                                <img src="/images/avatar.jpg" class="z-10 w-16 h-16 md:w-24 md:h-24" alt="Avatar">
                                <div class="absolute w-full h-full top-0 left-0 mt-2 ml-2 bg-yellow-400"></div>
                            </div>
                            <div class="leading-tight">
                                <div class="font-display font-semibold">Brent Roose</div>
                                <a class="font-display text-base hover:text-red-500" href="https://twitter.com/brendt_gd">@brendt_gd</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

                {{--
            <section class="px-8 pt-16 bg-red-500 text-red-100 overflow-hidden">
                <div class="max-w-2xl mx-auto flex justify-end">
                    <div class="w-2/3 pl-8 pb-16">
                        <h2 class="font-display font-bold text-4xl leading-tight mb-16 mt-2">What others say</h2>

                        <p class="text-lg leading-relaxed">
                            Testimonials on a course that hasn't been launched yet? What an idea.
                            <br>This section will be updated soon!
                        </p>


                        <div class="mt-4 flex items-center font-display font-semibold text-lg">
                            <div class="mr-4">
                                <img src="/images/avatar.jpg" class="z-10 w-8 h-8 bg-gray-200" alt="Avatar">
                                <div class="absolute w-full h-full top-0 left-0 mt-1 ml-1 bg-gray-800 opacity-25"></div>
                            </div>
                            Client x
                        </div>
                    </div>
                </div>


                <div class="z-10 max-w-2xl mx-auto flex flex-wrap justify-end">
                    <div class="w-2/3 xs:w-3/5 pl-8">
                        <p class="text-sm leading-relaxed">
                            Spatie has lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dignissim arcu. Curabitur accumsan placerat efficitur. Praesent quis semper mi. Pellentesque in mauris quis dolor molestie maximus et in purus. Pellentesque accumsan quam sem, eget volutpat dolor pellentesque nec.
                        </p>

                        <div class="mt-4 flex items-center font-display font-semibold text-lg">
                            <div class="mr-4">
                                <img src="/images/avatar.jpg" class="z-10 w-8 h-8 bg-gray-200" alt="Avatar">
                                <div class="absolute w-full h-full top-0 left-0 mt-1 ml-1 bg-gray-800 opacity-25"></div>
                            </div>
                            Client x
                        </div>
                    </div>
                </div>
            </section>
                --}}

            @include('partials.footer')
        </div>
    </main>


</div>
@endsection
