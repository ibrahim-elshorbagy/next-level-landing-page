<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
  <!-- Background Image with Overlay -->
  <div class="absolute inset-0">
    <img src="{{ asset('assets/HomeHero.webp') }}"
      alt="Strategic Consulting - NEXT LEVEL CONSULTING providing advisory services across Italy, Saudi Arabia, and UAE"
      class="w-full h-full object-cover" loading="eager">
    <div class="absolute inset-0 bg-gradient-to-br from-black/90 via-black/70 to-black/50"></div>
  </div>

  <!-- Animated Background Elements -->
  <div class="absolute inset-0 overflow-hidden hidden md:block">
    <div class="absolute top-20 left-10 w-72 h-72 bg-accent/20 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-20 right-10 w-96 h-96 bg-accent/10 rounded-full blur-3xl animate-pulse"
      style="animation-delay: 1s;"></div>
  </div>

  <!-- Content -->
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16 md:py-20 lg:py-24">
    <div class="max-w-4xl">
      <!-- Badge -->
      <div
        class="inline-flex items-center bg-white/10 backdrop-blur-sm rounded-full px-3 sm:px-4 py-1.5 sm:py-2 mb-6 sm:mb-8 border border-white/20">
        <span class="w-2 h-2 bg-accent rounded-full mr-2 animate-pulse"></span>
        <span class="text-white/80 text-xs sm:text-sm font-medium">Strategic & Operational Advisory</span>
      </div>

      <!-- Main Heading - FIXED FOR SEO -->
      <h1
        class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl 2xl:text-8xl font-bold text-white mb-6 sm:mb-8 leading-tight tracking-tight">
        <span class="flex items-center mb-2 sm:mb-3">
          <x-heroicon-o-rocket-launch
            class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 lg:w-14 lg:h-14 xl:w-16 xl:h-16 mr-2 sm:mr-3 md:mr-4 text-accent flex-shrink-0" />
          <span>STRATEGY.</span>
        </span>
        <span class="block text-accent">DEVELOPMENT.</span>
        <span class="block">EXECUTION.</span>
      </h1>

      <!-- Subheading -->
      <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-gray-300 mb-6 max-w-2xl leading-relaxed">
        At <span class="text-accent font-semibold">NEXT LEVEL CONSULTING</span>, we turn ideas into impact.
      </p>

      <!-- CTA Buttons -->
      <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
        <a wire:navigate href="{{ route('about') }}"
          class="inline-flex items-center justify-center px-6 sm:px-8 py-3 sm:py-4 bg-accent text-black font-bold rounded-full text-sm sm:text-base lg:text-lg hover:bg-white hover:scale-105 transition-all duration-300 shadow-xl shadow-accent/30">
          About
          <x-heroicon-s-arrow-right class="w-5 h-5 ml-2" />
        </a>
        <a wire:navigate href="{{ route('services') }}"
          class="inline-flex items-center justify-center px-6 sm:px-8 py-3 sm:py-4 bg-transparent border-2 border-white text-white font-bold rounded-full text-sm sm:text-base lg:text-lg hover:bg-white hover:text-black transition-all duration-300">
          Explore Services
        </a>
      </div>
    </div>
  </div>
</section>
