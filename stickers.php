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

function check_s($i){
    $username = $_SESSION['username'];
    $stickers = show_stickers($username);
    if(in_array($i,$stickers)){
        echo 'disabled';
    }
    //echo 'disabled';
}
              

//echo $progress;
?>

<div class="container pad-top">
    <div class="col">
        <h1>Add Stickers</h1>
    </div>
    <div class="col">
        <form method="post" action="">
            
            <?php
            for($i=1;$i<295;$i++){ ?>
                <label class="inp-st"> 
                    <input type="checkbox" id="st<?php echo $i;?>" name="stickers" value="<?php echo $i;?>" <?php check_s($i); ?> > 
                    <span><?php echo $i;?></span> 
                </label>
            <?php }?>
            <br>
            <input type="submit" value="Save" class="cta">
        </form>
    </div>
    
</div>


<?php include 'view/footer.php' ?>