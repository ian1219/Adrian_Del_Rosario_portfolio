@include('layouts.header')

<div class="flex flex-col items-center justify-center text-center py-8">
    <div class="mb-10 px-3 py-6">
    <h1 class="text-3xl text-gray-800 font-bold">Kaizen Computer Parts Online Store. Page and Details</h1>
    </div>
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Landing Page (Kaizen Computer Parts Online Store)</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    I've crafted a straightforward landing page design featuring a light-colored background at the top. It showcases our five latest products, automatically sliding every 3 seconds. Additionally, guests can easily navigate using the next and previous buttons, all powered by JavaScript. A user-friendly search bar is available for visitors to find their desired products effortlessly. 
                </p>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    Our E-Store logo is prominently displayed alongside product cards. For seamless access, 
                    the sign-in and sign-up options are conveniently placed in the landing page header, leading to the next page.
                </p>
                </div>
            </div>
        </div>
        
        <!-- Left Half (Image Slider) -->
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
            <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Kaizen/landing.png') }}">
    </div>
    </div>
    
    <div class="p-14 mt-8 mb-8">
    <h3 class="text-2xl font-semibold my-4">Sign - In and Sign - Up Registration Page Details.</h3>
    </div>

    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">( Sign In ) and ( Sign Up Page )</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400">
                    I've created a straightforward design for the sign-in and sign-up process. 
                    Upon visiting, you'll find the E-Store logo. Clicking on it will 
                    conveniently redirect you back to the landing page.</p> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400">
                    For new users, there's an option to register an account, 
                    while existing users can sign in to access the E-Store I've developed.</p>
                </div>
            </div>
        </div>
        
        <!-- Left Half (Image Slider) -->
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
            <div class="relative overflow-hidden">
                <div class="flex w-full transition-transform duration-300 ease-in-out" id="signInSignUpSlider">
                    <div class="w-full flex-shrink-0">
                      <img class="object-cover object-center rounded-lg w-full" alt="Sign In" src="{{ asset('img/Kaizen/sign-in.png') }}">
                    </div>
                    <div class="w-full flex-shrink-0">
                      <img class="object-cover object-center rounded-lg w-full" alt="Sign Up" src="{{ asset('img/Kaizen/sign-up.png') }}">
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
        <h3 class="text-2xl font-semibold my-4">Customer's Home Page and Details</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Home Page ( Customer )</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    After creating an account and logging in, you'll arrive at the customer's home page. Here, the header differs 
                    from the landing page, featuring a cart icon for managing items and a profile drop-down menu for personalized settings. 
                </p>

                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400">
                    Unlike the landing page, this page showcases visible product details, including descriptions, quantity, prices, and more.
                </p>
                </div>
            </div>
        </div>
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Kaizen/customer/home.png') }}">
        </div>
    </div>

        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">Product Items Page Details</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Item Page ( Customer )</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    The Item Page presents comprehensive product details, including Product Name, Description, Category, Quantity, and Price.
                </p>

                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400">
                    This page enables customers to view vital information about the desired product before purchasing, 
                    ensuring they are well-informed about the description and pricing. Additionally, the 'Add to Cart' button 
                    allows customers to conveniently place selected products into their cart for purchase.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Kaizen/customer/item.png') }}">
        </div>
    </div>

        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">Searching for Products makes it Easier</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">

        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Search Bar ( Customer )</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    I incorporated a search bar both on the customer's page and the landing page to simplify product navigation, 
                    especially when there's a vast array of items available on the Kaizen Computer Parts Online Store.
                </p>

                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400">
                    The search bar includes various search categories, enhancing user experience by enabling quick product searches. 
                    Such features, like the search bar, contribute significantly to making the website more user-friendly.
                </p>
                </div>
            </div>
        </div>

        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Kaizen/customer/search-bar.png') }}">
        </div>
    </div>

        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">The Shopping Cart Table Page</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Cart Items ( Customer )</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    The Cart Table page serves as a repository for the items added to your cart. Similar to a bag, items don't 
                    vanish immediately after selection.
                </p>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4"> 
                    It's entirely at your discretion to decide the quantity and if you wish to proceed with purchasing 
                    the items in your shopping cart.</p>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4"> 
                    This page displays detailed information about the selected products, including quantities and total pricing. 
                    The checkout button enables payment and facilitates product shipment.
                </p>
                </div>
            </div>
        </div>
        
        <!-- Left Half (Image Slider) -->
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Kaizen/customer/cart.png') }}">
        </div>
    </div>
    
    <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">Checkout Payment Method Using Stripe</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Checkout Payment</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    The Checkout Payment is not just a page; it's a process. I've implemented the Stripe Gateway API method, 
                    enabling payment using ATM cards or bank accounts.
                </p>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4"> 
                    This method displays the purchased products directly within the Stripe interface, providing customers 
                    with assurance regarding their purchases. Implementing this feature required considerable effort to master, 
                    but I persisted in studying and completing the website I was working on.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Kaizen/customer/payment.png') }}">
        </div>
    </div>

        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">Address Informations Form Details</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">My Address Page ( Customer )</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    The Address Details section requires your residential information to facilitate 
                    the delivery of purchased products to your location.
                </p>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    It's mandatory to fill out these forms; otherwise, product items cannot be purchased. 
                    Upon completion, simply click the 'Update' button, and your information will be automatically 
                    saved in the system's database.
                </p>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    This data will be accessible to the admin, allowing them to process and 
                    deliver the products ordered from the E-Commerce Store.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Kaizen/customer/my-address.png') }}">
        </div>
    </div>

        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">Profile Settings Information Details</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Profile Settings ( Customer )</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    The Profile Settings Information feature holds significant importance as it allows customers to access and update 
                    their profiles. This feature enables customers to modify details such as their username, name, and password, 
                    granting them autonomy over their account information.
                </p>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    It's crucial to facilitate such changes since customers may have specific 
                    preferences or may need to update their personal details.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Kaizen/customer/profile.png') }}">
        </div>
    </div>
    
        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">My Orders Page for Customer</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">My Orders ( Customer )</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    Here, customers can view their orders. You'll find information about payment dates, the quantity of items purchased, and the 
                    Order Status, whether it's paid, unpaid, canceled, shipped, or completed.
                </p>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    If the status is unpaid, you'll have the option to make the payment. Each order comes with an Order ID, 
                    which you can click to access detailed Order Details.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Kaizen/customer/orders.png') }}">
        </div>
    </div>

        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">My Order Details Page for Customer</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Order Details ( Customer )</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    Displayed here are the Order Details for the products you've purchased. Clicking on the Order ID number from the 
                    Orders Page will reveal specifics like the Total Price, quantity, and the status of your order, 
                    whether it's Shipped, unpaid, canceled, or completed.
                </p>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    This information is crucial for customers as it serves as their reference for online payments. 
                    Viewing these purchase details is identical to having a receipt accessible within their account.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Kaizen/customer/order-details.png') }}">
        </div>
    </div>

        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">For The Admin Panel Side</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Products Table ( Admin )</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    This is the Admin Side - Product Table, showcasing the products added to the website. Only the admin has the privilege to add, edit, or delete 
                    these products. For convenience, I've organized the table to display five products per page, ensuring a comprehensive view 
                    and fuller display on the monitor, whether accessed via computer or laptop.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Kaizen/admin/product-table.png') }}">
        </div>
    </div>

        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">Creating for Additional Products of The System</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Add Product ( Admin )</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    The 'Add Product' form is used to introduce new offerings to the Store. It includes fields for 
                    Product Name, Description, Categories, Inventory, Price, and an Image of the product. Once filled out, simply click the submit button, 
                    and the information will be stored in the system database. These new products will then be visible on both the 
                    Admin and Customer sides of the front-end view.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Kaizen/admin/add-product.png') }}">
        </div>
    </div>

        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">Making Update For The Products Information</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Update Products ( Admin )</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    The product information editing feature is available exclusively on the Admin Side, allowing access to modify database-held details, 
                    particularly the products being showcased. Editing is feasible for all product-related data, including 
                    Product Name, Description, Category, Inventory, Price, and Image. Upon completion of edits, clicking 'Submit' will promptly update the information.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Kaizen/admin/edit-product.png') }}">
        </div>
    </div>
    
        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">Admin also Have Access on User Information Table</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Users Table ( Admin )</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    At this section, you have visibility over the Users registered on the Kaizen Computer Parts Online Store Website. 
                    Alongside viewing, you hold the capability to create new users and modify existing user information. Additionally, 
                    there is an option available to delete user accounts as deemed necessary. This inclusive access allows for comprehensive user management, 
                    empowering the admin with the control to oversee, modify, and maintain user accounts effectively.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Kaizen/admin/user-table.png') }}">
        </div>
    </div>

        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">Creating additional User</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Add User ( Admin )</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    This feature enables the creation of additional user accounts for those who need access. As this is the admin side, 
                    it grants the ability to add customers, even if they haven't registered themselves, streamlining the process for 
                    clients to create their accounts. Upon filling out the User's Information, the details get securely saved in the database, 
                    ensuring accessibility and visibility on the website. This facilitation provides a seamless and efficient way for users to get started, 
                    enhancing accessibility and ease of use for clients seeking to establish their accounts."
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Kaizen/admin/add-user.png') }}">
        </div>
    </div>

        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">Updating Users Information For Emergency Purposes</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Update User ( Admin )</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    Another essential aspect is editing user information. In cases where users forget their passwords, 
                    the admin possesses access to the user table to reset their password. This functionality serves as an emergency solution, 
                    ensuring users regain access to their accounts if they encounter password issues. By informing the admin about the discrepancy, 
                    users can swiftly resume accessing their accounts, leveraging the admin's access to crucial databases for prompt resolution.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Kaizen/admin/edit-user.png') }}">
        </div>
    </div>

        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">Customer's Information Table Details</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Customers Table ( Admin )</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    The Customer's table operates similarly to the user's table, yet it houses distinct information unique to customers. 
                    Here, one can perform various tasks, such as editing customer information and gaining insights into customer-specific details, 
                    which differ from those stored in the User's table. Furthermore, this section provides valuable analytics by displaying the 
                    total count of customers registered on the website. This dedicated space not only allows for effective management of customer data 
                    but also offers essential insights specific to the customer base, presenting a comprehensive view of the website's clientele.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Kaizen/admin/customer-table.png') }}">
        </div>
    </div>

        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">Updating Customer's Information Details</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Update Customers Detail ( Admin )</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    The Update Customer's table facilitates the modification of crucial Customer Information, including First Name, Last Name, and Contact number. 
                    This update feature is integral as the Admin Side holds access to pivotal data circulating within the Website. While customers 
                    themselves can access and update their information, this function stands ready for singular use, particularly for 
                    rectifying inaccuracies in names or contact details.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Kaizen/admin/edit-customer.png') }}">
        </div>
    </div>

        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">Orders Table For Admin Servers Access</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Orders Table ( Admin )</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    The Orders Table on the Admin Server Side offers insights into order statuses and specifics. This table allows users to 
                    track their order statuses and view details, providing an easily navigable interface for both Admins and Customers. 
                    However, Admins have broader visibility, accessing all customer orders, while customers can solely view their own orders. 
                </p>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4"> 
                    The Order Status section showcases whether orders are paid, unpaid, canceled, shipped, or completed. 
                    Additionally, there's an 'order view' feature, which will be further explained in the subsequent image.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Kaizen/admin/admin-orders.png') }}">
        </div>
    </div>

        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">Order View Details Page and Order Status Management</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Orders Details ( Admin )</h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    The Order View Details provide the admin with access to monitor and manage the Order Status. 
                    Admins can set the status as 'Shipped' when the order is ready for delivery, with options to switch 
                    between statuses like unpaid, canceled, paid, and completed. This view also presents crucial customer address details, 
                    aiding in accurate product delivery by identifying the shipping address and contact number of the customer.
                </p>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    Additionally, it furnishes comprehensive order specifics, including the order date, total product price, 
                    and detailed product information encompassing the product name, description, quantity, price, and image. 
                    This comprehensive overview allows admins to efficiently manage and track order-related information for smooth operations.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
                <img class="object-cover object-center shadow-lg rounded-lg w-full" alt="hero" src="{{ asset('img/Kaizen/admin/admin-order-details.png') }}">
        </div>
    </div>

        <div class="p-14 mt-8 mb-8">
        <h3 class="text-2xl font-semibold my-4">And Lastly For The Dashboard of Admin Server Side</h3>
        </div>
    
    <div class="container mx-auto flex flex-col lg:flex-row items-center p-6">
        <!-- Right Half (Text Content) -->
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0">
            <div class="p-4 lg:p-0">
                <div class="border border-gray-300 shadow-md px-5 py-5 rounded-md">
                <h1 class="font-bold text-gray-700 text-2xl">Dashboard ( Admin ) </h1> <br>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    Considerable thought and effort were invested in crafting the dashboard for the Website I developed. 
                    This dashboard showcases the latest updates and critical insights of the website. 
                    It encompasses essential metrics like Active Users, Active Customers, Total Products, Paid Orders, 
                    Latest 4 New Users, Total Sales, Customer Recently Buys, and Recently Sold Products.
                </p>
                <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                    Deliberate adjustments were made in the design layout to enhance the visibility and accessibility of details on the Dashboard Page. 
                    Notably, the dashboard features a graph depicting the total sales, ensuring data visualization for better comprehension. 
                    Moreover, the design prioritizes responsive elements, ensuring the proper alignment and adaptability of cards across various 
                    devices for a seamless user experience.
                </p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 w-full ml-0 lg:ml-10">
            <div class="relative overflow-hidden">
                <div class="flex w-full transition-transform duration-300 ease-in-out" id="adminDashboardSlider">
                    <div class="w-full flex-shrink-0">
                      <img class="object-cover object-center rounded-lg w-full" alt="Sign In" src="{{ asset('img/Kaizen/admin/dashboard.png') }}">
                    </div>
                    <div class="w-full flex-shrink-0">
                      <img class="object-cover object-center rounded-lg w-full" alt="Sign Up" src="{{ asset('img/Kaizen/admin/dashboard-1.png') }}">
                    </div>
                  </div>
                  <button id="adminPrevBtn" class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-transparent text-gray-500 px-2 py-3 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                  </button>
                  <button id="adminNextBtn" class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-transparent text-gray-500 px-3 py-1 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg> 
                  </button>
            </div>
        </div>
    </div>
    

    <div class="max-w-6xl mx-auto px-8 py-12 mt-20 bg-white rounded-lg shadow-lg">
            <h3 class="text-lg font-semibold mb-4">Additional Details:</h3>
            <p class="text-base font-medium leading-relaxed text-left text-gray-600 dark:text-gray-400 mb-4">
                The foundation of this project relied on several key application and tools, essential for its development and functionality. 
                Primarily, I employed the Laravel Framework, PHP, JavaScript, Tailwind CSS, HTML, and MariaDB/Xampp for database management. 
                Additionally, I integrated the Stripe API for secure payment processing, while utilizing Laravel Breeze for authentication purposes. 
                Each choice was meticulously considered and aligned with the vision I envisioned for the website. 
                Completing this project independently was a testament to my dedication, continuous learning, and persistent research efforts. 
                Gratitude is owed to my unwavering commitment and passion, driving me to appreciate the culmination of my skills in creating this impactful website.
            </p>
        </div>

    
