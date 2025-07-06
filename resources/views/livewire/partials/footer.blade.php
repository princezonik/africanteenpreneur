<div class="flex flex-col space-y-12 bg-black px-6 py-16 text-white">

    <!-- Top Section -->
    <div class="flex flex-col md:flex-row md:justify-between md:space-x-12 space-y-12 md:space-y-0">

        <!-- Explore -->
        <div class="flex flex-col space-y-4">
            <h1 class="text-xl md:text-[28px] font-semibold">Explore</h1>
            <div class="flex flex-col space-y-2 text-gray-300">
                <a href="#" class="hover:underline">Our Mission</a>
                <a href="{{route('our-accountability')}}" class="hover:underline">Our Accountability</a>
                <a href="#" class="hover:underline">Volunteer</a>
            </div>
        </div>

        <!-- Connect -->
        <div class="flex flex-col space-y-4">
            <h1 class="text-xl md:text-[28px] font-semibold">Connect</h1>
            <div class="flex flex-col space-y-2 text-gray-300">
                <a href="#" class="hover:underline">Contact Us</a>
                <a href="#" class="hover:underline">FAQs</a>
                <a href="#" class="hover:underline">Careers</a>
                <a href="#" class="hover:underline">Ethics Helpline</a>
            </div>
        </div>

        <!-- Newsletter -->
        <div class="flex flex-col space-y-4 md:max-w-sm w-full">
            <h1 class="text-xl md:text-[28px] font-semibold">Sign Up for E-News</h1>

            @if (session()->has('success'))
                <div class="bg-green-100 text-green-800 p-2 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <input 
                type="email" 
                wire:model.defer="email" 
                class="w-full border border-gray-300 rounded px-4 py-2 text-black"
                placeholder="Enter your email"
            >
            @error('email') 
                <p class="text-sm text-red-600">{{ $message }}</p> 
            @enderror

            <button 
                wire:click.prevent="saveEmail"
                class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded font-semibold"
            >
                Sign Up
            </button>
        </div>
    </div>

    <!-- Middle Section -->
    <hr class="border-t border-orange-500 my-6">

    <!-- Social Media Section -->
    <div class="text-center">
        <h1 class="text-xl font-semibold mb-4">SOCIALS</h1>
        <div class="flex flex-wrap justify-center gap-6 text-white text-2xl">
            <!-- Replace # with actual links -->
            <a href="https://facebook.com" target="_blank" class="hover:text-blue-500"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://instagram.com" target="_blank" class="hover:text-pink-500"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://linkedin.com" target="_blank" class="hover:text-blue-400"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://twitter.com" target="_blank" class="hover:text-blue-300"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://tiktok.com" target="_blank" class="hover:text-gray-200"><i class="fa-brands fa-tiktok"></i></a>
        </div>
    </div>

    <!-- Bottom Section -->
    <hr class="border-t border-orange-500 my-6">

    <div class="flex flex-col text-center space-y-6 text-sm text-gray-300">
        <h1 class="text-2xl font-bold text-white">AfricanTeenPreneur</h1>

        <p class="max-w-4xl mx-auto">
            AfricanTeenPreneur is a nonprofit, tax-exempt charitable organization. Donations are tax-deductible as allowed by law. 
            Global sites represent either regional branches or local affiliates that are separate entities. 
            This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.
        </p>

        <p class="max-w-4xl mx-auto">
            © 2025 Africanteenpreneur 
            <a href="#" class="underline hover:text-orange-400">Terms of Use</a> |
            <a href="#" class="underline hover:text-orange-400">Privacy Policy</a> |
            <a href="#" class="underline hover:text-orange-400">Charitable Solicitation Disclosures</a> |
            <a href="#" class="underline hover:text-orange-400">Mobile Terms & Conditions</a> |
            <a href="#" class="underline hover:text-orange-400">Notice of Nondiscrimination</a>
        </p>
    </div>
</div>
