@if($couponActive())
    <div
        class="flex flex-col items-center mb-2 text-center text-green-500 uppercase text-xs tracking-widest leading-snug">
        <div>Launch promo ending in</div>
        <div class="z-10 transform rotate-0 bg-green-400 font-normal text-white px-1 py-1 shadow-md"
             style="--transform-rotate: -1.5deg !important">
            <x-countdown :expires="$couponExpiresAt()">
                <span class="bg-green-500 px-1"><span x-text="timer.days">{{ $component->days() }}</span> days</span>
                <span class="bg-green-500 px-1"><span x-text="timer.hours">{{ $component->hours() }}</span> hours</span>
                <span class="bg-green-500 px-1"><span x-text="timer.minutes">{{ $component->minutes() }}</span> minutes</span>
            </x-countdown>
        </div>
    </div>
@endif
