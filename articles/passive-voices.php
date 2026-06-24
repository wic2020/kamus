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
    <h2 class="section-title">Passive Voice (Kalimat Pasif)</h2>
    <p>Panduan lengkap memahami dan membentuk kalimat pasif dalam bahasa Inggris.</p>
</div>

<div class="article-content">

    <div class="pos-section">
        <h3 class="pos-title">Pengertian Passive Voice</h3>
        <p><strong>Passive Voice</strong> (kalimat pasif) adalah bentuk kalimat di mana subjek kalimat menerima aksi, bukan melakukan aksi. Fokus utama dalam kalimat pasif adalah <em>tindakan</em> atau <em>objek yang dikenai tindakan</em>, bukan siapa yang melakukannya.</p>
        
        <p>Rumus dasar untuk membentuk kalimat pasif adalah:</p>
        <div class="formula-box">Subject (Object dari kalimat aktif) + to be + Verb III (Past Participle) + (by Agent)</div>
        
        <p><strong>Catatan Penting:</strong></p>
        <ul class="note-list">
            <li>Kata kerja yang digunakan dalam Passive Voice selalu menggunakan <strong>Verb III (Past Participle)</strong>.</li>
            <li>Bentuk <strong>"to be"</strong> akan berubah-ubah sesuai dengan <em>Tense</em> (waktu kejadian) dari kalimat aslinya.</li>
            <li>Objek pada kalimat aktif berubah menjadi Subjek pada kalimat pasif.</li>
        </ul>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Perubahan Pronoun (Kata Ganti)</h3>
        <p>Ketika subjek dari kalimat aktif dipindahkan ke belakang untuk menjadi objek (pelaku/agent) di kalimat pasif, kata gantinya harus diubah menjadi <em>Object Pronoun</em>.</p>
        
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Subject Pronoun (Kalimat Aktif)</th>
                    <th>Object Pronoun (Kalimat Pasif setelah 'by')</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I</td><td>by me</td></tr>
                <tr><td>You</td><td>by you</td></tr>
                <tr><td>We</td><td>by us</td></tr>
                <tr><td>They</td><td>by them</td></tr>
                <tr><td>He</td><td>by him</td></tr>
                <tr><td>She</td><td>by her</td></tr>
                <tr><td>It</td><td>by it</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Pembentukan Passive Voice Berdasarkan Tense</h3>
        
        <h4 class="pos-subtitle">1. Simple Present Tense</h4>
        <p>Formula to be: <strong>am / is / are</strong></p>
        <div class="formula-box">S + am/is/are + Verb III</div>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Active Voice</th>
                    <th>Passive Voice</th>
                    <th>Arti (Pasif)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>She <strong>writes</strong> a letter.</td>
                    <td>A letter <strong>is written</strong> by her.</td>
                    <td>Sebuah surat ditulis olehnya.</td>
                </tr>
                <tr>
                    <td>They <strong>clean</strong> the rooms.</td>
                    <td>The rooms <strong>are cleaned</strong> by them.</td>
                    <td>Ruangan-ruangan dibersihkan oleh mereka.</td>
                </tr>
                <tr>
                    <td>I <strong>eat</strong> an apple.</td>
                    <td>An apple <strong>is eaten</strong> by me.</td>
                    <td>Sebuah apel dimakan oleh saya.</td>
                </tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">2. Present Continuous Tense</h4>
        <p>Formula to be: <strong>am/is/are + being</strong></p>
        <div class="formula-box">S + am/is/are + being + Verb III</div>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Active Voice</th>
                    <th>Passive Voice</th>
                    <th>Arti (Pasif)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>He <strong>is reading</strong> a book.</td>
                    <td>A book <strong>is being read</strong> by him.</td>
                    <td>Sebuah buku sedang dibaca olehnya.</td>
                </tr>
                <tr>
                    <td>They <strong>are building</strong> a house.</td>
                    <td>A house <strong>is being built</strong> by them.</td>
                    <td>Sebuah rumah sedang dibangun oleh mereka.</td>
                </tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">3. Simple Past Tense</h4>
        <p>Formula to be: <strong>was / were</strong></p>
        <div class="formula-box">S + was/were + Verb III</div>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Active Voice</th>
                    <th>Passive Voice</th>
                    <th>Arti (Pasif)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>He <strong>bought</strong> a new car.</td>
                    <td>A new car <strong>was bought</strong> by him.</td>
                    <td>Sebuah mobil baru dibeli olehnya.</td>
                </tr>
                <tr>
                    <td>Someone <strong>stole</strong> my wallet.</td>
                    <td>My wallet <strong>was stolen</strong>.</td>
                    <td>Dompet saya dicuri.</td>
                </tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">4. Past Continuous Tense</h4>
        <p>Formula to be: <strong>was/were + being</strong></p>
        <div class="formula-box">S + was/were + being + Verb III</div>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Active Voice</th>
                    <th>Passive Voice</th>
                    <th>Arti (Pasif)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>She <strong>was cooking</strong> dinner.</td>
                    <td>Dinner <strong>was being cooked</strong> by her.</td>
                    <td>Makan malam sedang dimasak olehnya (di masa lalu).</td>
                </tr>
                <tr>
                    <td>They <strong>were playing</strong> chess.</td>
                    <td>Chess <strong>was being played</strong> by them.</td>
                    <td>Catur sedang dimainkan oleh mereka (di masa lalu).</td>
                </tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">5. Present Perfect Tense</h4>
        <p>Formula to be: <strong>have/has + been</strong></p>
        <div class="formula-box">S + have/has + been + Verb III</div>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Active Voice</th>
                    <th>Passive Voice</th>
                    <th>Arti (Pasif)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>I <strong>have finished</strong> the work.</td>
                    <td>The work <strong>has been finished</strong> by me.</td>
                    <td>Pekerjaan itu telah diselesaikan oleh saya.</td>
                </tr>
                <tr>
                    <td>She <strong>has sent</strong> the emails.</td>
                    <td>The emails <strong>have been sent</strong> by her.</td>
                    <td>Email-email tersebut telah dikirim olehnya.</td>
                </tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">6. Simple Future Tense</h4>
        <p>Formula to be: <strong>will be</strong></p>
        <div class="formula-box">S + will be + Verb III</div>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Active Voice</th>
                    <th>Passive Voice</th>
                    <th>Arti (Pasif)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>I <strong>will write</strong> a letter.</td>
                    <td>A letter <strong>will be written</strong> by me.</td>
                    <td>Sebuah surat akan ditulis oleh saya.</td>
                </tr>
                <tr>
                    <td>The manager <strong>will sign</strong> the contract.</td>
                    <td>The contract <strong>will be signed</strong> by the manager.</td>
                    <td>Kontrak tersebut akan ditandatangani oleh manajer.</td>
                </tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">7. Modals (Can, Must, May, Should, dll)</h4>
        <p>Formula to be: <strong>Modal + be</strong></p>
        <div class="formula-box">S + Modal + be + Verb III</div>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Active Voice</th>
                    <th>Passive Voice</th>
                    <th>Arti (Pasif)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>You <strong>must pay</strong> the bill.</td>
                    <td>The bill <strong>must be paid</strong> by you.</td>
                    <td>Tagihan itu harus dibayar olehmu.</td>
                </tr>
                <tr>
                    <td>They <strong>can solve</strong> the problem.</td>
                    <td>The problem <strong>can be solved</strong> by them.</td>
                    <td>Masalah itu dapat diselesaikan oleh mereka.</td>
                </tr>
                <tr>
                    <td>We <strong>should clean</strong> the house.</td>
                    <td>The house <strong>should be cleaned</strong> by us.</td>
                    <td>Rumah tersebut seharusnya dibersihkan oleh kita.</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

<div class="back-nav">
    <a href="index.php?hal=grammar" class="btn-secondary">← Kembali ke Materi Grammar</a>
</div>