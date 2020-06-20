<?php
    $abonead = $_POST['kullaniciadi'];
    $abonemail = $_POST['email'];
    $abonesifre = $_POST['sifre'];
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "pembegomlek";

    $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')');
    }else{
        $SELECT = "SELECT abone_mail From abone Where abone_mail = ? Limit 1";
        $INSERT = "INSERT Into abone (abone_ad,abone_mail,abone_sifre) values (?,?,?)";
        
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s",$abonemail);
        $stmt->execute();
        $stmt->bind_result($abonemail);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if($rnum == 0){
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssi",$abonead,$abonemail,$abonesifre);
            $stmt->execute();
            echo "New record inserted";
        }else{
            echo "Bu email adresiyle daha önce kayıt olunmuş";
        }
        $stmt->close();
        $conn->close();
    }
?>