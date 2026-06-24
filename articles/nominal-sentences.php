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
    }

    .back-nav {
        margin-top: 50px;
        text-align: center;
        border-top: 2px dashed #e2e8f0;
        padding-top: 30px;
    }
</style>

<div class="article-header">
    <h2 class="section-title">Nominal Sentences</h2>
    <p>Panduan lengkap tentang kalimat nominal dalam Present dan Past Tense.</p>
</div>

<div class="article-content">
    <p>Kalimat Nominal setidaknya terdiri dari Subjek dan Predikat.</p>
    <ul class="note-list">
        <li><strong>Subjek</strong> adalah noun (kata benda)</li>
        <li><strong>Predikat</strong> adalah adjective (kata sifat), adverb (kata keterangan), atau noun (kata benda)</li>
    </ul>

    <div class="pos-section">
        <h3 class="pos-title">1. Kalimat Positif</h3>
        <p>Berikut adalah contoh kalimat nominal dalam bentuk positif:</p>
        
        <table class="pos-table">
            <tbody>
                <tr><td>I am happy.</td><td>Saya gembira.</td></tr>
                <tr><td>You are happy.</td><td>Kamu gembira.</td></tr>
                <tr><td>He is happy.</td><td>Ia (laki-laki) gembira.</td></tr>
                <tr><td>She is happy.</td><td>Ia (perempuan) gembira.</td></tr>
                <tr><td>It is happy.</td><td>Ia (binatang) gembira.</td></tr>
                <tr><td>We are happy.</td><td>Kami gembira.</td></tr>
                <tr><td>They are happy.</td><td>Mereka gembira.</td></tr>
            </tbody>
        </table>

        <p><strong>Keterangan:</strong></p>
        <ul class="note-list">
            <li>Untuk membentuk kalimat nominal, digunakan <em>to be</em>, yaitu <strong>is</strong>, <strong>am</strong>, dan <strong>are</strong>.</li>
            <li>Kata ganti <strong>I</strong> menggunakan to be <strong>am</strong>.</li>
            <li>Kata ganti <strong>He, She, It</strong> menggunakan to be <strong>is</strong>.</li>
            <li>Kata ganti <strong>You, We, They</strong> menggunakan to be <strong>are</strong>.</li>
        </ul>

        <p>Berikut adalah contoh kalimat nominal lainnya:</p>
        <table class="pos-table">
            <tbody>
                <tr><td>I am happy.</td><td>Saya gembira.</td></tr>
                <tr><td>You are tired.</td><td>Kamu lelah.</td></tr>
                <tr><td>He is handsome.</td><td>Dia tampan.</td></tr>
                <tr><td>She is beautiful.</td><td>Dia cantik.</td></tr>
                <tr><td>It is cute.</td><td>Itu lucu.</td></tr>
                <tr><td>We are scared.</td><td>Kami takut.</td></tr>
                <tr><td>They are angry.</td><td>Mereka marah.</td></tr>
                <tr><td>David is happy.</td><td>David gembira.</td></tr>
                <tr><td>Jack is handsome.</td><td>Jack tampan.</td></tr>
                <tr><td>Anna is beautiful.</td><td>Anna cantik.</td></tr>
                <tr><td>Mega is diligent.</td><td>Mega rajin.</td></tr>
                <tr><td>The cat is cute.</td><td>Kucing itu lucu.</td></tr>
                <tr><td>The motorcycle is new.</td><td>Motor itu baru.</td></tr>
                <tr><td>The cats are funny.</td><td>Kucing-kucing itu lucu.</td></tr>
                <tr><td>David and Jack are tall.</td><td>David dan Jack tinggi.</td></tr>
                <tr><td>Mega and I are happy.</td><td>Mega dan saya gembira.</td></tr>
                <tr><td>The students are diligent.</td><td>Para siswa itu rajin.</td></tr>
            </tbody>
        </table>

        <p>Berikut adalah contoh kalimat nominal yang predikatnya <strong>adverb (kata keterangan)</strong>:</p>
        <table class="pos-table">
            <tbody>
                <tr><td>I am in the garden.</td><td>Saya berada di taman.</td></tr>
                <tr><td>You are in the garden.</td><td>Kamu berada di taman.</td></tr>
                <tr><td>He is in the garden.</td><td>Ia (laki-laki) berada di taman.</td></tr>
                <tr><td>She is in the garden.</td><td>Ia (perempuan) berada di taman.</td></tr>
                <tr><td>It is in the garden.</td><td>Ia (binatang) berada di taman.</td></tr>
                <tr><td>We are in the garden.</td><td>Kami berada di taman.</td></tr>
                <tr><td>They are in the garden.</td><td>Mereka berada di taman.</td></tr>
            </tbody>
        </table>

        <p>Berikut adalah contoh kalimat nominal lainnya yang predikatnya <strong>adverb (kata keterangan)</strong>:</p>
        <table class="pos-table">
            <tbody>
                <tr><td>David is in the garden.</td><td>David berada di taman.</td></tr>
                <tr><td>Anna is in the garden.</td><td>Anna berada di taman.</td></tr>
                <tr><td>The cat is in the garden.</td><td>Kucing itu berada di taman.</td></tr>
                <tr><td>The motorcycle is in the garden.</td><td>Motor itu berada di taman.</td></tr>
                <tr><td>The cats are in the garden.</td><td>Kucing-kucing itu berada di taman.</td></tr>
                <tr><td>David and Jack are in the garden.</td><td>David dan Jack berada di taman.</td></tr>
                <tr><td>Mega and I are in the garden.</td><td>Mega dan saya berada di taman.</td></tr>
                <tr><td>The students are in the garden.</td><td>Para siswa berada di taman.</td></tr>
            </tbody>
        </table>

        <p>Berikut adalah contoh kalimat nominal yang predikatnya <strong>noun (kata benda)</strong>:</p>
        <table class="pos-table">
            <tbody>
                <tr><td>I am a student.</td><td>Saya seorang pelajar.</td></tr>
                <tr><td>You are a student.</td><td>Kamu seorang pelajar.</td></tr>
                <tr><td>He is a teacher.</td><td>Ia seorang guru.</td></tr>
                <tr><td>She is a doctor.</td><td>Ia seorang dokter.</td></tr>
                <tr><td>It is a cat.</td><td>Ia seekor kucing.</td></tr>
                <tr><td>We are students.</td><td>Kami (adalah) pelajar.</td></tr>
                <tr><td>They are teachers.</td><td>Mereka (adalah) guru.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">2. Kalimat Negatif</h3>
        <p>Kalimat nominal dalam bentuk negatif mengikuti pola:</p>
        <div class="formula-box">
            Subjek + to be + not + Predikat
        </div>
        
        <p>Berikut adalah contoh kalimat nominal dalam bentuk negatif:</p>
        <table class="pos-table">
            <tbody>
                <tr><td>I am not in the garden.</td><td>Saya tidak berada di taman.</td></tr>
                <tr><td>You are not in the garden.</td><td>Kamu tidak berada di taman.</td></tr>
                <tr><td>He is not in the garden.</td><td>Dia (laki-laki) tidak berada di taman.</td></tr>
                <tr><td>She is not in the garden.</td><td>Dia (perempuan) tidak berada di taman.</td></tr>
                <tr><td>It is not in the garden.</td><td>Itu (benda/hewan) tidak berada di taman.</td></tr>
                <tr><td>We are not in the garden.</td><td>Kami tidak berada di taman.</td></tr>
                <tr><td>They are not in the garden.</td><td>Mereka tidak berada di taman.</td></tr>
            </tbody>
        </table>

        <p>Berikut adalah contoh kalimat nominal lainnya dalam bentuk negatif:</p>
        <table class="pos-table">
            <tbody>
                <tr><td>I am not a student.</td><td>Saya bukan seorang pelajar.</td></tr>
                <tr><td>You are not a student.</td><td>Kamu bukan seorang pelajar.</td></tr>
                <tr><td>He is not a teacher.</td><td>Ia bukan seorang guru.</td></tr>
                <tr><td>She is not a doctor.</td><td>Ia bukan seorang dokter.</td></tr>
                <tr><td>It is not a cat.</td><td>Ia bukan seekor kucing.</td></tr>
                <tr><td>We are not students.</td><td>Kami bukan pelajar.</td></tr>
                <tr><td>They are not teachers.</td><td>Mereka bukan guru.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">3. Kalimat Interogatif</h3>
        <p>Kalimat nominal dalam bentuk interogatif mengikuti pola:</p>
        <div class="formula-box">
            To be + Subjek + Predikat + ?
        </div>

        <p>Berikut adalah contoh kalimat nominal dalam bentuk interogatif:</p>
        <table class="pos-table">
            <tbody>
                <tr><td>Am I in the garden?</td><td>Apakah saya berada di taman?</td></tr>
                <tr><td>Are you in the garden?</td><td>Apakah kamu berada di taman?</td></tr>
                <tr><td>Is he in the garden?</td><td>Apakah dia (laki-laki) berada di taman?</td></tr>
                <tr><td>Is she in the garden?</td><td>Apakah dia (perempuan) berada di taman?</td></tr>
                <tr><td>Is it in the garden?</td><td>Apakah itu (benda/hewan) berada di taman?</td></tr>
                <tr><td>Are we in the garden?</td><td>Apakah kami berada di taman?</td></tr>
                <tr><td>Are they in the garden?</td><td>Apakah mereka berada di taman?</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Singkatan "to be"</h3>
        <p>Berikut adalah bentuk singkatan yang umum digunakan untuk <em>to be</em> dalam kalimat nominal:</p>
        <table class="pos-table">
            <tbody>
                <tr><td>I am</td><td>I'm</td></tr>
                <tr><td>You are</td><td>You're</td></tr>
                <tr><td>He is</td><td>He's</td></tr>
                <tr><td>She is</td><td>She's</td></tr>
                <tr><td>It is</td><td>It's</td></tr>
                <tr><td>We are</td><td>We're</td></tr>
                <tr><td>They are</td><td>They're</td></tr>
                <tr><td>are not</td><td>aren't</td></tr>
                <tr><td>is not</td><td>isn't</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Nominal Sentence (Past Tense)</h3>
        <p>Apabila sebelumnya kita mempelajari Nominal Sentences dalam bentuk sekarang (present), kali ini kita akan mempelajari Nominal Sentences dalam bentuk lampau (past).</p>
        <p>Untuk membentuk Nominal Sentences dalam bentuk lampau (past) hampir sama dengan Nominal Sentences dalam bentuk sekarang (present). Bedanya adalah pada <strong>to be</strong>.</p>
        <p>Adapun pada Nominal Sentences dalam bentuk lampau (past) adalah:</p>
        <ul class="note-list">
            <li>Kata ganti <strong>I, He, She, It</strong> menggunakan to be <strong>was</strong></li>
            <li>Kata ganti <strong>You, We, They</strong> menggunakan to be <strong>were</strong></li>
        </ul>

        <h4 class="pos-subtitle">1. Kalimat Positif</h4>
        <p>Berikut adalah contoh kalimat nominal dalam bentuk positif:</p>
        <table class="pos-table">
            <tbody>
                <tr><td>I was happy yesterday.</td><td>Saya gembira kemarin.</td></tr>
                <tr><td>You were happy yesterday.</td><td>Kamu gembira kemarin.</td></tr>
                <tr><td>He was happy yesterday.</td><td>Ia (laki-laki) gembira kemarin.</td></tr>
                <tr><td>She was happy yesterday.</td><td>Ia (perempuan) gembira kemarin.</td></tr>
                <tr><td>It was happy yesterday.</td><td>Ia (binatang) gembira kemarin.</td></tr>
                <tr><td>We were happy yesterday.</td><td>Kami gembira kemarin.</td></tr>
                <tr><td>They were happy yesterday.</td><td>Mereka gembira kemarin.</td></tr>
            </tbody>
        </table>

        <p>Berikut adalah contoh kalimat nominal lainnya:</p>
        <table class="pos-table">
            <tbody>
                <tr><td>I was happy yesterday.</td><td>Saya gembira kemarin.</td></tr>
                <tr><td>You were tired yesterday.</td><td>Kamu lelah kemarin.</td></tr>
                <tr><td>David was happy yesterday.</td><td>David gembira kemarin.</td></tr>
                <tr><td>The cat was cute yesterday.</td><td>Kucing itu lucu kemarin.</td></tr>
                <tr><td>The cats were funny yesterday.</td><td>Kucing-kucing itu lucu kemarin.</td></tr>
                <tr><td>Mega and I were happy yesterday.</td><td>Mega dan saya gembira kemarin.</td></tr>
            </tbody>
        </table>

        <p>Berikut adalah contoh kalimat nominal yang predikatnya <strong>adverb (kata keterangan)</strong>:</p>
        <table class="pos-table">
            <tbody>
                <tr><td>I was in the garden yesterday.</td><td>Saya berada di taman kemarin.</td></tr>
                <tr><td>You were in the garden yesterday.</td><td>Kamu berada di taman kemarin.</td></tr>
                <tr><td>He was in the garden yesterday.</td><td>Ia (laki-laki) berada di taman kemarin.</td></tr>
                <tr><td>She was in the garden yesterday.</td><td>Ia (perempuan) berada di taman kemarin.</td></tr>
                <tr><td>It was in the garden yesterday.</td><td>Ia (binatang) berada di taman kemarin.</td></tr>
                <tr><td>We were in the garden yesterday.</td><td>Kami berada di taman kemarin.</td></tr>
                <tr><td>They were in the garden yesterday.</td><td>Mereka berada di taman kemarin.</td></tr>
            </tbody>
        </table>

        <p>Berikut adalah contoh kalimat nominal yang predikatnya <strong>noun (kata benda)</strong>:</p>
        <table class="pos-table">
            <tbody>
                <tr><td>I was a student. I am an engineer.</td><td>Saya (dulunya) seorang pelajar. Saya (sekarang) seorang insinyur.</td></tr>
                <tr><td>You were a student. You are a nurse.</td><td>Kamu (dulunya) seorang pelajar. Kamu (sekarang) seorang perawat.</td></tr>
                <tr><td>He was a teacher. He is a lecturer.</td><td>Ia (dulunya) seorang guru. Ia (sekarang) seorang dosen.</td></tr>
                <tr><td>It was a catterpilar. It is a butterfly.</td><td>Ia (dulunya) seekor ulat. Ia (sekarang) seekor kupu-kupu.</td></tr>
                <tr><td>We were students. We are teachers.</td><td>Kami (dulunya) para pelajar. Kami (sekarang) para guru.</td></tr>
                <tr><td>They were teachers. They are teachers.</td><td>Kami (dulunya) para pelajar. Kami (sekarang) para guru.</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">2. Kalimat Negatif</h4>
        <p>Kalimat nominal dalam bentuk negatif mengikuti pola:</p>
        <div class="formula-box">
            Subjek + to be + not + Predikat
        </div>
        <p>Berikut adalah contoh kalimat nominal dalam bentuk negatif:</p>
        <table class="pos-table">
            <tbody>
                <tr><td>I was not in the garden yesterday.</td><td>Saya tidak berada di taman kemarin.</td></tr>
                <tr><td>You were not in the garden yesterday.</td><td>Kamu tidak berada di taman kemarin.</td></tr>
                <tr><td>He was not in the garden yesterday.</td><td>Dia (laki-laki) tidak berada di taman kemarin.</td></tr>
                <tr><td>She was not in the garden yesterday.</td><td>Dia (perempuan) tidak berada di taman kemarin.</td></tr>
                <tr><td>It was not in the garden yesterday.</td><td>Itu (benda/hewan) tidak berada di taman kemarin.</td></tr>
                <tr><td>We were not in the garden yesterday.</td><td>Kami tidak berada di taman kemarin.</td></tr>
                <tr><td>They were not in the garden yesterday.</td><td>Mereka tidak berada di taman kemarin.</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">3. Kalimat Interogatif</h4>
        <p>Kalimat nominal dalam bentuk interogatif mengikuti pola:</p>
        <div class="formula-box">
            To be + Subjek + Predikat + ?
        </div>
        <p>Berikut adalah contoh kalimat nominal dalam bentuk interogatif:</p>
        <table class="pos-table">
            <tbody>
                <tr><td>Was I in the garden yesterday?</td><td>Apakah saya berada di taman kemarin?</td></tr>
                <tr><td>Were you in the garden yesterday?</td><td>Apakah kamu berada di taman kemarin?</td></tr>
                <tr><td>Was he in the garden yesterday?</td><td>Apakah dia (laki-laki) berada di taman kemarin?</td></tr>
                <tr><td>Was she in the garden yesterday?</td><td>Apakah dia (perempuan) berada di taman kemarin?</td></tr>
                <tr><td>Was it in the garden yesterday?</td><td>Apakah itu (benda/hewan) berada di taman kemarin?</td></tr>
                <tr><td>Were we in the garden yesterday?</td><td>Apakah kami berada di taman kemarin?</td></tr>
                <tr><td>Were they in the garden yesterday?</td><td>Apakah mereka berada di taman kemarin?</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Singkatan "to be"</h4>
        <p>Berikut adalah bentuk singkatan yang umum digunakan untuk <em>to be</em> dalam kalimat nominal:</p>
        <table class="pos-table">
            <tbody>
                <tr><td>You were</td><td>You're</td></tr>
                <tr><td>He was</td><td>He's</td></tr>
                <tr><td>She was</td><td>She's</td></tr>
                <tr><td>It was</td><td>It's</td></tr>
                <tr><td>We were</td><td>We're</td></tr>
                <tr><td>They were</td><td>They're</td></tr>
                <tr><td>was not</td><td>wasn't</td></tr>
            </tbody>
        </table>
    </div>

</div>

<div class="back-nav">
    <a href="index.php?hal=grammar" class="btn-secondary">← Kembali ke Materi Grammar</a>
</div>