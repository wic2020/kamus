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

    .note-box {
        background: var(--light);
        border-left: 4px solid var(--secondary);
        padding: 15px 20px;
        border-radius: 0 10px 10px 0;
        margin: 15px 0;
    }

    .note-box strong {
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
    <h2 class="section-title">Pronoun (Kata Ganti)</h2>
    <p>Panduan lengkap tentang jenis dan penggunaan kata ganti dalam bahasa Inggris.</p>
</div>

<div class="article-content">

    <div class="pos-section">
        <h3 class="pos-title">Personal Pronoun</h3>
        <p><strong>Personal Pronouns</strong> (kata ganti personal) digunakan untuk menggantikan nama orang atau benda.</p>
        <p>Ada dua jenis Personal Pronouns, yaitu:</p>
        <ol class="note-list">
            <li><strong>Subject Pronouns</strong>, adalah kata ganti yang digunakan sebagai subjek dalam kalimat, yaitu pelaku dari suatu tindakan atau keadaan.</li>
            <li><strong>Object Pronouns</strong>, adalah kata ganti yang digunakan sebagai objek dalam kalimat, yaitu penerima tindakan dari subjek.</li>
        </ol>

        <p>Berikut adalah tabel yang menunjukkan Subject Pronouns dan Object Pronouns:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Subject Pronoun</th>
                    <th>Object Pronoun</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I</td><td>me</td><td>saya</td></tr>
                <tr><td>you</td><td>you</td><td>kamu, Anda</td></tr>
                <tr><td>he</td><td>him</td><td>dia (laki-laki)</td></tr>
                <tr><td>she</td><td>her</td><td>dia (perempuan)</td></tr>
                <tr><td>it</td><td>it</td><td>ia (benda mati, hewan)</td></tr>
                <tr><td>we</td><td>us</td><td>kami</td></tr>
                <tr><td>they</td><td>them</td><td>mereka</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">1. Subject Pronouns</h4>
        <p>Subject Pronouns digunakan sebagai subjek kalimat, biasanya diletakkan sebelum kata kerja (verb).</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I go to school.</td><td>Saya pergi ke sekolah.</td></tr>
                <tr><td>She is reading a book.</td><td>Dia sedang membaca buku.</td></tr>
                <tr><td>They are playing football.</td><td>Mereka sedang bermain sepak bola.</td></tr>
                <tr><td>We are in the garden.</td><td>Kami berada di taman.</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">2. Object Pronouns</h4>
        <p>Object Pronouns digunakan sebagai objek kalimat, biasanya diletakkan setelah kata kerja (verb) atau kata depan (preposition).</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>She gives me a book.</td><td>Dia memberi saya sebuah buku.</td></tr>
                <tr><td>I saw him at the park.</td><td>Saya melihat dia di taman.</td></tr>
                <tr><td>This book belongs to them.</td><td>Buku ini milik mereka.</td></tr>
                <tr><td>Can you help us?</td><td>Dapatkah kamu membantu kami.</td></tr>
                <tr><td>I sent a message to her.</td><td>Saya mengirim pesan kepada dia (perempuan).</td></tr>
                <tr><td>Please give him a book.</td><td>Tolong beri dia sebuah buku.</td></tr>
            </tbody>
        </table>

        <div class="note-box">
            <strong>Catatan Penting</strong><br>
            Jangan gunakan Subject Pronouns sebagai objek. Misalnya:<br>
            <span style="color: red;">❌ Salah:</span> She gave I a book.<br>
            <span style="color: green;">✅ Benar:</span> She gave me a book.
        </div>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Possessive Pronouns</h3>
        
        <h4 class="pos-subtitle">1. Possessive Adjective</h4>
        <p><strong>Possessive Adjectives</strong> adalah kata ganti yang digunakan untuk menunjukkan kepemilikan atas suatu benda, orang, atau hal, dan berfungsi sebagai adjektiva (kata sifat) karena mendeskripsikan kata benda yang mengikutinya. Possessive Adjectives selalu diikuti oleh kata benda dan menjelaskan milik siapa benda tersebut.</p>
        <p>Berikut adalah daftar Possessive Adjectives beserta kaitannya dengan Subject Pronouns:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Subject Pronoun</th>
                    <th>Possessive Adjectives</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I</td><td>my ...</td><td>... saya</td></tr>
                <tr><td>You</td><td>your ...</td><td>... kamu</td></tr>
                <tr><td>He</td><td>his ...</td><td>... dia (laki-laki)</td></tr>
                <tr><td>She</td><td>her ...</td><td>... dia (perempuan)</td></tr>
                <tr><td>It</td><td>its ...</td><td>... dia (benda/hewan)</td></tr>
                <tr><td>We</td><td>our ...</td><td>... kami</td></tr>
                <tr><td>They</td><td>their ...</td><td>... mereka</td></tr>
            </tbody>
        </table>

        <p>Contoh:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>My house is big.</td><td>Rumah saya besar.</td></tr>
                <tr><td>Your car is new.</td><td>Mobil kamu baru.</td></tr>
                <tr><td>His bicycle is old.</td><td>Sepedanya kuno.</td></tr>
                <tr><td>His cat is funny.</td><td>Kucingnya lucu.</td></tr>
                <tr><td>Its tail is long.</td><td>Ekornya panjang.</td></tr>
                <tr><td>Our school is near.</td><td>Sekolah kami dekat.</td></tr>
                <tr><td>Their bags are on the desk.</td><td>Tas mereka di atas meja.</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">2. Possessive Pronouns</h4>
        <p><strong>Possessive Pronouns</strong> adalah kata ganti yang digunakan untuk menunjukkan kepemilikan atas sesuatu (benda, orang, atau hal) tanpa perlu menyebutkan kembali kata benda tersebut. Possessive Pronouns menggantikan kata benda untuk menghindari pengulangan dalam kalimat.</p>
        <p>Berikut adalah daftar Possessive Pronouns beserta kaitannya dengan Subject Pronouns:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Subject Pronoun</th>
                    <th>Possessive Pronoun</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I</td><td>mine</td><td>milik saya</td></tr>
                <tr><td>You</td><td>yours</td><td>milik kamu</td></tr>
                <tr><td>He</td><td>his</td><td>milik dia (laki-laki)</td></tr>
                <tr><td>She</td><td>hers</td><td>milik dia (perempuan)</td></tr>
                <tr><td>It</td><td>its</td><td>milik dia (benda/hewan)</td></tr>
                <tr><td>We</td><td>ours</td><td>milik kami</td></tr>
                <tr><td>They</td><td>theirs</td><td>milik mereka</td></tr>
            </tbody>
        </table>

        <p>Contoh:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>The book is mine.</td><td>Buku ini milik saya.</td></tr>
                <tr><td>The phone is yours.</td><td>Telepon ini milik kamu.</td></tr>
                <tr><td>The umbrella is his.</td><td>Payung ini milik dia (laki-laki).</td></tr>
                <tr><td>The hat is hers.</td><td>Topi ini milik dia (perempuan).</td></tr>
                <tr><td>The cage are its.</td><td>Sangkar ini milik dia (hewan).</td></tr>
                <tr><td>The house is ours.</td><td>Rumah ini milik kami.</td></tr>
                <tr><td>The car ini theirs.</td><td>Mobil ini milik mereka.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Demonstrative Pronouns</h3>

        <h4 class="pos-subtitle">1. Demonstrative Pronouns</h4>
        <p><strong>Demonstrative Pronouns</strong> adalah kata ganti yang digunakan untuk menunjukkan benda, orang, atau hal tertentu dengan mengacu pada lokasi relatif (dekat atau jauh) dan jumlah (tunggal atau jamak). Demonstrative Pronouns menggantikan kata benda untuk menghindari pengulangan dan langsung menunjukkan sesuatu dalam konteks.</p>
        <p>Berikut adalah Demonstrative Pronoun:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Demonstrative Pronoun</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>this</td><td>ini</td></tr>
                <tr><td>that</td><td>itu</td></tr>
                <tr><td>these</td><td>ini (jamak)</td></tr>
                <tr><td>those</td><td>itu (jamak)</td></tr>
            </tbody>
        </table>

        <p>Contoh:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>This is my cat.</td><td>Ini kucing saya.</td></tr>
                <tr><td>These are my cats.</td><td>Ini kucing-kucing saya.</td></tr>
                <tr><td>That is my book.</td><td>Itu buku saya.</td></tr>
                <tr><td>Those are my books.</td><td>Itu buku-buku saya.</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">2. Demonstrative Adjectives</h4>
        <p>Ada perbedaan antara Demonstrative Pronoun dengan Demonstrative Adjective:</p>
        <ul class="note-list">
            <li><strong>Demonstrative Pronouns</strong> berdiri sendiri dan menggantikan kata benda.</li>
            <li><strong>Demonstrative Adjectives</strong> diikuti oleh kata benda untuk mendeskripsikannya.</li>
        </ul>

        <p>Contoh Demonstrative Adjectives:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>This cat is mine.</td><td>Kucing ini milik saya.</td></tr>
                <tr><td>These cat are mine.</td><td>Kucing-kucing ini milik saya.</td></tr>
                <tr><td>That book is hers.</td><td>Buku itu milik dia (perempuan).</td></tr>
                <tr><td>Those books are hers.</td><td>Buku-buku itu milik dia (perempuan).</td></tr>
                <tr><td>That car is theirs.</td><td>Mobil itu milik mereka.</td></tr>
                <tr><td>Those cars are hers.</td><td>Mobil-mobil itu milik mereka.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Reflexive Pronouns</h3>
        <p><strong>Reflexive Pronouns</strong> adalah kata ganti yang digunakan ketika subjek dan objek dalam sebuah kalimat merujuk pada orang atau benda yang sama. Reflexive Pronouns menunjukkan bahwa tindakan yang dilakukan oleh subjek kembali kepada dirinya sendiri. Kata ini biasanya diakhiri dengan <strong>-self</strong> (tunggal) atau <strong>-selves</strong> (jamak).</p>
        <p>Berikut adalah daftar Reflexive Pronouns beserta kaitannya dengan Subject Pronouns:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Subject Pronoun</th>
                    <th>Reflexive Pronoun</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I</td><td>myself</td><td>saya sendiri</td></tr>
                <tr><td>you</td><td>yourself</td><td>kamu sendiri</td></tr>
                <tr><td>he</td><td>himself</td><td>dia sendiri (laki-laki)</td></tr>
                <tr><td>she</td><td>herself</td><td>dia sendiri (perempuan)</td></tr>
                <tr><td>it</td><td>itself</td><td>ia sendiri</td></tr>
                <tr><td>we</td><td>ourselves</td><td>kami sendiri</td></tr>
                <tr><td>they</td><td>themselves</td><td>mereka sendiri</td></tr>
            </tbody>
        </table>

        <p>Contoh:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I made this cake myself.</td><td>Saya membuat roti ini sendiri (Maksudnya: Saya sendiri yang membuat roti ini).</td></tr>
                <tr><td>We decorated the room ourselves.</td><td>Kami mendekorasi ruang ini sendiri (Maksudnya: Kami sendiri yang mendekorasi ruangan ini).</td></tr>
                <tr><td>He completed the project himself.</td><td>Ia menyelesaikan proyek itu sendiri (Maksudnya: Ia sendiri yang menyelesaikan proyek itu).</td></tr>
                <tr><td>You should be proud of yourself.</td><td>Kami harus bangga pada dirimu sendiri.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Interrogative Pronouns</h3>
        <p><strong>Interrogative Pronouns</strong> adalah kata ganti yang digunakan untuk mengajukan pertanyaan tentang orang, benda, atau hal tertentu. Kata ini berfungsi sebagai subjek, objek, atau pelengkap dalam kalimat tanya dan membantu mengidentifikasi informasi yang ingin diketahui.</p>
        <p>Berikut adalah Interrogative Pronouns dalam bahasa Inggris:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Interrogative Pronoun</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>who</td><td>siapa (menanyakan subyek)</td></tr>
                <tr><td>whom</td><td>siapa (menanyakan objek)</td></tr>
                <tr><td>whose</td><td>milik siapa</td></tr>
                <tr><td>what</td><td>apa</td></tr>
                <tr><td>which</td><td>yang mana</td></tr>
            </tbody>
        </table>

        <p>Contoh:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Who is in the garden?</td><td>Siapa yang berada di taman?</td></tr>
                <tr><td>Who wants ice cream?</td><td>Siapa yang mau es krim?</td></tr>
                <tr><td>Whom do you meet?</td><td>Siapa yang kamu temui?</td></tr>
                <tr><td>Whose book is this?</td><td>Buku milik siapa ini?</td></tr>
                <tr><td>What is this?</td><td>Apa ini?</td></tr>
                <tr><td>What makes you sad?</td><td>Apa yang membuat kamu sedih?</td></tr>
                <tr><td>Which is your book?</td><td>Yang mana bukumu?</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Relative Pronouns</h3>
        <p><strong>Relative Pronouns</strong> adalah kata ganti yang digunakan untuk menghubungkan dua klausa dalam sebuah kalimat, memberikan informasi tambahan tentang seseorang, benda, atau hal tanpa mengulang kata benda.</p>
        <p>Berikut adalah Relative Pronouns dalam bahasa Inggris:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Relative Pronoun</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>who</td><td>yang (subjek, orang)</td></tr>
                <tr><td>whom</td><td>yang (objek, orang)</td></tr>
                <tr><td>whose</td><td>yang (kepemilikan)</td></tr>
                <tr><td>which</td><td>yang (benda/hewan)</td></tr>
                <tr><td>that</td><td>yang</td></tr>
            </tbody>
        </table>

        <p>Contoh:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>The boy who plays football is my friend.</td><td>Anak laki-laki yang bermain sepak bola adalah teman saya.</td></tr>
                <tr><td>The friend whom I call every weekend lives in Jakarta.</td><td>Teman yang saya telepon setiap akhir pekan tinggal di Jakarta.</td></tr>
                <tr><td>The girl whose bag is on the table studies with me.</td><td>Gadis yang tasnya ada di meja belajar bersama saya.</td></tr>
                <tr><td>The book which I read every night is very inspiring.</td><td>Buku yang saya baca setiap malam sangat menginspirasi.</td></tr>
                <tr><td>The phone that I use daily has a great camera.</td><td>Telepon yang saya gunakan setiap hari memiliki kamera bagus.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Indefinite Pronouns</h3>
        <p><strong>Indefinite Pronouns</strong> adalah kata ganti yang merujuk pada orang, benda, atau hal secara tidak spesifik, tanpa menyebutkan identitas yang jelas. Kata ini digunakan ketika kita tidak tahu atau tidak perlu menyebutkan secara pasti siapa atau apa yang dimaksud, atau ketika kita berbicara secara umum.</p>
        
        <h4 class="pos-subtitle">1. Indefinite Pronoun yang merujuk pada orang</h4>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Indefinite Pronoun</th>
                    <th>Artinya</th>
                    <th>Indefinite Pronoun</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>someone</td><td>seseorang (positif)</td><td>everyone</td><td>setiap orang</td></tr>
                <tr><td>somebody</td><td>seseorang (positif)</td><td>everybody</td><td>setiap orang</td></tr>
                <tr><td>anyone</td><td>seseorang (negatif, interogatif)</td><td>no one</td><td>tak seorang pun</td></tr>
                <tr><td>anybody</td><td>seseorang (negatif, interogatif)</td><td>nobody</td><td>tak seorang pun</td></tr>
            </tbody>
        </table>

        <p>Contoh penggunaan:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Someone knocks on the door.</td><td>Seseorang mengetuk pintu.</td></tr>
                <tr><td>Somebody needs help with the homework.</td><td>Seseorang membutuhkan bantuan dengan pekerjaan rumah.</td></tr>
                <tr><td>I don’t know anyone at this party.</td><td>Saya tidak mengenal siapa pun di pesta ini.</td></tr>
                <tr><td>Does anybody want more coffee?</td><td>Apakah ada orang yang ingin tambah kopi?</td></tr>
                <tr><td>Everyone likes the new teacher.</td><td>Semua orang menyukai guru baru.</td></tr>
                <tr><td>Everybody attends the school meeting.</td><td>Semua orang menghadiri rapat sekolah.</td></tr>
                <tr><td>No one answers the question.</td><td>Tidak ada yang menjawab pertanyaan.</td></tr>
                <tr><td>Nobody visits the old house.</td><td>Tidak ada yang mengunjungi rumah tua itu.</td></tr>
                <tr><td>Someone calls me.</td><td>Seseorang menelepon saya.</td></tr>
                <tr><td>Somebody calls me.</td><td>Seseorang menelepon saya.</td></tr>
                <tr><td>I don’t see anyone.</td><td>Saya tidak melihat siapa pun.</td></tr>
                <tr><td>I don’t see anybody.</td><td>Saya tidak melihat siapa pun.</td></tr>
                <tr><td>Everybody is ready.</td><td>Semua orang siap.</td></tr>
                <tr><td>No one is ready.</td><td>Tidak ada yang siap.</td></tr>
                <tr><td>Nobody is ready.</td><td>Tidak ada yang siap.</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">2. Indefinite Pronoun yang merujuk pada benda</h4>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Indefinite Pronoun</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>something</td><td>sesuatu</td></tr>
                <tr><td>anything</td><td>sesuatu (negatif)</td></tr>
                <tr><td>everything</td><td>segala sesuatu</td></tr>
                <tr><td>nothing</td><td>tak ada, tak satu pun</td></tr>
            </tbody>
        </table>

        <p>Contoh penggunaan:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>I need something to eat.</td><td>Saya perlu sesuatu untuk dimakan.</td></tr>
                <tr><td>I don’t have anything to wear.</td><td>Saya tidak punya apa-apa untuk dipakai.</td></tr>
                <tr><td>I don’t know anything about this topic.</td><td>Saya tidak tahu apa-apa tentang topik ini.</td></tr>
                <tr><td>Everything is ready for the event.</td><td>Semuanya sudah siap untuk acara.</td></tr>
                <tr><td>She checks everything before leaving the house.</td><td>Dia memeriksa semuanya sebelum meninggalkan rumah.</td></tr>
                <tr><td>There’s nothing in the fridge.</td><td>Tidak ada apa-apa di kulkas.</td></tr>
                <tr><td>He says nothing during the meeting.</td><td>Dia tidak mengatakan apa-apa selama rapat.</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">3. Indefinite Pronoun yang merujuk pada jumlah/kuantitas</h4>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Indefinite Pronoun</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>some</td><td>beberapa (positif)</td></tr>
                <tr><td>any</td><td>beberapa (negatif, interogatif)</td></tr>
                <tr><td>none</td><td>tak satu pun</td></tr>
                <tr><td>all</td><td>semua</td></tr>
                <tr><td>many</td><td>banyak (countable)</td></tr>
                <tr><td>few</td><td>sedikit (countable)</td></tr>
                <tr><td>several</td><td>beberapa (countable)</td></tr>
            </tbody>
        </table>

        <p>Contoh penggunaan:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Some students join the club.</td><td>Beberapa siswa bergabung dengan klub.</td></tr>
                <tr><td>I need some sugar for my coffee.</td><td>Saya perlu sedikit gula untuk kopi saya.</td></tr>
                <tr><td>I don’t have any money.</td><td>Saya tidak punya uang.</td></tr>
                <tr><td>Does any student know the answer?</td><td>Apakah ada siswa yang tahu jawabannya?</td></tr>
                <tr><td>None of the books is available.</td><td>Tidak ada satu pun buku yang tersedia.</td></tr>
                <tr><td>None of the guests arrive on time.</td><td>Tidak ada satu pun tamu yang datang tepat waktu.</td></tr>
                <tr><td>All students attend the meeting.</td><td>Semua siswa menghadiri rapat.</td></tr>
                <tr><td>All water stays in the bottle.</td><td>Semua air tetap di dalam botol.</td></tr>
                <tr><td>Many people visit the park on weekends.</td><td>Banyak orang mengunjungi taman di akhir pekan.</td></tr>
                <tr><td>Many books fill the library.</td><td>Banyak buku memenuhi perpustakaan.</td></tr>
                <tr><td>Few students understand the lesson.</td><td>Sedikit siswa yang memahami pelajaran.</td></tr>
                <tr><td>Few cars park in the lot today.</td><td>Sedikit mobil yang parkir di tempat itu hari ini.</td></tr>
                <tr><td>Several friends call me every week.</td><td>Beberapa teman menelepon saya setiap minggu.</td></tr>
                <tr><td>Several chairs stand in the room.</td><td>Beberapa kursi ada di ruangan itu.</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">4. Indefinite Pronoun lainnya</h4>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Indefinite Pronoun</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>one</td><td>seseorang</td></tr>
                <tr><td>another</td><td>yang lain</td></tr>
                <tr><td>each</td><td>setiap</td></tr>
                <tr><td>both</td><td>keduanya</td></tr>
                <tr><td>either</td><td>salah satu (dari dua opsi)</td></tr>
                <tr><td>neither</td><td>tak satu pun</td></tr>
            </tbody>
        </table>

        <p>Contoh penggunaan:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>One needs a ticket to enter the museum.</td><td>Seseorang membutuhkan tiket untuk masuk museum.</td></tr>
                <tr><td>This shirt is too small, so I choose another.</td><td>Kaus ini terlalu kecil, jadi saya pilih yang lain.</td></tr>
                <tr><td>Each student writes a short essay.</td><td>Setiap siswa menulis esai pendek.</td></tr>
                <tr><td>Both girls play in the park.</td><td>Kedua gadis itu bermain di taman.</td></tr>
                <tr><td>Both cars belong to my father.</td><td>Kedua mobil itu milik ayah saya.</td></tr>
                <tr><td>You can sit on either chair.</td><td>Kamu bisa duduk di salah satu kursi.</td></tr>
                <tr><td>Neither answer is correct.</td><td>Kedua jawaban itu tidak benar.</td></tr>
                <tr><td>Neither student knows the solution.</td><td>Kedua siswa itu tidak tahu solusinya.</td></tr>
            </tbody>
        </table>

    </div>

</div>

<div class="back-nav">
    <a href="index.php?hal=grammar" class="btn-secondary">← Kembali ke Materi Grammar</a>
</div>