<footer class="z-10">
    <div class="absolute inset-0 overflow-hidden">
        @unless(isset($hideFooter) && $hideFooter)
            <img loading="eager" class="opacity-50 absolute left-0 w-2/3 h-auto" src="/images/footer.jpg" style="top:25%; object-fit: cover; object-position: top center;" alt="">
        @endunless
        <div class="absolute inset-0 bg-blue-700 opacity-75"> </div>
    </div>

    @unless(isset($hideFooter) && $hideFooter)
    <div class="layout-col pt-16">
        <div class="max-w-3xl mx-auto mt-12 grid md:cols-2 items-stretch gapx-16 gapy-4 | lg:max-w-none">
            <div class="text-light-900">
                <h3 class="markup-h1 mt-0">
                    Need more info?
                </h3>
                <p class="markup-baseline">We're here from 9 to 17h <span class="text-sm">(CET)</span></p>
            </div>

            <div class="grid h-full gap-6" style="align-content: space-between">
                <div class="mb-6 md:mt-4">
                    @include('front.partials.newsletter')
                </div>
            </div>

            <div class="text-light-900">
                <ul class="grid gap-2 text-xl border-l-4 border-light-300 pl-4 markup-links-invers">
                    <li>
                        <a href="mailto:info@spatie.be?subject=Laravelpackage.training%20question">
                            Email&nbsp;us
                        </a>
                    </li>
                     <li>
                        <a href="https://twitter.com/spatie_be">
                            Follow @spatie_be
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    @endunless
    <ul class="pt-24 pb-8 grid cols-auto gap-8 items-center justify-center text-xs ">
        <li><a class="text-light-500 hover:text-light-600" href="{{ route('termsOfUse') }}">Terms of use</a></li>
        <li><a class="text-light-500 hover:text-light-600" href="{{ route('privacy') }}">Privacy &amp; cookie policy</a></li>
        <li class="">
            <a class="inline-flex items-center text-light-500 hover:text-light-600" href="https://spatie.be">
                <span class="hidden | sm:block mr-2">Crafted by</span>
                <svg class="inline-block w-auto h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 595.28 255.12"><defs><style>.fill-blue{fill:#197593;}.fill-white{fill:#FFFFFF;}</style></defs><title>SPATIE</title><path class="fill-blue" d="M0,9.77A10,10,0,0,1,10.26,0H585a10,10,0,0,1,10.28,9.77V245.36A10,10,0,0,1,585,255.12H10.26A10,10,0,0,1,0,245.36V9.77Z"></path><path d="M95.6,156.66l10.87-14.84c6.46,5.32,13.82,8.95,21.52,8.95,5.44,0,8.27-2.38,8.27-5.78v-0.11c0-3.17-2.38-5.1-11.67-8.38-14.95-5.1-25.48-10.53-25.48-24.92v-0.34c0-14.38,11-24.46,28.31-24.46,10.65,0,20,2.94,28.31,9.63l-10.31,15.17c-5.44-4.19-12-7.25-18.46-7.25-4.64,0-7.25,2.27-7.25,5.21v0.11c0,3.51,2.49,5.32,12.57,9.06,15.06,4.87,24.46,11,24.46,24.46v0.23c0,15.4-11.89,24.92-28.88,24.92A48.26,48.26,0,0,1,95.6,156.66Z" class="fill-white"></path><path d="M175.67,87.92H204c18.69,0,30.92,9.74,30.92,27.52v0.45c0,19-13.82,28.09-31.14,28.31h-7.81v23H175.67V87.92Zm27.41,39.64c7.13,0,11.44-4.19,11.44-10.87v-0.34c0-7.25-4.19-11-11.55-11h-7v22.2h7.13Z" class="fill-white"></path><path d="M267.17,87.47h20.61l28,79.73h-21.4l-4.64-14.27H264.8l-4.53,14.27h-21Zm17.44,49.15-7.36-23.22-7.36,23.22h14.72Z" class="fill-white"></path><path d="M338.64,106.27H319V87.92h59.57v18.35H359V167.2H338.64V106.27Z" class="fill-white"></path><path d="M396.17,87.92h20.39V167.2H396.17V87.92Z" class="fill-white"></path><path d="M444.64,87.92h54.59v17.89H464.8v13h31v16.88h-31V149.3h34.88V167.2h-55V87.92Z" class="fill-white"></path></svg>
            </a>
        </li>
    </ul>
</footer>
