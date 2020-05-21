<?php include '../includes/connection.php';?>
<?php include '../includes/adminheader.php';?>

<body>
  <?php include '../includes/usernav.php';?>
      <div class="container-fluid">
        <h1 class="mt-4">Uploaded files</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <form action="" method="post">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Type </th>
                                    <th>Uploaded on</th>
                                    <th>Uploaded by </th>
                                    <th>Status</th>
                                    <th>View</th>
                                    <th>Ask a query</th>
                                    <th>View queries</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $name = $_SESSION['name'];
                                    $course = $_SESSION['course'];
                                    $query = "SELECT * FROM uploads WHERE file_uploaded_to LIKE '$course' AND status = 'Approved'";
                                    $run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                    if (mysqli_num_rows($run_query) > 0) {
                                    while ($row = mysqli_fetch_array($run_query)) {
                                        $file_id = $row['file_id'];
                                        $file_name = $row['file_name'];
                                        $file_description = $row['file_description'];
                                        $file_type = $row['file_type'];
                                        $file_date = $row['file_uploaded_on'];
                                        $file_uploader = $row['file_uploader'];
                                        $file_status = $row['status'];
                                        $file = $row['file'];

                                        echo "<tr>";
                                        echo "<td>$file_name</td>";
                                        echo "<td>$file_description</td>";
                                        echo "<td>$file_type</td>";
                                        echo "<td>$file_date</td>";
                                        echo "<td><a href='viewprofile.php?name=$file_uploader' target='_blank'> $file_uploader </a></td>";
                                        echo "<td>$file_status</td>";
                                        echo "<td><a href='../../allfiles/$file' target='_blank' style='color:green'>View </a></td>";
                                        echo "<td><a href='askquery.php?id=$file_id' style='color:green'>Ask a query </a></td>";
                                        echo "<td><a href='viewquery.php? id=$file_id' style='color:green'>View queries </a></td>";
                                        echo "</tr>";
                                    }
                                  }
                                ?>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->

</body>

</html>
