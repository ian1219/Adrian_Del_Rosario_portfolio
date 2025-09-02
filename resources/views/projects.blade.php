@include('layouts.header')

<section class="relative text-slate-800 overflow-hidden">
  <!-- Decorative background shapes -->
  <div class="pointer-events-none absolute inset-0 -z-10">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[60vw] h-[60vw] rounded-full bg-teal-600/5 blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-[40vw] h-[40vw] rounded-full bg-lime-400/10 blur-3xl"></div>
  </div>
  <div class="container mx-auto px-4 md:px-6 py-12">
    <!-- Header -->
    <div class="text-center mb-10">
      <span class="inline-flex items-center px-3 py-1 text-sm tracking-wider rounded-full bg-gradient-to-r from-stone-700 via-teal-700 to-lime-300 text-white shadow">PROJECTS</span>
      <h2 class="mt-4 text-4xl uppercase font-bold text-teal-700">E-Commerce <span class="text-pink-700">Projects</span></h2>
      <p class="mt-3 text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">A snapshot of work across my Personal E-Commerce Projects. Clean, performant, and thoughtfully designed.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <!-- Project item 1 -->
      <div class="">
        <div class="group rounded-2xl border border-slate-200 bg-white/80 backdrop-blur p-4 shadow-sm hover:border-teal-600 transition-colors">
          <div class="relative overflow-hidden">
            <div class="flex w-full transition-transform duration-300 ease-in-out" id="slider">
              <div class="w-full flex-shrink-0">
                <img class="object-cover object-center rounded-2xl w-full" alt="Apparel Ideas slide 1" src="{{ asset('img/Apparel_Ideas/Landing.png') }}">
              </div>
              <div class="w-full flex-shrink-0">
                <img class="object-cover object-center rounded-2xl w-full" alt="Apparel Ideas slide 2" src="{{ asset('img/Apparel_Ideas/Landing-1.png') }}">
              </div>
              <div class="w-full flex-shrink-0">
                <img class="object-cover object-center rounded-2xl w-full" alt="Apparel Ideas slide 3" src="{{ asset('img/Apparel_Ideas/Landing-2.png') }}">
              </div>
            </div>
            <button id="prevBtn" class="absolute top-1/2 left-2 -translate-y-1/2 bg-white/80 text-slate-600 px-2 py-2 rounded-full ring-1 ring-slate-200 hover:ring-teal-400 shadow-sm">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
              </svg>
            </button>
            <button id="nextBtn" class="absolute top-1/2 right-2 -translate-y-1/2 bg-white/80 text-slate-600 px-2 py-2 rounded-full ring-1 ring-slate-200 hover:ring-teal-400 shadow-sm">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
              </svg> 
            </button>
          </div>
          <div class="p-4">
          <h3 class="text-slate-800 font-semibold text-xl">Apparel Ideas</h3>
          <p class="py-3 text-base leading-7 text-slate-600 dark:text-gray-400">
            Explore my E-Commerce Website for top-notch clothing items like shirts, shorts, long sleeves, 
            shoes, and exclusive Apparel Ideas. I created this website on my own. Click <span class="text-blue-600 underline">Learn More</span> for further information.
        </p>
          <a href="{{ route('apparel') }}" class="mt-1 inline-flex items-center text-teal-700 px-3 py-2 rounded-full border border-slate-300 hover:border-teal-600 font-medium">Learn More
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
        </div>
      </div>
      
      <!-- Project item 2 -->
      <div class="">
        <div class="group rounded-2xl border border-slate-200 bg-white/80 backdrop-blur p-4 shadow-sm hover:border-teal-600 transition-colors">
            <img class="object-cover object-center rounded-2xl w-full" alt="Kaizen landing" src="{{ asset('img/Kaizen/landing.png') }}">
            <div class="p-4">
            <h3 class="text-slate-800 font-semibold text-xl">Kaizen Computer Parts Online Store</h3>
            <p class="py-3 text-base leading-7 text-slate-600 dark:text-gray-400">
                Discover our online store for computer parts like RAM, monitors, processors, motherboards, 
                and more at budget-friendly prices. Enjoy easy purchasing, online payments, and doorstep 
                delivery for a hassle-free experience.
          </p>
            <a href="{{ route('kaizen') }}" class="mt-1 inline-flex items-center text-teal-700 px-3 py-2 rounded-full border border-slate-300 hover:border-teal-600 font-medium">Learn More
              <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
          </div>
      </div>
    </div>
  </div>
</section>

  <script>
const slider = document.getElementById('slider');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

let slideIndex = 0;
let slideInterval;

const showSlides = () => {
  const slides = slider.getElementsByClassName('flex-shrink-0');
  const slideWidth = slides[0].clientWidth; // Assuming all slides have the same width

  if (slideIndex >= slides.length) {
    slideIndex = 0;
  }
  if (slideIndex < 0) {
    slideIndex = slides.length - 1;
  }
  
  // Animate the slider using CSS transition
  slider.style.transition = 'transform 0.5s ease-in-out';
  slider.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
};

const nextSlide = () => {
  slideIndex++;
  showSlides();
};

const prevSlide = () => {
  slideIndex--;
  showSlides();
};

nextBtn.addEventListener('click', () => {
  clearInterval(slideInterval);
  nextSlide();
  slideInterval = setInterval(nextSlide, 3000); // Restart the interval after manual click
});

prevBtn.addEventListener('click', () => {
  clearInterval(slideInterval);
  prevSlide();
  slideInterval = setInterval(nextSlide, 3000); // Restart the interval after manual click
});

// Function to start the automatic slide change
const startSlideShow = () => {
  slideInterval = setInterval(nextSlide, 3000);
};

// Function to stop the automatic slide change
const stopSlideShow = () => {
  clearInterval(slideInterval);
};

startSlideShow(); // Start the automatic slide change
  </script>

@include('layouts.footer')
