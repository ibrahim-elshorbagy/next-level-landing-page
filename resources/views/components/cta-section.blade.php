@props([
    'heading' => '',
    'description' => '',
    'buttonText' => 'Get Started',
    'buttonLink' => null,
    'variant' => 'dark', // dark, light, accent, semi-dark
])

@php
  $bgClasses = match ($variant) {
      'dark' => 'bg-black text-white',
      'light' => 'bg-gray-50 text-gray-900',
      'accent' => 'bg-accent text-black',
      'semi-dark' => 'bg-gray-800 text-white',
      default => 'bg-black text-white',
  };

  $buttonClasses = match ($variant) {
      'dark' => 'bg-accent text-black hover:bg-white',
      'light' => 'bg-black text-white hover:bg-accent hover:text-black',
      'accent' => 'bg-black text-white hover:bg-white hover:text-black',
      'semi-dark' => 'bg-accent text-black hover:bg-white',
      default => 'bg-accent text-black hover:bg-white',
  };
@endphp

<section class="{{ $bgClasses }} py-16 sm:py-20 relative overflow-hidden">
  <!-- Decorative Elements -->
  <div
    class="absolute top-0 right-0 w-64 sm:w-96 h-64 sm:h-96 bg-accent/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 hidden md:block">
  </div>
  <div
    class="absolute bottom-0 left-0 w-48 sm:w-64 h-48 sm:h-64 bg-accent/5 rounded-full blur-2xl translate-y-1/2 -translate-x-1/2 hidden md:block">
  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="text-center max-w-3xl mx-auto">
      @if ($heading)
        <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-4 sm:mb-6">
          {{ $heading }}
        </h2>
      @endif

      @if ($description)
        <p
          class="text-base sm:text-lg md:text-xl {{ in_array($variant, ['dark', 'semi-dark']) ? 'text-gray-300' : ($variant === 'accent' ? 'text-black/80' : 'text-gray-600') }} mb-8 sm:mb-10 leading-relaxed">
          {{ $description }}
        </p>
      @endif

      {{ $slot }}

      @if ($buttonText && $buttonLink)
        <a wire:navigate href="{{ $buttonLink }}"
          class="inline-flex items-center px-6 sm:px-8 py-3 sm:py-4 {{ $buttonClasses }} font-semibold rounded-full transition-all duration-300 shadow-lg hover:scale-105 text-sm sm:text-base">
          {{ $buttonText }}
          <x-heroicon-s-arrow-right class="w-5 h-5 ml-2" />
        </a>
      @endif
    </div>
  </div>
</section>
