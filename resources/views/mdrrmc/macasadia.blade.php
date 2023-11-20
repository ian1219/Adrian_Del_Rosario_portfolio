@include('layouts.header')

<div class="flex flex-col items-center justify-center text-center py-8">
    <div class="mb-10 px-3 py-6">
    <h1 class="text-3xl text-gray-800 font-bold">Water level and flood alert notifier for the municipality of macabebe, pampanga.( Details )</h1>
    </div>
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Landing Page of Water Level System</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    To our Capstone's landing page, specifically designed for residents in Macabebe, Pampanga, accessible via their mobile devices. 
                    This page serves as a central hub for crucial information. Here, you'll discover links to various hotline pages where you can ask questions or send messages. 
                    Similar to the Facebook pages of the Municipality of Macabebe, the Mdrrmo Macabebe, LGU, PNP, and the BFP, this simple landing page has been crafted for the 
                    Water Level Notifier of Macabebe, Pampanga.
                </p>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    This page aims to provide easy access to essential resources and contacts related to the Water Level Notifier. 
                    It's designed to ensure residents can quickly find necessary information and communicate with relevant authorities.
                </p>
                </div>
            </div>
        </div>
        
        <!-- Left Half (Image Slider) -->
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
            <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/capstone/landing.png') }}">
        </div>
    </div>
    
    <div class="p-14 mt-8 mb-8">
    <h3 class="text-2xl font-semibold my-4">Registration in Landing Page for the Residence.</h3>
    </div>

    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Registration for Residents</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400">
                    When you visit our Landing Page, you'll notice a registration button that is only available to Macabebe residents. 
                    Individuals can register on our website by submitting personal information such as their name, last name, middle name, 
                    address, contact number, and barangay. This information is critical because it allows us to keep those who have registered updated 
                    of the water level in Macabebe, Pampanga, specifically in their barangay, via text messages.</p> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400">
                    The primary objective of this register is to ensure that residents receive timely warnings about water level updates in their neighborhood via SMS. 
                    Individuals can keep informed and take appropriate precautions based on the current water level status in their barangay in this way.</p> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400">
                    Our goal is to provide a streamlined communication channel to deliver crucial updates promptly and accurately to registered Macabebe residents.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
            <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/capstone/landing-registration.png') }}">
        </div>
    </div>


    <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">Sign In and Sign Up for the Admin</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Login and Registration for Admin</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    Our Login and Registration system grants access to the administrative side, providing crucial insights into the Water Level System. 
                    It includes the Real-Time Water Level Monitoring Page, offering pivotal data essential for the Head of MDRRMO to comprehend the 
                    water level status across all barangays in Macabebe. Signing up is available for new users, while those with existing accounts 
                    can easily sign in to access this critical information.
                </p>
                </div>
            </div>
        </div>

        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
            <div class="relative overflow-hidden shadow-lg">
                <div class="flex w-full transition-transform duration-300 ease-in-out " id="signInSignUpSlider">
                    <div class="w-full flex-shrink-0">
                        <img class="object-cover object-center  border border-gray-300 rounded-lg w-full" alt="Sign In" src="{{ asset('img/capstone/sign-in.png') }}">
                    </div>
                    <div class="w-full flex-shrink-0">
                        <img class="object-cover object-center  border border-gray-300 rounded-lg w-full" alt="Sign Up" src="{{ asset('img/capstone/sign-up.png') }}">
                    </div>
                </div>
                <button id="prevBtn" class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-transparent text-gray-500 rounded-full p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </button>
                <button id="nextBtn" class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-transparent text-gray-500 rounded-full p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg> 
                </button>
            </div>
        </div>
        
        
    </div>

        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">Simple Dashboard Design and Details</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Dashboard Page</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    To our Capstone System Dashboard! Here, you'll notice the color-coded representation of barangay 1, highlighted in red. 
                    This signifies the highest water level status within the barangay over the past day. The system refreshes daily to determine 
                    the most recent peak water level in barangay 1.
                </p>

                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400">
                    Moreover, you can view the latest records of water levels, depicting any fluctuations—whether an increase or decrease—across different barangays. 
                    The system also displays the current date, ensuring the information you're accessing is always up-to-date.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/capstone/dashboard.png') }}">
        </div>
    </div>

        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">
            The primary top priority of the team to make. Water Level Monitoring Page</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">

        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Real Time Water Level Page</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    This part is super important in our system setup. It's like the central hub collecting and sharing info with everyone. 
                    Whenever the water level changes, it automatically sends texts to keep everyone updated.
                </p>

                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400">
                    It's where we connect things like the float switch and Arduino, which were quite a challenge to set up. 
                    This part really centers on what our capstone is all about. We call it the Real-Time Water Level Monitoring. 
                    Here, you get the latest updates on water levels. It's like a live map showing if floods are getting better or worse in different areas.
                </p>
                </div>
            </div>
        </div>

        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/capstone/water-level.png') }}">
        </div>
    </div>

        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">
            The Barangay Page that have Float Switch & Arduino</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Barangay Page ( Arduino & Float Switch )</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    Our Capstone is a fusion of hardware and software. The goal of this Barangay Page is to extend the reach of the 
                    Arduino and float switch to additional barangays. To achieve this, you connect these devices to 
                    the system and specify the barangay you wish to include.
                </p>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4"> 
                    This page allows you to track the number of barangays integrated into the monitoring system. In essence, 
                    the more hardware units we deploy, the broader the coverage of flood level status across multiple areas.</p>
                </div>
            </div>
        </div>
        
        <!-- Left Half (Image Slider) -->
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/capstone/barangay.png') }}">
        </div>
    </div>


        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">Handling Residents Information Table.</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Residents Table ( Monitoring residents )</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    This table contains registered residents' information. It's essential for the admin to have access to edit residents' personal details. 
                    Additionally, it facilitates the addition of residents who are to receive SMS notifications from the system. 
                    The semaphore serves as the gateway used for automatic messaging, and I'll provide more detailed information about it on 
                    the final page of the Water Level Monitoring System.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/capstone/residents.png') }}">
        </div>
    </div>

        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">Automated SMS notifier settings and updates.</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">SMS Settings table</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    This SMS settings table, allowing for the customization of automated messages sent to registered residents. 
                    The MDRRMO of the Municipality of Macabebe uses this feature to send alerts at different water levels.
                </p>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4"> 
                    In case there's a necessity to modify the content of the SMS texts, this particular page within the System facilitates such alterations. 
                    These settings ensure timely and accurate notifications reach the residents according to predefined conditions set by the MDRRMO.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/capstone/sms-setting.png') }}">
        </div>
    </div>

        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">Records that hold the Water Level Status for the previous days.</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Water Level Records Table</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    The Records page, the last page in the Water Level Monitoring System's sidebar, serves as an important resource. 
                    The addition of it provides a detailed timeline of the water level status over past durations. 
                    When there are changes in water levels, the database in the Records area collects data. 
                    archiving these modifications effectively. 
                </p>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                That past information can be helpful since it allows for analysis based on water level changes from the previous days, weeks, or months. 
                This record table is essential for the Municipality of Macabebe's MDRRMO, ensuring they have the full record of prior water level changes 
                for reference and study.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/capstone/records.png') }}">
        </div>
    </div>
    
        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">
            Simple Profile Page Design and layout.</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Admin Profile Settings</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    The Admin Profile Settings area contains a database of admins' login and logout times. It also now supports profile image 
                    uploads and is built to accommodate future updates and new features.
                </p>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    The system's responsiveness enables administrators to access it through their mobile devices, allowing them to stay connected and informed 
                    even when they are not physically present in the office. This responsive design ensures ease of access, allowing administrators to swiftly 
                    attend to any necessary tasks regardless of their location.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/capstone/profile.png') }}">
        </div>
    </div>

    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6 mt-16 border border-gray-300 rounded-lg shadow-lg">
    <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
        <div class="flex justify-center items-center">
            <img class="object-cover object-center shadow-lg rounded-lg w-96" alt="hero" src="{{ asset('img/capstone/achievement/achievement.png') }}">
        </div>
        <div class="justify-center mt-4 rounded-md items-center p-6 border border-gray-300">
            <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                I am inclined to share an image that holds significance to me, as it stands as a testament to the commendation received from the Head of MDRRMO in Macabebe,
                Pampanga, expressing appreciation for our group's presentation. This image represents a milestone in our journey, marking the culmination 
                of extensive months dedicated to comprehensively studying the intricate details of our projects encompassing both hardware and software domains.
            </p>
            <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                Sharing this image is important because our capstone project had tough deadlines. We worked hard, researching a lot and working together. 
                It's like a big project for our group to learn from.
            </p>
            <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                This image is part of my achievements as a team. It's not just about what I did, but it shows how we all worked together. 
                It also reminds us how important it is to communicate well in our group to make things work smoothly.
            </p>
        </div>
    </div>
    <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
        <div class="flex justify-center items-center mt-4">
            <img class="object-cover object-center shadow-lg rounded-lg w-96" alt="hero" src="{{ asset('img/capstone/achievement/capstone-book.png') }}">
        </div>
        <div class="justify-center mt-4 rounded-md items-center p-6 border border-gray-300">
            <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                In addition this means that we've completed the final defense, and that I will eventually be able to graduate as a 
                Bachelor of Science in Information Technology student at DHVSU. What is not expected is that we are also candidates for the colloquium, 
                and will be competing for the best thesis.
            </p>
            <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                I did not expect that even our profs and panelists would appreciate our capstone project. 
                These two images are my greatest achievement in the whole college because of the 
                hardships we went through and we were able to do it on the deadline.
            </p>
        </div>
    </div>
    </div>
    <div class="max-w-6xl mx-auto px-8 py-12 mt-20 bg-white rounded-lg shadow-lg">
        <h3 class="text-lg font-semibold mb-4">Additional Details:</h3>
        <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
            In our project, we utilized various materials and software applications to create a comprehensive system. On the software front, we employed tools 
            like HTML, CSS, Bootstrap, SQL/XAMPP, node.js, and Semaphore, which acted as the gateway for our automated SMS system. 
            While I wasn't directly involved in constructing the hardware components, our team utilized essential hardware elements such as Arduino, 
            Floating Switch, Bulb, and wires. These elements were carefully assembled within an enclosure and panel board setup.
        </p>
        <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
            Our approach wasn't solely practical; it involved thorough research, particularly in designing the system architecture. 
            We delved into exploring the hardware designs and conducted an in-depth analysis of the system's pros and cons. Looking ahead, 
            we've outlined future updates essential for the advancement of this system. These updates are imperative for the 
            successful completion of our capstone project.
        </p>
    </div>
    
</div>
</div>


<script>
    const slider = document.getElementById('signInSignUpSlider'); // Updated the slider ID
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    let slideIndex = 0;

    const showSlides = () => {
        const slides = slider.children;
        if (slideIndex >= slides.length) {
            slideIndex = 0;
        }
        if (slideIndex < 0) {
            slideIndex = slides.length - 1;
        }
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.transform = `translateX(-${slideIndex * 100}%)`;
        }
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
        nextSlide();
    });

    prevBtn.addEventListener('click', () => {
        prevSlide();
    });

    showSlides(); // Added to display the first slide initially
</script>

@include('layouts.footer')