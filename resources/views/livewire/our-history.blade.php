<div>
    <!-- Hero Header -->
    <section class="relative w-full h-[300px] sm:h-[400px] md:h-[500px] overflow-hidden">
        <livewire:partials.navbar />
        <!-- Image -->
        <img 
            src="{{ asset('images/longroad.jpg') }}" 
            alt="..." 
            class="absolute inset-0 w-full h-full object-cover z-0"
        >

        <!-- Overlay (semi-transparent) -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-black/10 to-transparent z-10"></div>

        <!-- Content -->
        <div class="relative z-20 flex flex-col justify-center items-center text-center h-full text-white px-4">
            <p class="text-sm sm:text-base font-bold uppercase">Who We Are</p>
            <h2 class="text-xl sm:text-2xl md:text-3xl  mt-2 font-semibold text-orange-400 max-w-[90%]"> Our History</h2>
        </div>
    </section>

    <section class="text-center">
        <h1 class="text-4xl">Rooted in Vision, Powered by Collaboration</h1>
        <p>From the very beginning, our mission has been guided by a shared purpose — uniting forward-thinking leaders, passionate changemakers, and committed communities. What started as a vision to protect our planet has grown into a global movement. Today, with the strength of our diverse team, partners, and supporters, we are tackling the world’s most pressing environmental challenges and creating meaningful impact in over 70 countries and territories.</p>
    </section>
</div>
