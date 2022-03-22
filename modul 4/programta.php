<!DOCTYPE html>
<html>
    <head>
        <title>Modul 4 Kelompok 20</title>
        <?php
class pendefinisi {
public function identitas (string $nama, string $nim) {
            echo "$nama / $nim <br>";
        }
    }
$objek = new pendefinisi ();
            $objek -> identitas('DHEA FAREZA','21120121140095');
            $objek -> identitas('DHEA RAHMADANIA PUTRI CHANAFI','21120121120015');
            $objek -> identitas('MUHAMMAD IRSYAD ROLANDI','21120121140161');
            $objek -> identitas('INDRA KURNIAWAN SANTOSO','21120118140097');
?>
<?php
class umurasal {
  private $umur;
  private $asal;

  public function __construct($umur, $asal){
    $this->umur = $umur;
    $this->asal = $asal;
  }

  public function setUmur($umurBaru){
    $this->umur = $umurBaru;
  }

  public function getUmur(){
    return $this->umur;
  }

  public function getAsal(){
    return $this->asal;
  }
}

$naufal = new umurasal("Modul 4 ", "Kelompok 20");

echo "<br>";
echo $naufal->getUmur();
echo $naufal->getAsal();

$naufal->setUmur("Praktikum DKP 2022");
echo "<br>";
echo $naufal->getUmur();

?>


        <body>


</script>
<link rel="stylesheet" type="text/css" href="style.css">

<form action="total.php" method="post">
<h1>Program Penghitung Estimasi Konsumsi BBM dan Total Biayanya</h1>

<h4>Masukkan Jarak Tempuh</h4>
<form 
		action="total.php" method="post">
               <label for="jarak">Jarak Tempuh:</label>
               <td><input name="jarak" onkeydown="preventNumberInput(event)" onkeyup="preventNumberInput(event)" /></td> Km
               

               </br></br>
<h3>Pilih Jenis Kendaraan</h3>

<label for="kendaraan">Kendaraan :</label></td>
<select name="kendaraan" id="kendaraan">
<option value="Motor">Motor</option>
<option value="Mobil">Mobil</option>
</select>
</br></br>

<h3>Pilih Jenis BBM</h3>
<label for="jenisb">Jenis BBM :</label></td>
<select name="jenisb" id="jenisb">
<option value="Pertamax">Pertamax</option>
<option value="Pertalite">Pertalite</option>
<option value="Premium">Premium</option>
</select>
</br></br>

               <input type="submit" name="submit" value="Mulai Hitung">
</form>
            <script type="text/javascript" src="jquery/jquery-3.4.1.min.js"></script>
            <script type="text/javascript" src="jquery/script.js"></script>
        </head>
    </body>
</html>