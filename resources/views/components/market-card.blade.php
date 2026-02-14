@props([
    'flag' => '',
    'country' => '',
    'image' => 'https://placehold.co/800x600/EEEEEE/999999?text=Market+Image',
    'description' => '',
    'link' => null,
])

<div
  class="group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
  <!-- Image -->
  <div class="relative h-48 sm:h-56 md:h-64 overflow-hidden">
    <div class="w-full h-full bg-gradient-to-br from-black to-yellow-900 flex items-center justify-center text-yellow-400 text-xl sm:text-2xl md:text-3xl font-bold">
      {{ $country }}
    </div>
    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>

    <!-- Flag Badge -->
    <div
      class="absolute top-3 sm:top-4 left-3 sm:left-4 bg-white/90 backdrop-blur-sm rounded-full px-3 sm:px-4 py-1.5 sm:py-2 flex items-center space-x-2 shadow-lg">
      <span class="text-xl sm:text-2xl">{{ $flag }}</span>
      <span class="font-semibold text-gray-900 text-sm sm:text-base">{{ $country }}</span>
    </div>
  </div>

  <!-- Content -->
  <div class="p-4 sm:p-6">
    <p class="text-gray-600 leading-relaxed mb-4 text-sm sm:text-base">
      {{ $description }}
    </p>

    {{ $slot }}

    @if ($link)
      <a wire:navigate href="{{ $link }}"
        class="inline-flex items-center text-black font-medium hover:text-accent transition-colors group/link text-sm sm:text-base">
        Explore Market
        <x-heroicon-s-arrow-right class="w-4 h-4 ml-2 group-hover/link:translate-x-2 transition-transform" />
      </a>
    @endif
  </div>
</div>
