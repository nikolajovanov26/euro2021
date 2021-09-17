<?php include 'view/header.php' ?>

<?php

if ( isset( $_POST['username']) && !empty($_POST['username']) ){
    $username=$_POST['username'];
    if ( isset( $_POST['password']) && !empty($_POST['password'])  ){
        $password=$_POST['password'];
    } else {
        $error = "PLEASE ENTER PASSWORD";
    }
} else {
    $error = "PLEASE ENTER USERNAME";
}

if (isset($_GET['session'])){
    if($_GET['session'] =='end'){
        end_session();
    }
}



?>

<div class="flex-box f-height">
    <main class="form-signin">
    <form method="post" action="">
        <div class="flex-box">
            <img class="mb-4" src="images/logo2020.png" height="150px" alt="logo">
        </div>
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
        <input name="username" type="text" class="form-control" id="floatingInput" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
        <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating">
        <input name="password" type="password" class="form-control" id="floatingPassword" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
        <label for="floatingPassword">Password</label>
        </div>
        <a class="white-link" href="register">Don't hava an account? Sign Up!</a>

        <button name="submit" class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <p class='form-info'>
            <?php
            if(isset( $_POST['submit'])){
                if(!empty($username) && !empty($password)) {
                    check_user($username, $password);
                } else{
                    echo $error;
                }
            }
             
             ?>
        </p>
    </form>
    </main>
</div>

<?php include 'view/footer.php' ?>
