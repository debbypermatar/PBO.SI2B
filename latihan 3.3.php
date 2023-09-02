<!DOCTYPE html>
<html>
<head>
    <title>Program Penghitung Besaran Angsuran Hutang</title>
</head>
<body>
    <h1>TOKO PEGADAIAN SYARIAH DEBBY</h1>
    <p>JI Keadilan No 16</p>
    <p>Telp. 72353459</p>

    <h2>Program Penghitung Besaran Angsuran Hutang</h2>

    <?php
    // Input
    $pinjaman = 1000000; // Besaran Pinjaman (dalam Rp)
    $bunga = 10; // Besaran bunga (%)
    $lamaangsuran = 5; // Lama angsuran (bulan)

    // menghitung total pinjaman
    $totalPinjaman = $pinjaman + ($pinjaman * ($bunga / 100));

    // menghitung besaran angsuran
    $angsuran = $totalPinjaman / $lamaangsuran;

    // Format angka ke dalam format mata uang
    function formatRp($angka) {
        return 'Rp. ' . number_format($angka, 0, ',', '.');
    }
    ?>

    <p>Besar Pinjaman : <?php echo formatRp($pinjaman); ?></p>
    <p>Masukan besarnya bunga (%): <?php echo $bunga; ?></p>
    <p>Total yang dipinjam: <?php echo formatRp($totalPinjaman); ?></p>
    <p>Lamanya angsuran (bulan) : <?php echo $lamaangsuran; ?></p>
    <p>Besaran angsuran: <?php echo formatRp($angsuran); ?></p>
</body>
</html>
