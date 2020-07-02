@if(session()->has('subscribed'))
    <p id="newsletter" class="fixed top-0 z-50 px-8 py-6 bg-green-500 text-white text-center">
        We have sent you an email with a link to confirm your subscription.
    </p>
@endif

    @error('email')
        <p class="text-red-500 font-display font-semibold leading-tight">
            Shoot! {{ $message }}
        </p>
    @else
        <p class="text-green-500 font-display font-semibold leading-tight">We'll notify you on updates of this course! </p>
    @enderror
    <form
        action="{{ action(\App\Http\Front\Controllers\SubscribeToEmailListController::class) }}#newsletter"
        method="post"
        accept-charset="utf-8"
        id="newsletter"
        class=""
    >
        @csrf
        @honeypot

        <div class="flex mt-2">
            <input type="email" id="email" name="email" placeholder="Your email address" class="px-2 flex-grow bg-gray-200 font-display focus:bg-blue-300 focus:outline-none" aria-label="Email" required>
            <button type="submit" class="flex-none px-3 h-8 bg-green-500 hover:bg-green-600 text-white uppercase text-sm font-display font-bold tracking-wider leading-none">
                Subscribe
            </button>        
        </div>
    </form>
