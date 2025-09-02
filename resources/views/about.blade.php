@include('layouts.header') 

<section class="relative text-gray-700 body-font overflow-hidden">
    
  <!-- Decorative background shapes -->
  <div class="pointer-events-none absolute inset-0 -z-10">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[60vw] h-[60vw] rounded-full bg-teal-600/5 blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-[40vw] h-[40vw] rounded-full bg-lime-400/10 blur-3xl"></div>
  </div>

  <div class="container mx-auto px-4 md:px-6 py-12">
    <div class="text-center max-w-3xl mx-auto">
      <span class="inline-flex items-center px-3 py-1 text-sm tracking-wider rounded-full bg-gradient-to-r from-stone-700 via-teal-700 to-lime-300 text-white shadow">ABOUT</span>
      <h1 class="mt-4 text-4xl uppercase font-bold text-teal-700">Adrian D. <span class="text-pink-700">Del Rosario</span></h1>
      <p class="mt-3 text-gray-600 dark:text-gray-400">Junior Full‑Stack / PHP Developer passionate about crafting clean, performant web experiences. I blend pragmatic engineering with thoughtful UI to turn ideas into reliable products.</p>
      <!-- Role badges -->
      <div class="mt-5 flex flex-wrap justify-center gap-3">
        <span class="px-3 py-1 text-sm rounded-full bg-white/70 backdrop-blur border border-teal-200 text-teal-700">Full‑Stack</span>
        <span class="px-3 py-1 text-sm rounded-full bg-white/70 backdrop-blur border border-amber-200 text-amber-700">PHP Developer</span>
        <span class="px-3 py-1 text-sm rounded-full bg-white/70 backdrop-blur border border-sky-200 text-sky-700">Web Developer</span>
      </div>
    </div>
  </div>
  <!-- subtle divider -->
  <div class="mx-auto max-w-5xl px-4 md:px-6">
    <div class="h-px w-full bg-gradient-to-r from-transparent via-gray-200 to-transparent"></div>
  </div>
</section>

<div class="text-gray-600 body-font pt-12">
    <div class="container mx-auto flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 w-full mb-10 md:mb-0">
            <h2 class="mb-4 text-3xl md:text-4xl font-extrabold tracking-tight text-teal-700">
                About
            </h2>
            <p class="mb-6 text-base font-medium leading-7 text-slate-600 dark:text-gray-400">
                I'm Adrian D. Del Rosario, a junior full-stack and PHP developer. I specialize in building 
                <span class="font-semibold text-teal-700">REST API–driven applications</span> using Laravel and PHP OOP principles, 
                applying proven <span class="font-semibold">design patterns</span> to ensure maintainability. 
                My workflow includes using <span class="font-semibold">Postman</span> for API testing, 
                <span class="font-semibold">Docker Desktop</span> for containerized environments, 
                and modern front-end stacks such as <span class="font-semibold">React JS, Tailwind CSS, Material UI, and Bootstrap</span> 
                to deliver responsive and engaging user experiences.
            </p>
      <p class="mb-10 text-base font-medium leading-7 text-slate-600 dark:text-gray-400">
        <span class="text-slate-700 text-lg font-bold">Degree</span><br>
        BS in Information Technology <br>
        <span class="text-slate-700 text-lg font-bold">Studied at</span><br>
        <a href="https://psau.edu.ph/" target="_blank" class="text-amber-600 underline">
          Pampanga State Agricultural University
        </a>
      </p>
            
            <!-- Quick Facts -->
            <div class="px-3 py-3 bg-slate-100 border border-gray-300 rounded-2xl shadow-lg mb-10">
    <div class="flex items-center gap-2">
        <span class="text-slate-700 text-lg font-bold">Quick Facts</span>
        <span class="text-xs uppercase tracking-wide text-slate-500">(at a glance)</span>
    </div>
    <ul class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-4">
        <li class="flex items-center gap-3 p-3 rounded-xl">
            <span class="inline-flex items-center justify-center w-9 h-9 rounded-full bg-teal-50 text-teal-600">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l3 3"/></svg>
            </span>
            <div class="text-slate-700"><span class="font-semibold">Age:</span> 26 years old</div>
        </li>
        <li class="flex items-center gap-3 p-3 rounded-xl">
            <span class="inline-flex items-center justify-center w-9 h-9 rounded-full bg-amber-50 text-amber-600">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6l7 4-7 4-7-4 7-4zm0 8v4"/></svg>
            </span>
            <div class="text-slate-700"><span class="font-semibold">Hobby:</span> Playing basketball</div>
        </li>
        <li class="sm:col-span-2 flex items-center gap-3 p-3 rounded-xl">
            <span class="inline-flex items-center justify-center w-9 h-9 rounded-full bg-sky-50 text-sky-600">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 11c1.657 0 3-1.567 3-3.5S13.657 4 12 4 9 5.567 9 7.5 10.343 11 12 11zm0 0c-4.418 0-8 2.239-8 5v2h16v-2c0-2.761-3.582-5-8-5z"/></svg>
            </span>
            <div class="text-slate-700"><span class="font-semibold">Current Location:</span> Modesto Street, Malate, Manila</div>
        </li>
        <li class="sm:col-span-2 flex items-center gap-3 p-3 rounded-xl">
            <span class="inline-flex items-center justify-center w-9 h-9 rounded-full bg-pink-50 text-pink-600">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21s-6-4.686-6-10a6 6 0 1112 0c0 5.314-6 10-6 10z"/></svg>
            </span>
            <div class="text-slate-700"><span class="font-semibold">Originally from:</span> Sasmuan, Pampanga</div>
        </li>
    </ul>
