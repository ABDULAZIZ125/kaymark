<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CayMark Island Exchange & Auction House</title>

   
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        h1, h2, h3, h4, .font-heading {
            font-family: 'Montserrat', sans-serif;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 50%, #3b82f6 100%);
        }

        .hero-gradient {
            background: linear-gradient(to right, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.3) 100%);
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .countdown-animation {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1) }
            50% { transform: scale(1.05) }
            100% { transform: scale(1) }
        }

        .vehicle-icon {
            transition: all 0.3s ease;
        }

        .vehicle-icon:hover {
            transform: scale(1.1);
        }

        .hero-carousel {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }

        .carousel-slide {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            background-size: cover;
            background-position: center;
        }

        .carousel-slide.active {
            opacity: 1;
        }

        .search-bar {
            border-radius: 50px;
            padding: 12px 20px;
        }

        .main-menu {
            background-color: #f8f9fa;
            border-bottom: 1px solid #e9ecef;
        }

        .footer-gradient {
            background: linear-gradient(135deg, #0a2258 0%, #1e3a8a 50%, #2563eb 100%);
        }

        .footer-link {
            transition: all 0.3s ease;
        }

        .footer-link:hover {
            color: #93c5fd;
            transform: translateX(5px);
        }

        .social-icon {
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            transform: translateY(-3px);
        }

        /* Header Styles */
        .header-gradient {
            background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 100%);
        }
        
        .dropdown-shadow {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        
        .notification-gradient {
            background: linear-gradient(90deg, #fbbf24 0%, #f59e0b 100%);
        }

        .header-nav {
            background-color: #063466;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .header-nav.scrolled {
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.15);
        }

        .nav-link {
            position: relative;
            transition: all 0.3s ease;
            padding: 8px 0;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            background-color: #3b82f6;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-link.active::after {
            width: 100%;
        }

        .user-dropdown {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            border: none;
            transform: translateY(10px);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .user-dropdown.show {
            transform: translateY(0);
            opacity: 1;
            visibility: visible;
        }

        .search-container {
            position: relative;
            transition: all 0.3s ease;
        }

        .search-container:focus-within {
            transform: scale(1.02);
        }

        .search-container input:focus {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
        }

        .mobile-menu {
            animation: slideDown 0.3s ease-out;
        }

        @keyframes slideDown {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

       
        /* Footer Styles */
        .footer-section {
            background: linear-gradient(135deg, #0a2258 0%, #1e3a8a 50%, #2563eb 100%);
            position: relative;
            overflow: hidden;
        }

        .footer-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        }

        .footer-column {
            position: relative;
        }

        .footer-column::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: -15px;
            width: 1px;
            background: rgba(255, 255, 255, 0.1);
        }

        .footer-column:first-child::before {
            display: none;
        }

        .footer-heading {
            position: relative;
            padding-bottom: 12px;
            margin-bottom: 20px;
        }

        .footer-heading::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background: linear-gradient(90deg, #3b82f6, transparent);
        }

        .newsletter-box {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .newsletter-box:hover {
            background: rgba(255, 255, 255, 0.12);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 24px;
        }

        .social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .social-icon::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s ease;
        }

        .social-icon:hover::before {
            left: 100%;
        }

        .social-icon:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-3px);
        }

        @media (max-width: 768px) {
            .footer-column::before {
                display: none;
            }

            .footer-column {
                margin-bottom: 30px;
            }
        }

        /* Vehicle Finder Styles */
        .vehicle-finder {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 1rem;
            padding-right: 1rem;
        }
    </style>
     <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>

