@push('meta')
  <meta name="description"
    content="Comprehensive consulting services including strategic planning, business development, branding, sponsorship advisory, and procurement consulting for global markets.">
  <meta name="keywords"
    content="consulting services, strategic planning, business development, branding, marketing, sponsorship, procurement, advisory">
  <meta name="robots" content="index, follow">

  {{-- Open Graph Tags --}}
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="NEXT LEVEL">
  <meta property="og:title" content="Our Services - NEXT LEVEL">
  <meta property="og:description"
    content="Comprehensive consulting services including strategic planning, business development, branding, sponsorship advisory, and procurement consulting.">
  <meta property="og:image" content="{{ url('images/og-services.jpg') }}">
  <meta property="og:url" content="{{ url()->current() }}">

  {{-- Twitter Card Tags --}}
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@nextlevelconsult">
  <meta name="twitter:title" content="Our Services - NEXT LEVEL">
  <meta name="twitter:description"
    content="Strategic planning, business development, branding, sponsorship advisory, and procurement consulting.">
  <meta name="twitter:image" content="{{ url('images/og-services.jpg') }}">

  {{-- Mobile Optimization --}}
  <meta name="theme-color" content="#FFD700">

  {{-- Canonical URL --}}
  <link rel="canonical" href="{{ url()->current() }}">
@endpush

<div>
  {{-- Hero Section --}}
  @include('livewire.services.partials.hero')

  {{-- Service Categories --}}
  @include('livewire.services.partials.categories')

  {{-- Core Capabilities --}}
  @include('livewire.services.partials.capabilities')

  {{-- CTA Section --}}
  <x-cta-section heading="Ready to Transform Your Business?"
    description="Let's discuss how our comprehensive services can help you achieve your strategic goals."
    buttonText="Start a Conversation" :buttonLink="route('contact')" variant="semi-dark" />
</div>

{{-- Structured Data: Service --}}
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "ItemList",
  "itemListElement": [
    {
      "@@type": "Service",
      "name": "Strategy & Growth",
      "provider": {
        "@@type": "Organization",
        "name": "NEXT LEVEL"
      },
      "description": "Strategic planning, business model design, market entry & expansion, cross-border growth strategy, and competitive benchmarking.",
      "serviceType": "Strategic Consulting"
    },
    {
      "@@type": "Service",
      "name": "Branding & Marketing",
      "provider": {
        "@@type": "Organization",
        "name": "NEXT LEVEL"
      },
      "description": "Brand identity development, repositioning, messaging strategy, marketing campaign architecture, and go-to-market strategy.",
      "serviceType": "Marketing Consulting"
    },
    {
      "@@type": "Service",
      "name": "Sponsorship & Institutional Support",
      "provider": {
        "@@type": "Organization",
        "name": "NEXT LEVEL"
      },
      "description": "Sponsorship strategy, public-private collaboration models, advisory for sports federations, and government engagement.",
      "serviceType": "Advisory Consulting"
    },
    {
      "@@type": "Service",
      "name": "Contract & Procurement Advisory",
      "provider": {
        "@@type": "Organization",
        "name": "NEXT LEVEL"
      },
      "description": "Vendor identification, contract structuring & negotiation, and strategic sourcing frameworks.",
      "serviceType": "Procurement Consulting"
    }
  ]
}
</script>
