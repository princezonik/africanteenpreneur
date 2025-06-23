
<div class="relative bg-[#fff7ed] min-h-screen flex items-center overflow-hidden px-4">

    <!-- Decorative Background Curve (SVG or Image) -->
    <div class="absolute inset-x-0 bottom-0 z-0">
        <img src="{{ asset('images/homesvg.svg') }}" alt="Wave background" class="w-full h-auto pointer-events-none">
    </div>

    <!-- Nav Bar -->
    <header class="absolute top-0 left-0 right-0 z-50">
        <div class="container mx-auto flex justify-between items-center py-6 px-4">
            <a href="#" class="text-2xl font-bold text-orange-500 flex items-center space-x-2">
                {{-- <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="w-8 h-8"> --}}
                <span>AfricanTeenPreneur</span>
            </a>

            <nav class="hidden md:flex space-x-6 text-gray-800 font-semibold">
                <a href="#" class="hover:text-orange-500">Our Work</a>
                <a href="#" class="hover:text-orange-500">Who We Are</a>
                <a href="#" class="hover:text-orange-500">Membership & Giving</a>
            </nav>

            <a href="#" class="bg-orange-400 hover:bg-orange-500 text-white px-6 py-2 rounded-full font-semibold transition">
                DONATE
            </a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative z-10 pt-36 pb-20 px-4 text-center md:text-left container mx-auto">
        <div class="flex flex-col md:flex-row items-center md:space-x-10">
            <!-- Text content -->
            <div class="md:w-1/2 space-y-4">
    <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight text-gray-900">
        Empowering the Next Generation of <span class="text-orange-500">African Teen Entrepreneurs</span>
    </h1>

    <p class="text-gray-600 text-base max-w-xl mt-4">
        AfricanTeenPreneur nurtures innovation, purpose, and leadership in young minds through school programs, orphanage support, hospital visits, and prison outreach. Together, we build confident, socially conscious teen entrepreneurs.
    </p>

    <div class="flex items-center space-x-4 mt-6">
        <span class="text-gray-900 font-bold text-xl">1,000+ Teens Reached</span>
        <span class="text-gray-900 font-bold text-xl">75+ Communities</span>
        <div class="flex items-center space-x-1">
            <span class="text-yellow-400 text-xl font-bold">5.0</span>
            <div class="flex space-x-1">
                @for ($i = 0; $i < 5; $i++)
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="text-yellow-400 w-5 h-5" viewBox="0 0 16 16">
                        <path d="M3.612 15.443 4.6 10.57.824 6.763l5.197-.755L8 1.1l1.979 4.91 5.197.755-3.776 3.808.988 4.872L8 13.187l-4.389 2.256z"/>
                    </svg>
                @endfor
            </div>
        </div>
    </div>
</div>


            <!-- Screenshot mockup -->
            <div class="md:w-1/2 mt-10 md:mt-0">
                <img src="{{ asset('images/screens-mockup.png') }}" alt="Screens" class="w-full max-w-lg mx-auto">
            </div>
        </div>
    </section>
</div>
