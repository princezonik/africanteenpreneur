<header x-data="{ open: false }" class="absolute top-0 left-0 right-0 z-50 bg-white">
            <div class="container mx-auto flex justify-between items-center py-6 px-4">
                <!-- Logo -->
                <a href="{{ route('home')}}" class="text-2xl font-bold text-orange-500 flex items-center space-x-2">
                    <span>AfricanTeenPreneur</span>
                </a>

                <!-- Desktop Nav -->
                <nav class="hidden md:flex space-x-6 text-gray-800 font-semibold relative"
                    x-data="{ openWhat: false, openWho: false, openGive: false }"
                    @click.away="openWhat = false; openWho = false; openGive = false"
                >
                    <!-- WHAT WE DO -->
                    <div class="relative">
                        <button @click="openWhat = !openWhat; openWho = false; openGive = false" class="hover:text-orange-500 inline-flex items-center space-x-1">
                            <span>What We Do</span>
                            <svg class="w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.25a.75.75 0 01-1.06 0L5.23 8.27a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd"/>
                            </svg>
                        </button>

                        <div x-show="openWhat" x-transition x-cloak
                            class="absolute left-0 mt-4 w-[500px] bg-white border border-gray-200 shadow-xl rounded-lg p-6 z-50 flex space-x-12 text-sm">
                            <div class="flex-1">
                                <h3 class="text-lg font-semibold text-gray-900 mb-3">Our Priorities</h3>
                                <ul class="space-y-2 text-gray-600">
                                    <li><a href="{{route('provide-food-water')}}" class="hover:text-orange-500">Provide Food & Water</a></li>
                                    {{-- <li><a href="#" class="hover:text-orange-500">Teen Entrepreneurship Programs</a></li> --}}
                                    <li><a href="#" class="hover:text-orange-500">Community Empowerment</a></li>
                                </ul>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-semibold text-gray-900 mb-3">Our Insight</h3>
                                <ul class="space-y-2 text-gray-600">
                                    <li><a href="#" class="hover:text-orange-500">Success Stories</a></li>
                                    {{-- <li><a href="#" class="hover:text-orange-500">Research & Impact</a></li> --}}
                                    {{-- <li><a href="#" class="hover:text-orange-500">Our Blog</a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- WHO WE ARE -->
                    <div class="relative">
                        <button @click="openWho = !openWho; openWhat = false; openGive = false" class="hover:text-orange-500 inline-flex items-center space-x-1">
                            <span>About Us</span>
                            <svg class="w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.25a.75.75 0 01-1.06 0L5.23 8.27a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd"/>
                            </svg>
                        </button>

                        <div x-show="openWho" x-transition x-cloak
                            class="absolute left-0 mt-4 w-[500px] bg-white border border-gray-200 shadow-xl rounded-lg p-6 z-50 flex space-x-12 text-sm">
                            <div class="flex-1">
                                <h3 class="text-lg font-semibold text-gray-900 mb-3">Who We Are</h3>
                                <ul class="space-y-2 text-gray-600">
                                    {{-- <li><a href="#" class="hover:text-orange-500">Our People</a></li> --}}
                                    <li><a href="{{route('our-accountability')}}" class="hover:text-orange-500">Our Accountability</a></li>
                                    <li><a href="{{route('our-history')}}" class="hover:text-orange-500">Our History</a></li>
                                    {{-- <li><a href="#" class="hover:text-orange-500">How We Work</a></li> --}}
                                </ul>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-semibold text-gray-900 mb-3">Where We Work</h3>
                                <ul class="space-y-2 text-gray-600">
                                    <li>Nigeria</li>
                                    <li>U.S</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- MEMBERSHIP & GIVING -->
                    <div class="relative">
                        <button @click="openGive = !openGive; openWho = false; openWhat = false" class="hover:text-orange-500 inline-flex items-center space-x-1">
                            <span>Membership & Giving</span>
                            <svg class="w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.25a.75.75 0 01-1.06 0L5.23 8.27a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd"/>
                            </svg>
                        </button>

                        <div x-show="openGive" x-transition x-cloak
                            class="absolute left-0 mt-4 w-[300px] bg-white border border-gray-200 shadow-xl rounded-lg p-6 z-50 text-sm">
                            <ul class="space-y-2 text-gray-600">
                                <li><a href="{{route('become-a-member')}}" class="hover:text-orange-500">Become a Member</a></li>
                                <li><a href="#" class="hover:text-orange-500">Give Monthly</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <!-- Hamburger (Mobile) -->
                <button @click="open = !open" class="md:hidden focus:outline-none text-gray-800">
                    <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg x-show="open" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>

                <!-- Donate Button (Always visible) -->
                <a href="{{ route('donate')}}" class="hidden md:inline-block bg-orange-400 hover:bg-orange-500 text-white px-6 py-2 rounded-full font-semibold transition text-sm sm:text-base">
                    DONATE
                </a>
            </div>

            <!-- Mobile Nav -->
            <div x-show="open" x-transition class="md:hidden px-6 pb-4 space-y-4 bg-white text-gray-800 font-semibold">
                <a href="#" class="block hover:text-orange-500">Our Work</a>
                <a href="#" class="block hover:text-orange-500">Who We Are</a>
                <a href="#" class="block hover:text-orange-500">Membership & Giving</a>
                <a href="#" class="block bg-orange-400 hover:bg-orange-500 text-white px-4 py-2 rounded-full font-semibold w-fit">
                    DONATE
                </a>
            </div>
        </header>