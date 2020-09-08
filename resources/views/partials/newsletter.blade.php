<div id="newsletter">
    <p class="text-green-500 font-display font-semibold leading-tight">
        {{ $intro ?? 'We\'ll notify you on updates of this course!' }}
    </p>

    <form
        action="{{ action(\App\Http\Front\Controllers\SubscribeToEmailListController::class) }}"
        method="post"
        accept-charset="utf-8"
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

</div>
