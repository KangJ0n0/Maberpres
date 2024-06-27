<?php
include 'includes/db.php';


// Ambil id dari URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk mengambil data mahasiswa berdasarkan id
    $result = $conn->query("SELECT * FROM mahasiswa WHERE id = $id");

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>
<body class="bg-gray-100">
<?php include 'includes/header.php'; ?>

<div class="max-w-2xl mx-auto ">
        <h1 class="text-4xl font-bold mb-4">Mengedit Data Mahasiswa</h1>

        <form class="space-y-4 bg-white p-6 rounded shadow-md" action="update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars($row['nama']); ?>" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
            </div>
            <div>
                <label for="nim" class="block text-sm font-medium text-gray-700">NIM</label>
                <input type="text" id="nim" name="nim" value="<?php echo htmlspecialchars($row['nim']); ?>" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
            </div>
            <div>
                <label for="kti" class="block text-sm font-medium text-gray-700">Karya Tulis Ilmiah</label>
                <select id="kti" name="kti" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                    <option value="5" <?php if ($row['kti'] == 5) echo 'selected'; ?>>Lolos Tingkat Nasional</option>
                    <option value="4" <?php if ($row['kti'] == 4) echo 'selected'; ?>>Lolos Tingkat Provinsi</option>
                    <option value="3" <?php if ($row['kti'] == 3) echo 'selected'; ?>>Lolos Tingkat Universitas</option>
                    <option value="2" <?php if ($row['kti'] == 2) echo 'selected'; ?>>Membuat Jurnal Tapi Tidak Lolos</option>
                    <option value="1" <?php if ($row['kti'] == 1) echo 'selected'; ?>>Tidak Ada</option>
                </select>
            </div>
            <div>
                <label for="ipk" class="block text-sm font-medium text-gray-700">IPK</label>
                <input type="number" id="ipk" name="ipk" step="0.01" value="<?php echo htmlspecialchars($row['ipk']); ?>" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
            </div>
            <div>
                <label for="bi" class="block text-sm font-medium text-gray-700">Bahasa Inggris</label>
                <select id="bi" name="bi" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                    <option value="5" <?php if ($row['bi'] == 5) echo 'selected'; ?>>677 ≤ TOEFL ≥ 501</option>
                    <option value="4" <?php if ($row['bi'] == 4) echo 'selected'; ?>>500 ≤ TOEFL ≥ 401</option>
                    <option value="3" <?php if ($row['bi'] == 3) echo 'selected'; ?>>400 ≤ TOEFL ≥ 310</option>
                    <option value="2" <?php if ($row['bi'] == 2) echo 'selected'; ?>>TOEFL < 310</option>
                    <option value="1" <?php if ($row['bi'] == 1) echo 'selected'; ?>>Tidak Ada</option>
                </select>
            </div>
            <div>
                <label for="prestasi" class="block text-sm font-medium text-gray-700">Prestasi</label>
                <select id="prestasi" name="prestasi" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                    <option value="5" <?php if ($row['prestasi'] == 5) echo 'selected'; ?>>Tingkat Nasional/Internasional</option>
                    <option value="4" <?php if ($row['prestasi'] == 4) echo 'selected'; ?>>Tingkat Provinsi</option>
                    <option value="3" <?php if ($row['prestasi'] == 3) echo 'selected'; ?>>Tingkat Kota/Kab</option>
                    <option value="2" <?php if ($row['prestasi'] == 2) echo 'selected'; ?>>Tingkat dibawah Kota/Kab</option>
                    <option value="1" <?php if ($row['prestasi'] == 1) echo 'selected'; ?>>Tidak Ada</option>
                </select>
            </div>
            <div>
                <label for="po" class="block text-sm font-medium text-gray-700">Pengalaman Organisasi</label>
                <select id="po" name="po" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                    <option value="5" <?php if ($row['po'] == 5) echo 'selected'; ?>>BEM pusat</option>
                    <option value="4" <?php if ($row['po'] == 4) echo 'selected'; ?>>BEM Fakultas</option>
                    <option value="3" <?php if ($row['po'] == 3) echo 'selected'; ?>>HIMA / DLM Pusat</option>
                    <option value="2" <?php if ($row['po'] == 2) echo 'selected'; ?>>DLM Fakultas</option>
                    <option value="1" <?php if ($row['po'] == 1) echo 'selected'; ?>>tidak ada</option>
                </select>
            </div>
            <div>
                <label for="sertif" class="block text-sm font-medium text-gray-700">Sertifikasi terkait jurusan yang di ambil</label>
                <select id="sertif" name="sertif" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                    <option value="5" <?php if ($row['sertif'] == 5) echo 'selected'; ?>>Memiliki sertifikat profesional/tingkat ahli</option>
                    <option value="3" <?php if ($row['sertif'] == 3) echo 'selected'; ?>>Memiliki beberapa sertifikasi dasar atau satu sertifikasi menengah</option>
                    <option value="1" <?php if ($row['sertif'] == 1) echo 'selected'; ?>>Tidak memiliki sertifikat terkait jurusan yang diambil</option>
                </select>
            </div>
            <div>
                <input type="submit" value="Update" class="w-full bg-blue-500 text-white p-2 rounded-md">
            </div>
        </form>
    </div>
</body>
</html>

<?php
    } else {
        echo "Data not found.";
    }
} else {
    echo "Invalid request.";
}
?>
