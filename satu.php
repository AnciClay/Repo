<?php
    $hidup = "";
    if(isset($_POST['hiduptxt'])and($_POST['matitxt'])and($_POST['rangetxt'])and($_POST['waktutxt'])){
    $hidup = $_POST['hiduptxt'];
    $mati = $_POST['matitxt'];
    $range = $_POST['rangetxt'];
    $waktu = $_POST['waktutxt'];
    
    $kelipatan = $waktu / $range;
     

    for ($i=0; $i < $kelipatan; $i++) { 
        $total = ($hidup * $mati) / 100;
        $hidup = ($hidup - $total) * 2;
       
    }

}
?>
<html>
<title>Ujicoba</title>
<form action="satu.php" method="post">
    <input type="text" name="hiduptxt" placeholder="Yang Hidup"><br/><br/>
    <input type="text" name="matitxt"  placeholder="Persetase Kematian"><br/><br/>
    <input type="text" name="rangetxt"  placeholder="Durasi Kelahiran"><br/><br/>
    <input type="text" name="waktutxt" placeholder="Jumlah Hari"><br/><br/>
    <input type="submit" value="Kerjakan"><br/><br/>
    <input type="text" value="<?php echo $hidup?>"/>
</form>
</html>

