@props([
    'title' => '',
    'subtitle' => '',
    'image' => 'https://placehold.co/1920x800/1a1a1a/FFD700?text=NEXT+LEVEL+CONSULTING',
    'ctaText' => null,
    'ctaLink' => null,
    'overlay' => true,
    'size' => 'large', // large, medium, small
])

@php
  $sizeClasses = match ($size) {
      'large' => 'min-h-[90vh] py-32',
      'medium' => 'min-h-[60vh] py-24',
      'small' => 'min-h-[40vh] py-16',
      default => 'min-h-[90vh] py-32',
  };
@endphp

<section class="relative {{ $sizeClasses }} flex items-center justify-center overflow-hidden">
  <!-- Background Image -->
  <div class="absolute inset-0">
    <img src="{{ $image }}" alt="Hero Background" class="w-full h-full object-cover">
    @if ($overlay)
      <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-black/40"></div>
    @endif
  </div>

  <!-- Content -->
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <div class="max-w-4xl mx-auto">
      @if ($title)
        <h1
          class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold text-white mb-6 leading-tight tracking-tight animate-fade-in">
          {!! $title !!}
        </h1>
      @endif

      @if ($subtitle)
        <p class="text-lg md:text-xl lg:text-2xl text-gray-200 mb-10 max-w-3xl mx-auto leading-relaxed">
          {{ $subtitle }}
        </p>
      @endif

      {{ $slot }}

      @if ($ctaText && $ctaLink)
        <a href="{{ $ctaLink }}"
          class="inline-flex items-center px-8 py-4 bg-accent text-black font-semibold rounded-full hover:bg-white hover:scale-105 transition-all duration-300 shadow-lg shadow-accent/30">
          {{ $ctaText }}
          <x-heroicon-s-arrow-right class="w-5 h-5 ml-2" />
        </a>
      @endif
    </div>
  </div>

  <!-- Decorative Elements -->
  <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-white to-transparent"></div>
</section>
