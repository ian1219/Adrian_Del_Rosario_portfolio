@include('layouts.header') 

<section class="text-gray-600 body-font">
<div class="flex justify-center items-center mt-10">
    <div class="md:w-1/2 w-full mb-10 md:mb-0 flex flex-col items-center">
        <h2 class="mb-4 text-4xl uppercase font-bold text-teal-700 dark:text-gray-300">
            Let's Have A <span class="text-pink-700">Conversation</span>
        </h2>
        <h2 class="mb-10 text-2xl font-bold leading-7 text-gray-700 dark:text-gray-400 uppercase text-center">
            Thank you for being here. You can contact me by my gmail account and to my number.
        </h2>
    </div>
    
</div>
<div class="container mx-auto flex flex-col md:flex-row items-center">

    <div class="md:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start items-center text-center">
        <h1 class="title-font text-2xl py-4 mb-4 text-left font-bold text-gray-700 leading-tight">
            Feel free to contact me here, and we can arrange the interview schedule. I am flexible and open to relocating to areas in proximity to Makati.
        </h1>
        <div class="flex justify-start items-center mt-6 mb-6">
            <div class="px-3 py-3 rounded-full bg-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="48px" height="48px">
                <path fill="#4caf50" d="M45,16.2l-5,2.75l-5,4.75L35,40h7c1.657,0,3-1.343,3-3V16.2z"/>
                <path fill="#1e88e5" d="M3,16.2l3.614,1.71L13,23.7V40H6c-1.657,0-3-1.343-3-3V16.2z"/>
                <polygon fill="#e53935" points="35,11.2 24,19.45 13,11.2 12,17 13,23.7 24,31.95 35,23.7 36,17"/>
                <path fill="#c62828" d="M3,12.298V16.2l10,7.5V11.2L9.876,8.859C9.132,8.301,8.228,8,7.298,8h0C4.924,8,3,9.924,3,12.298z"/>
                <path fill="#fbc02d" d="M45,12.298V16.2l-10,7.5V11.2l3.124-2.341C38.868,8.301,39.772,8,40.702,8h0 C43.076,8,45,9.924,45,12.298z"/></svg>
            </div>
            <h2 class=" px-5 leading-relaxed font-medium text-left text-2xl">
                ianbackup1219@gmail.com
            </h2>
        </div>
        <div class="flex justify-start items-center mt-6 mb-6">
            <div class="px-3 py-3 rounded-full bg-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 text-blue-700">
                    <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
                  </svg>                  
            </div>
            <h2 class=" px-5 leading-relaxed font-medium text-left text-2xl">
                0997 - 706 - 5925
            </h2>
        </div>
    </div>

    <div class="md:w-1/2 w-full mb-10 md:mb-0"> 
        <div class="mt-6">
            <img class="object-cover object-center rounded w-full" alt="hero" src="{{ asset('img/joker.png') }}">
        </div>
    </div>

</div>

</section>

@include('layouts.footer')
