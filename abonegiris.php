<?php
   $conn = mysqli_connect("localhost","root","","pembegomlek");
   
   
       $abonead = $_POST['kullaniciadi'];
       $abonesifre = $_POST['kullanicisifresi'];

       $sql = mysqli_query($conn,"SELECT count(*) as total from abone where abone_ad = '".$abonead."' and abone_sifre ='".$abonesifre."'") or die(mysqli_error($conn));

       $rw = mysqli_fetch_array($sql);

       if($rw['total'] > 0 ){
           header("location:anasayfa.html");
       }
       else{
        header("location:abonegiris.html");
       }
           
?>