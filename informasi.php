<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Matching Criteria</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <?php include 'includes/header.php'; ?>
    <div class="container mx-auto mt-10 p-4 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-center mb-6">Profile Matching Criteria</h1>
        <p class="mb-6">Proses perhitungan pada profile matching diawali dengan menentukan nilai profil kandidat berdasarkan sub kriteria yang sudah ditentukan nilai atributnya. Untuk mahasiswa berprestasi, ditentukan oleh beberapa faktor. Pengisian kuisioner penilaian dan hasil penilaian dimasukkan dalam sistem pendukung keputusan, yang akan diolah dengan nilai profil Kandidat sebagai berikut:</p>
        <table class="min-w-full border-collapse border border-gray-200">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2 bg-gray-100">Jenis</th>
                    <th class="border border-gray-300 px-4 py-2 bg-gray-100">Kriteria</th>
                    <th class="border border-gray-300 px-4 py-2 bg-gray-100">Sub Kriteria</th>
                    <th class="border border-gray-300 px-4 py-2 bg-gray-100">Nilai Atribut</th>
                    <th class="border border-gray-300 px-4 py-2 bg-gray-100">Profil Pencapaian</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-gray-300 px-4 py-2" rowspan="5">CF</td>
                    <td class="border border-gray-300 px-4 py-2" rowspan="5">KTI (Karya Tulis Ilmiah)</td>
                    <td class="border border-gray-300 px-4 py-2">Lolos Nasional</td>
                    <td class="border border-gray-300 px-4 py-2">5</td>
                    <td class="border border-gray-300 px-4 py-2" rowspan="5">5</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">Lolos Provinsi</td>
                    <td class="border border-gray-300 px-4 py-2">4</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">Lolos Tingkat Universitas</td>
                    <td class="border border-gray-300 px-4 py-2">3</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">Membuat Jurnal tapi tidak lolos</td>
                    <td class="border border-gray-300 px-4 py-2">2</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">Tidak ada</td>
                    <td class="border border-gray-300 px-4 py-2">1</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2" rowspan="3">CF</td>
                    <td class="border border-gray-300 px-4 py-2" rowspan="3">IPK</td>
                    <td class="border border-gray-300 px-4 py-2">4,00 - 3,51</td>
                    <td class="border border-gray-300 px-4 py-2">5</td>
                    <td class="border border-gray-300 px-4 py-2" rowspan="3">5</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">3,50 - 3,01</td>
                    <td class="border border-gray-300 px-4 py-2">3</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">3,00 - 0,00</td>
                    <td class="border border-gray-300 px-4 py-2">1</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2" rowspan="5">SF</td>
                    <td class="border border-gray-300 px-4 py-2" rowspan="5">Bahasa Inggris</td>
                    <td class="border border-gray-300 px-4 py-2">677 ≤ TOEFL ≥ 501</td>
                    <td class="border border-gray-300 px-4 py-2">5</td>
                    <td class="border border-gray-300 px-4 py-2" rowspan="5">5</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">500 ≤ TOEFL ≥ 401</td>
                    <td class="border border-gray-300 px-4 py-2">4</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">400 ≤ TOEFL ≥ 310</td>
                    <td class="border border-gray-300 px-4 py-2">3</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">TOEFL ≤ 310</td>
                    <td class="border border-gray-300 px-4 py-2">2</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">Tidak Ada</td>
                    <td class="border border-gray-300 px-4 py-2">1</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2" rowspan="4">SF</td>
                    <td class="border border-gray-300 px-4 py-2" rowspan="4">Prestasi</td>
                    <td class="border border-gray-300 px-4 py-2">Tingkat Internasional/Nasional</td>
                    <td class="border border-gray-300 px-4 py-2">5</td>
                    <td class="border border-gray-300 px-4 py-2" rowspan="4">5</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">Tingkat Provinsi</td>
                    <td class="border border-gray-300 px-4 py-2">4</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">Tingkat Kota/Kabupaten</td>
                    <td class="border border-gray-300 px-4 py-2">3</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">Tingkat di bawah Kota/Kabupaten</td>
                    <td class="border border-gray-300 px-4 py-2">2</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2" rowspan="5">SF</td>
                    <td class="border border-gray-300 px-4 py-2" rowspan="5">Pengalaman Organisasi</td>
                    <td class="border border-gray-300 px-4 py-2">BEM Pusat</td>
                    <td class="border border-gray-300 px-4 py-2">5</td>
                    <td class="border border-gray-300 px-4 py-2" rowspan="5">5</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">BEM Fakultas</td>
                    <td class="border border-gray-300 px-4 py-2">4</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">HIMA / DLM Pusat</td>
                    <td class="border border-gray-300 px-4 py-2">3</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">DLM Fakultas</td>
                    <td class="border border-gray-300 px-4 py-2">2</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">Tidak ada</td>
                    <td class="border border-gray-300 px-4 py-2">1</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2" rowspan="3">SF</td>
                    <td class="border border-gray-300 px-4 py-2" rowspan="3">Sertifikasi terkait jurusan yang diambil</td>
                    <td class="border border-gray-300 px-4 py-2">Memiliki Sertifikasi tingkat Profesional/Ahli</td>
                    <td class="border border-gray-300 px-4 py-2">5</td>
                    <td class="border border-gray-300 px-4 py-2" rowspan="3">5</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">Beberapa Sertifikasi Dasar/ Satu tingkat Menengah</td>
                    <td class="border border-gray-300 px-4 py-2">3</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">Tidak Ada</td>
                    <td class="border border-gray-300 px-4 py-2">1</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
