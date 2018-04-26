<nav class="navbar navbar-expand-lg navbar-light sleight-headbg fixed-top">
 <div class="container">
<a href="index.php"><img src="img/sleight.png" class="img-fluid navbar-brand" width="104" height="68"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
 <ul class="navbar-nav">
   <li class="nav-item ">
     <a class="nav-link" href="index.php">Home </a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="#">How It Works</a>
   </li>

   <li class="nav-item dropdown">
     <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <?= $uname; ?>
     </a>
     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
       <a class="dropdown-item" href="user_account.php">Account</a>
       <a class="dropdown-item" href="includes/logout.php">Logout</a>
     </div>
   </li>
 </ul>
</div>
</div>
</nav>
