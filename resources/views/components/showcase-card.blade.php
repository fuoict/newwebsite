@php
    $itemName = trim($item['name'] ?? '');
    $words = preg_split('/\s+/', $itemName);
    $initials = '';
    foreach (array_slice($words, 0, 2) as $word) {
        $initials .= strtoupper(substr($word, 0, 1));
    }
    $hasImage = !empty($item['logoOrPhoto']);
    $imageUrl = $hasImage ? asset($item['logoOrPhoto']) : null;
    $cardDescription = $item['shortDescription'] ?? $item['category'] ?? '';
@endphp

<div class="col-lg-3 col-md-4 col-sm-6">
    <div class="showcase-card" role="button" tabindex="0"
         data-item-id="{{ $item['id'] }}"
         data-name="{{ strtolower($itemName) }}"
         data-category="{{ strtolower($item['category'] ?? '') }}"
         onclick="openShowcaseModal('{{ $item['id'] }}')"
         onkeypress="if(event.key === 'Enter'){ openShowcaseModal('{{ $item['id'] }}'); }">
        <div class="showcase-card-image">
            @if($hasImage)
                <img src="{{ $imageUrl }}" alt="{{ $itemName }} logo or photo" loading="lazy">
            @else
                <div class="showcase-card-fallback">{{ $initials }}</div>
            @endif
        </div>
        <div class="showcase-card-body">
            <h3>{{ $itemName }}</h3>
            <p class="text-muted">{{ $cardDescription }}</p>
        </div>
        <div class="showcase-card-meta">
            <span>{{ $item['year'] ?? '' }}</span>
            <span>{{ $item['category'] ?? '' }}</span>
        </div>
    </div>
</div>
