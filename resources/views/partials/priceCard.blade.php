@php
    $expiresAt = \Carbon\Carbon::createFromFormat('Y-m-d H', '2020-09-11 18', 'Europe/Brussels')
@endphp

<section class="px-8 flex justify-center">
    <div class="max-w-md mx-auto xs:flex xs:w-full">
        <div class="z-10 xs:z-30 xs:fix-z -mt-6 -mx-4 flex-grow shadow-2xl">
            <div class="bg-yellow-500 h-6"></div>
            <div class="border-l border-r border-b border-gray-200 bg-white">
                <div class="text-center pt-4 pb-12 leading-none">
                    <div class="font-display font-semibold text-3xl">
                        @if($expiresAt->isFuture())
                        <div class="flex flex-col items-center mb-2 text-center text-green-500 uppercase text-xs tracking-widest leading-snug">
                            <div>Launch promo ending in</div>
                            <div class="z-10 transform rotate-0 bg-green-400 font-normal text-white px-1 py-1 shadow-md" style="--transform-rotate: -1.5deg !important">
                                <x-countdown :expires="$expiresAt">
                                    <span class="bg-green-500 px-1"><span x-text="timer.days">{{ $component->days() }}</span> days</span>
                                    <span class="bg-green-500 px-1"><span x-text="timer.hours">{{ $component->hours() }}</span> hours</span>
                                    <span class="bg-green-500 px-1"><span x-text="timer.minutes">{{ $component->minutes() }}</span> minutes</span>
                                </x-countdown>
                            </div>
                        </div>
                        @endif
                        Videos & ebook
                    </div>
                    <div class="flex justify-center mt-3">
                        <div class="font-display">
                            <sup class="text-gray-500 text-3xl" data-id="current-currency"></sup><span class="font-bold text-5xl" data-id="current-price">—</span>
                            <span class="absolute right-full mr-4 top-0 mt-2">
                                <sup class="text-gray-500 text-xs" data-id="original-currency"></sup><span class="text-gray-500 line-through" data-id="original-price">—</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="text-center z-10 -mb-3">
                    <a href="https://spatie.be/products/laravel-beyond-crud">
                        <button class="mx-auto flex items-center pl-6 pr-3 h-12 text-xl bg-yellow-500 text-gray-800 uppercase text-base font-display font-bold tracking-wider leading-none shadow-lg hover:shadow-xl hover:bg-yellow-600">
                            <span style="bottom: -0.05rem">Buy bundle</span>
                            <span class="ml-3 flex-0 w-6 text-base h-6 text-sm bg-white bg-opacity-50 rounded-full flex items-center justify-center font-sans text-yellow-800">
                                &rarr;
                            </span>
                        </button>
                    </a>
                </div>
                <div class="pt-12 pb-10 px-12 flex justify-center bg-gray-100">
                    <div>
                        <ul class="pb-6 leading-relaxed">
                            <li class="font-semibold"><i class="fas fa-check text-xs text-green-500"></i> 100+ pages of premium content</li>
                            <li class="font-semibold"><i class="fas fa-check text-xs text-green-500"></i> 2 hours of video</li>
                            <li><i class="fas fa-check text-xs text-green-500"></i> Example source code download</li>
                            <li><i class="fas fa-check text-xs text-green-500"></i> All beautifully designed</li>
                        </ul>

                        <p class="text-xs text-gray-600">
                            Prices exclusive of VAT for buyers without a valid VAT number.
                            <br>
                            <br>
                            We use purchasing power parity provided by Paddle.
                            <br>
                            <a class="underline" href="mailto:info@spatie.be?subject=CRUD%20for%20students">Contact us</a> if your currency is <a class="underline" target="_blank" href="https://paddle.com/support/what-currencies-do-you-support/">not supported</a> or if you are a student.
                        </p>
                    </div>
                </div>
            </div>
        </div>
</section>

<script type="text/javascript">
    function indexOfFirstDigitInString(string) {
        let firstDigit = string.match(/\d/);

        return string.indexOf(firstDigit);
    }

    Paddle.Product.Prices(626491, function(prices) {
        let priceString = prices.price.net;

        let indexOFirstDigitInString = indexOfFirstDigitInString(priceString);

        let price = priceString.substring(indexOFirstDigitInString);
        price = price.replace('.00', '').replace(/,/g, '');

        let currencySymbol = priceString.substring(0, indexOFirstDigitInString);
        currencySymbol = currencySymbol.replace('US', '');

        document.querySelector('[data-id="current-currency"]').innerHTML = currencySymbol;
        document.querySelector('[data-id="current-price"]').innerHTML = price;

        document.querySelector('[data-id="original-currency"]').innerHTML = currencySymbol;
        document.querySelector('[data-id="original-price"]').innerHTML = Math.round(price * 1.3355);
    });

</script>
