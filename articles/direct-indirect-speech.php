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
    <h2 class="section-title">Direct and Indirect Speech</h2>
    <p>Panduan lengkap mengubah kalimat langsung menjadi kalimat tidak langsung.</p>
</div>

<div class="article-content">

    <div class="pos-section">
        <h3 class="pos-title">Pengertian</h3>
        <p><strong>Direct Speech</strong> (Kalimat Langsung) adalah kalimat yang diucapkan langsung oleh pembicara. Kalimat ini selalu diapit oleh tanda kutip (<em>"..."</em>).</p>
        <p><strong>Indirect Speech / Reported Speech</strong> (Kalimat Tidak Langsung) adalah kalimat yang digunakan untuk melaporkan atau menyampaikan kembali perkataan orang lain tanpa mengutip perkataan aslinya persis kata demi kata. Tanda kutip dihilangkan dalam bentuk ini.</p>

        <h4 class="pos-subtitle">Contoh Dasar</h4>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Bentuk</th>
                    <th>Contoh Kalimat</th>
                    <th>Artinya</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Direct</strong></td>
                    <td>He said, "I am happy."</td>
                    <td>Dia berkata, "Saya bahagia."</td>
                </tr>
                <tr>
                    <td><strong>Indirect</strong></td>
                    <td>He said that he was happy.</td>
                    <td>Dia berkata bahwa dia bahagia.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Aturan Perubahan (Rules of Conversion)</h3>
        <p>Saat mengubah Direct Speech menjadi Indirect Speech, ada tiga perubahan utama yang harus diperhatikan: perubahan Tenses, perubahan Pronoun (Kata Ganti), dan perubahan Adverb (Keterangan Waktu/Tempat).</p>

        <h4 class="pos-subtitle">1. Perubahan Tenses (Kata Kerja)</h4>
        <p>Jika <em>reporting verb</em> (kata kerja pelapor) berada dalam bentuk lampau (seperti <em>said, told, asked</em>), maka Tense pada kalimat yang dilaporkan akan mengalami kemunduran (<em>backshift</em>).</p>
        
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Direct Speech Tense</th>
                    <th>&#8594;</th>
                    <th>Indirect Speech Tense</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Simple Present <em>(Verb 1 / am,is,are)</em></td><td>&#8594;</td><td>Simple Past <em>(Verb 2 / was,were)</em></td></tr>
                <tr><td>Present Continuous <em>(am,is,are + V-ing)</em></td><td>&#8594;</td><td>Past Continuous <em>(was,were + V-ing)</em></td></tr>
                <tr><td>Simple Past <em>(Verb 2)</em></td><td>&#8594;</td><td>Past Perfect <em>(had + Verb 3)</em></td></tr>
                <tr><td>Present Perfect <em>(have/has + Verb 3)</em></td><td>&#8594;</td><td>Past Perfect <em>(had + Verb 3)</em></td></tr>
                <tr><td>Simple Future <em>(will + Verb 1)</em></td><td>&#8594;</td><td>Past Future <em>(would + Verb 1)</em></td></tr>
                <tr><td>Can / May / Must</td><td>&#8594;</td><td>Could / Might / Had to</td></tr>
            </tbody>
        </table>

        <div class="formula-box">Pengecualian: Jika kalimat menyampaikan "Kebenaran Umum (Fakta)", maka tenses-nya TIDAK berubah. <br><br>Contoh: <em>He said, "The earth is round." &#8594; He said that the earth is round.</em></div>

        <h4 class="pos-subtitle">2. Perubahan Keterangan Waktu & Tempat (Adverbs)</h4>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Direct Speech</th>
                    <th>Indirect Speech</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Now (sekarang)</td><td>Then (pada waktu itu)</td></tr>
                <tr><td>Here (di sini)</td><td>There (di sana)</td></tr>
                <tr><td>This (ini)</td><td>That (itu)</td></tr>
                <tr><td>These (ini - jamak)</td><td>Those (itu - jamak)</td></tr>
                <tr><td>Today (hari ini)</td><td>That day (hari itu)</td></tr>
                <tr><td>Tonight (malam ini)</td><td>That night (malam itu)</td></tr>
                <tr><td>Yesterday (kemarin)</td><td>The day before / The previous day</td></tr>
                <tr><td>Tomorrow (besok)</td><td>The next day / The following day</td></tr>
                <tr><td>Last week (minggu lalu)</td><td>The week before / The previous week</td></tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">3. Perubahan Pronoun (Kata Ganti)</h4>
        <p>Kata ganti orang akan berubah berdasarkan siapa yang berbicara dan siapa yang dilaporkan.</p>
        <ul class="note-list">
            <li>Kata ganti orang pertama (I, We, Me, Us, My, Our) berubah sesuai dengan <strong>Subjek</strong> yang berbicara.</li>
            <li>Kata ganti orang kedua (You, Your) berubah sesuai dengan <strong>Objek</strong> yang diajak bicara.</li>
            <li>Kata ganti orang ketiga (He, She, It, They) <strong>tidak berubah</strong>.</li>
        </ul>
    </div>

    <div class="pos-section">
        <h3 class="pos-title">Jenis-Jenis Kalimat dalam Reported Speech</h3>

        <h4 class="pos-subtitle">A. Statement (Pernyataan)</h4>
        <p>Dalam kalimat pernyataan, kita menggunakan kata penghubung <strong>that</strong> (bahwa). Kata "that" ini opsional (boleh dipakai, boleh tidak).</p>
        
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Direct Speech</th>
                    <th>Indirect Speech</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>She said, "I <strong>like</strong> this book."</td>
                    <td>She said (that) she <strong>liked</strong> that book.</td>
                </tr>
                <tr>
                    <td>John told me, "I <strong>am studying</strong> now."</td>
                    <td>John told me (that) he <strong>was studying</strong> then.</td>
                </tr>
                <tr>
                    <td>They said, "We <strong>will go</strong> tomorrow."</td>
                    <td>They said (that) they <strong>would go</strong> the next day.</td>
                </tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">B. Command / Request (Perintah / Permintaan)</h4>
        <p>Untuk kalimat perintah/larangan, kita tidak mengubah Tense, melainkan mengubah kata kerjanya menjadi <strong>To-Infinitive</strong> (untuk perintah) atau <strong>Not To-Infinitive</strong> (untuk larangan).</p>
        <div class="formula-box">Positive Command: asked/told + Object + to + Verb 1 <br>Negative Command: asked/told + Object + not to + Verb 1</div>

        <table class="pos-table">
            <thead>
                <tr>
                    <th>Direct Speech</th>
                    <th>Indirect Speech</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>The teacher said to me, "<strong>Open</strong> your book!"</td>
                    <td>The teacher told me <strong>to open</strong> my book.</td>
                </tr>
                <tr>
                    <td>He said to her, "<strong>Please help</strong> me."</td>
                    <td>He asked her <strong>to help</strong> him.</td>
                </tr>
                <tr>
                    <td>Mom said, "<strong>Don't play</strong> in the rain!"</td>
                    <td>Mom told us <strong>not to play</strong> in the rain.</td>
                </tr>
            </tbody>
        </table>

        <h4 class="pos-subtitle">C. Question (Pertanyaan)</h4>
        <p>Saat melaporkan kalimat tanya, <strong>kalimat tersebut berubah menjadi kalimat pernyataan (positif)</strong>, sehingga tidak ada lagi format (Do/Does/Did + Subjek), melainkan menjadi (Subjek + Verb).</p>

        <p><strong>1. Yes/No Questions</strong> (Gunakan kata hubung <em>If</em> atau <em>Whether</em> yang artinya "apakah"):</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Direct Speech</th>
                    <th>Indirect Speech</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>He asked me, "<strong>Do</strong> you <strong>like</strong> coffee?"</td>
                    <td>He asked me <strong>if</strong> I <strong>liked</strong> coffee.</td>
                </tr>
                <tr>
                    <td>She asked him, "<strong>Are</strong> you <strong>ready</strong>?"</td>
                    <td>She asked him <strong>whether</strong> he <strong>was ready</strong>.</td>
                </tr>
            </tbody>
        </table>

        <p><strong>2. WH-Questions</strong> (What, Where, When, Who, Why, How. Tetap gunakan kata tanya tersebut sebagai kata hubung):</p>
        <table class="pos-table">
            <thead>
                <tr>
                    <th>Direct Speech</th>
                    <th>Indirect Speech</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>They asked, "<strong>Where do</strong> you <strong>live</strong>?"</td>
                    <td>They asked me <strong>where</strong> I <strong>lived</strong>.</td>
                </tr>
                <tr>
                    <td>I asked her, "<strong>What are</strong> you <strong>doing</strong>?"</td>
                    <td>I asked her <strong>what</strong> she <strong>was doing</strong>.</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="back-nav">
    <a href="index.php?hal=grammar" class="btn-secondary">← Kembali ke Materi Grammar</a>
</div>