<section class="py-16 sm:py-20 md:py-24 lg:py-28 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Section Header -->
    <x-section-title
      subtitle="Actively engaged in three core markets, delivering cross-border strategies with regional insight and global execution standards">
      <x-slot name="title">
        <span class="inline-flex items-center justify-center flex-wrap gap-2">
          <x-heroicon-o-globe-alt class="w-8 h-8 sm:w-10 sm:h-10 lg:w-12 lg:h-12 text-accent" />
          <span>Where We <span class='text-black'>Operate</span></span>
        </span>
      </x-slot>
    </x-section-title>

    <!-- Markets Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
      <!-- Italy -->
      <x-market-card flag="🇮🇹" country="Italy" image="https://placehold.co/800x600/2a2a2a/FFD700?text=Italy"
        description="Driving innovation and repositioning across industries such as fashion, luxury, entertainment, tourism, and sports—collaborating with brands, venues, events, and institutions."
        :link="route('markets')" />

      <!-- Saudi Arabia -->
      <x-market-card flag="🇸🇦" country="Saudi Arabia"
        image="https://placehold.co/800x600/1a1a1a/FFD700?text=Saudi+Arabia"
        description="Supporting Vision 2030 initiatives through public-private partnerships, large-scale activation projects, and advisory across culture, sports, tourism, and infrastructure."
        :link="route('markets')" />

      <!-- UAE -->
      <x-market-card flag="🇦🇪" country="UAE" image="https://placehold.co/800x600/333333/FFD700?text=UAE"
        description="Delivering cross-border brand activations, institutional collaborations, and strategic business development in Dubai, Abu Dhabi, and beyond."
        :link="route('markets')" />
    </div>

    <!-- Learn More -->
    <div class="text-center mt-8 sm:mt-12">
      <a wire:navigate href="{{ route('markets') }}"
        class="inline-flex items-center text-gray-900 font-semibold hover:text-accent transition-colors text-base sm:text-lg group">
        How We Operate
        <x-heroicon-s-arrow-right class="w-5 h-5 ml-2 group-hover:translate-x-2 transition-transform" />
      </a>
    </div>
  </div>
</section>
