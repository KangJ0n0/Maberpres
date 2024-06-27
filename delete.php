<?php
include 'includes/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM mahasiswa WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $showModal = true;
    } else {
        // Handle error
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700&display=swap');

        * {
            font-family: 'Open Sans', sans-serif;
        }
        

    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <?php if (isset($showModal) && $showModal): ?>
        <div class="fixed left-0 top-0 flex h-full w-full items-center justify-center bg-black bg-opacity-50 py-10">
          <div class="max-h-full w-full max-w-xl overflow-y-auto sm:rounded-2xl bg-white">
            <div class="w-full">
              <div class="m-8 my-20 max-w-[400px] mx-auto">
                <div class="mb-8">
                <h1 class="mb-4 text-3xl font-extrabold text-center">Berhasil menghapus Data</h1>
                <p class="text-gray-600 text-center">Silahkan kembali ke dashboard.</p>
                </div>
                <div class="space-y-4"></div>
                <button onclick="location.href='index.php';" class="p-3 bg-black rounded-full text-white w-full font-semibold" style="transform: scale(0.9);">Kembali</button>
              </div>
            </div>
          </div>
        </div>
    <?php endif; ?>
</body>
</html>
