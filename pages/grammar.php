<?php
// Mencegah akses langsung tanpa melalui index.php
if(count(get_included_files()) == 1) die("Akses Ditolak!");

$page_title = "Grammar Guide";

// Daftar artikel grammar
$articles = [
    ['title' => 'Part of Speeches', 'slug' => 'part-of-speeches', 'icon' => '🧩'],
    ['title' => 'Noun', 'slug' => 'noun', 'icon' => '🍎'],
    ['title' => 'Nominal Sentences', 'slug' => 'nominal-sentences', 'icon' => '🏛️'],
    ['title' => 'Verbal Sentences', 'slug' => 'verbal-sentences', 'icon' => '🏃'],
    ['title' => 'Modal Verbs', 'slug' => 'modal-verbs', 'icon' => '🔑'],
    ['title' => 'Pronouns', 'slug' => 'pronouns', 'icon' => '👤'],
    ['title' => 'Adjectives', 'slug' => 'adjectives', 'icon' => '🎨'],
    ['title' => 'Adverbs', 'slug' => 'adverbs', 'icon' => '⚡'],
    ['title' => 'Prepositions', 'slug' => 'prepositions', 'icon' => '📍'],
    ['title' => 'Conjunctions', 'slug' => 'conjunctions', 'icon' => '🔗'],
    ['title' => 'Passive Voice', 'slug' => 'passive-voices', 'icon' => '📢'],
    ['title' => 'Conditional Sentences', 'slug' => 'conditional-sentences', 'icon' => '⏳'],
    ['title' => 'Gerund and Infinitive', 'slug' => 'gerund-infinitive', 'icon' => '📢'],
    ['title' => 'Direct and Indirect Speech', 'slug' => 'direct-indirect-speech', 'icon' => '🗣️'],
];
?>

<style>
    .features-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr); 
        gap: 20px;
        margin-bottom: 30px;
    }

    .grammar-card {
        border: 1px solid #e2e8f0; 
        background: #f8fafc; 
        text-align: left; 
        display: flex; 
        flex-direction: column; 
        justify-content: space-between; 
        border-radius: 15px; 
        padding: 25px;
        transition: 0.3s;
    }

    .grammar-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        border-color: var(--primary);
    }

    @media (max-width: 992px) {
        .features-grid { grid-template-columns: repeat(2, 1fr); }
    }

    @media (max-width: 576px) {
        .features-grid { grid-template-columns: 1fr; }
    }
</style>

<section class="section" style="padding-top: 150px; background: white; min-height: 80vh;">
    
    <h2 class="section-title"><?= $page_title ?></h2>
    
    <!-- <p style="color: var(--text-gray); margin-bottom: 40px; font-size: 1.1rem;">
        Pelajari aturan dasar struktur kalimat untuk meningkatkan kemampuan bahasa Inggris Anda.
    </p> -->

    

    <div class="features-grid">
        <?php foreach ($articles as $art): ?>
            <div class="grammar-card">
                <div>
                    <div style="font-size: 2rem; margin-bottom: 15px;"><?= $art['icon'] ?></div>
                    <h4 style="margin-bottom: 15px; color: var(--dark); font-size: 1.2rem; font-weight: 700;">
                        <?= $art['title'] ?>
                    </h4>
                    <p style="font-size: 0.9rem; color: #64748b; margin-bottom: 20px;">
                        Pelajari panduan lengkap mengenai penggunaan <?= strtolower($art['title']) ?> dalam kalimat.
                    </p>
                </div>

                <a href="index.php?article=<?= $art['slug'] ?>" class="btn-main" style="padding: 12px; font-size: 14px; text-align: center; border-radius: 8px; display: block; text-decoration: none; font-weight: 600;">
                    Baca Materi
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</section>