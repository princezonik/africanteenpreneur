<div class="flex flex-col">
    <div class="relative bg-[#fff7ed] min-h-screen flex items-center overflow-hidden px-4">

        <!-- Decorative Background Curve -->
        <div class="absolute inset-x-0 bottom-0 z-0">
            <img src="{{ asset('images/homesvg.svg') }}" alt="Wave background" class="w-full h-auto pointer-events-none">
        </div>

        <!-- Nav Bar -->
        


        <!-- Hero Section -->
        <section class="relative flex flex-col md:flex-row md:space-x-10 z-10 pt-[120px] pb-20 px-4 text-center md:text-left container mx-auto">

            <!-- Left Image -->
            <div class="md:w-1/2 mt-10 md:mt-0">
                <img src="{{ asset('images/africancontinent.jpg') }}" alt="Teens in leadership" class="w-full max-w-lg mx-auto rounded-xl shadow-lg">
            </div>

            <!-- Text Content -->
            <div class="md:w-1/2 mt-10 md:mt-0 space-y-8 text-center md:text-left">
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold leading-tight text-gray-900">
                    Empowering the Next Generation of <span class="text-orange-500">African Teen Entrepreneurs</span>
                </h1>

                <p class="text-gray-600 text-base max-w-xl mx-auto md:mx-0">
                    AfricanTeenPreneur nurtures innovation, purpose, and leadership in young minds through school programs, orphanage support, hospital visits, and prison outreach. Together, we build confident, socially conscious teen entrepreneurs.
                </p>

                <!-- Stats -->
                <div class="flex flex-col sm:flex-row sm:justify-start items-center gap-4 sm:gap-8 mt-6">
                    <span class="text-gray-900 font-bold text-lg sm:text-xl">1,000+ Teens Reached</span>
                    <span class="text-gray-900 font-bold text-lg sm:text-xl">75+ Communities</span>
                    <div class="flex items-center space-x-1">
                        <span class="text-yellow-400 text-lg font-bold">5.0</span>
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

        </section>
    </div>

    <!-- Call to Action Section -->
    <div class="flex flex-col space-y-12 text-center py-16 px-4 md:px-16 lg:px-32 bg-white">
        <h1 class="text-xl md:text-2xl font-semibold">
            Every day, together with you, AfricanTeenPreneur saves lives and helps millions of people find the way to a better life worldwide.
        </h1>

        <div class="flex flex-col md:flex-row md:justify-between gap-8 text-left">
            <!-- Left Content -->
            <div class="md:w-1/3 space-y-6">
                <h2 class="text-2xl font-bold">Discover conservation near you</h2>
                <p>Explore what The AfricanTeenPreneur is doing in your community and support teenagers.</p>
            </div>

            <!-- Region & Country Selectors -->
            <div class="flex flex-col sm:flex-row flex-wrap md:flex-nowrap gap-6">
                <div class="flex flex-col space-y-2">
                    <label for="region">Region</label>
                    <select id="region" class="border border-gray-300 w-full sm:w-[150px] h-[50px] p-2 rounded">
                        <option value="">Select Region</option>
                        <option value="nigeria">Nigeria</option>
                    </select>
                </div>

                <div class="flex flex-col space-y-2">
                    <label for="country">Country or Territory</label>
                    <select id="country" class="border border-gray-300 w-full sm:w-[250px] h-[50px] p-2 rounded">
                        <option value="">Select Country or Territory</option>
                        <option value="lagos">Lagos</option>
                    </select>
                </div>

                <div class="flex flex-col space-y-2">
                    <label class="invisible">Visit</label>
                    <button class="bg-orange-600 text-white font-semibold rounded w-full sm:w-[200px] h-[50px]">
                        VISIT MY AREA
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
