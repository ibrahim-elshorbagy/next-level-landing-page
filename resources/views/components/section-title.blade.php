@props([
    'title' => '',
    'subtitle' => '',
    'centered' => true,
    'light' => false
])

<div class="{{ $centered ? 'text-center' : '' }} mb-10 sm:mb-12 md:mb-16">
    @if($title)
        <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold {{ $light ? 'text-white' : 'text-gray-900' }} mb-3 sm:mb-4">
            {!! $title !!}
        </h2>
    @endif

    @if($subtitle)
        <p class="text-base sm:text-lg md:text-xl {{ $light ? 'text-gray-300' : 'text-gray-600' }} max-w-3xl {{ $centered ? 'mx-auto' : '' }}">
            {{ $subtitle }}
        </p>
    @endif

    {{ $slot }}
</div>
