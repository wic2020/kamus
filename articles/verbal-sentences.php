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
    <h2 class="section-title">Verbal Sentences</h2>
    <p>Panduan lengkap tentang Simple Present dan Present Continuous Tense.</p>
</div>

<div class="article-content">

    <div class="pos-section">
        <h3 class="pos-title">Simple Present</h3>
        <p><strong>Simple Present Tense</strong> adalah kalimat yang menunjukkan keadaan secara umum, kebiasaan, atau fakta yang berlaku secara tetap.</p>

        <h4 class="pos-subtitle">Kalimat Positif</h4>
        <p>Simple Present Tense dibentuk dengan formula:</p>
        <div class="formula-box">Subject + Verb I (s/es)</div>
        <ul class="note-list">
            <li>Untuk subyek <strong>He</strong>, <strong>She</strong>, dan <strong>It</strong>, Verb I ditambahkan huruf <strong>-s</strong> atau <strong>-es</strong>.</li>
            <li>Untuk subyek <strong>I</strong>, <strong>You</strong>, <strong>We</strong>, dan <strong>They</strong>, Verb I <strong>tidak</strong> ditambahkan huruf <strong>-s</strong> atau <strong>-es</strong>.</li>
        </ul>

        <p>Contoh penggunaan Simple Present Tense:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I walk in the garden</td><td>Saya berjalan di taman</td></tr>
                <tr><td>You walk in the garden</td><td>Kamu berjalan di taman</td></tr>
                <tr><td>He walks in the garden</td><td>Ia (laki-laki) berjalan di taman</td></tr>
                <tr><td>She walks in the garden</td><td>Ia (perempuan) berjalan di taman</td></tr>
                <tr><td>It walks in the garden</td><td>Ia (hewan) berjalan di taman</td></tr>
                <tr><td>We walk in the garden</td><td>Kami berjalan di taman</td></tr>
                <tr><td>They walk in the garden</td><td>Mereka berjalan di taman</td></tr>
            </tbody>
        </table>

        <p>Contoh penggunaan Simple Present Tense lainnya:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>David walks in the garden</td><td>David berjalan di taman</td></tr>
                <tr><td>Anna walks in the garden</td><td>Anna berjalan di taman</td></tr>
                <tr><td>The cat walks in the garden</td><td>Kucing itu berjalan di taman</td></tr>
                <tr><td>The cats walk in the garden</td><td>Kucing-kucing itu berjalan di taman</td></tr>
                <tr><td>David and Jack walk in the garden</td><td>David dan Jack berjalan di taman</td></tr>
                <tr><td>Mega and I walk in the garden</td><td>Mega dan saya berjalan di taman</td></tr>
                <tr><td>The students walk in the garden</td><td>Para pelajar berjalan di taman</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Kalimat Negatif</h4>
        <p>Simple Present Tense dalam bentuk negatif dibentuk dengan formula:</p>
        <div class="formula-box">Subject + do not / does not + Verb I</div>
        <ul class="note-list">
            <li>Untuk subyek <strong>He</strong>, <strong>She</strong>, dan <strong>It</strong>, menggunakan <strong>does not</strong>.</li>
            <li>Untuk subyek <strong>I</strong>, <strong>You</strong>, <strong>We</strong>, dan <strong>They</strong>, menggunakan <strong>do not</strong>.</li>
        </ul>
        <p>Dalam bentuk negatif, <strong>selalu menggunakan Verb I</strong> (tanpa ditambahkan -s atau -es).</p>

        <p>Contoh penggunaan kalimat Simple Present Tense dalam bentuk negatif:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I do not walk in the garden</td><td>Saya tidak berjalan di taman</td></tr>
                <tr><td>You do not walk in the garden</td><td>Kamu tidak berjalan di taman</td></tr>
                <tr><td>He does not walk in the garden</td><td>Ia (laki-laki) tidak berjalan di taman</td></tr>
                <tr><td>She does not walk in the garden</td><td>Ia (perempuan) tidak berjalan di taman</td></tr>
                <tr><td>It does not walk in the garden</td><td>Ia (hewan) tidak berjalan di taman</td></tr>
                <tr><td>We do not walk in the garden</td><td>Kami tidak berjalan di taman</td></tr>
                <tr><td>They do not walk in the garden</td><td>Mereka tidak berjalan di taman</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Kalimat Interogatif</h4>
        <p>Simple Present Tense dalam bentuk interogatif dibentuk dengan formula:</p>
        <div class="formula-box">Do/Does + Subject + Verb I + ... ?</div>
        <ul class="note-list">
            <li>Untuk subyek <strong>He</strong>, <strong>She</strong>, dan <strong>It</strong>, menggunakan <strong>Does</strong>.</li>
            <li>Untuk subyek <strong>I</strong>, <strong>You</strong>, <strong>We</strong>, dan <strong>They</strong>, menggunakan <strong>Do</strong>.</li>
        </ul>
        <p>Dalam bentuk interogatif, <strong>selalu menggunakan Verb I</strong> (tanpa ditambahkan -s atau -es).</p>

        <p>Contoh penggunaan kalimat Simple Present Tense dalam bentuk interogatif:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Do I walk in the garden?</td><td>Apakah saya berjalan di taman?</td></tr>
                <tr><td>Do you walk in the garden?</td><td>Apakah kamu berjalan di taman?</td></tr>
                <tr><td>Does he walk in the garden?</td><td>Apakah ia (laki-laki) berjalan di taman?</td></tr>
                <tr><td>Does she walk in the garden?</td><td>Apakah ia (perempuan) berjalan di taman?</td></tr>
                <tr><td>Does it walk in the garden?</td><td>Apakah ia (hewan) berjalan di taman?</td></tr>
                <tr><td>Do we walk in the garden?</td><td>Apakah kami berjalan di taman?</td></tr>
                <tr><td>Do they walk in the garden?</td><td>Apakah mereka berjalan di taman?</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Panduan Penambahan -s pada Verb</h3>
        <p>Berikut adalah aturan untuk membentuk bentuk Verb I + s/es:</p>

        <h4 class="pos-subtitle">1. Menambahkan -s</h4>
        <p>Untuk sebagian besar kata kerja, tambahkan akhiran <strong>-s</strong>.</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Singular</th>
                    <th>Plural (-s)</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>want</td><td>wants</td><td>menginginkan</td></tr>
                <tr><td>need</td><td>needs</td><td>memerlukan</td></tr>
                <tr><td>give</td><td>gives</td><td>memberi</td></tr>
                <tr><td>think</td><td>thinks</td><td>memikirkan</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">2. Mengubah -y menjadi -ies</h4>
        <p>Jika sebelum <strong>-y</strong> adalah huruf mati (konsonan), ubah <strong>-y</strong> menjadi <strong>-ies</strong>.</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Singular</th>
                    <th>Plural (-ies)</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>cry</td><td>cries</td><td>menangis</td></tr>
                <tr><td>fly</td><td>flies</td><td>terbang</td></tr>
                <tr><td>try</td><td>tries</td><td>mencoba</td></tr>
                <tr><td>study</td><td>studies</td><td>belajar</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">3. Menambahkan -s (jika sebelum -y huruf vokal)</h4>
        <p>Jika sebelum <strong>-y</strong> adalah huruf vokal, hanya tambahkan <strong>-s</strong>.</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Singular</th>
                    <th>Plural (-s)</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>play</td><td>plays</td><td>memainkan</td></tr>
                <tr><td>pay</td><td>pays</td><td>membayar</td></tr>
                <tr><td>stay</td><td>stays</td><td>tinggal</td></tr>
                <tr><td>enjoy</td><td>enjoys</td><td>menikmati</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">4. Menambahkan -es</h4>
        <p>Akhiran desis (<strong>-ss, -x, -sh, -ch, -o</strong>), tambahkan <strong>-es</strong>.</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Singular</th>
                    <th>Plural (-es)</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>pass</td><td>passes</td><td>melewati</td></tr>
                <tr><td>catch</td><td>catches</td><td>menangkap</td></tr>
                <tr><td>fix</td><td>fixes</td><td>membetulkan</td></tr>
                <tr><td>push</td><td>pushes</td><td>menekan</td></tr>
                <tr><td>watch</td><td>watches</td><td>menonton</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">5. Tidak beraturan</h4>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Singular</th>
                    <th>Plural</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>have</td><td>has</td><td>memiliki</td></tr>
                <tr><td>do</td><td>does</td><td>melakukan</td></tr>
                <tr><td>go</td><td>goes</td><td>pergi</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Singkatan Umum</h4>
        <p>Berikut adalah singkatan yang umum digunakan pada Simple Present Tense:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Singkatan</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>do not</td><td>don't</td></tr>
                <tr><td>does not</td><td>doesn't</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Adverb of Time (Simple Present)</h3>
        <p>Berikut adalah Adverb of Time (Keterangan Waktu) yang sering digunakan dalam Simple Present Tense:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>everyday</td><td>setiap hari</td></tr>
                <tr><td>always</td><td>selalu</td></tr>
                <tr><td>usually</td><td>biasanya</td></tr>
                <tr><td>seldom</td><td>jarang</td></tr>
                <tr><td>never</td><td>tidak pernah</td></tr>
                <tr><td>sometimes</td><td>kadang-kadang</td></tr>
                <tr><td>often</td><td>sering</td></tr>
                <tr><td>frequently</td><td>sering</td></tr>
                <tr><td>generally</td><td>biasanya</td></tr>
                <tr><td>occasionally</td><td>kadang-kadang</td></tr>
                <tr><td>once a week</td><td>sekali seminggu</td></tr>
                <tr><td>twice a week</td><td>dua kali seminggu</td></tr>
            </tbody>
        </table>

        <p>Berikut adalah contoh kalimatnya:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I walk in the garden everyday.</td><td>Saya berjalan di taman setiap hari.</td></tr>
                <tr><td>I usually walk in the garden.</td><td>Saya biasanya berjalan di taman.</td></tr>
                <tr><td>I seldom walk in the garden.</td><td>Saya jarang berjalan di taman.</td></tr>
                <tr><td>I never walk in the garden.</td><td>Saya tidak pernah berjalan di taman.</td></tr>
                <tr><td>Sometimes, I walk in the garden.</td><td>Kadang-kadang, saya berjalan di taman.</td></tr>
                <tr><td>I often walk in the garden.</td><td>Saya sering berjalan di taman.</td></tr>
                <tr><td>He walks in the garden everyday.</td><td>Dia berjalan di taman setiap hari.</td></tr>
                <tr><td>He usually walks in the garden.</td><td>Dia biasanya berjalan di taman.</td></tr>
                <tr><td>He seldom walks in the garden.</td><td>Dia jarang berjalan di taman.</td></tr>
                <tr><td>He never walks in the garden.</td><td>Dia tidak pernah berjalan di taman.</td></tr>
                <tr><td>Sometimes, he walks in the garden.</td><td>Kadang-kadang, dia berjalan di taman.</td></tr>
                <tr><td>He often walks in the garden.</td><td>Dia sering berjalan di taman.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Present Continuous</h3>
        <p><strong>Present Continuous</strong> adalah kalimat yang menunjukkan aksi yang <strong>sedang berlangsung saat ini</strong>.</p>

        <h4 class="pos-subtitle">Kalimat Positif</h4>
        <p>Present Continuous Tense dibentuk dengan formula:</p>
        <div class="formula-box">Subject + to be + Verb Ing</div>
        <ul class="note-list">
            <li>Subyek <strong>I</strong> menggunakan to be <strong>am</strong></li>
            <li>Subyek <strong>He, She, It</strong> menggunakan to be <strong>is</strong></li>
            <li>Subyek <strong>You, We, They</strong> menggunakan to be <strong>are</strong></li>
        </ul>
        <p><strong>Verb Ing</strong> adalah Verb I yang ditambahkan akhiran <strong>-ing</strong>.</p>

        <p>Contoh penggunaan Present Continuous:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I am walking in the garden now</td><td>Saya sedang berjalan di taman sekarang</td></tr>
                <tr><td>You are walking in the garden now</td><td>Kamu sedang berjalan di taman sekarang</td></tr>
                <tr><td>He is walking in the garden now</td><td>Dia (laki-laki) sedang berjalan di taman sekarang</td></tr>
                <tr><td>She is walking in the garden now</td><td>Dia (perempuan) sedang berjalan di taman sekarang</td></tr>
                <tr><td>It is walking in the garden now</td><td>Dia (hewan) sedang berjalan di taman sekarang</td></tr>
                <tr><td>We are walking in the garden now</td><td>Kami sedang berjalan di taman sekarang</td></tr>
                <tr><td>They are walking in the garden now</td><td>Mereka sedang berjalan di taman sekarang</td></tr>
            </tbody>
        </table>

        <p>Contoh penggunaan Present Continuous lainnya:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>David is walking in the garden now</td><td>David sedang berjalan di taman sekarang</td></tr>
                <tr><td>Anna is walking in the garden now</td><td>Anna sedang berjalan di taman sekarang</td></tr>
                <tr><td>The cat is walking in the garden now</td><td>Kucing itu sedang berjalan di taman sekarang</td></tr>
                <tr><td>The cats are walking in the garden now</td><td>Kucing-kucing itu sedang berjalan di taman sekarang</td></tr>
                <tr><td>David and Jack are walking in the garden now</td><td>David dan Jack sedang berjalan di taman sekarang</td></tr>
                <tr><td>Mega and I are walking in the garden now</td><td>Mega dan saya sedang berjalan di taman sekarang</td></tr>
                <tr><td>The students are walking in the garden now</td><td>Para pelajar sedang berjalan di taman sekarang</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Kalimat Negatif</h4>
        <p>Present Continuous Tense dalam bentuk negatif dibentuk dengan formula:</p>
        <div class="formula-box">Subject + is/am/are + not + Verb Ing</div>
        
        <p>Contoh penggunaan kalimat Present Continuous dalam bentuk negatif:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I am not walking in the garden now</td><td>Saya tidak sedang berjalan di taman sekarang</td></tr>
                <tr><td>You are not walking in the garden now</td><td>Kamu tidak sedang berjalan di taman sekarang</td></tr>
                <tr><td>He is not walking in the garden now</td><td>Dia (laki-laki) tidak sedang berjalan di taman sekarang</td></tr>
                <tr><td>She is not walking in the garden now</td><td>Dia (perempuan) tidak sedang berjalan di taman sekarang</td></tr>
                <tr><td>It is not walking in the garden now</td><td>Dia (hewan) tidak sedang berjalan di taman sekarang</td></tr>
                <tr><td>We are not walking in the garden now</td><td>Kami tidak sedang berjalan di taman sekarang</td></tr>
                <tr><td>They are not walking in the garden now</td><td>Mereka tidak sedang berjalan di taman sekarang</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Kalimat Interogatif</h4>
        <p>Present Continuous Tense dalam bentuk interogatif dibentuk dengan formula:</p>
        <div class="formula-box">Is/Am/Are + Subject + Verb Ing + ... ?</div>
        
        <p>Contoh penggunaan kalimat Present Continuous dalam bentuk interogatif:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Am I walking in the garden now?</td><td>Apakah saya sedang berjalan di taman sekarang?</td></tr>
                <tr><td>Are you walking in the garden now?</td><td>Apakah kamu sedang berjalan di taman sekarang?</td></tr>
                <tr><td>Is he walking in the garden now?</td><td>Apakah dia (laki-laki) sedang berjalan di taman sekarang?</td></tr>
                <tr><td>Is she walking in the garden now?</td><td>Apakah dia (perempuan) sedang berjalan di taman sekarang?</td></tr>
                <tr><td>Is it walking in the garden now?</td><td>Apakah dia (hewan) sedang berjalan di taman sekarang?</td></tr>
                <tr><td>Are we walking in the garden now?</td><td>Apakah kami sedang berjalan di taman sekarang?</td></tr>
                <tr><td>Are they walking in the garden now?</td><td>Apakah mereka sedang berjalan di taman sekarang?</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Adverb of Time (Present Continuous)</h3>
        <p>Berikut adalah Adverb of Time (Keterangan Waktu) yang sering digunakan dalam Present Continuous:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>now</td><td>sekarang</td></tr>
                <tr><td>currently</td><td>saat ini</td></tr>
                <tr><td>at the moment</td><td>saat ini</td></tr>
                <tr><td>right now</td><td>sekarang juga</td></tr>
                <tr><td>today</td><td>hari ini</td></tr>
                <tr><td>this week</td><td>minggu ini</td></tr>
                <tr><td>this month</td><td>bulan ini</td></tr>
                <tr><td>this year</td><td>tahun ini</td></tr>
                <tr><td>nowadays</td><td>dewasa ini / saat ini</td></tr>
            </tbody>
        </table>

        <p>Berikut adalah contoh kalimatnya:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>She is currently working in the office.</td><td>Dia sekarang sedang bekerja di kantor.</td></tr>
                <tr><td>They are studying English right now.</td><td>Mereka sedang belajar bahasa Inggris sekarang.</td></tr>
                <tr><td>We are at the moment watering the flower.</td><td>Kami saat ini sedang menyirami bunga.</td></tr>
                <tr><td>He is now running in the park.</td><td>Ia sekarang sedang berlari di taman.</td></tr>
            </tbody>
        </table>
    </div>

