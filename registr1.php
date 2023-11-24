<?php
    include("./config/config.php");

    if(isset($_POST['registir'])){
        if($_COOKIE['code']){
            header("Location: ./index.php?chiqish2=true");
        }else{
            $FIO = str_replace("'","`",$_POST['FIO']);
            $Phone = str_replace(" ","", $_POST['Phone']);
            $sql1 = "SELECT * FROM `users` WHERE `Phone`='".$Phone."'";
            $res1 = $conn->query($sql1);
            $count = 0;
            while ($row1 = $res1->fetch()) {
                $count = $count + 1;
            }
            if($count>0){
                header("location: ./registr.php?phone=true");
            }else{
                $rand1 = rand(100000, 999999);
                setcookie("code", $rand1, time()+5*60);   
                setcookie("FIO", $FIO, time()+6*60);   
                setcookie("Phone", $Phone, time()+6*60); 
                $text = "Tasdiqlash kodi: ".$rand1;
                $data = json_encode([
                    'send'=>'',
                    'number'=>$Phone,
                    'text'=>$text,
                    'user_id'=>'5139864291',
                    'token'=>"PVDdSjstLFTQHMgpxGRiYbqZyheoJKrvaUfmNulBIEXknOA",
                    'id'=>'5390'
                ]);
                $url = "https://api.xssh.uz/smsv1/?data=".urlencode($data);
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
                $res = curl_exec($ch);


                header("location: ./registr.php?tasdiq=true");
            }
        }
    }
    elseif(isset($_POST['Tasdiqlash'])){
        if(isset($_COOKIE['code'])){
            if($_POST['TasdiqKodi']=$_COOKIE['code']){
                $UserID = time();
                $FIO = $_COOKIE['FIO'];
                $Phone = $_COOKIE['Phone'];
                $sql1 = "INSERT INTO `users`(`id`, `UserID`, `FIO`, `Addres`, `Phone`, `Email`, `Image`, `Dates`) VALUES 
                (NULL,?,?,'',?,'','01.png',CURRENT_TIMESTAMP)";
                $stmt1= $conn->prepare($sql1);
                $stmt1->execute([$UserID, $FIO, $Phone]);
                setcookie("code", "", time()-7*60);   
                setcookie("FIO", "", time()-7*60);   
                setcookie("Phone", "", time()-7*60);
                setcookie("UserID", $UserID, time()+6*3600); 
                header("location: ./index.php");
                
            }else{
                header("location: ./registr.php?tasdiq=true&code=error");
            }
            
        }else{
            header("location: ./registr.php?tasdiqerror=true");
        }
    }else{
        echo "Malumot yoq";
    }
echo "Tasdiqlandi";
?>