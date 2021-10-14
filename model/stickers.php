<?php

function get_stickers() {
    global $db;
    $query = 'SELECT * FROM stickers
              ORDER BY id';
    $stickers = mysqli_query($db,$query);
    return $stickers;
}



function show_stickers($username){
    $stickers = get_stickers();
    $my_stickers=array();
    foreach($stickers as $sticker){
        if ($sticker['album'] == $username){
            array_push($my_stickers, $sticker['num']);
        }
    }
    return $my_stickers;
}

function find_image($num){
    $stickers = get_stickers();
    foreach($stickers as $sticker){
        if($sticker['num'] == $num){
            if ($sticker['album'] == 'admin'){
                if(isset($sticker['image'])) {
                    return $sticker['image'];
                } else {
                    return 'stickers/sticker.jpg';
                } 
            } 
        }
    }
    return 'stickers/sticker.jpg';
}

function upload_image($num,$filename){
    global $db;
    $query = "INSERT INTO stickers(num,album,image) VALUES ('$num','admin','$filename');";
    mysqli_query($db,$query);
}

function add_sticker($username, $num){
    global $db;
    $query = "INSERT INTO stickers(num,album) VALUES ('$num','$username');";
    mysqli_query($db,$query);
    
}


?>
