<?php include 'view/header.php' ?>
<?php include 'view/navbar.php' ?>

<?php if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}
$message ='';
if(isset($_POST['submit'])){
    if(isset($_POST['o_password']) && !empty($_POST['o_password'])){
        $password=$_POST['o_password'];
        if(check_pass($username,$password)){
            if(isset($_POST['email']) && !empty($_POST['email'])){
                $email = $_POST['email'];
                update_email($username,$email);
                $message = 'Profile Updated';
            }
            if(isset($_POST['n_password']) && !empty($_POST['n_password'])){
                $password = $_POST['n_password'];
                update_password($username,$password);
                $message = 'Profile Updated';
            }
            //FILE UPLOAD
            $filename = $_FILES["uploadfile"]["name"];
            $filename = "pp/".$filename;
            $tempname = $_FILES["uploadfile"]["tmp_name"];    
            $folder = "images/".$filename;
            upload_pp($username,$filename);
            move_uploaded_file($tempname, $folder);



        } else {
            $message = 'Incorrect Password';
        }
    } else {
        $message = 'You need to enter your current password';
    }
}



?>


<div class="container pad-top">
    <div class="col">
        <h1>Edit Profile</h1>
        <br>
    </div>
    <div class="col">
        <form method="post" action="" enctype="multipart/form-data">
            <div class="col flex-bot">
                <img class="pp" src="images/<?php if (isset($username)){get_image($username);} else echo 'pp.png'; ?>" width="200" class="pp">
                <input type="file"  name="uploadfile"  value="" class="file_upl" />
            </div> <br>
            <input name="username" type="text" class="form-control" value="<?php echo $username; ?>" disabled>
            <label>Username</label> <br>
            <input name="email" type="text" class="form-control" value="<?php echo get_email($username);; ?>">
            <label>E-mail</label> <br>
            <input name="o_password" type="password" class="form-control" >
            <label>Old Password</label> <br>
            <input name="n_password" type="password" class="form-control" >
            <label>New Password</label> <br>
            <input name="submit" type="submit" value="Update" class="cta">
        </form>
        <?php echo $message; ?>
    </div>
    
</div>

<?php include 'view/footer.php'; ?>