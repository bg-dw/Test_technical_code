<?php
function ans($x,$pil){
    $hasil = "";
    if($pil=="1"){//segitiga
        $arr[]= "0";
        $j=0;
        for($i=0;$i<$x;$i++){
            for($i=count($x);$i>$j;$i--){
                $a .= "0";
            }
            $arr[] = substr($x,$i ,1).$a;
        }
        $hasil = $arr;
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
        
        $arr[]= 1;
        for($i=0;$i<$x;$i++){
            if($i<=1){
                $arr[] = 1;
            }else{
                if($x%$i==0){
                    $arr[] = $x;
                }
            }
        }
        $hasil = $arr;
    }
    $data = $hasil;
    echo json_encode($data);
}
?>