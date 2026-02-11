<section class="relative min-h-[60vh] flex items-center justify-center overflow-hidden">
  <!-- Background Image with Overlay -->
  <div class="absolute inset-0">
    <img src="{{ asset('assets/about/AboutHero.webp') }}"
      alt="About NEXT LEVEL - Strategic advisory firm founded in 2020" class="w-full h-full object-cover"
      loading="eager" fetchpriority="high">
    <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/70 to-black/50"></div>
  </div>

  <!-- Content -->
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-24 md:py-32 text-center">
    <div class="max-w-4xl mx-auto">
      <!-- Badge -->
      <div
        class="inline-flex items-center bg-white/10 backdrop-blur-sm rounded-full px-3 sm:px-4 py-1.5 sm:py-2 mb-6 sm:mb-8 border border-white/20">
        <x-heroicon-o-book-open class="w-4 h-4 sm:w-5 sm:h-5 text-accent mr-2" />
        <span class="text-white/80 text-xs sm:text-sm font-medium">Our Story</span>
      </div>

      <!-- Main Heading -->
      <h1
        class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold text-white mb-4 sm:mb-6 leading-tight tracking-tight">
        About <span class="text-accent">NEXT LEVEL</span>
      </h1>

      <!-- Subheading -->
      <p class="text-lg sm:text-xl md:text-2xl text-gray-300 max-w-2xl mx-auto leading-relaxed">
        Connecting opportunities across borders, industries, and cultures
      </p>
    </div>
  </div>

  <!-- Bottom Gradient -->
  <div class="absolute bottom-0 left-0 right-0 h-24 sm:h-32 bg-gradient-to-t from-white to-transparent"></div>
</section>
