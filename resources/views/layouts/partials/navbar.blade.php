<nav x-data="{ open: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)"
  :class="{ 'shadow-lg bg-white': scrolled, 'bg-white/95': !scrolled }"
  class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center h-20">
      <!-- Logo -->
      <a wire:navigate href="{{ route('home') }}" class="flex items-center">
        <img src="{{ asset('assets/logo.webp') }}" alt="About NEXT LEVEL CONSULTING"
          class="w-32 object-cover">
      </a>

      <!-- Desktop Navigation -->
      <div class="hidden md:flex items-center space-x-8">
        <a wire:navigate href="{{ route('home') }}"
          class="text-gray-800 hover:text-accent font-medium transition-colors duration-200 {{ request()->routeIs('home') ? 'text-accent border-b-2 border-accent pb-1' : '' }}">
          Home
        </a>
        <a wire:navigate href="{{ route('about') }}"
          class="text-gray-800 hover:text-accent font-medium transition-colors duration-200 {{ request()->routeIs('about') ? 'text-accent border-b-2 border-accent pb-1' : '' }}">
          About
        </a>
        <a wire:navigate href="{{ route('services') }}"
          class="text-gray-800 hover:text-accent font-medium transition-colors duration-200 {{ request()->routeIs('services') ? 'text-accent border-b-2 border-accent pb-1' : '' }}">
          Services
        </a>
        <a wire:navigate href="{{ route('markets') }}"
          class="text-gray-800 hover:text-accent font-medium transition-colors duration-200 {{ request()->routeIs('markets') ? 'text-accent border-b-2 border-accent pb-1' : '' }}">
          Markets
        </a>
        <a wire:navigate href="{{ route('contact') }}"
          class="bg-black text-white px-6 py-2.5 rounded-full font-medium hover:bg-accent hover:text-black transition-all duration-300 {{ request()->routeIs('contact') ? 'bg-accent text-black' : '' }}">
          Contact
        </a>
      </div>

      <!-- Mobile Menu Button -->
      <button @click="open = !open" class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors" aria-label="Toggle mobile menu">
        <x-heroicon-o-bars-3 x-show="!open" class="w-6 h-6" />
        <x-heroicon-o-x-mark x-show="open" x-cloak class="w-6 h-6" />
      </button>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div x-show="open" x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 -translate-y-4" x-cloak
    class="md:hidden bg-white border-t border-gray-100 shadow-lg">
    <div class="px-4 py-4 space-y-3">
      <a wire:navigate href="{{ route('home') }}"
        class="block px-4 py-3 rounded-lg text-gray-800 hover:bg-gray-50 hover:text-accent font-medium transition-colors {{ request()->routeIs('home') ? 'bg-accent/10 text-accent' : '' }}">
        Home
      </a>
      <a wire:navigate href="{{ route('about') }}"
        class="block px-4 py-3 rounded-lg text-gray-800 hover:bg-gray-50 hover:text-accent font-medium transition-colors {{ request()->routeIs('about') ? 'bg-accent/10 text-accent' : '' }}">
        About
      </a>
      <a wire:navigate href="{{ route('services') }}"
        class="block px-4 py-3 rounded-lg text-gray-800 hover:bg-gray-50 hover:text-accent font-medium transition-colors {{ request()->routeIs('services') ? 'bg-accent/10 text-accent' : '' }}">
        Services
      </a>
      <a wire:navigate href="{{ route('markets') }}"
        class="block px-4 py-3 rounded-lg text-gray-800 hover:bg-gray-50 hover:text-accent font-medium transition-colors {{ request()->routeIs('markets') ? 'bg-accent/10 text-accent' : '' }}">
        Markets
      </a>
      <a wire:navigate href="{{ route('contact') }}"
        class="block px-4 py-3 rounded-lg bg-black text-white text-center font-medium hover:bg-accent hover:text-black transition-colors {{ request()->routeIs('contact') ? 'bg-accent text-black' : '' }}">
        Contact
      </a>
    </div>
  </div>
</nav>

<!-- Spacer for fixed navbar -->
<div class="h-20"></div>
