<div>
    <!-- Hero Header -->
    <section class="relative w-full h-[400px] md:h-[500px] overflow-hidden">
        <livewire:partials.navbar />
        <!-- Image -->
        <img 
            src="{{ asset('images/foodwater.jpg') }}" 
            alt="..." 
            class="absolute inset-0 w-full h-full object-cover z-0"
        >

        <!-- Overlay (semi-transparent) -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-black/10 to-transparent z-10"></div>

        <!-- Content -->
        <div class="relative z-20 flex flex-col justify-center items-center text-center h-full text-white px-4">
            <h1 class="text-3xl md:text-5xl font-bold">Our Goals for 2030</h1>
            <h2 class="text-xl md:text-3xl mt-2 font-semibold text-orange-400">Provide Food & Water</h2>
        </div>
    </section>

    <!-- Share -->
    <section class="text-center bg-white">
        <div class="flex flex-wrap justify-center items-center space-x-6 text-2xl text-gray-600">
            <h3 class="font-bold text-gray-800 text-xl uppercase">Share</h3>

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

    <section class="py-12 px-4 md:px-16 bg-white text-gray-800">
        <div class="max-w-4xl mx-auto space-y-6">
            <h1 class="text-4xl font-bold text-center">While the world continues to face hunger, food demand is expected to increase as the world’s population continues to grow. </h1>
            <p class="text-lg leading-relaxed">
                In many African communities, hunger and lack of clean water remain critical challenges, especially for teenagers and children. At <strong>AfricanTeenPreneur</strong>, we believe no young mind should be held back by the basic need for nourishment.
            </p>

            <p class="text-lg leading-relaxed">
                As Africa’s youth population grows, the demand for sustainable food and water systems becomes even more urgent. We're taking action by launching community-driven feeding programs, clean water initiatives, and sustainable agriculture training that equip teens and families to build food security from the ground up.
            </p>

            <p class="text-lg leading-relaxed">
                Our approach blends local partnerships with innovation. We engage teen entrepreneurs in creating solutions—from school gardens and solar-powered water systems to food distribution networks that serve orphanages, schools, and rural villages.
            </p>

            <p class="text-lg leading-relaxed">
                With your support, we can achieve a future where no teenager in Africa goes to bed hungry or thirsty. Together, we’re creating a new generation of empowered, resilient youth—starting with food and water security.
            </p>
        </div>

        <div class="mt-10 text-center">
            <a href="" class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-full font-semibold transition">
                Help Us Reach More Teens
            </a>
        </div>
    </section>

    <section class="bg-orange-500 text-white py-16 px-6 text-center">
        <div class="max-w-4xl mx-auto space-y-6">
            <h2 class="text-3xl md:text-4xl font-extrabold">Our Vision for Africa’s Future</h2>
            <p class="text-lg md:text-xl leading-relaxed">
                At <strong>AfricanTeenPreneur</strong>, we’re committed to empowering teens to safeguard Africa’s future. 
                Our mission? To help restore and protect millions of acres of fertile land, clean water sources, and thriving local ecosystems—because sustainable food and water for every teen starts with a healthy environment.
            </p>
        </div>
    </section>

    <section class="bg-white text-gray-800 py-12 px-6">
        <div class="max-w-4xl mx-auto space-y-6 text-center">
            <p class="text-lg md:text-xl leading-relaxed">
                We aim to achieve this bold vision by creating and supporting youth-led community initiatives, improving land and water stewardship, encouraging climate-smart agriculture, building partnerships with local leaders and changemakers, and influencing policies that prioritize food and water access for all.
            </p>
        </div>
    </section>

    <!-- carousel -->
    <section x-data="infiniteCarousel()" x-init="init" class="w-full bg-white py-12 overflow-hidden">
        <div class="relative w-full max-w-full">

            <!-- Slider Track Container -->
            <div class="relative overflow-hidden" :style="`padding-left: ${containerOffset}px; padding-right: ${containerOffset}px`">
                <div
                    class="flex transition-all duration-500 ease-in-out"
                    :style="`transform: translateX(-${currentTranslate}px)`"
                    x-ref="track"
                    :class="{ 'transition-none': skipTransition }"
                >

                    <!-- Clone Last Image (to allow seamless prev from first) -->
                    <div class="flex-none" :style="`width: ${slideWidth}px; padding: 0 10px;`">
                        <img :src="images[images.length - 1]" alt="Clone Last"
                            class="rounded-lg shadow-md object-cover w-full h-[400px]">
                    </div>

                    <!-- Real Slides -->
                    <template x-for="(image, index) in images" :key="index">
                        <div class="flex-none" :style="`width: ${slideWidth}px; padding: 0 10px;`">
                            <img :src="image" alt="Slide"
                                class="rounded-lg shadow-md object-cover w-full h-[400px]">
                        </div>
                    </template>

                    <!-- Clone First Image (to allow seamless next from last) -->
                    <div class="flex-none" :style="`width: ${slideWidth}px; padding: 0 10px;`">
                        <img :src="images[0]" alt="Clone First"
                            class="rounded-lg shadow-md object-cover w-full h-[400px]">
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="absolute inset-y-1/2 -translate-y-1/2 w-full flex justify-between px-4 z-10">
                <button @click="prev()" class="bg-orange-500 hover:bg-orange-600 text-white p-3 rounded-full h-[50px] shadow">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button @click="next()" class="bg-orange-500 hover:bg-orange-600 text-white p-3 rounded-full h-[50px] shadow">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>

</div>
@push('scripts')
    <script>
        function infiniteCarousel() {
            return {
                images: [
                    @json(asset('images/foodwater.jpg')),
                    @json(asset('images/africancontinent.jpg')),
                    @json(asset('images/slidingpuzzle.png')),
                    @json(asset('images/homesvg.svg')),
                ],
                currentIndex: 1, // Starts at first real image
                slideWidth: 0,
                containerOffset: 0,
                skipTransition: false,

                get currentTranslate() {
                    // center the current image
                    return this.currentIndex * this.slideWidth;
                },

                init() {
                    this.setSlideWidth();
                    window.addEventListener('resize', this.setSlideWidth.bind(this));
                },

                setSlideWidth() {
                    const screenWidth = window.innerWidth;
                    this.slideWidth = screenWidth * 0.7;
                    this.containerOffset = (screenWidth - this.slideWidth) / 2;
                },

                next() {
                    this.skipTransition = false;
                    this.currentIndex++;
                    this.handleLoop();
                },

                prev() {
                    this.skipTransition = false;
                    this.currentIndex--;
                    this.handleLoop();
                },

                handleLoop() {
                    setTimeout(() => {
                        if (this.currentIndex === this.images.length + 1) {
                            this.skipTransition = true;
                            this.currentIndex = 1;
                        } else if (this.currentIndex === 0) {
                            this.skipTransition = true;
                            this.currentIndex = this.images.length;
                        }
                    }, 500);
                },
            }
        }
    </script>
@endpush