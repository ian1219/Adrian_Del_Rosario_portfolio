<nav class="sticky top-0 z-50 bg-white/80 backdrop-blur text-slate-800 border-b border-gray-200 shadow-sm">
    <div class="container mx-auto flex items-center justify-between px-4 md:px-6 h-16">
        <!-- Brand -->
        <div class="flex items-center">
            <h1 class="px-3 py-2 rounded-full bg-gradient-to-r from-stone-700 via-teal-700 to-lime-300 text-white shadow-lg cursor-pointer text-2xl transform transition-transform duration-300 ease-in-out hover:scale-110">KR</h1>
            <span class="ml-3 text-xl font-semibold tracking-tight text-slate-800">Mr. Kaizen</span>
        </div>

        <!-- Centered Nav -->
        <div class="hidden md:flex items-center justify-center flex-1">
            <div class="flex items-center gap-1 text-base font-semibold">
                <x-nav-link :href="route('index')" :active="request()->routeIs('index')" class="px-3 py-2 rounded-full text-slate-700 hover:text-teal-700 hover:bg-teal-50 transition-colors">Home</x-nav-link>
                <x-nav-link :href="route('about')" :active="request()->routeIs('about')" class="px-3 py-2 rounded-full text-slate-700 hover:text-teal-700 hover:bg-teal-50 transition-colors">About</x-nav-link>
                <x-nav-link :href="route('experience')" :active="request()->routeIs('experience')" class="px-3 py-2 rounded-full text-slate-700 hover:text-teal-700 hover:bg-teal-50 transition-colors">Experience</x-nav-link>
                <x-nav-link :href="route('projects')" :active="request()->routeIs('projects')" class="px-3 py-2 rounded-full text-slate-700 hover:text-teal-700 hover:bg-teal-50 transition-colors">Projects</x-nav-link>
                <x-nav-link :href="route('capstone')" :active="request()->routeIs('capstone')" class="px-3 py-2 rounded-full text-slate-700 hover:text-teal-700 hover:bg-teal-50 transition-colors">Capstone</x-nav-link>
            </div>
        </div>

        <!-- Right CTA -->
        <div class="flex items-center">
            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center text-white bg-slate-700 border-2 border-slate-700 py-2 px-4 rounded-lg text-base font-semibold hover:bg-transparent hover:text-slate-800 focus:outline-none focus:ring-2 focus:ring-teal-300 transition-colors">Contact</a>
        </div>
    </div>
</nav>
