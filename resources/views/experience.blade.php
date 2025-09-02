@include('layouts.header') 

<section class="relative text-gray-700 body-font overflow-hidden">

  <div class="container mx-auto px-4 md:px-6 py-12">
    <!-- Hero / Header -->
    <div class="text-center mb-10">
      <span class="inline-flex items-center px-3 py-1 text-sm tracking-wider rounded-full bg-gradient-to-r from-stone-700 via-teal-700 to-lime-300 text-white shadow">EXPERIENCE</span>
      <h2 class="mt-4 text-4xl uppercase font-bold text-teal-700">Hands On <span class="text-pink-700">Experience</span></h2>
      <p class="mt-3 text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
  I bring hands-on experience in <span class="font-semibold text-teal-700">PHP Laravel, REST APIs, and modern front-end frameworks</span> 
  to build scalable applications that solve real problems. From crafting clean backend logic to designing 
  responsive UIs with <span class="font-semibold text-pink-700">React, Tailwind CSS, and Material UI</span>, 
  I focus on delivering solutions that are both reliable and user-friendly — helping businesses grow through 
  technology.
</p>

    </div>

    <!-- Experience Cards -->
    <div class="grid gap-6 md:gap-8 md:grid-cols-2">
      <!-- Card 1 -->
      <article class="group relative bg-white rounded-xl border border-gray-100 shadow hover:shadow-lg transition overflow-hidden">
        <div class="absolute left-0 top-0 h-full w-1 bg-gradient-to-b from-teal-600 to-lime-400"></div>
        <div class="p-6">
          <div class="flex items-start justify-between">
            <div>
              <h3 class="text-2xl font-bold text-gray-800">Junior Fullstack Developer</h3>
              <p class="mt-1 text-teal-700 font-semibold">NTT Limited Philippines</p>
            </div>
            <span class="ml-4 whitespace-nowrap inline-flex items-center px-3 py-1 rounded-full bg-gray-100 text-gray-700 text-sm shadow">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1 text-teal-700" fill="currentColor" viewBox="0 0 24 24"><path d="M6 2a2 2 0 00-2 2v1H3a1 1 0 000 2h1v10a3 3 0 003 3h10a3 3 0 003-3V7h1a1 1 0 100-2h-1V4a2 2 0 00-2-2H6zm12 5v10a1 1 0 01-1 1H7a1 1 0 01-1-1V7h12z"/></svg>
              Mar – Jul 2025
            </span>
          </div>
          <ul class="mt-5 space-y-3">
            <li class="flex items-start"><span class="mt-1 mr-3 h-2.5 w-2.5 rounded-full bg-teal-600"></span><span>Developed and maintained responsive web applications using PHP and the Laravel framework.</span></li>
            <li class="flex items-start"><span class="mt-1 mr-3 h-2.5 w-2.5 rounded-full bg-teal-600"></span><span>Built and enhanced back‑office systems for administrators and player‑side features for end users.</span></li>
            <li class="flex items-start"><span class="mt-1 mr-3 h-2.5 w-2.5 rounded-full bg-teal-600"></span><span>Integrated RESTful APIs and conducted API testing using Postman in an Ubuntu Linux environment.</span></li>
          </ul>
        </div>
      </article>

      <!-- Card 2 -->
      <article class="group relative bg-white rounded-xl border border-gray-100 shadow hover:shadow-lg transition overflow-hidden">
        <div class="absolute left-0 top-0 h-full w-1 bg-gradient-to-b from-teal-600 to-lime-400"></div>
        <div class="p-6">
          <div class="flex items-start justify-between">
            <div>
              <h3 class="text-2xl font-bold text-gray-800">PHP Developer</h3>
              <p class="mt-1 text-teal-700 font-semibold">Golden Arrow Digital Solutions</p>
            </div>
            <span class="ml-4 whitespace-nowrap inline-flex items-center px-3 py-1 rounded-full bg-gray-100 text-gray-700 text-sm shadow">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1 text-teal-700" fill="currentColor" viewBox="0 0 24 24"><path d="M6 2a2 2 0 00-2 2v1H3a1 1 0 000 2h1v10a3 3 0 003 3h10a3 3 0 003-3V7h1a1 1 0 100-2h-1V4a2 2 0 00-2-2H6zm12 5v10a1 1 0 01-1 1H7a1 1 0 01-1-1V7h12z"/></svg>
              Jan 2024 – Feb 2025
            </span>
          </div>
          <ul class="mt-5 space-y-3">
            <li class="flex items-start"><span class="mt-1 mr-3 h-2.5 w-2.5 rounded-full bg-teal-600"></span><span>Integrated RESTful APIs and built backend logic using PHP (OOP) with a PostgreSQL database.</span></li>
            <li class="flex items-start"><span class="mt-1 mr-3 h-2.5 w-2.5 rounded-full bg-teal-600"></span><span>Created and executed unit and feature tests with Postman and Laravel testing tools.</span></li>
            <li class="flex items-start"><span class="mt-1 mr-3 h-2.5 w-2.5 rounded-full bg-teal-600"></span><span>Contributed to front‑end redesign using Blade templates and improved UI/UX performance.</span></li>
          </ul>
        </div>
      </article>
    </div>

  </div>
</section>

@include('layouts.footer')
