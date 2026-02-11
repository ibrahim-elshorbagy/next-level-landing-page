<footer class="bg-white text-black">
  <!-- Main Footer -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
      <!-- Brand Column -->
      <div class="lg:col-span-1">
        <a wire:navigate href="{{ route('home') }}" class="flex items-center space-x-2 mb-6">
          <img src="{{ asset('assets/logo.webp') }}" alt="About NEXT LEVEL" class="w-32 object-cover" width="128" height="40">
        </a>
        <p class="text-gray-600 text-sm leading-relaxed mb-6">
          Strategic consulting firm delivering strategy, development, and execution across Italy, Saudi Arabia, and UAE.
        </p>
        <div class="text-gray-600 text-sm leading-relaxed mb-6">
          <p><strong>NLC Consulting LLC</strong></p>
          <p>Company N. 2326687.01</p>
          <p>Shams Business Center, Media City Free Zone, Sharjah, UAE</p>
        </div>
        <div class="flex space-x-4">
          <a href="mailto:info@thenextlevel.global"
            class="w-10 h-10 bg-black/10 rounded-full flex items-center justify-center hover:bg-accent hover:text-white transition-all duration-300" aria-label="Send us an email">
            <x-heroicon-o-envelope class="w-5 h-5" />
          </a>
        </div>
      </div>

      <!-- Quick Links -->
      <div>
        <h3 class="text-lg font-semibold mb-6 text-black">Quick Links</h3>
        <ul class="space-y-3">
          <li>
            <a wire:navigate href="{{ route('home') }}"
              class="text-gray-600 hover:text-accent transition-colors duration-200 flex items-center group">
              <x-heroicon-s-chevron-right class="w-4 h-4 mr-2 opacity-0 group-hover:opacity-100 transition-opacity" />
              Home
            </a>
          </li>
          <li>
            <a wire:navigate href="{{ route('about') }}"
              class="text-gray-600 hover:text-accent transition-colors duration-200 flex items-center group">
              <x-heroicon-s-chevron-right class="w-4 h-4 mr-2 opacity-0 group-hover:opacity-100 transition-opacity" />
              About Us
            </a>
          </li>
          <li>
            <a wire:navigate href="{{ route('services') }}"
              class="text-gray-600 hover:text-accent transition-colors duration-200 flex items-center group">
              <x-heroicon-s-chevron-right class="w-4 h-4 mr-2 opacity-0 group-hover:opacity-100 transition-opacity" />
              Our Services
            </a>
          </li>
          <li>
            <a wire:navigate href="{{ route('markets') }}"
              class="text-gray-600 hover:text-accent transition-colors duration-200 flex items-center group">
              <x-heroicon-s-chevron-right class="w-4 h-4 mr-2 opacity-0 group-hover:opacity-100 transition-opacity" />
              Markets
            </a>
          </li>
          <li>
            <a wire:navigate href="{{ route('contact') }}"
              class="text-gray-600 hover:text-accent transition-colors duration-200 flex items-center group">
              <x-heroicon-s-chevron-right class="w-4 h-4 mr-2 opacity-0 group-hover:opacity-100 transition-opacity" />
              Contact
            </a>
          </li>
        </ul>
      </div>

      <!-- Services -->
      <div>
        <h3 class="text-lg font-semibold mb-6 text-black">Services</h3>
        <ul class="space-y-3">
          <li>
            <a wire:navigate href="{{ route('services') }}"
              class="text-gray-600 hover:text-accent transition-colors duration-200">
              Strategy & Growth
            </a>
          </li>
          <li>
            <a wire:navigate href="{{ route('services') }}"
              class="text-gray-600 hover:text-accent transition-colors duration-200">
              Branding & Marketing
            </a>
          </li>
          <li>
            <a wire:navigate href="{{ route('services') }}"
              class="text-gray-600 hover:text-accent transition-colors duration-200">
              Sponsorship Advisory
            </a>
          </li>
          <li>
            <a wire:navigate href="{{ route('services') }}"
              class="text-gray-600 hover:text-accent transition-colors duration-200">
              Contract & Procurement
            </a>
          </li>
        </ul>
      </div>

      <!-- Markets -->
      <div>
        <h3 class="text-lg font-semibold mb-6 text-black">Markets</h3>
        <ul class="space-y-3">
          <li class="flex items-center text-gray-600">
            <img src="https://flagcdn.com/w20/it.png" alt="Italy flag" class="w-5 h-4 mr-2" />
            Italy
          </li>
          <li class="flex items-center text-gray-600">
            <img src="https://flagcdn.com/w20/sa.png" alt="Saudi Arabia flag" class="w-5 h-4 mr-2" />
            Saudi Arabia
          </li>
          <li class="flex items-center text-gray-600">
            <img src="https://flagcdn.com/w20/ae.png" alt="UAE flag" class="w-5 h-4 mr-2" />
            United Arab Emirates
          </li>
        </ul>
        <div class="mt-6">
          <a wire:navigate href="{{ route('contact') }}"
            class="inline-flex items-center text-black hover:text-gray-600 transition-colors duration-200">
            Get in Touch
            <x-heroicon-s-arrow-right class="w-4 h-4 ml-2" />
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bottom Bar -->
  <div class="border-t border-black/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
      <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
        <p class="text-gray-600 text-sm">
          © 2020 NLC Consulting LLC. All rights reserved.
        </p>
        <div class="flex items-center space-x-6 text-sm text-gray-600">
          <span>Italy</span>
          <span class="text-gray-400">|</span>
          <span>Saudi Arabia</span>
          <span class="text-gray-400">|</span>
          <span>UAE</span>
        </div>
      </div>
    </div>
  </div>
</footer>
