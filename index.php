<?php

$produk = [
    [
        "nama" => "Laptop ASUS Vivobook",
        "kategori" => "Laptop",
        "harga" => 7500000,
        "stok" => 5
    ],
    [
        "nama" => "Keyboard Mechanical",
        "kategori" => "Keyboard",
        "harga" => 650000,
        "stok" => 8
    ],
    [
        "nama" => "Mouse Wireless Logitech",
        "kategori" => "Mouse",
        "harga" => 350000,
        "stok" => 0
    ],
    [
        "nama" => "Headset Gaming",
        "kategori" => "Audio",
        "harga" => 850000,
        "stok" => 3
    ],
    [
        "nama" => "Webcam Full HD",
        "kategori" => "Kamera",
        "harga" => 550000,
        "stok" => 0
    ],
    [
        "nama" => "USB Hub 4 Port",
        "kategori" => "Aksesoris",
        "harga" => 175000,
        "stok" => 12
    ]
];

$jumlahProduk = count($produk);

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cia Store</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="navbar">
        <div class="container">

            <h1>Cia Store</h1>

            <nav>
                <a href="#home">Home</a>
                <a href="#produk">Produk</a>
                <a href="#footer">Kontak</a>
            </nav>

        </div>
    </header>


    <section class="hero" id="home">

        <div class="container">

            <h2>Simple Tech Store</h2>

            <p>
                Temukan berbagai perangkat dan aksesoris
                teknologi untuk kebutuhanmu.
            </p>

            <a href="#produk" class="hero-button">
                Lihat Produk
            </a>

        </div>

    </section>


    <section class="info">

        <div class="container">

            <h2>Katalog Produk</h2>

            <p>
                Tersedia
                <strong><?= $jumlahProduk ?></strong>
                produk di Cia Store.
            </p>

        </div>

    </section>


    <section class="katalog" id="produk">

        <div class="container">

            <div class="product-grid">

                <?php foreach ($produk as $item): ?>

                    <?php
                    if ($item["harga"] >= 1000000) {

                        $diskon = 10;

                        $hargaDiskon =
                            $item["harga"] -
                            ($item["harga"] * $diskon / 100);

                    } else {

                        $diskon = 0;

                        $hargaDiskon = $item["harga"];
                    }
                    ?>

                    <div class="card">

                        <div class="card-content">

                            <span class="kategori">
                                <?= $item["kategori"] ?>
                            </span>

                            <h3>
                                <?= $item["nama"] ?>
                            </h3>


                            <?php if ($diskon > 0): ?>

                                <p class="harga-normal">
                                    Rp <?= number_format(
                                        $item["harga"],
                                        0,
                                        ',',
                                        '.'
                                    ) ?>
                                </p>

                                <span class="diskon">
                                    Diskon <?= $diskon ?>%
                                </span>

                                <p class="harga">
                                    Rp <?= number_format(
                                        $hargaDiskon,
                                        0,
                                        ',',
                                        '.'
                                    ) ?>
                                </p>

                            <?php else: ?>

                                <p class="harga">
                                    Rp <?= number_format(
                                        $item["harga"],
                                        0,
                                        ',',
                                        '.'
                                    ) ?>
                                </p>

                            <?php endif; ?>


                            <p class="stok">
                                Stok: <?= $item["stok"] ?>
                            </p>


                            <?php if ($item["stok"] > 0): ?>

                                <p class="status tersedia">
                                    Tersedia
                                </p>

                                <button class="btn-beli">
                                    Beli Sekarang
                                </button>

                            <?php else: ?>

                                <p class="status habis">
                                    Stok Habis
                                </p>

                                <button
                                    class="btn-beli disabled"
                                    disabled
                                >
                                    Stok Habis
                                </button>

                            <?php endif; ?>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

    </section>


    <footer id="footer">

        <div class="container">

            <p>
                &copy; <?= date("Y") ?> Cia Store.
                All Rights Reserved.
            </p>

        </div>

    </footer>

</body>

</html>