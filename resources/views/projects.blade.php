@include('layouts.header')

<section class="text-gray-600 body-font">
  <div class="container px-5 py-6 mx-auto">
    <div class="flex justify-center items-center p-6">
        <h1 class="title-font sm:text-5xl text-3xl py-4 mb-4 text-left font-bold text-gray-800 leading-tight">
            My E-Commerce Projects using Laravel</h1>
      </div>
    <div class="flex flex-wrap -m-4">
      <!-- Project item 1 -->
      <div class="lg:w-1/2 p-4">
        <div class="p-6 bg-slate-100 rounded-2xl border border-gray-300 shadow-lg">
          <div class="relative overflow-hidden">
            <div class="flex w-full transition-transform duration-300 ease-in-out" id="slider">
              <div class="w-full flex-shrink-0">
                <img class="object-cover object-center rounded w-auto" alt="hero" src="{{ asset('img/Apparel_Ideas/Landing.png') }}">
              </div>
              <div class="w-full flex-shrink-0">
                <img class="object-cover object-center rounded w-auto" alt="hero" src="{{ asset('img/Apparel_Ideas/Landing-1.png') }}">
              </div>
              <div class="w-full flex-shrink-0">
                <img class="object-cover object-center rounded w-auto" alt="hero" src="{{ asset('img/Apparel_Ideas/Landing-2.png') }}">
              </div>
            </div>
            <button id="prevBtn" class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-transparent text-gray-500 px-2 py-3 rounded">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
              </svg>
            </button>
            <button id="nextBtn" class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-transparent text-gray-500 px-3 py-1 rounded">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
              </svg> 
            </button>
          </div>
          <div class="p-6">
          <h1 class="text-gray-700 font-bold text-2xl"> Apparel Ideas </h1>
          <p class="py-3 text-base font-medium leading-7 text-slate-600 dark:text-gray-400">
            Explore my E-Commerce Website for top-notch clothing items like shirts, shorts, long sleeves, 
            shoes, and exclusive Apparel Ideas. I created this website on my own. Click <span class="text-blue-600 underline">Learn More</span> for further information.
        </p>
          <a href="{{ route('apparel') }}" class="mt-3 text-cyan-600 px-3 py-2 rounded-full border hover:border-cyan-600 inline-flex font-medium items-center">Learn More
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
        </div>
      </div>
      
      <!-- Project item 2 -->
      <div class="lg:w-1/2 p-4">
        <div class="p-6 bg-slate-100 rounded-2xl border border-gray-300 shadow-lg">
            <img class="object-cover object-center rounded w-auto" alt="hero" src="{{ asset('img/Kaizen/landing.png') }}">
            <div class="p-6">
            <h1 class="text-gray-700 font-bold text-2xl"> Kaizen Computer Parts Online Store</h1>
            <p class="py-3 text-base font-medium leading-7 text-slate-600 dark:text-gray-400">
                Discover our online store for computer parts like RAM, monitors, processors, motherboards, 
                and more at budget-friendly prices. Enjoy easy purchasing, online payments, and doorstep 
                delivery for a hassle-free experience.
          </p>
            <a href="{{ route('kaizen') }}" class="mt-3 text-cyan-600 px-3 py-2 rounded-full border hover:border-cyan-600 inline-flex font-medium items-center">Learn More
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
