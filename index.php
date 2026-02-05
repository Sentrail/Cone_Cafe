<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cone Café | Coffee, Desserts & Relaxed Vibes in Lagos</title>
    <meta name="description" content="Cone Café - Lagos' favorite spot for specialty coffee, signature desserts, and a relaxed atmosphere. Visit us for the perfect coffee break.">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&family=Playfair+Display:ital,wght@0,700;1,700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Tailwind config (inline for CDN) -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        cafe: {
                            espresso: '#2D241E',
                            latte: '#F5EBE0',
                            toffee: '#D4A373',
                            cream: '#FEFAE0',
                            accent: '#CCD5AE'
                        }
                    },
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans text-cafe-espresso bg-cafe-cream scroll-smooth">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md border-b border-cafe-espresso/5">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="flex items-center space-x-2">
                <div class="w-8 h-8 bg-cafe-toffee rounded-full flex items-center justify-center">
                    <i class="fas fa-ice-cream text-white text-xs"></i>
                </div>
                <span class="font-bold text-xl tracking-tight uppercase">Cone Café</span>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8 text-sm font-semibold uppercase tracking-wider">
                <a href="#menu" class="hover:text-cafe-toffee transition">Menu</a>
                <a href="#about" class="hover:text-cafe-toffee transition">Our Story</a>
                <a href="#experience" class="hover:text-cafe-toffee transition">Experience</a>
                <a href="#location" class="bg-cafe-espresso text-white px-5 py-2 rounded-full hover:bg-cafe-toffee transition">Visit Us</a>
            </div>

            <!-- Mobile Toggle -->
            <button id="mobile-btn" class="md:hidden text-2xl">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden bg-white border-t border-gray-100 flex flex-col p-6 space-y-4 font-semibold uppercase text-center text-sm">
            <a href="#menu">Menu</a>
            <a href="#about">Our Story</a>
            <a href="#experience">Experience</a>
            <a href="#location">Find Us</a>
        </div>
    </nav>

    <!-- Hero -->
    <header class="hero-gradient min-h-screen flex items-center justify-center text-center px-6">
        <div class="max-w-3xl">
            <span class="bg-cafe-toffee/20 text-cafe-toffee px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest mb-6 inline-block">Freshly Brewed in Lagos</span>
            <h1 class="font-serif text-5xl md:text-7xl text-white mb-6 leading-tight">
                Your Daily Ritual, <br><span class="italic text-cafe-toffee">Refined.</span>
            </h1>
            <p class="text-cafe-latte text-lg md:text-xl font-light mb-10 max-w-xl mx-auto">
                Specialty coffee, handcrafted desserts, and the perfect atmosphere for your next break or meeting.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#menu" class="bg-cafe-toffee text-white px-8 py-4 rounded-xl font-bold hover:bg-white hover:text-cafe-espresso transition shadow-lg">
                    View Menu
                </a>
                <a href="#location" class="bg-white/10 backdrop-blur-md text-white border border-white/20 px-8 py-4 rounded-xl font-bold hover:bg-white/20 transition">
                    Get Directions
                </a>
            </div>

            <div class="mt-12 flex items-center justify-center space-x-4">
                <div class="flex text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span class="text-white text-sm font-medium">4.8 on Google Maps</span>
            </div>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Cafe Interior" class="rounded-3xl shadow-2xl">
                    <div class="absolute -bottom-6 -right-6 bg-cafe-espresso text-white p-8 rounded-3xl hidden lg:block">
                        <p class="font-serif text-2xl italic">"Best cold brew in VI"</p>
                        <p class="text-xs uppercase tracking-widest mt-2 opacity-60">— Local Guide</p>
                    </div>
                </div>
                <div class="space-y-6">
                    <h2 class="font-serif text-4xl text-cafe-espresso">More than just a café.</h2>
                    <p class="text-gray-500 leading-relaxed text-lg">
                        Cone Café was born from a simple desire: to create a sanctuary for coffee lovers in the heart of Lagos. We source our beans ethically and craft our desserts daily to ensure every visit is a treat.
                    </p>
                    <p class="text-gray-500 leading-relaxed text-lg">
                        Whether you're here to power through a deadline, meet a friend, or enjoy a solo treat, our space is designed for your comfort.
                    </p>
                    <div class="pt-4 flex space-x-8">
                        <div>
                            <span class="block font-bold text-2xl">08:00</span>
                            <span class="text-xs uppercase text-cafe-toffee">Opening Time</span>
                        </div>
                        <div>
                            <span class="block font-bold text-2xl">100%</span>
                            <span class="text-xs uppercase text-cafe-toffee">Arabica Beans</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu -->
    <section id="menu" class="py-20 bg-cafe-latte/30">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="font-serif text-4xl mb-4">On The Counter</h2>
                <div class="w-20 h-1 bg-cafe-toffee mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Coffee -->
                <div class="bg-white p-8 rounded-3xl shadow-sm hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center space-x-4 mb-8">
                        <div class="w-12 h-12 bg-cafe-latte rounded-full flex items-center justify-center text-cafe-toffee">
                            <i class="fas fa-coffee"></i>
                        </div>
                        <h3 class="text-xl font-bold uppercase tracking-tight">Specialty Coffee</h3>
                    </div>
                    <ul class="space-y-6">
                        <li class="flex justify-between items-start">
                            <div>
                                <span class="font-bold block">Cone Signature Latte</span>
                                <span class="text-xs text-gray-400 italic">Sweetened with house-made vanilla</span>
                            </div>
                            <span class="font-bold">₦4,500</span>
                        </li>
                        <li class="flex justify-between items-start">
                            <div>
                                <span class="font-bold block">Nitro Cold Brew</span>
                                <span class="text-xs text-gray-400 italic">Smooth, creamy, and dairy-free</span>
                            </div>
                            <span class="font-bold">₦3,800</span>
                        </li>
                        <li class="flex justify-between items-start">
                            <div>
                                <span class="font-bold block">Cortado</span>
                                <span class="text-xs text-gray-400 italic">Equal parts espresso and milk</span>
                            </div>
                            <span class="font-bold">₦3,200</span>
                        </li>
                    </ul>
                </div>

                <!-- Desserts -->
                <div class="bg-white p-8 rounded-3xl shadow-sm hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center space-x-4 mb-8">
                        <div class="w-12 h-12 bg-cafe-latte rounded-full flex items-center justify-center text-cafe-toffee">
                            <i class="fas fa-cookie-bite"></i>
                        </div>
                        <h3 class="text-xl font-bold uppercase tracking-tight">Sweet Treats</h3>
                    </div>
                    <ul class="space-y-6">
                        <li class="flex justify-between items-start">
                            <div>
                                <span class="font-bold block">The Original Cone</span>
                                <span class="text-xs text-gray-400 italic">Waffle cone with espresso soft serve</span>
                            </div>
                            <span class="font-bold">₦5,000</span>
                        </li>
                        <li class="flex justify-between items-start">
                            <div>
                                <span class="font-bold block">Pistachio Croissant</span>
                                <span class="text-xs text-gray-400 italic">Flaky layers with rich cream</span>
                            </div>
                            <span class="font-bold">₦4,200</span>
                        </li>
                        <li class="flex justify-between items-start">
                            <div>
                                <span class="font-bold block">Salted Caramel Brownie</span>
                                <span class="text-xs text-gray-400 italic">Fudgy and rich</span>
                            </div>
                            <span class="font-bold">₦3,500</span>
                        </li>
                    </ul>
                </div>

                <!-- Light Bites -->
                <div class="bg-white p-8 rounded-3xl shadow-sm hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center space-x-4 mb-8">
                        <div class="w-12 h-12 bg-cafe-latte rounded-full flex items-center justify-center text-cafe-toffee">
                            <i class="fas fa-bread-slice"></i>
                        </div>
                        <h3 class="text-xl font-bold uppercase tracking-tight">Light Bites</h3>
                    </div>
                    <ul class="space-y-6">
                        <li class="flex justify-between items-start">
                            <div>
                                <span class="font-bold block">Avocado Toast</span>
                                <span class="text-xs text-gray-400 italic">Sourdough, poached egg, chili flakes</span>
                            </div>
                            <span class="font-bold">₦7,500</span>
                        </li>
                        <li class="flex justify-between items-start">
                            <div>
                                <span class="font-bold block">Chicken Club Sandwich</span>
                                <span class="text-xs text-gray-400 italic">Classic layers on brioche</span>
                            </div>
                            <span class="font-bold">₦8,000</span>
                        </li>
                        <li class="flex justify-between items-start">
                            <div>
                                <span class="font-bold block">Acai Bowl</span>
                                <span class="text-xs text-gray-400 italic">Fresh fruits and house granola</span>
                            </div>
                            <span class="font-bold">₦6,500</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience -->
    <section id="experience" class="py-20 bg-cafe-espresso text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="font-serif text-4xl mb-12">Visit for the coffee, stay for the vibes.</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="aspect-square bg-gray-800 rounded-2xl overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?auto=format&fit=crop&w=400&q=80" alt="Gallery" class="w-full h-full object-cover group-hover:scale-110 transition duration-500 opacity-80 group-hover:opacity-100">
                </div>
                <div class="aspect-square bg-gray-800 rounded-2xl overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=400&q=80" alt="Gallery" class="w-full h-full object-cover group-hover:scale-110 transition duration-500 opacity-80 group-hover:opacity-100">
                </div>
                <div class="aspect-square bg-gray-800 rounded-2xl overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1559496417-e7f25cb247f3?auto=format&fit=crop&w=400&q=80" alt="Gallery" class="w-full h-full object-cover group-hover:scale-110 transition duration-500 opacity-80 group-hover:opacity-100">
                </div>
                <div class="aspect-square bg-gray-800 rounded-2xl overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1445116572660-236099ec97a0?auto=format&fit=crop&w=400&q=80" alt="Gallery" class="w-full h-full object-cover group-hover:scale-110 transition duration-500 opacity-80 group-hover:opacity-100">
                </div>
            </div>

            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8 text-left">
                <div class="flex space-x-4">
                    <div class="text-cafe-toffee text-2xl pt-1"><i class="fas fa-wifi"></i></div>
                    <div>
                        <h4 class="font-bold mb-2 uppercase tracking-wide">Work Friendly</h4>
                        <p class="text-sm text-gray-400">High-speed WiFi and plenty of power outlets for your focus hours.</p>
                    </div>
                </div>
                <div class="flex space-x-4">
                    <div class="text-cafe-toffee text-2xl pt-1"><i class="fas fa-users"></i></div>
                    <div>
                        <h4 class="font-bold mb-2 uppercase tracking-wide">Casual Hangouts</h4>
                        <p class="text-sm text-gray-400">Perfect seating arrangements for group chats and catch-ups.</p>
                    </div>
                </div>
                <div class="flex space-x-4">
                    <div class="text-cafe-toffee text-2xl pt-1"><i class="fas fa-shopping-bag"></i></div>
                    <div>
                        <h4 class="font-bold mb-2 uppercase tracking-wide">Quick Takeaway</h4>
                        <p class="text-sm text-gray-400">Efficient counter service for when you're on the move.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location -->
    <section id="location" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="bg-cafe-latte p-2 rounded-[2rem] overflow-hidden flex flex-col md:flex-row shadow-xl">
                <div class="md:w-1/2 p-10 md:p-16 space-y-8">
                    <h2 class="font-serif text-4xl">Visit Us</h2>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4">
                            <i class="fas fa-map-marker-alt mt-1 text-cafe-toffee"></i>
                            <p class="font-medium">Victoria Island, Lagos, Nigeria<br><span class="text-sm text-gray-500">(Near the Civic Center axis)</span></p>
                        </div>
                        <div class="flex items-start space-x-4">
                            <i class="fas fa-phone-alt mt-1 text-cafe-toffee"></i>
                            <p class="font-medium">+234 900 000 0000</p>
                        </div>
                        <div class="flex items-start space-x-4">
                            <i class="fas fa-clock mt-1 text-cafe-toffee"></i>
                            <div>
                                <p class="font-medium">Mon - Sat: 08:00 AM - 09:00 PM</p>
                                <p class="font-medium">Sun: 10:00 AM - 08:00 PM</p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-4">
                        <a href="https://maps.google.com" target="_blank" class="inline-block bg-cafe-espresso text-white px-10 py-4 rounded-xl font-bold hover:bg-cafe-toffee transition">
                            Open in Google Maps
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2 h-[400px] md:h-auto">
                    <div class="w-full h-full bg-gray-200 flex items-center justify-center relative overflow-hidden">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.7!2d3.4!3d6.4!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMjUnMDAuMCJOIDPCsDI0JzAwLjAiRQ!5e0!3m2!1sen!2sng!4v1600000000000!5m2!1sen!2sng"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-cafe-espresso text-cafe-latte py-16">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center border-b border-white/5 pb-12 mb-12">
                <div class="text-center md:text-left mb-8 md:mb-0">
                    <h3 class="font-bold text-2xl uppercase tracking-tighter text-white mb-2">Cone Café</h3>
                    <p class="text-sm opacity-60">Lagos' premier coffee & dessert destination.</p>
                </div>
                <div class="flex space-x-6 text-xl">
                    <a href="#" class="hover:text-cafe-toffee transition"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-cafe-toffee transition"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="hover:text-cafe-toffee transition"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-sm uppercase font-bold tracking-widest text-center md:text-left">
                <a href="#menu" class="hover:text-white transition">Menu</a>
                <a href="#about" class="hover:text-white transition">Story</a>
                <a href="#experience" class="hover:text-white transition">Vibes</a>
                <a href="#location" class="hover:text-white transition">Find Us</a>
            </div>
            <p class="text-center mt-12 text-[10px] uppercase tracking-widest opacity-40">
                © 2025 Cone Café Lagos. Crafted for the Culture.
            </p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="assets/js/script.js"></script>
</body>
</html>