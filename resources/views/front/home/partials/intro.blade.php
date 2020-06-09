<div class="py-16 grid lg:cols-2 gap-16 items-center">
    <div class="mx-auto max-w-3xl">
        <header class="text-white">
            <p class="font-bold font-serif text-3xl sm:text-5xl leading-tight">Learn how to create <br>a Laravel package</p>
            <h1 class="mt-2 markup-baseline text-orange-400 opacity-100 text-2xl">Become the next package maestro</h1>
        </header>

        <p class="mt-12 text-xl text-white">
            Having produced over <a href="https://packagist.org/?query=spatie">200 packages</a> with more than 75 million downloads in total, the <a href="https://spatie.be" target="_blank"  rel="noopener noreferrer" class="markup-link-invers">Spatie</a> team knows what they're talking about.
        </p>
         <p class="mt-4 text-xl text-white">
            Dive in the mind of the people that brought you quality packages like
             <code class="text-lg opacity-75"><a href="https://docs.spatie.be/laravel-permission/v3/introduction">laravel-permission</a></code>,
             <code class="text-lg opacity-75"><a href="https://docs.spatie.be/laravel-backup">laravel-backup</a></code>,
             <code class="text-lg opacity-75"><a href="https://github.com/spatie/browsershot">browsershot</a></code>,
             <code class="text-lg opacity-75"><a href="https://docs.spatie.be/laravel-medialibrary">laravel-medialibrary</a></code>
            and learn how to program, test, and maintain your very own packages.
        </p>
    </div>

    <div class="flex justify-center xl:-mr-32" x-data="{ open: false }">
        <div class="w-full max-w-3xl">
            <div role="button" class="aspect-16x9" @click="open = true">
                <div class="group absolute inset-0 grid place-center bg-gray-700 rounded-t shadow-xl | lg:rounded">
                    <img alt="Screenshot" class="absolute w-full h-full object-cover opacity-75 group-hover:opacity-100 transition-opacity duration-300" src="/images/intro.jpg">
                    <span class="bg-dark-800 text-white rounded-sm px-3 py-1">
                        <i class="fas fa-play text-blue-300"></i> <span class="ml-2 text-xs uppercase tracking-widest">Watch example</span>
                    </span>
                </div>
            </div>
        </div>

        <template x-if="open">
            <div class="fixed inset-0 p-8 lg:p-16 bg-backdrop z-50 flex items-center justify-center" @keydown.window.escape="open = false">
                <button class="absolute top-0 right-0 m-6 leading-none text-light-700 text-3xl">&times;</button>
                <div class="w-full max-w-screen-xl">
                    <div class="bg-white rounded-sm aspect-16x9 shadow-xl">
                        <iframe src="https://player.vimeo.com/video/418813035?autoplay=1" class="absolute inset-0 border-2 border-white rounded-sm" frameborder="0" allow="autoplay; fullscreen" allowfullscreen @click.away="open = false"></iframe>
                    </div>
                </div>
            </div>
        </template>
    </div>
</div>
