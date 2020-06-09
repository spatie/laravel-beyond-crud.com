<a href="{{ $attributes['href'] }}" target="_blank" rel="noopener" class="scroll-snap-center flex flex-col px-4 lg:px-8">
    <blockquote class="flex-grow flex flex-col shadow-2xl bg-white border-l-4 border-white hover:border-blue-300 p-8 md:p-12 lg:p-16"> 
        <header class="flex items-center">
            <div class="flex justify-start">
                <span class="-ml-3 mr-3 w-16 h-16 rounded-full border-white border-2 overflow-hidden shadow">
                    <img alt="{{ $attributes['name'] }}" class="w-16 h-16 object-cover rounded-full overflow-hidden" src="{{ $attributes['avatar'] }}">
                </span>
            </div>
            <span class="flex flex-col items-baseline leading-snug">
                <span class="text-xl font-semibold whitespace-no-wrap">{{ $attributes['name'] }}</span>
                <span class="opacity-50">{{ $attributes['handle'] }}</span>
            </span>
        </header>

        <div class="flex-grow flex items-center pt-6 leading-relaxed font-medium" style="min-width:20rem">
            {{ $slot }}
        </div>
    </blockquote>
</a>