</div>

            <!-- End Quick Facts -->
            
            <div class="px-3 py-3 bg-slate-100 border border-gray-300 rounded-2xl shadow-lg mb-10">
                <span class="text-slate-700 px-6 ml-6 text-lg font-bold mb-4">Skills</span>
                <div class="flex flex-wrap px-2 ml-6">
                    
    <!-- C++ toggle button -->
    <button data-modal-target="static-modal" data-modal-toggle="static-modal" class="px-5 py-2 mt-3 border border-gray-400 rounded-md ml-2 mr-2 bg-white font-medium hover:text-slate-800 hover:bg-slate-100 transition-colors focus:outline-none focus:ring-2 focus:ring-teal-300" type="button">
            C++
    </button>
    <!-- C++ modal -->
    <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>

                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-center justify-center min-h-screen">
                <div class="modal-content bg-white p-8 max-w-xl w-full md:max-w-2xl lg:max-w-3xl xl:max-w-4xl 2xl:max-w-5xl rounded shadow-lg">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-blue-700 dark:text-white">C++ Language</h3>
                    <img class="object-cover ml-6 object-center rounded w-16" alt="hero" src="{{ asset('img/skill/skill-1.png') }}">
                    <button data-modal-hide="static-modal" type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>

                    </div>
                    <div class="p-4 md:p-5 space-y-4">
                        <p class="text-base leading-relaxed text-left text-gray-600 dark:text-gray-400">
                        <span class="text-blue-600">  C++ </span> holds a special place in my programming journey as the first language I learned about five years ago 
                        during my <span class="underline font-medium"> ECE (Electronics Communication Engineering)</span> course. Unfortunately, I couldn't finish my 
                        <span class="underline font-medium">ECE</span> degree 
                        due to academic difficulties, prompting my shift to BSIT. In my first year as an IT student, 
                        I already have a solid grasp of <span class="text-blue-600">  C++ </span> and a preliminary understanding of the mathematical components in our coursework.</p>
                        <p class="text-base leading-relaxed text-left text-gray-600 dark:text-gray-400">
                        I immersed myself in the study of C++ and acquired knowledge in various programming constructs such as the <span class="text-blue-600"> if statement, 
                        else statement, if-else statement, nested if-else statement, switch statement, for loop, while loop, do-while loop, and array</span>. Additionally, 
                        I also explored <span class="text-blue-600"> Data Structure Algorithms, learning concepts like multidimensional arrays and queues. </span>
                        Despite the absence of a computer or laptop, I committed to daily coding practice, 
                        utilizing my cellphone and paper as tools. Remarkably, this routine enabled me to inadvertently absorb and reinforce my learning process.</p>
                        </div>

                <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="static-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 
                    focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 
                    focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600
                  dark:focus:ring-gray-600">Close</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End of C++ modal -->

    <!-- Java toggle button -->
    <button data-modal-target="java-modal" data-modal-toggle="java-modal" class="px-5 py-2 mt-3 border border-gray-400 rounded-md ml-2 mr-2 bg-white font-medium hover:text-slate-800 hover:bg-slate-100 transition-colors focus:outline-none focus:ring-2 focus:ring-teal-300" type="button">
        Java
    </button>
    <!-- Java modal -->
    <div id="java-modal" data-modal-backdrop="java" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>

                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-center justify-center min-h-screen">
                <div class="modal-content bg-white p-8 max-w-xl w-full md:max-w-2xl lg:max-w-3xl xl:max-w-4xl 2xl:max-w-5xl rounded shadow-lg">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-red-600 dark:text-white">Java Programming</h3>
                    <img class="object-cover ml-6 object-center rounded w-24" alt="hero" src="{{ asset('img/skill/skill-2.png') }}">
                    <button data-modal-hide="java-modal" type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>

                    </div>
                    <div class="p-4 md:p-5 space-y-4">
                         <p class="text-base leading-relaxed text-left text-gray-600 dark:text-gray-400">
                            During my second year of college in the field of Information Technology, I delved into the study of <span class="text-red-600"> Java.</span> This exploration spanned a single semester. 
                            Given my prior knowledge of <span class="text-blue-600">C++</span>, I found it relatively straightforward to navigate <span class="text-red-600"> Java programming.</span> Similar to 
                            <span class="text-blue-600">C++</span>, we engaged in coding practices 
                            involving various control flow structures such as <span class="text-red-600"> if statements, else statements, if-else statements, loops, switches etc</span>. Unfortunately, 
                            our curriculum did not extend to cover arrays within Java due to the limited duration of the course.
                            </p>
                             <p class="text-base leading-relaxed text-left text-gray-600 dark:text-gray-400">
                            While my experience with <span class="text-red-600"> Java</span> was enriching and provided me with valuable insights, if I were to express a preference, I would lean towards <span class="text-blue-600">C++</span>, 
                            primarily because of my deeper familiarity with it. However, it's worth noting that both languages share numerous similarities in 
                            terms of their foundational concepts.</p>
                    </div>

                <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="java-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 
                    focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 
                    focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600
                  dark:focus:ring-gray-600">Close</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End of Java modal -->

    <!-- HTML5 toggle button -->
    <button data-modal-target="html5-modal" data-modal-toggle="html5-modal" class="px-5 py-2 mt-3 border border-gray-400 rounded-md ml-2 mr-2 font-medium bg-white hover:text-slate-800 hover:bg-slate-100 transition-colors focus:outline-none focus:ring-2 focus:ring-teal-300" type="button">
        HTML
    </button>
    <!-- HTML5 modal -->
    <div id="html5-modal" data-modal-backdrop="html5" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>

                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-center justify-center min-h-screen">
                <div class="modal-content bg-white p-8 max-w-xl w-full md:max-w-2xl lg:max-w-3xl xl:max-w-4xl 2xl:max-w-5xl rounded shadow-lg">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-orange-600 dark:text-white">HTML5</h3>
                    <img class="object-cover ml-6 object-center rounded w-16" alt="hero" src="{{ asset('img/skill/skill-3.png') }}">
                    <button data-modal-hide="html5-modal" type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>

                    </div>
                    <div class="p-4 md:p-5 space-y-4">
                        <p class="text-base leading-relaxed text-left text-gray-600 dark:text-gray-400">
                            <span class="text-orange-600"> HTML</span>, or <span class="text-orange-600">HyperText Markup Language</span>, constitutes a set of markup symbols or codes seamlessly integrated into a file tailored for online presentation. 
                            <span class="text-orange-600">Our exposure to HTML</span> occurred during the third year of college, and I swiftly developed an appreciation for its functionality. 
                            The immediacy of observing the output directly in the browser appealed to me. Recognizing its enduring significance,
                            <span class="text-orange-600">I invested thorough attention in mastering HTML</span>, 
                            foreseeing its increased utilization in my future endeavors.</p>

                            <p class="text-base leading-relaxed text-left text-gray-600 dark:text-gray-400">
                            Despite encountering setbacks such as losing websites due to the constrained specifications of my computer, 
                            <span class="text-orange-600">HTML</span>, along with CSS and JavaScript, 
                            serves as the bedrock of my proficiency in web development.<span class="text-orange-600">Even now, HTML remains a staple in my work</span>, and I persist in exploration. 
                            This commitment persists because <span class="text-orange-600">HTML</span> is fundamental to the creation of websites, 
                            and its continual application enriches my 
                            understanding of the web development landscape.</p>
                    </div>

                <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="html5-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 
                    focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 
                    focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600
                  dark:focus:ring-gray-600">Close</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End of HTML5 modal -->

    <!-- CSS toggle button -->
    <button data-modal-target="css-modal" data-modal-toggle="css-modal" class="px-5 py-2 mt-3 border border-gray-400 rounded-md ml-2 mr-2 bg-white font-medium hover:text-slate-800 hover:bg-slate-100 transition-colors focus:outline-none focus:ring-2 focus:ring-teal-300" type="button">
        CSS
    </button>
    <!-- CSS modal -->
    <div id="css-modal" data-modal-backdrop="css" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>

                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-center justify-center min-h-screen">
                <div class="modal-content bg-white p-8 max-w-xl w-full md:max-w-2xl lg:max-w-3xl xl:max-w-4xl 2xl:max-w-5xl rounded shadow-lg">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">CSS</h3>
                    <img class="object-cover ml-6 object-center rounded w-14" alt="hero" src="{{ asset('img/skill/skill-4.png') }}">
                    <button data-modal-hide="css-modal" type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>

                    </div>
                    <div class="p-4 md:p-5 space-y-4">
                         <p class="text-base leading-relaxed text-left text-gray-600 dark:text-gray-400">
                            <span class="text-cyan-600 underline">Cascading Style Sheets (CSS)</span> The study of <span class="text-cyan-600">CSS</span> 
                            was concurrent with <span class="text-orange-600">HTML</span>, 
                            as it plays a crucial role in providing design and layout to a website. If <span class="text-orange-600">HTML</span> 
                            is likened to civil engineering, 
                            responsible for the foundation and layout, <span class="text-cyan-600">CSS</span>, in the realm of web development, assumes the role of an architect. 
                            It is the architect that designs and enhances the visual appeal of the website's front-end.</p>
                             <p class="text-base leading-relaxed text-left text-gray-600 dark:text-gray-400">
                                My extensive engagement with <span class="text-cyan-600">CSS</span> originated from school teachings that emphasized creating 
                                websites using only <span class="text-orange-600">HTML</span> and <span class="text-cyan-600">CSS</span>. 
                                This hands-on approach, without relying on frameworks like Bootstrap, enabled a profound understanding of website creation. 
                                It wasn't solely limited to classroom instruction; I pursued self-study to delve deeper into the intricacies of <span class="text-cyan-600">CSS</span>. 
                                Driven by my passion for web development, the art of front-end website design has remained a constant pursuit for me.</p>
                    </div>

                <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="css-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 
                    focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 
                    focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600
                  dark:focus:ring-gray-600">Close</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End of CSS modal -->  

    <!-- MySQL toggle button -->
    <button data-modal-target="mysql-modal" data-modal-toggle="mysql-modal" class="px-5 py-2 mt-3 border border-gray-400 rounded-md ml-2 mr-2 bg-white font-medium hover:text-slate-800 hover:bg-slate-100 transition-colors focus:outline-none focus:ring-2 focus:ring-teal-300" type="button">
        MySQL
    </button>
    <!-- MySQL modal -->
    <div id="mysql-modal" data-modal-backdrop="mysql" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>

                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-center justify-center min-h-screen">
                <div class="modal-content bg-white p-8 max-w-xl w-full md:max-w-2xl lg:max-w-3xl xl:max-w-4xl 2xl:max-w-5xl rounded shadow-lg">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white"><span class="text-blue-600 font-medium">My</span><span class="text-amber-600 font-medium">SQL</span></h3>
                    <img class="object-cover ml-6 object-center rounded w-24" alt="hero" src="{{ asset('img/skill/skill-5.png') }}">
                    <button data-modal-hide="mysql-modal" type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>

                    </div>
                    <div class="p-4 md:p-5 space-y-4">
                         <p class="text-base leading-relaxed text-left text-gray-600 dark:text-gray-400">
                            During the third year of my studies, we delved into <span class="text-blue-600 font-medium">My</span><span class="text-orange-600 font-medium">SQL</span> 
                            alongside HTML. Navigating <span class="text-blue-600 font-medium">My</span><span class="text-orange-600 font-medium">SQL</span> posed a significant challenge, 
                            particularly given the shift from a programming language like C++. In C++, the focus was on learning, and then suddenly, 
                            the landscape expanded to encompass Java, HTML, and <span class="text-blue-600 font-medium">My</span><span class="text-orange-600 font-medium">SQL</span>. 
                            The intricacies of creating a database table and grasping the 
                            foundational concepts of <span class="text-blue-600 font-medium">My</span><span class="text-orange-600 font-medium">SQL</span> presented a formidable learning curve.</p>
                         <p class="text-base leading-relaxed text-left text-gray-600 dark:text-gray-400">
                            The transition from C++ where we were working with databases added another layer of complexity. The need to download specific applications 
                            for <span class="text-blue-600 font-medium">My</span><span class="text-orange-600 font-medium">SQL</span> further compounded the challenges. Despite these hurdles, 
                            the demanding journey toward becoming a proficient <span class="underline font-medium">programmer</span> or 
                            <span class="underline font-medium">software developer </span>
                            did not deter me. Even though I find myself in the midst of this journey, the initial complexities haven't proven insurmountable.</p>
                         <p class="text-base leading-relaxed text-left text-gray-600 dark:text-gray-400">
                            Our exploration of <span class="text-blue-600 font-medium">My</span><span class="text-orange-600 font-medium">SQL</span> was confined to a single semester, yet the depth of understanding 
                            required made it a substantial part of the learning experience.</p>
                    </div>

                <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="mysql-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 
                    focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 
                    focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600
                  dark:focus:ring-gray-600">Close</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End of MySQL modal -->   

    <!-- PHP toggle button -->
    <button data-modal-target="php-modal" data-modal-toggle="php-modal" class="px-5 py-2 mt-3 border border-gray-400 rounded-md ml-2 mr-2 bg-white font-medium hover:text-slate-800 hover:bg-slate-100 transition-colors focus:outline-none focus:ring-2 focus:ring-teal-300" type="button">
        PHP
    </button>
    <!-- PHP modal -->
    <div id="php-modal" data-modal-backdrop="php" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>

                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-center justify-center min-h-screen">
                <div class="modal-content bg-white p-8 max-w-xl w-full md:max-w-2xl lg:max-w-3xl xl:max-w-4xl 2xl:max-w-5xl rounded shadow-lg">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">PHP</h3>
                    <img class="object-cover ml-6 object-center rounded w-24" alt="hero" src="{{ asset('img/skill/skill-6.png') }}">
                    <button data-modal-hide="php-modal" type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>

                    </div>
                    <div class="p-4 md:p-5 space-y-4">
                         <p class="text-base leading-relaxed text-left text-gray-600 dark:text-gray-400">
                            <span class="text-cyan-600">PHP</span> stands as <span class="text-orange-600 font-normal">my primary programming language at present</span>, specifically chosen due to my interest for web development. 
                            During my third year, I studied PHP for two semesters, and my first project with it was a <span class="text-orange-600 font-normal">Point Of Sales (POS)</span>.
                            This significant task involved coordinating with a team of ten, where I took on the role of a leader alongside a co-leader. 
                            Our group effort resulted in approximately 90% completion of the POS criteria. </p>
                         <p class="text-base leading-relaxed text-left text-gray-600 dark:text-gray-400">
                            My experience with <span class="text-cyan-600">PHP</span> extends beyond this project; it includes multiple websites, projects, and databases, all of which make use of the Laravel framework. 
                            Notably, <span class="text-orange-600 font-normal">our panelists appreciated the POS system we developed</span> with HTML, CSS, <span class="text-cyan-600">PHP</span>, and JavaScript.
                            We purposefully avoided using Bootstrap because our academic curriculum emphasized the construction of websites from scratch, rather than relying on easily available templates.</p>
                         <p class="text-base leading-relaxed text-left text-gray-600 dark:text-gray-400">
                            Leading the development of a baby thesis POS system was a significant stepping stone in my pursuit of a deeper understanding of web programming knowledge.
                            <span class="text-cyan-600">PHP continues to serve as my primary study language</span>, and the experience strengthened my foundation, allowing me to continue to learn and progress in the field.</p>
                    </div>

                <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="php-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 
                    focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 
                    focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600
                  dark:focus:ring-gray-600">Close</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End of PHP modal --> 

    <!-- JavaScript toggle button -->
    <button data-modal-target="JavaScript-modal" data-modal-toggle="JavaScript-modal" class="px-5 py-2 mt-3 border border-gray-400 rounded-md ml-2 mr-2 bg-white font-medium hover:text-slate-800 hover:bg-slate-100 transition-colors focus:outline-none focus:ring-2 focus:ring-teal-300" type="button">
        JavaScript
    </button>
    <!-- JavaScript modal -->
    <div id="JavaScript-modal" data-modal-backdrop="JavaScript" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>

                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-center justify-center min-h-screen">
                <div class="modal-content bg-white p-8 max-w-xl w-full md:max-w-2xl lg:max-w-3xl xl:max-w-4xl 2xl:max-w-5xl rounded shadow-lg">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">JavaScript</h3>
                    <img class="object-cover ml-6 object-center rounded w-20" alt="hero" src="{{ asset('img/skill/skill-7.png') }}">
                    <button data-modal-hide="JavaScript-modal" type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>

                    </div>
                    <div class="p-4 md:p-5 space-y-4">
                         <p class="text-base leading-relaxed text-left text-gray-600 dark:text-gray-400">
                            During our course, <span class="text-orange-600 font-normal">our focus leaned heavily towards crafting project websites</span>. For instance, our major project that time was a Point of Sale (POS) system 
                            developed in my baby thesis. Even though our exposure to <span class="text-orange-600 font-normal">JavaScript</span> remained limited to the basics, 
                            it played a crucial role in making our thesis functional.</p>
                         <p class="text-base leading-relaxed text-left text-gray-600 dark:text-gray-400">
                            <span class="text-orange-600 font-normal">JavaScript</span> carries immense significance in the realm of web development. 
                            <span class="text-orange-600 font-normal">To deepen my understanding, I pursued self-study, practicing extensively and frequently 
                            referring to video tutorials on platforms like YouTube and Google.</span> The true essence of learning was found in the application of acquired knowledge from the 
                            internet and various readings, <span class="text-orange-600 font-normal">implementing these concepts into actual website development.</span></p>
                         <p class="text-base leading-relaxed text-left text-gray-600 dark:text-gray-400">
                            <span class="text-orange-600 font-normal">JavaScript</span>, with its functionalities such as dropdown and modals etc, served as a cornerstone in both front-end and back-end website development. 
                            Depending on the website's requirements, I crafted diverse scripts to cater to specific needs. <span class="text-orange-600 font-normal">This experience stands as a foundation 
                            for upcoming projects, guiding the direction of my future endeavors.</span></p>
                    </div>

                <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="JavaScript-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 
                    focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 
                    focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600
                  dark:focus:ring-gray-600">Close</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End of JavaScript modal -->    

    <!-- Tailwind CSS toggle button -->
    <button data-modal-target="tailwind-modal" data-modal-toggle="tailwind-modal" class="px-5 py-2 mt-3 border border-gray-400 rounded-md ml-2 mr-2 bg-white font-medium hover:text-slate-800 hover:bg-slate-100 transition-colors focus:outline-none focus:ring-2 focus:ring-teal-300" type="button">
        Tailwind CSS
    </button>
    <!-- Tailwind CSS modal -->
    <div id="tailwind-modal" data-modal-backdrop="tailwind" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>

                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-center justify-center min-h-screen">
                <div class="modal-content bg-white p-8 max-w-xl w-full md:max-w-2xl lg:max-w-3xl xl:max-w-4xl 2xl:max-w-5xl rounded shadow-lg">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Tailwind CSS</h3>
                    <img class="object-cover ml-6 object-center rounded w-20" alt="hero" src="{{ asset('img/skill/skill-8.png') }}">
                    <button data-modal-hide="tailwind-modal" type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>

                    </div>
                    <div class="p-4 md:p-5 space-y-4">
                         <p class="text-base leading-relaxed text-left text-gray-600 dark:text-gray-400">
                            In my college days, <span class="text-orange-600 font-normal">we didn't cover <span class="text-sky-700">Tailwind CSS</span>. It was during my fourth year in college that I 
                                took the initiative to learn it myself.</span>
                            At that time, I was also studying Laravel, a framework for web development. In web design, you often choose between 
                            Bootstrap and <span class="text-sky-700">Tailwind CSS</span>.
                            Since I had a bit of understanding about Bootstrap, I decided to explore and study <span class="text-sky-700">Tailwind CSS.</span></p>
                         <p class="text-base leading-relaxed text-left text-gray-600 dark:text-gray-400">
                            From that point onwards, I've been using <span class="text-sky-700">Tailwind CSS consistently</span>. It's become my primary tool for the front-end side of websites, 
                            continuing from my past projects up to the ones I'm working on presently. <span class="text-sky-700">For the most recent projects, I've used only Tailwind CSS, 
                            skipping Bootstrap entirely</span> </p>
                         <p class="text-base leading-relaxed text-left text-gray-600 dark:text-gray-400">
                            <span class="text-sky-700">Tailwind CSS</span> has proven itself as an excellent companion for Laravel.
                             As I kept practicing, I noticed a significant improvement in my web development 
                            skills. <span class="text-orange-600 font-normal">I'm committed to furthering my expertise with Tailwind CSS, 
                                aiming to meet and exceed the industry's expectations in website creation. </span></p>
                    </div>

                <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="tailwind-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 
                    focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 
                    focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600
                  dark:focus:ring-gray-600">Close</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End of Tailwind CSS modal --> 

    <!-- mariaDB toggle button -->
    <button data-modal-target="mariaDB-modal" data-modal-toggle="mariaDB-modal" class="px-5 py-2 mt-3 border border-gray-400 rounded-md ml-2 mr-2 bg-white font-medium hover:text-slate-800 hover:bg-slate-100 transition-colors focus:outline-none focus:ring-2 focus:ring-teal-300" type="button">
        MariaDB
    </button>
    <!-- mariaDB modal -->
    <div id="mariaDB-modal" data-modal-backdrop="mariaDB" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>

                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-center justify-center min-h-screen">
                <div class="modal-content bg-white p-8 max-w-xl w-full md:max-w-2xl lg:max-w-3xl xl:max-w-4xl 2xl:max-w-5xl rounded shadow-lg">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">SQL</h3>
                    <img class="object-cover ml-6 object-center rounded w-20" alt="hero" src="{{ asset('img/skill/skill-9.png') }}">
                    <button data-modal-hide="mariaDB-modal" type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>

                    </div>
                    <div class="p-4 md:p-5 space-y-4">
                         <p class="text-base leading-relaxed text-left text-gray-600 dark:text-gray-400">
                            <span class="text-orange-600 font-normal">XAMPP</span> is a free and Open-source cross-platform Web Server Solution Stack built by Apache Friends, 
                            which consists mostly of the Apache HTTP Server, <span class="text-orange-600 font-normal">
                            <span class="text-orange-600 font-medium">MariaDB</span>/MySQL Database</span>, and interpreters for PHP and Perl scripts.</p>
                         <p class="text-base leading-relaxed text-left text-gray-600 dark:text-gray-400">
                            I use <span class="text-orange-600 font-normal">XAMPP</span> for managing <span class="text-orange-600">web servers</span>, 
                            even though I haven't used frameworks 
                            before i started using it like Laravel at that time. 
                            When I started with my baby thesis and earlier projects,<span class="text-orange-600">XAMPP was my primary web server management.</span>
                            Now that I'm into Laravel, I still rely on <span class="text-orange-600">XAMPP for connecting
                            databases to the framework</span>. It's a key tool for many, including me.</p>
                         <p class="text-base leading-relaxed text-left text-gray-600 dark:text-gray-400">
                            <span class="text-orange-600">XAMPP's</span> great. It's user-friendly and links smoothly with my Laravel framework. Over time, I've become quite comfortable using it. 
                            I think I'll use it more in future projects. It helps me handle databases, code reading, 
                            and deployment on the front-end side.</p>
                         <p class="text-base leading-relaxed text-left text-gray-600 dark:text-gray-400">
                            Sometimes, <span class="text-orange-600">my earlier websites disappeared because of my limited knowledge of XAMPP.</span>
                            Forgetting to save files before updates led to site deletions. 
                            <span class="text-orange-600">But now, I've learned from those experiences and have a better grip on managing my websites.</span></p>
                    </div>

                <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="mariaDB-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 
                    focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 
                    focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600
                  dark:focus:ring-gray-600">Close</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End of mariaDB modal -->    

    <!-- Laravel toggle button -->
    <button data-modal-target="laravel-modal" data-modal-toggle="laravel-modal" class="px-5 py-2 mt-3 border border-gray-400 rounded-md ml-2 mr-2 bg-white font-medium hover:text-slate-800 hover:bg-slate-100 transition-colors focus:outline-none focus:ring-2 focus:ring-teal-300" type="button">
        Laravel
    </button>
    <!-- Laravel modal -->
    <div id="laravel-modal" data-modal-backdrop="laravel" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>

                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-center justify-center min-h-screen">
                <div class="modal-content bg-white p-8 max-w-xl w-full md:max-w-2xl lg:max-w-3xl xl:max-w-4xl 2xl:max-w-5xl rounded shadow-lg">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Laravel</h3>
                    <img class="object-cover ml-6 object-center rounded w-32" alt="hero" src="{{ asset('img/skill/skill-10.png') }}">
                    <button data-modal-hide="laravel-modal" type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>

                    </div>
                    <div class="p-4 md:p-5 space-y-4">
                         <p class="text-base leading-relaxed text-left text-gray-600 dark:text-gray-400">
                            <span class="text-red-600 font-normal">Currently, I rely on PHP, XAMPP, and Laravel to finalize the websites I've completed.</span>
                            <span class="text-red-600 font-normal">Laravel</span> stands out as <span class="text-red-600 font-normal">my main framework</span>, 
                            and I've been immersed in it for more than a year. 
                            During this time, I've delved into various aspects of <span class="text-red-600 font-normal">Laravel</span>, 
                            mastering tasks like CRUD operations and crafting blog websites.</p>
                         <p class="text-base leading-relaxed text-left text-gray-600 dark:text-gray-400">
                            However, due to a mishap related to my skills in MariaDB, <span class="text-red-600 font-normal">I lost my previous websites when I made 
                            an incorrect XAMPP update.</span> 
                            <span class="text-red-600 font-normal">Now, I'm engaged in a project that showcases my skills to the industry.</span> 
                            I utilize essential tools like <span class="text-red-600 font-normal">Laravel</span>, 
                            PHP, and XAMPP to independently craft websites that demonstrate my capabilities.</p>
                    </div>

                <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="laravel-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 
                    focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 
                    focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600
                  dark:focus:ring-gray-600">Close</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End of Laravel modal -->    

    <!-- WordPress toggle button -->
    <button data-modal-target="wordpress-modal" data-modal-toggle="wordpress-modal" class="px-5 py-2 mt-3 border border-gray-400 rounded-md ml-2 mr-2 bg-white font-medium hover:text-slate-800 hover:bg-slate-100 transition-colors focus:outline-none focus:ring-2 focus:ring-teal-300" type="button">
        WordPress
    </button>
    <!-- WordPress modal -->
    <div id="wordpress-modal" data-modal-backdrop="wordpress" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>

                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-center justify-center min-h-screen">
                <div class="modal-content bg-white p-8 max-w-xl w-full md:max-w-2xl lg:max-w-3xl xl:max-w-4xl 2xl:max-w-5xl rounded shadow-lg">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">WordPress</h3>
                    <img class="object-cover ml-6 object-center rounded w-24" alt="hero" src="{{ asset('img/skill/skill-11.png') }}">
                    <button data-modal-hide="wordpress-modal" type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>

                    </div>
                    <div class="p-4 md:p-5 space-y-4">
                         <p class="text-base leading-relaxed text-left text-gray-600 dark:text-gray-400">
                            During my college days, <span class="text-sky-600 font-normal">I studied the WordPress</span> since i have a subject on it, 
                            a software app called a <span class="text-sky-600 font-normal">Content Management System (CMS).</span>
                            I didn't dive too deeply into it because making a website with <span class="text-sky-600 font-normal">WordPress is simple</span> for me; you don't need to do much 
                            coding. I included it as a skill because <span class="text-sky-600 font-normal">whenever a company needed help with WordPress, I could step in.</span> 
                            With my programming knowledge, handling <span class="text-sky-600 font-normal">CMS like WordPress</span> feels easy. 
                            I've worked on previous <span class="text-sky-600 font-normal">WordPress projects,</span>
                            and whenever I look back at them, it helps me recall and create <span class="text-sky-600 font-normal">WordPress websites.</span> Showing these skills is essential in the industry, 
                            especially when they're needed for certain projects to assist companies.</p>
                    </div>

                <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="wordpress-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 
                    focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 
                    focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600
                  dark:focus:ring-gray-600">Close</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End of WordPress modal -->    

    <!-- Bootstrap toggle button -->
    <button data-modal-target="bootstrap-modal" data-modal-toggle="bootstrap-modal" class="px-5 py-2 mt-3 border border-gray-400 rounded-md ml-2 mr-2 bg-white font-medium hover:text-slate-800 hover:bg-slate-100 transition-colors focus:outline-none focus:ring-2 focus:ring-teal-300" type="button">
        Bootstrap5
    </button>
    <!-- Bootstrap modal -->
    <div id="bootstrap-modal" data-modal-backdrop="bootsrap" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>

                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-center justify-center min-h-screen">
                <div class="modal-content bg-white p-8 max-w-xl w-full md:max-w-2xl lg:max-w-3xl xl:max-w-4xl 2xl:max-w-5xl rounded shadow-lg">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Bootstrap5</h3>
                    <img class="object-cover ml-6 object-center rounded w-24" alt="hero" src="{{ asset('img/skill/skill-12.png') }}">
                    <button data-modal-hide="bootstrap-modal" type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>

                    </div>
                    <div class="p-4 md:p-5 space-y-4">
                         <p class="text-base leading-relaxed text-left text-gray-600 dark:text-gray-400">
                            I used <span class="text-violet-700 font-normal">bootstrap up to know. It depends on the design of the front-end that I want to show.</span>
                            I developed a simple website design because I don't usually use Photoshop or anything else that might detract from the front-end experience. 
                            I only want a clean look and understandable text and paragraph with light colors and gray 
                            depending on my perspective view on my front-end display.</p>
                         <p class="text-base leading-relaxed text-left text-gray-600 dark:text-gray-400">
                            <span class="text-violet-700 font-normal">In my previous work, I utilized bootsrap, such as in my thesis and the project I developed, 
                            Apparel Ideas.</span> In order to create the Apparel Ideas e-commerce website, 
                            <span class="text-violet-700 font-normal">I used a combination of tailwind and bootsrap.
                            I'll probably keep using bootsrap because it has a good front-end design, but tailwind css is my top priority.</span>
                            It just depends on the requirement for a website, because what needs to be done is what I'm going to create, 
                            and I will adjust the project accordingly.</p>
                    </div>

                <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="bootstrap-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 
                    focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 
                    focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600
                  dark:focus:ring-gray-600">Close</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End of Bootstrap modal -->    
        
                </div>
            </div>
        </div>
        <div class="md:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start items-center text-center">
            <div class="flex justify-center mt-4 items-center">
                <img class="object-cover object-center rounded w-full" alt="hero" src="{{ asset('img/skills-icon.png') }}">
            </div>
            <p class="mt-6 text-base font-medium text-left leading-7 text-slate-600 dark:text-gray-400">
                I honed my craft at <a href="https://psau.edu.ph/" target="_blank" class="text-amber-600 underline">Pampanga State Agricultural University</a>, 
                where I built a solid foundation in software development through hands-on projects and mentorship. 
                This experience shaped my ability to deliver <span class="font-semibold text-teal-700">scalable, client-focused solutions</span> 
                and instilled the discipline to ship high-quality software with confidence.
            </p>
        </div>
    </div>
