<?php include 'view/header.php' ?>
<?php if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    $progress = show_process($username);
}

is_logged($username);

if(is_admin($username)){
    include 'view/navbar_admin.php';
    include 'view/admin_stickers.php';
} else { 
    include 'view/navbar.php';
    include 'view/user_stickers.php';
}


?>

<?php include 'view/footer.php' ?>