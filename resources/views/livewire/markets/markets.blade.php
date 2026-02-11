@push('meta')
  <meta name="description"
    content="Operating in Italy, Saudi Arabia, and UAE - NEXT LEVEL CONSULTING delivers cross-border strategies with regional insight and global execution standards.">
  <meta name="keywords"
    content="Italy market, Saudi Arabia market, UAE market, Dubai, Abu Dhabi, Vision 2030, cross-border strategy">
  <meta name="robots" content="index, follow">

  {{-- Open Graph Tags --}}
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="NEXT LEVEL CONSULTING">
  <meta property="og:title" content="Markets - NEXT LEVEL CONSULTING">
  <meta property="og:description"
    content="Operating in Italy, Saudi Arabia, and UAE - delivering cross-border strategies with regional insight and global execution standards.">
  <meta property="og:image" content="{{ url('images/og-markets.jpg') }}">
  <meta property="og:url" content="{{ url()->current() }}">

  {{-- Twitter Card Tags --}}
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@nextlevelconsult">
  <meta name="twitter:title" content="Markets - NEXT LEVEL CONSULTING">
  <meta name="twitter:description"
    content="Operating in Italy, Saudi Arabia, and UAE with regional insight and global execution standards.">
  <meta name="twitter:image" content="{{ url('images/og-markets.jpg') }}">

  {{-- Mobile Optimization --}}
  <meta name="theme-color" content="#FFD700">

  {{-- Canonical URL --}}
  <link rel="canonical" href="{{ url()->current() }}">
@endpush

<div>
  {{-- Hero Section --}}
  @include('livewire.markets.partials.hero')

  {{-- Markets Detail --}}
  @include('livewire.markets.partials.markets-detail')

  {{-- Multi-Market Advantage --}}
  @include('livewire.markets.partials.advantage')

  {{-- CTA Section --}}
  <x-cta-section heading="Expand Into New Markets"
    description="Ready to take your business global? Let's discuss how we can support your market expansion strategy."
    buttonText="Get in Touch" :buttonLink="route('contact')" variant="semi-dark" />
</div>

{{-- Structured Data: Markets --}}
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "Organization",
  "name": "NEXT LEVEL CONSULTING",
  "areaServed": [
    {
      "@@type": "Country",
      "name": "Italy",
      "alternateName": "IT"
    },
    {
      "@@type": "Country",
      "name": "Saudi Arabia",
      "alternateName": "SA"
    },
    {
      "@@type": "Country",
      "name": "United Arab Emirates",
      "alternateName": "AE"
    }
  ],
  "serviceArea": [
    {
      "@@type": "Place",
      "name": "Italy",
      "description": "Driving innovation across fashion, luxury, entertainment, tourism, and sports industries"
    },
    {
      "@@type": "Place",
      "name": "Saudi Arabia",
      "description": "Supporting Vision 2030 initiatives through public-private partnerships and advisory services"
    },
    {
      "@@type": "Place",
      "name": "United Arab Emirates",
      "description": "Delivering cross-border brand activations and strategic business development in Dubai and Abu Dhabi"
    }
  ]
}
</script>
