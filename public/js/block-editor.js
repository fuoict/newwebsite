/**
 * FUO Block Editor — Lightweight page content editor
 * Block types: heading, text, officer, member, member-grid, gallery, table, list, image, divider, quote, link-grid
 */
(function() {
    let blocks = [];
    let container;
    let jsonInput;

    // ── Block Type Definitions ──
    const BLOCK_TYPES = {
        heading:      { label: 'Heading',     icon: 'bx bx-heading' },
        text:         { label: 'Rich Text',   icon: 'bx bx-text' },
        officer:      { label: 'Officer Profile', icon: 'bx bx-user' },
        member:       { label: 'Member Card', icon: 'bx bx-user-circle' },
        memberGrid:   { label: 'Member Grid', icon: 'bx bx-group' },
        gallery:      { label: 'Gallery',     icon: 'bx bx-images' },
        table:        { label: 'Table',       icon: 'bx bx-table' },
        list:         { label: 'List',        icon: 'bx bx-list-ul' },
        image:        { label: 'Image',       icon: 'bx bx-image' },
        divider:      { label: 'Divider',     icon: 'bx bx-minus' },
        quote:        { label: 'Quote',       icon: 'bx bx-quote-alt-left' },
        linkGrid:     { label: 'Link Grid',   icon: 'bx bx-link' },
        spotlight:    { label: 'Spotlight Slider', icon: 'bx bx-slider' },
        speechesTable:{ label: 'Speeches Table', icon: 'bx bx-table' },
    };

    // ── Init ──
    window.initBlockEditor = function(containerId, jsonFieldId) {
        container = document.getElementById(containerId);
        jsonInput = document.getElementById(jsonFieldId);
        if (!container || !jsonInput) return;

        // Load existing blocks
        try {
            const raw = jsonInput.value.trim();
            if (raw) {
                const parsed = JSON.parse(raw);
                blocks = Array.isArray(parsed) ? parsed : (parsed.blocks || []);
            }
        } catch(e) { blocks = []; }

        renderBlocks();
    };

    // ── Serialize ──
    function serialize() {
        jsonInput.value = JSON.stringify(blocks, null, 2);
    }

    // ── Render All Blocks ──
    function renderBlocks() {
        container.innerHTML = '';
        if (blocks.length === 0) {
            container.innerHTML = '<div style="text-align:center;padding:40px;color:#999;border:2px dashed #ddd;border-radius:12px"><i class="bx bx-plus-circle" style="font-size:40px;display:block;margin-bottom:10px"></i>No blocks yet. Click "Add Block" below to start building your page.</div>';
            serialize();
            return;
        }
        blocks.forEach((block, index) => {
            container.appendChild(renderBlock(block, index));
        });
        serialize();
    }

    // ── Render Single Block ──
    function renderBlock(block, index) {
        const info = BLOCK_TYPES[block.type] || { label: block.type, icon: 'bx bx-block' };
        const wrapper = document.createElement('div');
        wrapper.className = 'block-editor-item';
        wrapper.dataset.index = index;

        // Header
        const header = document.createElement('div');
        header.className = 'block-editor-header';
        header.innerHTML = `
            <span class="block-drag" title="Drag to reorder">☰</span>
            <span class="block-type-badge"><i class="${info.icon}"></i> ${info.label}</span>
            <span style="flex:1"></span>
            <button type="button" class="block-btn" onclick="blockMoveUp(${index})" title="Move up" ${index===0?'disabled':''}>▲</button>
            <button type="button" class="block-btn" onclick="blockMoveDown(${index})" title="Move down" ${index===blocks.length-1?'disabled':''}>▼</button>
            <button type="button" class="block-btn block-btn-dup" onclick="blockDuplicate(${index})" title="Duplicate">⧉</button>
            <button type="button" class="block-btn block-btn-del" onclick="blockDelete(${index})" title="Delete">×</button>
        `;
        wrapper.appendChild(header);

        // Body
        const body = document.createElement('div');
        body.className = 'block-editor-body';
        body.innerHTML = renderBlockFields(block, index);
        wrapper.appendChild(body);

        return wrapper;
    }

    // ── Render Fields by Type ──
    function renderBlockFields(block, idx) {
        const d = block.data || {};
        switch(block.type) {
            case 'heading':
                return `<div style="display:flex;gap:12px;align-items:end">
                    <div style="width:120px"><label>Level</label><select onchange="blockUpdate(${idx},'level',parseInt(this.value))">
                        ${[1,2,3,4,5,6].map(l=>`<option value="${l}" ${d.level==l?'selected':''}>H${l}</option>`).join('')}
                    </select></div>
                    <div style="flex:1"><label>Text</label><input type="text" value="${esc(d.text)}" oninput="blockUpdate(${idx},'text',this.value)"></div>
                </div>`;

            case 'text':
                return `<div><label>Content (HTML supported)</label>
                    <textarea rows="6" oninput="blockUpdate(${idx},'html',this.value)">${esc(d.html)}</textarea></div>`;

            case 'officer':
                return `<div class="block-grid-2">
                    <div><label>Full Name</label><input type="text" value="${esc(d.name)}" oninput="blockUpdate(${idx},'name',this.value)"></div>
                    <div><label>Title / Position</label><input type="text" value="${esc(d.title)}" oninput="blockUpdate(${idx},'title',this.value)"></div>
                    <div><label>Photo (URL or path)</label><input type="text" value="${esc(d.photo)}" oninput="blockUpdate(${idx},'photo',this.value)" placeholder="img/all-img/photo.jpg"></div>
                    <div><label>Qualifications</label><input type="text" value="${esc(d.qualifications)}" oninput="blockUpdate(${idx},'qualifications',this.value)" placeholder="FNIFST, FCOFP"></div>
                    <div style="grid-column:1/-1"><label>Biography (HTML)</label><textarea rows="8" oninput="blockUpdate(${idx},'bio',this.value)">${esc(d.bio)}</textarea></div>
                </div>`;

            case 'member':
                return `<div class="block-grid-2">
                    <div><label>Name</label><input type="text" value="${esc(d.name)}" oninput="blockUpdate(${idx},'name',this.value)"></div>
                    <div><label>Role</label><input type="text" value="${esc(d.role)}" oninput="blockUpdate(${idx},'role',this.value)"></div>
                    <div><label>Photo (URL)</label><input type="text" value="${esc(d.photo)}" oninput="blockUpdate(${idx},'photo',this.value)"></div>
                    <div><label>Description</label><input type="text" value="${esc(d.description)}" oninput="blockUpdate(${idx},'description',this.value)"></div>
                </div>`;

            case 'memberGrid':
                let membersHtml = (d.members||[]).map((m,mi) => `
                    <div class="block-member-row">
                        <input type="text" value="${esc(m.name)}" placeholder="Name" oninput="blockUpdateArray(${idx},'members',${mi},'name',this.value)">
                        <input type="text" value="${esc(m.role)}" placeholder="Role" oninput="blockUpdateArray(${idx},'members',${mi},'role',this.value)">
                        <input type="text" value="${esc(m.photo||'')}" placeholder="Photo URL" oninput="blockUpdateArray(${idx},'members',${mi},'photo',this.value)">
                        <button type="button" class="block-btn block-btn-del" onclick="blockRemoveArray(${idx},'members',${mi})">×</button>
                    </div>
                `).join('');
                return `<div><label>Title</label><input type="text" value="${esc(d.title)}" oninput="blockUpdate(${idx},'title',this.value)" placeholder="Members of the Board" style="margin-bottom:12px">
                <div class="block-member-list">${membersHtml}</div>
                <button type="button" class="block-btn block-btn-add" onclick="blockAddArray(${idx},'members',{name:'',role:'',photo:'',description:''})">+ Add Member</button></div>`;

            case 'gallery':
                let galHtml = (d.images||[]).map((img,gi) => `
                    <div class="block-member-row">
                        <input type="text" value="${esc(img.url)}" placeholder="Image URL" oninput="blockUpdateArray(${idx},'images',${gi},'url',this.value)">
                        <input type="text" value="${esc(img.caption||'')}" placeholder="Caption" oninput="blockUpdateArray(${idx},'images',${gi},'caption',this.value)">
                        <button type="button" class="block-btn block-btn-del" onclick="blockRemoveArray(${idx},'images',${gi})">×</button>
                    </div>
                `).join('');
                return `<div><label>Gallery Title</label><input type="text" value="${esc(d.title)}" oninput="blockUpdate(${idx},'title',this.value)" style="margin-bottom:12px">
                <div class="block-member-list">${galHtml}</div>
                <button type="button" class="block-btn block-btn-add" onclick="blockAddArray(${idx},'images',{url:'',caption:''})">+ Add Image</button></div>`;

            case 'table':
                return `<div><label>Table Title</label><input type="text" value="${esc(d.title)}" oninput="blockUpdate(${idx},'title',this.value)" style="margin-bottom:8px">
                <label>Headers (comma-separated)</label><input type="text" value="${esc((d.headers||[]).join(', '))}" oninput="blockUpdate(${idx},'headers',this.value.split(',').map(s=>s.trim()).filter(Boolean))" style="margin-bottom:8px">
                <label>Rows (one row per line, comma-separated cells)</label><textarea rows="5" oninput="blockUpdate(${idx},'rows',this.value.split('\\n').map(r=>r.split(',').map(s=>s.trim())).filter(r=>r.length&&r[0]))">${(d.rows||[]).map(r=>r.join(', ')).join('\n')}</textarea></div>`;

            case 'list':
                return `<div><label>Section Title</label><input type="text" value="${esc(d.title)}" oninput="blockUpdate(${idx},'title',this.value)" style="margin-bottom:8px">
                <label>Items (one per line)</label><textarea rows="6" oninput="blockUpdate(${idx},'items',this.value.split('\\n').filter(s=>s.trim()))">${(d.items||[]).join('\n')}</textarea></div>`;

            case 'image':
                return `<div class="block-grid-2">
                    <div style="grid-column:1/-1"><label>Image URL</label><input type="text" value="${esc(d.url)}" oninput="blockUpdate(${idx},'url',this.value)" placeholder="img/gallery/photo.jpg"></div>
                    <div><label>Caption</label><input type="text" value="${esc(d.caption)}" oninput="blockUpdate(${idx},'caption',this.value)"></div>
                    <div><label>Alt Text</label><input type="text" value="${esc(d.alt)}" oninput="blockUpdate(${idx},'alt',this.value)"></div>
                </div>`;

            case 'divider':
                return '<div style="text-align:center;color:#999;padding:8px 0">— Horizontal Divider —</div>';

            case 'quote':
                return `<div><label>Quote Text</label><textarea rows="3" oninput="blockUpdate(${idx},'text',this.value)">${esc(d.text)}</textarea>
                <label>Attribution</label><input type="text" value="${esc(d.attribution)}" oninput="blockUpdate(${idx},'attribution',this.value)"></div>`;

            case 'linkGrid':
                let linksHtml = (d.links||[]).map((l,li) => `
                    <div class="block-member-row">
                        <input type="text" value="${esc(l.label)}" placeholder="Label" oninput="blockUpdateArray(${idx},'links',${li},'label',this.value)">
                        <input type="text" value="${esc(l.url)}" placeholder="URL" oninput="blockUpdateArray(${idx},'links',${li},'url',this.value)">
                        <input type="text" value="${esc(l.icon||'')}" placeholder="Icon class" oninput="blockUpdateArray(${idx},'links',${li},'icon',this.value)" style="max-width:140px">
                        <button type="button" class="block-btn block-btn-del" onclick="blockRemoveArray(${idx},'links',${li})">×</button>
                    </div>
                `).join('');
                return `<div><div class="block-member-list">${linksHtml}</div>
                <button type="button" class="block-btn block-btn-add" onclick="blockAddArray(${idx},'links',{label:'',url:'',icon:'bx bx-link'})">+ Add Link</button></div>`;

            case 'spotlight':
                let spotHtml = (d.images||[]).map((img,si) => `
                    <div class="block-member-row">
                        <input type="text" value="${esc(img.src)}" placeholder="Image path (img/vc-spotlight/photo.jpg)" oninput="blockUpdateArray(${idx},'images',${si},'src',this.value)">
                        <input type="text" value="${esc(img.caption||'')}" placeholder="Caption" oninput="blockUpdateArray(${idx},'images',${si},'caption',this.value)">
                        <button type="button" class="block-btn block-btn-del" onclick="blockRemoveArray(${idx},'images',${si})">×</button>
                    </div>
                `).join('');
                return `<div>
                    <div class="block-grid-2">
                        <div><label>Section Title</label><input type="text" value="${esc(d.title)}" oninput="blockUpdate(${idx},'title',this.value)" placeholder="VC Spotlight"></div>
                        <div><label>Subtitle</label><input type="text" value="${esc(d.subtitle)}" oninput="blockUpdate(${idx},'subtitle',this.value)" placeholder="Moments captured in motion"></div>
                    </div>
                    <label>Images (horizontal scroll carousel)</label>
                    <div class="block-member-list">${spotHtml}</div>
                    <button type="button" class="block-btn block-btn-add" onclick="blockAddArray(${idx},'images',{src:'img/gallery/m2.jpg',caption:''})">+ Add Image</button>
                </div>`;

            case 'speechesTable':
                let spRowsHtml = (d.rows||[]).map((r,ri) => `
                    <div class="block-member-row">
                        <input type="text" value="${esc(r.title)}" placeholder="Speech title" oninput="blockUpdateArray(${idx},'rows',${ri},'title',this.value)" style="flex:2">
                        <input type="text" value="${esc(r.url||r.link||'')}" placeholder="PDF URL or link" oninput="blockUpdateArray(${idx},'rows',${ri},'link',this.value)" style="flex:2">
                        <button type="button" class="block-btn block-btn-del" onclick="blockRemoveArray(${idx},'rows',${ri})">×</button>
                    </div>
                `).join('');
                return `<div>
                    <div class="block-grid-2">
                        <div><label>Section Title</label><input type="text" value="${esc(d.title)}" oninput="blockUpdate(${idx},'title',this.value)" placeholder="Vice-Chancellor's Speeches"></div>
                    </div>
                    <label>Speeches (title + PDF link)</label>
                    <div class="block-member-list">${spRowsHtml}</div>
                    <button type="button" class="block-btn block-btn-add" onclick="blockAddArray(${idx},'rows',{title:'',link:''})">+ Add Speech</button>
                </div>`;

            default:
                return '<div>Unknown block type</div>';
        }
    }

    // ── Block Operations ──
    window.blockUpdate = function(idx, key, value) {
        blocks[idx].data = blocks[idx].data || {};
        blocks[idx].data[key] = value;
        serialize();
    };

    window.blockUpdateArray = function(idx, arrayKey, itemIdx, field, value) {
        blocks[idx].data[arrayKey][itemIdx][field] = value;
        serialize();
    };

    window.blockAddArray = function(idx, arrayKey, defaultItem) {
        blocks[idx].data[arrayKey] = blocks[idx].data[arrayKey] || [];
        blocks[idx].data[arrayKey].push(defaultItem);
        renderBlocks();
    };

    window.blockRemoveArray = function(idx, arrayKey, itemIdx) {
        blocks[idx].data[arrayKey].splice(itemIdx, 1);
        renderBlocks();
    };

    window.blockAdd = function(type) {
        const defaults = {
            heading:    { level: 2, text: '' },
            text:       { html: '' },
            officer:    { name: '', title: '', photo: '', qualifications: '', bio: '' },
            member:     { name: '', role: '', photo: '', description: '' },
            memberGrid: { title: 'Members', members: [{ name: '', role: '', photo: '', description: '' }] },
            gallery:    { title: 'Gallery', images: [{ url: '', caption: '' }] },
            table:      { title: '', headers: ['Column 1', 'Column 2'], rows: [['', '']] },
            list:       { title: '', items: ['Item 1', 'Item 2'] },
            image:      { url: '', caption: '', alt: '' },
            divider:    {},
            quote:      { text: '', attribution: '' },
            linkGrid:   { links: [{ label: '', url: '', icon: 'bx bx-link' }] },
            spotlight:  { title: 'Spotlight', subtitle: '', images: [{ src: 'img/gallery/m2.jpg', caption: '' }] },
            speechesTable: { title: 'Speeches', rows: [{ title: '', link: '' }] },
        };
        blocks.push({ type: type, data: defaults[type] || {} });
        renderBlocks();
        // Scroll to new block
        const items = container.querySelectorAll('.block-editor-item');
        if (items.length) items[items.length - 1].scrollIntoView({ behavior: 'smooth', block: 'center' });
    };

    window.blockDelete = function(idx) {
        if (confirm('Delete this block?')) {
            blocks.splice(idx, 1);
            renderBlocks();
        }
    };

    window.blockDuplicate = function(idx) {
        const clone = JSON.parse(JSON.stringify(blocks[idx]));
        blocks.splice(idx + 1, 0, clone);
        renderBlocks();
    };

    window.blockMoveUp = function(idx) {
        if (idx <= 0) return;
        [blocks[idx - 1], blocks[idx]] = [blocks[idx], blocks[idx - 1]];
        renderBlocks();
    };

    window.blockMoveDown = function(idx) {
        if (idx >= blocks.length - 1) return;
        [blocks[idx], blocks[idx + 1]] = [blocks[idx + 1], blocks[idx]];
        renderBlocks();
    };

    // ── Helpers ──
    function esc(str) {
        if (!str) return '';
        return String(str).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/"/g,'&quot;').replace(/'/g,'&#039;');
    }
})();
