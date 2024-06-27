<?php include 'includes/db.php'; 
$result = $conn->query("SELECT * FROM mahasiswa ORDER BY nt DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Profile Matching Mahasiswa Berprestasi</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>
<br>
    <div class="max-w-4xl mx-auto p-1">

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="p-4 flex justify-between items-center">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative mt-1">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="table-search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Cari Mahasiswa/NIM">
            </div>
            <a href="add.php"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex items-center ml-4">
                Masukan Data Mahasiswa
            </a>
        </div>

        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-4">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        NIM
                    </th>
                    <th scope="col" class="px-6 py-3">
                        KTI
                    </th>
                    <th scope="col" class="px-6 py-3">
                        IPK
                    </th>
                    <th scope="col" class="px-6 py-3">
                        BI
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Prestasi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        PO
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Sertifikasi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Total Nilai (NT)
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ranking
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody id="table-body">
                <?php $ranking = 1; ?>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <?php echo htmlspecialchars($row['nama']); ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <?php echo htmlspecialchars($row['nim']); ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <?php echo htmlspecialchars($row['kti']); ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <?php echo htmlspecialchars($row['ipk']); ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <?php echo htmlspecialchars($row['bi']); ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <?php echo htmlspecialchars($row['prestasi']); ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <?php echo htmlspecialchars($row['po']); ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <?php echo htmlspecialchars($row['sertif']); ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span style="color: red;"><?php echo htmlspecialchars($row['nt']); ?></span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <?php echo $ranking++; ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="edit.php?id=<?php echo $row['id']; ?>"
                                class="text-indigo-600 hover:text-indigo-900 mr-2">Edit</a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>"
                                class="text-red-600 hover:text-red-900">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <script>
        const searchInput = document.getElementById('table-search');
        const tableBody = document.getElementById('table-body');
        const tableRows = tableBody.getElementsByTagName('tr');

        searchInput.addEventListener('keyup', function() {
            const filter = searchInput.value.toLowerCase();
            for (let i = 0; i < tableRows.length; i++) {
                const row = tableRows[i];
                const cells = row.getElementsByTagName('td');
                const nama = cells[0].textContent || cells[0].innerText;
                const nim = cells[1].textContent || cells[1].innerText;
                if (nama.toLowerCase().includes(filter) || nim.toLowerCase().includes(filter)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            }
        });
    </script>
    <br>


    <div class="info">
        <p style="font-family: Arial, sans-serif; color: blue; font-size: 12px;">         
            *KTI(Karya Tulis Ilmiah)<br>
            *IPK(Indeks Prestasi Kumulatif)<br>
            *BI(Bahasa Inggris)<br>
            *PO(Pengalaman Organisasi)<br>
            *Sertifikasi(Sertifikat Terkait Jurusan yang di ambil)<br>
        </p>
    </div>
</body>
</html>
