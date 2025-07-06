<div>
  <!-- Hero Header -->
  <section class="relative w-full h-[300px] sm:h-[400px] md:h-[500px] overflow-hidden">
      <livewire:partials.navbar />
      <!-- Image -->
      <img 
          src="{{ asset('images/donate.jpg') }}" 
          alt="..." 
          class="absolute inset-0 w-full h-full object-cover z-0"
      >

      <!-- Overlay (semi-transparent) -->
      <div class="absolute inset-0 bg-black/60 z-10"></div>

      <!-- Content -->
      <div class="relative z-20 flex flex-col justify-center items-center text-center h-full text-white px-4">
          <p class="text-sm sm:text-base font-bold uppercase">Donate to our mission</p>
          <h2 class="text-xl sm:text-2xl md:text-3xl  mt-2 font-semibold text-orange-400 max-w-[90%]">Together, we can empower the next generation of African changemakers.At AfricanTeenpreneur, we believe in unlocking the potential of youth across the continent — equipping them with the tools to rise above poverty, inequality, and injustice. Your support can help young entrepreneurs build real businesses, gain skills, and become powerful voices for change in their communities. With your donation, we can transform futures — one teen at a time.</h2>
      </div>
  </section>

  <section  x-data="donationForm()" x-init="init()">
    <div class="bg-gray-800 text-white w-96 rounded shadow-lg p-6 space-y-4" x-init="init()">

      <!-- Heading -->
      <h2 class="text-2xl font-bold text-center">DONATE TO AFRICANTEENPRENEUR</h2>
      <p class="text-sm text-gray-300 text-center">
        Please confirm which country you live in so that we can take you to the right donation page
      </p>

      <!-- Toggle Buttons -->
      <div class="flex space-x-2 justify-center">
        <button class="w-1/2 py-2 bg-yellow-400 text-black font-semibold">ONE-OFF</button>
        <button class="w-1/2 py-2 bg-gray-600 text-white font-semibold">MONTHLY</button>
      </div>

      <!-- Amount Buttons -->
      <div>
        <p class="font-medium mb-2">Choose donation amount</p>
        <div class="grid grid-cols-4 gap-2">
          <button 
            class="py-2 rounded font-semibold"
            :class="selected === '20' ? 'bg-yellow-400 text-black' : 'bg-gray-700 text-white'"
            @click="selectAmount('20')"
            x-text="currencySymbol + '20'"
          ></button>

          <button 
            class="py-2 rounded font-semibold"
            :class="selected === '35' ? 'bg-yellow-400 text-black' : 'bg-gray-700 text-white'"
            @click="selectAmount('35')"
          x-text="currencySymbol + '35'"></button>

          <button 
            class="py-2 rounded font-semibold"
            :class="selected === '50' ? 'bg-yellow-400 text-black' : 'bg-gray-700 text-white'"
            @click="selectAmount('50')"
            x-text="currencySymbol + '50'"
          ></button>

          <button 
            class="py-2 rounded font-semibold"
            :class="selected === 'custom' ? 'bg-yellow-400 text-black' : 'bg-gray-700 text-white'"
            @click="selectAmount('custom')"
          >CUSTOM</button>
        </div>
      </div>

      <!-- Description -->
      <p class="text-sm text-gray-300 bg-gray-700 p-3 rounded whitespace-pre-line" x-text="description"></p>

      <!-- Country Selector -->
      <div>
        <label class="block text-sm mb-1">Select your country</label>
        <select class="w-full bg-gray-700 text-white p-2 rounded" @change="updateCurrency($event.target.value)">
          <option selected disabled>Select your country</option>
          <option value="NG">Nigeria</option>
          <option value="GH">Ghana</option>
          <option value="KE">Kenya</option>
          <option value="ZA">South Africa</option>
          <option value="US">United States</option>
          <option value="GB">United Kingdom</option>
          <option value="DE">Germany</option>

        </select>
      </div>

      <!-- Amount & Currency -->
      <div class="flex space-x-2">
        <input 
          type="number" 
          class="w-2/3 p-2 bg-gray-700 rounded text-white" 
          x-model="amount"
          @input="selectAmount('custom')"
          :placeholder="currencySymbol + ' 20.00'"      
        />
        
        <select class="w-1/3 bg-gray-700 text-white p-2 rounded" x-model="selectedCurrency">
          <template x-for="(value, code) in currencies" :key="code">
            <option :value="value.code" x-text="value.code"></option>
          </template>
        </select>
      </div>

      <!-- Donate Button -->
     <!-- Donate Button (links to checkout) -->
<a  
  class="w-full bg-yellow-400 text-black py-2 font-semibold rounded text-center block"
  :href="`/checkout?amount=${amount}&currency=${selectedCurrency}&country=${country}`"
>
  DONATE
</a>
    </div>
  </section>
</div>

@push('scripts')
    <script>
      function donationForm() {
        return {
          selected: '20',
          amount: 20,
          frequency: 'one-off',
          country: 'US',
          selectedCurrency: 'USD',
          currencySymbol: '$',
          currencies: {
          US: { symbol: '$', code: 'USD' },
          NG: { symbol: '₦', code: 'NGN' },
          GH: { symbol: '₵', code: 'GHS' },
          KE: { symbol: 'KSh', code: 'KES' },
          ZA: { symbol: 'R', code: 'ZAR' },
          GB: { symbol: '£', code: 'GBP' },
          DE: { symbol: '€', code: 'EUR' },
          
          },
          init() {
            this.selectAmount('20'); // default load
          },
          get description() {
            switch (this.selected) {
              case '20':
                return "This could help us provide vital human rights education programs to people across the world.";
              case '35':
                return "This could help us provide vital human rights education programs to people across the world.\nThis money could fund crucial support for peoples whose rights are being denied.";
              case '50':
                return "Your donation could put pressure on politicians to protect human rights.";
              case 'custom':
                return "Donate another amount to support our work. Every donation, no matter how big or small, will have a huge impact on our fight for human rights everywhere.";
              default:
                return "";
            }
          },
          selectAmount(value) {
            this.selected = value;
            if (value !== 'custom') {
              this.amount = parseInt(value);
            }
          },
          updateCurrency(countryCode) {
            this.country = countryCode;
            const currency = this.currencies[countryCode];
            if (currency) {
              this.currencySymbol = currency.symbol;
              this.selectedCurrency = currency.code;
            }
          }
        }
      }
  </script>
@endpush
