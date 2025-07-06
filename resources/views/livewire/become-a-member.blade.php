<div class="bg-white">
    <!-- Hero Header -->
    <section class="relative w-full h-[300px] sm:h-[400px] md:h-[500px] overflow-hidden">
        <livewire:partials.navbar />
        <!-- Image -->
        <img 
            src="{{ asset('images/nightsky.jpg') }}" 
            alt="..." 
            class="absolute inset-0 w-full h-full object-cover z-0"
        >

        <!-- Overlay (semi-transparent) -->
        <div class="absolute inset-0 bg-black/60 z-10"></div>

        <!-- Content -->
        <div class="relative z-20 flex flex-col justify-center items-center text-center h-full text-white px-4">
            <p class="text-sm sm:text-base font-bold uppercase">Donate to our mission</p>
            <h2 class="text-xl sm:text-2xl md:text-3xl  mt-2 font-semibold text-orange-400 max-w-[90%]">Become a Member</h2>
        </div>
    </section>

    <section class="text-center bg-white">
        <div class="flex flex-wrap justify-center items-center space-x-6 text-2xl text-gray-600">
            <h3 class="font-bold text-gray-800 text-lg sm:text-xl uppercase">Share</h3>

            <!-- Facebook -->
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::url()) }}"
            target="_blank" class="hover:text-blue-600">
                <i class="fab fa-facebook"></i>
            </a>

            <!-- Twitter -->
            <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::url()) }}&text=Check out this initiative by AfricanTeenPreneur"
            target="_blank" class="hover:text-blue-400">
                <i class="fab fa-twitter"></i>
            </a>

            <!-- LinkedIn -->
            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(Request::url()) }}"
            target="_blank" class="hover:text-blue-700">
                <i class="fab fa-linkedin"></i>
            </a>

            <!-- WhatsApp -->
            <a href="https://api.whatsapp.com/send?text={{ urlencode(Request::url()) }}"
            target="_blank" class="hover:text-green-500">
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>

        <hr class="border-t border-orange-500 w-[80vw] mx-auto">


    </section>

    <section class="text-center items-center">
        <h1 class="text-4xl font-bold mb-12 mt-12 ">Donate to become a member</h1>
        <p class="md:w-[50vw] text-[18px] text-[#1a1a1a] mb-12  mx-auto">Donate today and become a member of Africanteenpreneur. Together, we can find a way to create a more sustainable future for both the African people and the world at large. Members are the driving force behind our hands-on programs and powerful advocacy efforts. Their support fuels real change — empowering teenagers, transforming communities, and shaping a future where every African teen has the tools to lead, create, and thrive. </p>

        <div class="flex flex-col space-y-2 items-center">
            <button class="bg-orange-500 text-white font-semibold rounded w-full sm:w-[200px] h-[50px]">
                Donate
            </button>
        </div>
    </section>

    <hr class="border-t border-orange-500 my-6">

    <section class="py-12 px-4 md:px-8 ">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row gap-8 items-center">
                <!-- Text Content (order-first on mobile, stays left on desktop) -->
                <div class="md:w-1/2 order-1 md:order-none">
                    <h1 class="text-3xl md:text-4xl font-bold mb-4">Protect teens all year long</h1>
                    <p class="text-lg md:text-xl text-gray-700 leading-relaxed">
                        Donate monthly as an Africanteen Champion and provide reliable support to accelerate the pace of leadership in African teens today. Plus, receive our special gifts as a thank you for protecting the teenagers.
                    </p>
                    <!-- Add donation button if needed -->
                    <button class="mt-6 bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600 transition">Become a Champion</button>
                </div>

                <!-- Image (order-first on mobile if needed) -->
                <div class="md:w-1/2 order-0 md:order-none">
                    <img 
                        src="{{asset('images/foodwater.jpg')}}" 
                        class="w-full h-auto md:h-[300px] object-cover rounded-lg shadow-lg" 
                        alt="African teens participating in leadership program"
                    >
                </div>
            </div>
        </div>

        <div class="mt-12 mb-12 max-w-4xl text-center mx-auto">
            <h1 class="text-4xl font-bold mb-6">Membership Benefits</h1>
            <p>With your generous donation today, you will become a member of Africanteenpreneur. You'll enjoy member benefits, like: </p>
        </div>

        <div class="flex flex-col sm:flex-row flex-wrap max-w-4xl mx-auto justify-center gap-6 [&>p]:text-[18px]">
            <div class="w-40 mx-auto text-center">
                <img src="{{ asset('images/impact.jpg') }}" alt="Make an Impact" class="w-full h-auto rounded-lg shadow-md mb-2">
                
                <h1 class="text-lg font-semibold text-gray-800">Make an Impact</h1>
                <p class="">Know you're doing your part to save nature around the world.</p>
            </div>
            <div class="w-40 mx-auto text-center">
                <img src="{{ asset('images/impact.jpg') }}" alt="Make an Impact" class="w-full h-auto rounded-lg shadow-md mb-2">
                
                <h1 class="text-lg font-semibold text-gray-800">Teen News</h1>
                <p class="">Monthly highlights of our top conservation work straight to your inbox.</p>
            </div>
            <div class="w-40 mx-auto text-center">
                <img src="{{ asset('images/impact.jpg') }}" alt="Make an Impact" class="w-full h-auto rounded-lg shadow-md mb-2">
                
                <h1 class="text-lg font-semibold text-gray-800">Our Annual Calendar</h1>
                <p class="">With 12 months of amazing nature photos</p>
            </div>
    
        </div>

    </section>
            
    <hr class="border-t border-orange-500 w-[80vw] mx-auto mt-12 mb-12">

    <!-- FAQs -->
    <section class="max-w-2xl mx-auto px-4 py-8">
        <h2 class="text-orange-500 font-semibold uppercase text-sm mb-6">Frequently Asked Questions</h2>

        <div class="border-t border-gray-300 divide-y divide-gray-300">
            <!-- FAQ Item -->
            <div x-data="{ open: false }" class="py-4">
                <div @click="open = !open" class="flex justify-between items-center cursor-pointer">
                    <h3 class="text-[26px] font-semibold">How do I join or donate to Africanteenpreneur?</h3>
                    <span class="text-orange-500 text-2xl font-bold" x-text="open ? '−' : '+'"></span>
                </div>

                <div 
                    x-show="open"
                    x-transition:enter="transition-all ease-out duration-500"
                    x-transition:enter-start="opacity-0 max-h-0"
                    x-transition:enter-end="opacity-100 max-h-40"
                    x-transition:leave="transition-all ease-in duration-400"
                    x-transition:leave-start="opacity-100 max-h-40"
                    x-transition:leave-end="opacity-0 max-h-0"
                    class="overflow-hidden text-[#1a1a1a] text-sm mt-2 md:text-[18px]"
                >
                    You can join or donate by visiting our website and clicking the "Donate" button. Multiple payment methods are supported.
                </div>
            </div>

            <!-- Another Item -->
            <div x-data="{ open: false }" class="py-4">
                <div @click="open = !open" class="flex justify-between items-center cursor-pointer">
                    <h3 class="text-[26px] font-semibold">Is my donation tax-deductible?</h3>
                    <span class="text-orange-500 text-2xl font-bold" x-text="open ? '−' : '+'"></span>
                </div>

                <div 
                    x-show="open"
                    x-transition:enter="transition-all ease-out duration-500"
                    x-transition:enter-start="opacity-0 max-h-0"
                    x-transition:enter-end="opacity-100 max-h-40"
                    x-transition:leave="transition-all ease-in duration-400"
                    x-transition:leave-start="opacity-100 max-h-40"
                    x-transition:leave-end="opacity-0 max-h-0"
                    class="overflow-hidden text-[#1a1a1a] text-sm mt-2 md:text-[18px]"
                >
                    Yes, donations are generally tax-deductible. Please consult your local tax regulations for details.
                </div>
            </div>
            <!-- Another Item -->
            <div x-data="{ open: false }" class="py-4">
                <div @click="open = !open" class="flex justify-between items-center cursor-pointer">
                    <h3 class="text-[26px] font-semibold">How do i receive my benefits or thank you gifts?</h3>
                    <span class="text-orange-500 text-2xl font-bold" x-text="open ? '−' : '+'"></span>
                </div>

                <div 
                    x-show="open"
                    x-transition:enter="transition-all ease-out duration-500"
                    x-transition:enter-start="opacity-0 max-h-0"
                    x-transition:enter-end="opacity-100 max-h-40"
                    x-transition:leave="transition-all ease-in duration-400"
                    x-transition:leave-start="opacity-100 max-h-40"
                    x-transition:leave-end="opacity-0 max-h-0"
                    class="overflow-hidden text-[#1a1a1a] text-sm mt-2 md:text-[18px]"
                >
                Your member benefits and thank you gifts will be automatically sent to the mail address or email you provide. If items have been damaged or lost, please contact our Member Care team at member@Africanteenpreneur.org or 09012345677 so we can correct the situation immediately.
                </div>
            </div>
            <!-- Another Item -->
            <div x-data="{ open: false }" class="py-4">
                <div @click="open = !open" class="flex justify-between items-center cursor-pointer">
                    <h3 class="text-[26px] font-semibold">Have other questions?</h3>
                    <span class="text-orange-500 text-2xl font-bold" x-text="open ? '−' : '+'"></span>
                </div>

                <div 
                    x-show="open"
                    x-transition:enter="transition-all ease-out duration-500"
                    x-transition:enter-start="opacity-0 max-h-0"
                    x-transition:enter-end="opacity-100 max-h-40"
                    x-transition:leave="transition-all ease-in duration-400"
                    x-transition:leave-start="opacity-100 max-h-40"
                    x-transition:leave-end="opacity-0 max-h-0"
                    class="overflow-hidden text-[#1a1a1a] text-sm mt-2 md:text-[18px]"
                >
                Visit our <a href="{{ route('faqs')}} " class="text-orange-500 underline">Frequently Asked Questions page</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Special Membership -->
    <section>
        <h1 class="text-4xl font-bold max-w-4xl mx-auto p-4">Special Membership Levels</h1>
        <p class="max-w-4xl mx-auto p-4 text-[#1a1a1a] text-[18px]">Our special giving opportunities allow you to customize your support in the way that’s right for you. However you choose to give, you can feel good knowing that your support will make a direct impact on protecting our natural world.</p>

        <div class="flex items-start space-x-4 max-w-4xl mx-auto p-4">
            <!-- Thumbnail Image -->
            <img 
                src="{{ asset('images/sky.jpg') }}" 
                alt="Africanteenpreneur Champion" 
                class="w-24 h-24 object-cover rounded-lg shadow-md flex-shrink-0"
            >

            <!-- Text Content -->
            <div class="flex-1">
                <h1 class="text-xl font-semibold text-gray-800 mb-2">Africanteenpreneur Champion</h1>
                <p class="text-gray-600 text-sm">Africanteenpreneur Champions are monthly donors whose reliable support is crucial to tackling big  challenges with steady dedication. It's the most efficient, effective and convenient way to give. <a href="#" class="font-bold text-orange-500">Join</a>

                </p>
            </div>
        </div>

        <hr class="border-t border-orange-500 max-w-4xl mx-auto mt-12 mb-12">

        <div class="flex items-start space-x-4 max-w-4xl mx-auto p-4">
            <!-- Thumbnail Image -->
            <img 
                src="{{ asset('images/sky.jpg') }}" 
                alt="Africanteenpreneur Champion" 
                class="w-24 h-24 object-cover rounded-lg shadow-md flex-shrink-0"
            >

            <!-- Text Content -->
            <div class="flex-1">
                <h1 class="text-xl font-semibold text-gray-800 mb-2">Africanteen Partners, Teen Guardians </h1>
                <p class="text-gray-600 text-sm">Africanteen Partners, Teen Guardians, are recognition circles that honor the generosity of those who donate $1,000, $5,000, $10,000 or more, respectively.<a href="#" class="font-bold text-orange-500">Join</a>
                </p>
            </div>
        </div>

        <hr class="border-t border-orange-500 max-w-4xl mx-auto mt-12 mb-12">
        
        <div class="flex items-start space-x-4 max-w-4xl mx-auto p-4">
            <!-- Thumbnail Image -->
            <img 
                src="{{ asset('images/sky.jpg') }}" 
                alt="Africanteenpreneur Champion" 
                class="w-24 h-24 object-cover rounded-lg shadow-md flex-shrink-0"
            >

            <!-- Text Content -->
            <div class="flex-1">
                <h1 class="text-xl font-semibold text-gray-800 mb-2">Legacy Club</h1>
                <p class="text-gray-600 text-sm">Legacy Club members have committed to protecting teen's future by including them  in their estate plans or by making a life-income gift.<a href="#" class="font-bold text-orange-500">Join</a>

                </p>
            </div>
        </div>

        <hr class="border-t border-orange-500 max-w-4xl mx-auto mt-12 mb-12">

    </section>

    <section class="relative w-full h-[300px] sm:h-[400px] md:h-[500px] overflow-hidden">
        
        <!-- Image -->
        <img 
            src="{{ asset('images/naturemountain.jpg') }}" 
            alt="..." 
            class="absolute inset-0 w-full h-full object-cover z-0"
        >

       
        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black/70 z-10"></div>

        <!-- Content -->
        <div class="relative z-20 flex flex-col justify-center items-center text-center h-full text-white px-4">
            <h1 class="text-4xl  font-bold ">Gifts Membership</h1>
            <h2 class="text-xl sm:text-2xl md:text-3xl  mt-2 font-semibold  max-w-[90%]"> Share the inspiration of taking on nature's biggest challenges by giving a gift membership. Welcome a loved one into The Nature Conservancy’s community, and they'll receive all the benefits of membership. </h2>
            
            <div class="flex flex-col space-y-2 items-center mt-12">
               <button class="bg-orange-500 text-white font-semibold rounded w-full sm:w-[200px] h-[50px]">
                   Give a Gift Membership
               </button>
           </div>
        </div>

    </section>

    <section class="h-[500px] mx-auto text-center py-16">
        <h1 class="max-w-4xl mx-auto mb-12 text-4xl font-bold">A brighter, greener future starts with you. </h1>
        <p class="max-w-4xl mx-auto mb-12">When you join The Nature Conservancy, you become part of a community committed to the healthiest, brightest future possible for our planet. You'll receive exclusive updates about the latest advances in conservation. Your voice will play an active role in protecting the land and water we depend on and the animal habitat we all love. </p>

         <div class="flex flex-col space-y-2 items-center">
            <button class="bg-orange-500 text-white font-semibold rounded w-full sm:w-[200px] h-[50px]">
                Donate
            </button>
        </div>
    </section>

</div>
