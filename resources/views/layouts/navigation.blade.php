<nav class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <div class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto cursor-pointer">
            <div class="px-3 py-3 text-base font-semibold">
                <x-nav-link :href="route('index')" :active="request()->routeIs('index')" class="">Home</x-nav-link>
                <x-nav-link :href="route('about')" :active="request()->routeIs('about')" class="ml-3">About</x-nav-link>
                <x-nav-link :href="route('projects')" :active="request()->routeIs('projects')" class="ml-3">Projects</x-nav-link>
                <x-nav-link :href="route('capstone')" :active="request()->routeIs('capstone')" class="ml-3">Capstone</x-nav-link>
            </div>
        </div>
        <div class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0 group">
            <h1 class="px-3 py-2 rounded-full bg-gradient-to-r from-stone-700 via-teal-700 to-lime-300 text-white shadow-lg cursor-pointer text-2xl txt-gray-100 transform transition-transform duration-300 ease-in-out group-hover:scale-110">KR</h1>
            <span class="ml-3 text-xl">Mr. Kaizen</span>
        </div>
        
        
        
        <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
            <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">
                <a href="https://mail.google.com/" rel="noopener noreferrer" class="text-gray-600 ml-1 font-medium" target="_blank">ian</a>
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </div>
</nav>
