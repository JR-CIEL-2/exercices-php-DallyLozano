<?php

function media(&$argTab){

    sort($argTab);

    $nb= count($argTab);

    for($i = 0 ;  $i<$nb; $i++){
        echo $argTab[$i] . ' ';
       }    
    
    if($nb%2==1){

           // echo 'impaire';

     
         $media= ($nb + 1) / 2;

    return ($argTab[$media-1]);
      


    }
    if($nb%2==0){
       // echo 'paire';

        $div = ($nb/2);
        $media = ($argTab[$div-1] + $argTab[$div])/2;

    return ($media);

   }


}

?>