<?php $activePage = basename($_SERVER['PHP_SELF']); 

?>
<style>
    .main-nav {
    background: #fafeff;
    z-index: 1;
}
</style>
<?php include_once('./includes/navbar_top.php'); ?>
<nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0" id="navbar_top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="images/gcrea-logo.png" height="100" width="100" alt="GCREA" />
          
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item @@home <?= ($activePage == 'index.php' || $activePage == '') ? 'active':''; ?>">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item @@about <?= ($activePage == 'about.php') ? 'active':''; ?>">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item @@about <?= ($activePage == 'board_members.php') ? 'active':''; ?>">
                    <a class="nav-link" href="board_members.php">Members</a>
                </li>
                  <li class="nav-item @@about <?= ($activePage == 'go.php' || $activePage == 'images.php') ? 'active':''; ?>">
                    <a class="nav-link" href="go.php">Go</a>
                </li>
                 <li class="nav-item @@about <?= ($activePage == 'gallery.php') ? 'active':''; ?>">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item @@contact <?= ($activePage == 'contact.php') ? 'active':''; ?>">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
               
                
            </ul>
        </div>
    </div>
</nav>