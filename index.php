<?php
ob_start();
session_start();
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VocabJoy - Aplikasi Belajar Bahasa Inggris</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header id="header">
        <a href="index.php" class="logo">Vocab<span>Joy</span></a>
        
        <nav id="nav-menu">
            <!-- <a href="index.php?hal=landing">Home</a> -->

            <!-- Menu Articles dengan Submenu -->
            <!-- <div class="dropdown">
                <div class="dropdown-trigger">
                    Articles <span class="caret-icon">▼</span>
                </div>
                <div class="dropdown-menu">
                    <a href="index.php?article=noun">Noun</a>
                    <a href="index.php?article=verb">Verbs</a>
                    <a href="index.php?article=adjective">Adjectives</a>
                </div>
            </div> -->
            
            <?php if(isset($_SESSION['username'])): ?>
                <a href="index.php?hal=grammar">Grammar</a>
                <a href="index.php?hal=subcategories">Vocabulary</a>               
                <a href="index.php?hal=quiz">Quiz</a>
                
                <!-- Menu User dengan Submenu -->
                <div class="dropdown">
                    <div class="dropdown-trigger">
                        <div class="user-icon">👤</div>
                        <span><?php echo $_SESSION['username']; ?></span>
                        <span class="caret-icon">▼</span>
                    </div>
                    <div class="dropdown-menu">
                        <a href="index.php?hal=profile">Profil</a>
                        <a href="index.php?hal=progress">Progress</a>
                        <?php if($_SESSION['username'] == 'administrator'): ?>
                            <a href="index.php?hal=progress_all">Progress All</a>
							<a href="index.php?hal=users" style="color: var(--primary);">Data User</a>
                            <a href="index.php?hal=words_edit" style="color: var(--primary);">Edit Kata</a>
                        <?php endif; ?>
                        <a href="logout.php" style="color: #ef4444 !important;">Logout</a>
                    </div>
                </div>

            <?php else: ?>
                <a href="index.php?hal=landing#fitur">Fitur</a>
                <a href="index.php?hal=landing#testimoni">Testimoni</a>
                <a href="index.php?hal=login" class="btn-cta-nav">Masuk / Daftar</a>
            <?php endif; ?>
        </nav>

        <div class="menu-toggle" id="mobile-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>

    <main>
        <?php
        // Logika Routing Artikel Statis
        if (isset($_GET['article'])) {
            $article = $_GET['article'];
            $file = 'articles/' . $article . '.php';
            echo "<section class='section' style='padding-top:150px;'>";
            echo "<div class='article-container'>";
            if (file_exists($file)) {
                include $file;
            } else {
                echo "<h2>404 - Artikel Tidak Ditemukan</h2>";
                echo "<p>Maaf, materi yang Anda cari belum tersedia.</p>";
            }
            echo "</div></section>";
        } else {
            // Logika Routing Halaman (Bawaan Asli)
            $hal = isset($_GET['hal']) ? $_GET['hal'] : 'landing';
            $root_pages = ['login', 'register', 'logout'];
            
            if (in_array($hal, $root_pages)) {
                if (file_exists($hal . '.php')) {
                    include $hal . '.php';
                } else {
                    echo "<section class='section' style='padding-top:150px;'><h2>404 - Halaman Root Tidak Ditemukan</h2></section>";
                }
            } else {
                if (file_exists('pages/' . $hal . '.php')) {
                    include 'pages/' . $hal . '.php';
                } else {
                    // Default jika file tidak ada, tampilkan landing (biasanya handle slider dsb)
                    if (file_exists('pages/landing.php')) {
                        include 'pages/landing.php';
                    } else {
                        // Jika script ini dijalankan pertama kali dan landing.php belum ada di folder pages/
                        echo "<section class='section' style='padding-top:150px;'><h2>Selamat Datang di VocabJoy</h2><p>Gunakan menu navigasi untuk menjelajah.</p></section>";
                    }
                }
            }
        }
        ?>
    </main>

    <footer>
        <div style="margin-bottom: 20px;">
            <div class="logo">Vocab<span>Joy</span></div>
            <p style="margin-top: 10px; color: #cbd5e1;">Aplikasi Belajar Vocabulary Bahasa Inggris</p>
        </div>
        <div style="font-size: 14px; opacity: 0.6; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 20px;">
            &copy; 2026 VocabJoy. All rights reserved.
        </div>
    </footer>

    <script>
    // Efek Navbar Scroll
    window.onscroll = function() {
        var header = document.getElementById("header");
        if (window.pageYOffset > 50) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    };

    // Logic Dropdown (Articles & User)
    document.querySelectorAll('.dropdown-trigger').forEach(trigger => {
        trigger.addEventListener('click', (e) => {
            e.stopPropagation();
            const parent = trigger.parentElement;
            const menu = trigger.nextElementSibling;
            
            // Tutup dropdown lain yang sedang terbuka
            document.querySelectorAll('.dropdown').forEach(d => {
                if(d !== parent) d.classList.remove('active');
            });
            document.querySelectorAll('.dropdown-menu').forEach(m => {
                if(m !== menu) m.classList.remove('active');
            });

            // Toggle menu yang diklik
            menu.classList.toggle('active');
            parent.classList.toggle('active');
        });
    });

    // Menutup dropdown saat klik di mana saja luar menu
    document.addEventListener('click', () => {
        document.querySelectorAll('.dropdown').forEach(d => d.classList.remove('active'));
        document.querySelectorAll('.dropdown-menu').forEach(m => m.classList.remove('active'));
    });

    // Mobile Menu Toggle
    const mobileMenu = document.getElementById('mobile-menu');
    const navMenu = document.getElementById('nav-menu');

    mobileMenu.addEventListener('click', () => {
        navMenu.classList.toggle('active');
        
        // Animasi Hamburger ke X
        const spans = mobileMenu.querySelectorAll('span');
        mobileMenu.classList.toggle('open');
        if(mobileMenu.classList.contains('open')) {
            spans[0].style.transform = 'rotate(45deg) translate(6px, 6px)';
            spans[1].style.opacity = '0';
            spans[2].style.transform = 'rotate(-45deg) translate(6px, -7px)';
        } else {
            spans[0].style.transform = 'none';
            spans[1].style.opacity = '1';
            spans[2].style.transform = 'none';
        }
    });

    // Slider Hero Logic (Tetap dipertahankan dari kode asli)
    const slider = document.getElementById('slider');
    if (slider) {
        let currentIndex = 0;
        const totalSlides = 3;
        let slideInterval;

        function updateSlider() {
            slider.style.transform = `translateX(-${currentIndex * 100}vw)`;
        }

        function moveSlide(step) {
            currentIndex += step;
            if (currentIndex >= totalSlides) currentIndex = 0;
            else if (currentIndex < 0) currentIndex = totalSlides - 1;
            updateSlider();
            resetInterval();
        }

        function startInterval() {
            slideInterval = setInterval(() => {
                moveSlide(1);
            }, 5000);
        }

        function resetInterval() {
            clearInterval(slideInterval);
            startInterval();
        }

        startInterval();
    }
    </script>
</body>
</html>