<?php
function ans($x,$pil){
    $hasil = "";
    if($pil=="1"){//segitiga
        $hasil = ""; 
    }elseif($pil=="2"){//ganjil
        $arr[]= 0;
        for($i=0;$i<$x;$i++){
            if($i<=0){
                $arr[] = 0;
            }else{
                if(($x%2)!=0){
                    $arr[] = $x;
                }
            }
        }
        $hasil = $arr;
    }elseif($pil=="3"){//prima

    }
    $data = $hasil;
    echo json_encode($data);
}
?>