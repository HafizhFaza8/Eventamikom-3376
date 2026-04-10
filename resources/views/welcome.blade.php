<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AmikomEventHub - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-white via-gray-300 to-black font-sans text-gray-900 antialiased selection:bg-gray-400 selection:text-white flex flex-col">

    <nav class="sticky top-0 z-50 backdrop-blur-md bg-black/90 border-b border-gray-800 shadow-lg p-4 mb-10">
        <div class="max-w-5xl mx-auto flex flex-wrap justify-center gap-3">
            <a href="/" class="px-5 py-2.5 bg-white text-black font-bold rounded-xl shadow-md hover:scale-105 transition-all duration-300">Home</a>
            <a href="/profil" class="px-5 py-2.5 bg-transparent text-gray-300 font-semibold rounded-xl hover:bg-gray-800 hover:text-white transition-all duration-300">Profil</a>
            <a href="/katalog" class="px-5 py-2.5 bg-transparent text-gray-300 font-semibold rounded-xl hover:bg-gray-800 hover:text-white transition-all duration-300">Katalog</a>
            <a href="/bantuan" class="px-5 py-2.5 bg-transparent text-gray-300 font-semibold rounded-xl hover:bg-gray-800 hover:text-white transition-all duration-300">Bantuan</a>
            <a href="/kontak" class="px-5 py-2.5 bg-transparent text-gray-300 font-semibold rounded-xl hover:bg-gray-800 hover:text-white transition-all duration-300">Kontak</a>
        </div>
    </nav>

    <div class="max-w-5xl mx-auto text-center px-4 py-20 relative flex-grow flex items-center justify-center">
        <div class="bg-white/80 backdrop-blur-xl rounded-[2rem] p-12 shadow-2xl border border-white/50 relative overflow-hidden transition-all hover:shadow-gray-900/50 duration-500">
            <h1 class="text-6xl font-extrabold text-black mb-6 tracking-tight">
                Selamat Datang di <br/>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-gray-900 to-gray-500">AmikomEventHub</span>
            </h1>
            <p class="text-xl text-gray-700 mb-10 leading-relaxed max-w-2xl mx-auto font-medium">Platform berpusat untuk segala acara mahasiswa. Cari workshop, seminar, dan perlombaan eksklusif dengan mudah.</p>
            
            <div class="flex flex-col sm:flex-row justify-center gap-4 relative z-10">
                <a href="/katalog" class="px-8 py-4 bg-black text-white font-bold rounded-xl hover:bg-gray-800 hover:-translate-y-1 transition-all duration-300 shadow-xl shadow-black/30">Jelajahi Event</a>
                <a href="/profil" class="px-8 py-4 bg-white/90 text-black font-bold rounded-xl border border-gray-300 hover:bg-gray-100 hover:-translate-y-1 transition-all duration-300 shadow-md">Lihat Profil</a>
            </div>
        </div>
    </div>

</body>
</html>