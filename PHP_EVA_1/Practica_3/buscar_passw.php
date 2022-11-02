<?php
    ini_set('max_execution_time',0);

    $hash='$2y$10$0GNiidCkeO/VBBHPH0DP6e5tgz6l/FIOxs1RcFloJrXuTYmmAsW72';
    $acepdato=false;
    $num1=97;
    $num2=97;
    $num3=97;
    $num4=97;
    
    for($i=0; $i<26 && !$acepdato; $i++){

        for($y=0; $y<26 && !$acepdato; $y++){
            
            for($c=0; $c<26 && !$acepdato; $c++){
              
                for($a=0; $a<26 && !$acepdato; $a++){

                    $pass=chr($num1).chr($num2).chr($num3).chr($num4);

                        if(password_verify($pass,$hash) || $i>=122){
                            $acepdato=true;
                            print("la clave es: ".$pass);
                            
                        }else{
                            if($num4>=122){
                                $num3+=1;
                                $num4=97;
                            }else{
                                if($num3>=122){
                                    $num2+=1;
                                    $num3=97;
                                    $num4=97;
                                }else{
                                    if($num2>=122){
                                        $num1+=1;
                                        $num2=97;
                                        $num3=97;
                                        $num4=97;
                                    }
                                }
                            }
                        }
                    $num4+=1;
                }
            }
        }
    }
?>