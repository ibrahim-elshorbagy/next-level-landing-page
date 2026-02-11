@props([
    'icon' => null,
    'title' => '',
    'description' => '',
    'link' => null,
    'linkText' => 'Learn More'
])

<div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-accent/30 hover:-translate-y-2">
    <!-- Icon -->
    @if($icon)
        <div class="w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 bg-accent/10 rounded-xl flex items-center justify-center mb-4 sm:mb-6 group-hover:bg-accent group-hover:scale-110 transition-all duration-300">
            <span class="text-2xl sm:text-3xl">{{ $icon }}</span>
        </div>
    @else
        <div class="w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 bg-accent/10 rounded-xl flex items-center justify-center mb-4 sm:mb-6 group-hover:bg-accent group-hover:scale-110 transition-all duration-300">
            <x-heroicon-o-bolt class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-accent group-hover:text-black transition-colors" />
        </div>
    @endif

    <!-- Title -->
    <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-3 sm:mb-4 group-hover:text-accent transition-colors">
        {{ $title }}
    </h3>

    <!-- Description -->
    <p class="text-gray-600 leading-relaxed mb-4 sm:mb-6 text-sm sm:text-base">
        {{ $description }}
    </p>

    {{ $slot }}

    <!-- Link -->
    @if($link)
        <a wire:navigate href="{{ $link }}" class="inline-flex items-center text-black font-medium hover:text-accent transition-colors group/link text-sm sm:text-base">
            {{ $linkText }}
            <x-heroicon-s-arrow-right class="w-4 h-4 ml-2 group-hover/link:translate-x-2 transition-transform" />
        </a>
    @endif
</div>
