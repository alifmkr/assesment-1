<?php
$barang = array(
    "Mie Instan" => "Rp 3.000",
    "Sabun Mandi" => "Rp 3.500",
    "Shampoo" => "Rp 1.000",
    "Sandal Jepit" => "Rp 11.000",
    "Roti" => "Rp 12.000",
    "Buku Tulis" => "Rp 5.500",
    "Susu Kotak" => "Rp 6.000",
    "Minyak Goreng" => "Rp 13.000",
    "Ice Cream" => "Rp 11.000",
    "Baterai" => "Rp 16.000"
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        .submit {
            background-color: #191970;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 0.75rem 1rem;
            cursor: pointer;
            font-size: 1rem;
        }
        
        .submit:hover {
            background-color: #2980b9;
        }
        
        .reset {
            background-color: #191970;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 0.75rem 1rem;
            cursor: pointer;
            font-size: 1rem;
        }
        
        .reset:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body class="w-svw h-svw">
    <?php include "./header.php"; ?>
    <div id="content">
        <h1 class="text-center text-9xl font-bold">TRANSACTION</h1>
        <form action="history.php" method="post">
            kode transaksi : <input type="text" name="kode">
            <br><br>
            Tanggal transaksi : <input type="date" name="tanggal_transaksi">
            <br><br>
            <label for="customers">Customer:</label>
            <select id="customers" name="customers">
                <?php
                $customers = array("ujang", "ucup", "asep", "acong", "maman");
                foreach($customers as $customer) {
                    echo "<option value='$customer'>$customer</option>";
                }
                ?>
            </select>
            <br><br>
            <label for="barang">Barang 1 :</label>
            <select id="barang" name="barang1">
                <?php
                foreach ($barang as $nama_barang => $harga) {
                    echo "<option value='$nama_barang'>$nama_barang - $harga</option>";
                }
                ?>
            </select>
            <input type="number" name="qty1">
            <br><br>
            <label for="barang">Barang 2 :</label>
            <select id="barang" name="barang2">
                <?php
                foreach ($barang as $nama_barang => $harga) {
                    echo "<option value='$nama_barang'>$nama_barang - $harga</option>";
                }
                ?>
            </select>
            <input type="number" name="qty2">
            <br><br>
            <label for="barang">Barang 3 :</label>
            <select id="barang" name="barang3">
                <?php
                foreach ($barang as $nama_barang => $harga) {
                    echo "<option value='$nama_barang'>$nama_barang - $harga</option>";
                }
                ?>
            </select>
            <input type="number" name="qty3">
            <br><br>
            punya member?  <input type="radio" name="subject" value="ya">hooh
            <input type="radio" name="subject" value="tidak">henteu 
            <br><br>
            uang pembayaran : <input type="text" name="bayar">
            <br><br>
            <div>
            <input type="submit" value="Save" name="submit" class="submit">
            <input type="reset" value="Reset" class="reset">
        </div>
        </form>
    </div>
    <?php include "./footer.php"; ?>
</body>
</html>
