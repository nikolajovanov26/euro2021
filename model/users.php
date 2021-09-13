<?php

function get_users() {
    global $db;
    $query = 'SELECT * FROM users
              ORDER BY username';
    $users = mysqli_query($db,$query);
    return $users;
}

function add_user($username, $email, $password) {
    global $db;
    $query = "INSERT INTO users (`username`, `email`, `password`, `profile_pic`, `album_id`)
              VALUES ('$username', '$email', '$password', NULL, NULL);";
    
    mysqli_query($db, $query);
}

function check_user($username, $password){
    $users = get_users();
    foreach($users as $user){

        if($user['username'] == $username){
            //echo 'username found!';
            if($user['password'] == $password){
                echo 'user logged in!';
                
                session_start();

                $_SESSION['username'] = $username;




                header("Location: http://localhost/euro2021");
                return;
            }
            else{
                echo 'incorrect password!';
                return;
            }
        } else {
            //echo 'user not found!';
        }
        //print_r($user);
    }
    echo 'user not found!';
}

function end_session(){
    unset($_SESSION["username"]);
}


?>
