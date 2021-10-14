
<?php 


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


?>

<div class="container pad-top">
    <div class="row">
    <div class="col-sm cards">
            <a href="stickers">
                <img src="images/stickers.png" width="200">
                <p>Stickers</p>
            </a>
        </div>
        <div class="col-sm cards">
            <a href="users">
                <img src="images/profile.png" width="200">
                <p>Users</p>
            </a>
        </div>
    </div>
</div>
<div class="whitespace-30"></div>
