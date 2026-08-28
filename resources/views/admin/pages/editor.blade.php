<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Page Editor — FUO Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/tinymce@6/tinymce.min.js" referrerpolicy="origin"></script>
    <style>
        :root { --accent:#035F39; --accent-l:#047A48; --bg:#f4f6f9; --card:#fff; --text:#1a1a2e; --muted:#6b7280; --border:#e5e7eb; }
        *{box-sizing:border-box} body{font-family:'Inter',system-ui,sans-serif;background:var(--bg);color:var(--text);margin:0}
        .eh{background:var(--card);border-bottom:1px solid var(--border);padding:12px 24px;display:flex;justify-content:space-between;align-items:center;position:sticky;top:0;z-index:100}
        .eh h1{font-size:18px;font-weight:700;margin:0}
        .eb{max-width:1200px;margin:0 auto;padding:24px}
        .ec{background:var(--card);border-radius:12px;box-shadow:0 2px 8px rgba(0,0,0,.06);overflow:hidden;margin-bottom:20px}
        .ech{padding:14px 20px;border-bottom:1px solid var(--border);display:flex;justify-content:space-between;align-items:center}
        .ech h6{margin:0;font-weight:700;font-size:14px}
        .ecb{padding:20px}
        .ecb label{display:block;font-size:11px;font-weight:600;color:var(--muted);text-transform:uppercase;letter-spacing:.5px;margin-bottom:4px;margin-top:14px}
        .ecb label:first-child{margin-top:0}
        .ecb input[type="text"],.ecb textarea,.ecb select{width:100%;padding:8px 12px;border:1px solid var(--border);border-radius:8px;font-size:13px;background:var(--card);color:var(--text);transition:border-color .2s;font-family:inherit}
        .ecb input:focus,.ecb textarea:focus,.ecb select:focus{border-color:var(--accent);outline:none;box-shadow:0 0 0 2px rgba(3,95,57,.1)}
        .ecb textarea{resize:vertical}
        .g2{display:grid;grid-template-columns:1fr 1fr;gap:8px 16px}
        @media(max-width:768px){.g2{grid-template-columns:1fr}}
        .vb{border:2px solid var(--border);border-radius:10px;margin-bottom:12px;transition:border-color .2s;position:relative}
        .vb:hover{border-color:var(--accent)}
        .vb.dragging{opacity:.6;border-style:dashed}
        .vbh{background:#f9fafb;padding:8px 14px;display:flex;align-items:center;gap:8px;border-bottom:1px solid var(--border);cursor:grab}
        .vbh:active{cursor:grabbing}
        .bb{background:var(--accent);color:#fff;padding:2px 8px;border-radius:4px;font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.5px}
        .ba{display:flex;gap:4px}
        .ba button{background:none;border:1px solid var(--border);border-radius:4px;padding:2px 6px;cursor:pointer;font-size:12px;color:var(--muted)}
        .ba button:hover{background:var(--accent);color:#fff;border-color:var(--accent)}
        .ba .del:hover{background:#dc2626;border-color:#dc2626}
        .vbb{padding:16px}
        .aba{text-align:center;padding:20px;border:2px dashed var(--border);border-radius:12px;transition:border-color .2s}
        .aba:hover{border-color:var(--accent)}
        .abb{background:var(--accent);color:#fff;border:none;padding:10px 24px;border-radius:8px;font-size:14px;font-weight:600;cursor:pointer}
        .abb:hover{background:var(--accent-l)}
        .bp{display:none;flex-wrap:wrap;gap:8px;justify-content:center;margin-top:12px}
        .bp.open{display:flex}
        .bpi{padding:8px 16px;border:1px solid var(--border);border-radius:8px;cursor:pointer;font-size:12px;font-weight:600;transition:all .15s;background:var(--card)}
        .bpi:hover{border-color:var(--accent);background:#f0f7f0;color:var(--accent)}
        .pf{border:2px solid var(--border);border-radius:12px;overflow:hidden;background:#fff}
        .pf iframe{width:100%;min-height:600px;border:none}
    </style>
</head>
<body>
    <div class="eh">
        <div style="display:flex;align-items:center;gap:12px">
            <a href="{{ route('admin.pages.index') }}" style="color:var(--muted);text-decoration:none;font-size:14px"><i class='bx bx-left-arrow-alt'></i> Back</a>
            <h1>{{ isset($page) ? 'Edit: '.$page->title : 'New Page' }}</h1>
        </div>
        <div style="display:flex;gap:8px">
            @if(isset($page))
            <a href="{{ url('/university/'.$page->slug) }}" target="_blank" class="btn btn-sm btn-outline-secondary"><i class='bx bx-link-external me-1'></i> Live Preview</a>
            @endif
            <button type="submit" form="pf" class="btn btn-sm" style="background:var(--accent);color:#fff"><i class='bx bx-save me-1'></i> Save</button>
        </div>
    </div>
    <div class="eb">
        <form id="pf" action="{{ isset($page) ? route('admin.pages.update', $page) : route('admin.pages.store') }}" method="POST" enctype="multipart/form-data">
            @csrf @if(isset($page)) @method('PUT') @endif
            <input type="hidden" name="blocks" id="bd">
            {{-- Tabs --}}
            <div style="display:flex;gap:0;border-bottom:2px solid var(--border);margin-bottom:20px">
                <button type="button" class="tab active" onclick="sTab('edit')"><i class='bx bx-edit me-1'></i> Edit</button>
                <button type="button" class="tab" onclick="sTab('preview')"><i class='bx bx-show me-1'></i> Preview</button>
            </div>
            <style>.tab{padding:10px 20px;border:none;background:none;cursor:pointer;font-size:14px;font-weight:600;color:var(--muted);border-bottom:2px solid transparent;margin-bottom:-2px;transition:all .2s}.tab.active{color:var(--accent);border-bottom-color:var(--accent)}.tab:hover{color:var(--text)}.tp{display:none}.tp.active{display:block}</style>

            {{-- Edit Tab --}}
            <div id="tEdit" class="tp active">
                <div class="ec">
                    <div class="ech"><h6><i class='bx bx-cog me-1'></i> Page Settings</h6></div>
                    <div class="ecb">
                        <div class="g2"><div><label>Title *</label><input type="text" name="title" value="{{ old('title',$page->title??'') }}" required></div><div><label>Section</label><select name="section">@foreach(['university'=>'University','officers'=>'Officers','admissions'=>'Admissions','academics'=>'Academics','publications'=>'Publications','downloads'=>'Downloads','showcase'=>'Showcase','other'=>'Other'] as $v=>$l)<option value="{{ $v }}" {{ old('section',$page->section??'university')==$v?'selected':'' }}>{{ $l }}</option>@endforeach</select></div></div>
                        <div class="g2"><div><label>Slug</label><input type="text" name="slug" value="{{ old('slug',$page->slug??'') }}" placeholder="auto"></div><div><label>Route Name</label><input type="text" name="route_name" value="{{ old('route_name',$page->route_name??'') }}"></div></div>
                        <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:8px 16px"><div><label>Icon</label><input type="text" name="icon" value="{{ old('icon',$page->icon??'') }}" placeholder="bx bx-crown"></div><div><label>Order</label><input type="number" name="sort_order" value="{{ old('sort_order',$page->sort_order??0) }}"></div><div><label>Parent</label><input type="text" name="parent_slug" value="{{ old('parent_slug',$page->parent_slug??'') }}"></div></div>
                        <div style="display:flex;gap:20px;margin-top:12px"><div class="form-check form-switch"><input class="form-check-input" type="checkbox" name="is_active" value="1" {{ old('is_active',$page->is_active??1)?'checked':'' }}><label class="form-check-label" style="font-size:13px;font-weight:600">Published</label></div><div style="flex:1"><label>Banner Text</label><input type="text" name="banner_text" value="{{ old('banner_text',$page->banner_text??'') }}"></div><div style="flex:1"><label>Banner Image</label><input type="file" name="banner_image" class="form-control form-control-sm" accept="image/*"></div></div>
                    </div>
                </div>
                <div id="blocksContainer"></div>
                <div class="aba">
                    <button type="button" class="abb" onclick="document.getElementById('bp').classList.toggle('open')"><i class='bx bx-plus me-1'></i> Add Content Block</button>
                    <div class="bp" id="bp">
                        <div class="bpi" onclick="addBlk('text')">📝 Rich Text</div>
                        <div class="bpi" onclick="addBlk('heading')">🏷️ Heading</div>
                        <div class="bpi" onclick="addBlk('officer')">👤 Officer Profile</div>
                        <div class="bpi" onclick="addBlk('memberGrid')">👥 Member Grid</div>
                        <div class="bpi" onclick="addBlk('gallery')">🖼️ Gallery</div>
                        <div class="bpi" onclick="addBlk('table')">📊 Table</div>
                        <div class="bpi" onclick="addBlk('speechesTable')">🎤 Speeches</div>
                        <div class="bpi" onclick="addBlk('spotlight')">✨ Spotlight</div>
                        <div class="bpi" onclick="addBlk('list')">📋 List</div>
                        <div class="bpi" onclick="addBlk('image')">🖼 Image</div>
                        <div class="bpi" onclick="addBlk('quote')">💬 Quote</div>
                        <div class="bpi" onclick="addBlk('divider')">➖ Divider</div>
                    </div>
                </div>
            </div>

            {{-- Preview Tab --}}
            <div id="tPreview" class="tp">
                <div class="pf" id="pfFrame"><div style="padding:20px;text-align:center;color:#999">Click "Refresh Preview" below.</div></div>
                <div style="text-align:center;padding:12px"><button type="button" class="btn btn-sm" style="background:var(--accent);color:#fff" onclick="rPreview()"><i class='bx bx-refresh me-1'></i> Refresh Preview</button></div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    let blocks=@json(old('blocks')?json_decode(old('blocks')):($page->blocks??[]));let bid=0;
    const csrfToken=document.querySelector('meta[name="csrf-token"]')?.content||document.querySelector('input[name="_token"]')?.value||'';
    function upImg(ev,idx,key,inputEl){
        const file=ev.target.files[0];if(!file)return;
        const fd=new FormData();fd.append('file',file);fd.append('_token',csrfToken);
        const btn=document.createElement('span');btn.textContent=' Uploading...';btn.style.color='#035F39';btn.style.fontWeight='600';inputEl.parentNode.appendChild(btn);
        fetch('{{route("admin.pages.upload-block-image")}}',{method:'POST',body:fd}).then(r=>r.json()).then(j=>{
            btn.remove();if(j.url){blocks[idx].data[key]=j.url;svBlks();rBlks();setTimeout(initTMCE,100)}
            else{alert('Upload failed');}
        }).catch(()=>{btn.remove();alert('Upload error');});
    }
    function upArrImg(ev,idx,arrKey,mi,imgKey,inputEl){
        const file=ev.target.files[0];if(!file)return;
        const fd=new FormData();fd.append('file',file);fd.append('_token',csrfToken);
        const btn=document.createElement('span');btn.textContent=' Uploading...';btn.style.color='#035F39';btn.style.fontWeight='600';inputEl.parentNode.appendChild(btn);
        fetch('{{route("admin.pages.upload-block-image")}}',{method:'POST',body:fd}).then(r=>r.json()).then(j=>{
            btn.remove();if(j.url){blocks[idx].data[arrKey][mi][imgKey]=j.url;svBlks();rBlks();setTimeout(initTMCE,100)}
            else{alert('Upload failed');}
        }).catch(()=>{btn.remove();alert('Upload error');});
    }
    function sTab(t){document.querySelectorAll('.tab').forEach(b=>b.classList.remove('active'));document.querySelectorAll('.tp').forEach(p=>p.classList.remove('active'));document.getElementById(t==='edit'?'tEdit':'tPreview').classList.add('active');document.querySelectorAll('.tab')[t==='edit'?0:1].classList.add('active');if(t==='preview')rPreview()}
    function rBlks(){const c=document.getElementById('blocksContainer');c.innerHTML='';blocks.forEach((b,i)=>{const el=document.createElement('div');el.className='vb';el.dataset.idx=i;el.draggable=true;el.ondragstart=e=>{e.dataTransfer.setData('text/plain',i);el.classList.add('dragging')};el.ondragend=()=>el.classList.remove('dragging');el.ondragover=e=>{e.preventDefault();el.style.borderTopColor='var(--accent)'};el.ondragleave=()=>{el.style.borderTopColor=''};el.ondrop=e=>{e.preventDefault();el.style.borderTopColor='';const f=parseInt(e.dataTransfer.getData('text/plain'));mvBlk(f,i)};const tl={text:'Rich Text',heading:'Heading',officer:'Officer Profile',member:'Member Card',memberGrid:'Member Grid',gallery:'Gallery',table:'Table',list:'List',image:'Image',divider:'Divider',quote:'Quote',speechesTable:'Speeches',spotlight:'Spotlight',linkGrid:'Link Grid'};const ti={text:'bx-text',heading:'bx-heading',officer:'bx-user',member:'bx-user-circle',memberGrid:'bx-group',gallery:'bx-images',table:'bx-table',list:'bx-list-ul',image:'bx-image',divider:'bx-minus',quote:'bx-quote-alt-left',speechesTable:'bx-table',spotlight:'bx-slider',linkGrid:'bx-link'};el.innerHTML=`<div class="vbh"><span style="cursor:grab;color:#999">☰</span><span class="bb"><i class='bx ${ti[b.type]||'bx-block'}'></i> ${tl[b.type]||b.type}</span><span style="flex:1"></span><div class="ba"><button type="button" title="Up" onclick="mvBlk(${i},${i-1})" ${i===0?'disabled':''}>▲</button><button type="button" title="Down" onclick="mvBlk(${i},${i+1})" ${i===blocks.length-1?'disabled':''}>▼</button><button type="button" title="Copy" onclick="dupBlk(${i})">⧉</button><button type="button" class="del" title="Delete" onclick="delBlk(${i})">×</button></div></div><div class="vbb">${rBlkEd(b,i)}</div>`;c.appendChild(el)});svBlks()}
    function rBlkEd(b,i){const d=b.data||{};switch(b.type){case'text':return`<textarea id="tmce_${i}" class="tmce">${esc(d.html||'')}</textarea>`;case'heading':return`<div class="g2"><div><label>Level</label><select onchange="upd(${i},'level',+this.value)">${[1,2,3,4,5,6].map(l=>`<option value="${l}" ${d.level==l?'selected':''}>H${l}</option>`).join('')}</select></div><div><label>Text</label><input type="text" value="${esc(d.text)}" oninput="upd(${i},'text',this.value)"></div></div>`;case'officer':return`<div class="g2"><div><label>Full Name</label><input type="text" value="${esc(d.name)}" oninput="upd(${i},'name',this.value)"></div><div><label>Title</label><input type="text" value="${esc(d.title)}" oninput="upd(${i},'title',this.value)"></div></div><div class="g2"><div><label>Photo</label><input type="file" accept="image/*" onchange="upImg(event,${i},'photo',this)" style="font-size:12px;border:1px solid #ddd;padding:4px;border-radius:4px;width:100%">${d.photo?`<div style="margin-top:4px"><img src="${esc(d.photo)}" style="max-height:60px;border-radius:4px"><br><a href="javascript:void(0)" onclick="upd(${i},'photo','');rBlks()" style="font-size:11px;color:#dc3545">✕ Remove</a></div>`:''}</div><div><label>Qualifications</label><input type="text" value="${esc(d.qualifications)}" oninput="upd(${i},'qualifications',this.value)"></div></div><label>Biography</label><textarea id="tmce_${i}" class="tmce">${esc(d.bio||'')}</textarea>`;case'member':return`<div class="g2"><div><label>Name</label><input type="text" value="${esc(d.name)}" oninput="upd(${i},'name',this.value)"></div><div><label>Role</label><input type="text" value="${esc(d.role)}" oninput="upd(${i},'role',this.value)"></div></div><div class="g2"><div><label>Photo</label><input type="file" accept="image/*" onchange="upImg(event,${i},'photo',this)" style="font-size:12px;border:1px solid #ddd;padding:4px;border-radius:4px;width:100%">${d.photo?`<div style="margin-top:4px"><img src="${esc(d.photo)}" style="max-height:40px;border-radius:4px"> <a href="javascript:void(0)" onclick="upd(${i},'photo','');rBlks()" style="font-size:11px;color:#dc3545">✕</a></div>`:''}</div><div><label>Description</label><input type="text" value="${esc(d.description||'')}" oninput="upd(${i},'description',this.value)"></div></div>`;case'memberGrid':return`<label>Title</label><input type="text" value="${esc(d.title)}" oninput="upd(${i},'title',this.value)" style="margin-bottom:8px">${(d.members||[]).map((m,mi)=>`<div style="display:flex;gap:6px;margin-bottom:4px"><input type="text" value="${esc(m.name)}" placeholder="Name" oninput="uA(${i},'members',${mi},'name',this.value)" style="flex:1"><input type="text" value="${esc(m.role)}" placeholder="Role" oninput="uA(${i},'members',${mi},'role',this.value)" style="flex:1"><div style="flex:1"><input type="file" accept="image/*" onchange="upArrImg(event,${i},'members',${mi},'photo',this)" style="font-size:11px;border:1px solid #ddd;padding:2px;border-radius:4px;width:100%">${m.photo?`<img src="${esc(m.photo)}" style="max-height:24px;border-radius:3px;margin-top:2px">`:''}</div><button type="button" style="background:none;border:1px solid #ddd;border-radius:4px;padding:2px 6px;cursor:pointer" onclick="rA(${i},'members',${mi})">×</button></div>`).join('')}<button type="button" style="margin-top:6px;padding:4px 12px;border:1px solid var(--accent);background:var(--accent);color:#fff;border-radius:6px;font-size:12px;cursor:pointer" onclick="aA(${i},'members',{name:'',role:'',photo:'',description:''})">+ Member</button>`;case'gallery':return`<label>Title</label><input type="text" value="${esc(d.title)}" oninput="upd(${i},'title',this.value)" style="margin-bottom:8px">${(d.images||[]).map((g,gi)=>`<div style="display:flex;gap:6px;margin-bottom:4px"><input type="file" accept="image/*" onchange="upArrImg(event,${i},'images',${gi},'url',this)" style="flex:2;font-size:11px;border:1px solid #ddd;padding:2px;border-radius:4px">${(g.url||g.src)?`<img src="${esc(g.url||g.src||'')}" style="max-height:30px;border-radius:3px">`:''}<input type="text" value="${esc(g.caption||'')}" placeholder="Caption" oninput="uA(${i},'images',${gi},'caption',this.value)" style="flex:1"><button type="button" style="background:none;border:1px solid #ddd;border-radius:4px;padding:2px 6px;cursor:pointer" onclick="rA(${i},'images',${gi})">×</button></div>`).join('')}<button type="button" style="margin-top:6px;padding:4px 12px;border:1px solid var(--accent);background:var(--accent);color:#fff;border-radius:6px;font-size:12px;cursor:pointer" onclick="aA(${i},'images',{url:'',caption:''})">+ Image</button>`;case'table':return`<label>Title</label><input type="text" value="${esc(d.title)}" oninput="upd(${i},'title',this.value)" style="margin-bottom:6px"><label>Headers</label><input type="text" value="${esc((d.headers||[]).join(', '))}" oninput="upd(${i},'headers',this.value.split(',').map(s=>s.trim()).filter(Boolean))" style="margin-bottom:6px"><label>Rows (one per line)</label><textarea rows="4" oninput="upd(${i},'rows',this.value.split('\\n').map(r=>r.split(',').map(s=>s.trim())).filter(r=>r.length&&r[0]))">${(d.rows||[]).map(r=>r.join(', ')).join('\\n')}</textarea>`;case'list':return`<label>Title</label><input type="text" value="${esc(d.title)}" oninput="upd(${i},'title',this.value)" style="margin-bottom:6px"><label>Items</label><textarea rows="5" oninput="upd(${i},'items',this.value.split('\\n').filter(s=>s.trim()))">${(d.items||[]).join('\\n')}</textarea>`;case'image':return`<div class="g2"><div style="grid-column:1/-1"><label>Image</label><input type="file" accept="image/*" onchange="upImg(event,${i},'url',this)" style="font-size:12px;border:1px solid #ddd;padding:4px;border-radius:4px;width:100%">${d.url?`<div style="margin-top:4px"><img src="${esc(d.url)}" style="max-height:100px;border-radius:4px"><br><a href="javascript:void(0)" onclick="upd(${i},'url','');rBlks()" style="font-size:11px;color:#dc3545">✕ Remove</a></div>`:''}</div><div><label>Caption</label><input type="text" value="${esc(d.caption||'')}" oninput="upd(${i},'caption',this.value)"></div><div><label>Alt</label><input type="text" value="${esc(d.alt||'')}" oninput="upd(${i},'alt',this.value)"></div></div>`;case'divider':return'<div style="text-align:center;padding:12px 0;color:#999">— Divider —</div>';case'quote':return`<label>Quote</label><textarea rows="2" oninput="upd(${i},'text',this.value)">${esc(d.text||'')}</textarea><label>Attribution</label><input type="text" value="${esc(d.attribution||'')}" oninput="upd(${i},'attribution',this.value)">`;case'spotlight':return`<div class="g2"><div><label>Title</label><input type="text" value="${esc(d.title)}" oninput="upd(${i},'title',this.value)"></div><div><label>Subtitle</label><input type="text" value="${esc(d.subtitle||'')}" oninput="upd(${i},'subtitle',this.value)"></div></div>${(d.images||[]).map((s,si)=>`<div style="display:flex;gap:6px;margin-bottom:4px"><input type="file" accept="image/*" onchange="upArrImg(event,${i},'images',${si},'src',this)" style="font-size:11px;border:1px solid #ddd;padding:2px;border-radius:4px;flex:2">${s.src?`<img src="${esc(s.src)}" style="max-height:30px;border-radius:3px">`:''}<input type="text" value="${esc(s.caption||'')}" placeholder="Caption" oninput="uA(${i},'images',${si},'caption',this.value)" style="flex:1"><button type="button" style="background:none;border:1px solid #ddd;border-radius:4px;padding:2px 6px;cursor:pointer" onclick="rA(${i},'images',${si})">×</button></div>`).join('')}<button type="button" style="margin-top:6px;padding:4px 12px;border:1px solid var(--accent);background:var(--accent);color:#fff;border-radius:6px;font-size:12px;cursor:pointer" onclick="aA(${i},'images',{src:'',caption:''})">+ Image</button>`;case'speechesTable':return`<label>Title</label><input type="text" value="${esc(d.title)}" oninput="upd(${i},'title',this.value)" style="margin-bottom:8px">${(d.rows||[]).map((r,ri)=>`<div style="display:flex;gap:6px;margin-bottom:4px"><input type="text" value="${esc(r.title)}" placeholder="Title" oninput="uA(${i},'rows',${ri},'title',this.value)" style="flex:2"><input type="text" value="${esc(r.link||r.url||'')}" placeholder="PDF link" oninput="uA(${i},'rows',${ri},'link',this.value)" style="flex:2"><button type="button" style="background:none;border:1px solid #ddd;border-radius:4px;padding:2px 6px;cursor:pointer" onclick="rA(${i},'rows',${ri})">×</button></div>`).join('')}<button type="button" style="margin-top:6px;padding:4px 12px;border:1px solid var(--accent);background:var(--accent);color:#fff;border-radius:6px;font-size:12px;cursor:pointer" onclick="aA(${i},'rows',{title:'',link:''})">+ Speech</button>`;default:return'<div>Unknown block</div>'}}
    function initTMCE(){document.querySelectorAll('.tmce').forEach(el=>{if(el.dataset.t) return;el.dataset.t='1';const i=parseInt(el.id.split('_')[1]);tinymce.init({target:el,height:200,menubar:false,branding:false,plugins:'lists link image table code codesample emoticons',toolbar:'undo redo | blocks | bold italic underline | link image table | bullist numlist | code',content_style:'body{font-family:Inter,sans-serif;font-size:14px}',setup:ed=>{ed.on('change',()=>{ed.save();if(blocks[i]&&blocks[i].data){if(blocks[i].type==='officer')blocks[i].data.bio=ed.getContent();else blocks[i].data.html=ed.getContent();svBlks()}})}})})}
    function addBlk(t){const df={text:{html:''},heading:{level:2,text:''},officer:{name:'',title:'',photo:'',qualifications:'',bio:''},member:{name:'',role:'',photo:'',description:''},memberGrid:{title:'Members',members:[{name:'',role:'',photo:'',description:''}]},gallery:{title:'Gallery',images:[{url:'',caption:''}]},table:{title:'',headers:['Col 1','Col 2'],rows:[['','']]},list:{title:'',items:['Item 1']},image:{url:'',caption:'',alt:''},divider:{},quote:{text:'',attribution:''},speechesTable:{title:'Speeches',rows:[]},spotlight:{title:'Spotlight',subtitle:'',images:[{src:'',caption:''}]}};blocks.push({type:t,data:df[t]||{}});rBlks();setTimeout(initTMCE,100);document.getElementById('bp').classList.remove('open')}
    function delBlk(i){if(confirm('Delete?')){blocks.splice(i,1);rBlks();setTimeout(initTMCE,100)}}
    function dupBlk(i){blocks.splice(i+1,0,JSON.parse(JSON.stringify(blocks[i])));rBlks();setTimeout(initTMCE,100)}
    function mvBlk(f,t){if(t<0||t>=blocks.length||f===t)return;const it=blocks.splice(f,1)[0];blocks.splice(t,0,it);rBlks();setTimeout(initTMCE,100)}
    function upd(i,k,v){blocks[i].data[k]=v;svBlks()}
    function uA(i,a,mi,f,v){blocks[i].data[a][mi][f]=v;svBlks()}
    function aA(i,a,it){blocks[i].data[a]=blocks[i].data[a]||[];blocks[i].data[a].push(it);rBlks();setTimeout(initTMCE,100)}
    function rA(i,a,mi){blocks[i].data[a].splice(mi,1);rBlks();setTimeout(initTMCE,100)}
    function svBlks(){document.getElementById('bd').value=JSON.stringify(blocks)}
    function rPreview(){let h='';blocks.forEach(b=>{const d=b.data||{};switch(b.type){case'text':h+=`<div style="margin-bottom:16px">${d.html||''}</div>`;break;case'heading':h+=`<h${d.level||2}>${d.text||''}</h${d.level||2}>`;break;case'officer':h+=`<div style="display:flex;gap:20px;margin:20px 0;align-items:start">${d.photo?`<div style="width:200px"><img src="${d.photo}" style="width:100%;border-radius:8px"></div>`:''}<div><h2 style="text-transform:uppercase;font-weight:700">${d.name||''}</h2><p style="color:#035F39;font-weight:600">${d.title||''}</p>${d.qualifications?`<p style="font-size:12px;color:#888">(${d.qualifications})</p>`:''}<div>${d.bio||''}</div></div></div>`;break;case'memberGrid':h+=`<h3 style="text-align:center;margin:16px 0 8px">${d.title||'Members'}</h3><div style="display:grid;grid-template-columns:repeat(3,1fr);gap:12px">${(d.members||[]).map(m=>`<div style="text-align:center;padding:16px;background:#f9fafb;border-radius:8px"><div style="width:50px;height:50px;border-radius:50%;background:#035F39;color:#fff;display:flex;align-items:center;justify-content:center;margin:0 auto 8px;font-weight:700">${m.name?m.name.charAt(0):''}</div><p style="font-weight:700;margin:0">${m.name||''}</p><p style="color:#035F39;font-size:12px;margin:2px 0">${m.role||''}</p></div>`).join('')}</div>`;break;case'gallery':h+=`<h3 style="text-align:center;margin:16px 0 8px">${d.title||'Gallery'}</h3><div style="display:grid;grid-template-columns:repeat(3,1fr);gap:8px">${(d.images||[]).map(i=>`<img src="${i.url||i.src||''}" style="width:100%;height:150px;object-fit:cover;border-radius:6px">`).join('')}</div>`;break;case'table':h+=`<h3>${d.title||''}</h3><table style="width:100%;border-collapse:collapse;margin-bottom:16px"><thead><tr>${(d.headers||[]).map(hd=>`<th style="padding:8px;border:1px solid #ddd;background:#f5f5f5">${hd}</th>`).join('')}</tr></thead><tbody>${(d.rows||[]).map(r=>`<tr>${r.map(c=>`<td style="padding:8px;border:1px solid #ddd">${c}</td>`).join('')}</tr>`).join('')}</tbody></table>`;break;case'speechesTable':h+=`<h2 style="text-align:center;margin:16px 0 8px">${d.title||'Speeches'}</h2><table style="width:100%;border-collapse:collapse"><thead><tr><th style="padding:8px;border:1px solid #ddd;background:#f5f5f5">#</th><th style="padding:8px;border:1px solid #ddd;background:#f5f5f5">Title</th><th style="padding:8px;border:1px solid #ddd;background:#f5f5f5;text-align:center">Download</th></tr></thead><tbody>${(d.rows||[]).map((r,j)=>`<tr><td style="padding:8px;border:1px solid #ddd">${j+1}</td><td style="padding:8px;border:1px solid #ddd">${r.title||''}</td><td style="padding:8px;border:1px solid #ddd;text-align:center">${r.link?`<a href="${r.link}">PDF</a>`:''}</td></tr>`).join('')}</tbody></table>`;break;case'list':h+=`<h3>${d.title||''}</h3><ul style="padding-left:20px">${(d.items||[]).map(it=>`<li>${it}</li>`).join('')}</ul>`;break;case'image':h+=`<div style="text-align:center;margin:16px 0"><img src="${d.url||''}" style="max-width:100%;border-radius:8px">${d.caption?`<p style="font-size:12px;color:#888;margin-top:4px">${d.caption}</p>`:''}</div>`;break;case'divider':h+='<hr style="margin:16px 0">';break;case'quote':h+=`<blockquote style="border-left:3px solid #035F39;padding:12px 16px;margin:16px 0;background:#f0f7f0;border-radius:0 6px 6px 0;font-style:italic"><p style="margin:0">${d.text||''}</p>${d.attribution?`<footer style="margin-top:6px;font-size:12px;color:#666">— ${d.attribution}</footer>`:''}</blockquote>`;break;case'spotlight':h+=`<h3 style="text-align:center;margin:16px 0 8px">${d.title||'Spotlight'}</h3>${d.subtitle?`<p style="text-align:center;color:#888;margin-bottom:12px">${d.subtitle}</p>`:''}<div style="display:flex;gap:8px;overflow-x:auto;padding-bottom:8px">${(d.images||[]).map(im=>`<img src="${im.src||''}" style="height:150px;border-radius:6px;flex-shrink:0" alt="${im.caption||''}">`).join('')}</div>`;break;case'speechesTable':break;}});document.getElementById('pfFrame').innerHTML=`<div style="padding:20px;line-height:1.8">${h||'<div style="text-align:center;color:#999;padding:40px">No content yet.</div>'}</div>`}
    function esc(s){if(!s)return'';return String(s).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/"/g,'&quot;').replace(/'/g,'&#039;')}
    document.addEventListener('DOMContentLoaded',()=>{rBlks();setTimeout(initTMCE,300);document.addEventListener('click',e=>{const bp=document.getElementById('bp');if(bp&&!bp.contains(e.target)&&!e.target.classList.contains('abb'))bp.classList.remove('open')})});
    </script>
</body>
</html>
