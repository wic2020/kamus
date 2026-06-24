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
        color: var(--primary);
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

    .note-box {
        background: var(--light);
        border-left: 4px solid var(--secondary);
        padding: 15px 20px;
        border-radius: 0 10px 10px 0;
        margin: 15px 0;
        font-style: italic;
    }

    .back-nav {
        margin-top: 50px;
        text-align: center;
        border-top: 2px dashed #e2e8f0;
        padding-top: 30px;
    }
</style>

<div class="article-header">
    <h2 class="section-title">Noun (Kata Benda)</h2>
    <p>Panduan lengkap memahami klasifikasi dan aturan kata benda dalam bahasa Inggris.</p>
</div>

<div class="article-content">
    
    <div class="pos-section">
        <p>Kata benda dapat dikategorikan menjadi dua:</p>
        <ol style="margin-left: 20px; margin-bottom: 15px; color: #475569;">
            <li><strong>Common Noun</strong> (nama benda secara umum)</li>
            <li><strong>Proper Noun</strong> (nama benda secara khusus)</li>
        </ol>

        <h4 class="pos-subtitle">1. Common Noun</h4>
        <p><strong>Common Noun</strong> adalah kata benda yang merujuk pada benda, orang, tempat, atau konsep secara umum dan tidak spesifik. Common Noun ditulis dengan <strong>huruf kecil</strong>, kecuali di awal kalimat.</p>
        <p>Contoh Common Noun:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>continent</td><td>benua</td></tr>
                <tr><td>university</td><td>universitas</td></tr>
                <tr><td>man</td><td>pria</td></tr>
                <tr><td>cat</td><td>kucing</td></tr>
                <tr><td>family</td><td>keluarga</td></tr>
                <tr><td>ship</td><td>kapal</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">2. Proper Noun</h4>
        <p><strong>Proper Noun</strong> adalah kata benda yang merujuk pada nama spesifik orang, tempat, atau benda tertentu. Penulisan proper noun selalu diawali dengan <strong>huruf kapital</strong>.</p>
        <p>Contoh Proper Noun:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Africa</td><td>Afrika</td></tr>
                <tr><td>University of Gadjah Mada</td><td>Universitas Gadjah Mada</td></tr>
                <tr><td>Mr. John</td><td>Tuan John</td></tr>
                <tr><td>The Smiths</td><td>Keluarga Smith</td></tr>
                <tr><td>Titanic</td><td>Titanic</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Singular Noun and Plural Noun</h3>
        <p>Kata benda dapat berupa <strong>singular</strong> (tunggal) atau <strong>plural</strong> (jamak). Berikut adalah aturan untuk membentuk bentuk plural dari kata benda:</p>

        <h4 class="pos-subtitle">1. Menambahkan -s</h4>
        <p>Untuk sebagian besar kata benda, tambahkan akhiran <strong>-s</strong>.</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Singular</th>
                    <th>Plural</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>book</td><td>books</td><td>buku</td></tr>
                <tr><td>ball</td><td>balls</td><td>bola</td></tr>
                <tr><td>apple</td><td>apples</td><td>apel</td></tr>
                <tr><td>river</td><td>rivers</td><td>sungai</td></tr>
                <tr><td>horse</td><td>horses</td><td>kuda</td></tr>
                <tr><td>day</td><td>days</td><td>hari</td></tr>
                <tr><td>boy</td><td>boys</td><td>anak laki-laki</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">2. Menambahkan -es</h4>
        <p>Untuk kata benda yang berakhiran <strong>-s, -x, -z, -sh,</strong> atau <strong>-ch</strong>, tambahkan akhiran <strong>-es</strong>.</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Singular</th>
                    <th>Plural</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>bus</td><td>buses</td><td>bus</td></tr>
                <tr><td>box</td><td>boxes</td><td>kotak</td></tr>
                <tr><td>dish</td><td>dishes</td><td>piring</td></tr>
                <tr><td>match</td><td>matches</td><td>korek api</td></tr>
                <tr><td>glass</td><td>glasses</td><td>gelas</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">3. Mengubah -f atau -fe menjadi -ves</h4>
        <p>Untuk kata benda yang berakhiran <strong>-f</strong> atau <strong>-fe</strong>, ubah akhiran tersebut menjadi <strong>-ves</strong>.</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Singular</th>
                    <th>Plural</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>wolf</td><td>wolves</td><td>serigala</td></tr>
                <tr><td>life</td><td>lives</td><td>kehidupan</td></tr>
                <tr><td>knife</td><td>knives</td><td>pisau</td></tr>
                <tr><td>leaf</td><td>leaves</td><td>daun</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">4. Mengubah -y menjadi -ies</h4>
        <p>Untuk kata benda yang berakhiran konsonan dan <strong>-y</strong>, ubah <strong>-y</strong> menjadi <strong>-i</strong> dan tambahkan <strong>-es</strong>.</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Singular</th>
                    <th>Plural</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>city</td><td>cities</td><td>kota</td></tr>
                <tr><td>baby</td><td>babies</td><td>bayi</td></tr>
                <tr><td>country</td><td>countries</td><td>negara</td></tr>
                <tr><td>family</td><td>families</td><td>keluarga</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">5. Kata Benda dengan Bentuk Plural Tidak Beraturan</h4>
        <p>Beberapa kata benda memiliki bentuk plural yang tidak mengikuti aturan standar.</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Singular</th>
                    <th>Plural</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>man</td><td>men</td><td>laki-laki</td></tr>
                <tr><td>woman</td><td>women</td><td>perempuan</td></tr>
                <tr><td>person</td><td>people</td><td>orang</td></tr>
                <tr><td>child</td><td>children</td><td>anak</td></tr>
                <tr><td>tooth</td><td>teeth</td><td>gigi</td></tr>
                <tr><td>mouse</td><td>mice</td><td>tikus</td></tr>
                <tr><td>goose</td><td>geese</td><td>angsa</td></tr>
                <tr><td>foot</td><td>feet</td><td>kaki</td></tr>
                <tr><td>nucleus</td><td>nuclei</td><td>inti</td></tr>
                <tr><td>fungus</td><td>fungi</td><td>jamur</td></tr>
                <tr><td>datum</td><td>data</td><td>data</td></tr>
                <tr><td>phenomenon</td><td>phenomena</td><td>fenomena</td></tr>
                <tr><td>criterion</td><td>criteria</td><td>kriteria</td></tr>
                <tr><td>tomato</td><td>tomatoes</td><td>tomat</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">6. Kata Benda dengan Bentuk Singular dan Plural Sama</h4>
        <p>Beberapa kata benda memiliki bentuk yang sama untuk singular dan plural.</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Singular</th>
                    <th>Plural</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>sheep</td><td>sheep</td><td>domba</td></tr>
                <tr><td>fish</td><td>fish</td><td>ikan</td></tr>
                <tr><td>deer</td><td>deer</td><td>rusa</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">7. Kata Benda yang Selalu Plural</h4>
        <p>Beberapa kata benda selalu digunakan dalam bentuk plural.</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Singular</th>
                    <th>Plural</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>-</td><td>trousers</td><td>celana panjang</td></tr>
                <tr><td>-</td><td>glasses</td><td>kacamata</td></tr>
                <tr><td>-</td><td>scissors</td><td>gunting</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">8. Kata Benda yang Selalu Singular</h4>
        <p>Beberapa kata benda selalu digunakan dalam bentuk singular.</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Singular</th>
                    <th>Plural</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>athletics</td><td>-</td><td>atletik</td></tr>
                <tr><td>physics</td><td>-</td><td>fisika</td></tr>
                <tr><td>statistics</td><td>-</td><td>statistika</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Articles</h3>
        <p>Dalam bahasa Inggris, articles adalah kata yang digunakan untuk menjelaskan apakah sebuah benda (noun) bersifat spesifik atau tidak. Ada dua jenis articles:</p>
        <ol style="margin-left: 20px; margin-bottom: 15px; color: #475569;">
            <li><strong>Indefinite Articles: a dan an</strong> (menunjukkan benda yang tidak spesifik)</li>
            <li><strong>Definite Article: the</strong> (menunjukkan benda yang spesifik)</li>
        </ol>

        <h4 class="pos-subtitle">1. Indefinite Articles: a dan an</h4>
        <p>Article <strong>a</strong> atau <strong>an</strong> digunakan untuk menyebut benda tunggal yang dapat dihitung (countable noun) dan belum dikenal oleh pembicara atau pendengar (tidak spesifik).</p>
        <ul style="margin-left: 20px; margin-bottom: 15px; color: #475569;">
            <li><strong>a</strong> digunakan sebelum kata yang dimulai dengan bunyi konsonan.</li>
            <li><strong>an</strong> digunakan sebelum kata yang dimulai dengan bunyi vokal (a, e, i, o, u).</li>
        </ul>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>a book</td><td>sebuah buku</td></tr>
                <tr><td>a boy</td><td>seorang anak laki-laki</td></tr>
                <tr><td>a house</td><td>sebuah rumah</td></tr>
                <tr><td>a university</td><td>sebuah universitas</td></tr>
                <tr><td>an apple</td><td>sebuah apel</td></tr>
                <tr><td>an umbrella</td><td>sebuah payung</td></tr>
                <tr><td>an hour</td><td>satu jam</td></tr>
                <tr><td>an honour</td><td>sebuah penghargaan</td></tr>
            </tbody>
        </table>
        <div class="note-box">
            <strong>a/an</strong> tidak digunakan untuk benda yang tidak dapat dihitung (uncountable nouns) seperti water, sugar, atau information.
        </div>

        <h4 class="pos-subtitle">2. Definite Article: the</h4>
        <p>Article <strong>the</strong> digunakan untuk menyebut benda yang sudah spesifik atau dikenal oleh pembicara dan pendengar. Article "the" digunakan untuk benda tunggal, jamak, dapat dihitung, maupun tidak dapat dihitung.</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>the book</td><td>buku itu</td></tr>
                <tr><td>the boy</td><td>anak laki-laki itu</td></tr>
                <tr><td>the school</td><td>sekolah itu</td></tr>
                <tr><td>the dog</td><td>anjing itu</td></tr>
            </tbody>
        </table>
        <div class="note-box">
            Article <strong>"the"</strong> tidak digunakan untuk benda umum yang tidak spesifik. Contoh: I like coffee. (Bukan the coffee, karena merujuk pada kopi secara umum).
        </div>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Countable and Uncountable Noun</h3>

        <h4 class="pos-subtitle">1. Countable Noun</h4>
        <p>Countable noun adalah kata benda yang dapat dihitung. Countable noun dapat berupa singular (tunggal) atau plural (jamak).</p>
        <p>Contoh:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>a house</td><td>sebuah rumah</td></tr>
                <tr><td>ten houses</td><td>sepuluh rumah</td></tr>
                <tr><td>a cat</td><td>seekor kucing</td></tr>
                <tr><td>two cats</td><td>dua ekor kucing</td></tr>
                <tr><td>a bird</td><td>seekor burung</td></tr>
                <tr><td>five birds</td><td>lima ekor burung</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">2. Uncountable Noun</h4>
        <p>Uncountable noun adalah kata benda yang tidak dapat dihitung. Uncountable noun selalu dalam bentuk singular (tunggal).</p>
        <p>Contoh:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>tea</td><td>teh</td></tr>
                <tr><td>rice</td><td>nasi</td></tr>
                <tr><td>coffee</td><td>kopi</td></tr>
                <tr><td>knowledge</td><td>pengetahuan</td></tr>
                <tr><td>sugar</td><td>gula</td></tr>
                <tr><td>trouble</td><td>masalah</td></tr>
                <tr><td>water</td><td>air</td></tr>
            </tbody>
        </table>

        <p>Meskipun tidak dapat dibentuk plural (jamak), uncountable noun dapat memiliki satuan atau ukuran.</p>
        <p>Contoh:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>a glass of water</td><td>segelas air</td></tr>
                <tr><td>a cup of tea</td><td>secangkir teh</td></tr>
                <tr><td>two glasses of tea</td><td>dua gelas teh</td></tr>
                <tr><td>two cups of coffee</td><td>dua cangkir kopi</td></tr>
                <tr><td>a tablespoon of sugar</td><td>satu sendok gula</td></tr>
                <tr><td>three tablespoons of sugar</td><td>tiga sendok gula</td></tr>
                <tr><td>a plate of rice</td><td>satu piring nasi</td></tr>
                <tr><td>five plates of rice</td><td>lima piring nasi</td></tr>
                <tr><td>a bottle of milk</td><td>sebotol susu</td></tr>
                <tr><td>a can of soda</td><td>sekaleng soda</td></tr>
                <tr><td>a jar of honey</td><td>satu toples madu</td></tr>
                <tr><td>a slice of pizza</td><td>sepotong pizza</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Possessive Nouns</h3>
        <p>Possessive nouns adalah bentuk kepemilikan kata benda. Cara membuat bentuk kepemilikan adalah:</p>

        <h4 class="pos-subtitle">1. Tambahkan –‘s di belakang kata benda</h4>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>David’s book</td><td>buku milik David</td></tr>
                <tr><td>John’s house</td><td>rumah milik John</td></tr>
                <tr><td>The child’s ball</td><td>bola milik anak itu</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">2. Untuk kata benda berakhiran huruf desis, tambahkan tanda apostrof (‘) di belakang kata benda</h4>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Charles’ book</td><td>Buku milik Charles</td></tr>
                <tr><td>Thomas’ computer</td><td>Komputer milik Thomas</td></tr>
                <tr><td>The Johnsons’ house</td><td>Rumah milik Keluarga Johnson</td></tr>
            </tbody>
        </table>
    </div>

</div>

<div class="back-nav">
    <a href="index.php?hal=grammar" class="btn-secondary">← Kembali ke Materi Grammar</a>
</div>