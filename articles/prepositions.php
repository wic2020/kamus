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

    .back-nav {
        margin-top: 50px;
        text-align: center;
        border-top: 2px dashed #e2e8f0;
        padding-top: 30px;
    }
</style>

<div class="article-header">
    <h2 class="section-title">Preposition (Kata Depan)</h2>
    <p>Panduan lengkap tentang jenis-jenis kata depan dan penggunaannya dalam kalimat.</p>
</div>

<div class="article-content">

    <div class="pos-section">
        <h3 class="pos-title">Preposition of Time</h3>
        <p><strong>Preposition of Time</strong> digunakan untuk menunjukkan waktu atau durasi suatu kejadian.</p>
        <p>Berikut adalah daftar Preposition of Time lengkap dengan arti dan contoh kalimatnya:</p>
        
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Preposition of Time</th>
                    <th>Artinya</th>
                    <th>Contoh Kalimat</th>
                    <th>Arti Kalimat</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>ago</td><td>yang lalu</td><td>She left two days ago.</td><td>Dia pergi dua hari yang lalu.</td></tr>
                <tr><td>at</td><td>pada</td><td>The class starts at 9 a.m.</td><td>Kelas dimulai pada pukul 9 pagi.</td></tr>
                <tr><td>between … and …</td><td>antara … dan …</td><td>The store is open between 9 a.m. and 5 p.m.</td><td>Toko buka antara jam 9 pagi dan 5 sore.</td></tr>
                <tr><td>during</td><td>selama</td><td>We stayed indoors during the storm.</td><td>Kami tetap di dalam rumah selama badai.</td></tr>
                <tr><td>for</td><td>selama</td><td>I lived in Japan for five years.</td><td>Saya tinggal di Jepang selama lima tahun.</td></tr>
                <tr><td>from … to …</td><td>dari … sampai …</td><td>He worked from Monday to Friday.</td><td>Dia bekerja dari Senin sampai Jumat.</td></tr>
                <tr><td>in</td><td>pada</td><td>She was born in August.</td><td>Dia lahir pada bulan Agustus.</td></tr>
                <tr><td>on</td><td>pada</td><td>The meeting is on Friday.</td><td>Rapatnya pada hari Jumat.</td></tr>
                <tr><td>till</td><td>sampai</td><td>Wait till I come back.</td><td>Tunggu sampai aku kembali.</td></tr>
                <tr><td>until</td><td>sampai</td><td>She stayed until midnight.</td><td>Dia tinggal sampai tengah malam.</td></tr>
                <tr><td>within</td><td>dalam waktu</td><td>I’ll finish the job within two days.</td><td>Saya akan menyelesaikan pekerjaan itu dalam waktu dua hari.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Preposition of Place</h3>
        <p><strong>Preposition of Place</strong> digunakan untuk menunjukkan lokasi atau posisi sesuatu.</p>
        <p>Berikut adalah daftar Preposition of Place lengkap dengan arti dan contoh kalimatnya:</p>
        
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Preposition of Place</th>
                    <th>Artinya</th>
                    <th>Contoh Kalimat</th>
                    <th>Arti Kalimat</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>aboard</td><td>di atas kapal/pesawat</td><td>The passengers are aboard the plane.</td><td>Para penumpang berada di atas pesawat.</td></tr>
                <tr><td>above</td><td>di atas</td><td>The painting hangs above the sofa.</td><td>Lukisan itu tergantung di atas sofa.</td></tr>
                <tr><td>amid</td><td>di tengah</td><td>He stood amid the crowd.</td><td>Dia berdiri di tengah kerumunan.</td></tr>
                <tr><td>among</td><td>di antara (banyak)</td><td>She was sitting among her friends.</td><td>Dia duduk di antara teman-temannya.</td></tr>
                <tr><td>at</td><td>di</td><td>He is at the door.</td><td>Dia berada di pintu.</td></tr>
                <tr><td>behind</td><td>di belakang</td><td>The garden is behind the house.</td><td>Taman itu berada di belakang rumah.</td></tr>
                <tr><td>below</td><td>di bawah</td><td>The temperature is below zero.</td><td>Suhu berada di bawah nol derajat.</td></tr>
                <tr><td>beneath</td><td>di bawah</td><td>The tunnel runs beneath the city.</td><td>Terowongan itu berada di bawah kota.</td></tr>
                <tr><td>between ... and ...</td><td>di antara (dua)</td><td>The bank is between the school and the library.</td><td>Bank itu berada di antara sekolah dan perpustakaan.</td></tr>
                <tr><td>by</td><td>di dekat</td><td>The lamp is by the bed.</td><td>Lampu itu berada di dekat tempat tidur.</td></tr>
                <tr><td>close to</td><td>dekat dengan</td><td>The school is close to my house.</td><td>Sekolah itu dekat dengan rumahku.</td></tr>
                <tr><td>in</td><td>di</td><td>The keys are in the drawer.</td><td>Kunci ada di dalam laci.</td></tr>
                <tr><td>in front of</td><td>di depan</td><td>The car is parked in front of the house.</td><td>Mobil itu diparkir di depan rumah.</td></tr>
                <tr><td>near</td><td>di dekat</td><td>There's a shop near the station.</td><td>Ada toko di dekat stasiun.</td></tr>
                <tr><td>next to</td><td>di samping</td><td>He sat next to me.</td><td>Dia duduk di sampingku.</td></tr>
                <tr><td>on</td><td>di atas</td><td>The book is on the table.</td><td>Buku itu berada di atas meja.</td></tr>
                <tr><td>under</td><td>di bawah</td><td>The shoes are under the bed.</td><td>Sepatu itu berada di bawah tempat tidur.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Preposition of Movement</h3>
        <p><strong>Prepositions of Movement</strong> digunakan untuk menunjukkan arah atau pergerakan menuju suatu tempat.</p>
        <p>Berikut adalah daftar Preposition of Movement lengkap dengan arti dan contoh kalimatnya:</p>
        
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Preposition of Movement</th>
                    <th>Artinya</th>
                    <th>Contoh Kalimat</th>
                    <th>Arti Kalimat</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>across</td><td>di seberang</td><td>She walked across the street.</td><td>Dia berjalan menyeberangi jalan.</td></tr>
                <tr><td>along</td><td>di sepanjang</td><td>They walked along the river.</td><td>Mereka berjalan di sepanjang sungai.</td></tr>
                <tr><td>from</td><td>dari</td><td>He came from the office.</td><td>Dia datang dari kantor.</td></tr>
                <tr><td>into</td><td>ke dalam</td><td>She went into the room.</td><td>Dia masuk ke dalam ruangan.</td></tr>
                <tr><td>onto</td><td>ke atas (permukaan)</td><td>The cat jumped onto the table.</td><td>Kucing itu melompat ke atas meja.</td></tr>
                <tr><td>out of</td><td>keluar dari</td><td>He ran out of the building.</td><td>Dia berlari keluar dari gedung.</td></tr>
                <tr><td>over</td><td>ke atas</td><td>The bird flew over the house.</td><td>Burung itu terbang di atas rumah.</td></tr>
                <tr><td>through</td><td>melalui</td><td>We drove through the tunnel.</td><td>Kami mengemudi melalui terowongan.</td></tr>
                <tr><td>to</td><td>ke</td><td>She went to the market.</td><td>Dia pergi ke pasar.</td></tr>
                <tr><td>toward</td><td>menuju</td><td>He walked toward the door.</td><td>Dia berjalan menuju pintu.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Other Preposition</h3>
        <p>Berikut adalah daftar Preposition lainnya dengan arti dan contoh kalimatnya:</p>
        
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Preposition</th>
                    <th>Artinya</th>
                    <th>Contoh Kalimat</th>
                    <th>Arti Kalimat</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>about</td><td>tentang</td><td>We talked about the movie.</td><td>Kami berbicara tentang film itu.</td></tr>
                <tr><td>against</td><td>melawan</td><td>They fought against injustice.</td><td>Mereka berjuang melawan ketidakadilan.</td></tr>
                <tr><td>around</td><td>sekitar</td><td>He looked around the room.</td><td>Dia melihat-lihat sekitar ruangan.</td></tr>
                <tr><td>aside</td><td>ke samping</td><td>She stepped aside to let him pass.</td><td>Dia melangkah ke samping untuk membiarkannya lewat.</td></tr>
                <tr><td>at first</td><td>pada awalnya</td><td>At first, I didn’t understand.</td><td>Pada awalnya, saya tidak mengerti.</td></tr>
                <tr><td>at large</td><td>pada umumnya</td><td>The public at large supports the decision.</td><td>Masyarakat pada umumnya mendukung keputusan itu.</td></tr>
                <tr><td>at least</td><td>setidaknya</td><td>Try to sleep at least 6 hours.</td><td>Cobalah tidur setidaknya 6 jam.</td></tr>
                <tr><td>at once</td><td>sekaligus</td><td>He opened all the boxes at once.</td><td>Dia membuka semua kotak sekaligus.</td></tr>
                <tr><td>at the end</td><td>pada akhirnya</td><td>At the end, we found the answer.</td><td>Pada akhirnya, kami menemukan jawabannya.</td></tr>
                <tr><td>at the moment</td><td>saat ini</td><td>I’m busy at the moment.</td><td>Saya sedang sibuk saat ini.</td></tr>
                <tr><td>at the same time</td><td>pada saat yang sama</td><td>They spoke at the same time.</td><td>Mereka berbicara pada saat yang sama.</td></tr>
                <tr><td>beside</td><td>di samping</td><td>She sat beside her friend.</td><td>Dia duduk di samping temannya.</td></tr>
                <tr><td>besides</td><td>selain itu</td><td>Besides English, he speaks Spanish.</td><td>Selain Bahasa Inggris, dia juga berbicara Bahasa Spanyol.</td></tr>
                <tr><td>by far</td><td>sejauh ini</td><td>This is by far the best option.</td><td>Ini sejauh ini pilihan terbaik.</td></tr>
                <tr><td>by force</td><td>dengan paksa</td><td>They entered the building by force.</td><td>Mereka masuk ke gedung itu dengan paksa.</td></tr>
                <tr><td>by mistake</td><td>secara tidak sengaja</td><td>I sent the message by mistake.</td><td>Saya mengirim pesan itu secara tidak sengaja.</td></tr>
                <tr><td>by nature</td><td>secara alami</td><td>She is kind by nature.</td><td>Dia memang baik secara alami.</td></tr>
                <tr><td>by now</td><td>sekarang</td><td>You should be ready by now.</td><td>Kamu seharusnya sudah siap sekarang.</td></tr>
                <tr><td>by the time</td><td>pada saat</td><td>By the time we arrived, he had left.</td><td>Pada saat kami tiba, dia sudah pergi.</td></tr>
                <tr><td>by the way</td><td>ngomong-ngomong</td><td>By the way, have you seen Anna?</td><td>Ngomong-ngomong, apakah kamu sudah melihat Anna?</td></tr>
                <tr><td>despite</td><td>meskipun</td><td>Despite the rain, we went hiking.</td><td>Meskipun hujan, kami tetap mendaki.</td></tr>
                <tr><td>down</td><td>ke bawah</td><td>The ball rolled down the hill.</td><td>Bola itu menggelinding ke bawah bukit.</td></tr>
                <tr><td>for a while</td><td>untuk sementara</td><td>Stay here for a while.</td><td>Tinggallah di sini untuk sementara.</td></tr>
                <tr><td>for ages</td><td>lama sekali</td><td>I haven’t seen you for ages!</td><td>Aku sudah lama sekali tidak bertemu denganmu!</td></tr>
                <tr><td>for life</td><td>seumur hidup</td><td>They were banned for life.</td><td>Mereka dilarang seumur hidup.</td></tr>
                <tr><td>for real</td><td>benar-benar</td><td>Is this for real?</td><td>Apakah ini benar-benar nyata?</td></tr>
                <tr><td>for rent</td><td>disewakan</td><td>The house is for rent.</td><td>Rumah itu disewakan.</td></tr>
                <tr><td>for sale</td><td>dijual</td><td>These shoes are for sale.</td><td>Sepatu ini dijual.</td></tr>
                <tr><td>in a hurry</td><td>tergesa-gesa</td><td>She left in a hurry.</td><td>Dia pergi tergesa-gesa.</td></tr>
                <tr><td>in brief</td><td>secara singkat</td><td>In brief, we failed the mission.</td><td>Singkatnya, kami gagal menjalankan misi.</td></tr>
                <tr><td>in debts</td><td>berutang</td><td>He is deep in debts.</td><td>Dia terlilit utang.</td></tr>
                <tr><td>in detail</td><td>secara rinci</td><td>Explain the plan in detail.</td><td>Jelaskan rencananya secara rinci.</td></tr>
                <tr><td>in doubt</td><td>dalam keraguan</td><td>He was still in doubt about the result.</td><td>Dia masih ragu tentang hasilnya.</td></tr>
                <tr><td>in effect</td><td>berlaku</td><td>The rule is now in effect.</td><td>Aturan itu sekarang berlaku.</td></tr>
                <tr><td>in fact</td><td>sebenarnya</td><td>In fact, I don’t like coffee.</td><td>Sebenarnya, saya tidak suka kopi.</td></tr>
                <tr><td>in terms of</td><td>dalam hal</td><td>In terms of cost, it’s not efficient.</td><td>Dalam hal biaya, itu tidak efisien.</td></tr>
                <tr><td>in vain</td><td>sia-sia</td><td>All efforts were in vain.</td><td>Semua usaha itu sia-sia.</td></tr>
                <tr><td>inside</td><td>di dalam</td><td>The kids are playing inside.</td><td>Anak-anak sedang bermain di dalam.</td></tr>
                <tr><td>instead of</td><td>ketimbang</td><td>He chose tea instead of coffee.</td><td>Dia memilih teh daripada kopi.</td></tr>
                <tr><td>of</td><td>dari</td><td>The color of the sky is blue.</td><td>Warna langit itu biru.</td></tr>
                <tr><td>off</td><td>mati</td><td>The lights are off.</td><td>Lampunya mati.</td></tr>
                <tr><td>on condition that</td><td>dengan syarat</td><td>You can go out on condition that you return by 10.</td><td>Kamu boleh keluar dengan syarat kembali sebelum jam 10.</td></tr>
                <tr><td>on leave</td><td>sedang cuti</td><td>She is currently on leave.</td><td>Dia sedang cuti.</td></tr>
                <tr><td>on purpose</td><td>dengan sengaja</td><td>He broke the vase on purpose.</td><td>Dia memecahkan vas itu dengan sengaja.</td></tr>
                <tr><td>on show</td><td>sedang dipamerkan</td><td>Her paintings are on show at the gallery.</td><td>Lukisannya sedang dipamerkan di galeri.</td></tr>
                <tr><td>on strike</td><td>sedang mogok kerja</td><td>The workers are on strike.</td><td>Para pekerja sedang mogok kerja.</td></tr>
                <tr><td>on trial</td><td>sedang diuji coba</td><td>The software is still on trial.</td><td>Perangkat lunaknya masih dalam uji coba.</td></tr>
                <tr><td>out</td><td>keluar</td><td>He went out to buy groceries.</td><td>Dia keluar untuk membeli bahan makanan.</td></tr>
                <tr><td>out of control</td><td>di luar kendali</td><td>The situation is out of control.</td><td>Situasinya di luar kendali.</td></tr>
                <tr><td>out of fashion</td><td>ketinggalan zaman</td><td>That style is out of fashion.</td><td>Gaya itu sudah ketinggalan zaman.</td></tr>
                <tr><td>out of hand</td><td>di luar kendali</td><td>The party got out of hand.</td><td>Pestanya menjadi di luar kendali.</td></tr>
                <tr><td>out of order</td><td>rusak</td><td>The elevator is out of order.</td><td>Lift itu rusak.</td></tr>
                <tr><td>out of place</td><td>tidak pada tempatnya</td><td>He felt out of place at the event.</td><td>Dia merasa tidak pada tempatnya di acara itu.</td></tr>
                <tr><td>out of stock</td><td>kehabisan stok</td><td>That item is out of stock.</td><td>Barang itu kehabisan stok.</td></tr>
                <tr><td>so far</td><td>sejauh ini</td><td>So far, everything is fine.</td><td>Sejauh ini, semuanya baik-baik saja.</td></tr>
                <tr><td>throughout</td><td>sepanjang</td><td>It rained throughout the day.</td><td>Hujan turun sepanjang hari.</td></tr>
                <tr><td>to date</td><td>sampai saat ini</td><td>To date, no decision has been made.</td><td>Sampai saat ini, belum ada keputusan.</td></tr>
                <tr><td>towards</td><td>terhadap</td><td>He has a kind attitude towards animals.</td><td>Dia memiliki sikap baik terhadap hewan.</td></tr>
                <tr><td>under construction</td><td>sedang dibangun</td><td>The road is under construction.</td><td>Jalan itu sedang dibangun.</td></tr>
                <tr><td>under repair</td><td>sedang diperbaiki</td><td>The machine is under repair.</td><td>Mesinnya sedang diperbaiki.</td></tr>
                <tr><td>under stress</td><td>di bawah tekanan</td><td>She’s under stress from work.</td><td>Dia sedang berada di bawah tekanan kerja.</td></tr>
                <tr><td>under treatment</td><td>sedang dirawat</td><td>He is under treatment at the hospital.</td><td>Dia sedang dirawat di rumah sakit.</td></tr>
                <tr><td>upon</td><td>pada</td><td>Upon arrival, please report to the office.</td><td>Pada saat kedatangan, silakan lapor ke kantor.</td></tr>
                <tr><td>versus</td><td>melawan</td><td>It’s Team A versus Team B.</td><td>Ini adalah Tim A melawan Tim B.</td></tr>
                <tr><td>with</td><td>dengan</td><td>I’ll go with you.</td><td>Saya akan pergi denganmu.</td></tr>
                <tr><td>with regard to</td><td>mengenai</td><td>With regard to your question, the answer is yes.</td><td>Mengenai pertanyaanmu, jawabannya ya.</td></tr>
                <tr><td>with regret</td><td>dengan penyesalan</td><td>I say this with regret.</td><td>Saya mengatakan ini dengan penyesalan.</td></tr>
                <tr><td>with respect</td><td>dengan hormat</td><td>With respect, I disagree.</td><td>Dengan hormat, saya tidak setuju.</td></tr>
                <tr><td>within limits</td><td>dalam batas</td><td>Stay within limits of the law.</td><td>Tetap dalam batas hukum.</td></tr>
                <tr><td>without</td><td>tanpa</td><td>I came without my phone.</td><td>Saya datang tanpa ponsel saya.</td></tr>
                <tr><td>without respect</td><td>tanpa hormat</td><td>He spoke without respect.</td><td>Dia berbicara tanpa hormat.</td></tr>
            </tbody>
        </table>
    </div>

</div>

<div class="back-nav">
    <a href="index.php?hal=grammar" class="btn-secondary">← Kembali ke Materi Grammar</a>
</div>