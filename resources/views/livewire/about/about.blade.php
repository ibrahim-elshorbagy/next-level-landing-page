@push('meta')
    <meta name="description" content="Learn about NEXT LEVEL - Founded in 2020, we provide strategic advisory services across borders, industries, and cultures with focus on sustainability and innovation.">
    <meta name="keywords" content="about, consulting firm, strategic advisory, Italy, Saudi Arabia, UAE, business consulting">
    <meta name="robots" content="index, follow">

    {{-- Open Graph Tags --}}
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="NEXT LEVEL">
    <meta property="og:title" content="About Us - NEXT LEVEL">
    <meta property="og:description" content="Founded in 2020, we provide strategic advisory services across borders, industries, and cultures with focus on sustainability and innovation.">
    <meta property="og:image" content="{{ url('images/og-about.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">

    {{-- Twitter Card Tags --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@nextlevelconsult">
    <meta name="twitter:title" content="About Us - NEXT LEVEL">
    <meta name="twitter:description" content="Founded in 2020, we provide strategic advisory services across borders, industries, and cultures.">
    <meta name="twitter:image" content="{{ url('images/og-about.jpg') }}">

    {{-- Mobile Optimization --}}
    <meta name="theme-color" content="#FFD700">

    {{-- Canonical URL --}}
    <link rel="canonical" href="{{ url()->current() }}">
@endpush

<div>
    {{-- Hero Section --}}
    @include('livewire.about.partials.hero')

    {{-- Company Overview Section --}}
    @include('livewire.about.partials.overview')

    {{-- What We Do Section --}}
    @include('livewire.about.partials.what-we-do')

    {{-- Our Approach Section --}}
    @include('livewire.about.partials.approach')

    {{-- CTA Section --}}
    <x-cta-section
        heading="Ready to Partner With Us?"
        description="Discover how NEXT LEVEL can help you navigate complex growth, expansion, and transformation challenges."
        buttonText="Get in Touch"
        :buttonLink="route('contact')"
        variant="semi-dark"
    />
</div>

{{-- Structured Data: AboutPage --}}
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "AboutPage",
  "mainEntity": {
    "@@type": "Organization",
    "name": "NEXT LEVEL",
    "url": "{{ url('/') }}",
    "logo": "{{ url('images/logo.png') }}",
    "foundingDate": "2020",
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
    "numberOfEmployees": {
      "@@type": "QuantitativeValue",
      "value": "5+"
    },
    "knowsAbout": ["Strategic Consulting", "Business Development", "Market Expansion", "Branding", "Communication Strategy"],
    "slogan": "Listen deeply. Build strategically. Execute effectively."
  }
}
</script>
