<?php 
function string_short ($str){
    $unicode = array(
            '-'=>'\'|\"|\\|\||\!|\@|\#|\$|\%|\^|\&|\*|\(|\)|;'
        );
        
       foreach($unicode as $nonUnicode=>$uni){
            $str = preg_replace("/($uni)/i", $nonUnicode, $str);
       }
       while(strpos( $str," "))
       {
            $str=str_replace(" ", "-", $str);
       }
       
    return strtolower($str);
    }
 function generate_random_string($length = 10) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }
 ?>