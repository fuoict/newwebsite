@extends('layouts.app')

@section('content')
<div class="section-banner bg-1">
    <div class="container">
        <div class="banner-spacing">
            <div class="section-info">
                <h2 data-aos="fade-up" data-aos-delay="100">Approved School Fees (2026/2027)</h2>
                <p data-aos="fade-up" data-aos-delay="200">Fountain University, Osogbo — Approved Fee Schedule</p>
            </div>
        </div>
    </div>
</div>

<style>
.fee-nav{display:flex;flex-wrap:wrap;gap:8px;margin-bottom:32px;padding:16px 0;border-bottom:2px solid #035F39;background:#fff}
.fee-nav a{padding:10px 20px;border-radius:8px;text-decoration:none;font-weight:600;font-size:13px;color:#333;background:#f0f7f0;border:1px solid #d4e8d4;transition:all .25s;white-space:nowrap}
.fee-nav a:hover,.fee-nav a.active{background:#035F39;color:#fff;border-color:#035F39}
.fee-section{display:none;animation:fadeUp .4s ease}
.fee-section.active{display:block}
@keyframes fadeUp{from{opacity:0;transform:translateY(12px)}to{opacity:1;transform:translateY(0)}}
.fee-table{width:100%;border-collapse:collapse;background:#fff;border-radius:12px;overflow:hidden;box-shadow:0 2px 12px rgba(0,0,0,.05);margin-bottom:24px}
.fee-table thead{background:#035F39;color:#fff}
.fee-table th{padding:12px 14px;text-align:left;font-size:12px;font-weight:700;text-transform:uppercase;letter-spacing:.5px}
.fee-table td{padding:11px 14px;border-bottom:1px solid #f0f0f0;font-size:13.5px;color:#444}
.fee-table tbody tr:hover{background:#f8faf8}
.fee-table .amount{text-align:right;font-weight:700;color:#035F39;white-space:nowrap}
.fee-table thead .amount{color:#fff}
.fee-table .group-row{background:#e8f5e9;font-weight:700;color:#035F39}
.fee-table .group-row td{padding:10px 14px;font-size:12px;text-transform:uppercase;letter-spacing:1px;border-bottom:2px solid #c8e6c9}
.fee-subtitle{font-weight:700;color:#1a1a2e;font-size:17px;margin:28px 0 12px;padding:8px 16px;border-left:4px solid #035F39;background:#f8faf8;border-radius:0 8px 8px 0}
.fee-note{background:#fff8e1;border-left:4px solid #f9a825;padding:16px 20px;border-radius:0 8px 8px 0;margin:20px 0;font-size:14px;color:#5d4037}
.fee-card{background:#fff;border-radius:16px;padding:24px 28px;box-shadow:0 2px 12px rgba(0,0,0,.04);margin-bottom:24px}
.fee-card h3{font-weight:700;color:#1a1a2e;font-size:19px;margin-bottom:4px}
.fee-card p{color:#666;font-size:14px;margin:0}
</style>

<div class="about-us-area ptb-100">
    <div class="container">
        <div class="fee-nav" id="feeNav">
            <a href="#jupeb" onclick="showTab('jupeb',this)">JUPEB</a>
            <a href="#undergraduate" class="active" onclick="showTab('undergraduate',this)">Undergraduate (Fresh)</a>
            <a href="#returning" onclick="showTab('returning',this)">Undergraduate (Returning)</a>
            <a href="#otherfees" onclick="showTab('otherfees',this)">Other Fees & Charges</a>
            <a href="#topup" onclick="showTab('topup',this)">Top-Up / Part-Time</a>
            <a href="#postgraduate" onclick="showTab('postgraduate',this)">Postgraduate</a>
            <a href="#sandwich" onclick="showTab('sandwich',this)">Sandwich</a>
        </div>

        {{-- ═══════════════ JUPEB ═══════════════ --}}
        <div class="fee-section" id="jupeb">
            <div class="fee-card">
                <h3>JUPEB Foundation Programme</h3>
                <p>Approved fees for JUPEB (Joint Universities Preliminary Examinations Board) foundation students for the 2026/2027 session.</p>
            </div>

            <table class="fee-table">
                <thead><tr><th style="width:50px">S/N</th><th>Programme</th><th class="amount">Application Fee (₦)</th><th class="amount">Acceptance Fee (₦)</th><th class="amount">Exam Fee (₦)</th><th class="amount">Tuition Fee (₦)</th><th class="amount">Lab Manual (₦)</th><th class="amount">Lab Coat (₦)</th><th class="amount">Portal (₦)</th></tr></thead>
                <tbody>
                    <tr><td>1</td><td>Non-Science</td><td class="amount">15,000</td><td class="amount">20,000</td><td class="amount">100,000</td><td class="amount">300,000</td><td class="amount">—</td><td class="amount">—</td><td class="amount">8,000</td></tr>
                    <tr><td>2</td><td>Science</td><td class="amount">15,000</td><td class="amount">20,000</td><td class="amount">100,000</td><td class="amount">300,000</td><td class="amount">20,000</td><td class="amount">10,000</td><td class="amount">8,000</td></tr>
                </tbody>
            </table>
        </div>

        {{-- ═══════════════ UNDERGRADUATE FRESH ═══════════════ --}}
        <div class="fee-section active" id="undergraduate">
            <div class="fee-card">
                <h3>Undergraduate — Fresh Students (100 Level / DE)</h3>
                <p>Approved school fees for newly admitted undergraduate students for the 2026/2027 academic session, organised by college.</p>
            </div>

            <table class="fee-table">
                <thead><tr><th style="width:40px">#</th><th>Programme</th><th class="amount">Amount (₦)</th></tr></thead>
                <tbody>
                    {{-- College of Arts and Education --}}
                    <tr class="group-row"><td colspan="3">College of Arts and Education (COAED)</td></tr>
                    <tr><td>1</td><td>B.A Arabic</td><td class="amount">319,000</td></tr>
                    <tr><td>2</td><td>B.A Islamic Studies</td><td class="amount">319,000</td></tr>
                    <tr><td>3</td><td>B.A English</td><td class="amount">481,800</td></tr>
                    <tr><td>4</td><td>B.A French</td><td class="amount">481,800</td></tr>
                    <tr><td>5</td><td>B.A Linguistics</td><td class="amount">481,800</td></tr>
                    <tr><td>6</td><td>B.A History and International Studies</td><td class="amount">481,800</td></tr>
                    <tr><td>7</td><td>B.A. (Ed) Arabic Language</td><td class="amount">330,000</td></tr>
                    <tr><td>8</td><td>B.A. (Ed) English Language</td><td class="amount">330,000</td></tr>
                    <tr><td>9</td><td>B.A. (Ed) Islamic Studies</td><td class="amount">330,000</td></tr>
                    <tr><td>10</td><td>B.Sc. (Ed) Computer Science</td><td class="amount">330,000</td></tr>
                    <tr><td>11</td><td>B.Sc. (Ed) Economics</td><td class="amount">330,000</td></tr>

                    {{-- College of Management and Social Sciences --}}
                    <tr class="group-row"><td colspan="3">College of Management and Social Sciences (COMAS)</td></tr>
                    <tr><td>12</td><td>B.Sc. Accounting</td><td class="amount">766,656</td></tr>
                    <tr><td>13</td><td>B.Sc. Banking and Finance</td><td class="amount">766,656</td></tr>
                    <tr><td>14</td><td>B.Sc. Business Administration</td><td class="amount">766,656</td></tr>
                    <tr><td>15</td><td>B.Sc. Economics</td><td class="amount">766,656</td></tr>
                    <tr><td>16</td><td>B.Sc. Political Science</td><td class="amount">766,656</td></tr>
                    <tr><td>17</td><td>B.Sc. Public Administration</td><td class="amount">766,656</td></tr>
                    <tr><td>18</td><td>B.Sc. Sociology</td><td class="amount">766,656</td></tr>
                    <tr><td>19</td><td>B.Sc. Criminology and Security Studies</td><td class="amount">766,656</td></tr>
                    <tr><td>20</td><td>B.Sc. Library and Information Science</td><td class="amount">766,656</td></tr>
                    <tr><td>21</td><td>B.Sc. Mass Communication</td><td class="amount">832,656</td></tr>

                    {{-- College of Natural and Applied Sciences --}}
                    <tr class="group-row"><td colspan="3">College of Natural and Applied Sciences (CONAS)</td></tr>
                    <tr><td>22</td><td>B.Sc. Physics with Electronics</td><td class="amount">638,000</td></tr>
                    <tr><td>23</td><td>B.Sc. Electronics and Communications</td><td class="amount">638,000</td></tr>
                    <tr><td>24</td><td>B.Sc. Electronics and Computer Systems</td><td class="amount">638,000</td></tr>
                    <tr><td>25</td><td>B.Sc. Microbiology</td><td class="amount">638,880</td></tr>
                    <tr><td>26</td><td>B.Sc. Biochemistry and Nutrition</td><td class="amount">638,880</td></tr>
                    <tr><td>27</td><td>B.Sc. Food Science</td><td class="amount">638,880</td></tr>
                    <tr><td>28</td><td>B.Sc. Industrial and Environmental Chemistry</td><td class="amount">638,880</td></tr>
                    <tr><td>29</td><td>B.Sc. Computer Science</td><td class="amount">806,256</td></tr>
                    <tr><td>30</td><td>B.Sc. Cybersecurity</td><td class="amount">806,256</td></tr>
                    <tr><td>31</td><td>B.Sc. Software Engineering</td><td class="amount">806,256</td></tr>
                    <tr><td>32</td><td>B.Sc. Information and Communication Tech</td><td class="amount">806,256</td></tr>

                    {{-- College of Basic Medical and Health Sciences --}}
                    <tr class="group-row"><td colspan="3">College of Basic Medical and Health Sciences (COBMHES)</td></tr>
                    <tr><td>33</td><td>BMLS. Medical Laboratory Science</td><td class="amount">1,817,640</td></tr>
                    <tr><td>34</td><td>B.NSc. Nursing Science</td><td class="amount">2,127,125</td></tr>
                    <tr><td>35</td><td>B.Sc. Public Health</td><td class="amount">1,003,872</td></tr>
                    <tr><td>36</td><td>B.Sc. Environmental Health Sciences</td><td class="amount">718,740</td></tr>
                    <tr><td>37</td><td>Doctor of Physiotherapy (DPT)</td><td class="amount">1,831,700</td></tr>

                    {{-- College of Law --}}
                    <tr class="group-row"><td colspan="3">College of Law (COLAW)</td></tr>
                    <tr><td>38</td><td>Law</td><td class="amount">2,127,125</td></tr>
                </tbody>
            </table>
        </div>

        {{-- ═══════════════ RETURNING UNDERGRADUATE ═══════════════ --}}
        <div class="fee-section" id="returning">
            <div class="fee-card">
                <h3>Undergraduate — Returning Students (200L – 500L)</h3>
                <p>Approved school fees for returning undergraduate students by level for the 2026/2027 academic session.</p>
            </div>

            <table class="fee-table">
                <thead><tr><th style="width:40px">#</th><th>Programme</th><th class="amount">200L (₦)</th><th class="amount">300L (₦)</th><th class="amount">400L (₦)</th><th class="amount">500L (₦)</th></tr></thead>
                <tbody>
                    {{-- College of Arts and Education --}}
                    <tr class="group-row"><td colspan="6">College of Arts and Education (COAED)</td></tr>
                    <tr><td>1</td><td>B.A Arabic</td><td class="amount">304,500</td><td class="amount">304,500</td><td class="amount">304,500</td><td class="amount">—</td></tr>
                    <tr><td>2</td><td>B.A Islamic Studies</td><td class="amount">304,500</td><td class="amount">304,500</td><td class="amount">304,500</td><td class="amount">—</td></tr>
                    <tr><td>3</td><td>B.A English</td><td class="amount">459,900</td><td class="amount">459,900</td><td class="amount">450,450</td><td class="amount">—</td></tr>
                    <tr><td>4</td><td>B.A French</td><td class="amount">459,900</td><td class="amount">459,900</td><td class="amount">450,450</td><td class="amount">—</td></tr>
                    <tr><td>5</td><td>B.A Linguistics</td><td class="amount">459,900</td><td class="amount">459,900</td><td class="amount">450,450</td><td class="amount">—</td></tr>
                    <tr><td>6</td><td>B.A History and International Studies</td><td class="amount">459,900</td><td class="amount">459,900</td><td class="amount">304,500</td><td class="amount">—</td></tr>
                    <tr><td>7</td><td>B.A. (Ed) Arabic Language</td><td class="amount">315,000</td><td class="amount">315,000</td><td class="amount">315,000</td><td class="amount">—</td></tr>
                    <tr><td>8</td><td>B.A. (Ed) English Language</td><td class="amount">315,000</td><td class="amount">315,000</td><td class="amount">315,000</td><td class="amount">—</td></tr>
                    <tr><td>9</td><td>B.A. (Ed) Islamic Studies</td><td class="amount">315,000</td><td class="amount">315,000</td><td class="amount">315,000</td><td class="amount">—</td></tr>
                    <tr><td>10</td><td>B.Sc. (Ed) Computer Science</td><td class="amount">315,000</td><td class="amount">315,000</td><td class="amount">315,000</td><td class="amount">—</td></tr>
                    <tr><td>11</td><td>B.Sc. (Ed) Economics</td><td class="amount">315,000</td><td class="amount">315,000</td><td class="amount">315,000</td><td class="amount">—</td></tr>

                    {{-- College of Management and Social Sciences --}}
                    <tr class="group-row"><td colspan="6">College of Management and Social Sciences (COMAS)</td></tr>
                    <tr><td>12</td><td>B.Sc. Accounting</td><td class="amount">731,808</td><td class="amount">609,840</td><td class="amount">559,020</td><td class="amount">—</td></tr>
                    <tr><td>13</td><td>B.Sc. Banking and Finance</td><td class="amount">731,808</td><td class="amount">609,840</td><td class="amount">559,020</td><td class="amount">—</td></tr>
                    <tr><td>14</td><td>B.Sc. Business Administration</td><td class="amount">731,808</td><td class="amount">609,840</td><td class="amount">559,020</td><td class="amount">—</td></tr>
                    <tr><td>15</td><td>B.Sc. Economics</td><td class="amount">731,808</td><td class="amount">609,840</td><td class="amount">559,020</td><td class="amount">—</td></tr>
                    <tr><td>16</td><td>B.Sc. Political Science</td><td class="amount">731,808</td><td class="amount">609,840</td><td class="amount">559,020</td><td class="amount">—</td></tr>
                    <tr><td>17</td><td>B.Sc. Public Administration</td><td class="amount">731,808</td><td class="amount">609,840</td><td class="amount">559,020</td><td class="amount">—</td></tr>
                    <tr><td>18</td><td>B.Sc. Sociology</td><td class="amount">731,808</td><td class="amount">609,840</td><td class="amount">559,020</td><td class="amount">—</td></tr>
                    <tr><td>19</td><td>B.Sc. Criminology and Security Studies</td><td class="amount">731,808</td><td class="amount">609,840</td><td class="amount">559,020</td><td class="amount">—</td></tr>
                    <tr><td>20</td><td>B.Sc. Library and Information Science</td><td class="amount">731,808</td><td class="amount">731,808</td><td class="amount">—</td><td class="amount">—</td></tr>
                    <tr><td>21</td><td>B.Sc. Mass Communication</td><td class="amount">794,808</td><td class="amount">609,840</td><td class="amount">559,020</td><td class="amount">—</td></tr>

                    {{-- College of Natural and Applied Sciences --}}
                    <tr class="group-row"><td colspan="6">College of Natural and Applied Sciences (CONAS)</td></tr>
                    <tr><td>22</td><td>B.Sc. Physics with Electronics</td><td class="amount">609,000</td><td class="amount">609,840</td><td class="amount">559,020</td><td class="amount">—</td></tr>
                    <tr><td>23</td><td>B.Sc. Electronics and Communications</td><td class="amount">609,000</td><td class="amount">609,840</td><td class="amount">559,020</td><td class="amount">—</td></tr>
                    <tr><td>24</td><td>B.Sc. Electronics and Computer Systems</td><td class="amount">609,000</td><td class="amount">609,840</td><td class="amount">559,020</td><td class="amount">—</td></tr>
                    <tr><td>25</td><td>B.Sc. Microbiology</td><td class="amount">609,840</td><td class="amount">609,840</td><td class="amount">559,020</td><td class="amount">—</td></tr>
                    <tr><td>26</td><td>B.Sc. Biochemistry and Nutrition</td><td class="amount">609,840</td><td class="amount">609,840</td><td class="amount">559,020</td><td class="amount">—</td></tr>
                    <tr><td>27</td><td>B.Sc. Food Science</td><td class="amount">609,840</td><td class="amount">—</td><td class="amount">—</td><td class="amount">—</td></tr>
                    <tr><td>28</td><td>B.Sc. Industrial and Environmental Chemistry</td><td class="amount">609,840</td><td class="amount">609,840</td><td class="amount">559,020</td><td class="amount">—</td></tr>
                    <tr><td>29</td><td>B.Sc. Computer Science</td><td class="amount">769,608</td><td class="amount">609,840</td><td class="amount">559,020</td><td class="amount">—</td></tr>
                    <tr><td>30</td><td>B.Sc. Cybersecurity</td><td class="amount">769,608</td><td class="amount">—</td><td class="amount">—</td><td class="amount">—</td></tr>
                    <tr><td>31</td><td>B.Sc. Software Engineering</td><td class="amount">769,608</td><td class="amount">—</td><td class="amount">—</td><td class="amount">—</td></tr>
                    <tr><td>32</td><td>B.Sc. Information and Communication Tech</td><td class="amount">769,608</td><td class="amount">—</td><td class="amount">—</td><td class="amount">—</td></tr>

                    {{-- College of Basic Medical and Health Sciences --}}
                    <tr class="group-row"><td colspan="6">College of Basic Medical and Health Sciences (COBMHES)</td></tr>
                    <tr><td>33</td><td>BMLS. Medical Laboratory Science</td><td class="amount">1,590,435</td><td class="amount">1,178,100</td><td class="amount">1,079,925</td><td class="amount">1,079,925</td></tr>
                    <tr><td>34</td><td>B.NSc. Nursing Science</td><td class="amount">1,786,785</td><td class="amount">1,374,450</td><td class="amount">1,079,925</td><td class="amount">1,079,925</td></tr>
                    <tr><td>35</td><td>B.Sc. Public Health</td><td class="amount">878,388</td><td class="amount">680,925</td><td class="amount">623,700</td><td class="amount">—</td></tr>
                    <tr><td>36</td><td>B.Sc. Environmental Health Sciences</td><td class="amount">686,070</td><td class="amount">609,840</td><td class="amount">559,020</td><td class="amount">559,020</td></tr>
                    <tr><td>37</td><td>Doctor of Physiotherapy (DPT)</td><td class="amount">1,479,450</td><td class="amount">—</td><td class="amount">—</td><td class="amount">—</td></tr>

                    {{-- College of Law --}}
                    <tr class="group-row"><td colspan="6">College of Law (COLAW)</td></tr>
                    <tr><td>38</td><td>Law</td><td class="amount">—</td><td class="amount">1,178,100</td><td class="amount">1,016,400</td><td class="amount">1,016,400</td></tr>
                </tbody>
            </table>
        </div>

        {{-- ═══════════════ OTHER FEES & CHARGES ═══════════════ --}}
        <div class="fee-section" id="otherfees">
            <div class="fee-card">
                <h3>Other Fees & Charges</h3>
                <p>Additional fees, charges, and penalties applicable to all students for the 2026/2027 session.</p>
            </div>

            <h4 class="fee-subtitle">Application & Acceptance Fees</h4>
            <table class="fee-table">
                <thead><tr><th style="width:40px">#</th><th>Description</th><th class="amount">Amount (₦)</th></tr></thead>
                <tbody>
                    <tr><td>1</td><td>Application Form — Regular UG Students</td><td class="amount">2,000</td></tr>
                    <tr><td>2</td><td>Application Form — Certificate</td><td class="amount">20,000</td></tr>
                    <tr><td>3</td><td>Application Form — Conversion/Top-Up</td><td class="amount">15,000</td></tr>
                    <tr><td>4</td><td>Application Form — Postgraduate</td><td class="amount">20,000</td></tr>
                    <tr><td>5</td><td>Application Form — Diploma DAIS</td><td class="amount">5,000</td></tr>
                    <tr><td>6</td><td>Acceptance Fee — Undergraduate (Regular)</td><td class="amount">75,000</td></tr>
                    <tr><td>7</td><td>Acceptance Fee — Top-Up / Conversion</td><td class="amount">75,000</td></tr>
                    <tr><td>8</td><td>Acceptance Fee — Postgraduate</td><td class="amount">100,000</td></tr>
                    <tr><td>9</td><td>Acceptance Fee — Diploma DAIS</td><td class="amount">10,000</td></tr>
                </tbody>
            </table>

            <h4 class="fee-subtitle">Matriculation &amp; General Charges</h4>
            <table class="fee-table">
                <thead><tr><th style="width:40px">#</th><th>Description</th><th class="amount">Amount (₦)</th></tr></thead>
                <tbody>
                    <tr><td>1</td><td>Memorabilia Fee</td><td class="amount">25,000</td></tr>
                    <tr><td>2</td><td>Medical Test (Clinic)</td><td class="amount">30,000</td></tr>
                    <tr><td>3</td><td>Drug Screening</td><td class="amount">30,000</td></tr>
                    <tr><td>4</td><td>Laboratory Coat</td><td class="amount">10,000</td></tr>
                    <tr><td>5</td><td>Practical Manual — Science-Based 100 Level Students</td><td class="amount">10,000</td></tr>
                    <tr><td>6</td><td>Matric Gown Rent — Undergraduate</td><td class="amount">5,000</td></tr>
                    <tr><td>7</td><td>Matric Gown Rent — Diploma DAIS</td><td class="amount">3,000</td></tr>
                    <tr><td>8</td><td>Portal Access Fee</td><td class="amount">8,000</td></tr>
                    <tr><td>9</td><td>GNS Registration Fee</td><td class="amount">3,000</td></tr>
                    <tr><td>10</td><td>Entrepreneurial Levy (200–400 Level)</td><td class="amount">15,000</td></tr>
                    <tr><td>11</td><td>Convocation Levy — Undergraduate</td><td class="amount">75,000</td></tr>
                    <tr><td>12</td><td>Convocation Levy — Diploma</td><td class="amount">20,000</td></tr>
                    <tr><td>13</td><td>Binding of Student Projects — Undergraduate</td><td class="amount">10,000</td></tr>
                </tbody>
            </table>

            <h4 class="fee-subtitle">Professional &amp; Clinical Fees</h4>
            <table class="fee-table">
                <thead><tr><th style="width:40px">#</th><th>Description</th><th class="amount">Amount (₦)</th></tr></thead>
                <tbody>
                    <tr><td>1</td><td>Laboratory Fee — COBMEHS &amp; CONAS (100 Level)</td><td class="amount">40,000</td></tr>
                    <tr><td>2</td><td>Laboratory Fee — COBMEHS &amp; CONAS (200–300 Level)</td><td class="amount">50,000</td></tr>
                    <tr><td>3</td><td>Laboratory Fee — CONAS &amp; COBMEHS (400L: Computer Science, Nursing &amp; MLS)</td><td class="amount">50,000</td></tr>
                    <tr><td>4</td><td>Laboratory Fee — CONAS &amp; COBMEHS (500L: Nursing, MLS &amp; EHS)</td><td class="amount">80,000</td></tr>
                    <tr><td>5</td><td>Psychiatric/Mental Health Clinical Posting</td><td class="amount">120,000</td></tr>
                    <tr><td>6</td><td>Nursing Science — Induction Fees</td><td class="amount">220,000</td></tr>
                    <tr><td>7</td><td>Medical Laboratory Science — Induction Fees</td><td class="amount">150,000</td></tr>
                    <tr><td>8</td><td>Nursing Science Indexing — Basic</td><td class="amount">15,000</td></tr>
                    <tr><td>9</td><td>Nursing Science Indexing — Midwifery</td><td class="amount">20,000</td></tr>
                    <tr><td>10</td><td>MLSCN Indexing — One Sitting</td><td class="amount">55,000</td></tr>
                    <tr><td>11</td><td>MLSCN Indexing — Two Sittings</td><td class="amount">60,000</td></tr>
                    <tr><td>12</td><td>Studio Fee — Mass Communication (Regular)</td><td class="amount">50,000</td></tr>
                    <tr><td>13</td><td>Studio Fee — Mass Communication (Conversion)</td><td class="amount">50,000</td></tr>
                </tbody>
            </table>

            <h4 class="fee-subtitle">Transcripts &amp; Certificates</h4>
            <table class="fee-table">
                <thead><tr><th style="width:40px">#</th><th>Description</th><th class="amount">Amount (₦)</th></tr></thead>
                <tbody>
                    <tr><td>1</td><td>Transcript — Local</td><td class="amount">75,000</td></tr>
                    <tr><td>2</td><td>Transcript — Foreign</td><td class="amount">150,000</td></tr>
                    <tr><td>3</td><td>Transcript — Non-Graduate</td><td class="amount">400,000</td></tr>
                    <tr><td>4</td><td>Medium of Instruction Letter</td><td class="amount">25,000</td></tr>
                </tbody>
            </table>

            <h4 class="fee-subtitle">Fines &amp; Penalties</h4>
            <table class="fee-table">
                <thead><tr><th style="width:40px">#</th><th>Description</th><th class="amount">Amount (₦)</th></tr></thead>
                <tbody>
                    <tr><td>1</td><td>Late Registration</td><td class="amount">25,000</td></tr>
                    <tr><td>2</td><td>Loss of Identity Card</td><td class="amount">10,000</td></tr>
                    <tr><td>3</td><td>Loss of Exeat Card</td><td class="amount">2,500</td></tr>
                    <tr><td>4</td><td>Loss of Certificate (Certified T/C)</td><td class="amount">50,000</td></tr>
                    <tr><td>5</td><td>Change of Course / Intra-University Transfer Form</td><td class="amount">25,000</td></tr>
                </tbody>
            </table>

            <h4 class="fee-subtitle">Summer / Make-Up Examination</h4>
            <table class="fee-table">
                <thead><tr><th style="width:40px">#</th><th>Description</th><th class="amount">Amount (₦)</th></tr></thead>
                <tbody>
                    <tr><td>1</td><td>Summer Fee (Per Course)</td><td class="amount">75,000</td></tr>
                    <tr><td>2</td><td>Accommodation Charges (Summer)</td><td class="amount">30,000</td></tr>
                    <tr><td>3</td><td>Administrative Charges (Summer)</td><td class="amount">10,000</td></tr>
                    <tr><td>4</td><td>Administrative Charges (Make-Up)</td><td class="amount">20,000</td></tr>
                </tbody>
            </table>

            <h4 class="fee-subtitle">Inter-University Transfer (IUT)</h4>
            <table class="fee-table">
                <thead><tr><th style="width:40px">#</th><th>Description</th><th class="amount">Amount (₦)</th></tr></thead>
                <tbody>
                    <tr><td>1</td><td>Application Form — Nursing Science</td><td class="amount">350,000</td></tr>
                    <tr><td>2</td><td>Application Form — Law</td><td class="amount">350,000</td></tr>
                    <tr><td>3</td><td>Application Form — MLS</td><td class="amount">200,000</td></tr>
                    <tr><td>4</td><td>Application Form — Other Programmes</td><td class="amount">50,000</td></tr>
                    <tr><td>5</td><td>Acceptance Fee — All IUT Students</td><td class="amount">75,000</td></tr>
                </tbody>
            </table>

            <h4 class="fee-subtitle">Parents Forum Levy</h4>
            <table class="fee-table">
                <thead><tr><th></th><th>Category</th><th class="amount">Amount (₦)</th></tr></thead>
                <tbody>
                    <tr><td></td><td>Fresher</td><td class="amount">30,000</td></tr>
                    <tr><td></td><td>Returning</td><td class="amount">20,000</td></tr>
                </tbody>
            </table>

            <div class="fee-note"><strong>Note:</strong> All fees are as approved by the University Management for the 2026/2027 academic session. For enquiries, contact the Bursary Unit.</div>
        </div>

        {{-- ═══════════════ TOP-UP / PART-TIME ═══════════════ --}}
        <div class="fee-section" id="topup">
            <div class="fee-card">
                <h3>Top-Up / Conversion &amp; Part-Time Programmes</h3>
                <p>Approved fees for fresh and returning students in Top-Up, Conversion, and Part-Time programmes.</p>
            </div>

            <h4 class="fee-subtitle">Fresh Students</h4>
            <table class="fee-table">
                <thead><tr><th style="width:40px">S/N</th><th>Programme</th><th class="amount">Amount (₦)</th></tr></thead>
                <tbody>
                    <tr><td>A</td><td>Top-Up / Conversion — COMAS</td><td class="amount">369,600</td></tr>
                    <tr><td>B</td><td>Top-Up / Conversion — CONAS</td><td class="amount">384,000</td></tr>
                    <tr><td>C</td><td>Top-Up / Conversion — Environmental Health Science &amp; Public Health</td><td class="amount">397,600</td></tr>
                    <tr><td>D</td><td>Part-Time — COMAS</td><td class="amount">252,000</td></tr>
                    <tr><td>E</td><td>Part-Time — CONAS</td><td class="amount">276,000</td></tr>
                </tbody>
            </table>

            <h4 class="fee-subtitle">Returning Students</h4>
            <table class="fee-table">
                <thead><tr><th style="width:40px">S/N</th><th>Programme</th><th class="amount">Amount (₦)</th></tr></thead>
                <tbody>
                    <tr><td>A</td><td>Top-Up / Conversion — COMAS</td><td class="amount">277,200</td></tr>
                    <tr><td>B</td><td>Top-Up / Conversion — CONAS</td><td class="amount">298,200</td></tr>
                    <tr><td>C</td><td>Top-Up / Conversion — COBMEHS</td><td class="amount">298,200</td></tr>
                    <tr><td>D</td><td>Part-Time — COMAS</td><td class="amount">203,700</td></tr>
                    <tr><td>E</td><td>Part-Time — CONAS</td><td class="amount">224,700</td></tr>
                </tbody>
            </table>
        </div>

        {{-- ═══════════════ POSTGRADUATE ═══════════════ --}}
        <div class="fee-section" id="postgraduate">
            <div class="fee-card">
                <h3>Postgraduate Programmes</h3>
                <p>Approved fees for fresh and returning postgraduate students (per semester).</p>
            </div>

            <h4 class="fee-subtitle">Fresh Students</h4>
            <table class="fee-table">
                <thead><tr><th style="width:40px">S/N</th><th>Programme</th><th class="amount">Amount (₦) / Semester</th></tr></thead>
                <tbody>
                    <tr><td>A</td><td>Postgraduate Programmes — Masters and Ph.D</td><td class="amount">275,000</td></tr>
                    <tr><td>B</td><td>Postgraduate Programmes — Postgraduate Diploma (PGD)</td><td class="amount">132,000</td></tr>
                </tbody>
            </table>

            <h4 class="fee-subtitle">Returning Students</h4>
            <table class="fee-table">
                <thead><tr><th style="width:40px">S/N</th><th>Programme</th><th class="amount">Amount (₦) / Semester</th></tr></thead>
                <tbody>
                    <tr><td>A</td><td>Masters and Ph.D (Per Semester)</td><td class="amount">262,500</td></tr>
                    <tr><td>B</td><td>Postgraduate Diploma (Per Semester)</td><td class="amount">126,000</td></tr>
                </tbody>
            </table>

            <div class="fee-note"><strong>Note:</strong> Postgraduate fees are charged per semester. Convocation levy: PGD/Masters — ₦100,000; Ph.D — ₦200,000. Project binding: PGD/Masters/M.Phil — ₦15,000; Ph.D — ₦20,000.</div>
        </div>

        {{-- ═══════════════ SANDWICH ═══════════════ --}}
        <div class="fee-section" id="sandwich">
            <div class="fee-card">
                <h3>Sandwich Programme</h3>
                <p>Approved fees for fresh and returning sandwich students.</p>
            </div>

            <table class="fee-table">
                <thead><tr><th style="width:40px">S/N</th><th>Category</th><th class="amount">Amount (₦)</th></tr></thead>
                <tbody>
                    <tr><td>A</td><td>Sandwich — Fresh Students</td><td class="amount">198,000</td></tr>
                    <tr><td>B</td><td>Sandwich — Returning Students</td><td class="amount">189,000</td></tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection

<script>
function showTab(id, el) {
    document.querySelectorAll('.fee-section').forEach(s => s.classList.remove('active'));
    document.querySelectorAll('.fee-nav a').forEach(a => a.classList.remove('active'));
    document.getElementById(id).classList.add('active');
    if (el) el.classList.add('active');
}
</script>
