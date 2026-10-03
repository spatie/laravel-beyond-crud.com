<div x-data="{ open: true }" x-show="open">
    @if($subscribed ?? false)
        <div class="fixed z-50 fix-z top-0 left-0 h-16 w-full flex items-center justify-center py-8 alert-success text-white text-center">
            <span>Thanks for your interest! We will keep you posted with updates on the course.</span>

            <button @click="open = false" class="p-4 opacity-50">&times;</button>
        </div>
    @elseif($subscriptionFailed ?? false)
        <div class="fixed z-50 fix-z top-0 left-0 h-16 w-full flex items-center justify-center py-8 alert-error text-white text-center">
            <span>We could not subscribe you. Please check your email address and try again.</span>

            <button @click="open = false" class="p-4 opacity-50">&times;</button>
        </div>
    @endif
</div>
