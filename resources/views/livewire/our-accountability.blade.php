<div>
   <!-- Hero Header -->
    <section class="relative w-full h-[300px] sm:h-[400px] md:h-[500px] overflow-hidden">
        <livewire:partials.navbar />
        <!-- Image -->
        <img 
            src="{{ asset('images/accountability.jpg') }}" 
            alt="..." 
            class="absolute inset-0 w-full h-full object-cover z-0"
        >

        <!-- Overlay (semi-transparent) -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-black/10 to-transparent z-10"></div>

        <!-- Content -->
        <div class="relative z-20 flex flex-col justify-center items-center text-center h-full text-white px-4">
            <p class="text-sm sm:text-base font-bold uppercase">Who We Are</p>
            <h2 class="text-xl sm:text-2xl md:text-3xl  mt-2 font-semibold text-orange-400 max-w-[90%]"> Why we receive high charity ratings</h2>
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

    <section 
        x-data="{
            tab: (() => {
                const param = new URLSearchParams(window.location.search).get('tab_q');
                if (!param) return 'accountability';
                try {
                    return atob(param.split('tab_element_')[1]);
                } catch { return 'accountability'; }
            })(),

            selectTab(name) {
                this.tab = name;
                const base64 = btoa(name);
                const url = new URL(window.location);
                url.searchParams.set('tab_q', 'tab_container-tab_element_' + base64);
                history.pushState({}, '', url);
            }
        }" class="w-full px-4 py-8 bg-white">
        
        <!-- Tabs -->
        <div class="flex flex-wrap justify-center space-x-6 border-b border-gray-300 mb-6">
            <!-- Our Accountability Tab -->
            <button 
                @click="selectTab('accountability')"
                :class="tab === 'accountability' ? 'border-b-2 border-orange-500 text-orange-600' : 'text-gray-600 hover:text-orange-500'"
                class="pb-2 text-lg font-semibold transition">
                Our Accountability
            </button>

            <!-- Values, Ethics & Code of Conduct Tab -->
            <button 
                @click="selectTab('values')"
                :class="tab === 'values' ? 'border-b-2 border-orange-500 text-orange-600' : 'text-gray-600 hover:text-orange-500'"
                class="pb-2 text-lg font-semibold transition">
                Values, Ethics & Code of Conduct
            </button>
        </div>

        <!-- Tab Content -->
        <div class="max-w-4xl mx-auto text-gray-800 leading-relaxed space-y-4">
            <!-- Our Accountability Content -->
            <div x-show="tab === 'accountability'" x-transition>
                <h2 class="text-2xl font-bold mb-4">Accountability & Transparency at AfricanTeenpreneur</h2>
                <p>
                    At AfricanTeenpreneur, we operate with unwavering commitment to accountability, transparency, and measurable impact.
                </p>

                <h3>Open and Trustworthy</h3>

                <p>We believe you deserve to know exactly how your support is transforming lives. That’s why we maintain full transparency in our operations, finances, and program outcomes. As a youth-driven NGO, we hold ourselves accountable to:</p>
                <ul class="list-disc pl-6 space-y-2 text-gray-700">
                    <li>Our donors – Every contribution is used responsibly to maximize impact.</li>
                    <li>The communities we serve – We listen, adapt, and ensure our programs meet real needs.</li>
                    <li>Future generations – We invest in sustainable solutions that empower African teens for long-term success.</li>
                </ul>
                <p>Our dedication to integrity is reflected in our strong ratings from independent oversight organizations, ensuring your trust is well-placed.</p>

                <h3>Efficient & Impact-Driven</h3>
                <p>AfricanTeenpreneur is built on efficiency, innovation, and results. With every dollar donated, we prioritize:</p>
                <ul class="list-disc pl-6 space-y-2 text-gray-700">
                    <li>Direct program funding – The majority of resources go straight to initiatives that train, mentor, and equip young entrepreneurs.</li>
                    <li>Measurable outcomes – We track progress through real data, from businesses launched to livelihoods improved.</li>
                    <li>Sustainable growth – By leveraging partnerships and technology, we amplify our reach without waste.</li>
                </ul>

                <p>Your trust fuels our mission. That’s why we ensure every investment—whether time, funding, or partnership—is used effectively, ethically, and for lasting change.</p>
            
            </div>

            <!-- Values & Ethics Content -->
            <div x-show="tab === 'values'" x-transition class="mb-12 [&>p]:text-[22px]">
                <h2 class="text-2xl font-bold mb-4">Integrity Without Compromise</h2>
                <p>
                    At AfricanTeenPreneur, we uphold Integrity Without Compromise in everything we do. As we empower the next generation of African teen entrepreneurs, we commit to the highest ethical and professional standards. We hold ourselves fully accountable to our mission, the young people we serve, and the communities that support us.
                </p>
                <p>We are committed to:</p>
                
                <ul class="list-disc pl-6 space-y-2 text-gray-700">
                    <li>Acting and communicating with transparency and honesty at all times.</li>
                    <li>Remaining answerable to our mission, team, supporters, and the youth we uplift.</li>
                    <li>Building trust through consistency, competence, and respect for every commitment we make.</li>
                </ul>

                <h1 class="font-bold text-2xl mb-4 mt-4">Commitment to Diversity, Equity & Inclusion</h1>
                
                <p>Just as a healthy ecosystem thrives on diversity, so does our mission. AfricanTeenPreneur is committed to building a diverse and inclusive community where everyone feels seen, heard, and valued.</p>
                <h3>We:</h3>
                <ul class="list-disc pl-6 space-y-2 text-gray-700">
                    <li>Embrace different perspectives and life experiences to inform our work.</li>
                    <li>Create a safe and inclusive environment, free from discrimination or harassment.</li>
                    <li>Ensure that all team members and teens have equal access to resources, opportunities, and support.</li>
                </ul>

                <h1 class="font-bold text-2xl mb-4 mt-4">One Vision, One Movement</h1>
                <p>We are stronger together. AfricanTeenPreneur is a unified movement — across borders, schools, orphanages, and communities — dedicated to creating opportunity and impact for teens in Africa and beyond.</p>
                <h3>We:</h3>
                <ul class="list-disc pl-6 space-y-2 text-gray-700">
                    <li>Act as one, aligning our programs, resources, and teams under a shared purpose.</li>
                    <li>Encourage collaboration across departments and locations to maximize our collective power.</li>
                    <li>Celebrate the achievements of every individual, because each win is a win for all of us.</li>
                </ul>

                <h1  class="font-bold text-2xl mb-4 mt-4">Impact That Endures</h1>
                <p>Our mission is to produce long-term, measurable impact — not just programs, but transformation. We combine innovation, empathy, and data-driven strategy to craft sustainable solutions that prepare teens for real-world leadership and entrepreneurship.</p>
                <h3>We:</h3>
                <ul class="list-disc pl-6 space-y-2 text-gray-700">
                    <li>Rely on data, research, and lived experience to guide our programs.</li>
                    <li>Innovate continuously, remaining flexible in how we meet complex challenges.</li>
                    <li>Ensure our work respects the environment and the communities where we operate.</li>
                </ul>

                <h1 class="font-bold text-2xl mb-4 mt-4">Our Code of Conduct</h1>
                <p class="text-[22px]">The AfricanTeenPreneur Code of Conduct outlines the standards, expectations, and ethical principles that guide everyone involved with our organization — including staff, volunteers, advisors, and third-party partners.</p>

                <h3>Key principles include:</h3>
                <ul class="list-disc pl-6 space-y-2 text-gray-700">
                    <li>Compliance with all relevant laws, policies, and ethical norms, regardless of country or region.</li>
                    <li>Upholding a standard of conduct that exceeds minimum legal requirements where appropriate.</li>
                    <li>Using this Code as a living guide to make sound decisions, report concerns, and act in alignment with our core values.</li>
                </ul>
                
                <hr class="border-t border-orange-500 w-[50vw] mx-auto mb-12 mt-12">

                <p class="text-orange-500">Violations of this Code are taken seriously and may result in appropriate consequences. Upholding this Code is not only a legal duty — it is a moral obligation to the teens and communities we serve.</p>
            </div>
        </div>
    </section>

</div>