<body class="bg-gray-50">
    <!-- Header -->
    <header class="header-gradient sticky top-0 z-50" id="mainHeader">
        <!-- Main Header -->
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="flex items-center transition-transform hover:scale-105 duration-300">
                    <img alt="Caymark logo" class="h-20" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='80' viewBox='0 0 200 80'%3E%3Crect width='200' height='80' fill='%231e3a8a'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-family='Arial' font-size='24' fill='white'%3ECayMark%3C/text%3E%3C/svg%3E" />
                </a>
            </div>

            <!-- Search Bar -->
            <div class="hidden md:flex items-center space-x-6">
                <div class="search-container relative max-w-md w-full">
                    <input type="text" placeholder="Search cars, boats, or equipment..."
                        class="w-full rounded-full border border-gray-300 bg-white px-4 py-2 pr-12 text-sm text-gray-700 placeholder-gray-400 shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500 transition-all duration-300">
                    <button
                        class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-500 hover:text-blue-600 transition-colors duration-300">
                        <span class="material-icons">search</span>
                    </button>
                </div>

                <!-- Guest: Show Login & Register -->
                <a href="#"
                    class="nav-link text-white hover:text-blue-300 transition-colors flex items-center">
                    <span class="material-icons mr-1">person_outline</span> Login
                </a>

                <a href="#"
                    class="bg-gradient-to-r from-blue-600 to-blue-800 text-white font-bold py-2 px-6 rounded-full hover:from-blue-700 hover:to-blue-900 transition-all duration-300 shadow-md hover:shadow-lg transform hover:scale-105">
                    Register
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobileMenuButton" class="md:hidden text-white transition-transform duration-300 hover:scale-110">
                <span class="material-icons text-3xl">menu</span>
            </button>
        </div>

        <!-- Main Menu (second header) -->
        <div class="bg-white hidden md:block">
            <div class="container mx-auto px-4 py-3">
                <nav class="flex justify-center space-x-10">
                    <a href="/"
                        class="nav-link text-gray-800 hover:text-blue-600 font-medium transition-colors relative">Home</a>
                    <a href="#"
                        class="nav-link text-gray-800 hover:text-blue-600 font-medium transition-colors relative">Auctions</a>
                    <a href="#"
                        class="nav-link text-gray-800 hover:text-blue-600 font-medium transition-colors relative">Marketplace</a>
                    
                    <!-- How It Works Dropdown -->
                    <div class="relative">
                        <button id="howItWorksButton" 
                            class="nav-link text-gray-800 hover:text-blue-600 font-medium transition-colors relative flex items-center">
                            How It Works
                            <span id="howItWorksArrow" class="material-icons ml-1 text-sm transition-transform duration-300">expand_more</span>
                        </button>
                        <div id="howItWorksDropdown" class="dropdown-menu absolute left-0 mt-2 w-56 bg-white rounded-lg dropdown-shadow overflow-hidden border border-gray-100 z-50">
                            <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-300">How to Buy</a>
                            <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-300">How to Sell</a>
                            <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-300">Bidding 101</a>
                            <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-300">Video Guides</a>
                        </div>
                    </div>
                    
                    <!-- Services & Support Dropdown -->
                    <div class="relative">
                        <button id="servicesButton" 
                            class="nav-link text-gray-800 hover:text-blue-600 font-medium transition-colors relative flex items-center">
                            Services & Support
                            <span id="servicesArrow" class="material-icons ml-1 text-sm transition-transform duration-300">expand_more</span>
                        </button>
                        <div id="servicesDropdown" class="dropdown-menu absolute left-0 mt-2 w-56 bg-white rounded-lg dropdown-shadow overflow-hidden border border-gray-100 z-50">
                            <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-300">Fee Calculator</a>
                            <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-300">Help Center</a>
                            <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-300">Rules & Policies</a>
                            <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-300">Contact Us</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Notification Bar -->
        <div class="notification-gradient text-gray-900 text-center py-2 text-sm font-medium relative overflow-hidden">
            <div class="container mx-auto relative z-10">
                <span class="inline-block mr-2 animate-bounce">🚨</span>
                <span>New auction starts this Friday! Free listing upgrades for October!</span>
                <a href="#" class="font-bold underline hover:text-gray-800 transition-colors ml-2">Join Now!</a>
            </div>
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-transparent via-white/10 to-transparent animate-pulse"></div>
        </div>

        <!-- Mobile menu -->
        <div id="mobileMenu" class="mobile-menu md:hidden bg-white py-4 px-4 shadow-lg hidden">
            <div class="flex flex-col space-y-4">
                <a href="/"
                    class="nav-link text-gray-700 hover:text-blue-600 font-medium transition-colors flex items-center">
                    <span class="material-icons mr-2">home</span> Home
                </a>
                <a href="#"
                    class="nav-link text-gray-700 hover:text-blue-600 font-medium transition-colors flex items-center">
                    <span class="material-icons mr-2">gavel</span> Auctions
                </a>
                <a href="#"
                    class="nav-link text-gray-700 hover:text-blue-600 font-medium transition-colors flex items-center">
                    <span class="material-icons mr-2">store</span> Marketplace
                </a>
                
                <!-- How It Works Mobile -->
                <div class="border-t border-gray-200 pt-4">
                    <div class="font-medium text-gray-700 mb-2">How It Works</div>
                    <a href="#" class="block pl-4 py-2 text-gray-600 hover:text-blue-600 transition-colors">How to Buy</a>
                    <a href="#" class="block pl-4 py-2 text-gray-600 hover:text-blue-600 transition-colors">How to Sell</a>
                    <a href="#" class="block pl-4 py-2 text-gray-600 hover:text-blue-600 transition-colors">Bidding 101</a>
                    <a href="#" class="block pl-4 py-2 text-gray-600 hover:text-blue-600 transition-colors">Video Guides</a>
                </div>
                
                <!-- Services & Support Mobile -->
                <div class="border-t border-gray-200 pt-4">
                    <div class="font-medium text-gray-700 mb-2">Services & Support</div>
                    <a href="#" class="block pl-4 py-2 text-gray-600 hover:text-blue-600 transition-colors">Fee Calculator</a>
                    <a href="#" class="block pl-4 py-2 text-gray-600 hover:text-blue-600 transition-colors">Help Center</a>
                    <a href="#" class="block pl-4 py-2 text-gray-600 hover:text-blue-600 transition-colors">Rules & Policies</a>
                    <a href="#" class="block pl-4 py-2 text-gray-600 hover:text-blue-600 transition-colors">Contact Us</a>
                </div>
                
                <div class="pt-4 border-t border-gray-200">
                    <a href="#"
                        class="block mb-3 nav-link text-gray-700 hover:text-blue-600 transition-colors flex items-center">
                        <span class="material-icons mr-2">person_outline</span> Login
                    </a>
                    <a href="#"
                        class="block bg-gradient-to-r from-blue-600 to-blue-800 text-white font-bold py-2 px-6 rounded-full hover:from-blue-700 hover:to-blue-900 transition-all duration-300 text-center transform hover:scale-105">
                        Register
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <?php echo $__env->yieldContent('content'); ?>

    <!-- Footer -->
    <footer class="footer-section pt-16 pb-8 mt-12 text-white">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <div class="footer-column">
                    <h3 class="footer-heading text-xl font-bold font-heading">CayMark Island Exchange</h3>
                    <p class="mb-6 leading-relaxed">
                        The Bahamas' premier digital trading center for vehicles and marine vessels. 
                        Transforming how the islands buy, sell, and trade.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="social-icon">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.879v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.129 22 16.99 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="social-icon">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                        <a href="#" class="social-icon">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.904 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="footer-column">
                    <h3 class="footer-heading text-xl font-bold font-heading">Quick Links</h3>
                    <ul class="space-y-3">
                        <li><a href="/" class="footer-link flex items-center py-1"><span class="material-icons mr-2 text-sm">chevron_right</span> Home</a></li>
                        <li><a href="#" class="footer-link flex items-center py-1"><span class="material-icons mr-2 text-sm">chevron_right</span> Auctions</a></li>
                        <li><a href="#" class="footer-link flex items-center py-1"><span class="material-icons mr-2 text-sm">chevron_right</span> Marketplace</a></li>
                        <li><a href="#" class="footer-link flex items-center py-1"><span class="material-icons mr-2 text-sm">chevron_right</span> Contact Us</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3 class="footer-heading text-xl font-bold font-heading">Support</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="footer-link flex items-center py-1"><span class="material-icons mr-2 text-sm">help_outline</span> Help Center</a></li>
                        <li><a href="#" class="footer-link flex items-center py-1"><span class="material-icons mr-2 text-sm">calculate</span> Fee Calculator</a></li>
                        <li><a href="#" class="footer-link flex items-center py-1"><span class="material-icons mr-2 text-sm">description</span> Rules & Policies</a></li>
                        <li><a href="#" class="footer-link flex items-center py-1"><span class="material-icons mr-2 text-sm">contact_support</span> FAQ</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3 class="footer-heading text-xl font-bold font-heading">Contact Information</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start py-1"><span class="material-icons mr-3" style="margin-top: 4px;">location_on</span>
                            <span>Nassau, The Bahamas</span>
                        </li>
                        <li class="flex items-center py-1"><span class="material-icons mr-3">call</span>+1 (242) 555-CARS</li>
                        <li class="flex items-center py-1"><span class="material-icons mr-3">email</span>info@caymark.com</li>
                        <li class="flex items-center py-1"><span class="material-icons mr-3">schedule</span>Mon-Fri: 9AM-6PM EST</li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom flex flex-col md:flex-row justify-between items-center">
                <p class="text-sm mb-4 md:mb-0">&copy; 2023 CayMark Island Exchange & Auction House. All rights reserved.</p>
                <div class="flex flex-wrap justify-center">
                    <a href="#" class="text-sm mx-3 mb-2 md:mb-0 transition-colors duration-300">Privacy Policy</a>
                    <a href="#" class="text-sm mx-3 mb-2 md:mb-0 transition-colors duration-300">Terms of Service</a>
                    <a href="#" class="text-sm mx-3 mb-2 md:mb-0 transition-colors duration-300">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Registration Modal -->
    <div id="registerModal" class="fixed inset-0 bg-black bg-opacity-30 backdrop-blur flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-xl shadow-2xl w-full max-w-md mx-4 overflow-hidden transform transition-all duration-300 scale-95 opacity-0">
            <button id="closeModal" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 transition-colors duration-300">✕</button>
            <div class="p-6 border-b border-gray-100">
                <h2 class="text-2xl font-bold text-gray-800 text-center">Create Your Account</h2>
                <p class="text-gray-500 text-sm text-center mt-1">Select your role to get started</p>
            </div>
            <div class="p-6 space-y-4">
                <button id="buyerBtn" class="w-full px-6 py-4 flex items-center justify-between border border-gray-200 rounded-lg hover:border-blue-500 hover:bg-blue-50 transition-all duration-300">
                    <span>Buyer</span>
                    <span class="material-icons text-blue-500">arrow_forward</span>
                </button>
                <button id="sellerBtn" class="w-full px-6 py-4 flex items-center justify-between border border-gray-200 rounded-lg hover:border-blue-500 hover:bg-blue-50 transition-all duration-300">
                    <span>Seller</span>
                    <span class="material-icons text-blue-500">arrow_forward</span>
                </button>
            </div>
            <div class="p-4 bg-gray-50 text-center border-t border-gray-100">
                <p class="text-sm text-gray-500">Already have an account? <a href="#" class="text-blue-600 hover:underline transition-colors duration-300">Sign in</a></p>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Header scroll effect
            const header = document.getElementById('mainHeader');
            if (header) {
                window.addEventListener('scroll', () => {
                    if (window.scrollY > 50) {
                        header.classList.add('scrolled');
                    } else {
                        header.classList.remove('scrolled');
                    }
                });
            }

            // Mobile Menu Toggle
            document.getElementById('mobileMenuButton').addEventListener('click', function() {
                const mobileMenu = document.getElementById('mobileMenu');
                mobileMenu.classList.toggle('hidden');
            });

            // Dropdown functionality
            const howItWorksButton = document.getElementById('howItWorksButton');
            const howItWorksDropdown = document.getElementById('howItWorksDropdown');
            const howItWorksArrow = document.getElementById('howItWorksArrow');

            const servicesButton = document.getElementById('servicesButton');
            const servicesDropdown = document.getElementById('servicesDropdown');
            const servicesArrow = document.getElementById('servicesArrow');

            // Toggle dropdowns
            function toggleDropdown(button, dropdown, arrow) {
                button.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const isHidden = dropdown.classList.contains('hidden');
                    
                    // Close all dropdowns first
                    document.querySelectorAll('.dropdown-menu').forEach(d => {
                        d.classList.add('hidden');
                    });
                    document.querySelectorAll('.material-icons').forEach(icon => {
                        if (icon.id && icon.id.includes('Arrow')) {
                            icon.classList.remove('rotate-180');
                        }
                    });
                    
                    // Toggle current dropdown
                    if (isHidden) {
                        dropdown.classList.remove('hidden');
                        arrow.classList.add('rotate-180');
                    }
                });
            }

            toggleDropdown(howItWorksButton, howItWorksDropdown, howItWorksArrow);
            toggleDropdown(servicesButton, servicesDropdown, servicesArrow);

            // Close dropdowns when clicking outside
            document.addEventListener('click', function() {
                document.querySelectorAll('.dropdown-menu').forEach(dropdown => {
                    dropdown.classList.add('hidden');
                });
                document.querySelectorAll('.material-icons').forEach(icon => {
                    if (icon.id && icon.id.includes('Arrow')) {
                        icon.classList.remove('rotate-180');
                    }
                });
            });

            // Modal functionality
            const registerModal = document.getElementById('registerModal');
            const closeModal = document.getElementById('closeModal');
            const buyerBtn = document.getElementById('buyerBtn');
            const sellerBtn = document.getElementById('sellerBtn');

            function openRegisterModal() {
                registerModal.classList.remove('hidden');
                const modalContent = registerModal.querySelector('div.bg-white');
                if (modalContent) {
                    setTimeout(() => {
                        modalContent.classList.remove('scale-95', 'opacity-0');
                        modalContent.classList.add('scale-100', 'opacity-100');
                    }, 10);
                }
            }

            function closeRegisterModal() {
                const modalContent = registerModal.querySelector('div.bg-white');
                if (modalContent) {
                    modalContent.classList.remove('scale-100', 'opacity-100');
                    modalContent.classList.add('scale-95', 'opacity-0');
                }
                setTimeout(() => registerModal.classList.add('hidden'), 300);
            }

            // Add click events to all register buttons
            document.querySelectorAll('a[href="#"]').forEach(link => {
                if (link.textContent.includes('Register')) {
                    link.addEventListener('click', (e) => {
                        e.preventDefault();
                        openRegisterModal();
                    });
                }
            });

            if (closeModal) closeModal.addEventListener('click', closeRegisterModal);
            if (registerModal) registerModal.addEventListener('click', (e) => {
                if (e.target === registerModal) closeRegisterModal();
            });
            if (buyerBtn) buyerBtn.addEventListener('click', () => {
                alert('Open Buyer registration form here');
                closeRegisterModal();
            });
            if (sellerBtn) sellerBtn.addEventListener('click', () => {
                alert('Open Seller registration form here');
                closeRegisterModal();
            });

            // Add active class to current page in navigation
            const currentPath = window.location.pathname;
            const navLinks = document.querySelectorAll('.nav-link');

            navLinks.forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html><?php /**PATH /home/u898351377/domains/360webcoders.com/public_html/kaymark/resources/views/layouts/welcome.blade.php ENDPATH**/ ?>