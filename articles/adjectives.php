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

    .back-nav {
        margin-top: 50px;
        text-align: center;
        border-top: 2px dashed #e2e8f0;
        padding-top: 30px;
    }
</style>

<div class="article-header">
    <h2 class="section-title">Adjectives (Kata Sifat)</h2>
    <p>Panduan lengkap memahami berbagai jenis kata sifat dan penggunaannya dalam bahasa Inggris.</p>
</div>

<div class="article-content">
    <p><strong>Adjectives</strong> (kata sifat) adalah kata yang digunakan untuk menjelaskan sifat, karakteristik, atau keadaan suatu benda, orang, atau hal. Kata sifat membantu membuat kalimat lebih deskriptif dan menarik.</p>

    <div class="pos-section">
        <h3 class="pos-title">1. Adjective yang menunjukkan jumlah</h3>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>one</td><td>satu</td></tr>
                <tr><td>two</td><td>dua</td></tr>
                <tr><td>many</td><td>banyak</td></tr>
                <tr><td>few</td><td>sedikit</td></tr>
                <tr><td>several</td><td>beberapa</td></tr>
                <tr><td>some</td><td>beberapa</td></tr>
                <tr><td>all</td><td>semua</td></tr>
                <tr><td>half</td><td>setengah</td></tr>
                <tr><td>numerous</td><td>banyak sekali</td></tr>
                <tr><td>countless</td><td>tak terhitung</td></tr>
            </tbody>
        </table>

        <p><strong>Contoh Kalimat:</strong></p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Many students attend the seminar.</td><td>Banyak pelajar mengikuti seminar itu.</td></tr>
                <tr><td>Few people know the truth.</td><td>Sedikit orang mengetahui kebenaran itu.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">2. Adjective yang menunjukkan opini</h3>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>beautiful</td><td>indah</td></tr>
                <tr><td>wonderful</td><td>luar biasa</td></tr>
                <tr><td>amazing</td><td>menakjubkan</td></tr>
                <tr><td>terrible</td><td>buruk</td></tr>
                <tr><td>fantastic</td><td>fantastis</td></tr>
                <tr><td>horrible</td><td>mengerikan</td></tr>
                <tr><td>lovely</td><td>menyenangkan</td></tr>
                <tr><td>great</td><td>hebat</td></tr>
                <tr><td>awful</td><td>mengerikan</td></tr>
                <tr><td>charming</td><td>menawan</td></tr>
            </tbody>
        </table>

        <p><strong>Contoh Kalimat:</strong></p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>The beautiful sunset amazed everyone.</td><td>Matahari terbenam yang indah membuat semua orang terkesima.</td></tr>
                <tr><td>This is a horrible mistake.</td><td>Ini adalah kesalahan yang mengerikan.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">3. Adjective yang menunjukkan ukuran (size)</h3>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>big</td><td>besar</td></tr>
                <tr><td>small</td><td>kecil</td></tr>
                <tr><td>huge</td><td>sangat besar</td></tr>
                <tr><td>tiny</td><td>sangat kecil</td></tr>
                <tr><td>large</td><td>besar</td></tr>
                <tr><td>narrow</td><td>sempit</td></tr>
                <tr><td>wide</td><td>lebar</td></tr>
                <tr><td>massive</td><td>raksasa</td></tr>
                <tr><td>petite</td><td>mungil</td></tr>
                <tr><td>enormous</td><td>sangat besar</td></tr>
            </tbody>
        </table>

        <p><strong>Contoh Kalimat:</strong></p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>She lives in a huge mansion.</td><td>Ia tinggal di sebuah rumah besar.</td></tr>
                <tr><td>The tiny insect crawled on the leaf.</td><td>Serangga kecil merangkak di atas daun.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">4. Adjective yang menunjukkan usia (age)</h3>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>old</td><td>tua</td></tr>
                <tr><td>new</td><td>baru</td></tr>
                <tr><td>ancient</td><td>kuno</td></tr>
                <tr><td>modern</td><td>modern</td></tr>
                <tr><td>elderly</td><td>lansia</td></tr>
                <tr><td>youthful</td><td>berjiwa muda</td></tr>
                <tr><td>mature</td><td>dewasa</td></tr>
                <tr><td>antique</td><td>antik</td></tr>
                <tr><td>recent</td><td>baru-baru ini</td></tr>
            </tbody>
        </table>

        <p><strong>Contoh Kalimat:</strong></p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>The young girl loves to dance.</td><td>Gadis muda itu suka menari.</td></tr>
                <tr><td>This ancient temple is a tourist attraction.</td><td>Kuil kuno itu adalah tempat wisata.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">5. Adjective yang menunjukkan bentuk (shape)</h3>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>round</td><td>bulat</td></tr>
                <tr><td>square</td><td>persegi</td></tr>
                <tr><td>oval</td><td>oval</td></tr>
                <tr><td>triangular</td><td>segitiga</td></tr>
                <tr><td>rectangular</td><td>persegi panjang</td></tr>
                <tr><td>circular</td><td>lingkaran</td></tr>
                <tr><td>curved</td><td>melengkung</td></tr>
                <tr><td>straight</td><td>lurus</td></tr>
                <tr><td>irregular</td><td>tidak beraturan</td></tr>
                <tr><td>cylindrical</td><td>silinder</td></tr>
            </tbody>
        </table>

        <p><strong>Contoh Kalimat:</strong></p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>The round clock hangs on the wall.</td><td>Jam bulat itu menggantung di dinding.</td></tr>
                <tr><td>She draw a triangular pattern.</td><td>Ia menggambar pola segitiga.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">6. Adjective yang menunjukkan warna (color)</h3>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>red</td><td>merah</td></tr>
                <tr><td>blue</td><td>biru</td></tr>
                <tr><td>green</td><td>hijau</td></tr>
                <tr><td>yellow</td><td>kuning</td></tr>
                <tr><td>black</td><td>hitam</td></tr>
                <tr><td>white</td><td>putih</td></tr>
                <tr><td>purple</td><td>ungu</td></tr>
                <tr><td>orange</td><td>oranye</td></tr>
                <tr><td>pink</td><td>merah muda</td></tr>
                <tr><td>gray</td><td>abu-abu</td></tr>
            </tbody>
        </table>

        <p><strong>Contoh Kalimat:</strong></p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>He bought a red car.</td><td>Dia membeli mobil merah.</td></tr>
                <tr><td>The purple flowers bloomed beautifully.</td><td>Bunga ungu itu bermekaran dengan indah.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">7. Adjective yang menunjukkan asal (origin)</h3>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Indonesian</td><td>Indonesia</td></tr>
                <tr><td>Japanese</td><td>Jepang</td></tr>
                <tr><td>American</td><td>Amerika</td></tr>
                <tr><td>Chinese</td><td>Tiongkok</td></tr>
                <tr><td>Indian</td><td>India</td></tr>
                <tr><td>British</td><td>Inggris</td></tr>
                <tr><td>French</td><td>Prancis</td></tr>
                <tr><td>Korean</td><td>Korea</td></tr>
                <tr><td>Australian</td><td>Australia</td></tr>
            </tbody>
        </table>

        <p><strong>Contoh Kalimat:</strong></p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I love Indonesian batik.</td><td>Saya menyukai batik Indonesia.</td></tr>
                <tr><td>She studies Japanese culture.</td><td>Ia mempelajari budaya Jepang.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">8. Adjective yang menunjukkan material</h3>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>wooden</td><td>kayu</td></tr>
                <tr><td>plastic</td><td>plastik</td></tr>
                <tr><td>metal</td><td>logam</td></tr>
                <tr><td>glass</td><td>kaca</td></tr>
                <tr><td>cotton</td><td>katun</td></tr>
                <tr><td>leather</td><td>kulit</td></tr>
                <tr><td>silk</td><td>sutra</td></tr>
                <tr><td>paper</td><td>kertas</td></tr>
            </tbody>
        </table>

        <p><strong>Contoh Kalimat:</strong></p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>The wooden table is very sturdy.</td><td>Meja kayu itu sangat kokoh.</td></tr>
                <tr><td>She wears a silk scarf.</td><td>Ia memakai syal sutra.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">9. Adjective yang menunjukkan tujuan (purpose)</h3>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>cooking</td><td>memasak</td></tr>
                <tr><td>painting</td><td>melukis</td></tr>
                <tr><td>cleaning</td><td>membersihkan</td></tr>
                <tr><td>running</td><td>berlari</td></tr>
                <tr><td>reading</td><td>membaca</td></tr>
                <tr><td>gardening</td><td>berkebun</td></tr>
                <tr><td>hiking</td><td>mendaki</td></tr>
                <tr><td>sewing</td><td>menjahit</td></tr>
            </tbody>
        </table>

        <p><strong>Contoh Kalimat:</strong></p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>She bought a cooking pot.</td><td>Ia membeli panci memasak.</td></tr>
                <tr><td>This is my writing notebook.</td><td>Ini adalah buku catatan tulisan saya.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Comparative and Superlative Adjectives</h3>
        <p><strong>Comparative adjectives</strong> digunakan untuk membandingkan dua benda, sedangkan <strong>superlative adjectives</strong> digunakan untuk menunjukkan tingkatan tertinggi atau terendah dari suatu sifat.</p>

        <h4 class="pos-subtitle">Penambahan -er dan -est</h4>
        <p>Untuk kata sifat pendek (satu atau dua suku kata), tambahkan <strong>-er</strong> untuk bentuk komparatif dan <strong>-est</strong> untuk superlatif.</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Adjective</th>
                    <th>Komparatif</th>
                    <th>Superlatif</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>tall</td><td>taller</td><td>tallest</td><td>tinggi / lebih tinggi / paling tinggi</td></tr>
                <tr><td>fat</td><td>fatter</td><td>fattest</td><td>gemuk / lebih gemuk / paling gemuk</td></tr>
                <tr><td>big</td><td>bigger</td><td>biggest</td><td>besar / lebih besar / paling besar</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Perubahan -y menjadi -ier/-iest atau Penambahan -r/-st</h4>
        <p>Untuk kata sifat berakhiran <strong>-y</strong>, ganti <strong>-y</strong> dengan <strong>-ier</strong> (komparatif) atau <strong>-iest</strong> (superlatif). Untuk kata sifat berakhiran <strong>-e</strong>, tambahkan <strong>-r</strong> (komparatif) atau <strong>-st</strong> (superlatif).</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Adjective</th>
                    <th>Komparatif</th>
                    <th>Superlatif</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>busy</td><td>busier</td><td>busiest</td><td>sibuk / lebih sibuk / paling sibuk</td></tr>
                <tr><td>simple</td><td>simpler</td><td>simplest</td><td>sederhana / lebih sederhana / paling sederhana</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Penambahan more/most</h4>
        <p>Untuk kata sifat dengan tiga suku kata atau lebih, gunakan <strong>more</strong> untuk komparatif dan <strong>most</strong> untuk superlatif.</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Adjective</th>
                    <th>Komparatif</th>
                    <th>Superlatif</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>important</td><td>more important</td><td>most important</td><td>penting / lebih penting / paling penting</td></tr>
                <tr><td>expensive</td><td>more expensive</td><td>most expensive</td><td>mahal / lebih mahal / paling mahal</td></tr>
                <tr><td>difficult</td><td>more difficult</td><td>most difficult</td><td>sulit / lebih sulit / paling sulit</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Kata Sifat Tidak Beraturan</h4>
        <p>Beberapa kata sifat memiliki bentuk komparatif dan superlatif yang tidak mengikuti aturan standar dan harus dihafal.</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Adjective</th>
                    <th>Komparatif</th>
                    <th>Superlatif</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>good</td><td>better</td><td>best</td><td>baik / lebih baik / paling baik</td></tr>
                <tr><td>bad</td><td>worse</td><td>worst</td><td>buruk / lebih buruk / paling buruk</td></tr>
                <tr><td>little</td><td>less</td><td>least</td><td>sedikit / lebih sedikit / paling sedikit</td></tr>
                <tr><td>much/many</td><td>more</td><td>most</td><td>banyak / lebih banyak / paling banyak</td></tr>
                <tr><td>far</td><td>farther/further</td><td>farthest/furthest</td><td>jauh / lebih jauh / paling jauh</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Penggunaan More/Less dan Most/Least</h4>
        <ul class="note-list">
            <li><strong>More</strong> berarti "lebih" dan <strong>less</strong> berarti "kurang" untuk komparatif.</li>
            <li><strong>Most</strong> berarti "paling" dan <strong>least</strong> berarti "paling tidak" untuk superlatif, sering kali menunjukkan kebalikan dari sifat aslinya.</li>
        </ul>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Adjective</th>
                    <th>Komparatif</th>
                    <th>Superlatif</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>expensive</td><td>more expensive</td><td>the most expensive</td><td>mahal / lebih mahal / paling mahal</td></tr>
                <tr><td>expensive</td><td>less expensive</td><td>the least expensive</td><td>mahal / lebih murah / paling murah</td></tr>
                <tr><td>difficult</td><td>more difficult</td><td>the most difficult</td><td>sulit / lebih sulit / paling sulit</td></tr>
                <tr><td>difficult</td><td>less difficult</td><td>the least difficult</td><td>sulit / lebih mudah / paling mudah</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Contoh Penggunaan Comparative Adjectives:</h4>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>John is taller than Mike.</td><td>John lebih tinggi dari Mike.</td></tr>
                <tr><td>She runs faster than her brother.</td><td>Ia berlari lebih cepat dari saudaranya.</td></tr>
                <tr><td>My bag is heavier than yours.</td><td>Tas saya lebih berat dari tasmu.</td></tr>
                <tr><td>This movie is better than the old one.</td><td>Film ini lebih baik dari film yang lama.</td></tr>
                <tr><td>This book is more interesting than that book.</td><td>Buku ini lebih menarik dari buku itu.</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Contoh Penggunaan Superlative Adjectives:</h4>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>John is the tallest student in the class.</td><td>John adalah siswa tertinggi di kelas ini.</td></tr>
                <tr><td>This book is the most interesting story I read.</td><td>Buku ini adalah kisah paling menarik yang saya baca.</td></tr>
                <tr><td>She runs the fastest in the team.</td><td>Ia berlari paling cepat dalam tim.</td></tr>
                <tr><td>My bag is the heaviest in the class.</td><td>Tas saya adalah yang paling berat pada kelas ini.</td></tr>
                <tr><td>This movie is the best film this year.</td><td>Film ini adalah yang paling baik tahun ini.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Equal Quantities</h3>
        <p><strong>Adjectives for equal quantities</strong> digunakan untuk menyatakan bahwa dua atau lebih hal memiliki jumlah, tingkat, atau kualitas yang sama atau setara dalam suatu sifat. Kata-kata ini biasanya digunakan untuk membandingkan kesetaraan antara dua subjek atau objek.</p>
        
        <p>Aturan penggunaan Equal Quantities adalah sebagai berikut:</p>
        <ul class="note-list">
            <li>Gunakan <strong>as + adjective + as</strong> untuk membandingkan dua hal yang memiliki sifat sama.</li>
            <li>Gunakan <strong>not as + adjective + as</strong> untuk menyatakan bahwa satu hal kurang dalam sifat dibandingkan yang lain.</li>
            <li>Kata sifat yang digunakan bisa berupa kata sifat umum seperti tall, smart, heavy, dll., tanpa perubahan bentuk.</li>
        </ul>

        <p><strong>Contoh Kalimat Kesetaraan (as ... as):</strong></p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Anna is as tall as Lisa.</td><td>Anna sama tingginya dengan Lisa.</td></tr>
                <tr><td>This bag is as heavy as that bag.</td><td>Tas ini sama beratnya dengan tas itu.</td></tr>
                <tr><td>He is as smart as his brother.</td><td>Ia sama pintarnya dengan saudaranya.</td></tr>
                <tr><td>The movie is as exciting as the book.</td><td>Film ini sama menariknya dengan bukunya.</td></tr>
                <tr><td>My car is as fast as yours.</td><td>Mobil saja sama cepatnya dengan punyamu.</td></tr>
                <tr><td>John is not as tall as Mike.</td><td>John tidak setinggi Mike.</td></tr>
                <tr><td>This book is not as interesting as that book.</td><td>Buku ini tidak semenarik buku itu.</td></tr>
                <tr><td>She is not as fast as her friend.</td><td>Ia tidak secepat temannya.</td></tr>
                <tr><td>My phone is not as expensive as yours.</td><td>Telepon saya tidak semahal punyamu.</td></tr>
                <tr><td>The cake is not as sweet as the candy.</td><td>Roti ini tidak semanis permen itu.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Unequal Quantities</h3>
        <p><strong>Adjectives for Unequal Quantities</strong> digunakan untuk membandingkan dua hal yang memiliki jumlah, tingkat, atau kualitas yang tidak sama dalam suatu sifat. Perbandingan ini menunjukkan bahwa satu hal lebih atau kurang dibandingkan yang lain.</p>
        
        <p>Kata Kunci:</p>
        <ul class="note-list">
            <li><strong>more ... than:</strong> Menunjukkan bahwa satu hal lebih dalam suatu sifat.</li>
            <li><strong>fewer ... than:</strong> Menunjukkan bahwa satu hal lebih sedikit dalam suatu sifat. (countable)</li>
            <li><strong>less ... than:</strong> Menunjukkan bahwa satu hal kurang dalam suatu sifat. (uncountable)</li>
        </ul>

        <h4 class="pos-subtitle">Countable nouns</h4>
        <p><strong>More</strong> (lebih banyak) dan <strong>fewer</strong> (lebih sedikit) digunakan untuk kata benda yang dapat dihitung (countable noun).</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>They have more children than we do.</td><td>Mereka punya lebih banyak anak daripada kami.</td></tr>
                <tr><td>We have more customers than they do.</td><td>Kami punya lebih banyak pelanggan daripada mereka.</td></tr>
                <tr><td>You know more people than I do.</td><td>Kamu kenal lebih banyak orang daripada aku.</td></tr>
                <tr><td>I have visited Japan more times than he has.</td><td>Aku sudah mengunjungi Jepang lebih banyak kali daripada dia.</td></tr>
                <tr><td>I have three brothers. That's more than you have.</td><td>Aku punya tiga saudara laki-laki. Itu lebih banyak daripada yang kamu punya.</td></tr>
                <tr><td>Tom has fewer books than Jane.</td><td>Tom punya lebih sedikit buku daripada Jane.</td></tr>
                <tr><td>There are fewer houses in his village than in mine.</td><td>Ada lebih sedikit rumah di desanya daripada di desaku.</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Uncountable nouns</h4>
        <p><strong>More</strong> (lebih banyak) dan <strong>less</strong> (lebih sedikit) digunakan untuk kata benda yang tidak dapat dihitung (uncountable noun).</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>John eats more food than Peter.</td><td>John makan lebih banyak makanan daripada Peter.</td></tr>
                <tr><td>You've heard more news than I have.</td><td>Kamu sudah mendengar lebih banyak berita daripada saya.</td></tr>
                <tr><td>He's had more success than his brother has.</td><td>Dia punya lebih banyak kesuksesan daripada saudaranya.</td></tr>
                <tr><td>I'm not hungry at all. I've had more than I want.</td><td>Saya sama sekali tidak lapar. Aku sudah makan lebih banyak daripada yang kuinginkan.</td></tr>
                <tr><td>They've got less water than we have.</td><td>Mereka punya lebih sedikit air daripada kami.</td></tr>
                <tr><td>Jim has less patience than Sam.</td><td>Jim punya lebih sedikit kesabaran daripada Sam.</td></tr>
            </tbody>
        </table>
    </div>

</div>

<div class="back-nav">
    <a href="index.php?hal=grammar" class="btn-secondary">← Kembali ke Materi Grammar</a>
</div>