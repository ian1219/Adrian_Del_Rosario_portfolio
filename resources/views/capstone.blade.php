@include('layouts.header') 


<div class="flex justify-center items-center mt-10">
    <div class="md:w-1/2 w-full mb-10 md:mb-0 flex flex-col items-center">
        <h2 class="mb-4 text-4xl uppercase font-bold text-gray-600 dark:text-gray-300">
            Capstone Title:
        </h2>
        <h2 class="mb-10 text-3xl font-bold leading-7 text-gray-700 dark:text-gray-400 uppercase text-center">
            Water level and flood alert notifier for the municipality of macabebe, pampanga.
        </h2>
    </div>
    
</div>

<section class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-col md:flex-row items-center">

        <div class="md:w-1/2 w-full mb-10 md:mb-0">
            <img class="object-cover object-center rounded w-full" alt="hero" src="{{ asset('img/capstone/mdrrmo.png') }}">
            <div class="animated-text">
                <h3 class="text-lg font-semibold text-gray-700">To notify residents within the municipality of Macabebe, Pampanga.</h3>
            </div>
        </div>

        <div class="md:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start items-center text-center">
            <h1 class="title-font sm:text-3xl text-2xl py-4 mb-4 text-left font-bold text-gray-800 leading-tight border-b-2 border-gray-600">
                A Capstone Project
                <br class="hidden lg:inline-block">
                Presented to the Faculty of the <br class="hidden lg:inline-block">
                <span class="text-cyan-600"> College of Computing Studies </span> <br class="hidden lg:inline-block">
                <span class="text-amber-600"> Don Honorio Ventura State University </span> <br class="hidden lg:inline-block">
                Bacolor, Pampanga
            </h1>
            <h1 class="title-font sm:text-3xl text-2xl py-4 mb-4 text-left font-bold text-gray-800 leading-tight">
                In Partial Fulfillment <br class="hidden lg:inline-block">
                of the Requirements for the Degree of <br class="hidden lg:inline-block">Bachelor of Science in 
                <br class="hidden lg:inline-block">Information Technology
            </h1>
          
            <div class="flex flex-col md:flex-row items-center justify-center">
                <a href="{{ route('macasadia') }}" class="mt-3 text-cyan-600 px-4 py-3 rounded-full border hover:border-cyan-600 inline-flex font-semibold items-center">Learn More
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M5 12h14"></path>
                      <path d="M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>



@include('layouts.footer')