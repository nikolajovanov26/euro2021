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
    $query = "INSERT INTO users (`username`, `email`, `password`, `profile_pic`, `album`)
              VALUES ('$username', '$email', '$password', NULL, NULL);";
    
    $users = get_users();
    foreach($users as $user){

        if($user['username'] == $username){
            header("Location: http://localhost/euro2021/register?message=err-u");
            return;
        } else if($user['email'] == $email){
            header("Location: http://localhost/euro2021/register?message=err-e");
            return;
        }
    }
    if(mysqli_query($db, $query)){
        header("Location: http://localhost/euro2021/register?message=suc");
    } 
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

function get_image($username){
    $users = get_users();
    foreach($users as $user){
        if ($user['username'] == $username){
            if(!empty($user['profile_pic'])){
                echo $user['profile_pic'];
            } else {
                echo 'images/pp.png';
            }
            
        }
    }
}


?>
