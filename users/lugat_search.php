<?php
    $q=$_GET["q"];
    include("../config/config.php");
    if (strlen($q)>0) {
        $sql = "SELECT * FROM `lugat` WHERE `Til1_soz` LIKE '%".$q."%' OR `Til_2_soz` LIKE '%".$q."%'";
        $res = $conn->query($sql);
        $i=1;
        while ($row=$res->fetch()) {
            echo "<tr>
                <td>".$i."</td>
                <td>".$row['Til1_soz']."</td>
                <td>".$row['Til_2_soz']."</td>
            </tr>";
            $i++;
        }
        if($i===1){
            echo "<tr><td colspan=3 class=text-center>Lug'at topilmadi.</td></tr>";
        }
    }
?>