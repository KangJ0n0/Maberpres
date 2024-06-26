<?php include 'includes/db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile Matching</title>
</head>
<body>
    <h1>Input Data</h1>
    <form action="insert.php" method="POST">
        Nama: <input type="text" name="nama"><br>
        NIM: <input type="text" name="nim"><br>
        KTI:
        <select name="kti">
            <option value="5">Lolos Tingkat Nasional</option>
            <option value="4">Lolos Tingkat Provinsi</option>
            <option value="3">Lolos Tingkat Universitas</option>
            <option value="2">Membuat Jurnal Tapi Tidak Lolos</option>
            <option value="1">Tidak Ada</option>
        </select><br>
        IPK: <input type="number" step="0.01" name="ipk"><br>
        BI:
        <select name="bi">
            <option value="5">677 ≤ TOEFL ≥ 501</option>
            <option value="4">500 ≤ TOEFL ≥ 401</option>
            <option value="3">400 ≤ TOEFL ≥ 310</option>
            <option value="2">TOEFL < 310</option>
            <option value="1">Tidak Ada</option>
        </select><br>
        Prestasi:
        <select name="prestasi">
            <option value="5">Tingkat Nasional</option>
            <option value="4">Tingkat Provinsi</option>
            <option value="3">Tingkat Kota/Kab</option>
            <option value="2">Tingkat dibawah Kota/Kab</option>
            <option value="1">Tidak Ada</option>
        </select><br>
        PO:
        <select name="po">
            <option value="5">Bem pusat</option>
            <option value="4">Bem Fakultas</option>
            <option value="3">HIMA / DLM Pusat</option>
            <option value="2">DLM Fakultas</option>
            <option value="1">tidak ada</option>
        </select><br>
        Sertif:
        <select name="sertif">
            <option value="5">Memiliki sertifikat profesional/tingkat ahli</option>
            <option value="3">Memiliki beberapa sertifikasi dasar atau satu sertifikasi menengah</option>
            <option value="1">Tidak memiliki sertifikat terkait jurusan yang diambil</option>
        </select><br>
        <input type="submit" value="Submit">
    </form>
    <h1>Data Mahasiswa</h1>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>KTI</th>
            <th>IPK</th>
            <th>BI</th>
            <th>Prestasi</th>
            <th>PO</th>
            <th>Sertif</th>
            <th>Total Nilai (NT)</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM mahasiswa ORDER BY nt DESC");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['nama']}</td>
                    <td>{$row['nim']}</td>
                    <td>{$row['kti']}</td>
                    <td>{$row['ipk']}</td>
                    <td>{$row['bi']}</td>
                    <td>{$row['prestasi']}</td>
                    <td>{$row['po']}</td>
                    <td>{$row['sertif']}</td>
                    <td>{$row['nt']}</td>
                </tr>";
        }
        ?>
    </table>
</body>
</html>
