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
        width: 320px;
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
        padding: 3px 0;
    }

    .right {
        text-align: right;
    }

    .total {
        border-top: 1px dashed black;
        font-weight: bold;
        padding-top: 5px;
    }
</style>
</head>
<body>

<div class="struk">
    <div class="header">
        <h2>POLGAN MART</h2>
        <p>Jl. Veteran Jl. Manunggal No.194, Helvetia, Kec. Sunggal, Kabupaten Deli Serdang, Sumatera Utara 20116<br>Politeknik Teknik Ganesha Medan</p>
        <p>Tanggal: <?php echo date('d/m/Y H:i:s'); ?></p>
    </div>

    <?php
    // Tambahkan array $barang dan $harga
    $barang = ["Sabun", "Sampo", "Odol", "Teh", "Kopi", "Susu", "Mie Instan", "Gula", "Beras", "Minyak Goreng"];
    $harga  = [4000, 12000, 8000, 5000, 15000, 18000, 3500, 14000, 60000, 28000];
