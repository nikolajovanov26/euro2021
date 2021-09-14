<?php

function get_albums() {
    global $db;
    $query = 'SELECT * FROM album
              ORDER BY id';
    $albums = mysqli_query($db,$query);
    return $albums;
}

function show_process($username){
    global $db;
    $albums = get_albums();
    foreach($albums as $album){
        if ($album['username'] == $username){
            return $album['progress'];
        }
    }
}



function update_process($username, $process){
    global $db;
    $query = 'UPDATE album SET progress = '.$process.' WHERE album.username = "'.$username.'";';
    mysqli_query($db,$query);

    /*if(mysqli_query($db,$query) ){
        echo 'ok';
    }else{
        echo mysqli_error($db);
    }
    */
    //echo '<br>'.$query;
}


?>