<?php
// Mencegah akses langsung tanpa melalui index.php
if(count(get_included_files()) == 1) die("Akses Ditolak!");
?>

<style>
    .article-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .article-header p {
        color: var(--text-gray);
        font-size: 1.1rem;
        margin-top: -20px;
    }

    .article-content {
        color: var(--dark);
        line-height: 1.8;
    }

    .article-content p {
        margin-bottom: 15px;
        color: #475569;
    }

    .pos-section {
        margin-top: 40px;
        padding-bottom: 20px;
        border-bottom: 1px solid #e2e8f0;
    }

    .pos-section:last-of-type {
        border-bottom: none;
    }

    .pos-title {
        color: var(--primary);
        font-size: 1.5rem;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .pos-subtitle {
        color: var(--dark);
        font-size: 1.2rem;
        font-weight: 600;
        margin-top: 25px;
        margin-bottom: 10px;
    }

    /* Styling untuk Tabel */
    .pos-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
        margin-bottom: 25px;
        background: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        border: 1px solid #e2e8f0;
    }

    .pos-table th {
        background-color: var(--primary);
        color: white;
        padding: 12px 15px;
        text-align: left;
        font-weight: 600;
    }

    .pos-table td {
        padding: 12px 15px;
        border-bottom: 1px solid #e2e8f0;
        color: var(--dark);
        vertical-align: top;
    }

    .pos-table tr:last-child td {
        border-bottom: none;
    }

    .pos-table tbody tr:nth-child(even) {
        background-color: #f8fafc;
    }

    .pos-table tbody tr:hover {
        background-color: #f1f5f9;
    }

    .note-list {
        margin-left: 20px;
        margin-bottom: 15px;
        color: #475569;
    }

    .note-list li {
        margin-bottom: 5px;
    }

    .formula-box {
        background: var(--light);
        border-left: 4px solid var(--secondary);
        padding: 15px 20px;
        border-radius: 0 10px 10px 0;
        margin: 15px 0;
        font-weight: bold;
        color: var(--primary);
        font-size: 1.1rem;
    }

    .back-nav {
        margin-top: 50px;
        text-align: center;
        border-top: 2px dashed #e2e8f0;
        padding-top: 30px;
    }
</style>

<div class="article-header">
    <h2 class="section-title">Gerund and Infinitive</h2>
    <p>Panduan memahami penggunaan kata kerja yang berfungsi sebagai kata benda dalam kalimat.</p>
</div>

