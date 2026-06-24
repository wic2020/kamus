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
    <h2 class="section-title">Modal Verbs</h2>
    <p>Memahami penggunaan kata kerja bantu untuk menyatakan kemampuan, izin, kewajiban, dan kemungkinan.</p>
</div>

<div class="article-content">

    <div class="pos-section">
        <h3 class="pos-title">Pengertian Modal Verbs</h3>
        <p><strong>Modal Verbs</strong> adalah kata kerja bantu yang memberikan makna tambahan pada kata kerja utama. Modal Verbs digunakan untuk mengekspresikan hal-hal seperti kemampuan (ability), izin (permission), kemungkinan (possibility), atau keperluan (necessity).</p>
        
        <h4 class="pos-subtitle">Aturan Umum Penggunaan Modal:</h4>
        <ul class="note-list">
            <li><strong>Tidak Berubah Bentuk:</strong> Modal tidak pernah ditambah akhiran <em>-s, -es, -ed,</em> atau <em>-ing</em> (He can, bukan He cans).</li>
            <li><strong>Diikuti Verb 1:</strong> Selalu diikuti oleh kata kerja bentuk dasar (Verb 1) tanpa tambahan "to" (kecuali <em>ought to</em> dan <em>have to</em>).</li>
            <li><strong>Bentuk Negatif:</strong> Cukup tambahkan "not" setelah modal (cannot, should not).</li>
            <li><strong>Kalimat Tanya:</strong> Pindahkan modal ke depan subjek (Can you help me?).</li>
        </ul>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Jenis-Jenis Modal Verbs</h3>

        <h4 class="pos-subtitle">1. Ability (Kemampuan)</h4>
        <p>Digunakan untuk menyatakan sesuatu yang bisa atau mampu dilakukan.</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Modal</th>
                    <th>Kegunaan</th>
                    <th>Contoh Kalimat</th>
                    <th>Arti</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Can</strong></td>
                    <td>Kemampuan saat ini (Present)</td>
                    <td>I <strong>can</strong> speak English fluently.</td>
                    <td>Saya bisa bicara bahasa Inggris dengan lancar.</td>
                </tr>
                <tr>
                    <td><strong>Could</strong></td>
                    <td>Kemampuan di masa lalu (Past)</td>
                    <td>She <strong>could</strong> swim when she was five.</td>
                    <td>Dia bisa berenang ketika dia berumur lima tahun.</td>
                </tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">2. Permission (Izin)</h4>
        <p>Digunakan untuk meminta atau memberi izin.</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Modal</th>
                    <th>Kegunaan</th>
                    <th>Contoh Kalimat</th>
                    <th>Arti</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Can</strong></td>
                    <td>Informal / santai</td>
                    <td><strong>Can</strong> I borrow your pen?</td>
                    <td>Boleh aku pinjam pulpenmu?</td>
                </tr>
                <tr>
                    <td><strong>May</strong></td>
                    <td>Formal / sopan</td>
                    <td><strong>May</strong> I come in, Sir?</td>
                    <td>Bolehkah saya masuk, Pak?</td>
                </tr>
                <tr>
                    <td><strong>Could</strong></td>
                    <td>Sangat sopan</td>
                    <td><strong>Could</strong> I use your phone, please?</td>
                    <td>Bolehkah saya menggunakan telepon Anda?</td>
                </tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">3. Possibility (Kemungkinan)</h4>
        <p>Digunakan untuk menyatakan sesuatu yang mungkin terjadi.</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Modal</th>
                    <th>Tingkat Kemungkinan</th>
                    <th>Contoh Kalimat</th>
                    <th>Arti</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>May</strong></td>
                    <td>Cukup mungkin (50%)</td>
                    <td>It <strong>may</strong> rain today.</td>
                    <td>Mungkin hari ini akan hujan.</td>
                </tr>
                <tr>
                    <td><strong>Might</strong></td>
                    <td>Kurang mungkin (Lemah)</td>
                    <td>He <strong>might</strong> come to the party.</td>
                    <td>Dia mungkin (saja) datang ke pesta.</td>
                </tr>
                <tr>
                    <td><strong>Can / Could</strong></td>
                    <td>Kemungkinan umum/teoritis</td>
                    <td>Smoking <strong>can</strong> cause cancer.</td>
                    <td>Merokok dapat menyebabkan kanker.</td>
                </tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">4. Obligation & Advice (Kewajiban & Saran)</h4>
        <p>Digunakan untuk menyatakan keharusan atau memberikan nasehat.</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Modal</th>
                    <th>Kegunaan</th>
                    <th>Contoh Kalimat</th>
                    <th>Arti</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Must</strong></td>
                    <td>Kewajiban mutlak (Internal)</td>
                    <td>I <strong>must</strong> study hard for the exam.</td>
                    <td>Saya harus belajar giat untuk ujian.</td>
                </tr>
                <tr>
                    <td><strong>Have to</strong></td>
                    <td>Kewajiban karena aturan (Eksternal)</td>
                    <td>We <strong>have to</strong> wear a uniform at school.</td>
                    <td>Kita harus memakai seragam di sekolah.</td>
                </tr>
                <tr>
                    <td><strong>Should</strong></td>
                    <td>Saran / Nasehat</td>
                    <td>You <strong>should</strong> see a doctor.</td>
                    <td>Kamu sebaiknya pergi ke dokter.</td>
                </tr>
                <tr>
                    <td><strong>Ought to</strong></td>
                    <td>Saran moral / kewajiban etis</td>
                    <td>We <strong>ought to</strong> help the poor.</td>
                    <td>Kita seharusnya membantu orang miskin.</td>
                </tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">5. Offers & Requests (Tawaran & Permintaan)</h4>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Modal</th>
                    <th>Kegunaan</th>
                    <th>Contoh Kalimat</th>
                    <th>Arti</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Will</strong></td>
                    <td>Permintaan/Kemauan spontan</td>
                    <td><strong>Will</strong> you help me with this bag?</td>
                    <td>Maukah kamu membantuku membawa tas ini?</td>
                </tr>
                <tr>
                    <td><strong>Would</strong></td>
                    <td>Permintaan sangat sopan / Tawaran</td>
                    <td><strong>Would</strong> you like some coffee?</td>
                    <td>Apakah Anda mau kopi?</td>
                </tr>
                <tr>
                    <td><strong>Shall</strong></td>
                    <td>Saran / Tawaran (Gaya British)</td>
                    <td><strong>Shall</strong> we dance?</td>
                    <td>Maukah kita berdansa? / Mari kita berdansa.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Bentuk Negatif & Larangan</h3>
        <p>Menambahkan "not" setelah modal merubah maknanya menjadi negatif. Namun, perhatikan perbedaan antara <strong>Must not</strong> dan <strong>Do not have to</strong>.</p>
        
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Modal Negatif</th>
                    <th>Makna</th>
                    <th>Contoh Kalimat</th>
                    <th>Arti</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Must not</strong></td>
                    <td>Larangan keras (Prohibition)</td>
                    <td>You <strong>must not</strong> smoke here.</td>
                    <td>Kamu dilarang merokok di sini.</td>
                </tr>
                <tr>
                    <td><strong>Don't have to</strong></td>
                    <td>Tidak perlu (Tidak wajib)</td>
                    <td>Tomorrow is holiday, you <strong>don't have to</strong> wake up early.</td>
                    <td>Besok libur, kamu tidak perlu bangun pagi.</td>
                </tr>
                <tr>
                    <td><strong>Cannot</strong></td>
                    <td>Ketidakmampuan / Ketidakmungkinan</td>
                    <td>That <strong>cannot</strong> be true.</td>
                    <td>Itu tidak mungkin benar.</td>
                </tr>
                <tr>
                    <td><strong>Should not</strong></td>
                    <td>Saran untuk tidak dilakukan</td>
                    <td>You <strong>should not</strong> eat too much spicy food.</td>
                    <td>Kamu sebaiknya tidak makan terlalu banyak makanan pedas.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Modal Perfect (Masa Lalu)</h3>
        <p>Digunakan untuk mengekspresikan perasaan atau spekulasi tentang kejadian di masa lalu.</p>
        <div class="formula-box">Modal + Have + Verb III</div>
        
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Bentuk</th>
                    <th>Makna</th>
                    <th>Contoh Kalimat</th>
                    <th>Arti</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Should have</strong></td>
                    <td>Penyesalan (seharusnya dilakukan tapi tidak)</td>
                    <td>I <strong>should have studied</strong> harder.</td>
                    <td>Saya seharusnya belajar lebih giat (tapi kenyataannya tidak).</td>
                </tr>
                <tr>
                    <td><strong>Must have</strong></td>
                    <td>Kesimpulan pasti tentang masa lalu</td>
                    <td>The ground is wet. It <strong>must have rained</strong>.</td>
                    <td>Tanahnya basah. Pasti tadi hujan.</td>
                </tr>
                <tr>
                    <td><strong>Could have</strong></td>
                    <td>Sesuatu yang mungkin terjadi tapi tidak</td>
                    <td>You <strong>could have won</strong> the race.</td>
                    <td>Kamu sebenarnya bisa menang balapan itu (tapi tidak menang).</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

<div class="back-nav">
    <a href="index.php?hal=grammar" class="btn-secondary">← Kembali ke Materi Grammar</a>
</div>