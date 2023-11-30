<?php
    include("./config/config.php");

    if(isset($_POST['Phone'])){
        $Phone = str_replace(" ","",$_POST['Phones']);
        $sql1 = "SELECT * FROM `users` WHERE `Phone`='".$Phone."'";
        $res1 = $conn->query($sql1);
        $count = 0;
        while ($row = $res1->fetch()) {
            $count = $count + 1;
        }
        if($count>0){
            $rand1 = rand(100000, 999999);
            echo $Phone;
            setcookie("code", $rand1, time()+5*60);
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
            header("Location: log01.php?sendmessege=true&Phone=".$Phone."");
        }else{
            header("Location: log01.php?phone1=error");
            echo "ok";
            echo $_POST['Phones'];
            echo $Phone;
        }
    }elseif(isset($_POST['tasdiqlash'])){
        $TasdiqCode = str_replace(" ","",$_POST['tasdiqkodi']);
        if($_COOKIE['code']===$TasdiqCode){
            if(!isset($_COOKIE['code'])){
                header("location: ./log01.php");
            }
            $sql1 = "SELECT * FROM `users` WHERE `Phone`='".$_GET['Phone']."'";
            $res1 = $conn->query($sql1);
            $row = $res1->fetch();
            setcookie("code", '', time()-6*60);
            setcookie("UserID", $row['UserID'], time()+6*3600);
            header("location: ./index.php");
        }else{
            echo "false";
            if(!isset($_COOKIE['code'])){
                header("location: ./log01.php");
            }
            header("Location: log01.php?sendmessege=true&Phone=".$Phone."&codeerror=true");
        }

    }
?>