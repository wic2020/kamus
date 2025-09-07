<?php
session_start();

// Check if the user is NOT logged in. If not, include landing page and exit.
if (!isset($_SESSION["user_id"])) {
    // This is the main change: We now include the landing page instead of redirecting
    // A redirect can be used, but including keeps the URL cleaner.
    include "landing.php";
    exit;
}

// If the user IS logged in, the rest of the application logic runs.
$hal = isset($_GET["hal"]) ? $_GET["hal"] : "dashboard";
$file = "pages/" . $hal . ".php";
if (!file_exists($file)) {
    $file = "pages/dashboard.php";
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi Flashcard</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    .card-group:hover .icon {
      transform: scale(1.15);
      transition: transform 0.3s ease;
    }

    .word-card[data-memorized="0"] {
      background-color: #f9fcff;
      border: 1px solid #dbeafe;
    }

    .word-card {
      transition: background-color 0.3s ease, box-shadow 0.3s ease, transform 0.2s ease;
    }

    .word-card:hover {
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
      transform: translateY(-4px);
    }

    .hafalToggle {
      accent-color: #2563eb;
    }
  </style>
</head>

<body class="bg-blue-50 font-sans text-gray-800 antialiased min-h-screen flex flex-col">

  <!-- Navbar -->
  <header class="bg-blue-600 shadow-md py-4 px-6 md:px-12 flex justify-between items-center">
    <!-- Logo / Judul -->
    <a href="index.php" class="text-2xl font-bold text-white tracking-wide hover:opacity-90">
      📘 Aplikasi Flashcard
    </a>

    <!-- User Menu -->
    <div class="relative">
      <button id="userMenuButton" class="flex items-center space-x-2 text-white font-medium focus:outline-none">
        <i class="fa-solid fa-user-circle text-2xl"></i>
        <span>Hello, <?= htmlspecialchars($_SESSION["fullname"]) ?>!</span>
        <i class="fa-solid fa-caret-down text-sm"></i>
      </button>

      <!-- Dropdown -->
      <div id="userMenuDropdown"
        class="absolute right-0 mt-2 w-44 bg-white rounded-md shadow-lg border border-gray-200 hidden z-10">
        <a href="index.php?hal=profil" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">
          <i class="fa-solid fa-user text-blue-600 mr-2"></i> Profil
        </a>
        <a href="logout.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">
          <i class="fa-solid fa-right-from-bracket text-blue-600 mr-2"></i> Logout
        </a>
      </div>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="relative bg-cover bg-center h-72 md:h-96 flex items-center justify-center"
    style="background-image: url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1600&q=80');">
    <div class="absolute inset-0 bg-blue-900 bg-opacity-50"></div>
    <div class="relative text-center text-white px-4">
      <h2 class="text-3xl md:text-5xl font-extrabold mb-3 drop-shadow-lg">Belajar Kosakata Lebih Mudah</h2>
      <p class="text-lg md:text-xl text-gray-200">Gunakan flashcard interaktif untuk meningkatkan kemampuan bahasa
        Inggris Anda.</p>
    </div>
  </section>

  <!-- Main Content -->
  <main class="container mx-auto px-6 py-12 md:px-12 flex-grow">
    <?php include $file; ?>
  </main>

  <!-- Footer -->
  <footer class="bg-blue-600 text-center py-4 text-white text-sm shadow-inner">
    <p>&copy; 2025 Aplikasi Flashcard. Dibuat dengan <i class="fa-solid fa-heart text-red-400"></i> & Tailwind CSS.</p>
  </footer>

  <!-- Script Dropdown -->
  <script>
    const userMenuButton = document.getElementById("userMenuButton");
    const userMenuDropdown = document.getElementById("userMenuDropdown");

    userMenuButton.addEventListener("click", () => {
      userMenuDropdown.classList.toggle("hidden");
    });

    // Klik di luar dropdown -> tutup
    window.addEventListener("click", (e) => {
      if (!userMenuButton.contains(e.target) && !userMenuDropdown.contains(e.target)) {
        userMenuDropdown.classList.add("hidden");
      }
    });
  </script>
</body>
</html>
