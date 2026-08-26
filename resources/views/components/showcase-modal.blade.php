@php
    $modalId = 'showcaseModal';
@endphp

<div id="{{ $modalId }}" class="showcase-modal" aria-hidden="true" role="dialog" aria-modal="true">
    <div class="showcase-modal-backdrop" onclick="closeShowcaseModal()"></div>
    <div class="showcase-modal-content" role="document">
        <button class="showcase-modal-close" aria-label="Close modal" onclick="closeShowcaseModal()">
            &times;
        </button>
        <div class="showcase-modal-header">
            <div class="showcase-modal-image" id="showcaseModalImage"></div>
            <div>
                <h2 id="showcaseModalTitle"></h2>
                <p class="text-muted" id="showcaseModalCategory"></p>
                <p class="showcase-modal-year" id="showcaseModalYear"></p>
            </div>
        </div>
        <div class="showcase-modal-body">
            <p id="showcaseModalDescription"></p>
            <p class="text-muted" id="showcaseModalLink"></p>
        </div>
        <div class="showcase-modal-controls">
            <button class="btn btn-secondary" onclick="navigateShowcaseModal('prev')">Previous</button>
            <button class="btn btn-secondary" onclick="navigateShowcaseModal('next')">Next</button>
        </div>
    </div>
</div>
