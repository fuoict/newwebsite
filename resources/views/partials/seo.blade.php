{{-- SEO meta tags — include in <head> via @include('partials.seo') --}}
@php
    // Page-level overrides via @section('meta') in child views
    $seoTitle       = trim($__env->yieldContent('meta_title'))       ?: 'Fountain University, Osogbo — Knowledge, Character and Service';
    $seoDescription = trim($__env->yieldContent('meta_description'))  ?: 'Fountain University, Osogbo — a values-driven private university founded in 2007 by NASFAT. Undergraduate, postgraduate and sandwich programmes.';
    $seoImage       = trim($__env->yieldContent('meta_image'))        ?: asset('img/logo/fuo-logo.png');
    $seoUrl         = trim($__env->yieldContent('meta_url'))          ?: url()->current();
    $seoType        = trim($__env->yieldContent('meta_type'))         ?: 'website';
    $seoPublished   = trim($__env->yieldContent('meta_published'))    ?: '';
    $seoModified    = trim($__env->yieldContent('meta_modified'))     ?: '';
@endphp

{{-- Primary meta --}}
<title>{{ $seoTitle }}</title>
<meta name="description" content="{{ $seoDescription }}">
<link rel="canonical" href="{{ $seoUrl }}">

{{-- Open Graph --}}
<meta property="og:type" content="{{ $seoType }}">
<meta property="og:title" content="{{ $seoTitle }}">
<meta property="og:description" content="{{ $seoDescription }}">
<meta property="og:image" content="{{ $seoImage }}">
<meta property="og:url" content="{{ $seoUrl }}">
<meta property="og:site_name" content="Fountain University, Osogbo">
<meta property="og:locale" content="en_US">

{{-- Twitter Card --}}
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $seoTitle }}">
<meta name="twitter:description" content="{{ $seoDescription }}">
<meta name="twitter:image" content="{{ $seoImage }}">

{{-- Schema.org JSON-LD — Organization (sitewide) --}}
<script type="application/ld+json">
{!! json_encode([
    '@context'    => 'https://schema.org',
    '@type'       => 'University',
    'name'        => 'Fountain University, Osogbo',
    'alternateName' => 'FUO',
    'url'         => 'https://fuo.edu.ng',
    'logo'        => asset('img/logo/fuo-logo.png'),
    'description' => 'Fountain University is a private university in Osogbo, Osun State, Nigeria, founded in 2007 by NASFAT.',
    'foundingDate' => '2007-05-17',
    'address'     => [
        '@type'           => 'PostalAddress',
        'streetAddress'   => 'Oke-Osun, P.M.B. 4491',
        'addressLocality' => 'Osogbo',
        'addressRegion'   => 'Osun State',
        'postalCode'      => '4491',
        'addressCountry'  => 'NG',
    ],
    'contactPoint' => [
        '@type'              => 'ContactPoint',
        'telephone'          => '+234-803-706-3960',
        'contactType'        => 'customer service',
        'email'              => 'enquiries@fuo.edu.ng',
        'availableLanguage'  => 'English',
    ],
    'sameAs' => [
        'https://www.facebook.com/fuoweb',
        'https://www.instagram.com/fountain.university/',
        'https://x.com/fuoweb',
        'https://ng.linkedin.com/school/fountain-university-osogbo/',
        'https://www.youtube.com/@FountainUniversityOsogbo',
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>

{{-- Schema.org JSON-LD — WebPage (per-page) --}}
@if($seoType === 'article' || !empty($seoPublished))
<script type="application/ld+json">
{!! json_encode(array_filter([
    '@context'      => 'https://schema.org',
    '@type'         => 'WebPage',
    'name'          => $seoTitle,
    'description'   => $seoDescription,
    'url'           => $seoUrl,
    'image'         => $seoImage,
    'datePublished' => $seoPublished ?: null,
    'dateModified'  => $seoModified ?: date('Y-m-d'),
    'publisher'     => [
        '@type' => 'Organization',
        'name'  => 'Fountain University, Osogbo',
        'logo'  => [
            '@type' => 'ImageObject',
            'url'   => asset('img/logo/fuo-logo.png'),
        ],
    ],
], fn($v) => $v !== null && $v !== ''), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endif
