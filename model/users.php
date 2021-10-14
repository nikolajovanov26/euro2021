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
    $password=sha1($username.$password);
    $query = "INSERT INTO users (`username`, `email`, `password`, `profile_pic`)
              VALUES ('$username', '$email', '$password', NULL);";

    $query2 = "INSERT INTO album (`username`) VALUES ('$username')";
    
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
        if(mysqli_query($db,$query2) ){
            echo 'ok';
        }else{
            echo mysqli_error($db);
        }
        mysqli_query($db, $query2);
        header("Location: http://localhost/euro2021/register?message=suc");
    } else{
        echo mysqli_error($db);
    }
}


function check_user($username, $password){
    $password=sha1($username.$password);
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

function check_pass($username,$password){
    $password=sha1($username.$password);
    $users = get_users();
    foreach($users as $user){
        if ($user['username'] == $username){
            if ($user['password'] == $password){
                return true;
            } else return false;
        }
    }
    return false;
}

function get_email($username){
    $users = get_users();
    foreach($users as $user){
        if ($user['username'] == $username){
            if(!empty($user['email'])){
                echo $user['email'];
            } else {
                echo 'no-email@mail.com';
            }
            
        }
    }
}

function update_email($username,$email){
    global $db;
    $users = get_users();
    foreach($users as $user){
        if ($user['username'] == $username){
            $query = "UPDATE users SET email='$email' WHERE users.username='$username'";
            mysqli_query($db,$query);
        }
    }
}

function update_password($username,$password){
    $password=sha1($username.$password);
    global $db;
    $users = get_users();
    foreach($users as $user){
        if ($user['username'] == $username){
            $query = "UPDATE users SET password='$password' WHERE users.username='$username'";
            mysqli_query($db,$query);
        }
    }
}

function get_image($username){
    $users = get_users();
    foreach($users as $user){
        if ($user['username'] == $username){
            if(!empty($user['profile_pic'])){
                echo $user['profile_pic'];
            } else {
                echo 'pp.png';
            }
            
        }
    }
}

function upload_pp($username,$filename){
    global $db;
    $query = "UPDATE users SET profile_pic='$filename' WHERE users.username='$username'";
    mysqli_query($db,$query);
}


function find_email($username){
    $users = get_users();
    foreach($users as $user){
        if($user['username']==$username){
            return $user['email'];
        }
    }

    
}

function is_logged($username){
    if(!$username){
        header("Location: http://localhost/euro2021/login");
    }
}


function is_admin($username){
    $users = get_users();
    foreach($users as $user){
        if ($user['username'] == $username){
            if(!empty($user['role'])){
                if($user['role']=='admin'){
                    return true;
                }
            }
        }
    }
    return false;
}

function add_admin($username){
    global $db;
    $query = "UPDATE users SET role='admin' WHERE users.username='$username'";
    mysqli_query($db,$query);
}

function remove_admin($username){
    global $db;
    $query = "UPDATE users SET role='user' WHERE users.username='$username'";
    mysqli_query($db,$query);
}

?>
