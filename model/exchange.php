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


function start_exchange(){
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
            $ima_o = show_stickers($o);
            $zs_o = array();
            foreach($exc as $e){
                if($e['username']==$o){
                    array_push($zs_o,$e['num']);
                }
            }
            //echo 'aa';
            for($j=0;$j<count($zs);$j++){
                $found=0;
                if(!in_array($zs[$j],$ima_o)){
                    for($i=0;$i<count($zs_o);$i++){
                        //echo 'bb';
                        if(!in_array($zs_o[$i],$ima)){
                            $id1=find_exc_id($zs[$j],$un);
                            $id2=find_exc_id($zs_o[$i],$o);
                            exchange($un,$zs_o[$i],$id1,$o,$zs[$j],$id2);
                            $zs_o[$i]=null;
                            $zs[$j]=null;
                            $zs=array_values(array_filter($zs));
                            $zs_o=array_values(array_filter($zs_o));
                            break;
                        }
                    }                     
                } 
            }
        }
        echo '<br> ';
    }
}

function find_exc_id($num,$username){
    $exc = get_exc();
    foreach($exc as $e){
        if($e['num']==$num){
            if($e['username']){
                return $e['id'];
            }
        }
    }
}


function exchange($user1,$num1,$id1,$user2,$num2,$id2){
    
    global $db;
    
    $query = "INSERT INTO stickers(num,album) VALUES ('$num1','$user1');";
    if(mysqli_query($db,$query) ){
        echo 'ok';
    }else{
        echo mysqli_error($db);
    }
    
    $query = "INSERT INTO stickers(num,album) VALUES ('$num2','$user2');";
    if(mysqli_query($db,$query) ){
        echo 'ok';
    }else{
        echo mysqli_error($db);
    }
    
    $query = "DELETE FROM exchanges WHERE exchanges.id='$id1';";
    mysqli_query($db,$query);
    $query = "DELETE FROM exchanges WHERE exchanges.id='$id2';";
    mysqli_query($db,$query);
}





?>
