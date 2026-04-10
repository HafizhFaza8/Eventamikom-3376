<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Event</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-white via-gray-300 to-black font-sans text-gray-900 antialiased">

    <nav class="sticky top-0 z-50 backdrop-blur-md bg-black/90 border-b border-gray-800 shadow-lg p-4 mb-10">
        <div class="max-w-5xl mx-auto flex flex-wrap justify-center gap-3">
            <a href="/" class="px-5 py-2.5 bg-transparent text-gray-300 font-semibold rounded-xl hover:bg-gray-800 hover:text-white transition-all duration-300">Home</a>
            <a href="/profil" class="px-5 py-2.5 bg-transparent text-gray-300 font-semibold rounded-xl hover:bg-gray-800 hover:text-white transition-all duration-300">Profil</a>
            <a href="/katalog" class="px-5 py-2.5 bg-white text-black font-bold rounded-xl shadow-md hover:scale-105 transition-all duration-300">Katalog</a>
            <a href="/bantuan" class="px-5 py-2.5 bg-transparent text-gray-300 font-semibold rounded-xl hover:bg-gray-800 hover:text-white transition-all duration-300">Bantuan</a>
            <a href="/kontak" class="px-5 py-2.5 bg-transparent text-gray-300 font-semibold rounded-xl hover:bg-gray-800 hover:text-white transition-all duration-300">Kontak</a>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto px-4 pb-12">
        <div class="text-center mb-8">
            <h1 class="text-5xl font-extrabold text-black mb-4 tracking-tight drop-shadow-sm">Katalog Event</h1>
            <p class="text-gray-700 text-lg font-bold">Temukan pengalaman baru dan tingkatkan skill Anda hari ini.</p>
        </div>
        
        <div class="flex flex-wrap justify-center gap-3 mb-10">
            <button class="px-6 py-2.5 bg-black text-white font-bold rounded-full shadow-md hover:-translate-y-1 transition-transform">Semua</button>
            
            <button class="px-6 py-2.5 bg-white/80 backdrop-blur-sm text-gray-700 border border-gray-300 font-bold rounded-full hover:bg-black hover:text-white hover:-translate-y-1 transition-all shadow-sm">Workshop</button>
            <button class="px-6 py-2.5 bg-white/80 backdrop-blur-sm text-gray-700 border border-gray-300 font-bold rounded-full hover:bg-black hover:text-white hover:-translate-y-1 transition-all shadow-sm">Seminar</button>
            <button class="px-6 py-2.5 bg-white/80 backdrop-blur-sm text-gray-700 border border-gray-300 font-bold rounded-full hover:bg-black hover:text-white hover:-translate-y-1 transition-all shadow-sm">Kompetisi</button>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white/85 backdrop-blur-xl rounded-3xl shadow-xl hover:shadow-2xl hover:shadow-black/40 hover:-translate-y-2 transition-all duration-500 overflow-hidden border border-white/50 flex flex-col group">
                <div class="h-48 bg-gradient-to-br from-gray-200 to-gray-400 flex items-center justify-center text-6xl group-hover:brightness-95 transition-all duration-500">🖥️</div>
                <div class="p-8 flex-grow flex flex-col">
                    <div class="flex justify-between items-center mb-4">
                        <span class="px-3 py-1 bg-black text-white text-xs font-bold rounded-lg uppercase tracking-wider">Workshop</span>
                        <span class="text-xs font-bold text-gray-600 bg-gray-200 px-2 py-1 rounded-md">12 April</span>
                    </div>
                    <h3 class="text-2xl font-bold text-black mb-3">Mastering Laravel</h3>
                    <p class="text-gray-700 text-sm mb-8 flex-grow leading-relaxed font-medium">Pelajari cara membangun backend API tangguh dan sistem web dinamis dari nol hingga mahir.</p>
                    <button class="w-full py-3.5 bg-black text-white font-bold rounded-xl hover:bg-gray-800 transition duration-300 shadow-md">Daftar Sekarang</button>
                </div>
            </div>

            <div class="bg-white/85 backdrop-blur-xl rounded-3xl shadow-xl hover:shadow-2xl hover:shadow-black/40 hover:-translate-y-2 transition-all duration-500 overflow-hidden border border-white/50 flex flex-col group">
                <div class="h-48 bg-gradient-to-br from-gray-200 to-gray-400 flex items-center justify-center text-6xl group-hover:brightness-95 transition-all duration-500">✏️</div>
                <div class="p-8 flex-grow flex flex-col">
                    <div class="flex justify-between items-center mb-4">
                        <span class="px-3 py-1 bg-black text-white text-xs font-bold rounded-lg uppercase tracking-wider">Seminar</span>
                        <span class="text-xs font-bold text-gray-600 bg-gray-200 px-2 py-1 rounded-md">15 April</span>
                    </div>
                    <h3 class="text-2xl font-bold text-black mb-3">UI/UX untuk Startup</h3>
                    <p class="text-gray-700 text-sm mb-8 flex-grow leading-relaxed font-medium">Pahami psikologi pengguna dan praktik terbaik dalam mendesain antarmuka yang intuitif.</p>
                    <button class="w-full py-3.5 bg-black text-white font-bold rounded-xl hover:bg-gray-800 transition duration-300 shadow-md">Daftar Sekarang</button>
                </div>
            </div>

            <div class="bg-white/85 backdrop-blur-xl rounded-3xl shadow-xl hover:shadow-2xl hover:shadow-black/40 hover:-translate-y-2 transition-all duration-500 overflow-hidden border border-white/50 flex flex-col group">
                <div class="h-48 bg-gradient-to-br from-gray-200 to-gray-400 flex items-center justify-center text-6xl group-hover:brightness-95 transition-all duration-500">⚙️</div>
                <div class="p-8 flex-grow flex flex-col">
                    <div class="flex justify-between items-center mb-4">
                        <span class="px-3 py-1 bg-black text-white text-xs font-bold rounded-lg uppercase tracking-wider">Kompetisi</span>
                        <span class="text-xs font-bold text-gray-600 bg-gray-200 px-2 py-1 rounded-md">20 April</span>
                    </div>
                    <h3 class="text-2xl font-bold text-black mb-3">Amikom Tech Fest</h3>
                    <p class="text-gray-700 text-sm mb-8 flex-grow leading-relaxed font-medium">Kompetisi merancang inovasi teknologi di bidang pendidikan.</p>
                    <button class="w-full py-3.5 bg-black text-white font-bold rounded-xl hover:bg-gray-800 transition duration-300 shadow-md">Daftar Sekarang</button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>