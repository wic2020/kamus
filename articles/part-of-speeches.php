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

    .intro-list {
        background: var(--light);
        padding: 20px 20px 20px 40px;
        border-radius: 10px;
        margin-bottom: 20px;
        color: var(--dark);
    }

    .intro-list li {
        margin-bottom: 5px;
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

    /* Styling untuk Tabel */
    .pos-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
        margin-bottom: 20px;
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

    .back-nav {
        margin-top: 50px;
        text-align: center;
        border-top: 2px dashed #e2e8f0;
        padding-top: 30px;
    }
</style>

<div class="article-header">
    <h2 class="section-title">Part of Speech</h2>
    <p>Klasifikasi kata berdasarkan fungsi dan perannya dalam kalimat.</p>
</div>

<div class="article-content">
    <p>Dalam belajar bahasa Inggris, memahami <strong>part of speech</strong> adalah langkah awal yang sangat penting. Part of speech adalah klasifikasi kata berdasarkan fungsi dan perannya dalam kalimat. Ada 8 (delapan) jenis utama part of speech:</p>
    
    <ol class="intro-list">
        <li><strong>Noun</strong> (kata benda)</li>
        <li><strong>Pronoun</strong> (kata ganti)</li>
        <li><strong>Verb</strong> (kata kerja)</li>
        <li><strong>Adjective</strong> (kata sifat)</li>
        <li><strong>Adverb</strong> (kata keterangan)</li>
        <li><strong>Preposition</strong> (kata depan)</li>
        <li><strong>Conjunction</strong> (kata penghubung)</li>
        <li><strong>Interjection</strong> (kata seru)</li>
    </ol>

    <p>Dengan memahami masing-masing jenis kata ini, Anda akan lebih mudah membentuk kalimat yang benar, menulis dengan jelas, dan memahami bacaan dengan lebih baik.</p>

    <div class="pos-section">
        <h3 class="pos-title">1. Noun (Kata Benda)</h3>
        <p>Noun adalah kata yang digunakan untuk menyebut nama orang, tempat, benda, hewan, atau ide.</p>
        
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>book</td><td>buku</td></tr>
                <tr><td>garden</td><td>taman</td></tr>
                <tr><td>ball</td><td>bola</td></tr>
                <tr><td>house</td><td>rumah</td></tr>
                <tr><td>farmer</td><td>petani</td></tr>
                <tr><td>Mr. President</td><td>Bapak Presiden</td></tr>
            </tbody>
        </table>

        <p><strong>Kata Benda Abstrak</strong> (<em>abstract nouns</em>) adalah jenis noun (kata benda) yang tidak dapat dilihat, disentuh, diraba, atau dirasakan secara fisik. Kata ini mewakili ide, perasaan, kualitas, atau kondisi yang bersifat tidak berwujud.</p>

        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>freedom</td><td>kebebasan</td></tr>
                <tr><td>happiness</td><td>kebahagiaan</td></tr>
                <tr><td>education</td><td>pendidikan</td></tr>
                <tr><td>justice</td><td>keadilan</td></tr>
                <tr><td>independence</td><td>kemerdekaan</td></tr>
                <tr><td>courage</td><td>keberanian</td></tr>
                <tr><td>knowledge</td><td>pengetahuan</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">2. Pronoun (Kata Ganti)</h3>
        <p><strong>Pronoun</strong> (kata ganti) adalah kata yang digunakan untuk menggantikan kata benda agar tidak terjadi pengulangan.</p>
        
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                    <th>Contoh kata yang digantikan</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I</td><td>Saya</td><td>-</td></tr>
                <tr><td>You</td><td>Kamu</td><td>-</td></tr>
                <tr><td>He</td><td>Dia (laki-laki)</td><td>Mr. Wilson</td></tr>
                <tr><td>She</td><td>Dia (perempuan)</td><td>Mrs. Wilson</td></tr>
                <tr><td>It</td><td>Itu (benda atau hewan)</td><td>-</td></tr>
                <tr><td>We</td><td>Kami</td><td>-</td></tr>
                <tr><td>They</td><td>Mereka</td><td>Jack and Anne; The Wilsons</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">3. Verb (Kata Kerja)</h3>
        <p><strong>Verb</strong> (kata kerja) adalah kata yang menunjukkan tindakan, keadaan, atau aktivitas.</p>
        
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>walk</td><td>berjalan</td></tr>
                <tr><td>speak</td><td>berbicara</td></tr>
                <tr><td>push</td><td>mendorong</td></tr>
                <tr><td>cry</td><td>menangis</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">4. Adjective (Kata Sifat)</h3>
        <p><strong>Adjective</strong> (kata sifat) adalah kata yang mendeskripsikan atau memberikan sifat pada kata benda atau kata ganti.</p>
        
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>slow</td><td>lambat</td></tr>
                <tr><td>quick</td><td>cepat</td></tr>
                <tr><td>large</td><td>besar</td></tr>
                <tr><td>small</td><td>kecil</td></tr>
                <tr><td>red</td><td>merah</td></tr>
                <tr><td>white</td><td>putih</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">5. Adverb (Kata Keterangan)</h3>
        <p><strong>Adverb</strong> (kata keterangan) adalah kata yang menjelaskan kata kerja, kata sifat, atau kata keterangan lainnya, sering kali menunjukkan cara, waktu, tempat, atau tingkatan.</p>
        
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>slowly</td><td>secara perlahan</td></tr>
                <tr><td>quickly</td><td>secara cepat</td></tr>
                <tr><td>beautifully</td><td>secara indah</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">6. Preposition (Kata Depan)</h3>
        <p><strong>Preposition</strong> (kata depan) adalah kata yang menunjukkan hubungan antara kata benda atau kata ganti dengan kata lain dalam kalimat.</p>
        
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>in</td><td>di dalam</td></tr>
                <tr><td>on</td><td>di atas</td></tr>
                <tr><td>under</td><td>di bawah</td></tr>
                <tr><td>between</td><td>di antara</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">7. Conjunction (Kata Hubung)</h3>
        <p><strong>Conjunction</strong> (kata hubung) adalah kata yang menghubungkan kata, frasa, atau kalimat.</p>
        
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>but</td><td>tetapi</td></tr>
                <tr><td>and</td><td>dan</td></tr>
                <tr><td>or</td><td>atau</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">8. Interjection (Kata Seru)</h3>
        <p><strong>Interjection</strong> (kata seru) adalah kata atau frasa yang digunakan untuk mengekspresikan emosi, perasaan, atau reaksi secara spontan.</p>
        
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Hey!</td><td>Hai!</td></tr>
                <tr><td>Wow!</td><td>Wah!</td></tr>
                <tr><td>Hi!</td><td>Halo!</td></tr>
                <tr><td>Oops!</td><td>Ups!</td></tr>
            </tbody>
        </table>
    </div>

</div>

<div class="back-nav">
    <a href="index.php?hal=grammar" class="btn-secondary">← Kembali ke Materi Grammar</a>
</div>