</div>

<script>
    // For Sign-In and Sign-Up Page Slider
const signInSignUpSlider = document.getElementById('signInSignUpSlider');
const signInPrevBtn = document.getElementById('signInPrevBtn');
const signInNextBtn = document.getElementById('signInNextBtn');

let signInSlideIndex = 0;

function showSignInSlides(index) {
    signInSignUpSlider.style.transform = `translateX(-${index * 100}%)`;
}

signInPrevBtn.addEventListener('click', () => {
    signInSlideIndex = (signInSlideIndex - 1 + 2) % 2;
    showSignInSlides(signInSlideIndex);
});

signInNextBtn.addEventListener('click', () => {
    signInSlideIndex = (signInSlideIndex + 1) % 2;
    showSignInSlides(signInSlideIndex);
});

// For Dashboard (Admin) Slider
const adminDashboardSlider = document.getElementById('adminDashboardSlider');
const adminPrevBtn = document.getElementById('adminPrevBtn');
const adminNextBtn = document.getElementById('adminNextBtn');

let adminSlideIndex = 0;

function showAdminSlides(index) {
    adminDashboardSlider.style.transform = `translateX(-${index * 100}%)`;
}

adminPrevBtn.addEventListener('click', () => {
    adminSlideIndex = (adminSlideIndex - 1 + 2) % 2;
    showAdminSlides(adminSlideIndex);
});

adminNextBtn.addEventListener('click', () => {
    adminSlideIndex = (adminSlideIndex + 1) % 2;
    showAdminSlides(adminSlideIndex);
});

</script>

@include('layouts.footer')
