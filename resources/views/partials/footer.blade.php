<aside class="px-8 py-24 text-red-100 bg-red-500 overflow-hidden">
    <div class="z-10 max-w-2xl mx-auto py-16 xs:flex xs:flex-wrap">
        <div class="z-20 w-screen h-full absolute top-0 left-0 bg-gray-900 opacity-50">
        </div>
        <div class="z-30 w-screen h-4 absolute top-0 left-0 bg-gray-900 opacity-25"></div>
        <div class="z-30 w-full px-8">

            <h2 class="font-display font-bold text-4xl leading-tight mb-2">Pick your next class</h2>

            <p class="text-lg font-display font-semibold text-red-300 mb-16 ">
                Other related courses and videos from Spatie
            </p>

            <div class="mt-8 xs:flex items-center text-lg">
                <div class="flex-none mr-8 my-6 flex items-center justify-center w-20 h-20 rounded-full bg-testinglaravel-100 overflow-hidden">
                    <a href="https://testing-laravel.com" target="_blank">
                        <img src="/images/testing-laravel.png" class="z-10 w-10 h-10" alt="Laravel Package Training">
                    </a>
                </div>
                <div>
                    <h3 class="uppercase text-lg font-display font-semibold tracking-wider">
                        Testing Laravel
                    </h3>
                    <p class="text-sm">
                    A new video course to get started with Pest and PHPUnit <br>by Brent Roose & Freek Van der Herten
                    </p>
                    <p class="text-xs">
                        <a class="underline text-red-300" href="https://testing-laravel.com/" target="_blank">testing-laravel.com/</a>
                    </p>
                </div>
            </div>

            <div class="mt-8 xs:flex items-center text-lg">
                <div class="flex-none mr-8 my-6 flex items-center justify-center w-20 h-20 rounded-full bg-white overflow-hidden">
                    <a href="https://writing-readable-php.com" target="_blank">
                        <img src="/images/php.jpg" class="z-10" alt="Writing Readable PHP">
                    </a>
                </div>
                <div>
                    <h3 class="uppercase text-lg font-display font-semibold tracking-wider">
                        Writing Readable PHP
                    </h3>
                    <p class="text-sm">
                        A large collection of tips on trick on how to write PHP code <br>to is a joy to read for years to come
                    </p>
                    <p class="text-xs">
                        <a class="underline text-red-300" href="https://writing-readable-php.com/" target="_blank">writing-readable-php.com/</a>
                    </p>
                </div>
            </div>

            <div class="mt-16 xs:flex items-center text-lg">
                <div class="flex-none mr-8 my-6 flex items-center justify-center w-20 h-20 rounded-full bg-red-200 overflow-hidden">
                    <a class="" href="https://event-sourcing-laravel.com" target="_blank">
                        <img src="/images/event-sourcing.svg" class="z-10 w-10 h-10" alt="Event Sourcing in Laravel">
                    </a>
                </div>
                <div>
                    <h3 class="uppercase text-lg font-display font-semibold tracking-wider">
                        Event Sourcing in Laravel
                    </h3>
                    <p class="text-sm">
                        Learn how to implement Event Sourcing in large Laravel applications in this extended course by Brent.
                    </p>
                    <p class="text-xs">
                        <a class="underline text-red-300" href="https://event-sourcing-laravel.com" target="_blank">event-sourcing-laravel.com</a>
                    </p>
                </div>
            </div>

            <div class="mt-8 xs:flex items-center text-lg">
                <div class="flex-none mr-8 my-6 flex items-center justify-center w-20 h-20 rounded-full bg-red-500 overflow-hidden">
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
                        <a class="underline text-red-300" href="https://laravelpackage.training" target="_blank">laravelpackage.training</a>
                    </p>
                </div>
            </div>

            <div class="mt-8 xs:flex items-center text-lg">
                <div class="flex-none mr-8 my-6 flex items-center justify-center w-20 h-20 rounded-full bg-gradient-to-r from-frontline-100 to-frontline-300 overflow-hidden">
                    <a class="" href="https://laravelpackage.training" target="_blank">
                        <img src="/images/front-line.svg" class="z-10 w-10 h-10" alt="Front line PHP">
                    </a>
                </div>
                <div>
                    <h3 class="uppercase text-lg font-display font-semibold tracking-wider">
                        Front Line PHP
                    </h3>
                    <p class="text-sm">
                        An ebook on cutting edge tactics in PHP 8, accompanied by videos and practical examples.
                    </p>
                    <p class="text-xs">
                        <a class="underline text-red-300" href="https://front-line-php.com/" target="_blank">front-line-php.com</a>
                    </p>
                </div>
            </div>


        </div>
    </div>
</aside>

<section class="z-20 overflow-hidden">
    <div class="px-8 bg-red-100 shadow-lg">
        <div class="max-w-2xl mx-auto xs:flex items-center justify-between">
            <ul class="xs:w-1/3 xs:pr-8 py-8 font-display font-semibold text-green-500 text-lg">
                <li><a href="mailto:info@spatie.be" class="underline hover:text-green-600"><i class="mr-2 fas fa-envelope opacity-75"></i>Email us</a></li>
                <li class="mt-2"><a href="https://twitter.com/spatie_be" class="underline hover:text-green-600"><i class="mr-2 fab fa-twitter opacity-75"></i>Follow us</a></li>
            </ul>
            <div class="py-8 xs:w-2/3 xs:pl-8">
                @include('partials.newsletter')
            </div>
        </div>
    </div>
</section>

<small class="block px-8 pt-8 pb-8 bg-red-500 text-red-100 overflow-hidden">
    <div class="max-w-2xl mx-auto flex items-center">
        <a href="{{ spatieUrl() }}" class="z-10 h-6 xs:h-8 text-red-600 hover:opacity-75">
            @include('partials.logo')
        </a>
        <a href="{{route('termsOfUse')}}" class="underline ml-auto hover:opacity-75">Terms of Use</a>
        <a href="{{route('privacy')}}" class="underline ml-4 xs:ml-12 hover:opacity-75">Privacy &amp; Cookie Policy</a>
    </div>
</small>
