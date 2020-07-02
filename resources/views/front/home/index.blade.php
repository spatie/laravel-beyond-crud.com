@extends('front.layouts.master', ['inversNav' => true])

@section('title', 'Building larger-than-average web applications')

@section('description', 'Building larger-than-average web applications by Brent Roose. An ebook and premium video course by Spatie.')

@section('content')


<div class="mt-16 mx-auto max-w-4xl">
    <header class="z-20 sticky top-0 overflow-hidden pb-8">
        <div class="px-8 bg-red-100 shadow-nav">
            <div class="max-w-2xl mx-auto h-24 flex items-center justify-between">
                <span class="flex items-center uppercase text-sm font-display font-semibold tracking-wider leading-none">
                    <img class="h-auto w-4 mr-3" src="/images/logo.svg" alt="logo">
                    Laravel Beyond Crud
                </span>
                <button class="px-3 h-8 bg-gray-300 hover:bg-gray-400 text-gray-800 uppercase text-sm font-display font-bold tracking-wider leading-none">
                    Buy course
                </button>
            </div>
        </div>
    </header>

    <nav class="absolute top-0 w-full z-20 px-8 pointer-events-none">
        <div class="max-w-2xl mx-auto h-24 flex items-center justify-between">
            <span class="z-20 w-full h-8 inline-flex items-center text-spatie-500 bg-red-100">
                @include('shared.partials.logo')
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
                <div class="z-10 mt-48 md:mt-64 max-w-2xl mx-auto text-red-100 pointer-events-none">
                    <h1 class="text-5xl uppercase font-display font-bold leading-tight tracking-wider">
                        Laravel<br>
                        Beyond CRUD
                    </h1>
                    <p class="mt-2 font-display font-semibold text-2xl">
                        Building larger-than-average web applications
                    </p>
                    <p class="my-8 text-2xl max-w-md font-display">
                       Learn how to structure and maintain complex Laravel projects in this course from Brent Roose…
                    </p>
                </div>

                <div class="xs:absolute bottom-0 right-0 mx-auto mb-24 w-2/3 sm:-mr-4 md:-mr-8 lg:-mr-12 xl:-mr-16 xs:w-1/2" x-data="{ open: false }">
                    <div class="w-full h-0 bg-gray-800" style="padding-bottom:56%">
                        <button class="absolute inset-0 w-full flex items-center justify-center hover:opacity-75 " @click="open = true">
                            <div class="text-white uppercase tracking-widest text-xs font-display">
                                Watch intro <i class="ml-2 fas fa-play"></i>
                            </div>
                        </button>
                        <span class="absolute w-full h-4 bg-gray-900 bottom-0 right-0"></span>
                    </div>

                    <template x-if="open">
                        <div style="background-color:rgba(0,0,0,0.75)" class="fixed inset-0 p-8 lg:p-16 z-50 fix-z flex items-center justify-center" @keydown.window.escape="open = false">
                            <button class="absolute top-0 right-0 m-6 leading-none text-yellow-500 text-3xl">&times;</button>
                            <div class="w-full">
                                <div class="bg-white rounded-sm aspect-16x9 shadow-xl">
                                    <iframe src="https://player.vimeo.com/video/418813035?autoplay=1" class="absolute inset-0 border-2 border-white rounded-sm" frameborder="0" allow="autoplay; fullscreen" allowfullscreen @click.away="open = false"></iframe>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>

        <section class="px-8 flex justify-center">
            <div class="max-w-2xl mx-auto xs:flex xs:w-full">
                <div class="z-10 xs:z-30 xs:fix-z -mt-6 -mx-4 flex-grow shadow-2xl">
                    <div class="bg-yellow-500 h-6"></div>
                    <div class="border-l border-r border-b border-gray-200 bg-white">
                        <div class="text-center py-12 leading-none">
                            <div class="font-display font-semibold text-2xl">
                                Videos & Ebook
                                <span class="absolute bottom-full mb-2 left-0 right-0 text-center text-green-500 uppercase text-xs tracking-widest">Launch promo!</span>
                            </div>
                            <div class="flex justify-center mt-3">
                                <div class="font-display">
                                    <sup class="text-gray-500 text-3xl">$</sup><span class="font-bold text-5xl">79</span>
                                    <span class="absolute right-full mr-4 top-0 mt-2">
                                        <sup class="text-gray-500 text-xs">$</sup><span class="text-gray-500 line-through">129</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="text-center z-10 -mb-2">
                            <button class="px-3 h-8 bg-yellow-500 hover:bg-yellow-600 text-gray-800 uppercase text-base font-display font-bold tracking-wider leading-none shadow-lg">
                                Buy bundle
                            </button>
                        </div>
                        <div class="pt-12 pb-10 px-12 flex justify-center bg-gray-100">
                            <div>
                                <ul class="pb-3">
                                    <li class="font-semibold"><i class="fas fa-check text-xs text-green-500"></i> 100+ pages of premium content</li>
                                    <li class="font-semibold"><i class="fas fa-check text-xs text-green-500"></i> 2 hours of video</li>
                                    <li><i class="fas fa-check text-xs text-green-500"></i> Example source code download</li>
                                    <li><i class="fas fa-check text-xs text-green-500"></i> All beautifully designed</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="-mt-4 xs:-mx-4 flex-none">
                    <div class="bg-green-500 h-4"></div>
                    <div class="border-b border-r border-l border-gray-200 bg-white shadow-lg">
                        <div class="text-center py-12 leading-none">
                            <div class="font-display font-semibold text-2xl">
                                Ebook
                            </div>
                            <div class="flex justify-center mt-3">
                                <div class="font-display">
                                    <sup class="text-gray-500 text-3xl">$</sup><span class="font-bold text-5xl">49</span>
                                </div>
                            </div>
                        </div>
                        <div class="text-center z-10 -mb-2">
                            <button class="px-3 h-8 bg-gray-300 hover:bg-gray-400 text-gray-800 uppercase text-base font-display font-bold tracking-wider leading-none shadow-lg">
                                Buy ebook
                            </button>
                        </div>
                        <div class="pt-12 pb-10 px-12 flex justify-center bg-gray-200">
                            <ul>
                                <li class="font-semibold"><i class="fas fa-check text-xs text-green-500"></i> 100+ pages of premium content</li>
                                <li><i class="fas fa-check text-xs text-green-500"></i> Example source code download</li>
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
            <div class="pr-8 xs:px-8">
                <div class="max-w-2xl mx-auto pl-16 text-2xl">
                    <blockquote class="font-display font-semibold">
                        The goal of this course is not about learning patterns to quickly solve your problems; I want to teach you to find these solutions yourself, I want to share our thought process with you. </blockquote>
                    <p class="font-display mt-6">
                        Brent Roose, author
                    </p>
                    <span class="absolute w-4 h-full bg-red-500 top-0 left-0"></span>
                    <div>
                        <div>
        </section>

        <section class="px-8 pt-16 overflow-hidden">
            <div class="max-w-2xl mx-auto flex">
                <div class="xs:ml-auto xs:w-1/2 xs:pl-8">
                    <h2 class="font-display font-bold text-4xl">What's inside?</h2>
                </div>
            </div>

            <div class="max-w-2xl mx-auto my-16 py-16 xs:flex xs:flex-wrap">
                <div class="w-screen h-full absolute top-0 right-0 -mr-8 bg-gray-200">
                </div>
                <div class="mb-12 xs:mb-0 w-2/3 xs:w-1/2 xs:pr-8">
                    <div class="h-full xs:-ml-4">
                        <div class="xs:z-30 xs:fix-z xs:absolute left-0 bottom-0 w-full shadow-2xl">
                            <img srcset="/images/cover-2000.jpg 2000w,
                                    /images/cover-1000.jpg 1000w,
                                    /images/cover-500.jpg 500w" sizes="(max-width: 420px) 75vw,
                                    33vw" alt="Ebook cover" src="/images/cover-2000.jpg" class="w-full">
                            <span class="absolute w-4 h-full bg-green-600 top-0 left-0"></span>
                        </div>
                    </div>
                </div>
                <div class="xs:w-1/2 xs:pl-8">
                    <h3 class="mb-6 font-display font-semibold uppercase tracking-wider text-xl">Ebook</h3>
                    This <strong class="font-semibold">100+ pages ebook</strong> guides you from concepts like DDD to scaffolding complexer Laravel applications.
                    Beautifully designed by Seb De Deyne!
                </div>
                <div class="mt-12 w-2/3 xs:w-1/2 xs:pr-8" x-data="{ open: false }">
                    <div class="w-full h-0 bg-gray-800" style="padding-bottom:56%">
                        <button class="absolute inset-0 w-full flex items-center justify-center hover:opacity-75 " @click="open = true">
                            <div class="font-display text-white uppercase tracking-widest text-xs">
                                View example <i class="ml-2 fas fa-play"></i>
                            </div>
                        </button>
                        <span class="absolute w-full h-4 bg-gray-900 bottom-0 left-0"></span>
                    </div>

                    <template x-if="open">
                        <div style="background-color:rgba(0,0,0,0.75)" class="fixed inset-0 p-8 lg:p-16 z-50 fix-z flex items-center justify-center" @keydown.window.escape="open = false">
                            <button class="absolute top-0 right-0 m-6 leading-none text-yellow-500 text-3xl">&times;</button>
                            <div class="w-full">
                                <div class="bg-white rounded-sm aspect-16x9 shadow-xl">
                                    <iframe src="https://player.vimeo.com/video/418813035?autoplay=1" class="absolute inset-0 border-2 border-white rounded-sm" frameborder="0" allow="autoplay; fullscreen" allowfullscreen @click.away="open = false"></iframe>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
                <div class="mt-12 xs:w-1/2 xs:pl-8">
                    <h3 class="mb-6 font-display font-semibold uppercase tracking-wider text-xl">Videos</h3>
                    <p>
                        During these <strong class="font-semibold">2 hours of video</strong>–spread over 12 episodes– Brent talks you through the content of the book with lots of pratical examples and live coding. Serious content, brought in his enthousiastic manner!
                    </p>
                </div>
            </div>
        </section>

        <div class="">
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

            <section class="px-8 pb-16">
                <div class="max-w-2xl mx-auto flex justify-end">
                    <div class="w-2/3 pl-8">
                        <h2 class="font-display font-bold text-4xl leading-tight  mb-16 mt-2">About the author</h2>

                        <p class="text-lg leading-relaxed">
                            Brent has been working almost exclusivly on large web applications for the past years now. He did lots of self education on topics like DDD and event sourcing.
                            Doing so, he applied many of the theoretical knowledge to modern day Laravel projects; a method that has paid of: most modern-day Spatie projects follow these practices.
                            Besides his work at Spatie, Brent is also very active in the PHP community, most notably with <a class="text-red-600 hover:text-red-500 underline" href="https://stitcher.io/">his blog</a> where he writes about programming, PHP and the web in general.
                        </p>

                        <div class="mt-6 flex items-center text-lg">
                            <div class="mr-4">
                                <img src="/images/avatar.jpg" class="z-10 w-16 h-16" alt="Avatar">
                                <div class="absolute w-full h-full top-0 left-0 mt-2 ml-2 bg-red-200"></div>
                            </div>
                            <div class="leading-tight">
                                <div class="font-display font-semibold">Brent Roose</div>
                                <a class="font-display text-base hover:text-red-500" href="https://twitter.com/brendt_gd">@brendt_gd</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="px-8 py-16 bg-red-500 text-red-100 overflow-hidden">
                <div class="max-w-2xl mx-auto flex justify-end">
                    <div class="w-2/3 pl-8 pb-16">
                        <h2 class="font-display font-bold text-4xl leading-tight mb-16 mt-2">What others say</h2>

                        <p class="text-lg leading-relaxed">
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

            <aside class=" px-8 pt-8 pb-24 text-red-100 bg-red-500 overflow-hidden">
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
                    <a href="#" class="underline ml-auto hover:opacity-75">Terms of Use</a>
                    <a href="#" class="underline ml-4 xs:ml-12 hover:opacity-75">Privacy &amp; Cookie Policy</a>
                </div>
            </small>
        </div>
    </main>


</div>
@endsection
