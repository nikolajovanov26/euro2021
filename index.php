<?php include 'view/header.php' ?>
<?php include 'view/navbar.php' ?>


<div class="container pad-top">
    <div class="row">
        <div class="col">
            <img class="pp" src="images/pp.png" width="200" class="pp">
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
                <span style="color:#2C5364">55</span>/100
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%"></div>
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
