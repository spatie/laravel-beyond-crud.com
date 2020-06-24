@extends('front.layouts.master', ['inversNav' => true])

@section('title', 'Building larger-than-average web applications')

@section('description', 'Building larger-than-average web applications by Brent Roose. An ebook and premium video course by Spatie.')

@section('content')


<div class="mt-16">
    <header class="z-20 sticky top-0 overflow-hidden pb-8">
        <div class="px-8 bg-red-100 shadow-nav">
            <div class="max-w-2xl mx-auto h-24 flex items-center justify-between">
                <span class="flex items-center uppercase text-sm font-semibold tracking-wider leading-none">
                    <img class="h-auto w-4 mr-3" src="/images/logo.svg" alt="logo">
                     Laravel Beyond Crud
                </span>
                <button class="px-3 h-8 bg-gray-300 hover:bg-gray-400 text-gray-800 uppercase text-sm font-bold tracking-wider leading-none">
                    Buy course
                </button>
            </div>
        </div>
    </header>

    <nav class="absolute top-0 w-full z-20 px-8 pointer-events-none">
        <div class="max-w-2xl mx-auto h-24 flex items-center justify-between">
            <span class="z-20 w-2/3 h-8 inline-flex items-center text-spatie-500 bg-red-100">
                @include('shared.partials.logo')
                <span class="px-3 uppercase text-sm tracking-wider text-gray-500 font-semibold">Presents</span>
            </span>
        </div>
    </nav>

    <main class="bg-white">
        <div class="pt-8 pb-16 -mt-48">
            <div class="absolute inset-0 w-full">
                <img class="absolute w-full h-full object-cover object-bottom bg-green-600" 
                    srcset="/images/painting-2400.jpg 2400w,
                        /images/painting-1600.jpg 1600w,
                        /images/painting-800.jpg 800w"
                    sizes="100vw"
                    alt="Abstract painting"
                    src="/images/painting-2400.jpg"
                >
                <div class="absolute inset-0" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0), rgba(0,0,0,.5))"></div>
            </div>

            <div class="px-8">
                <div class="mt-48 md:mt-64 max-w-2xl mx-auto text-red-100">
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
        </div>

        <section class="px-8 flex justify-center">
            <div class="max-w-2xl mx-auto xs:flex xs:w-full">
                <div class="z-10 xs:z-30 xs:fix-z -mt-6 -mx-4 flex-grow shadow-2xl">
                    <div class="bg-yellow-500 h-6"></div>
                    <div class="border-l border-r border-b border-gray-200 bg-white">    
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
                            <button class="px-3 h-8 bg-yellow-500 hover:bg-yellow-600 text-gray-800 uppercase text-base font-bold tracking-wider leading-none">
                                Buy bundle
                            </button>
                        </div>
                        <div class="pt-12 pb-10 px-12 flex justify-center bg-gray-100">
                            <ul class="pb-3">
                                <li><i class="fas fa-check text-xs text-green-500"></i> 4 hours of video</li>
                                <li><i class="fas fa-check text-xs text-green-500"></i> 172 pages of premium content</li>
                                <li><i class="fas fa-check text-xs text-green-500"></i> Code samples and cases</li>
                                <li><i class="fas fa-check text-xs text-green-500"></i> All beautifully designed</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="xs:z-20 xs:fix-z -mt-4 xs:-mx-4 flex-none">
                    <div class="bg-green-500 h-4"></div>
                    <div class="border-b border-r border-l border-gray-200 bg-white">    
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
                            <button class="px-3 h-8 bg-gray-300 hover:bg-gray-400 text-gray-800 uppercase text-base font-bold tracking-wider leading-none">
                                Buy ebook
                            </button>
                        </div>
                        <div class="pt-12 pb-10 px-12 flex justify-center bg-gray-200">
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
            <div class="pr-8 xs:px-8">
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
                <div class="xs:ml-auto xs:w-1/2 xs:pl-8">
                    <h2 class="font-bold text-4xl">What's inside?</h2>
                </div>
            </div>

            <div class="max-w-2xl mx-auto my-16 py-16 xs:flex xs:flex-wrap">
                <div class="w-screen h-full absolute top-0 right-0 bg-gray-200">
                </div>
                <div class="mb-12 xs:mb-0 w-2/3 xs:w-1/2 xs:pr-8">
                    <div class="h-full xs:-ml-4">
                        <div class="xs:z-30 xs:fix-z xs:absolute left-0 bottom-0 w-full shadow-2xl">
                            <img srcset="/images/cover-2000.jpg 2000w,
                                    /images/cover-1000.jpg 1000w,
                                    /images/cover-500.jpg 500w"
                                sizes="(max-width: 420px) 75vw,
                                    50vw"
                                alt="Ebook cover"
                                src="/images/cover-2000.jpg"
                            >
                            <span class="absolute w-4 h-full bg-green-600 top-0 left-0"></span>
                        </div>
                    </div>
                </div>
                <div class="xs:w-1/2 xs:pl-8">
                    <h3 class="mb-6 font-semibold uppercase tracking-wider text-xl">Ebook</h3>
                    <ul class="">
                        <li><i class="fas fa-check text-xs text-green-500"></i> 4 hours of video</li>
                        <li><i class="fas fa-check text-xs text-green-500"></i> 172 pages of premium content</li>
                        <li><i class="fas fa-check text-xs text-green-500"></i> Code samples and cases</li>
                        <li><i class="fas fa-check text-xs text-green-500"></i> All beautifully designed</li>
                    </ul>
                </div>
                <div class="mt-12 w-2/3 xs:w-1/2 xs:pr-8" x-data="{ open: false }">
                    <div class="w-full h-0 bg-gray-800" style="padding-bottom:56%">
                        <button class="absolute inset-0 w-full flex items-center justify-center hover:opacity-75 " @click="open = true">
                            <div class="text-white uppercase tracking-widest text-xs">
                                View example <i class="ml-2 fas fa-play"></i>
                            </div>
                        </button>
                        <span class="absolute w-full h-4 bg-gray-900 bottom-0 left-0"></span>
                    </div>

                    <template x-if="open">
                        <div style="background-color:rgba(0,0,0,0.75)" class="fixed inset-0 p-8 lg:p-16 z-50 flex items-center justify-center" @keydown.window.escape="open = false">
                            <button class="absolute top-0 right-0 m-6 leading-none text-light-700 text-3xl">&times;</button>
                            <div class="w-full">
                                <div class="bg-white rounded-sm aspect-16x9 shadow-xl">
                                    <iframe src="https://player.vimeo.com/video/418813035?autoplay=1" class="absolute inset-0 border-2 border-white rounded-sm" frameborder="0" allow="autoplay; fullscreen" allowfullscreen @click.away="open = false"></iframe>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
                <div class="mt-12 xs:w-1/2 xs:pl-8">
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
            <div class="z-10 absolute top-0 bottom-0 left-0 w-full blend-multiply pointer-events-none">
                <section class="h-full px-8">
                    <div class="h-full max-w-2xl mx-auto flex justify-start">
                        <div class="w-1/3 pr-8">
                            <img style="right:2rem" class="absolute w-screen max-w-none h-full object-cover object-right-top"
                                srcset="/images/painting-2400.jpg 2400w,
                                    /images/painting-1600.jpg 1600w,
                                    /images/painting-800.jpg 800w"
                                sizes="100vw"
                                alt="Abstract painting"
                                src="/images/painting-2400.jpg"
                            >
                        </div>
                    <div>
                </section>
            </div>

            <section class="px-8 pb-16">
                <div class="max-w-2xl mx-auto flex justify-end">
                    <div class="w-2/3 pl-8">
                        <h2 class="font-bold text-4xl leading-tight  mb-16 mt-2">About the author</h2>

                        <p class="text-lg font-semibold leading-relaxed">
                            In al these years we’ve built Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dignissim arcu. Curabitur accumsan placerat efficitur. Praesent quis semper mi. Pellentesque in mauris quis dolor molestie maximus et in purus. Pellentesque accumsan quam sem, eget volutpat dolor pellentesque nec. 
                        </p>

                        <div class="mt-4 flex items-center text-lg">
                            <div class="mr-4">
                                <img src="/images/avatar.jpg" class="w-12 h-12 bg-gray-200" alt="Avatar">
                                <div class="absolute w-full h-2 top-full left-0 bg-red-700"></div>
                            </div>
                            @brendt_gd
                        </div>
                    </div>
                </div>
            </section>

            <section class="px-8 py-16 bg-red-500 text-red-100 overflow-hidden">
                <div class="max-w-2xl mx-auto flex justify-end">
                    <div class="w-2/3 pl-8">
                        <h2 class="font-bold text-4xl leading-tight mb-16 mt-2">What others say</h2>

                        <p class="text-lg font-semibold leading-relaxed">
                            Spatie has lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dignissim arcu. Curabitur accumsan placerat efficitur. Praesent quis semper mi. Pellentesque in mauris quis dolor molestie maximus et in purus. Pellentesque accumsan quam sem, eget volutpat dolor pellentesque nec. 
                        </p>

                        <div class="mt-4 flex items-center text-lg">
                            <div class="mr-4">
                                <img src="/images/avatar.jpg" class="w-8 h-8 bg-gray-200" alt="Avatar">
                                <div class="absolute w-full h-1 top-full left-0 bg-red-100"></div>
                            </div>
                            Client x
                        </div>
                    </div>
                </div>

                <div class="z-10 max-w-2xl mx-auto flex flex-wrap justify-end">
                    <div class="w-2/3 xs:w-1/2 pt-16 pl-8 xs:pl-0 xs:pr-8">
                        <p class="text-sm font-semibold">
                            Spatie has lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dignissim arcu. Curabitur accumsan placerat efficitur. Praesent quis semper mi. Pellentesque in mauris quis dolor molestie maximus et in purus. Pellentesque accumsan quam sem, eget volutpat dolor pellentesque nec. 
                        </p>

                        <div class="mt-4 flex items-center text-lg">
                            <div class="mr-4">
                                <img src="/images/avatar.jpg" class="w-8 h-8 bg-gray-200" alt="Avatar">
                                <div class="absolute w-full h-1 top-full left-0 bg-red-100"></div>
                            </div>
                            Client x
                        </div>
                    </div>

                    <div class="w-2/3 xs:w-1/2 pt-16 pl-8">
                        <p class="text-sm font-semibold">
                            Spatie has lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dignissim arcu. Curabitur accumsan placerat efficitur. Praesent quis semper mi. Pellentesque in mauris quis dolor molestie maximus et in purus. Pellentesque accumsan quam sem, eget volutpat dolor pellentesque nec. 
                        </p>

                        <div class="mt-4 flex items-center text-lg">
                            <div class="mr-4">
                                <img src="/images/avatar.jpg" class="w-8 h-8 bg-gray-200" alt="Avatar">
                                <div class="absolute w-full h-1 top-full left-0 bg-red-100"></div>
                            </div>
                            Client x
                        </div>
                    </div>
                </div>
            </section>

            <aside class="z-20 px-8 bg-red-100 shadow-lg">
                <div class="max-w-2xl mx-auto xs:flex items-center justify-between">
                    <ul class="xs:w-1/3 xs:pr-8 py-8 font-semibold text-green-500 text-lg">
                        <li><a href="#" class="underline hover:text-green-600">Email us</a></li>
                        <li class="mt-2"><a href="#" class="underline hover:text-green-600">Follow us @spatie_be</a></li>
                    </ul>
                    <form class="py-8 xs:w-2/3 xs:pl-8">
                        <p class="text-green-500 font-semibold">Receive updates, nothing more</p>
                        <div class="flex mt-2">
                            <input class="px-2 flex-grow bg-gray-200 focus:bg-blue-300 focus:outline-none" type="text">
                            <button class="flex-none px-3 h-8 bg-green-500 hover:bg-green-600 text-white uppercase text-sm font-bold tracking-wider leading-none">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>
            </aside>

            <small class="block px-8 pt-16 pb-8 bg-red-500 text-red-100 overflow-hidden">
                <div class="max-w-2xl mx-auto flex justify-end">
                    <div class="xs:w-2/3 pl-8">
                        <p class="flex items-center justify-end">
                            <a href="#" class="underline mr-4 xs:mr-12 hover:opacity-75">Terms of Use</a>
                            <a href="#" class="underline mr-4 xs:mr-12 hover:opacity-75">Privacy &amp; Cookie Policy</a>
                            <a href="http://spatie.be" class="h-6 xs:h-8 text-red-600 hover:opacity-75">
                                @include('shared.partials.logo')
                            </a>
                        </p>
                    </div>
                </div>
            </small>
        </div>
    </main>
</div>
@endsection
