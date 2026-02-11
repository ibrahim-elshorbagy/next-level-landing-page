<section class="py-16 sm:py-20 md:py-24 lg:py-28 bg-white relative overflow-hidden">
  <!-- Background Decoration -->
  <div class="absolute top-0 right-0 w-1/3 h-full bg-gradient-to-l from-accent/5 to-transparent hidden lg:block"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <!-- Section Header -->
    <x-section-title title="Why Choose <span class='text-black'>NEXT LEVEL</span>"
      subtitle="We bring together strategy, expertise, and execution to deliver measurable results" />

    <x-features-grid />

    <!-- Bottom CTA -->
    <div class="mt-12 sm:mt-16 text-center">
      <a wire:navigate href="{{ route('about') }}"
        class="inline-flex items-center px-6 sm:px-8 py-3 sm:py-4 bg-black text-white font-semibold rounded-full hover:bg-accent hover:text-black transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105 text-sm sm:text-base">
        Learn More About Us
        <x-heroicon-s-arrow-right class="w-5 h-5 ml-2" />
      </a>
    </div>
  </div>
</section>
