<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 5 - Bagian C Nomor 3 & 4</title>

    <!-- [NOMOR 3] Integrasi Vite untuk mengaktifkan Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- [NOMOR 1] Memanggil CSS Manual dari folder Public -->
    <link rel="stylesheet" href="{{ asset('styles/style_rifa.css') }}">
</head>
<body class="bg-gray-100 p-6 md:p-12">

    <div class="max-w-4xl mx-auto space-y-8">
        
        <!-- [NOMOR 1] Elemen Judul (Bukti CSS Manual style_rifa.css Berhasil) -->
        <!-- Pastikan di file CSS Anda ada selector h1 { color: red; } -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 text-center">
            <h1 class="text-3xl font-bold uppercase tracking-tighter">Ini Judul Merah</h1>
            <!-- <p class="text-gray-400 text-xs mt-2 italic">Tampilan ini dikontrol oleh CSS eksternal di folder public</p> -->
        </div>

        <!-- [NOMOR 3] Implementasi Utility Class Tailwind (Box Informasi Pengguna) -->
        <!-- SS bagian ini untuk jawaban Nomor 3 di laporan Anda -->
        <div class="bg-indigo-700 p-10 rounded-3xl shadow-2xl text-white transform hover:scale-[1.01] transition-transform">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <div>
                    <h2 class="text-4xl font-black tracking-tight mb-2">
                        {{ $nama }}
                    </h2>
                    <p class="text-indigo-200 text-xl font-medium italic">
                        {{ $pekerjaan }}
                    </p>
                </div>
                <div class="bg-white/10 backdrop-blur-md border border-white/20 p-4 rounded-2xl">
                    <span class="text-xs font-bold uppercase tracking-[0.3em]">Status Integrasi:</span>
                    <p class="text-lg font-bold text-green-300">Tailwind Aktif ✓</p>
                </div>
            </div>
        </div>

        <!-- [NOMOR 2] Pengujian Aset Gambar dari Folder Public/Images -->
        <div class="bg-white p-8 rounded-3xl shadow-lg border border-gray-100">
            <h3 class="text-xl font-extrabold text-gray-800 mb-6 flex items-center gap-2 uppercase tracking-widest">
                <span class="h-2 w-10 bg-indigo-600 rounded-full"></span>
                Katalog barang
            </h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <!-- Gambar 1 -->
                <div class="group">
                    <div class="overflow-hidden rounded-2xl border-4 border-gray-50 shadow-inner">
                        <img src="{{ asset('images/1.png') }}" alt="Gambar 1" class="w-full h-56 object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="mt-4 p-3 bg-gray-50 rounded-lg text-center">
                        <code class="text-xs text-indigo-600 font-bold">asset('images/1.png')</code>
                    </div>
                </div>

                <!-- Gambar 2 -->
                <div class="group">
                    <div class="overflow-hidden rounded-2xl border-4 border-gray-50 shadow-inner">
                        <img src="{{ asset('images/2.png') }}" alt="Gambar 2" class="w-full h-56 object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="mt-4 p-3 bg-gray-50 rounded-lg text-center">
                        <code class="text-xs text-indigo-600 font-bold">asset('images/2.png')</code>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Verifikasi Praktikum -->
        <div class="pt-10 text-center">
            <p class="text-gray-400 text-[10px] font-bold uppercase tracking-[0.5em]">
                Pemrograman Web
            </p>
        </div>
    </div>

</body>
</html>