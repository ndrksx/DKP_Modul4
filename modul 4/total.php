<html>
<head>
	<title>Total</title>
	<?php

	class Produk {
		public $jenisbbm;
		public $harga;
		
	
		public function __construct($a, $b){
			$this->jenisbbm = $a;
			$this->harga = $b;
		}
	}
	
	$produk01 = new Produk("Pertamax,",10500);
	$produk02 = new Produk("Pertalite,",8500);
	$produk03 = new Produk("Premium,",6500);
	print_r ($produk01);
	echo "<br>";
	print_r ($produk02);
	echo "<br>";
	print_r ($produk03);
	echo "<br><br>"
		
?>
	<body>
		<link rel="stylesheet" type="text/css" href="style.css">


<?php
$jenisb = $_POST['jenisb'];
switch ($jenisb) {

	case "Pertamax":
$kendaraan = $_POST['kendaraan'];
$jarak = $_POST['jarak'];
	if(empty($jarak) || empty($kendaraan) || empty($jenisb)) {
		echo"Jarak tempuh belum dimasukkan, silakan kembali";
	}else if ($kendaraan == 'Motor')
             {
             $bbm = $jarak / 50;
             $biaya = $bbm * 10500;
            

		echo "Dengan jarak $jarak Km menggunakan kendaraan Motor menghabiskan BBM sebanyak: $bbm Liter $jenisb<br><br>";
		echo "Penjabaran rumus perhitungannya adalah: jarak ($jarak) dibagi 50 ($kendaraan rata-rata 50Km/L) dan dikali dengan harga jenis BBM $jenisb yaitu 10500<br><br>";
		echo "<h1>Maka Total Biaya BBM adalah: $biaya Rupiah</h1>";
	}
	     else 
		if ($kendaraan == 'Mobil')
               {
             $bbm = $jarak / 10;
             $biaya = $bbm * 10500;

        echo "Dengan jarak $jarak Km menggunakan kendaraan Mobil menghabiskan BBM sebanyak: $bbm Liter $jenisb<br><br>";
        echo "Penjabaran rumus perhitungannya adalah: jarak ($jarak) dibagi 10 ($kendaraan rata-rata 10Km/L) dan dikali dengan harga jenis BBM $jenisb yaitu 10500<br><br>";
		echo "<h1>Maka Total Biaya BBM adalah: $biaya Rupiah</h1>";
	}
	break;

	case "Pertalite":
$kendaraan = $_POST['kendaraan'];
$jarak = $_POST['jarak'];
	if(empty($jarak) || empty($kendaraan) || empty($jenisb)) {
		echo"Jarak tempuh belum dimasukkan, silakan kembali";
	}else if ($kendaraan == 'Motor')
               {
             $bbm = $jarak / 50;
             $biaya = $bbm * 8500;
            

		echo "Dengan jarak $jarak Km menggunakan kendaraan Motor menghabiskan BBM sebanyak: $bbm Liter $jenisb<br><br>";
		echo "Penjabaran rumus perhitungannya adalah: jarak ($jarak) dibagi 50 ($kendaraan rata-rata 50Km/L) dan dikali dengan harga jenis BBM $jenisb yaitu 8500<br><br>";
		echo "<h1>Maka Total Biaya BBM adalah: $biaya Rupiah</h1>";
	}
	     else 
		if ($kendaraan == 'Mobil')
               {
             $bbm = $jarak / 10;
             $biaya = $bbm * 8500;

        echo "Dengan jarak $jarak Km menggunakan kendaraan Mobil menghabiskan BBM sebanyak: $bbm Liter $jenisb<br><br>";
        echo "Penjabaran rumus perhitungannya adalah: jarak ($jarak) dibagi 10 ($kendaraan rata-rata 10Km/L) dan dikali dengan harga jenis BBM $jenisb yaitu 8500<br><br>";
		echo "<h1>Maka Total Biaya BBM adalah: $biaya Rupiah</h1>";
	}
	break;

	case "Premium":
$kendaraan = $_POST['kendaraan'];
$jarak = $_POST['jarak'];
	if(empty($jarak) || empty($kendaraan) || empty($jenisb)) {
		echo"Jarak tempuh belum dimasukkan, silakan kembali";
	}else if ($kendaraan == 'Motor')
               {
             $bbm = $jarak / 50;
             $biaya = $bbm * 6500;
            

		echo "Dengan jarak $jarak Km menggunakan kendaraan Motor menghabiskan BBM sebanyak: $bbm Liter $jenisb<br><br>";
		echo "Penjabaran rumus perhitungannya adalah: jarak ($jarak) dibagi 50 ($kendaraan rata-rata 50Km/L) dan dikali dengan harga jenis BBM $jenisb yaitu 6500<br><br>";
		echo "<h1>Maka Total Biaya BBM adalah: $biaya Rupiah</h1>";
	}
	     else 
		if ($kendaraan == 'Mobil')
               {
             $bbm = $jarak / 10;
             $biaya = $bbm * 6500;

        echo "Dengan jarak $jarak Km menggunakan kendaraan Mobil menghabiskan BBM sebanyak: $bbm Liter $jenisb<br><br>";
        echo "Penjabaran rumus perhitungannya adalah: jarak ($jarak) dibagi 10 ($kendaraan rata-rata 10Km/L) dan dikali dengan harga jenis BBM $jenisb yaitu 6500<br><br>";
		echo "<h1>Maka Total Biaya BBM adalah: $biaya Rupiah</h1>";
	}
	break;

	default:
}
?>
	
	<form action="programta.php" method="post">
	<input type="submit" name="submit" value="Kembali">

</form>
</body>
</head>
</html>