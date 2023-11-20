@include('layouts.header')

<div class="flex flex-col items-center justify-center text-center py-8">
    <div class="mb-10 px-3 py-6">
    <h1 class="text-3xl text-gray-800 font-bold">Apparel Idea's Page and Details</h1>
    </div>
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Landing Page of Apparel Idea's (E - Commerce Website)</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    This is the landing page design I created for my website, Apparel Idea's. The design emphasizes a visually appealing layout with light colors aimed at captivating potential buyers or clients visiting the site. It offers immediate visibility to showcased products right on the landing page.
                </p>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    The website header features options for both login and registration. If you don't have an account, you can easily register, or if you already have one, simply log in. While the products displayed on the landing page are clickable, clicking on them redirects you to the login page to access comprehensive details about the desired product.
                </p>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400">
                    I designed the logo using Canva, implementing my own creative ideas. Additionally, I incorporated other distinctive features that can also be explored here.
                </p>
                </div>
            </div>
        </div>
        
        <!-- Left Half (Image Slider) -->
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
            <div class="relative overflow-hidden">
                <div class="flex w-full transition-transform duration-300 ease-in-out" id="slider">
                    <div class="w-full flex-shrink-0">
                        <img class="object-cover object-center rounded-lg w-full" alt="hero" src="{{ asset('img/Apparel_Ideas/Landing.png') }}">
                    </div>
                    <div class="w-full flex-shrink-0">
                        <img class="object-cover object-center rounded-lg w-full" alt="hero" src="{{ asset('img/Apparel_Ideas/Landing-1.png') }}">
                    </div>
                    <div class="w-full flex-shrink-0">
                        <img class="object-cover object-center rounded-lg w-full" alt="hero" src="{{ asset('img/Apparel_Ideas/Landing-2.png') }}">
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
        </div>
    </div>
    
    <div class="p-14 mt-8 mb-8">
    <h3 class="text-2xl font-semibold my-4">The succeeding page subsequent to the initial landing page.</h3>
    </div>

    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">( Sign In ) and ( Sign Up Page )</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400">
                    The Sign-In and Sign-Up pages were initially created before I began exploring Laravel. I had these pages stored in my files. 
                    When I eventually started working with Laravel, I found these pages and decided to incorporate them into my Laravel project 
                    because their design somewhat aligned with what I envisioned for my project. While they weren't specifically tailored for Laravel, 
                    they served as a foundation.</p> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400">
                    Integrating them allowed me to expedite the development process and maintain some design consistency, 
                    while adapting them to fit within Laravel's framework. This helped in smoothly incorporating Sign-In and Sign-Up functionality, 
                    assisting me in understanding and implementing key aspects of user management within Laravel.</p>
                </div>
            </div>
        </div>
        
        <!-- Left Half (Image Slider) -->
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
            <div class="relative overflow-hidden">
                <div class="flex w-full transition-transform duration-300 ease-in-out" id="signInSignUpSlider">
                    <div class="w-full flex-shrink-0">
                      <img class="object-cover object-center rounded-lg w-full" alt="Sign In" src="{{ asset('img/Apparel_Ideas/Sign-in.png') }}">
                    </div>
                    <div class="w-full flex-shrink-0">
                      <img class="object-cover object-center rounded-lg w-full" alt="Sign Up" src="{{ asset('img/Apparel_Ideas/Sign-up.png') }}">
                    </div>
                  </div>
                  <button id="signInPrevBtn" class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-transparent text-gray-500 px-2 py-3 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                  </button>
                  <button id="signInNextBtn" class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-transparent text-gray-500 px-3 py-1 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg> 
                  </button>
            </div>
        </div>
    </div>


    <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">After The Registration and Login Form</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Home Page</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    Upon registering and logging in, users land on the website's Home page, featuring a slider showcasing the latest ten products published by the admin. 
                    The customer-centric homepage boasts a simple yet elegant design, incorporating visually appealing cards and prominently displaying the brand name.
                </p>

                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400">
                    The logo is strategically positioned in the navigation header, crafted using Canva to ensure consistency with its familiar placement before the search bar. 
                    The header also encompasses links to other pages, which will be discussed further on the subsequent page.
                </p>
                </div>
            </div>
        </div>
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Apparel_Ideas/home.png') }}">
        </div>
    </div>

        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">Next Page after the Simple Design of Home Page</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Product Page</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    The Product Page serves as the pivotal space where customers select their desired items for purchase.
                </p>

                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400">
                    I've crafted a visually optimized card layout to emphasize product images, ensuring clear visibility. Additionally, 
                    the brand name is prominently displayed beneath each product. Clicking here leads to the subsequent page, 
                    which I'll elaborate on in the following section.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Apparel_Ideas/products.png') }}">
        </div>
    </div>

        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">The Continuation of the Product Page</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">

        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Item</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    I've designed an item page displaying comprehensive product details upon selection. Utilizing the product ID, 
                    I seamlessly link the Item page as a continuation from the Product Page.
                </p>

                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400">
                    On the Item page, besides showcasing detailed information, users can directly add the item to their cart for purchase. 
                    Additionally, they have the option to explore various colors and sizes available for the chosen product.
                </p>
                </div>
            </div>
        </div>

        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Apparel_Ideas/items.png') }}">
        </div>
    </div>

        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">The Cart Table Page</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Cart Items</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    The cart item table displays essential details like the total price and quantity for customers to easily see. 
                    I used a table format for a cleaner appearance and added functions at the table's end—such as delete options and a future checkout feature. 
                    These skills are showcased in my recent projects, but let's now shift our attention to Apparel Idea's project.
                </p>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4"> 
                    I've included a "Continue Shopping" button allowing users to 
                    return to the Product Page and add more items to their cart table as desired.</p>
                </div>
            </div>
        </div>
        
        <!-- Left Half (Image Slider) -->
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Apparel_Ideas/cart.png') }}">
        </div>
    </div>


        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">And For The Admin Side</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Product Table - ( Admin )</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    This product table is for the admin's use. It allows them to edit product details like name, description, price, and images. 
                    Additionally, there's a delete option available for removing sold-out products. The crucial feature is the 
                    "Create Product" button enabling the addition of new products for customers to view.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Apparel_Ideas/product-table.png') }}">
        </div>
    </div>

        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">Creating Products for Front-End Display</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Create Products - ( Admin )</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    The Create Product page is where new products are generated and showcased on the website's front-end. 
                    As part of the E-commerce setup, this page adds items visible to customers. 
                    Simply complete the product form with details like Product Name, Description, Price, and Image, then submit. 
                    This action stores the information in the database, making it visible on both the customer and admin sides.
                </p>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4"> 
                    I'll explain the Delete function here, which serves the purpose of removing products. 
                    This feature is already implemented and functional in the app controller.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Apparel_Ideas/create-prod.png') }}">
        </div>
    </div>

        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">Edit and Update Products for Detail</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Edit Products - ( Admin )</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    The Edit Product Page allows you to update product details like name, description, price, and images. 
                    It plays a crucial role in maintaining accurate product information without losing any important database records. 
                    This page is essential for correcting errors in descriptions, prices, or images of products.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Apparel_Ideas/edit-page.png') }}">
        </div>
    </div>
    
        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">My Shop for Admin side view</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">My Shop - ( Admin )</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    I created a My Shop Page for the Admin, allowing them to view the products they've created and listed in their shop. 
                    This page provides the admin a view of their own shop, which isn't typically visible on the Admin Side. 
                    That was my sole aim behind designing the "My Shop" Page.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Apparel_Ideas/shop.png') }}">
        </div>
    </div>

        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">About Page for more important Details to Read about the E-Store</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">About Page - ( Admin )</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    I created these images using Canva to enhance the details within the Apparel Idea's platform. They cover aspects like the Terms of Service (TOS), 
                    Privacy Policy, and Community Standards. These features are crucial as they guide users on proper usage and the policies of Apparel Idea's. 
                    Additionally, the Community Standards are there to aid and inform the community about the platform's guidelines.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Apparel_Ideas/about.png') }}">
        </div>
    </div>

        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">Terms Of Service Page Discussion</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Terms of Service ( TOS )</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    The Terms of Service (TOS) section within the website encompasses a comprehensive set of guidelines delineating the appropriate usage 
                    regulations for the Apparel Idea's platform. Its significance lies in providing customers with detailed instructions and rules governing 
                    their interaction and utilization of the website's functionalities. These terms act as a contractual agreement between the website and its users, 
                    establishing mutual expectations and obligations. They cover various aspects such as user conduct, rights and responsibilities, privacy policies, 
                    and permissible actions while engaging with the platform. Crafting a clear and concise set of Terms of Service (TOS) is vital for establishing 
                    a transparent and fair environment, fostering trust and compliance among users. It ensures that all parties involved understand and adhere to the 
                    stipulated regulations, promoting a harmonious and secure online experience for everyone utilizing the Apparel Idea's website.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Apparel_Ideas/TOS.png') }}">
        </div>
    </div>

        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">Privacy Policy Page Discussion</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Privacy Policy</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    The Privacy Policy on Apparel Idea's E-Commerce Website is designed to inform users about how their personal information is collected, used, 
                    and protected by the platform. It outlines the data collection practices, including what type of information is gathered, such as names, 
                    contact details, payment information, and browsing activity. This policy explains the purpose of collecting this data, which primarily 
                    revolves around enhancing user experience, providing personalized services, processing orders, and ensuring secure transactions. Moreover, 
                    it elucidates how this information may be shared with third parties, ensuring transparency about any collaborations or necessary disclosures. 
                    At Apparel Idea's, the Privacy Policy is structured to comply with privacy laws and prioritize the confidentiality and security of user data. 
                    It serves as a commitment to safeguarding user privacy while using the website's services and upholding ethical data handling practices.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Apparel_Ideas/privacy-policy.png') }}">
        </div>
    </div>

        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">Standards Community Page Discussion</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Privacy Policy</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    The Standards Community page on Apparel Idea's E-Commerce Website is dedicated to fostering a collaborative and supportive environment among users. 
                    It serves as a platform for individuals interested in ethical practices, sustainability, and responsible consumption within the apparel industry. 
                    This space is designed for users to engage in discussions, share insights, and promote initiatives that align with ethical standards, 
                    environmental consciousness, and social responsibility. Apparel Idea's encourages active participation in this community, fostering a culture of mutual 
                    respect, knowledge sharing, and positive contributions. By promoting dialogue and collaboration, this page aims to inspire positive changes, 
                    innovative ideas, and the adoption of ethical standards within the apparel industry.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Apparel_Ideas/standards.png') }}">
        </div>
    </div>
    
        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">And Finally The Last Will Be Profile Drop Down</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Profile Drop Down Selections</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    The Profile Drop-Down menu includes essential options for user settings and navigation. 
                    It encompasses the Profile, Settings, Privacy, Help & Support sections, and Logout feature. 
                    Logging out from your account ensures security by ending the current session and redirects back to the landing page, 
                    preventing unauthorized access to your account.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Apparel_Ideas/profile-drop-down.png') }}">
        </div>
    </div>
    

    <div class="max-w-6xl mx-auto px-8 py-12 mt-20 bg-white rounded-lg shadow-lg">
            <h3 class="text-lg font-semibold mb-4">additional Details:</h3>
            <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                I developed the Apparel Idea's E-Commerce Website all by myself, managing both frontend and backend tasks, 
                including debugging and crafting logos and images for the About page. This endeavor commenced during my studies before 
                completing my Bachelor's Degree in Information Technology. Leveraging Laravel Framework, Php, JavaScript, Html, CSS, Bootstrap, 
                Tailwind CSS, and SQL/Xampp for database management, I embarked on my first solo E-Commerce website venture, learning extensively
                throughout the process. Although the project remains a work-in-progress with some missing components, subsequent projects 
                showcased more advanced features. These experiences bolstered my confidence in honing the skills gained through practical project execution.
            </p>
        </div>

    
