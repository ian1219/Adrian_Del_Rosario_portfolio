@include('layouts.header') 

<section class="relative text-slate-800 overflow-hidden">
  <!-- Decorative background accents -->
  <div aria-hidden="true" class="pointer-events-none absolute -top-24 -left-24 h-64 w-64 rounded-full bg-teal-100 blur-3xl opacity-40"></div>
  <div aria-hidden="true" class="pointer-events-none absolute -bottom-24 -right-24 h-64 w-64 rounded-full bg-lime-100 blur-3xl opacity-30"></div>

  <div class="container mx-auto px-4 md:px-6 py-14">
    <div class="flex flex-col md:flex-row items-start md:items-stretch gap-10">
      <!-- Left: Copy + Contact methods -->
      <div class="md:w-1/2 w-full">
        <div class="inline-flex items-center px-3 py-1 rounded-full bg-teal-50 text-teal-700 text-sm font-semibold">Contact</div>
        <h1 class="mt-4 text-4xl sm:text-5xl font-extrabold tracking-tight text-teal-700">Let’s build something great together</h1>
        <p class="mt-4 text-lg leading-relaxed text-gray-600">I craft clean, performant apps with Laravel REST APIs, React or Vue on the front‑end, and Tailwind CSS, Bootstrap, or Material UI. Reach out and I’ll reply within 24 hours to set up a quick intro call.</p>

        <!-- Badges -->
        <div class="mt-6 flex flex-wrap gap-2">
          <span class="px-3 py-1 rounded-full border border-slate-300 text-sm font-medium text-slate-700">Open to Full‑time · Contract</span>
          <span class="px-3 py-1 rounded-full border border-slate-300 text-sm font-medium text-slate-700">Around Metro Manila · PH (GMT+8)</span>
          <span class="px-3 py-1 rounded-full border border-slate-300 text-sm font-medium text-slate-700">Typically replies within 24 hours</span>
        </div>

        <!-- Contact cards -->
        <div class="mt-8 space-y-4">
          <a href="mailto:adriandelrosario180112@gmail.com" class="group flex items-center p-4 rounded-xl border border-slate-200 hover:border-teal-600 bg-white/80 backdrop-blur-sm shadow-sm transition-colors">
            <span class="p-3 rounded-lg bg-teal-50 text-teal-700">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path d="M1.5 6.75A2.25 2.25 0 013.75 4.5h16.5a2.25 2.25 0 012.25 2.25v10.5A2.25 2.25 0 0120.25 19.5H3.75A2.25 2.25 0 011.5 17.25V6.75z"/>
                <path d="M2.91 6.91a.75.75 0 011.06-.02L12 14.44l8.03-7.55a.75.75 0 111.04 1.08l-8.55 8.05a1.5 1.5 0 01-2.05 0L2.93 7.97a.75.75 0 01-.02-1.06z"/>
              </svg>
            </span>
            <div class="ml-4">
              <p class="text-sm text-slate-500">Email</p>
              <p class="text-lg font-semibold text-slate-800">adriandelrosario180112@gmail.com</p>
            </div>
          </a>

          <a href="tel:+639368214854" class="group flex items-center p-4 rounded-xl border border-slate-200 hover:border-teal-600 bg-white/80 backdrop-blur-sm shadow-sm transition-colors">
            <span class="p-3 rounded-lg bg-teal-50 text-teal-700">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
              </svg>
            </span>
            <div class="ml-4">
              <p class="text-sm text-slate-500">Phone</p>
              <p class="text-lg font-semibold text-slate-800">0936 821 4854</p>
            </div>
          </a>
        </div>

        <!-- CTAs -->
        <div class="mt-8 flex flex-col sm:flex-row items-start gap-3">
          <a href="mailto:adriandelrosario180112@gmail.com" class="inline-flex items-center justify-center text-white bg-slate-700 border-2 border-slate-700 py-2.5 px-6 rounded-lg text-base font-semibold hover:bg-transparent hover:text-slate-800 focus:outline-none focus:ring-2 focus:ring-teal-300 transition-colors">Email me</a>
          <a href="tel:+639368214854" class="inline-flex items-center justify-center text-slate-800 py-2.5 px-6 rounded-lg text-base font-semibold border-2 border-transparent hover:border-slate-700 focus:outline-none focus:ring-2 focus:ring-teal-300">Call now</a>
        </div>

        <p class="mt-3 text-sm text-slate-500">
            Prefer a different way to connect? I’m flexible and can easily adapt to your team’s preferred tools — 
            making collaboration smooth and hassle-free.
        </p>
      </div>

      <!-- Right: Image Card -->
      <div class="md:w-1/2 w-full">
        <div class="relative">
          <img class="object-cover object-center rounded-2xl w-full" alt="Contact illustration" src="{{ asset('img/joker.png') }}">
        </div>
      </div>
    </div>
  </div>
</section>

@include('layouts.footer')
