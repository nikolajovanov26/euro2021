<?php include 'view/header.php' ?>
<?php include 'view/navbar.php' ?>

<?php if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}

if(isset($_GET['num'])){
    $num = $_GET['num'];
}

is_logged($username);

if(!is_admin($username)){
    header("Location: http://localhost/euro2021");
  }

//$message ='';

if(isset($_POST['submit'])){

    $filename = $_FILES["uploadfile"]["name"];
    $filename = "stickers/".$filename;
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
    $folder = "images/".$filename;
    upload_image($num,$filename);
    move_uploaded_file($tempname, $folder);
}



?>


<div class="container pad-top">
    <div class="col">
        <h1>Add Photo</h1>
        <br>
    </div>
    <div class="col">
        <form method="post" action="" enctype="multipart/form-data">
            <div class="col flex-bot">
                <img src="
                <?php
                if (isset($num)){
                    if(find_image($num)){
                        echo "./images/".find_image($num);
                    } else {
                        echo "./images/stickers/sticker.jpg";
                    }
                }      
                ?> " width="200">
                <input type="file"  name="uploadfile"  value="" class="file_upl" />
            </div> <br>
            <input name="num" type="text" class="form-control" value="<?php echo $num; ?>" disabled>
            
            <input name="submit" type="submit" value="Update" class="cta">
        </form>
    </div>
</div>






<?php include 'view/footer.php'; ?>