</div>





<script>
// Function to show slides with smooth animation
const showSlidesWithAnimation = (slideContainer, slideIndex) => {
  const slides = slideContainer.getElementsByClassName('flex-shrink-0');
  const slideWidth = slides[0].clientWidth; // Assuming all slides have the same width

  if (slideIndex >= slides.length) {
    slideIndex = 0;
  }
  if (slideIndex < 0) {
    slideIndex = slides.length - 1;
  }

  // Animate the slider using CSS transition
  slideContainer.style.transition = 'transform 0.5s ease-in-out';
  slideContainer.style.transform = `translateX(-${slideIndex * slideWidth}px)`;

  return slideIndex;
};

// For the first slider (slider)
let slideIndex = 0;
const slider = document.getElementById('slider');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

prevBtn.addEventListener('click', () => {
  clearInterval(slideInterval);
  slideIndex = showSlidesWithAnimation(slider, slideIndex - 1);
});

nextBtn.addEventListener('click', () => {
  clearInterval(slideInterval);
  slideIndex = showSlidesWithAnimation(slider, slideIndex + 1);
});

// Start automatic slide change for slider
let slideInterval = setInterval(() => {
  slideIndex = showSlidesWithAnimation(slider, slideIndex + 1);
}, 3000);

// For the second slider (signInSignUpSlider)
const signInSignUpSlider = document.getElementById('signInSignUpSlider');
const signInPrevBtn = document.getElementById('signInPrevBtn');
const signInNextBtn = document.getElementById('signInNextBtn');

let signInSlideIndex = 0;

signInPrevBtn.addEventListener('click', () => {
  clearInterval(signInSlideInterval);
  signInSlideIndex = showSlidesWithAnimation(signInSignUpSlider, signInSlideIndex - 1);
});

signInNextBtn.addEventListener('click', () => {
  clearInterval(signInSlideInterval);
  signInSlideIndex = showSlidesWithAnimation(signInSignUpSlider, signInSlideIndex + 1);
});

// Start automatic slide change for signInSignUpSlider
let signInSlideInterval = setInterval(() => {
  signInSlideIndex = showSlidesWithAnimation(signInSignUpSlider, signInSlideIndex + 1);
}, 3000);


  </script>
@include('layouts.footer')
