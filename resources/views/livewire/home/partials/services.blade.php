<section class="py-16 sm:py-20 md:py-24 lg:py-28 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Section Header -->
    <x-section-title title="Our <span class='text-accent'>Services</span>"
      subtitle="Comprehensive advisory and implementation work structured into interconnected service areas" />

    <!-- Services Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 mb-8 sm:mb-12">
      <x-service-card title="Strategic & Managerial Consulting"
        description="Guiding leadership teams and boards through critical decision-making, business model innovation, and competitive repositioning."
        :link="route('services')">
        <x-slot name="icon">
          <x-heroicon-o-light-bulb class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-accent group-hover:text-white" />
        </x-slot>
      </x-service-card>

      <x-service-card title="Business Development & Market Expansion"
        description="Identifying new markets, building strategic partnerships, and launching growth-focused initiatives across Europe and the GCC."
        :link="route('services')">
        <x-slot name="icon">
          <x-heroicon-o-rocket-launch class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-accent group-hover:text-white" />
        </x-slot>
      </x-service-card>

      <x-service-card title="Branding & Communication Strategy"
        description="Designing brand identities and campaigns that align with corporate values, audience expectations, and international standards."
        :link="route('services')">
        <x-slot name="icon">
          <x-heroicon-o-megaphone class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-accent group-hover:text-white" />
        </x-slot>
      </x-service-card>
    </div>

    <!-- View All Button -->
    <div class="text-center">
      <a wire:navigate href="{{ route('services') }}"
        class="inline-flex items-center px-6 sm:px-8 py-3 sm:py-4 bg-black text-white font-semibold rounded-full hover:bg-accent hover:text-black transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105 text-sm sm:text-base">
        View All Services
        <x-heroicon-s-arrow-right class="w-5 h-5 ml-2" />
      </a>
    </div>
  </div>
</section>
