<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Blackboard 2.0 </div>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      <div class="list-group list-group-flush">
        <a href="../admin/index.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="../admin/index.php" class="list-group-item list-group-item-action bg-light">Users</a>
        <a href="../admin/viewprofile.php?name=<?php echo $_SESSION['username']; ?>" class="list-group-item list-group-item-action bg-light">View Profile</a>
        <a href="../admin/userprofile.php?section=<?php echo $_SESSION['username']; ?>" class="list-group-item list-group-item-action bg-light">Edit Profile</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle</button>&nbsp &nbsp
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <h1 class="page-header">
               Welcome <?php echo $_SESSION['name']; ?>
            </h1>
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="../../logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
        <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
      