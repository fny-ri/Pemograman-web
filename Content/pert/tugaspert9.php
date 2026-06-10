<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cek Kategori Usia Mahasiswa</title>
</head>
<body>
    <h2>Cek Kategori Usia Mahasiswa</h2>
    <form method="post" action="">
        <label>Nama: <input type="text" name="nama" required></label><br><br>
        <label>Umur: <input type="number" name="umur" required></label><br><br>
        <button type="submit">Cek</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nama = isset($_POST['nama']) ? trim($_POST['nama']) : '';
        $umur = isset($_POST['umur']) ? (int) $_POST['umur'] : 0;
        $kategori = '';

        if ($umur < 13) {
            $kategori = 'Anak-anak';
        } elseif ($umur >= 13 && $umur <= 17) {
            $kategori = 'Remaja';
        } elseif ($umur >= 18 && $umur <= 59) {
            $kategori = 'Dewasa';
        } else {
            $kategori = 'Lansia';
        }

        echo '<p>Nama: ' . htmlspecialchars($nama) . '<br>Umur: ' . $umur . '<br>Kategori: ' . $kategori . '</p>';
    }
    ?>
</body>
</html>
