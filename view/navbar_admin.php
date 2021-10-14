<nav class="navbar navbar-expand-lg navbar-dark nav-bg">
    <a class="navbar-brand" href="/euro2021/"><img src="images/logo_white.png" width="120"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse nav-right" id="navbarNav">
        <ul class="navbar-nav nav-white">
        <li class="nav-item active">
            <a class="nav-link" href="/euro2021/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="stickers">Stickers</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="users">Users</a>
        </li>
        
        <?php if(isset($_SESSION['username'])){ ?>
        <li class="nav-item">
            <a class="nav-link" href="login?session=end">Sign Out</a>
        </li>
        <?php } else { ?>
        <li class="nav-item">
            <a class="nav-link" href="login">Sign In</a>
        </li>
        <?php } ?>
        </ul>
    </div>
</nav>