<?php include 'includes/db.php'; 
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Memasukan Data Mahasiswa</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
</head>
<body>
<?php include 'includes/header.php'; ?>

<div class="max-w-2xl mx-auto ">
            <h1 class="text-4xl font-bold mb-4">Memasukan Data Mahasiswa</h1>

        <form class="space-y-4 bg-white p-6 rounded shadow-md" action="insert.php" method="POST">
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" id="nama" name="nama" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
            </div>
            <div>
                <label for="nim" class="block text-sm font-medium text-gray-700">NIM</label>
                <input type="text" id="nim" name="nim" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
            </div>
            <div>
                <label for="kti" class="block text-sm font-medium text-gray-700">Karya Tulis Ilmiah</label>
                <select id="kti" name="kti" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                    <option value="5">Lolos Tingkat Nasional</option>
                    <option value="4">Lolos Tingkat Provinsi</option>
                    <option value="3">Lolos Tingkat Universitas</option>
                    <option value="2">Membuat Jurnal Tapi Tidak Lolos</option>
                    <option value="1">Tidak Ada</option>
                </select>
            </div>
            <div>
                <label for="ipk" class="block text-sm font-medium text-gray-700">IPK</label>
                <input type="number" id="ipk" name="ipk" step="0.01" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
            </div>
            <div>
                <label for="bi" class="block text-sm font-medium text-gray-700">Kemampuan Bahasa Inggris</label>
                <select id="bi" name="bi" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                    <option value="5">677 ≤ TOEFL ≥ 501</option>
                    <option value="4">500 ≤ TOEFL ≥ 401</option>
                    <option value="3">400 ≤ TOEFL ≥ 310</option>
                    <option value="2">TOEFL < 310</option>
                    <option value="1">Tidak Ada</option>
                </select>
            </div>
            <div>
                <label for="prestasi" class="block text-sm font-medium text-gray-700">Prestasi</label>
                <select id="prestasi" name="prestasi" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                    <option value="5">Tingkat Nasional/Internasional</option>
                    <option value="4">Tingkat Provinsi</option>
                    <option value="3">Tingkat Kota/Kab</option>
                    <option value="2">Tingkat dibawah Kota/Kab</option>
                    <option value="1">Tidak Ada</option>
                </select>
            </div>
            <div>
                <label for="po" class="block text-sm font-medium text-gray-700">Pengalaman Organisasi</label>
                <select id="po" name="po" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                    <option value="5">BEM pusat</option>
                    <option value="4">BEM Fakultas</option>
                    <option value="3">HIMA / DLM Pusat</option>
                    <option value="2">DLM Fakultas</option>
                    <option value="1">tidak ada</option>
                </select>
            </div>
            <div>
                <label for="sertif" class="block text-sm font-medium text-gray-700">Sertifikat terkait jurusan yang di ambil</label>
                <select id="sertif" name="sertif" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                    <option value="5">Memiliki sertifikat profesional/tingkat ahli</option>
                    <option value="3">Memiliki beberapa sertifikasi dasar atau satu sertifikasi menengah</option>
                    <option value="1">Tidak memiliki sertifikat terkait jurusan yang diambil</option>
                </select>
            </div>
            <div>
                <input type="submit" value="Submit" class="w-full bg-blue-500 text-white p-2 rounded-md">
            </div>
        </form>
    </div>


</body>
</html>
