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



?>
