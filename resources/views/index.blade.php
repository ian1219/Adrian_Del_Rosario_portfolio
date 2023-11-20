@include('layouts.header') 

<section class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-col md:flex-row items-center">

        <div class="md:w-1/2 w-full mb-10 md:mb-0">
            <img class="object-cover object-center rounded w-full" alt="hero" src="{{ asset('img/kaizen.png') }}">
            <div class="animated-text">
                <h1 class="font-semibold text-2xl text-gray-800">Hi I am <span></span></h1>
            </div>
        </div>

        <div class="md:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start items-center text-center">
            <h1 class="title-font sm:text-5xl text-3xl py-4 mb-4 text-left font-bold text-gray-700 leading-tight border-b-2 border-gray-600">
                Precisely coded websites,
                <br class="hidden lg:inline-block">
                surpassing client expectations with unrivaled programming abilities.
            </h1>
            <p class="mb-8 leading-relaxed font-medium text-left">
              As a full-stack developer, I'm dedicated to creating seamless digital experiences that exceed expectations, fostering connections, and simplifying lives through innovative solutions. My goal is to contribute to a digital landscape where technology enhances connections and streamlines experiences, driven by the belief that technology and creativity can make a positive impact.
          </p>
          
          <div class="flex flex-col md:flex-row items-center justify-center">
            <!-- Downloadable link for the PDF file -->
            <a href="{{ asset('kaizen-rain-CV.pdf') }}" download="kaizen-rain-CV.pdf" class="inline-flex text-white bg-slate-600 border-2 border-slate-600 py-2 px-6 hover:bg-transparent hover:text-gray-700 rounded-lg text-lg font-semibold mb-4 md:mb-0 md:mr-4">
                Resume
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 ml-4">
                    <path fill-rule="evenodd" d="M11.47 2.47a.75.75 0 011.06 0l4.5 4.5a.75.75 0 01-1.06 1.06l-3.22-3.22V16.5a.75.75 0 01-1.5 0V4.81L8.03 8.03a.75.75 0 01-1.06-1.06l4.5-4.5zM3 15.75a.75.75 0 01.75.75v2.25a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5V16.5a.75.75 0 011.5 0v2.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V16.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                </svg>
            </a>
            <a href="{{ route('contact') }}" class="ml-0 mt-2 md:ml-10 md:mt-0 inline-flex text-gray-700 cursor-pointer py-2 px-2 focus:outline-none border-b-2 border-transparent hover:border-gray-600 text-lg font-semibold">Contact</a>
        </div>
        </div>
    </div>
</section>

@include('layouts.footer')
