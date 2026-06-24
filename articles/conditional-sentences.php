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
    <h2 class="section-title">Conditional Sentences (Kalimat Pengandaian)</h2>
    <p>Panduan memahami kalimat pengandaian Type 0, Type 1, Type 2, dan Type 3.</p>
</div>

<div class="article-content">

    <div class="pos-section">
        <h3 class="pos-title">Pengertian Conditional Sentences</h3>
        <p><strong>Conditional Sentences</strong> (kalimat pengandaian) adalah kalimat majemuk yang digunakan untuk mengandaikan suatu kejadian yang belum terjadi, tidak mungkin terjadi, atau sudah terjadi di masa lalu namun tidak sesuai dengan harapan.</p>
        
        <p>Kalimat ini selalu terdiri dari dua bagian (klausa):</p>
        <ul class="note-list">
            <li><strong>If-clause</strong> (klausa persyaratan/kondisi): bagian yang diawali dengan kata "If" (jika).</li>
            <li><strong>Main clause</strong> (klausa utama/hasil): bagian yang menunjukkan akibat atau hasil dari kondisi tersebut.</li>
        </ul>
        <p><em>Catatan: Posisi "If-clause" dapat diletakkan di depan atau di belakang. Jika diletakkan di depan, wajib menggunakan tanda koma (,) untuk memisahkannya dengan Main clause.</em></p>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Type 0 (Zero Conditional)</h3>
        <p><strong>Type 0</strong> digunakan untuk menyatakan suatu fakta umum, kebenaran mutlak (fakta ilmiah), atau kebiasaan. Jika syaratnya terpenuhi, maka hasilnya pasti terjadi.</p>

        <h4 class="pos-subtitle">Formula</h4>
        <div class="formula-box">If + Simple Present, Simple Present</div>

        <h4 class="pos-subtitle">Contoh Kalimat</h4>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>If you heat ice, it melts.</td>
                    <td>Jika kamu memanaskan es, es itu mencair.</td>
                </tr>
                <tr>
                    <td>If it rains, the grass gets wet.</td>
                    <td>Jika hujan, rumput menjadi basah.</td>
                </tr>
                <tr>
                    <td>If you mix red and blue, you get purple.</td>
                    <td>Jika kamu mencampur merah dan biru, kamu mendapatkan ungu.</td>
                </tr>
                <tr>
                    <td>People die if they don't eat.</td>
                    <td>Orang mati jika mereka tidak makan.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Type 1 (First Conditional)</h3>
        <p><strong>Type 1</strong> digunakan untuk menyatakan situasi atau pengandaian di masa depan yang <strong>sangat mungkin terjadi</strong> (realistis) apabila syaratnya terpenuhi.</p>

        <h4 class="pos-subtitle">Formula</h4>
        <div class="formula-box">If + Simple Present, Simple Future (will + Verb I)</div>

        <h4 class="pos-subtitle">Contoh Kalimat</h4>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>If I have enough money, I will buy a new phone.</td>
                    <td>Jika saya punya cukup uang, saya akan membeli ponsel baru.</td>
                </tr>
                <tr>
                    <td>If she studies hard, she will pass the exam.</td>
                    <td>Jika dia belajar keras, dia akan lulus ujian.</td>
                </tr>
                <tr>
                    <td>If it rains tomorrow, we will not go to the park.</td>
                    <td>Jika besok hujan, kami tidak akan pergi ke taman.</td>
                </tr>
                <tr>
                    <td>I will tell him the news if I meet him.</td>
                    <td>Saya akan memberitahunya kabar itu jika saya bertemu dengannya.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Type 2 (Second Conditional)</h3>
        <p><strong>Type 2</strong> digunakan untuk menyatakan situasi yang <strong>tidak nyata (unreal) di masa sekarang</strong> atau sangat kecil kemungkinannya terjadi di masa depan. Pengandaian ini berlawanan dengan fakta saat ini.</p>

        <h4 class="pos-subtitle">Formula</h4>
        <div class="formula-box">If + Simple Past (Verb II), Past Future (would + Verb I)</div>
        
        <p><strong>Penting:</strong> Pada Type 2, penggunaan <em>to be</em> untuk <strong>seluruh subjek</strong> (I, You, We, They, He, She, It) adalah <strong>were</strong> (bukan was).</p>

        <h4 class="pos-subtitle">Contoh Kalimat & Fakta</h4>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                    <th>Fakta (Fact)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>If I had a million dollars, I would travel the world.</td>
                    <td>Jika saya punya sejuta dolar, saya akan keliling dunia.</td>
                    <td>Saya <strong>tidak punya</strong> sejuta dolar sekarang.</td>
                </tr>
                <tr>
                    <td>If she knew the answer, she would tell us.</td>
                    <td>Jika dia tahu jawabannya, dia akan memberi tahu kita.</td>
                    <td>Dia <strong>tidak tahu</strong> jawabannya sekarang.</td>
                </tr>
                <tr>
                    <td>If I were you, I would accept the job.</td>
                    <td>Jika saya menjadi kamu, saya akan menerima pekerjaan itu.</td>
                    <td>Saya <strong>bukan</strong> kamu.</td>
                </tr>
                <tr>
                    <td>He would buy a car if he won the lottery.</td>
                    <td>Dia akan membeli mobil jika dia memenangkan lotre.</td>
                    <td>Dia <strong>tidak memenangkan</strong> lotre.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Type 3 (Third Conditional)</h3>
        <p><strong>Type 3</strong> digunakan untuk menyatakan situasi yang <strong>tidak nyata (unreal) di masa lalu</strong>. Ini murni sebuah penyesalan atau imajinasi tentang masa lalu karena kejadiannya sudah lewat dan tidak bisa diubah.</p>

        <h4 class="pos-subtitle">Formula</h4>
        <div class="formula-box">If + Past Perfect (had + Verb III), Past Future Perfect (would have + Verb III)</div>

        <h4 class="pos-subtitle">Contoh Kalimat & Fakta</h4>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                    <th>Fakta (Fact)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>If I had studied harder, I would have passed the exam.</td>
                    <td>Jika saya telah belajar lebih keras, saya sudah akan lulus ujian.</td>
                    <td>Di masa lalu saya <strong>tidak belajar keras</strong>, jadi saya <strong>tidak lulus</strong>.</td>
                </tr>
                <tr>
                    <td>If she had woken up early, she would not have missed the train.</td>
                    <td>Jika dia telah bangun lebih awal, dia tidak akan ketinggalan kereta.</td>
                    <td>Di masa lalu dia <strong>terlambat bangun</strong>, jadi dia <strong>ketinggalan kereta</strong>.</td>
                </tr>
                <tr>
                    <td>If we had taken a map, we would not have gotten lost.</td>
                    <td>Jika kita telah membawa peta, kita tidak akan tersesat.</td>
                    <td>Kita <strong>tidak membawa peta</strong>, sehingga kita <strong>tersesat</strong>.</td>
                </tr>
                <tr>
                    <td>He would have bought the house if he had had enough money.</td>
                    <td>Dia sudah akan membeli rumah itu jika dia telah punya cukup uang.</td>
                    <td>Dia <strong>tidak punya cukup uang</strong> di masa lalu, sehingga dia <strong>tidak membeli</strong> rumah itu.</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

<div class="back-nav">
    <a href="index.php?hal=grammar" class="btn-secondary">← Kembali ke Materi Grammar</a>
</div>