</div>

<script>
    function openModal(title, modalId) {
        var modal = document.getElementById(modalId);
        document.getElementById('modalSkillTitle').innerText = title;
        modal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    }

    function closeModal(modalId) {
        var modal = document.getElementById(modalId);
        modal.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }

    document.addEventListener("DOMContentLoaded", function () {
        // Get the buttons and modal elements for C++, Java, and HTML5
        var cPlusPlusBtn = document.querySelector('[data-modal-toggle="static-modal"]');
        var javaModalToggleBtn = document.querySelector('[data-modal-toggle="java-modal"]');
        var html5ModalToggleBtn = document.querySelector('[data-modal-toggle="html5-modal"]');
        var cssModalToggleBtn = document.querySelector('[data-modal-toggle="css-modal"]');
        var mysqlModalToggleBtn = document.querySelector('[data-modal-toggle="mysql-modal"]');
        var phpModalToggleBtn = document.querySelector('[data-modal-toggle="php-modal"]');
        var JavaScriptModalToggleBtn = document.querySelector('[data-modal-toggle="JavaScript-modal"]');
        var tailwindModalToggleBtn = document.querySelector('[data-modal-toggle="tailwind-modal"]');
        var mariaDBModalToggleBtn = document.querySelector('[data-modal-toggle="mariaDB-modal"]');
        var laravelModalToggleBtn = document.querySelector('[data-modal-toggle="laravel-modal"]');
        var wordpressModalToggleBtn = document.querySelector('[data-modal-toggle="wordpress-modal"]');
        var bootstrapModalToggleBtn = document.querySelector('[data-modal-toggle="bootstrap-modal"]');


        // Add click event listeners to the buttons
        cPlusPlusBtn.addEventListener('click', function () {
            openModal('C++ Modal', 'static-modal');
        });

        javaModalToggleBtn.addEventListener('click', function () {
            openModal('Java Modal', 'java-modal');
        });

        html5ModalToggleBtn.addEventListener('click', function () {
            openModal('HTML5 Modal', 'html5-modal');
        });

        cssModalToggleBtn.addEventListener('click', function () {
            openModal('CSS Modal', 'css-modal');
        });

        mysqlModalToggleBtn.addEventListener('click', function () {
            openModal('MySQL Modal', 'mysql-modal');
        });

        phpModalToggleBtn.addEventListener('click', function () {
        openModal('PHP Modal', 'php-modal');
        });

        JavaScriptModalToggleBtn.addEventListener('click', function () {
        openModal('JavaScript Modal', 'JavaScript-modal');
        });

        tailwindModalToggleBtn.addEventListener('click', function () {
        openModal('tailwind Modal', 'tailwind-modal');
        });

        mariaDBModalToggleBtn.addEventListener('click', function () {
        openModal('mariaDB Modal', 'mariaDB-modal');
        });

        laravelModalToggleBtn.addEventListener('click', function () {
        openModal('laravel Modal', 'laravel-modal');
        });

        wordpressModalToggleBtn.addEventListener('click', function () {
        openModal('wordpress Modal', 'wordpress-modal');
        });

        bootstrapModalToggleBtn.addEventListener('click', function () {
        openModal('bootstrap Modal', 'bootstrap-modal');
        });



        // Get all elements with 'data-modal-hide' attribute
        var modalHideBtns = document.querySelectorAll('[data-modal-hide]');

        // Add click event listeners to hide the modals when the close button is clicked
        modalHideBtns.forEach(function (btn) {
            btn.addEventListener('click', function () {
                var modalId = btn.getAttribute('data-modal-hide');
                closeModal(modalId);
            });
        });

        // Add click event listener to hide the modals when clicking outside of them
        document.addEventListener("click", function (event) {
            if (event.target.classList.contains('modal-overlay')) {
                closeModal('static-modal');
                closeModal('java-modal');
                closeModal('html5-modal');
                closeModal('css-modal');
                closeModal('mysql-modal');
                closeModal('JavaScript-modal');
                closeModal('tailwind-modal');
                closeModal('mariaDB-modal');
                closeModal('laravel-modal');
                closeModal('wordpress-modal');
                closeModal('bootstrap-modal');
            }
        });
    });
</script>


@include('layouts.footer')