<?php
if(count(get_included_files()) == 1) die("Akses Ditolak!");
?>

<!-- Hero Slider Section -->
<section class="hero-container">
    <div class="slider" id="slider">
        <div class="slide"><img src="https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?auto=format&fit=crop&w=1600&q=80" alt="Slide 1"></div>
        <div class="slide"><img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1600&q=80" alt="Slide 2"></div>
        <div class="slide"><img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1600&q=80" alt="Slide 3"></div>
    </div>
    <button class="slider-btn prev" onclick="moveSlide(-1)">&#10094;</button>
    <button class="slider-btn next" onclick="moveSlide(1)">&#10095;</button>
    <div class="hero-content">
        <h1>Cara Seru Kuasai<br>Bahasa Inggris</h1>
        <p>Bergabunglah dengan pelajar lainnya dan tingkatkan kosakata Anda setiap hari dengan cara yang paling efektif.</p>
        <a href="index.php?hal=subcategories" class="btn-main">Lihat Kosakata</a>
    </div>
</section>


<!-- Keunggulan Section -->
<section class="section" id="fitur">
    <h2 class="section-title">Kenapa Pilih Kami?</h2>
    <div class="features-grid">
        <div class="feature-box">
            <div class="icon-circle">🎯</div>
            <h3>Personalized Learning</h3>
            <p>Materi yang disesuaikan dengan level kemampuan dan minat pribadi Anda.</p>
        </div>
        <div class="feature-box">
            <div class="icon-circle">⚡</div>
            <h3>Metode Cepat</h3>
            <p>Hanya butuh 10 menit sehari untuk menambah 20 kosakata baru secara permanen.</p>
        </div>
        <div class="feature-box">
            <div class="icon-circle">🏆</div>
            <h3>Gamifikasi</h3>
            <p>Belajar sambil bermain! Dapatkan poin, lencana, dan bersaing di papan peringkat.</p>
        </div>
    </div>
</section>

<!-- Testimoni Section -->
<section class="testimonials" id="testimoni">
    <div style="text-align: center; margin-bottom: 50px;">
        <h2 class="section-title">Kata Mereka</h2>
    </div>
    <div class="testi-container">
        <div class="testi-card">
            <p>"Aplikasi ini luar biasa! Dalam satu bulan, saya merasa jauh lebih percaya diri saat berbicara bahasa Inggris di kantor."</p>
            <div class="user-info">
                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User">
                <div><h4>Siska Amelia</h4><span style="color:var(--primary); font-size:13px;">Project Manager</span></div>
            </div>
        </div>
        <div class="testi-card">
            <p>"Metode flashcard-nya sangat membantu ingatan jangka panjang. Tidak membosankan seperti buku teks sekolah."</p>
            <div class="user-info">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User">
                <div><h4>Budi Santoso</h4><span style="color:var(--primary); font-size:13px;">Mahasiswa</span></div>
            </div>
        </div>
    </div>
</section>