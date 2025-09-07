<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Flashcard - Belajar Bahasa Inggris</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        .hero-bg {
            background-image: url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1600&q=80');
        }
    </style>
</head>
<body class="bg-blue-50 font-sans text-gray-800 antialiased min-h-screen flex flex-col">

    <header class="bg-blue-600 shadow-md py-4 px-6 md:px-12 flex justify-between items-center">
        <a href="index.php" class="text-2xl font-bold text-white tracking-wide hover:opacity-90">
            📘 Aplikasi Flashcard
        </a>
        <div>
            <a href="login.php" class="bg-white text-blue-600 font-semibold py-2 px-4 rounded-full hover:bg-gray-100 transition duration-300">
                Login
            </a>
            <a href="register.php" class="bg-blue-700 text-white font-semibold py-2 px-4 rounded-full ml-2 hover:bg-blue-800 transition duration-300">
                Register
            </a>
        </div>
    </header>

    <section class="relative hero-bg bg-cover bg-center h-screen flex items-center justify-center">
        <div class="absolute inset-0 bg-blue-900 bg-opacity-70"></div>
        <div class="relative text-center text-white px-4 max-w-2xl">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-4 drop-shadow-lg leading-tight">
                Tingkatkan Kosakata Bahasa Inggris Anda dengan Cepat
            </h1>
            <p class="text-lg md:text-xl text-gray-200 mb-8">
                Metode belajar yang efektif dan interaktif untuk menguasai kata-kata baru.
            </p>
            <a href="login.php" class="bg-yellow-400 text-blue-900 font-bold text-lg py-3 px-8 rounded-full shadow-lg hover:bg-yellow-300 transition duration-300 transform hover:scale-105">
                Mulai Belajar Sekarang!
            </a>
        </div>
    </section>

    <footer class="bg-blue-600 text-center py-4 text-white text-sm shadow-inner mt-auto">
        <p>&copy; 2025 Aplikasi Flashcard. Dibuat dengan <i class="fa-solid fa-heart text-red-400"></i> & Tailwind CSS.</p>
    </footer>

</body>
</html>