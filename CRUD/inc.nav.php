<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.php">My Phrase Generator</a>
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li <?php if($_SERVER['PHP_SELF'] == '/index.php'){echo 'class="active"';} ?>><a href="index.php"><i class="icon-list-alt"></i><span>Phrasen</span> </a> </li>
        <li <?php if($_SERVER['PHP_SELF'] == '/phrasen.php'){echo 'class="active"';} ?>><a href="phrasen.php"><i class="icon-large icon-pencil
"></i><span>Erstellen</span> </a> </li>
        <li <?php if($_SERVER['PHP_SELF'] == '/admin.php'){echo 'class="active"';} ?>><a href="admin.php"><i class="icon-user"></i><span>Admin</span> </a></li>
		  <?php if(isset($_SESSION['user261290'])){
		  echo '<li><a href="admin.php?logout=true"><i class="icon-ban-circle "></i><span>Logout</span> </a></li>';
		  }?>
		  <li><a target="_blank" href="https://github.com/BlackAds/Internet-2/tree/master/CRUD"><i class="icon-github-sign"></i><span>GitHub</span> </a> </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->