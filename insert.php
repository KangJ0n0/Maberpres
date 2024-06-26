<?php
include 'includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $kti = $_POST['kti'];
    $ipk_input = $_POST['ipk'];
    $bi = $_POST['bi'];
    $prestasi = $_POST['prestasi'];
    $po = $_POST['po'];
    $sertif = $_POST['sertif'];

    // Konversi IPK ke skala yang sesuai
    if ($ipk_input >= 3.51) {
        $ipk = 5;
    } elseif ($ipk_input >= 3.00) {
        $ipk = 3;
    } else {
        $ipk = 1;
    }

    // Hitung nilai total (nt)
    // 60% dari IPK dan KTI(CORE FACTOR)
    $nilai_60 = 0.6 * (($kti + $ipk) / 2);
    // 40% dari BI, Prestasi, PO, dan Sertif(SECONDARY FACTOR)
    $nilai_40 = 0.4 * (($bi + $prestasi + $po + $sertif) / 4);
    // Total nilai
    $nt = $nilai_60 + $nilai_40;

    $sql = "INSERT INTO mahasiswa (nama, nim, kti, ipk, bi, prestasi, po, sertif, nt) VALUES ('$nama', '$nim', '$kti', '$ipk', '$bi', '$prestasi', '$po', '$sertif', '$nt')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    header("Location: index.php");
    exit();
}
?>
