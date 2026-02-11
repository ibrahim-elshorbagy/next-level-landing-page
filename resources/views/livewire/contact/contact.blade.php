@push('meta')
  <meta name="description"
    content="Get in touch with NEXT LEVEL. Partner with us for international growth, brand repositioning, and institutional transformation projects.">
  <meta name="keywords" content="contact, consulting, partnership, business inquiry, strategy consultation">
  <meta name="robots" content="index, follow">

  {{-- Open Graph Tags --}}
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="NEXT LEVEL">
  <meta property="og:title" content="Contact Us - NEXT LEVEL">
  <meta property="og:description"
    content="Get in touch with NEXT LEVEL. Partner with us for international growth and brand repositioning.">
  <meta property="og:image" content="{{ url('images/og-contact.jpg') }}">
  <meta property="og:url" content="{{ url()->current() }}">

  {{-- Twitter Card Tags --}}
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@nextlevelconsult">
  <meta name="twitter:title" content="Contact Us - NEXT LEVEL">
  <meta name="twitter:description"
    content="Partner with us for international growth, brand repositioning, and transformation projects.">
  <meta name="twitter:image" content="{{ url('images/og-contact.jpg') }}">

  {{-- Mobile Optimization --}}
  <meta name="theme-color" content="#FFD700">

  {{-- Canonical URL --}}
  <link rel="canonical" href="{{ url()->current() }}">
@endpush

<div>
  {{-- Hero Section --}}
  @include('livewire.contact.partials.hero')

  {{-- Who We Work With --}}
  @include('livewire.contact.partials.clients')

  {{-- Contact Form & Info --}}
  <section class="py-16 sm:py-20 md:py-24 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 sm:gap-12 lg:gap-16">
        {{-- Contact Form --}}
        <div>
          <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-3 sm:mb-4">
            Send Us a <span class="text-accent">Message</span>
          </h2>
          <p class="text-gray-600 mb-6 sm:mb-8 text-sm sm:text-base">
            Fill out the form below and we'll get back to you as soon as possible.
          </p>

          <form wire:submit="submit" class="space-y-5 sm:space-y-6">
            {{-- Name --}}
            <div>
              <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                Full Name <span class="text-red-500">*</span>
              </label>
              <input type="text" id="name" wire:model="name"
                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-accent focus:border-accent transition-colors text-sm sm:text-base @error('name') border-red-500 @enderror"
                placeholder="John Doe">
              @error('name')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
              @enderror
            </div>

            {{-- Email --}}
            <div>
              <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                Email Address <span class="text-red-500">*</span>
              </label>
              <input type="email" id="email" wire:model="email"
                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-accent focus:border-accent transition-colors text-sm sm:text-base @error('email') border-red-500 @enderror"
                placeholder="john@example.com">
              @error('email')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
              @enderror
            </div>

            {{-- Company --}}
            <div>
              <label for="company" class="block text-sm font-medium text-gray-700 mb-2">
                Company <span class="text-gray-400">(Optional)</span>
              </label>
              <input type="text" id="company" wire:model="company"
                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-accent focus:border-accent transition-colors text-sm sm:text-base"
                placeholder="Your Company Name">
            </div>

            {{-- Message --}}
            <div>
              <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                Message <span class="text-red-500">*</span>
              </label>
              <textarea id="message" wire:model="message" rows="5"
                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-accent focus:border-accent transition-colors resize-none text-sm sm:text-base @error('message') border-red-500 @enderror"
                placeholder="How can we help you?"></textarea>
              @error('message')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
              @enderror
            </div>

            {{-- Submit Button --}}
            <button type="submit" wire:loading.attr="disabled"
              class="w-full px-6 sm:px-8 py-3 sm:py-4 cursor-pointer bg-black text-white font-semibold rounded-xl hover:bg-accent hover:text-black transition-all duration-300 flex items-center justify-center disabled:opacity-50 disabled:cursor-not-allowed text-sm sm:text-base">
              <span wire:loading.remove>
                Send Message
                <x-heroicon-s-paper-airplane class="w-5 h-5 ml-2 inline" />
              </span>
              <span wire:loading class="flex items-center">
                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"
                  fill="none" viewBox="0 0 24 24">
                  <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                    stroke-width="4"></circle>
                  <path class="opacity-75" fill="currentColor"
                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                  </path>
                </svg>
              </span>
            </button>
          </form>

          @if ($successMessage)
            <div class="mt-6 sm:mt-8 p-4 sm:p-6 bg-green-50 border border-green-200 rounded-xl">
              <div class="flex items-center">
                <x-heroicon-s-check-circle class="w-5 h-5 sm:w-6 sm:h-6 text-green-500 mr-3 flex-shrink-0" />
                <span class="text-green-700 font-medium text-sm sm:text-base">{{ $successMessage }}</span>
              </div>
            </div>
          @endif
        </div>

        {{-- Contact Information --}}
        @include('livewire.contact.partials.info')
      </div>
    </div>
  </section>

  {{-- Download CTA --}}
  @include('livewire.contact.partials.download')
</div>

{{-- Structured Data: ContactPage --}}
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "ContactPage",
  "mainEntity": {
    "@@type": "Organization",
    "name": "NEXT LEVEL",
    "url": "{{ url('/') }}",
    "contactPoint": {
      "@@type": "ContactPoint",

      "contactType": "Customer Service",
      "email": "info@thenextlevel.global",
      "areaServed": ["IT", "SA", "AE"],
      "availableLanguage": ["English", "Italian", "Arabic"]
    },

  }
}
</script>
