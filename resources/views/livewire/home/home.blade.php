@push('meta')
    <meta name="description" content="NEXT LEVEL - Strategic and operational advisory firm supporting organizations in navigating complex growth, expansion, and transformation challenges. Turn ideas into impact.">
    <meta name="keywords" content="consulting, strategy, business development, Italy, Saudi Arabia, UAE, strategic advisory">
    <meta name="robots" content="index, follow">

    {{-- Open Graph Tags --}}
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="NEXT LEVEL">
    <meta property="og:title" content="NEXT LEVEL - Strategy. Development. Execution.">
    <meta property="og:description" content="Strategic and operational advisory firm supporting organizations in navigating complex growth, expansion, and transformation challenges. Turn ideas into impact.">
    <meta property="og:image" content="{{ url('images/og-image.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">

    {{-- Twitter Card Tags --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@nextlevelconsult">
    <meta name="twitter:title" content="NEXT LEVEL - Strategy. Development. Execution.">
    <meta name="twitter:description" content="Strategic and operational advisory firm supporting organizations in navigating complex growth, expansion, and transformation challenges.">
    <meta name="twitter:image" content="{{ url('images/og-image.jpg') }}">

    {{-- Mobile Optimization --}}
    <meta name="theme-color" content="#FFD700">

    {{-- Canonical URL --}}
    <link rel="canonical" href="{{ url()->current() }}">
@endpush

<div>
    {{-- Hero Section --}}
    @include('livewire.home.partials.hero')

    {{-- About Section --}}
    @include('livewire.home.partials.about')

    {{-- Services Overview Section --}}
    @include('livewire.home.partials.services')

    {{-- Markets Section --}}
    @include('livewire.home.partials.markets')

    {{-- Why Choose Us Section --}}
    @include('livewire.home.partials.why-us')

    {{-- CTA Section --}}
    <x-cta-section
        heading="Let's Build Something Together"
        description="Ready to take your business to the next level? Partner with us to unlock new opportunities and drive sustainable growth."
        buttonText="Contact Us"
        :buttonLink="route('contact')"
        variant="semi-dark"
    />
</div>

{{-- Structured Data --}}
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "Organization",
  "name": "NEXT LEVEL",
  "url": "{{ url('/') }}",
  "logo": "{{ url('images/logo.png') }}",
  "description": "Strategic and operational advisory firm supporting organizations in navigating complex growth, expansion, and transformation challenges.",
  "address": [
    {
      "@@type": "PostalAddress",
      "addressCountry": "IT",
      "addressRegion": "Italy"
    },
    {
      "@@type": "PostalAddress",
      "addressCountry": "SA",
      "addressRegion": "Saudi Arabia"
    },
    {
      "@@type": "PostalAddress",
      "addressCountry": "AE",
      "addressRegion": "United Arab Emirates"
    }
  ],
  "areaServed": ["IT", "SA", "AE"],
  "foundingDate": "2020",

}
</script>

<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "Service",
  "serviceType": "Strategic & Managerial Consulting",
  "provider": {
    "@@type": "Organization",
    "name": "NEXT LEVEL"
  },
  "areaServed": ["IT", "SA", "AE"],
  "hasOfferCatalog": {
    "@@type": "OfferCatalog",
    "name": "Consulting Services",
    "itemListElement": [
      {
        "@@type": "Offer",
        "itemOffered": {
          "@@type": "Service",
          "name": "Strategic & Managerial Consulting"
        }
      },
      {
        "@@type": "Offer",
        "itemOffered": {
          "@@type": "Service",
          "name": "Business Development & Market Expansion"
        }
      },
      {
        "@@type": "Offer",
        "itemOffered": {
          "@@type": "Service",
          "name": "Branding & Communication Strategy"
        }
      }
    ]
  }
}
</script>
