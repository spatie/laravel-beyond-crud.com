<div class="md:grid cols-2 items-stretch block bg-white">
    <div class="p-12">
        <span class="flex flex-col justify-center items-center pb-4 border-b-2 border-blue-100">
            <h3 class="uppercase font-medium text-sm text-center tracking-widest text-blue-400">
                4 hours of content
            </h3>
        </span>

        <div class="my-8 text-center">
            <p class="inline-flex leading-none">
                <span class="absolute right-full text-blue-300 text-xl mt-1 mr-2" data-id="current-currency"></span>
                <span class="font-semibold text-blue-900 text-5xl tracking-wide" data-id="current-price">149</span>
                    {{--
                    <div style="transform: rotate(-5deg); left: 75%; top: 1rem" class="absolute mr-4 w-16 h-16 flex items-center text-xs tracking-normal leading-tight bg-orange-500 text-white rounded-full shadow-xl">
                        <span>Ends on <span class="font-semibold">June 4<sup>th</sup></span></span>
                </div>
                --}}
            {{--
            <p class="mt-3 text-center uppercase font-medium text-sm text-gray-400">
                <span class="uppercase tracking-widest">
                    Introductory price
                </span>
            </p>
            --}}
        </div>

        <p class="mt-12 text-center">
            <a href="{{ registerUrl() }}" class="button text-xl">
                Buy the complete course
            </a>
        </p>
    </div>

    <div class="flex-1 p-12 bg-gray-100 flex flex-col items-center justify-center">
        <h2 class="markup-h2">What you'll learn:</h2>
        <ul class="mt-4 markup-ul grid gap-4">
            <li>
                <div>
                    Building a framework agnostic PHP package
                    <div class="text-xs opacity-75">Basic structure, testing, GitHub actions, Packagist, …</div>
                </div>
            </li>
            <li>
                <div>
                    Building a Laravel package
                    <div class="text-xs opacity-75">Build a real Laravel package from scratch</div>
                </div>
            </li>
            <li>
                <div>
                    Source dive Spatie packages
                    <div class="text-xs opacity-75">Get a tour of real life examples</div>
                </div>
            </li>
        </ul>
            <p class="mt-4">
                <a class="markup-link" href="#toc">See the entire table of contents</a>
            </p>
        </div>
    </div>

    <script type="text/javascript">
        function indexOfFirstDigitInString(string) {
            let firstDigit = string.match(/\d/);

            return string.indexOf(firstDigit);
        }

        Paddle.Product.Prices(593300, function(prices) {
            console.log(prices);
            let priceString = prices.price.net;

            let indexOFirstDigitInString = indexOfFirstDigitInString(priceString);

            let price = priceString.substring(indexOFirstDigitInString);
            price = price.replace('.00', '');

            let currencySymbol = priceString.substring(0,indexOFirstDigitInString);
            currencySymbol = currencySymbol.replace('US', '');

            document.querySelector('[data-id="current-currency"]').innerHTML = currencySymbol;
            document.querySelector('[data-id="current-price"]').innerHTML = price;
        });
    </script>
