@extends('layouts.app')

@section('content')
    <style>
        /* ── Board of Trustees page (scoped bot- styles) ── */

        /* Introduction block */
        .section-title {
            max-width: 1140px;
            margin: 54px auto 0;
        }

        .section-title h3 {
            font-size: clamp(1.5rem, 3vw, 2.1rem);
            font-weight: 800;
            color: #082b1a;
            margin: 0 0 18px;
            position: relative;
            padding-left: 18px;
            line-height: 1.25;
        }

        .section-title h3::before {
            content: "";
            position: absolute;
            left: 0;
            top: 8px;
            bottom: 8px;
            width: 5px;
            border-radius: 4px;
            background: linear-gradient(135deg, #0a7a4b, #035f39);
        }

        .section-title > p:first-of-type {
            background: #f4f8f6;
            border-left: 4px solid #035f39;
            border-radius: 0 14px 14px 0;
            padding: 20px 24px;
            color: #2f4a3d;
            line-height: 1.85;
            margin: 0 0 30px;
        }

        .section-title > div:not(.bot-funcs) > p {
            margin: 0 0 6px;
        }

        .section-title > div:not(.bot-funcs) > p strong {
            display: inline-block;
            font-size: 1.02rem;
            font-weight: 800;
            color: #035f39;
            text-transform: uppercase;
            letter-spacing: 0.6px;
        }

        .section-title > p:last-of-type {
            color: #5a6b62;
            margin: 0 0 16px;
            font-size: 0.98rem;
        }

        /* Functions of the Board */
        .bot-funcs {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 12px;
            margin: 0 0 10px;
            padding: 0;
        }

        .bot-funcs p {
            margin: 0;
            padding: 15px 18px;
            background: #fbfdfc;
            border: 1px solid #e7ece9;
            border-radius: 12px;
            color: #46554d;
            line-height: 1.7;
            font-size: 0.93rem;
            transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
        }

        .bot-funcs p:hover {
            transform: translateY(-3px);
            border-color: rgba(3, 95, 57, 0.3);
            box-shadow: 0 12px 26px rgba(8, 43, 26, 0.08);
        }

        .bot-funcs p::first-letter {
            color: #035f39;
            font-weight: 800;
        }

        /* Members header */
        .bot-members {
            margin: 48px auto 0;
            padding-bottom: 70px;
        }

        .bot-members-head {
            text-align: center;
            margin-bottom: 36px;
        }

        .bot-eyebrow {
            display: inline-block;
            background: #eef4f0;
            border: 1px solid #d8e6de;
            color: #0f3a26;
            font-size: 0.76rem;
            font-weight: 700;
            letter-spacing: 1.6px;
            text-transform: uppercase;
            padding: 6px 16px;
            border-radius: 999px;
            margin-bottom: 14px;
        }

        .bot-members-head h2 {
            font-size: clamp(1.6rem, 3.2vw, 2.3rem);
            font-weight: 800;
            color: #082b1a;
            margin: 0;
            position: relative;
            display: inline-block;
        }

        .bot-members-head h2::after {
            content: "";
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: -12px;
            width: 68px;
            height: 4px;
            border-radius: 4px;
            background: linear-gradient(90deg, #c9a227, #0a7a4b);
        }

        .bot-members-head .bot-lead {
            max-width: 740px;
            margin: 24px auto 0;
            color: #5a6b62;
            line-height: 1.8;
            font-size: 1rem;
        }

        .bot-stats {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            margin-top: 22px;
        }

        .bot-stats span {
            background: #fff;
            border: 1px solid #e0e9e4;
            border-radius: 999px;
            padding: 8px 18px;
            font-size: 0.86rem;
            font-weight: 600;
            color: #3c4a43;
            box-shadow: 0 6px 16px rgba(8, 43, 26, 0.05);
        }

        .bot-stats span strong {
            color: #035f39;
            font-weight: 800;
        }

        /* Member cards */
        .bot-card {
            display: flex;
            flex-direction: column;
            height: 100%;
            background: #fff;
            border: 1px solid #e7ece9;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(8, 43, 26, 0.06);
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        }

        .bot-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 22px 46px rgba(8, 43, 26, 0.14);
            border-color: rgba(3, 95, 57, 0.35);
        }

        .bot-photo {
            position: relative;
            aspect-ratio: 4 / 5;
            min-height: 230px;
            background: linear-gradient(150deg, #0a7a4b 0%, #035f39 55%, #06301e 100%);
            overflow: hidden;
        }

        .bot-initials {
            position: absolute;
            inset: 0;
            display: grid;
            place-items: center;
            font-size: clamp(2.4rem, 5vw, 3.2rem);
            font-weight: 800;
            letter-spacing: 2px;
            color: rgba(255, 255, 255, 0.85);
            text-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
            z-index: 1;
            user-select: none;
        }

        .bot-photo img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top center;
            z-index: 2;
            transition: transform 0.45s ease;
        }

        .bot-card:hover .bot-photo img {
            transform: scale(1.07);
        }

        .bot-photo::after {
            content: "";
            position: absolute;
            inset: 0;
            z-index: 3;
            background: linear-gradient(to top, rgba(6, 48, 30, 0.5) 0%, rgba(6, 48, 30, 0) 40%);
            pointer-events: none;
        }

        .bot-index {
            position: absolute;
            top: 12px;
            right: 12px;
            z-index: 4;
            width: 34px;
            height: 34px;
            border-radius: 10px;
            display: grid;
            place-items: center;
            background: rgba(255, 255, 255, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.35);
            backdrop-filter: blur(4px);
            color: #fff;
            font-size: 0.78rem;
            font-weight: 800;
            letter-spacing: 0.5px;
        }

        .bot-info {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            padding: 16px 14px 18px;
            text-align: center;
        }

        .bot-info h4 {
            margin: 0;
            font-size: 0.97rem;
            font-weight: 800;
            color: #082b1a;
            line-height: 1.5;
        }

        .bot-role {
            margin-top: auto;
            display: inline-block;
            padding: 5px 14px;
            border-radius: 999px;
            font-size: 0.72rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            background: #eef4f0;
            color: #0f3a26;
            border: 1px solid #d8e6de;
        }

        .bot-card--chairman {
            border-color: rgba(201, 162, 39, 0.65);
            box-shadow: 0 12px 32px rgba(201, 162, 39, 0.18);
        }

        .bot-card--chairman:hover {
            border-color: #c9a227;
            box-shadow: 0 24px 50px rgba(201, 162, 39, 0.28);
        }

        .bot-card--chairman .bot-role {
            background: linear-gradient(135deg, #d9b23c, #c9a227);
            color: #241f04;
            border-color: transparent;
            box-shadow: 0 6px 16px rgba(201, 162, 39, 0.35);
        }

        .bot-card--secretary {
            border-color: rgba(3, 95, 57, 0.45);
        }

        .bot-card--secretary .bot-role {
            background: #035f39;
            color: #fff;
            border-color: transparent;
        }

        @media (max-width: 576px) {
            .bot-info h4 { font-size: 0.92rem; }
            .bot-funcs { grid-template-columns: 1fr; }
        }

        @media print {
            .section-banner, footer, nav { display: none !important; }
            .bot-card { box-shadow: none; break-inside: avoid; }
        }
    </style>
         <!-- Start Section Banner Area -->
         <!-- Start Section Banner Area -->
        <div class="section-banner bg-14">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">Board of Trustees</h2>
                        {{-- <p data-aos="fade-up" data-aos-delay="200">Get Started with Access to Issues of Fountain Chronicles</p> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section Banner Area -->
         
                <div class="container">
                    <div class="section-title" data-aos="fade-up" data-aos-delay="100" style="text-align: left">
                        <h3>Introduction</h3>
                                <p>The part 1 Section 4 (2) of University Law (2007) provides that the power of the University shall be exercisable on behalf of the University by the Board of Trustees or 
                                    Council or Senate and in any other manners be exercisable 
                                    by the Senate with the approval of the Council and NUC.
                                    The Law also provides that the proprietor shall appoint a body known as 
                                    Board of Trustees who shall hold office 
                                    for a five-year term renewable for another final term of five years.
                                </p>
                                <div>
                                    <p><strong>Functions of the Board</strong></p>
                                </div>
                                <p>The functions of the Board of Trustees as entrenched in the University Law is as follows:</p>
                                <div class="bot-funcs">
                                    <p>1. Holding in trust all permanent assets and properties of the University</p>
                                    <p>2. Approve periodic strategic plans for the University</p>
                                    <p>3. Approve policies and symbols of long-term application for the University</p>
                                    <p>4. Appoint a Chancellor on personal recognition of experience, skill, and high integrity</p>
                                    <p>5. Appoint a Pro-Chancellor who shall be a person of high integrity and renown for management competency</p>
                                    <p>6. Appoint members of the Governing Council in line with provisions of the third schedule</p>
                                    <p>7. Undertake periodic visitations to the University</p>
                                    <p>8. Act as final decision authority in matters of interpretation 
                                        of statutes governing the workings of the University and disputes 
                                        between its functional organs and assist the University in soliciting and securing patrons, 
                                        endowments, sponsorships, external recognitions and accreditations
                                    </p>
                                </div>
                    </div>

                    <!-- Start Members of the Board -->
                    <div class="bot-members">
                        <div class="bot-members-head" data-aos="fade-up">
                            <span class="bot-eyebrow">University Governance</span>
                            <h2>Members of the Board</h2>
                            <p class="bot-lead">Distinguished scholars, jurists, professionals and community leaders who hold the University's permanent assets, strategic plans and long-term policies in trust, in line with the Fountain University Law (2007).</p>
                            <div class="bot-stats">
                                <span><strong>13</strong> Members</span>
                                <span><strong>5</strong>-Year Term</span>
                                <span><strong>2</strong> Terms Maximum</span>
                            </div>
                        </div>

                        <div class="row bot-grid">

                            @php $botMembers = $members; @endphp
                            @foreach ($botMembers as $index => $member)
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <div class="bot-card {{ $member->badge() ? 'bot-card--' . $member->badge() : '' }} bot-card--clickable"
                                     data-aos="fade-up" data-aos-delay="{{ ($index % 4) * 80 }}"
                                     role="button" tabindex="0"
                                     data-name="{{ $member->name }}"
                                     data-role="{{ $member->role }}"
                                     data-photo="{{ $member->photoUrl() }}"
                                     data-initials="{{ $member->initials }}"
                                     data-bio="{{ $member->bio }}"
                                     onclick="openBotProfile(this)"
                                     onkeydown="if(event.key==='Enter'||event.key===' '){event.preventDefault();openBotProfile(this)}">
                                    <div class="bot-photo">
                                        <span class="bot-initials">{{ $member->initials }}</span>
                                        @if($member->photoUrl())
                                        <img src="{{ $member->photoUrl() }}" alt="{{ $member->name }}" loading="lazy" onerror="this.style.display='none'">
                                        @endif
                                        <span class="bot-index">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                    </div>
                                    <div class="bot-info">
                                        <h4>{{ $member->name }}</h4>
                                        <span class="bot-role">{{ $member->role }}</span>
                                        <span class="bot-more"><i class='bx bx-info-circle'></i> About</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

    <style>
        /* Member profile modal + clickable cards */
        .bot-card--clickable { cursor: pointer; }
        .bot-card--clickable:focus-visible { outline: 3px solid rgba(10, 122, 75, 0.45); outline-offset: 2px; }

        .bot-more {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            font-size: 0.74rem;
            font-weight: 700;
            color: #93a099;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            transition: color 0.2s ease;
        }

        .bot-card--clickable:hover .bot-more { color: #035f39; }

        .bot-modal {
            position: fixed;
            inset: 0;
            z-index: 2000;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .bot-modal.is-open { display: flex; }

        .bot-modal__backdrop {
            position: absolute;
            inset: 0;
            background: rgba(6, 24, 16, 0.72);
            backdrop-filter: blur(3px);
        }

        .bot-modal__dialog {
            position: relative;
            z-index: 1;
            background: #fff;
            border-radius: 18px;
            overflow: hidden;
            max-width: 420px;
            width: 100%;
            box-shadow: 0 30px 70px rgba(0, 0, 0, 0.35);
            animation: botPop 0.25s ease;
        }

        @keyframes botPop {
            from { transform: translateY(14px) scale(0.97); opacity: 0; }
            to { transform: none; opacity: 1; }
        }

        .bot-modal__close {
            position: absolute;
            top: 10px;
            right: 12px;
            z-index: 3;
            border: none;
            background: rgba(6, 48, 30, 0.45);
            color: #fff;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            font-size: 1.4rem;
            line-height: 1;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .bot-modal__close:hover { background: rgba(6, 48, 30, 0.75); }

        .bot-modal__photo {
            position: relative;
            aspect-ratio: 4 / 3;
            background: linear-gradient(150deg, #0a7a4b 0%, #035f39 55%, #06301e 100%);
            display: grid;
            place-items: center;
            overflow: hidden;
        }

        .bot-modal__photo img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top center;
            z-index: 2;
        }

        .bot-modal__photo .bot-initials { font-size: 3rem; z-index: 1; }

        .bot-modal__body { padding: 20px 24px 26px; text-align: center; }

        .bot-modal__body h4 {
            margin: 0 0 10px;
            font-weight: 800;
            color: #082b1a;
            font-size: 1.08rem;
            line-height: 1.45;
        }

        .bot-modal__body .bot-role { margin: 0 0 14px; }

        .bot-modal__body p {
            margin: 0;
            color: #46554d;
            line-height: 1.75;
            font-size: 0.94rem;
            text-align: left;
            white-space: pre-line;
        }

        .bot-modal__body p.is-empty {
            color: #8a978f;
            font-style: italic;
            text-align: center;
        }
    </style>

    <!-- Member profile modal -->
    <div class="bot-modal" id="botProfileModal" aria-hidden="true">
        <div class="bot-modal__backdrop" onclick="closeBotProfile()"></div>
        <div class="bot-modal__dialog" role="dialog" aria-modal="true" aria-labelledby="botModalName">
            <button class="bot-modal__close" type="button" onclick="closeBotProfile()" aria-label="Close">&times;</button>
            <div class="bot-modal__photo">
                <span class="bot-initials" id="botModalInitials"></span>
                <img id="botModalImg" alt="" onerror="this.style.display='none'">
            </div>
            <div class="bot-modal__body">
                <h4 id="botModalName"></h4>
                <span class="bot-role" id="botModalRole"></span>
                <p id="botModalBio"></p>
            </div>
        </div>
    </div>

    <script>
        function openBotProfile(card) {
            var modal = document.getElementById('botProfileModal');
            if (!modal) return;

            var photo = card.getAttribute('data-photo') || '';
            var img = document.getElementById('botModalImg');

            document.getElementById('botModalName').textContent = card.getAttribute('data-name') || '';
            document.getElementById('botModalRole').textContent = card.getAttribute('data-role') || '';
            document.getElementById('botModalInitials').textContent = card.getAttribute('data-initials') || '';

            var bio = (card.getAttribute('data-bio') || '').trim();
            var bioEl = document.getElementById('botModalBio');
            bioEl.textContent = bio || 'A brief profile for this member is coming soon.';
            bioEl.classList.toggle('is-empty', !bio);

            if (photo) {
                img.setAttribute('src', photo);
                img.style.display = '';
            } else {
                img.removeAttribute('src');
                img.style.display = 'none';
            }

            modal.classList.add('is-open');
            modal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        }

        function closeBotProfile() {
            var modal = document.getElementById('botProfileModal');
            if (!modal) return;
            modal.classList.remove('is-open');
            modal.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') closeBotProfile();
        });
    </script>
@endsection