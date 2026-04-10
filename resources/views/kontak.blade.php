<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Kontak</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-white via-gray-300 to-black font-sans text-gray-900 antialiased flex flex-col">

    <nav class="sticky top-0 z-50 backdrop-blur-md bg-black/90 border-b border-gray-800 shadow-lg p-4 mb-10">
        <div class="max-w-5xl mx-auto flex flex-wrap justify-center gap-3">
            <a href="/" class="px-5 py-2.5 bg-transparent text-gray-300 font-semibold rounded-xl hover:bg-gray-800 hover:text-white transition-all duration-300">Home</a>
            <a href="/profil" class="px-5 py-2.5 bg-transparent text-gray-300 font-semibold rounded-xl hover:bg-gray-800 hover:text-white transition-all duration-300">Profil</a>
            <a href="/katalog" class="px-5 py-2.5 bg-transparent text-gray-300 font-semibold rounded-xl hover:bg-gray-800 hover:text-white transition-all duration-300">Katalog</a>
            <a href="/bantuan" class="px-5 py-2.5 bg-transparent text-gray-300 font-semibold rounded-xl hover:bg-gray-800 hover:text-white transition-all duration-300">Bantuan</a>
            <a href="/kontak" class="px-5 py-2.5 bg-white text-black font-bold rounded-xl shadow-md hover:scale-105 transition-all duration-300">Kontak</a>
        </div>
    </nav>

    <div class="flex-grow flex items-center justify-center px-4 pb-20">
        <div class="bg-white/90 backdrop-blur-xl p-10 rounded-[2rem] shadow-2xl border border-gray-300 text-center max-w-md w-full transition duration-500 hover:shadow-gray-700/50 hover:scale-105">
            <div class="w-24 h-24 bg-gradient-to-br from-gray-200 to-gray-400 text-black rounded-2xl border border-white shadow-inner flex items-center justify-center text-4xl mx-auto mb-8 transition-transform duration-500 hover:-rotate-6">
                ✉️
            </div>
            <h1 class="text-3xl font-extrabold text-black mb-3">Hubungi Kami</h1>
            <p class="text-gray-700 mb-8 leading-relaxed font-medium">Punya pertanyaan kerja sama atau kendala teknis? Tim kami siap merespon.</p>
            
            <a href="mailto:admin@amikomeventhub.com" class="block w-full py-4 bg-black text-white font-bold rounded-xl hover:bg-gray-800 transition-all duration-300 mb-6 shadow-md shadow-black/30">
                admin@amikomeventhub.com
            </a>
            
            <div class="pt-6 border-t border-gray-300 flex items-center justify-center gap-2">
                <span class="w-2.5 h-2.5 rounded-full bg-black animate-pulse"></span>
                <p class="text-xs font-bold text-gray-500 uppercase tracking-widest">Respon dalam 1x24 Jam</p>
            </div>
        </div>
    </div>
</body>
</html>