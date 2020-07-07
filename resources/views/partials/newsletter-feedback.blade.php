<div x-data="{ open: true }" x-show="open">       
    @if(session()->has('subscribed'))
        <div class="fixed z-50 fix-z top-0 left-0 h-16 w-full flex items-center justify-center py-8 bg-green-500 text-white text-center">
            <span>We have sent you an email with a link to confirm your subscription.</span>

            <button @click="open = false" class="p-4 opacity-50">&times;</button>
        </div>
    @endif

    @error('email')
        <div class="fixed z-50 fix-z top-0 left-0 h-16 w-full flex items-center justify-center py-8 bg-red-500 text-white text-center cursor-pointer">
            <span>Shoot! {{ $message }}</span>

            <button @click="open = false" class="p-4 opacity-50">&times;</button>
        </div>
    @enderror
</div>