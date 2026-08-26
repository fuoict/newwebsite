<script>
    window.showcaseData = @json($items);
    window.currentShowcaseId = null;
    const showcaseBaseAssetUrl = {!! json_encode(asset('')) !!};

    function getShowcaseItem(id) {
        return window.showcaseData.find(item => item.id === id);
    }

    function openShowcaseModal(id) {
        const item = getShowcaseItem(id);
        if (!item) {
            return;
        }

        window.currentShowcaseId = id;
        const modal = document.getElementById('showcaseModal');
        const title = document.getElementById('showcaseModalTitle');
        const category = document.getElementById('showcaseModalCategory');
        const year = document.getElementById('showcaseModalYear');
        const description = document.getElementById('showcaseModalDescription');
        const imageContainer = document.getElementById('showcaseModalImage');
        const link = document.getElementById('showcaseModalLink');

        title.textContent = item.name;
        category.textContent = item.category || '';
        year.textContent = item.year ? `Year: ${item.year}` : '';
        description.textContent = item.fullDescription || item.category || '';

        if (item.logoOrPhoto) {
            const imageUrl = item.logoOrPhoto.startsWith('http')
                ? item.logoOrPhoto
                : showcaseBaseAssetUrl + item.logoOrPhoto.replace(/^\/+/, '');
            imageContainer.innerHTML = `<img src="${imageUrl}" alt="${item.name} logo or photo">`;
        } else {
            const initials = item.name.split(' ').slice(0, 2).map(word => word[0].toUpperCase()).join('');
            imageContainer.innerHTML = `<div class="showcase-modal-fallback">${initials}</div>`;
        }

        if (item.externalLink) {
            link.innerHTML = `<a href="${item.externalLink}" target="_blank" rel="noopener">Visit website</a>`;
        } else {
            link.innerHTML = '';
        }

        modal.classList.add('showcase-modal-open');
        modal.setAttribute('aria-hidden', 'false');
        document.body.classList.add('showcase-modal-open');
        document.addEventListener('keydown', handleShowcaseKeydown);
    }

    function closeShowcaseModal() {
        const modal = document.getElementById('showcaseModal');
        if (!modal) {
            return;
        }

        modal.classList.remove('showcase-modal-open');
        modal.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('showcase-modal-open');
        document.removeEventListener('keydown', handleShowcaseKeydown);
        window.currentShowcaseId = null;
    }

    function handleShowcaseKeydown(event) {
        if (event.key === 'Escape') {
            closeShowcaseModal();
        } else if (event.key === 'ArrowLeft') {
            navigateShowcaseModal('prev');
        } else if (event.key === 'ArrowRight') {
            navigateShowcaseModal('next');
        }
    }

    function navigateShowcaseModal(direction) {
        if (!window.currentShowcaseId) {
            return;
        }

        const currentIndex = window.showcaseData.findIndex(item => item.id === window.currentShowcaseId);
        if (currentIndex === -1) {
            return;
        }

        let targetIndex;
        if (direction === 'prev') {
            targetIndex = currentIndex === 0 ? window.showcaseData.length - 1 : currentIndex - 1;
        } else {
            targetIndex = currentIndex === window.showcaseData.length - 1 ? 0 : currentIndex + 1;
        }

        const target = window.showcaseData[targetIndex];
        if (target) {
            openShowcaseModal(target.id);
        }
    }

    function filterShowcaseItems() {
        const textInput = document.getElementById('showcaseFilterText');
        const categoryInput = document.getElementById('showcaseFilterCategory');
        const cards = document.querySelectorAll('.showcase-card');

        const searchText = textInput ? textInput.value.trim().toLowerCase() : '';
        const categoryValue = categoryInput ? categoryInput.value.trim().toLowerCase() : '';

        cards.forEach(card => {
            const name = card.dataset.name || '';
            const category = card.dataset.category || '';
            const matchesText = !searchText || name.includes(searchText);
            const matchesCategory = !categoryValue || category.includes(categoryValue);
            card.style.display = matchesText && matchesCategory ? '' : 'none';
        });
    }
</script>
