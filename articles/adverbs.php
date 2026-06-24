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

    .back-nav {
        margin-top: 50px;
        text-align: center;
        border-top: 2px dashed #e2e8f0;
        padding-top: 30px;
    }
</style>

<div class="article-header">
    <h2 class="section-title">Adverb (Kata Keterangan)</h2>
    <p>Panduan lengkap memahami berbagai jenis kata keterangan dan fungsinya dalam kalimat.</p>
</div>

<div class="article-content">

    <div class="pos-section">
        <h3 class="pos-title">Adverb of Manner</h3>
        <p><strong>Adverb of manner</strong> adalah kata keterangan yang menjelaskan bagaimana suatu tindakan dilakukan (cara melakukannya).</p>

        <h4 class="pos-subtitle">Regular Adverb</h4>
        <p>Sebagian besar Adverb of manner dibentuk dari adjective dengan menambahkan <strong>-ly</strong>.</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Adjective</th>
                    <th>Adverb of Manner</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>slow</td><td>slowly</td><td>dengan lambat</td></tr>
                <tr><td>quick</td><td>quickly</td><td>dengan cepat</td></tr>
                <tr><td>careful</td><td>carefully</td><td>dengan hati-hati</td></tr>
                <tr><td>polite</td><td>politely</td><td>dengan sopan</td></tr>
                <tr><td>loud</td><td>loudly</td><td>dengan keras</td></tr>
                <tr><td>beautiful</td><td>beautifully</td><td>dengan indah</td></tr>
                <tr><td>bad</td><td>badly</td><td>dengan buruk</td></tr>
            </tbody>
        </table>

        <p><strong>Contoh dalam kalimat:</strong></p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>The baby sleeps peacefully.</td><td>Bayi itu tidur dengan tenang.</td></tr>
                <tr><td>He spoke politely to the teacher.</td><td>Dia berbicara dengan sopan kepada guru.</td></tr>
                <tr><td>They walked slowly because of the rain.</td><td>Mereka berjalan dengan lambat karena hujan.</td></tr>
                <tr><td>She answered the phone quickly.</td><td>Dia menjawab telepon dengan cepat.</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">Irregular Adverb</h4>
        <p>Berikut adalah contoh adverb yang dibentuk dari adjective namun tidak dengan menambahkan <strong>-ly</strong>, sehingga harus dihafalkan.</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Adjective</th>
                    <th>Adverb of Manner</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>good</td><td>well</td><td>dengan baik</td></tr>
                <tr><td>fast</td><td>fast</td><td>dengan cepat</td></tr>
                <tr><td>hard</td><td>hard</td><td>dengan keras, dengan sungguh-sungguh</td></tr>
                <tr><td>late</td><td>late</td><td>dengan terlambat</td></tr>
                <tr><td>early</td><td>early</td><td>dengan lebih awal</td></tr>
                <tr><td>straight</td><td>straight</td><td>secara langsung</td></tr>
                <tr><td>high</td><td>high</td><td>tinggi</td></tr>
                <tr><td>deep</td><td>deep</td><td>dalam</td></tr>
                <tr><td>near</td><td>near</td><td>dari dekat</td></tr>
                <tr><td>wide</td><td>wide</td><td>secara luas</td></tr>
            </tbody>
        </table>

        <p><strong>Contoh kalimat:</strong></p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>English</th>
                    <th>Indonesian</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>She sings very well.</td><td>Dia bernyanyi dengan sangat baik.</td></tr>
                <tr><td>He runs fast, like a cheetah.</td><td>Dia berlari cepat seperti cheetah.</td></tr>
                <tr><td>They worked hard all day.</td><td>Mereka bekerja keras sepanjang hari.</td></tr>
                <tr><td>I arrived late to school.</td><td>Saya tiba terlambat ke sekolah.</td></tr>
                <tr><td>She woke up early this morning.</td><td>Dia bangun pagi-pagi hari ini.</td></tr>
                <tr><td>Go straight and turn left.</td><td>Jalan lurus dan belok kiri.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Adverb of Place</h3>
        <p><strong>Adverbs of place</strong> menjelaskan <strong>di mana</strong> suatu tindakan terjadi atau lokasi suatu kejadian.</p>
        <p>Berikut adalah daftar Adverb of Place lengkap dengan arti dan contoh kalimatnya:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Adverb of Place</th>
                    <th>Artinya</th>
                    <th>Contoh Kalimat</th>
                    <th>Arti Kalimat</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>here</td><td>di sini</td><td>Please come here and sit next to me.</td><td>Tolong datang ke sini dan duduk di sebelahku.</td></tr>
                <tr><td>there</td><td>di sana</td><td>I left my bag over there on the chair.</td><td>Aku meninggalkan tasku di sana, di atas kursi.</td></tr>
                <tr><td>everywhere</td><td>di mana-mana</td><td>We looked everywhere but couldn't find the keys.</td><td>Kami mencari ke mana-mana tapi tidak bisa menemukan kuncinya.</td></tr>
                <tr><td>somewhere</td><td>di suatu tempat</td><td>I think I lost my phone somewhere in the house.</td><td>Aku pikir aku kehilangan ponselku di suatu tempat di dalam rumah.</td></tr>
                <tr><td>nowhere</td><td>tidak di mana-mana</td><td>There was nowhere to sit in the crowded room.</td><td>Tidak ada tempat untuk duduk di ruangan yang penuh sesak itu.</td></tr>
                <tr><td>above</td><td>di atas</td><td>The painting hangs above the fireplace.</td><td>Lukisan itu tergantung di atas perapian.</td></tr>
                <tr><td>below</td><td>di bawah</td><td>The temperature dropped below zero last night.</td><td>Suhu turun di bawah nol derajat tadi malam.</td></tr>
                <tr><td>inside</td><td>di dalam</td><td>The cat is hiding inside the box.</td><td>Kucing itu bersembunyi di dalam kotak.</td></tr>
                <tr><td>outside</td><td>di luar</td><td>The kids are playing outside in the yard.</td><td>Anak-anak sedang bermain di luar halaman.</td></tr>
                <tr><td>near</td><td>dekat</td><td>The bookstore is near the coffee shop.</td><td>Toko buku itu dekat dengan kedai kopi.</td></tr>
                <tr><td>far</td><td>jauh</td><td>His house is far from the city center.</td><td>Rumahnya jauh dari pusat kota.</td></tr>
                <tr><td>away</td><td>pergi / menjauh</td><td>She walked away without saying a word.</td><td>Dia pergi tanpa mengucapkan sepatah kata pun.</td></tr>
                <tr><td>back</td><td>kembali</td><td>He came back after a long trip.</td><td>Dia kembali setelah perjalanan panjang.</td></tr>
                <tr><td>up</td><td>ke atas</td><td>The balloon floated up into the sky.</td><td>Balon itu melayang ke atas ke langit.</td></tr>
                <tr><td>down</td><td>ke bawah</td><td>The cat jumped down from the table.</td><td>Kucing itu melompat ke bawah dari meja.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Adverb of Time</h3>
        <p><strong>Adverbs of time</strong> menjelaskan <strong>kapan</strong> suatu tindakan terjadi atau durasi waktu tertentu.</p>
        <p>Berikut adalah daftar Adverb of Time lengkap dengan arti dan contoh kalimatnya:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Adverb of Time</th>
                    <th>Artinya</th>
                    <th>Contoh Kalimat</th>
                    <th>Arti Kalimat</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>yesterday</td><td>kemarin</td><td>I met her yesterday at the mall.</td><td>Aku bertemu dengannya kemarin di mal.</td></tr>
                <tr><td>this morning</td><td>pagi tadi</td><td>He called me this morning.</td><td>Dia meneleponku pagi tadi.</td></tr>
                <tr><td>today</td><td>hari ini</td><td>We have a test today.</td><td>Kita punya ujian hari ini.</td></tr>
                <tr><td>tomorrow</td><td>besok</td><td>I will finish the project tomorrow.</td><td>Aku akan menyelesaikan proyek itu besok.</td></tr>
                <tr><td>tonight</td><td>nanti malam</td><td>Are you coming to the party tonight?</td><td>Apakah kamu datang ke pesta nanti malam?</td></tr>
                <tr><td>now</td><td>sekarang</td><td>I'm working now, please wait.</td><td>Aku sedang bekerja sekarang, tolong tunggu.</td></tr>
                <tr><td>then</td><td>nanti</td><td>We'll go to the cinema then.</td><td>Kita akan pergi ke bioskop nanti.</td></tr>
                <tr><td>later</td><td>nanti</td><td>I'll talk to you later.</td><td>Aku akan bicara denganmu nanti.</td></tr>
                <tr><td>yet</td><td>belum</td><td>He hasn't arrived yet.</td><td>Dia belum datang.</td></tr>
                <tr><td>early</td><td>awal</td><td>She arrived early to get a good seat.</td><td>Dia datang lebih awal untuk mendapatkan tempat duduk yang bagus.</td></tr>
                <tr><td>previously</td><td>sebelumnya</td><td>I had met him previously at a seminar.</td><td>Aku sudah bertemu dengannya sebelumnya di seminar.</td></tr>
                <tr><td>early days</td><td>dini hari</td><td>They left in the early days of January.</td><td>Mereka pergi pada dini hari bulan Januari.</td></tr>
                <tr><td>recently</td><td>baru-baru ini</td><td>I recently started a new job.</td><td>Aku baru-baru ini mulai pekerjaan baru.</td></tr>
                <tr><td>nowadays</td><td>dewasa ini</td><td>Nowadays, many people work remotely.</td><td>Dewasa ini, banyak orang bekerja dari jarak jauh.</td></tr>
                <tr><td>all day</td><td>sepanjang hari</td><td>It rained all day yesterday.</td><td>Hujan turun sepanjang hari kemarin.</td></tr>
                <tr><td>constantly</td><td>terus-menerus</td><td>He talks constantly during class.</td><td>Dia berbicara terus-menerus saat pelajaran.</td></tr>
                <tr><td>at that time</td><td>pada waktu itu</td><td>At that time, I was still in school.</td><td>Pada waktu itu, aku masih bersekolah.</td></tr>
                <tr><td>for hours</td><td>selama berjam-jam</td><td>We waited for hours at the station.</td><td>Kami menunggu selama berjam-jam di stasiun.</td></tr>
                <tr><td>for days</td><td>selama berhari-hari</td><td>She studied for days before the exam.</td><td>Dia belajar selama berhari-hari sebelum ujian.</td></tr>
                <tr><td>for weeks</td><td>selama berminggu-minggu</td><td>The pain lasted for weeks.</td><td>Rasa sakitnya berlangsung selama berminggu-minggu.</td></tr>
                <tr><td>for months</td><td>selama berbulan-bulan</td><td>They’ve been planning this for months.</td><td>Mereka sudah merencanakan ini selama berbulan-bulan.</td></tr>
                <tr><td>for years</td><td>selama bertahun-tahun</td><td>He lived abroad for years.</td><td>Dia tinggal di luar negeri selama bertahun-tahun.</td></tr>
                <tr><td>for centuries</td><td>selama berabad-abad</td><td>This tradition has been kept for centuries.</td><td>Tradisi ini telah dijaga selama berabad-abad.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Adverb of Frequency</h3>
        <p><strong>Adverbs of frequency</strong> menjelaskan <strong>seberapa sering</strong> suatu tindakan terjadi.</p>
        <p>Berikut adalah daftar Adverb of Frequency lengkap dengan arti dan contoh kalimatnya:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Adverb of Frequency</th>
                    <th>Artinya</th>
                    <th>Contoh Kalimat</th>
                    <th>Arti Kalimat</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>always</td><td>selalu</td><td>She always brings her notebook to class.</td><td>Dia selalu membawa buku catatannya ke kelas.</td></tr>
                <tr><td>usually</td><td>biasanya</td><td>I usually wake up at 6 a.m.</td><td>Saya biasanya bangun jam 6 pagi.</td></tr>
                <tr><td>generally</td><td>umumnya</td><td>People generally prefer fresh food.</td><td>Orang umumnya lebih suka makanan segar.</td></tr>
                <tr><td>often</td><td>sering</td><td>He often goes jogging in the park.</td><td>Dia sering jogging di taman.</td></tr>
                <tr><td>sometimes</td><td>kadang-kadang</td><td>Sometimes we eat out on weekends.</td><td>Kadang-kadang kami makan di luar saat akhir pekan.</td></tr>
                <tr><td>occasionally</td><td>kadang-kadang</td><td>I occasionally visit my cousins.</td><td>Saya kadang-kadang mengunjungi sepupu-sepupu saya.</td></tr>
                <tr><td>seldom</td><td>jarang</td><td>They seldom watch TV at night.</td><td>Mereka jarang menonton TV di malam hari.</td></tr>
                <tr><td>hardly ever</td><td>jarang sekali</td><td>She hardly ever eats sweets.</td><td>Dia jarang sekali makan makanan manis.</td></tr>
                <tr><td>rarely</td><td>jarang sekali</td><td>He rarely gets angry.</td><td>Dia jarang sekali marah.</td></tr>
                <tr><td>never</td><td>tidak pernah</td><td>I never smoke.</td><td>Saya tidak pernah merokok.</td></tr>
                <tr><td>daily</td><td>setiap hari</td><td>She writes in her journal daily.</td><td>Dia menulis di jurnalnya setiap hari.</td></tr>
                <tr><td>weekly</td><td>setiap minggu</td><td>We have meetings weekly.</td><td>Kami mengadakan pertemuan setiap minggu.</td></tr>
                <tr><td>monthly</td><td>setiap bulan</td><td>The magazine is published monthly.</td><td>Majalah itu diterbitkan setiap bulan.</td></tr>
                <tr><td>every day</td><td>setiap hari</td><td>He drinks coffee every day.</td><td>Dia minum kopi setiap hari.</td></tr>
                <tr><td>once a week</td><td>seminggu sekali</td><td>We play tennis once a week.</td><td>Kami bermain tenis seminggu sekali.</td></tr>
                <tr><td>bimonthly</td><td>setiap 2 bulan sekali</td><td>The committee meets bimonthly.</td><td>Komite bertemu setiap dua bulan sekali.</td></tr>
                <tr><td>biennial</td><td>setiap 2 tahun sekali</td><td>The festival is a biennial event.</td><td>Festival itu adalah acara yang diadakan setiap dua tahun sekali.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Adverb of Degree</h3>
        <p><strong>Adverbs of degree</strong> menjelaskan <strong>sejauh mana atau intensitas</strong> suatu tindakan, sifat, atau adverb lain.</p>
        <p>Berikut adalah daftar Adverb of Degree lengkap dengan arti dan contoh kalimatnya:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Adverb of Degree</th>
                    <th>Artinya</th>
                    <th>Contoh Kalimat</th>
                    <th>Arti Kalimat</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>extremely</td><td>sangat, luar biasa</td><td>The weather is extremely hot today.</td><td>Cuacanya sangat panas hari ini.</td></tr>
                <tr><td>exceptionally</td><td>sangat, luar biasa</td><td>She is an exceptionally talented musician.</td><td>Dia adalah musisi yang sangat berbakat.</td></tr>
                <tr><td>really</td><td>sangat</td><td>I'm really tired after the long trip.</td><td>Saya sangat lelah setelah perjalanan panjang.</td></tr>
                <tr><td>almost</td><td>hampir</td><td>He almost missed the train.</td><td>Dia hampir ketinggalan kereta.</td></tr>
                <tr><td>quite</td><td>lumayan</td><td>The movie was quite interesting.</td><td>Filmnya lumayan menarik.</td></tr>
                <tr><td>just</td><td>hanya</td><td>I just need five more minutes.</td><td>Saya hanya butuh lima menit lagi.</td></tr>
                <tr><td>too …</td><td>terlalu …</td><td>It’s too cold to go swimming.</td><td>Terlalu dingin untuk berenang.</td></tr>
                <tr><td>… enough</td><td>cukup …</td><td>She is strong enough to lift the box.</td><td>Dia cukup kuat untuk mengangkat kotak itu.</td></tr>
                <tr><td>very …</td><td>sangat …</td><td>He is very friendly to everyone.</td><td>Dia sangat ramah kepada semua orang.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Conjunctive Adverb</h3>
        <p><strong>Conjunctive adverbs</strong> adalah kata keterangan yang berfungsi sebagai penghubung antara dua klausa independen atau kalimat, menunjukkan hubungan seperti sebab-akibat, kontras, tambahan, atau urutan waktu.</p>
        <p>Berikut adalah daftar Conjunctive Adverb lengkap dengan arti dan contoh kalimatnya:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Conjunctive Adverb</th>
                    <th>Artinya</th>
                    <th>Contoh Kalimat</th>
                    <th>Arti Kalimat</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>accordingly</td><td>sesuai dengan itu</td><td>She was late; accordingly, the meeting started without her.</td><td>Dia terlambat; sesuai dengan itu, rapat dimulai tanpanya.</td></tr>
                <tr><td>besides</td><td>selain itu</td><td>I don’t want to go; besides, I’m tired.</td><td>Saya tidak ingin pergi; selain itu, saya lelah.</td></tr>
                <tr><td>consequently</td><td>akibatnya</td><td>He didn’t study; consequently, he failed the test.</td><td>Dia tidak belajar; akibatnya, dia gagal dalam ujian.</td></tr>
                <tr><td>finally</td><td>akhirnya</td><td>We worked all day; finally, we finished the project.</td><td>Kami bekerja seharian; akhirnya, kami menyelesaikan proyek.</td></tr>
                <tr><td>furthermore</td><td>lebih lanjut</td><td>The plan is affordable; furthermore, it’s effective.</td><td>Rencana itu terjangkau; lebih lanjut, itu efektif.</td></tr>
                <tr><td>hence</td><td>karenanya</td><td>It was raining; hence, we canceled the picnic.</td><td>Hujan turun; karenanya, kami membatalkan piknik.</td></tr>
                <tr><td>however</td><td>namun</td><td>I wanted to join; however, I was too busy.</td><td>Saya ingin ikut; namun, saya terlalu sibuk.</td></tr>
                <tr><td>indeed</td><td>memang</td><td>The task was difficult; indeed, it took hours to complete.</td><td>Tugas itu sulit; memang, butuh berjam-jam untuk menyelesaikannya.</td></tr>
                <tr><td>instead</td><td>sebaliknya</td><td>She didn’t call; instead, she sent a text.</td><td>Dia tidak menelepon; sebaliknya, dia mengirim pesan.</td></tr>
                <tr><td>likewise</td><td>demikian pula</td><td>He loves hiking; likewise, his brother enjoys it too.</td><td>Dia suka mendaki; demikian pula, saudaranya juga menikmatinya.</td></tr>
                <tr><td>meanwhile</td><td>sementara itu</td><td>I was cooking; meanwhile, she was setting the table.</td><td>Saya sedang memasak; sementara itu, dia menata meja.</td></tr>
                <tr><td>moreover</td><td>selain itu</td><td>The car is fast; moreover, it’s fuel-efficient.</td><td>Mobil itu cepat; selain itu, hemat bahan bakar.</td></tr>
                <tr><td>nevertheless</td><td>meskipun demikian</td><td>It was expensive; nevertheless, she bought it.</td><td>Itu mahal; meskipun demikian, dia membelinya.</td></tr>
                <tr><td>nonetheless</td><td>meskipun begitu</td><td>The task was hard; nonetheless, we completed it.</td><td>Tugas itu sulit; meskipun begitu, kami menyelesaikannya.</td></tr>
                <tr><td>otherwise</td><td>jika tidak</td><td>Study hard; otherwise, you might fail.</td><td>Belajar keras; jika tidak, kamu mungkin gagal.</td></tr>
                <tr><td>similarly</td><td>dengan cara yang sama</td><td>She dances gracefully; similarly, her sister performs well.</td><td>Dia menari dengan anggun; dengan cara yang sama, adiknya juga tampil baik.</td></tr>
                <tr><td>simultaneously</td><td>pada waktu yang sama</td><td>She was cooking; simultaneously, he was cleaning.</td><td>Dia sedang memasak; pada waktu yang sama, dia membersihkan.</td></tr>
                <tr><td>subsequently</td><td>setelah itu</td><td>He missed the bus; subsequently, he was late for work.</td><td>Dia ketinggalan bus; setelah itu, dia terlambat bekerja.</td></tr>
                <tr><td>then</td><td>selanjutnya</td><td>We finished the report; then, we submitted it.</td><td>Kami menyelesaikan laporan; selanjutnya, kami mengirimkannya.</td></tr>
                <tr><td>thereby</td><td>dengan demikian</td><td>He paid the fine; thereby, he avoided jail.</td><td>Dia membayar denda; dengan demikian, dia menghindari penjara.</td></tr>
                <tr><td>therefore</td><td>oleh karena itu</td><td>She was sick; therefore, she stayed home.</td><td>Dia sakit; oleh karena itu, dia tinggal di rumah.</td></tr>
                <tr><td>thus</td><td>dengan demikian</td><td>He forgot his lines; thus, the play was delayed.</td><td>Dia lupa dialognya; dengan demikian, pertunjukan tertunda.</td></tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Commenting Adverb</h3>
        <p><strong>Commenting adverbs</strong> menyatakan sikap, opini, atau penilaian pembicara terhadap isi kalimat. Mereka tidak memodifikasi kata kerja atau kata sifat tertentu, melainkan mengomentari keseluruhan kalimat.</p>
        <p>Berikut adalah daftar Commenting Adverb lengkap dengan arti dan contoh kalimatnya:</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Commenting Adverb</th>
                    <th>Artinya</th>
                    <th>Contoh Kalimat</th>
                    <th>Arti Kalimat</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>apparently</td><td>rupanya</td><td>Apparently, they’re moving to a new city.</td><td>Rupanya, mereka pindah ke kota baru.</td></tr>
                <tr><td>clearly</td><td>dengan jelas</td><td>Clearly, she’s the best candidate.</td><td>Dengan jelas, dia adalah kandidat terbaik.</td></tr>
                <tr><td>confidentially</td><td>secara rahasia</td><td>Confidentially, I don’t trust him.</td><td>Secara rahasia, saya tidak mempercayainya.</td></tr>
                <tr><td>evidently</td><td>jelas</td><td>Evidently, he didn’t read the instructions.</td><td>Jelas, dia tidak membaca petunjuknya.</td></tr>
                <tr><td>fortunately</td><td>untungnya</td><td>Fortunately, the rain stopped before the event.</td><td>Untungnya, hujan berhenti sebelum acara.</td></tr>
                <tr><td>frankly</td><td>terus terang</td><td>Frankly, I don’t like this plan.</td><td>Terus terang, saya tidak suka rencana ini.</td></tr>
                <tr><td>honestly</td><td>sejujurnya</td><td>Honestly, I didn’t expect to win.</td><td>Sejujurnya, saya tidak menyangka akan menang.</td></tr>
                <tr><td>hopefully</td><td>semoga</td><td>Hopefully, the weather will be nice tomorrow.</td><td>Semoga, cuaca akan cerah besok.</td></tr>
                <tr><td>ideally</td><td>idealnya</td><td>Ideally, we should finish by noon.</td><td>Idealnya, kita harus selesai sebelum tengah hari.</td></tr>
                <tr><td>luckily</td><td>beruntung</td><td>Luckily, I found my keys just in time.</td><td>Beruntung, saya menemukan kunci saya tepat waktu.</td></tr>
                <tr><td>naturally</td><td>secara alami</td><td>Naturally, she excelled in the competition.</td><td>Secara alami, dia unggul dalam kompetisi.</td></tr>
                <tr><td>obviously</td><td>jelas</td><td>Obviously, he’s very talented.</td><td>Jelas, dia sangat berbakat.</td></tr>
                <tr><td>personally</td><td>secara pribadi</td><td>Personally, I prefer tea over coffee.</td><td>Secara pribadi, saya lebih suka teh daripada kopi.</td></tr>
                <tr><td>presumably</td><td>mungkin</td><td>Presumably, they’ll arrive by evening.</td><td>Mungkin, mereka akan tiba menjelang malam.</td></tr>
                <tr><td>probably</td><td>mungkin</td><td>Probably, they’ll finish the project by tomorrow.</td><td>Mungkin, mereka akan menyelesaikan proyek itu besok.</td></tr>
                <tr><td>sadly</td><td>sayangnya</td><td>Sadly, we couldn’t attend the event.</td><td>Sayangnya, kami tidak bisa menghadiri acara itu.</td></tr>
                <tr><td>surprisingly</td><td>anehnya</td><td>Surprisingly, he finished the race first.</td><td>Anehnya, dia menyelesaikan balapan lebih dulu.</td></tr>
                <tr><td>unbelievably</td><td>luar biasa</td><td>Unbelievably, he won the race despite being injured.</td><td>Luar biasa, dia memenangkan balapan meskipun cedera.</td></tr>
                <tr><td>unfortunately</td><td>sayangnya</td><td>Unfortunately, I missed the bus.</td><td>Sayangnya, saya ketinggalan bus.</td></tr>
                <tr><td>wisely</td><td>dengan bijak</td><td>Wisely, she chose to save her money.</td><td>Dengan bijak, dia memilih untuk menabung.</td></tr>
            </tbody>
        </table>
    </div>

</div>

<div class="back-nav">
    <a href="index.php?hal=grammar" class="btn-secondary">← Kembali ke Materi Grammar</a>
</div>