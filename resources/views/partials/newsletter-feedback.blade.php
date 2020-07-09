<div x-data="{ open: true }" x-show="open">       
    @if(flash()->message)
        <div class="fixed z-50 fix-z top-0 left-0 h-16 w-full flex items-center justify-center py-8 {{ flash()->class }} text-white text-center">
            <span>{{ flash()->message }}</span>

            <button @click="open = false" class="p-4 opacity-50">&times;</button>
        </div>
    @endif
</div>

