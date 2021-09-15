<?php

function get_exc() {
    global $db;
    $query = 'SELECT * FROM exchanges
              ORDER BY id';
    $exc = mysqli_query($db,$query);
    return $exc;
}

function show_exc($username){
    $exc = get_exc();
    $my_exc=array();
    foreach($exc as $e){
        if ($e['username'] == $username){
            array_push($my_exc, $e['num']);
        }
    }
    return $my_exc;
}

function add_exc($username, $num){
    global $db;
    $query = "INSERT INTO exchanges(num,username) VALUES ('$num','$username');";
    mysqli_query($db,$query);
}


function remove_exc($username, $num){
    global $db;
    $exc=get_exc();
    foreach($exc as $e){
        if($e['num']==$num){
            if($e['username']==$username){
                $id=$e['id'];
            }
        }
    }
    $query = "DELETE FROM exchanges WHERE exchanges.id='$id';";
    mysqli_query($db,$query);
    
}


function exchange(){
    global $db;
    $exc=get_exc();
    $usernames=array();

    foreach($exc as $e){
        array_push($usernames,$e['username']);
    }
    $usernames=array_unique($usernames);
    $usernames=array_values(array_filter($usernames));
    shuffle($usernames);

    foreach($usernames as $un){
        echo '<b>username: '.$un . '</b><br>';

        unset($zs);
        unset($ima);
        unset($ost);
        
        $zs = array(); //za smena
        $ima = show_stickers($un); //ima
        $ost = array(); //ostanati
        foreach($exc as $e){
            if($e['username']==$un){
                array_push($zs,$e['num']);
            }  else{
                array_push($ost,$e['username']);
            }
        }
        $ost=array_unique($ost);
        $ost=array_values(array_filter($ost));
        shuffle($ost);
        foreach($ost as $o){
            unset($ima_o);
            unset($zs_o);
            $ima_o = show_stickers($o); //ima
            $zs_o = array();
            foreach($exc as $e){
                if($e['username']==$o){
                    array_push($zs_o,$e['num']);
                }
            }

            foreach($zs as $s){
                if(!in_array($s,$ima_o)){
                    //echo $o .' go nema ' . $s .' <br>';
                    foreach($zs_o as $s_o){
                        if(!in_array($s_o,$ima)){
                            echo '<u>'.$un.'</u> go dobiva '.$s_o;
                            echo ', <u>'.$o.'</u> go dobiva '.$s.'<br>';
                            //$s_o=null;
                            //$s=null;
                            break;
                        }
                        echo 'break; <br>';
                    }
                } 
            }

        }
        
        
        //echo ' have: '. $ima[0]. ' duplicate: '.$zs[0] .' other: '.$ost[0]. ' ima: '.$ima_o[0].' za smena: '.$zs_o[0];
        /*
        shuffle($st);
        if(!empty($st)){
            echo $st[0]. ' ';
        }
        */
        echo '<br> ';
        
    }

    
}







?>
