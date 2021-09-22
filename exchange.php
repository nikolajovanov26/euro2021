<?php include 'view/header.php' ?>
<?php include 'view/navbar.php' ?>
<?php if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    $progress = show_process($username);
}

is_logged($username);

unset($st);
unset($rst);
$st = array();
$rst = array();

$stickers = show_stickers($username);
$exc = show_exc($username);

if(isset($_POST['st'])){
    $st = $_POST['st'];
    foreach ($st as $s){
        add_exc($username,$s);
    }
    header('Location: exchange');
}

if(isset($_POST['rst'])){
    $rst = $_POST['rst'];
    foreach ($rst as $rs){
        remove_exc($username,$rs);
    }
    header('Location: exchange');
}


function check_s($i){
    $username = $_SESSION['username'];
    $stickers = show_stickers($username);
    if(in_array($i,$stickers)){
        return true;
    }
    return false;
}
      

start_exchange();


//echo $progress;
?>

<div class="container pad-top">
    <div class="col">
        <h1>Select Duplicate Stickers</h1>
    </div>
    <div class="col">
        <form method="post" action="">
            
            <?php
            for($i=1;$i<295;$i++){ 
                if(check_s($i)) { ?>
                <label class="inp-st"> 
                    <input type="checkbox" id="st<?php echo $i;?>" name="st[]" value="<?php echo $i;?>" > 
                    <span><?php echo $i;?></span> 
                </label>
            <?php } }?>
            <br>
            <input type="submit" value="Save" class="cta">
        </form>
    </div>
</div>

<div class="container pad-top">
    <div class="col">
        <h2>Current Duplicates</h2>
    </div>
    <div class="col">
        <form method="post" action="">
            
            <?php
            sort($exc);
            foreach($exc as $e){ ?>
                <label class="inp-st"> 
                    <input type="checkbox" id="rst<?php echo $e;?>" name="rst[]" value="<?php echo $e;?>" > 
                    <span><?php echo $e;?></span> 
                </label>
            <?php }?>
            <br>
            <input type="submit" value="Remove Duplicate" class="cta">
        </form>
    </div>
</div>


<?php include 'view/footer.php' ?>