</div>

<div class="pos-section">
        <h3 class="pos-title">Simple Past</h3>
        <p><strong>Simple Past Tense</strong> adalah kalimat yang menunjukkan keadaan secara umum pada bentuk lampau.</p>

        <h4 class="pos-subtitle">Kalimat Positif</h4>
        <p>Simple Past Tense dibentuk dengan formula:</p>
        <div class="formula-box">Subject + Verb II</div>
        
        <p>Contoh penggunaan Simple Past Tense:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I walked in the garden yesterday</td><td>Saya berjalan di taman kemarin</td></tr>
                <tr><td>You walked in the garden yesterday</td><td>Kamu berjalan di taman kemarin</td></tr>
                <tr><td>He walked in the garden yesterday</td><td>Ia (laki-laki) berjalan di taman kemarin</td></tr>
                <tr><td>She walked in the garden yesterday</td><td>Ia (perempuan) berjalan di taman kemarin</td></tr>
                <tr><td>It walked in the garden yesterday</td><td>Ia (hewan) berjalan di taman kemarin</td></tr>
                <tr><td>We walked in the garden yesterday</td><td>Kami berjalan di taman kemarin</td></tr>
                <tr><td>They walked in the garden yesterday</td><td>Mereka berjalan di taman kemarin</td></tr>
            </tbody>
        </table>

        <p>Contoh penggunaan Simple Past Tense lainnya:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>David walked in the garden yesterday</td><td>David berjalan di taman kemarin</td></tr>
                <tr><td>Anna walked in the garden yesterday</td><td>Anna berjalan di taman kemarin</td></tr>
                <tr><td>The cat walked in the garden yesterday</td><td>Kucing itu berjalan di taman kemarin</td></tr>
                <tr><td>The cats walked in the garden yesterday</td><td>Kucing-kucing itu berjalan di taman kemarin</td></tr>
                <tr><td>David and Jack walked in the garden yesterday</td><td>David dan Jack berjalan di taman kemarin</td></tr>
                <tr><td>Mega and I walked in the garden yesterday</td><td>Mega dan saya berjalan di taman kemarin</td></tr>
                <tr><td>The students walked in the garden yesterday</td><td>Para pelajar berjalan di taman kemarin</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Kalimat Negatif</h4>
        <p>Simple Past Tense dalam bentuk negatif dibentuk dengan formula:</p>
        <div class="formula-box">Subject + did not + Verb I</div>
        <p>Dalam bentuk negatif, <strong>selalu menggunakan Verb I</strong> (tanpa ditambahkan -s atau -es).</p>

        <p>Contoh penggunaan kalimat Simple Past Tense dalam bentuk negatif:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I did not walk in the garden yesterday</td><td>Saya tidak berjalan di taman kemarin</td></tr>
                <tr><td>You did not walk in the garden yesterday</td><td>Kamu tidak berjalan di taman kemarin</td></tr>
                <tr><td>He did not walk in the garden yesterday</td><td>Ia (laki-laki) tidak berjalan di taman kemarin</td></tr>
                <tr><td>She did not walk in the garden yesterday</td><td>Ia (perempuan) tidak berjalan di taman kemarin</td></tr>
                <tr><td>It did not walk in the garden yesterday</td><td>Ia (hewan) tidak berjalan di taman kemarin</td></tr>
                <tr><td>We did not walk in the garden yesterday</td><td>Kami tidak berjalan di taman kemarin</td></tr>
                <tr><td>They did not walk in the garden yesterday</td><td>Mereka tidak berjalan di taman kemarin</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Kalimat Interogatif</h4>
        <p>Simple Past Tense dalam bentuk interogatif dibentuk dengan formula:</p>
        <div class="formula-box">Did + Subject + Verb I + ... ?</div>
        <p>Dalam bentuk interogatif, <strong>selalu menggunakan Verb I</strong> (tanpa ditambahkan -s atau -es).</p>

        <p>Contoh penggunaan kalimat Simple Past Tense dalam bentuk interogatif:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Did I walk in the garden yesterday?</td><td>Apakah saya berjalan di taman kemarin?</td></tr>
                <tr><td>Did you walk in the garden yesterday?</td><td>Apakah kamu berjalan di taman kemarin?</td></tr>
                <tr><td>Did he walk in the garden yesterday?</td><td>Apakah ia (laki-laki) berjalan di taman kemarin?</td></tr>
                <tr><td>Did she walk in the garden yesterday?</td><td>Apakah ia (perempuan) berjalan di taman kemarin?</td></tr>
                <tr><td>Did it walk in the garden yesterday?</td><td>Apakah ia (hewan) berjalan di taman kemarin?</td></tr>
                <tr><td>Did we walk in the garden yesterday?</td><td>Apakah kami berjalan di taman kemarin?</td></tr>
                <tr><td>Did they walk in the garden yesterday?</td><td>Apakah mereka berjalan di taman kemarin?</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Panduan Penambahan -ed pada Verb</h3>
        <p>Berikut adalah aturan untuk membentuk bentuk Verb II:</p>

        <h4 class="pos-subtitle">1. Menambahkan -ed</h4>
        <p>Untuk sebagian besar kata kerja, tambahkan akhiran <strong>-ed</strong>.</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Verb I</th>
                    <th>Verb II</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>want</td><td>wanted</td><td>menginginkan</td></tr>
                <tr><td>need</td><td>needed</td><td>memerlukan</td></tr>
                <tr><td>play</td><td>played</td><td>bermain</td></tr>
                <tr><td>open</td><td>opened</td><td>membuka</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">2. Menambahkan -d</h4>
        <p>Jika kata berakhiran <strong>-e</strong>, maka cukup menambahkan akhiran <strong>-d</strong>.</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Verb I</th>
                    <th>Verb II</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>live</td><td>lived</td><td>tinggal</td></tr>
                <tr><td>love</td><td>loved</td><td>mencintai</td></tr>
                <tr><td>dance</td><td>danced</td><td>menari</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">3. Mengganti -y dengan -ied</h4>
        <p>Jika sebelum <strong>-y</strong> adalah huruf konsonan (huruf mati), maka ganti dengan <strong>-ied</strong>.</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Verb I</th>
                    <th>Verb II</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>study</td><td>studied</td><td>belajar</td></tr>
                <tr><td>cry</td><td>cried</td><td>menangis</td></tr>
            </tbody>
        </table>

        <p>Jika sebelum <strong>-y</strong> adalah huruf vokal, maka hanya tambahkan <strong>-ed</strong>.</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Verb I</th>
                    <th>Verb II</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>play</td><td>played</td><td>bermain</td></tr>
                <tr><td>enjoy</td><td>enjoyed</td><td>menikmati</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">4. Menambahkan -ed (dobel konsonan)</h4>
        <p>Beberapa kata kerja ini, huruf konsonan terakhir digandakan, lalu tambahkan <strong>-ed</strong>.</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Verb I</th>
                    <th>Verb II</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>admit</td><td>admitted</td><td>mengakui</td></tr>
                <tr><td>prefer</td><td>preferred</td><td>lebih suka</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Singkatan Umum</h4>
        <ul class="note-list">
            <li>did not = <strong>didn’t</strong></li>
        </ul>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Adverb of Time (Simple Past)</h3>
        <p>Berikut adalah Adverb of Time (Keterangan Waktu) yang sering digunakan dalam Simple Past Tense:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>yesterday</td><td>kemarin</td></tr>
                <tr><td>last week</td><td>minggu lalu</td></tr>
                <tr><td>last month</td><td>bulan lalu</td></tr>
                <tr><td>last year</td><td>tahun lalu</td></tr>
                <tr><td>in 2020</td><td>pada tahun 2020</td></tr>
                <tr><td>earlier</td><td>tadi, sebelumnya</td></tr>
                <tr><td>this morning</td><td>tadi pagi</td></tr>
            </tbody>
        </table>

        <p>Berikut adalah contoh kalimatnya:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>She went to Surabaya yesterday.</td><td>Ia pergi ke Surabaya kemarin.</td></tr>
                <tr><td>He finished the project two weeks ago.</td><td>Ia menyelesaikan proyek itu dua minggu yang lalu.</td></tr>
                <tr><td>I seldom walked in the garden.</td><td>Saya jarang berjalan di taman.</td></tr>
                <tr><td>We ate an apple just now.</td><td>Saya baru saja makan apel.</td></tr>
            </tbody>
        </table>
    </div>


    <div class="pos-section">
        <h3 class="pos-title">Past Continuous</h3>
        <p><strong>Past Continuous</strong> adalah kalimat yang menunjukkan aksi yang <strong>sedang berlangsung pada waktu lampau</strong>.</p>

        <h4 class="pos-subtitle">Kalimat Positif</h4>
        <p>Past Continuous dibentuk dengan formula:</p>
        <div class="formula-box">Subject + was/were + Verb Ing</div>
        <ul class="note-list">
            <li>Subyek <strong>I, He, She, It</strong> menggunakan to be <strong>was</strong></li>
            <li>Subyek <strong>You, We, They</strong> menggunakan to be <strong>were</strong></li>
        </ul>
        <p><strong>Verb Ing</strong> adalah Verb I yang ditambahkan akhiran <strong>-ing</strong>.</p>

        <p>Contoh penggunaan Past Continuous:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I was walking in the garden at 7 pm yesterday</td><td>Saya sedang berjalan di taman pada jam 19.00 kemarin</td></tr>
                <tr><td>You were walking in the garden at 7 pm yesterday</td><td>Kamu sedang berjalan di taman pada jam 19.00 kemarin</td></tr>
                <tr><td>He was walking in the garden at 7 pm yesterday</td><td>Dia (laki-laki) sedang berjalan di taman pada jam 19.00 kemarin</td></tr>
                <tr><td>She was walking in the garden at 7 pm yesterday</td><td>Dia (perempuan) sedang berjalan di taman pada jam 19.00 kemarin</td></tr>
                <tr><td>It was walking in the garden at 7 pm yesterday</td><td>Dia (hewan) sedang berjalan di taman pada jam 19.00 kemarin</td></tr>
                <tr><td>We were walking in the garden at 7 pm yesterday</td><td>Kami sedang berjalan di taman pada jam 19.00 kemarin</td></tr>
                <tr><td>They were walking in the garden at 7 pm yesterday</td><td>Mereka sedang berjalan di taman pada jam 19.00 kemarin</td></tr>
            </tbody>
        </table>

        <p>Contoh penggunaan Past Continuous lainnya:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>David was walking in the garden at 7 pm yesterday</td><td>David sedang berjalan di taman pada jam 19.00 kemarin</td></tr>
                <tr><td>Anna was walking in the garden at 7 pm yesterday</td><td>Anna sedang berjalan di taman pada jam 19.00 kemarin</td></tr>
                <tr><td>The cat was walking in the garden at 7 pm yesterday</td><td>Kucing itu sedang berjalan di taman pada jam 19.00 kemarin</td></tr>
                <tr><td>The cats were walking in the garden at 7 pm yesterday</td><td>Kucing-kucing itu sedang berjalan di taman pada jam 19.00 kemarin</td></tr>
                <tr><td>David and Jack were walking in the garden at 7 pm yesterday</td><td>David dan Jack sedang berjalan di taman pada jam 19.00 kemarin</td></tr>
                <tr><td>Mega and I were walking in the garden at 7 pm yesterday</td><td>Mega dan saya sedang berjalan di taman pada jam 19.00 kemarin</td></tr>
                <tr><td>The students were walking in the garden at 7 pm yesterday</td><td>Para pelajar sedang berjalan di taman pada jam 19.00 kemarin</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Kalimat Negatif</h4>
        <p>Past Continuous Tense dalam bentuk negatif dibentuk dengan formula:</p>
        <div class="formula-box">Subject + was/were + not + Verb Ing</div>
        
        <p>Contoh penggunaan kalimat Past Continuous dalam bentuk negatif:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I was not walking in the garden at 7 pm yesterday</td><td>Saya tidak sedang berjalan di taman pada jam 19.00 kemarin</td></tr>
                <tr><td>You were not walking in the garden at 7 pm yesterday</td><td>Kamu tidak sedang berjalan di taman pada jam 19.00 kemarin</td></tr>
                <tr><td>He was not walking in the garden at 7 pm yesterday</td><td>Dia (laki-laki) tidak sedang berjalan di taman pada jam 19.00 kemarin</td></tr>
                <tr><td>She was not walking in the garden at 7 pm yesterday</td><td>Dia (perempuan) tidak sedang berjalan di taman pada jam 19.00 kemarin</td></tr>
                <tr><td>It was not walking in the garden at 7 pm yesterday</td><td>Dia (hewan) tidak sedang berjalan di taman pada jam 19.00 kemarin</td></tr>
                <tr><td>We were not walking in the garden at 7 pm yesterday</td><td>Kami tidak sedang berjalan di taman pada jam 19.00 kemarin</td></tr>
                <tr><td>They were not walking in the garden at 7 pm yesterday</td><td>Mereka tidak sedang berjalan di taman pada jam 19.00 kemarin</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Kalimat Interogatif</h4>
        <p>Past Continuous Tense dalam bentuk interogatif dibentuk dengan formula:</p>
        <div class="formula-box">Was/Were + Subject + Verb Ing + ... ?</div>
        
        <p>Contoh penggunaan kalimat Past Continuous dalam bentuk interogatif:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Was I walking in the garden at 7 pm yesterday?</td><td>Apakah saya sedang berjalan di taman pada jam 19.00 kemarin?</td></tr>
                <tr><td>Were you walking in the garden at 7 pm yesterday?</td><td>Apakah kamu sedang berjalan di taman pada jam 19.00 kemarin?</td></tr>
                <tr><td>Was he walking in the garden at 7 pm yesterday?</td><td>Apakah dia (laki-laki) sedang berjalan di taman pada jam 19.00 kemarin?</td></tr>
                <tr><td>Was she walking in the garden at 7 pm yesterday?</td><td>Apakah dia (perempuan) sedang berjalan di taman pada jam 19.00 kemarin?</td></tr>
                <tr><td>Was it walking in the garden at 7 pm yesterday?</td><td>Apakah dia (hewan) sedang berjalan di taman pada jam 19.00 kemarin?</td></tr>
                <tr><td>Were we walking in the garden at 7 pm yesterday?</td><td>Apakah kami sedang berjalan di taman pada jam 19.00 kemarin?</td></tr>
                <tr><td>Were they walking in the garden at 7 pm yesterday?</td><td>Apakah mereka sedang berjalan di taman pada jam 19.00 kemarin?</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Kombinasi dengan Simple Past</h4>
        <p>Past Continuous sering digunakan dengan Simple Past untuk menunjukkan aksi yang sedang berlangsung (Past Continuous) ketika aksi lain terjadi (Simple Past).</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I was reading a book when the phone rang this morning.</td><td>Saya sedang membaca buku ketika telepon berbunyi tadi pagi.</td></tr>
                <tr><td>We were watching a movie when he knocked on the door yesterday.</td><td>Kami sedang menonton film ketika dia mengetuk pintu kemarin.</td></tr>
                <tr><td>She was watching TV when I arrived.</td><td>Dia sedang menonton TV ketika saya datang.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Simple Future</h3>
        <p><strong>Simple Future Tense</strong> digunakan untuk membicarakan aksi atau kejadian yang akan terjadi di <strong>masa depan</strong>. Tense ini sering digunakan untuk menyatakan prediksi, rencana, keputusan spontan, atau janji.</p>

        <h4 class="pos-subtitle">Kalimat Positif</h4>
        <p>Simple Future Tense dibentuk dengan formula:</p>
        <div class="formula-box">Subject + will + Verb I</div>
        
        <p>Contoh penggunaan Simple Future Tense:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I will walk in the garden tomorrow</td><td>Saya akan berjalan di taman besok</td></tr>
                <tr><td>You will walk in the garden tomorrow</td><td>Kamu akan berjalan di taman besok</td></tr>
                <tr><td>He will walk in the garden tomorrow</td><td>Dia (laki-laki) akan berjalan di taman besok</td></tr>
                <tr><td>She will walk in the garden tomorrow</td><td>Dia (perempuan) akan berjalan di taman besok</td></tr>
                <tr><td>It will walk in the garden tomorrow</td><td>Ia (hewan) akan berjalan di taman besok</td></tr>
                <tr><td>We will walk in the garden tomorrow</td><td>Kami akan berjalan di taman besok</td></tr>
                <tr><td>They will walk in the garden tomorrow</td><td>Mereka akan berjalan di taman besok</td></tr>
            </tbody>
        </table>

        <p>Contoh penggunaan Simple Future Tense lainnya:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>David will walk in the garden tomorrow</td><td>David akan berjalan di taman besok</td></tr>
                <tr><td>Anna will walk in the garden tomorrow</td><td>Anna akan berjalan di taman besok</td></tr>
                <tr><td>The cat will walk in the garden tomorrow</td><td>Kucing itu akan berjalan di taman besok</td></tr>
                <tr><td>The cats will walk in the garden tomorrow</td><td>Kucing-kucing itu akan berjalan di taman besok</td></tr>
                <tr><td>David and Jack will walk in the garden tomorrow</td><td>David dan Jack akan berjalan di taman besok</td></tr>
                <tr><td>Mega and I will walk in the garden tomorrow</td><td>Mega dan saya akan berjalan di taman besok</td></tr>
                <tr><td>The students will walk in the garden tomorrow</td><td>Para pelajar akan berjalan di taman besok</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Kalimat Negatif</h4>
        <p>Simple Future Tense dalam bentuk negatif dibentuk dengan formula:</p>
        <div class="formula-box">Subject + will not + Verb I</div>
        
        <p>Contoh penggunaan kalimat Simple Future Tense dalam bentuk negatif:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I will not walk in the garden tomorrow</td><td>Saya tidak akan berjalan di taman besok</td></tr>
                <tr><td>You will not walk in the garden tomorrow</td><td>Kamu tidak akan berjalan di taman besok</td></tr>
                <tr><td>He will not walk in the garden tomorrow</td><td>Dia (laki-laki) tidak akan berjalan di taman besok</td></tr>
                <tr><td>She will not walk in the garden tomorrow</td><td>Dia (perempuan) tidak akan berjalan di taman besok</td></tr>
                <tr><td>It will not walk in the garden tomorrow</td><td>Ia (hewan) tidak akan berjalan di taman besok</td></tr>
                <tr><td>We will not walk in the garden tomorrow</td><td>Kami tidak akan berjalan di taman besok</td></tr>
                <tr><td>They will not walk in the garden tomorrow</td><td>Mereka tidak akan berjalan di taman besok</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Kalimat Interogatif</h4>
        <p>Simple Future Tense dalam bentuk interogatif dibentuk dengan formula:</p>
        <div class="formula-box">Will + Subject + Verb I + ... ?</div>
        
        <p>Contoh penggunaan kalimat Simple Future Tense dalam bentuk interogatif:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Will I walk in the garden tomorrow?</td><td>Akankah saya berjalan di taman besok?</td></tr>
                <tr><td>Will you walk in the garden tomorrow?</td><td>Akankah kamu berjalan di taman besok?</td></tr>
                <tr><td>Will he walk in the garden tomorrow?</td><td>Akankah dia (laki-laki) berjalan di taman besok?</td></tr>
                <tr><td>Will she walk in the garden tomorrow?</td><td>Akankah dia (perempuan) berjalan di taman besok?</td></tr>
                <tr><td>Will it walk in the garden tomorrow?</td><td>Akankah ia (hewan) berjalan di taman besok?</td></tr>
                <tr><td>Will we walk in the garden tomorrow?</td><td>Akankah kami berjalan di taman besok?</td></tr>
                <tr><td>Will they walk in the garden tomorrow?</td><td>Akankah mereka berjalan di taman besok?</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Singkatan Umum</h4>
        <p>Berikut adalah singkatan yang umum digunakan pada Simple Future Tense:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Bentuk Penuh</th>
                    <th>Singkatan</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I will</td><td>I'll</td></tr>
                <tr><td>He will</td><td>He'll</td></tr>
                <tr><td>She will</td><td>She'll</td></tr>
                <tr><td>It will</td><td>It'll</td></tr>
                <tr><td>We will</td><td>We'll</td></tr>
                <tr><td>They will</td><td>They'll</td></tr>
                <tr><td>You will</td><td>You'll</td></tr>
                <tr><td>I will not</td><td>I won't</td></tr>
                <tr><td>He will not</td><td>He won't</td></tr>
                <tr><td>She will not</td><td>She won't</td></tr>
                <tr><td>It will not</td><td>It won't</td></tr>
                <tr><td>We will not</td><td>We won't</td></tr>
                <tr><td>They will not</td><td>They won't</td></tr>
                <tr><td>You will not</td><td>You won't</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Adverb of Time</h4>
        <p>Berikut adalah Adverb of Time (Keterangan Waktu) yang sering digunakan dalam Simple Future Tense:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>tomorrow</td><td>besok</td></tr>
                <tr><td>next week</td><td>minggu depan</td></tr>
                <tr><td>soon</td><td>segera</td></tr>
                <tr><td>later</td><td>nanti</td></tr>
                <tr><td>in the future</td><td>pada masa mendatang</td></tr>
                <tr><td>tonight</td><td>malam ini, nanti malam</td></tr>
            </tbody>
        </table>

        <p>Berikut adalah contoh kalimatnya:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I will travel to Bali next week.</td><td>Saya akan pergi ke Bali minggu depan.</td></tr>
                <tr><td>I will buy a phone soon.</td><td>Saya akan segera membeli telepon.</td></tr>
                <tr><td>I will watch a movie tonight.</td><td>Saya akan nonton film nanti malam.</td></tr>
            </tbody>
        </table>
    </div>


    <div class="pos-section">
        <h3 class="pos-title">Future Continuous</h3>
        <p><strong>Future Continuous Tense</strong> digunakan untuk menyatakan aksi yang akan sedang berlangsung di masa depan. Biasanya dipakai untuk menggambarkan kegiatan yang terjadi pada waktu tertentu di masa depan.</p>

        <h4 class="pos-subtitle">Kalimat Positif</h4>
        <p>Future Continuous Tense dibentuk dengan formula:</p>
        <div class="formula-box">Subject + will be + Verb Ing</div>
        
        <p>Contoh penggunaan Future Continuous Tense:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I will be walking in the garden tomorrow morning</td><td>Saya akan sedang berjalan di taman besok pagi</td></tr>
                <tr><td>You will be walking in the garden tomorrow morning</td><td>Kamu akan sedang berjalan di taman besok pagi</td></tr>
                <tr><td>He will be walking in the garden tomorrow morning</td><td>Dia (laki-laki) akan sedang berjalan di taman besok pagi</td></tr>
                <tr><td>She will be walking in the garden tomorrow morning</td><td>Dia (perempuan) akan sedang berjalan di taman besok pagi</td></tr>
                <tr><td>It will be walking in the garden tomorrow morning</td><td>Ia (hewan) akan sedang berjalan di taman besok pagi</td></tr>
                <tr><td>We will be walking in the garden tomorrow morning</td><td>Kami akan sedang berjalan di taman besok pagi</td></tr>
                <tr><td>They will be walking in the garden tomorrow morning</td><td>Mereka akan sedang berjalan di taman besok pagi</td></tr>
            </tbody>
        </table>

        <p>Contoh penggunaan Future Continuous Tense lainnya:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>David will be walking in the garden tomorrow morning</td><td>David akan sedang berjalan di taman besok pagi</td></tr>
                <tr><td>Anna will be walking in the garden tomorrow morning</td><td>Anna akan sedang berjalan di taman besok pagi</td></tr>
                <tr><td>The cat will be walking in the garden tomorrow morning</td><td>Kucing itu akan sedang berjalan di taman besok pagi</td></tr>
                <tr><td>The cats will be walking in the garden tomorrow morning</td><td>Kucing-kucing itu akan sedang berjalan di taman besok pagi</td></tr>
                <tr><td>David and Jack will be walking in the garden tomorrow morning</td><td>David dan Jack akan sedang berjalan di taman besok pagi</td></tr>
                <tr><td>Mega and I will be walking in the garden tomorrow morning</td><td>Mega dan saya akan sedang berjalan di taman besok pagi</td></tr>
                <tr><td>The students will be walking in the garden tomorrow morning</td><td>Para pelajar akan sedang berjalan di taman besok pagi</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Kalimat Negatif</h4>
        <p>Future Continuous Tense dalam bentuk negatif dibentuk dengan formula:</p>
        <div class="formula-box">Subject + will not be + Verb Ing</div>
        
        <p>Contoh penggunaan kalimat Future Continuous Tense dalam bentuk negatif:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I will not be walking in the garden tomorrow morning</td><td>Saya tidak akan sedang berjalan di taman besok pagi</td></tr>
                <tr><td>You will not be walking in the garden tomorrow morning</td><td>Kamu tidak akan sedang berjalan di taman besok pagi</td></tr>
                <tr><td>He will not be walking in the garden tomorrow morning</td><td>Dia (laki-laki) tidak akan sedang berjalan di taman besok pagi</td></tr>
                <tr><td>She will not be walking in the garden tomorrow morning</td><td>Dia (perempuan) tidak akan sedang berjalan di taman besok pagi</td></tr>
                <tr><td>It will not be walking in the garden tomorrow morning</td><td>Ia (hewan) tidak akan sedang berjalan di taman besok pagi</td></tr>
                <tr><td>We will not be walking in the garden tomorrow morning</td><td>Kami tidak akan sedang berjalan di taman besok pagi</td></tr>
                <tr><td>They will not be walking in the garden tomorrow morning</td><td>Mereka tidak akan sedang berjalan di taman besok pagi</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Kalimat Interogatif</h4>
        <p>Future Continuous Tense dalam bentuk interogatif dibentuk dengan formula:</p>
        <div class="formula-box">Will + Subject + be + Verb Ing + ... ?</div>
        
        <p>Contoh penggunaan kalimat Future Continuous Tense dalam bentuk interogatif:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Will I be walking in the garden tomorrow morning?</td><td>Akankah saya sedang berjalan di taman besok pagi?</td></tr>
                <tr><td>Will you be walking in the garden tomorrow morning?</td><td>Akankah kamu sedang berjalan di taman besok pagi?</td></tr>
                <tr><td>Will he be walking in the garden tomorrow morning?</td><td>Akankah dia (laki-laki) sedang berjalan di taman besok pagi?</td></tr>
                <tr><td>Will she be walking in the garden tomorrow morning?</td><td>Akankah dia (perempuan) sedang berjalan di taman besok pagi?</td></tr>
                <tr><td>Will it be walking in the garden tomorrow morning?</td><td>Akankah ia (hewan) sedang berjalan di taman besok pagi?</td></tr>
                <tr><td>Will we be walking in the garden tomorrow morning?</td><td>Akankah kami sedang berjalan di taman besok pagi?</td></tr>
                <tr><td>Will they be walking in the garden tomorrow morning?</td><td>Akankah mereka sedang berjalan di taman besok pagi?</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Adverb of Time</h4>
        <p>Berikut adalah Adverb of Time (Keterangan Waktu) yang sering digunakan dalam Future Continuous Tense:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>at this time tomorrow</td><td>pada waktu ini besok</td></tr>
                <tr><td>at 7 o'clock tonight</td><td>pada pukul 7 malam ini</td></tr>
                <tr><td>in a few hours</td><td>dalam beberapa jam lagi</td></tr>
                <tr><td>by this time next week</td><td>pada waktu ini minggu depan</td></tr>
                <tr><td>in the future</td><td>pada masa mendatang</td></tr>
                <tr><td>tonight</td><td>malam ini, nanti malam</td></tr>
            </tbody>
        </table>

        <p>Berikut adalah contoh kalimatnya:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>At this time tomorrow, I will be taking my exam.</td><td>Besok pada waktu ini, saya akan sedang mengikuti ujian.</td></tr>
                <tr><td>By this time next week, they will be moving to their new house.</td><td>Pada waktu ini minggu depan, mereka akan sedang pindahan ke rumah baru.</td></tr>
                <tr><td>Tomorrow at 9 p.m., she will be flying to Japan.</td><td>Besok pukul 9 malam, dia akan sedang terbang ke Jepang.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Simple Perfect</h3>
        <p><strong>Simple Perfect Tense</strong> (atau Present Perfect Tense) adalah kalimat yang menunjukkan keadaan yang <strong>telah selesai</strong> dilakukan.</p>
        
        <p>Contoh:</p>
        <ul class="note-list">
            <li><strong>I have washed the car.</strong> (Saya telah mencuci mobil)
                <br><span style="color: #64748b;">Fakta sekarang: Sekarang sudah selesai mencuci.</span>
            </li>
            <li><strong>He has watched TV.</strong> (Ia telah menonton televisi)
                <br><span style="color: #64748b;">Fakta sekarang: Sekarang sudah selesai menonton televisi.</span>
            </li>
        </ul>

        <h4 class="pos-subtitle">Kalimat Positif</h4>
        <p>Simple Perfect Tense dibentuk dengan formula:</p>
        <div class="formula-box">Subject + have/has + Verb III</div>
        <ul class="note-list">
            <li>Subyek <strong>He, She, It</strong> menggunakan <strong>has</strong></li>
            <li>Subyek <strong>I, You, We, They</strong> menggunakan <strong>have</strong></li>
        </ul>

        <p>Contoh penggunaan Simple Perfect Tense:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I have walked in the garden</td><td>Saya telah berjalan di taman</td></tr>
                <tr><td>You have walked in the garden</td><td>Kamu telah berjalan di taman</td></tr>
                <tr><td>He has walked in the garden</td><td>Dia (laki-laki) telah berjalan di taman</td></tr>
                <tr><td>She has walked in the garden</td><td>Dia (perempuan) telah berjalan di taman</td></tr>
                <tr><td>It has walked in the garden</td><td>Ia (hewan) telah berjalan di taman</td></tr>
                <tr><td>We have walked in the garden</td><td>Kami telah berjalan di taman</td></tr>
                <tr><td>They have walked in the garden</td><td>Mereka telah berjalan di taman</td></tr>
            </tbody>
        </table>

        <p>Contoh penggunaan Simple Perfect Tense lainnya:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>David has walked in the garden</td><td>David telah berjalan di taman</td></tr>
                <tr><td>Anna has walked in the garden</td><td>Anna telah berjalan di taman</td></tr>
                <tr><td>The cat has walked in the garden</td><td>Kucing itu telah berjalan di taman</td></tr>
                <tr><td>The cats have walked in the garden</td><td>Kucing-kucing itu telah berjalan di taman</td></tr>
                <tr><td>David and Jack have walked in the garden</td><td>David dan Jack telah berjalan di taman</td></tr>
                <tr><td>Mega and I have walked in the garden</td><td>Mega dan saya telah berjalan di taman</td></tr>
                <tr><td>The students have walked in the garden</td><td>Para pelajar telah berjalan di taman</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Kalimat Negatif</h4>
        <p>Simple Perfect Tense dalam bentuk negatif dibentuk dengan formula:</p>
        <div class="formula-box">Subject + have/has not + Verb III</div>
        
        <p>Contoh penggunaan kalimat Simple Perfect Tense dalam bentuk negatif:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I have not walked in the garden yet</td><td>Saya belum berjalan di taman</td></tr>
                <tr><td>You have not walked in the garden yet</td><td>Kamu belum berjalan di taman</td></tr>
                <tr><td>He has not walked in the garden yet</td><td>Dia (laki-laki) belum berjalan di taman</td></tr>
                <tr><td>She has not walked in the garden yet</td><td>Dia (perempuan) belum berjalan di taman</td></tr>
                <tr><td>It has not walked in the garden yet</td><td>Ia (hewan) belum berjalan di taman</td></tr>
                <tr><td>We have not walked in the garden yet</td><td>Kami belum berjalan di taman</td></tr>
                <tr><td>They have not walked in the garden yet</td><td>Mereka belum berjalan di taman</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Kalimat Interogatif</h4>
        <p>Simple Perfect Tense dalam bentuk interogatif dibentuk dengan formula:</p>
        <div class="formula-box">Have/Has + Subject + Verb III + ... ?</div>
        
        <p>Contoh penggunaan kalimat Simple Perfect Tense dalam bentuk interogatif:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Have I walked in the garden?</td><td>Apakah saya telah berjalan di taman?</td></tr>
                <tr><td>Have you walked in the garden?</td><td>Apakah kamu telah berjalan di taman?</td></tr>
                <tr><td>Has he walked in the garden?</td><td>Apakah dia (laki-laki) telah berjalan di taman?</td></tr>
                <tr><td>Has she walked in the garden?</td><td>Apakah dia (perempuan) telah berjalan di taman?</td></tr>
                <tr><td>Has it walked in the garden?</td><td>Apakah Ia (hewan) telah berjalan di taman?</td></tr>
                <tr><td>Have we walked in the garden?</td><td>Apakah kami telah berjalan di taman?</td></tr>
                <tr><td>Have they walked in the garden?</td><td>Apakah mereka telah berjalan di taman?</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Singkatan Umum</h4>
        <p>Berikut adalah singkatan yang umum digunakan pada Simple Perfect Tense:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Singkatan</th>
                    <th>English</th>
                    <th>Singkatan</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I have</td><td>I've</td><td>have not</td><td>haven't</td></tr>
                <tr><td>We have</td><td>We've</td><td>has not</td><td>hasn't</td></tr>
                <tr><td>You have</td><td>You've</td><td></td><td></td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Adverb of Time</h4>
        <p>Berikut adalah Adverb of Time (Keterangan Waktu) yang sering digunakan dalam Simple Perfect Tense:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>already</td><td>telah</td><td>since</td><td>sejak</td></tr>
                <tr><td>just</td><td>baru saja</td><td>for</td><td>selama</td></tr>
                <tr><td>yet</td><td>belum</td><td>recently</td><td>baru-baru ini</td></tr>
                <tr><td>ever</td><td>pernah</td><td>lately</td><td>akhir-akhir ini</td></tr>
                <tr><td>never</td><td>tidak pernah</td><td></td><td></td></tr>
            </tbody>
        </table>

        <p>Berikut adalah contoh kalimatnya:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I have just finished my homework.</td><td>Saya baru saja menyelesaikan PR saya.</td></tr>
                <tr><td>She has already left for school.</td><td>Dia sudah pergi ke sekolah.</td></tr>
                <tr><td>They haven’t arrived yet.</td><td>Mereka belum sampai.</td></tr>
                <tr><td>Have you ever been to Japan?</td><td>Apakah kamu pernah ke Jepang?</td></tr>
                <tr><td>He has worked here for five years.</td><td>Dia telah bekerja di sini selama lima tahun.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Perfect Continuous</h3>
        <p><strong>Perfect Continuous Tense</strong> (atau Present Perfect Continuous) adalah kalimat yang menunjukkan keadaan yang <strong>telah dilakukan</strong> dan masih berlangsung.</p>
        
        <p>Contoh:</p>
        <ul class="note-list">
            <li><strong>I have been studying for 2 hours.</strong> (Saya telah belajar selama 2 jam)
                <br><span style="color: #64748b;">Fakta sekarang: Sampai sekarang saya masih tetap belajar.</span>
            </li>
            <li><strong>He has been working since 9 a.m.</strong> (Ia telah bekerja sejak jam 9.00)
                <br><span style="color: #64748b;">Fakta sekarang: Sampai sekarang ia masih tetap bekerja.</span>
            </li>
        </ul>

        <h4 class="pos-subtitle">Kalimat Positif</h4>
        <p>Perfect Continuous Tense dibentuk dengan formula:</p>
        <div class="formula-box">Subject + have/has + been + Verb Ing</div>
        <ul class="note-list">
            <li>Subyek <strong>He, She, It</strong> menggunakan <strong>has</strong></li>
            <li>Subyek <strong>I, You, We, They</strong> menggunakan <strong>have</strong></li>
        </ul>

        <p>Contoh penggunaan Perfect Continuous Tense:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I have been walking in the garden</td><td>Saya telah berjalan di taman</td></tr>
                <tr><td>You have been walking in the garden</td><td>Kamu telah berjalan di taman</td></tr>
                <tr><td>He has been walking in the garden</td><td>Dia (laki-laki) telah berjalan di taman</td></tr>
                <tr><td>She has been walking in the garden</td><td>Dia (perempuan) telah berjalan di taman</td></tr>
                <tr><td>It has been walking in the garden</td><td>Ia (hewan) telah berjalan di taman</td></tr>
                <tr><td>We have been walking in the garden</td><td>Kami telah berjalan di taman</td></tr>
                <tr><td>They have been walking in the garden</td><td>Mereka telah berjalan di taman</td></tr>
            </tbody>
        </table>

        <p>Contoh penggunaan Perfect Continuous Tense lainnya:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>David has been walking in the garden</td><td>David telah berjalan di taman</td></tr>
                <tr><td>Anna has been walking in the garden</td><td>Anna telah berjalan di taman</td></tr>
                <tr><td>The cat has been walking in the garden</td><td>Kucing itu telah berjalan di taman</td></tr>
                <tr><td>The cats have been walking in the garden</td><td>Kucing-kucing itu telah berjalan di taman</td></tr>
                <tr><td>David and Jack have been walking in the garden</td><td>David dan Jack telah berjalan di taman</td></tr>
                <tr><td>Mega and I have been walking in the garden</td><td>Mega dan saya telah berjalan di taman</td></tr>
                <tr><td>The students have been walking in the garden</td><td>Para pelajar telah berjalan di taman</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Kalimat Negatif</h4>
        <p>Perfect Continuous Tense dalam bentuk negatif dibentuk dengan formula:</p>
        <div class="formula-box">Subject + have/has not + been + Verb Ing</div>
        
        <p>Contoh penggunaan kalimat Perfect Continuous Tense dalam bentuk negatif:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I have not been walking in the garden yet</td><td>Saya belum berjalan di taman</td></tr>
                <tr><td>You have not been walking in the garden yet</td><td>Kamu belum berjalan di taman</td></tr>
                <tr><td>He has not been walking in the garden yet</td><td>Dia (laki-laki) belum berjalan di taman</td></tr>
                <tr><td>She has not been walking in the garden yet</td><td>Dia (perempuan) belum berjalan di taman</td></tr>
                <tr><td>It has not been walking in the garden yet</td><td>Ia (hewan) belum berjalan di taman</td></tr>
                <tr><td>We have not been walking in the garden yet</td><td>Kami belum berjalan di taman</td></tr>
                <tr><td>They have not been walking in the garden yet</td><td>Mereka belum berjalan di taman</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Kalimat Interogatif</h4>
        <p>Perfect Continuous Tense dalam bentuk interogatif dibentuk dengan formula:</p>
        <div class="formula-box">Have/Has + Subject + been + Verb Ing + ... ?</div>
        
        <p>Contoh penggunaan kalimat Perfect Continuous Tense dalam bentuk interogatif:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Have I been walking in the garden?</td><td>Apakah saya telah berjalan di taman?</td></tr>
                <tr><td>Have you been walking in the garden?</td><td>Apakah kamu telah berjalan di taman?</td></tr>
                <tr><td>Has he been walking in the garden?</td><td>Apakah dia (laki-laki) telah berjalan di taman?</td></tr>
                <tr><td>Has she been walking in the garden?</td><td>Apakah dia (perempuan) telah berjalan di taman?</td></tr>
                <tr><td>Has it been walking in the garden?</td><td>Apakah Ia (hewan) telah berjalan di taman?</td></tr>
                <tr><td>Have we been walking in the garden?</td><td>Apakah kami telah berjalan di taman?</td></tr>
                <tr><td>Have they been walking in the garden?</td><td>Apakah mereka telah berjalan di taman?</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Adverb of Time</h4>
        <p>Berikut adalah Adverb of Time (Keterangan Waktu) yang sering digunakan dalam Perfect Continuous Tense:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>for ...</td><td>selama</td></tr>
                <tr><td>since ...</td><td>sejak</td></tr>
                <tr><td>all day</td><td>seharian</td></tr>
                <tr><td>lately</td><td>baru-baru ini</td></tr>
                <tr><td>recently</td><td>baru-baru ini</td></tr>
                <tr><td>by the time ...</td><td>pada saat ...</td></tr>
            </tbody>
        </table>

        <p>Berikut adalah contoh kalimatnya:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I have been living here for five years.</td><td>Saya telah tinggal di sini selama lima tahun.</td></tr>
                <tr><td>She has been waiting since morning.</td><td>Ia telah menunggu sejak pagi tadi.</td></tr>
                <tr><td>I have been studying for 2 hours.</td><td>Saya telah belajar selama 2 jam.</td></tr>
                <tr><td>He has been working since 9 a.m.</td><td>Ia telah bekerja sejak pukul 9.00.</td></tr>
                <tr><td>She has been cleaning all day.</td><td>Ia telah membersihkan sepanjang hari.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Past Perfect</h3>
        <p><strong>Past Perfect Tense</strong> adalah kalimat yang menunjukkan keadaan yang <strong>telah selesai</strong> dilakukan di masa lampau.</p>
        
        <p>Contoh:</p>
        <ul class="note-list">
            <li><strong>He had washed the car when I arrived at home yesterday at 9 a.m.</strong> (Ia telah selesai mencuci mobil ketika saya datang kemarin jam 9.00)
                <br><span style="color: #64748b;">Fakta kemarin: Ia telah selesai mencuci mobil, ketika saya tiba kemarin.</span>
            </li>
        </ul>

        <h4 class="pos-subtitle">Kalimat Positif</h4>
        <p>Past Perfect Tense dibentuk dengan formula:</p>
        <div class="formula-box">Subject + had + Verb III</div>
        
        <p>Contoh penggunaan Past Perfect Tense:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I had walked in the garden</td><td>Saya telah berjalan di taman</td></tr>
                <tr><td>You had walked in the garden</td><td>Kamu telah berjalan di taman</td></tr>
                <tr><td>He had walked in the garden</td><td>Dia (laki-laki) telah berjalan di taman</td></tr>
                <tr><td>She had walked in the garden</td><td>Dia (perempuan) telah berjalan di taman</td></tr>
                <tr><td>It had walked in the garden</td><td>Ia (hewan) telah berjalan di taman</td></tr>
                <tr><td>We had walked in the garden</td><td>Kami telah berjalan di taman</td></tr>
                <tr><td>They had walked in the garden</td><td>Mereka telah berjalan di taman</td></tr>
            </tbody>
        </table>

        <p>Contoh penggunaan Past Perfect Tense lainnya:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>David had walked in the garden</td><td>David telah berjalan di taman</td></tr>
                <tr><td>Anna had walked in the garden</td><td>Anna telah berjalan di taman</td></tr>
                <tr><td>The cat had walked in the garden</td><td>Kucing itu telah berjalan di taman</td></tr>
                <tr><td>The cats had walked in the garden</td><td>Kucing-kucing itu telah berjalan di taman</td></tr>
                <tr><td>David and Jack had walked in the garden</td><td>David dan Jack telah berjalan di taman</td></tr>
                <tr><td>Mega and I had walked in the garden</td><td>Mega dan saya telah berjalan di taman</td></tr>
                <tr><td>The students had walked in the garden</td><td>Para pelajar telah berjalan di taman</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Kalimat Negatif</h4>
        <p>Past Perfect Tense dalam bentuk negatif dibentuk dengan formula:</p>
        <div class="formula-box">Subject + had not + Verb III</div>
        
        <p>Contoh penggunaan kalimat Past Perfect Tense dalam bentuk negatif:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I had not walked in the garden yet</td><td>Saya belum berjalan di taman</td></tr>
                <tr><td>You had not walked in the garden yet</td><td>Kamu belum berjalan di taman</td></tr>
                <tr><td>He had not walked in the garden yet</td><td>Dia (laki-laki) belum berjalan di taman</td></tr>
                <tr><td>She had not walked in the garden yet</td><td>Dia (perempuan) belum berjalan di taman</td></tr>
                <tr><td>It had not walked in the garden yet</td><td>Ia (hewan) belum berjalan di taman</td></tr>
                <tr><td>We had not walked in the garden yet</td><td>Kami belum berjalan di taman</td></tr>
                <tr><td>They had not walked in the garden yet</td><td>Mereka belum berjalan di taman</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Kalimat Interogatif</h4>
        <p>Past Perfect Tense dalam bentuk interogatif dibentuk dengan formula:</p>
        <div class="formula-box">Had + Subject + Verb III + ... ?</div>
        
        <p>Contoh penggunaan kalimat Past Perfect Tense dalam bentuk interogatif:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Had I walked in the garden?</td><td>Apakah saya telah berjalan di taman?</td></tr>
                <tr><td>Had you walked in the garden?</td><td>Apakah kamu telah berjalan di taman?</td></tr>
                <tr><td>Had he walked in the garden?</td><td>Apakah dia (laki-laki) telah berjalan di taman?</td></tr>
                <tr><td>Had she walked in the garden?</td><td>Apakah dia (perempuan) telah berjalan di taman?</td></tr>
                <tr><td>Had it walked in the garden?</td><td>Apakah Ia (hewan) telah berjalan di taman?</td></tr>
                <tr><td>Had we walked in the garden?</td><td>Apakah kami telah berjalan di taman?</td></tr>
                <tr><td>Had they walked in the garden?</td><td>Apakah mereka telah berjalan di taman?</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Singkatan Umum</h4>
        <p>Berikut adalah singkatan yang umum digunakan pada Past Perfect Tense:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Singkatan</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I had</td><td>I'd</td></tr>
                <tr><td>We had</td><td>We'd</td></tr>
                <tr><td>You had</td><td>You'd</td></tr>
                <tr><td>had not</td><td>hadn't</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Past Perfect Continuous</h3>
        <p><strong>Past Perfect Continuous Tense</strong> adalah kalimat yang menunjukkan keadaan yang <strong>telah dilakukan</strong> dan masih berlangsung pada waktu lampau.</p>
        
        <p>Contoh:</p>
        <ul class="note-list">
            <li><strong>He had been washing the car when I arrived at home yesterday at 9 a.m.</strong> (Ia masih mencuci mobil ketika saya datang kemarin jam 9.00)
                <br><span style="color: #64748b;">Fakta kemarin: Ia masih mencuci mobil, ketika saya tiba kemarin.</span>
            </li>
        </ul>

        <h4 class="pos-subtitle">Kalimat Positif</h4>
        <p>Past Perfect Continuous Tense dibentuk dengan formula:</p>
        <div class="formula-box">Subject + had + been + Verb Ing</div>
        
        <p>Contoh penggunaan Past Perfect Continuous Tense:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I had been walking in the garden</td><td>Saya telah berjalan di taman</td></tr>
                <tr><td>You had been walking in the garden</td><td>Kamu telah berjalan di taman</td></tr>
                <tr><td>He had been walking in the garden</td><td>Dia (laki-laki) telah berjalan di taman</td></tr>
                <tr><td>She had been walking in the garden</td><td>Dia (perempuan) telah berjalan di taman</td></tr>
                <tr><td>It had been walking in the garden</td><td>Ia (hewan) telah berjalan di taman</td></tr>
                <tr><td>We had been walking in the garden</td><td>Kami telah berjalan di taman</td></tr>
                <tr><td>They had been walking in the garden</td><td>Mereka telah berjalan di taman</td></tr>
            </tbody>
        </table>

        <p>Contoh penggunaan Past Perfect Continuous Tense lainnya:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>David had been walking in the garden</td><td>David telah berjalan di taman</td></tr>
                <tr><td>Anna had been walking in the garden</td><td>Anna telah berjalan di taman</td></tr>
                <tr><td>The cat had been walking in the garden</td><td>Kucing itu telah berjalan di taman</td></tr>
                <tr><td>The cats had been walking in the garden</td><td>Kucing-kucing itu telah berjalan di taman</td></tr>
                <tr><td>David and Jack had been walking in the garden</td><td>David dan Jack telah berjalan di taman</td></tr>
                <tr><td>Mega and I had been walking in the garden</td><td>Mega dan saya telah berjalan di taman</td></tr>
                <tr><td>The students had been walking in the garden</td><td>Para pelajar telah berjalan di taman</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Kalimat Negatif</h4>
        <p>Past Perfect Continuous Tense dalam bentuk negatif dibentuk dengan formula:</p>
        <div class="formula-box">Subject + had not + been + Verb Ing</div>
        
        <p>Contoh penggunaan kalimat Past Perfect Continuous Tense dalam bentuk negatif:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I had not been walking in the garden yet</td><td>Saya belum berjalan di taman</td></tr>
                <tr><td>You had not been walking in the garden yet</td><td>Kamu belum berjalan di taman</td></tr>
                <tr><td>He had not been walking in the garden yet</td><td>Dia (laki-laki) belum berjalan di taman</td></tr>
                <tr><td>She had not been walking in the garden yet</td><td>Dia (perempuan) belum berjalan di taman</td></tr>
                <tr><td>It had not been walking in the garden yet</td><td>Ia (hewan) belum berjalan di taman</td></tr>
                <tr><td>We had not been walking in the garden yet</td><td>Kami belum berjalan di taman</td></tr>
                <tr><td>They had not been walking in the garden yet</td><td>Mereka belum berjalan di taman</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Kalimat Interogatif</h4>
        <p>Past Perfect Continuous Tense dalam bentuk interogatif dibentuk dengan formula:</p>
        <div class="formula-box">Had + Subject + been + Verb Ing + ... ?</div>
        
        <p>Contoh penggunaan kalimat Past Perfect Continuous Tense dalam bentuk interogatif:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Had I been walking in the garden?</td><td>Apakah saya telah berjalan di taman?</td></tr>
                <tr><td>Had you been walking in the garden?</td><td>Apakah kamu telah berjalan di taman?</td></tr>
                <tr><td>Had he been walking in the garden?</td><td>Apakah dia (laki-laki) telah berjalan di taman?</td></tr>
                <tr><td>Had she been walking in the garden?</td><td>Apakah dia (perempuan) telah berjalan di taman?</td></tr>
                <tr><td>Had it been walking in the garden?</td><td>Apakah Ia (hewan) telah berjalan di taman?</td></tr>
                <tr><td>Had we been walking in the garden?</td><td>Apakah kami telah berjalan di taman?</td></tr>
                <tr><td>Had they been walking in the garden?</td><td>Apakah mereka telah berjalan di taman?</td></tr>
            </tbody>
        </table>
    </div>

<div class="back-nav">
    <a href="index.php?hal=grammar" class="btn-secondary">← Kembali ke Materi Grammar</a>
</div>