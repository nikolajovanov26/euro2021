<?php include 'view/header.php' ?>
<?php include 'view/navbar_admin.php'; ?>

<?php
  if(isset($_POST['remove'])){
    if(isset($_POST['user'])){
      $user=$_POST['user'];
      remove_admin($user);
    }
  } else if(isset($_POST['add'])){
    if(isset($_POST['user'])){
      $user=$_POST['user'];
      add_admin($user);
    }
  }

?>


<?php

if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    $progress = show_process($username);
}

if(!is_admin($username)){
  header("Location: http://localhost/euro2021");
}

is_logged($username);
?>

<div class="container pad-top">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php
    $users = get_users();
    foreach($users as $user){
        ?>
        <tr> 
        <td scope="row"><?php echo $user['username']; ?></td>
        <td><?php echo $user['email']; ?> </td>
        <td><?php
          if(is_admin($user['username'])) {echo "Admin";}
          else echo 'User';
         ?> </td>
         <td>
           <form method="post">
          <?php
            if(is_admin($user['username'])) {
              echo '<input type="hidden" name="user" value="'.$user['username'].'"><input type="submit" value="Remove Admin" name="remove">';
            } else {
              echo '<input type="hidden" name="user" value="'.$user['username'].'"><input type="submit" value="Add Admin" name="add">';
            }
          ?> </form></td>
        <?php
    }
?>
    
  </tbody>
</table>
</div>


    


<?php include 'view/footer.php' ?>