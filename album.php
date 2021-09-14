<?php include 'view/header.php' ?>
<?php include 'view/navbar.php' ?>
<?php if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    $progress = show_process($username);
}

if(!empty($progress)){
    $progress = show_process($username);
} else{
    $progress = 0;
}
?>



<div class="container pad-top">
    <div class="row">
        <div class="col-8">
            <h1>Euro 2021</h1>
            <p> test </p>
            <h2>t</h2>
            <?php echo 'TEST'; ?>
        </div>
        <div class="col-4">
            <figure class="figure">
                <img src="images/euro_logo.jpg" width="500" />
            </figure>
            <div class="progres-text">
                Your progress:
                <span style="color:#2C5364"><?php echo $progress;?></span>/100
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?php echo $progress;?>%" aria-valuenow="<?php echo $progress;?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
</div>


<?php include 'view/footer.php' ?>