<div class="article-content">

    <div class="pos-section">
        <p>Dalam bahasa Inggris, terkadang sebuah kata kerja (Verb) harus diubah fungsinya menjadi kata benda (Noun) agar dapat menduduki posisi sebagai Subjek atau Objek dalam kalimat. Untuk melakukan ini, kita menggunakan <strong>Gerund</strong> atau <strong>Infinitive</strong>.</p>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">1. Gerund</h3>
        <p><strong>Gerund</strong> adalah kata kerja (Verb) yang ditambah akhiran <strong>-ing</strong> sehingga fungsinya berubah menjadi kata benda (Noun).</p>

        <h4 class="pos-subtitle">Formula</h4>
        <div class="formula-box">Verb + ing (contoh: swimming, reading, eating)</div>

        <h4 class="pos-subtitle">Fungsi Gerund dalam Kalimat</h4>
        <ul class="note-list">
            <li><strong>Sebagai Subjek:</strong> <em>Swimming</em> is a good exercise. (Berenang adalah olahraga yang baik.)</li>
            <li><strong>Sebagai Objek:</strong> I love <em>reading</em>. (Saya suka membaca.)</li>
            <li><strong>Setelah Preposisi:</strong> She is good at <em>painting</em>. (Dia pandai melukis.)</li>
        </ul>

        <h4 class="pos-subtitle">Kata Kerja yang Diikuti Gerund</h4>
        <p>Beberapa kata kerja (verb) tertentu <strong>harus</strong> diikuti oleh Gerund jika ada kata kerja lain yang menyertainya.</p>
        
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Verb (Kata Kerja)</th>
                    <th>Artinya</th>
                    <th>Contoh Kalimat</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>enjoy</td><td>menikmati</td><td>I enjoy <strong>playing</strong> tennis.</td></tr>
                <tr><td>avoid</td><td>menghindari</td><td>He avoids <strong>eating</strong> junk food.</td></tr>
                <tr><td>mind</td><td>keberatan</td><td>Do you mind <strong>opening</strong> the window?</td></tr>
                <tr><td>finish</td><td>menyelesaikan</td><td>She has finished <strong>writing</strong> the report.</td></tr>
                <tr><td>suggest</td><td>menyarankan</td><td>They suggest <strong>taking</strong> a train.</td></tr>
                <tr><td>keep</td><td>terus (melakukan)</td><td>Keep <strong>practicing</strong>!</td></tr>
                <tr><td>consider</td><td>mempertimbangkan</td><td>We consider <strong>moving</strong> to another city.</td></tr>
                <tr><td>deny</td><td>membantah</td><td>He denied <strong>stealing</strong> the money.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">2. To-Infinitive</h3>
        <p><strong>To-Infinitive</strong> adalah bentuk dasar kata kerja (Verb 1) yang diawali dengan kata <strong>to</strong>. Fungsinya juga dapat sebagai kata benda, kata sifat, atau kata keterangan.</p>

        <h4 class="pos-subtitle">Formula</h4>
        <div class="formula-box">To + Verb I (contoh: to swim, to read, to eat)</div>

        <h4 class="pos-subtitle">Fungsi To-Infinitive dalam Kalimat</h4>
        <ul class="note-list">
            <li><strong>Sebagai Subjek:</strong> <em>To learn</em> is important. (Belajar itu penting.)</li>
            <li><strong>Sebagai Objek:</strong> I want <em>to go</em>. (Saya ingin pergi.)</li>
            <li><strong>Setelah Adjective (Kata Sifat):</strong> It is easy <em>to understand</em>. (Itu mudah untuk dipahami.)</li>
            <li><strong>Menyatakan Tujuan (In order to):</strong> I study hard <em>to pass</em> the exam. (Saya belajar keras untuk lulus ujian.)</li>
        </ul>

        <h4 class="pos-subtitle">Kata Kerja yang Diikuti To-Infinitive</h4>
        <p>Beberapa kata kerja (verb) tertentu <strong>harus</strong> diikuti oleh To-Infinitive.</p>
        
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Verb (Kata Kerja)</th>
                    <th>Artinya</th>
                    <th>Contoh Kalimat</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>want</td><td>ingin</td><td>I want <strong>to buy</strong> a new car.</td></tr>
                <tr><td>need</td><td>butuh</td><td>She needs <strong>to sleep</strong> early.</td></tr>
                <tr><td>decide</td><td>memutuskan</td><td>They decided <strong>to stay</strong> at home.</td></tr>
                <tr><td>hope</td><td>berharap</td><td>We hope <strong>to see</strong> you soon.</td></tr>
                <tr><td>plan</td><td>berencana</td><td>He plans <strong>to travel</strong> next year.</td></tr>
                <tr><td>agree</td><td>setuju</td><td>She agreed <strong>to help</strong> me.</td></tr>
                <tr><td>promise</td><td>berjanji</td><td>I promise <strong>to call</strong> you.</td></tr>
                <tr><td>refuse</td><td>menolak</td><td>He refused <strong>to answer</strong> the question.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">3. Gerund vs Infinitive</h3>
        <p>Ada beberapa kata kerja yang bisa diikuti oleh <strong>Gerund</strong> maupun <strong>To-Infinitive</strong>. Beberapa di antaranya tidak merubah makna, namun ada juga yang maknanya berubah drastis.</p>

        <h4 class="pos-subtitle">A. Tanpa Perubahan Makna</h4>
        <p>Kata kerja seperti <strong>start, begin, continue, like, love, hate</strong> bisa menggunakan keduanya tanpa mengubah arti kalimat secara signifikan.</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Gerund</th>
                    <th>To-Infinitive</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>It started <strong>raining</strong>.</td><td>It started <strong>to rain</strong>.</td></tr>
                <tr><td>I like <strong>reading</strong>.</td><td>I like <strong>to read</strong>.</td></tr>
                <tr><td>She continues <strong>working</strong>.</td><td>She continues <strong>to work</strong>.</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">B. Dengan Perubahan Makna (Sangat Penting!)</h4>
        <p>Beberapa kata kerja maknanya akan <strong>berubah</strong> tergantung apakah ia diikuti Gerund atau To-Infinitive. Kata-kata tersebut antara lain: <strong>stop, remember, forget, regret, try</strong>.</p>
        
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Verb</th>
                    <th>Diikuti Gerund (V-ing)</th>
                    <th>Diikuti To-Infinitive (To + V1)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Stop</strong></td>
                    <td><strong>Berhenti melakukan kebiasaan/aktivitas tersebut.</strong><br><em>Contoh:</em> He stopped <strong>smoking</strong>.<br>(Dia berhenti merokok / tidak merokok lagi).</td>
                    <td><strong>Berhenti dari aktivitas lain untuk melakukan hal tersebut.</strong><br><em>Contoh:</em> He stopped <strong>to smoke</strong>.<br>(Dia berhenti berjalan/bekerja <em>untuk</em> merokok).</td>
                </tr>
                <tr>
                    <td><strong>Remember</strong></td>
                    <td><strong>Ingat telah melakukan sesuatu (memori masa lalu).</strong><br><em>Contoh:</em> I remember <strong>locking</strong> the door.<br>(Saya ingat sudah mengunci pintu itu).</td>
                    <td><strong>Ingat untuk melakukan sesuatu (tugas/ke depan).</strong><br><em>Contoh:</em> Remember <strong>to lock</strong> the door!<br>(Ingatlah untuk mengunci pintu!).</td>
                </tr>
                <tr>
                    <td><strong>Forget</strong></td>
                    <td><strong>Lupa bahwa sudah melakukan sesuatu (memori masa lalu).</strong><br><em>Contoh:</em> I forgot <strong>meeting</strong> him.<br>(Saya lupa bahwa saya pernah bertemu dengannya).</td>
                    <td><strong>Lupa untuk melakukan sesuatu (tugas yang belum dikerjakan).</strong><br><em>Contoh:</em> I forgot <strong>to meet</strong> him.<br>(Saya lupa untuk bertemu dengannya / tidak jadi bertemu).</td>
                </tr>
                <tr>
                    <td><strong>Try</strong></td>
                    <td><strong>Mencoba sebagai eksperimen (melihat hasilnya).</strong><br><em>Contoh:</em> Try <strong>drinking</strong> ginger tea for your cold.<br>(Coba minum teh jahe, siapa tahu flu-mu sembuh).</td>
                    <td><strong>Berusaha keras melakukan sesuatu (ada kesulitan).</strong><br><em>Contoh:</em> I tried <strong>to open</strong> the heavy door.<br>(Saya berusaha keras untuk membuka pintu yang berat itu).</td>
                </tr>
                <tr>
                    <td><strong>Regret</strong></td>
                    <td><strong>Menyesali sesuatu yang sudah terjadi di masa lalu.</strong><br><em>Contoh:</em> I regret <strong>telling</strong> him the secret.<br>(Saya menyesal telah memberitahunya rahasia itu).</td>
                    <td><strong>Menyesal/Berat hati untuk menyampaikan kabar buruk (sekarang).</strong><br><em>Contoh:</em> I regret <strong>to inform</strong> you that you failed.<br>(Saya menyesal harus memberitahu bahwa Anda gagal).</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

<div class="back-nav">
    <a href="index.php?hal=grammar" class="btn-secondary">← Kembali ke Materi Grammar</a>
</div>