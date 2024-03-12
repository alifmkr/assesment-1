<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Transaksi</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
<?php include "./header.php"; ?>
    <?php
    $kode = $_POST["kode"];
    $tanggal_transaksi = $_POST["tanggal_transaksi"];
    $customers = $_POST["customers"];
    $barang1 = $_POST["barang1"];
    $qty1 = $_POST["qty1"];
    $barang2 = $_POST["barang2"];
    $qty2 = $_POST["qty2"];
    $barang3 = $_POST["barang3"];
    $qty3 = $_POST["qty3"];
    $bayar = $_POST["bayar"];
    $subject = isset($_POST["subject"]) && $_POST["subject"] == "ya" ? true : false;

    $barang_harga = array(
        "Mie Instan" => 3000,
        "Sabun Mandi" => 3500,
        "Shampoo" => 1000,
        "Sandal Jepit" => 11000,
        "Roti" => 12000,
        "Buku Tulis" => 5500,
        "Susu Kotak" => 6000,
        "Minyak Goreng" => 13000,
        "Ice Cream" => 11000,
        "Baterai" => 16000
    );

    $subtotal = ($qty1 * $barang_harga[$barang1]) + ($qty2 * $barang_harga[$barang2]) + ($qty3 * $barang_harga[$barang3]);
    $diskon = $subject ? $subtotal * 0.05 : 0;
    $total_bayar = $subtotal - $diskon;
    $kembali = $bayar - $total_bayar;
    ?>
    <h1>Struk Transaksi Pembelian</h1>
    <table>
        <tr>
            <th colspan="2">Transaksi Pembelian</th>
        </tr>
        <tr>
            <td>Kode Transaksi</td>
            <td><?php echo $kode; ?></td>
        </tr>
        <tr>
            <td>Tanggal Transaksi</td>
            <td><?php echo $tanggal_transaksi; ?></td>
        </tr>
        <tr>
            <td>Customer</td>
            <td><?php echo $customers; ?></td>
        </tr>
       
    </table>
    <?php include "./footer.php"; ?>
</body>
</html>
