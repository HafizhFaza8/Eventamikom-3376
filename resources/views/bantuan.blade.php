<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pusat Bantuan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-white via-gray-300 to-black font-sans text-gray-900 antialiased">

    <nav class="sticky top-0 z-50 backdrop-blur-md bg-black/90 border-b border-gray-800 shadow-lg p-4 mb-10">
        <div class="max-w-5xl mx-auto flex flex-wrap justify-center gap-3">
            <a href="/" class="px-5 py-2.5 bg-transparent text-gray-300 font-semibold rounded-xl hover:bg-gray-800 hover:text-white transition-all duration-300">Home</a>
            <a href="/profil" class="px-5 py-2.5 bg-transparent text-gray-300 font-semibold rounded-xl hover:bg-gray-800 hover:text-white transition-all duration-300">Profil</a>
            <a href="/katalog" class="px-5 py-2.5 bg-transparent text-gray-300 font-semibold rounded-xl hover:bg-gray-800 hover:text-white transition-all duration-300">Katalog</a>
            <a href="/bantuan" class="px-5 py-2.5 bg-white text-black font-bold rounded-xl shadow-md hover:scale-105 transition-all duration-300">Bantuan</a>
            <a href="/kontak" class="px-5 py-2.5 bg-transparent text-gray-300 font-semibold rounded-xl hover:bg-gray-800 hover:text-white transition-all duration-300">Kontak</a>
        </div>
    </nav>

    <div class="max-w-3xl mx-auto px-4 pb-12">
        <div class="text-center mb-10 bg-white/80 backdrop-blur-xl py-8 rounded-3xl border border-white/50 shadow-lg">
            <h1 class="text-4xl font-extrabold text-black mb-2 tracking-tight">Pusat Bantuan (FAQ)</h1>
            <p class="text-gray-700 font-bold">Ada pertanyaan? Kami sedia membantu Anda.</p>
        </div>

        <div class="space-y-4">
            <div class="bg-white/85 backdrop-blur-md p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-white/50 flex gap-5 group">
                <div class="text-2xl mt-1 text-gray-400 font-black group-hover:text-black transition-colors duration-300">01</div>
                <div>
                    <h3 class="text-xl font-bold text-black mb-2">Bagaimana cara mendaftar event?</h3>
                    <p class="text-gray-700 leading-relaxed font-medium">
                        Anda dapat menuju halaman Katalog, memilih event yang diminati, lalu mengklik tombol <span class="font-bold text-white bg-black px-2 py-0.5 rounded-md shadow-sm">Daftar Sekarang</span>.
                    </p>
                </div>
            </div>

            <div class="bg-white/85 backdrop-blur-md p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-white/50 flex gap-5 group">
                <div class="text-2xl mt-1 text-gray-400 font-black group-hover:text-black transition-colors duration-300">02</div>
                <div>
                    <h3 class="text-xl font-bold text-black mb-2">Apakah ada biaya pendaftaran?</h3>
                    <p class="text-gray-700 leading-relaxed font-medium">
                        Beberapa event bersifat gratis, sementara workshop eksklusif mungkin berbayar. Status biaya selalu dicantumkan dengan jelas pada halaman detail event.
                    </p>
                </div>
            </div>

            <div class="bg-white/85 backdrop-blur-md p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-white/50 flex gap-5 group">
                <div class="text-2xl mt-1 text-gray-400 font-black group-hover:text-black transition-colors duration-300">03</div>
                <div>
                    <h3 class="text-xl font-bold text-black mb-2">Siapa yang bisa dihubungi jika ada kendala?</h3>
                    <p class="text-gray-700 leading-relaxed font-medium">
                        Silakan navigasi ke halaman <a href="/kontak" class="text-black font-bold underline hover:text-gray-500">Kontak</a> dan kirimkan pesan Anda melalui email admin.
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>