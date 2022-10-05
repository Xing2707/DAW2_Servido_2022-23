<?php
    $hash="$2y$10$0GNiidCkeO/VBBHPH0DP6e5tgz6l/FIOxs1RcFloJrXuTYmmAsW72";
    $acepdato=false;
    $num1=97;
    $num2=97;
    $num3=97;
    $num4=97;
    for($i=0; $i<26; $i++){
        for($y=0; $y<26; $y++){
            for($c=0; $c<26; $c++){
                for($a=0; $a<26; $a++){
                    if($c++){
                        $pass=chr($num1).chr($num2).chr($num3++).chr($num4);
                    }else
                        if($y++){
                            $pass=chr($num1).chr($num2++).chr($num3).chr($num4);
                        }
                    $pass=chr($num1).chr($num2).chr($num3).chr($num4);

                }
            }
        }
    }
?>