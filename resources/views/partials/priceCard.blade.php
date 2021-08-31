<section class="px-8 grid grid-cols-1 md:grid-cols-2 gap-6 justify-center items-stretch">
    <div class="max-w-md mx-auto xs:w-5/6 h-full flex flex-col">
        <div class="-mt-6 flex-grow flex flex-col shadow-2xl">
            <div class="flex-none bg-yellow-500 h-6"></div>
            <div class="flex-grow flex flex-col border-l border-r border-b border-gray-200 bg-white">
                <div class="flex-none text-center py-4 leading-none">
                    <div class="font-display font-semibold text-3xl">
                        @if($couldFetchPrice)
                            @if($discount->active)
                                <div
                                    class="flex flex-col items-center mb-2 text-center text-green-500 uppercase text-xs tracking-widest leading-snug">
                                    <div>{{ $discount->name }} ending in</div>
                                    <div
                                        class="z-10 transform rotate-0 bg-green-400 font-normal text-white px-1 py-1 shadow-md"
                                        style="--transform-rotate: -1.5deg !important">
                                        <x-countdown :expires="$discount->expiresAt()">
                                        <span class="bg-green-500 px-1"><span
                                                x-text="timer.days">{{ $component->days() }}</span> days</span>
                                            <span class="bg-green-500 px-1"><span
                                                    x-text="timer.hours">{{ $component->hours() }}</span> hours</span>
                                            <span class="bg-green-500 px-1"><span
                                                    x-text="timer.minutes">{{ $component->minutes() }}</span> minutes</span>
                                        </x-countdown>
                                    </div>
                                </div>
                            @endif
                        @endif
                        Videos & ebook
                    </div>


                    <div class="flex justify-center mt-6">
                        @if($couldFetchPrice)
                            <div class="font-display">
                                <span
                                    class="font-bold text-5xl"
                                    data-id="current-price-{{ config('services.paddle.product_id') }}">{{ $price->formattedPrice() }}</span>
                                @if($discount->active)
                                    <span class="absolute right-full mr-4 top-0 mt-2">
                                        <span class="text-gray-500 line-through">
                                            {{ $priceWithoutDiscount->formattedPrice() }}
                                         </span>
                                    </span>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
                <div class="flex-none text-center z-10 -mb-3">
                    <a href="{{spatieUrl('https://spatie.be/products/laravel-beyond-crud')}}">
                        <button
                            class="mx-auto flex items-center pl-6 pr-3 h-12 text-xl bg-yellow-500 text-gray-800 uppercase font-display font-bold tracking-wider leading-none shadow-lg hover:shadow-xl hover:bg-yellow-600">
                            <span style="bottom: -0.05rem">Buy Course</span>
                            <span
                                class="ml-3 flex-0 w-6 h-6 text-sm bg-white bg-opacity-50 rounded-full flex items-center justify-center font-sans text-yellow-800">
                                &rarr;
                            </span>
                        </button>
                    </a>
                </div>
                <div class="flex-grow pt-12 pb-10 px-12  justify-center bg-gray-100">
                    <div>
                        <ul class="pb-6 leading-relaxed">
                            <li class="flex items-baseline font-semibold"><i class="fas fa-check text-xs text-green-500"></i> 
                            <span class="ml-2">100+ pages of premium content</span>
                            </li>
                            <li class="flex items-baseline font-semibold"><i class="fas fa-check text-xs text-green-500"></i> 
                            <span class="ml-2">2 hours of video</span>
                            </li>
                            <li class="flex items-baseline"><i class="fas fa-check text-xs text-green-500"></i> <span class="ml-2">Example source code download</span></li>
                            <li class="flex items-baseline"><i class="fas fa-check text-xs text-green-500"></i> <span class="ml-2">All beautifully designed</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-md mx-auto xs:w-5/6 h-full flex flex-col">
        <div class="md:-mt-6 flex flex-col shadow-2xl">
            <div class="bg-red-500  h-6"></div>
            <div class="border-l border-r border-b border-gray-200 bg-white">
                <div class="text-center py-4 leading-none">
                    <div class="font-display font-semibold text-3xl">
                        @if($couldFetchPrice)
                            @if($discount->active)
                                <div
                                    class="flex flex-col items-center mb-2 text-center text-green-500 uppercase text-xs tracking-widest leading-snug">
                                    <div>{{ $discount->name }} ending in</div>
                                    <div
                                        class="z-10 transform rotate-0 bg-green-400 font-normal text-white px-1 py-1 shadow-md"
                                        style="--transform-rotate: -1.5deg !important">
                                        <x-countdown :expires="$discount->expiresAt()">
                                        <span class="bg-green-500 px-1"><span
                                                x-text="timer.days">{{ $component->days() }}</span> days</span>
                                            <span class="bg-green-500 px-1"><span
                                                    x-text="timer.hours">{{ $component->hours() }}</span> hours</span>
                                            <span class="bg-green-500 px-1"><span
                                                    x-text="timer.minutes">{{ $component->minutes() }}</span> minutes</span>
                                        </x-countdown>
                                    </div>
                                </div>
                            @endif
                        @endif
                        Course bundle
                    </div>

                    <div class='flex justify-center mt-6 '>
                        <div class="font-display">
                            <span class="font-bold text-5xl">279 USD</span>
                        </div>
                    </div>
                    
                </div>
                <div class="text-center z-10 -mb-3">
                    <a href="{{spatieUrl('https://spatie.be/bundles/laravel-beyond-crud')}}">
                        <button
                            class="mx-auto flex items-center pl-6 pr-3 h-12 text-xl bg-red-500 text-white uppercase  font-display font-bold tracking-wider leading-none shadow-lg hover:shadow-xl hover:bg-red-600">
                            <span style="bottom: -0.05rem">Buy bundle</span>
                            <span
                                class="ml-3 flex-0 w-6 h-6 text-sm text-gray-900 bg-white bg-opacity-50 rounded-full flex items-center justify-center font-sans text-yellow-800">
                                &rarr;
                            </span>
                        </button>
                    </a>
                </div>
                <div class="flex-grow pt-12 pb-4 px-12  justify-center bg-gray-100">

                    <ul class="pb-4 leading-relaxed">
                            <li class="flex items-baseline"><i class="fas fa-check text-xs text-green-500"></i> 
                            <span class="ml-2">Get both Testing Laravel and <a class="markup-link" href="https://laravel-beyond-crud.com">Laravel Beyond CRUD</a> with a <strong class="font-semibold">20% discount</strong>!</span>
                            </li>
                    </ul>
                    <img src="/images/bundle_trans.png" alt="cover image bundle Testing Laravel & Laravel Beyond Crud">
                </div>
            </div>
        </div>
    </div>
</section>
<p class="text-xs text-gray-600 text-center mt-10">
    Prices exclusive of VAT for buyers without a valid VAT number.
    <br>
    <br>
        We use purchasing power parity.
    <br>
    <a class="underline" href="mailto:info@spatie.be?subject=CRUD%20for%20students">Contact
        us</a> if you are a student.
</p>
