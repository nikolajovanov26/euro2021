<?php

function get_albums() {
    global $db;
    $query = 'SELECT * FROM album
              ORDER BY id';
    $albums = mysqli_query($db,$query);
    return $albums;
}

function show_process($username){
    $albums = get_albums();
    foreach($albums as $album){
        if ($album['username'] == $username){
            return $album['progress'];
        }
    }
}



function update_process($username, $process){

    $query = 'UPDATE album SET process = "'.$process.'" WHERE "album.username" = "'.$username.'";';
    //echo $query;
}


?>