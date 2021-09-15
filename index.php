<?php include 'view/header.php' ?>
<?php include 'view/navbar.php' ?>
<?php if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    $progress = show_process($username);
}

$stickers = show_stickers($username);
$progress = count($stickers);
update_process($username, $progress);


if(!empty($progress)){
    $progress = show_process($username);
    $proc = $progress*100/294;
} else{
    $progress = 0;
    $proc = 0;
}
//header('Location: ');

//echo $progress;
?>

<div class="container pad-top">
    <div class="row">
        <div class="col">
            <img class="pp" src="images/<?php if (isset($username)){get_image($username);} else echo 'pp.png'; ?>" width="200" class="pp">
        </div>
        <div class="col-6 div-bottom">
            <?php 
            if(isset($_SESSION['username'])){
                ?><p class='username'><?php
                echo $_SESSION['username']; 
                ?></p><?php
            }
            ?>
            </p>
            <div class="progres-text">
                Your progress:
                <span style="color:#2C5364"><?php echo $progress;?></span>/294
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?php echo $proc;?>" aria-valuemin="0" aria-valuemax="294" style="width: <?php echo $proc;?>%"></div>
            </div>
        </div>
        <div class="col">
        
        </div>
    </div>
</div>
<div class="whitespace-30"></div>
<div class="container pad-top">
    <div class="row">
        <div class="col-sm cards">
            <a href="profile">
                <img src="images/profile.png" width="200">
                <p>Profile</p>
            </a>
        </div>
        <div class="col-sm cards">
            <a href="stickers">
                <img src="images/stickers.png" width="200">
                <p>Stickers</p>
            </a>
        </div>
        <div class="col-sm cards">
            <a href="album">
                <img src="images/album.png" width="200">
                <p>Album</p>
            </a>
        </div>
    </div>
</div>
<div class="whitespace-30"></div>

<?php include 'view/footer.php' ?>