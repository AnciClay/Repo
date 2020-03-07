<html>
<title>Perhitungan</title>
<form action="dua.php" method="post">
    <input type="text" name="masuktxt" placeholder="Uang Masuk"><br/><br/>
    <input type="text" name="belanjatxt" /><br/><br/>
    <input type="submit" value="Hitung"><br/>
</form>
</html>
<?php
    $array = ["50000", "20000", "10000", "5000", "2000", "1000", "500"];
    $masuk = "";
    $belanja = "";
    if(isset($_POST['masuktxt'])and($_POST['belanjatxt'])){
    for($p =0; $p<count($array);$p++){
        $dummy[$p] = 0;
        
    }
    $masuk = $_POST['masuktxt'];
    $belanja = $_POST['belanjatxt'];
    $hasil = $masuk - $belanja;

     while ($hasil > 0) {
         if ($hasil >= 50000) {
             $hasil = $hasil - 50000;
             $dummy[0] += 1;
         }elseif ($hasil >= 20000) {
             $hasil = $hasil - 20000;
             $dummy[1] += 1;
         }elseif ($hasil >= 10000) {
             $hasil = $hasil - 10000;
             $dummy[2] += 1;
         }elseif ($hasil >= 5000) {
             $hasil = $hasil - 5000;
             $dummy[3] += 1;
         }elseif ($hasil >= 2000) {
             $hasil = $hasil - 2000;
             $dummy[4] += 1;
         }elseif ($hasil >= 1000) {
             $hasil = $hasil - 1000;
             $dummy[5] += 1;
         }elseif ($hasil >= 500) {
             $hasil = $hasil - 500;
             $dummy[6] += 1;
         }
     }
     for($i = 0; $i < count($dummy);$i++){
        if($dummy[$i] > 0){
            echo $dummy[$i]."x".$array[$i]."<br>";
        }
     }  
    }   
?>
