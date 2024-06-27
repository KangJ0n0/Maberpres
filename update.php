<?php
include 'includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $kti = $_POST['kti'];
    $ipk_input = $_POST['ipk'];
    $bi = $_POST['bi'];
    $prestasi = $_POST['prestasi'];
    $po = $_POST['po'];
    $sertif = $_POST['sertif'];

    if ($ipk_input >= 3.51 && $ipk_input <= 4.00) {
        $ipk = 5;
    } elseif ($ipk_input >= 3.00 && $ipk_input <= 3.50) {
        $ipk = 3;
    } else {
        $ipk = 1;
    }


    // Hitung nilai NT baru
    $nilai_60 = ($kti + $ipk) / 2;
    $nilai_40 = ($bi + $prestasi + $po + $sertif) / 4;
    $nt = (0.6 * $nilai_60) + (0.4 * $nilai_40);

    // Query untuk update data mahasiswa
    $sql = "UPDATE mahasiswa SET nama='$nama', nim='$nim', kti='$kti', ipk='$ipk', bi='$bi', prestasi='$prestasi', po='$po', sertif='$sertif', nt='$nt' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Data updated successfully";
        // Redirect kembali ke halaman utama atau halaman detail data
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>
