<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Struk Transaksi POLGAN MART</title>
<style>
    body {
        background-color: #f2f2f2;
        font-family: 'Courier New', monospace;
        display: flex;
        justify-content: center;
        padding: 20px;
    }

    .struk {
        background-color: white;
        width: 340px; /* sedikit dilebarkan */
        padding: 20px;
        border: 1px dashed #000;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h2 {
        text-align: center;
        margin: 0;
    }

    .header, .footer {
        text-align: center;
        border-bottom: 1px dashed black;
        padding-bottom: 10px;
        margin-bottom: 10px;
    }

    .footer {
        border-top: 1px dashed black;
        border-bottom: none;
        margin-top: 10px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        font-size: 14px;
    }

    td {
        padding: 4px 4px; /* jarak antar kolom */
    }

    .right {
        text-align: right;
    }

    .center {
        text-align: center;
    }

    .total {
        border-top: 1px dashed black;
        font-weight: bold;
        padding-top: 5px;
    }

    /* Tambah jarak antar baris agar tidak menempel */
    tr:not(:last-child) td {
        padding-bottom: 5px;
    }
</style>
</head>
<body>

<div class="struk">
    <div class="header">
        <h2>===POLGAN MART===</h2>
        <p>l. Veteran Jl. Manunggal No.194, Helvetia, Kec. Sunggal, Kabupaten Deli Serdang, Sumatera Utara 20116<br>Politeknik Ganesha Medan</p>
        <p>Tanggal: <?php echo date('d/m/Y H:i:s'); ?></p>
    </div>

    <?php
    // DAFTAR BARANG DAN HARGA
    $barang = ["Masker medis", "Air mineral", "Kertas HVS", "Tali ID card", "Hand sanitizer", "Coca Cola ", "Pop Mie", "Roti Isi",];
    $harga  = [4000, 4000, 8000, 5000, 15000, 18000, 10000, 14000, 6000, 18000];
